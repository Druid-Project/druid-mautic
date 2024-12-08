<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CampaignBundle/Tests/Membership/MembershipBuilderTest.php */
class __TwigTemplate_fb35cdad9f6b3b846f35fe544115b4fe extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

declare(strict_types=1);

namespace Mautic\\CampaignBundle\\Tests\\Membership;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\LeadRepository as CampaignMemberRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Membership\\MembershipBuilder;
use Mautic\\CampaignBundle\\Membership\\MembershipManager;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class MembershipBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MembershipManager|MockObject
     */
    private MockObject \$manager;

    /**
     * @var CampaignMemberRepository|MockObject
     */
    private MockObject \$campaignMemberRepository;

    /**
     * @var LeadRepository|MockObject
     */
    private MockObject \$leadRepository;

    /**
     * @var TranslatorInterface|MockObject
     */
    private MockObject \$translator;

    private MembershipBuilder \$membershipBuilder;

    protected function setUp(): void
    {
        \$this->manager                  = \$this->createMock(MembershipManager::class);
        \$this->campaignMemberRepository = \$this->createMock(CampaignMemberRepository::class);
        \$this->leadRepository           = \$this->createMock(LeadRepository::class);
        \$this->translator               = \$this->createMock(TranslatorInterface::class);
        \$this->membershipBuilder        = new MembershipBuilder(
            \$this->manager,
            \$this->campaignMemberRepository,
            \$this->leadRepository,
            \$this->translator
        );
    }

    public function testContactCountIsSkippedWhenOutputIsNull(): void
    {
        \$campaign       = new Campaign();
        \$contactLimiter = new ContactLimiter(100);

        \$this->campaignMemberRepository->expects(\$this->never())
            ->method('getCountsForCampaignContactsBySegment');

        \$this->campaignMemberRepository->expects(\$this->never())
            ->method('getCountsForOrphanedContactsBySegments');

        \$this->campaignMemberRepository->expects(\$this->once())
            ->method('getCampaignContactsBySegments')
            ->willReturn([]);

        \$this->campaignMemberRepository->expects(\$this->once())
            ->method('getOrphanedContacts')
            ->willReturn([]);

        \$this->membershipBuilder->build(\$campaign, \$contactLimiter, 1000);
    }

    public function testContactsAreNotRemovedIfRunLimitReachedWhileAdding(): void
    {
        \$campaign       = new Campaign();
        \$contactLimiter = new ContactLimiter(100);

        \$this->campaignMemberRepository->expects(\$this->once())
            ->method('getCampaignContactsBySegments')
            ->willReturn([20, 21, 22]);

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(new ArrayCollection([new Lead(), new Lead(), new Lead()]));

        \$this->campaignMemberRepository->expects(\$this->never())
            ->method('getOrphanedContacts');

        \$this->membershipBuilder->build(\$campaign, \$contactLimiter, 2);
    }

    public function testWhileLoopBreaksWithNoMoreContacts(): void
    {
        \$campaign = new class() extends Campaign {
            public function getId()
            {
                return 111;
            }
        };

        \$contactLimiter = new ContactLimiter(1);

        \$this->campaignMemberRepository->expects(\$this->exactly(4))
            ->method('getCampaignContactsBySegments')
            ->withConsecutive(
                [111, \$contactLimiter, false],
                [111, \$contactLimiter, false],
                [111, \$contactLimiter, false],
                [111, \$contactLimiter, false]
            )
            ->willReturnOnConsecutiveCalls([20], [21], [22], []);

        \$this->manager->expects(\$this->exactly(3))
            ->method('addContacts');

        \$this->campaignMemberRepository->expects(\$this->exactly(4))
            ->method('getOrphanedContacts')
            ->willReturnOnConsecutiveCalls([23], [24], [25], []);

        \$this->manager->expects(\$this->exactly(3))
            ->method('removeContacts');

        \$this->leadRepository->expects(\$this->exactly(6))
            ->method('getContactCollection')
            ->willReturn(new ArrayCollection([new Lead()]));

        \$this->membershipBuilder->build(\$campaign, \$contactLimiter, 100);
    }

    public function testWhileLoopBreaksWithNoMoreContactsForRepeatableCampaign(): void
    {
        \$campaign = new class() extends Campaign {
            public function getId()
            {
                return 111;
            }
        };

        \$campaign->setAllowRestart(true);

        \$contactLimiter = new ContactLimiter(1);

        \$this->campaignMemberRepository->expects(\$this->exactly(4))
            ->method('getCampaignContactsBySegments')
            ->withConsecutive(
                [111, \$contactLimiter, true],
                [111, \$contactLimiter, true],
                [111, \$contactLimiter, true],
                [111, \$contactLimiter, true]
            )
            ->willReturnOnConsecutiveCalls([20], [21], [22], []);

        \$this->manager->expects(\$this->exactly(3))
            ->method('addContacts');

        \$this->campaignMemberRepository->expects(\$this->exactly(4))
            ->method('getOrphanedContacts')
            ->willReturnOnConsecutiveCalls([23], [24], [25], []);

        \$this->manager->expects(\$this->exactly(3))
            ->method('removeContacts');

        \$this->leadRepository->expects(\$this->exactly(6))
            ->method('getContactCollection')
            ->willReturn(new ArrayCollection([new Lead()]));

        \$this->membershipBuilder->build(\$campaign, \$contactLimiter, 100);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CampaignBundle/Tests/Membership/MembershipBuilderTest.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CampaignBundle/Tests/Membership/MembershipBuilderTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Membership/MembershipBuilderTest.php");
    }
}
