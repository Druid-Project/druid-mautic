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

/* @bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php */
class __TwigTemplate_cb292445e604394f3c8997a2a843353a extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\ContactFinder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadRepository as CampaignLeadRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\InactiveContactFinder;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\NullLogger;

class InactiveContactFinderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LeadRepository
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$leadRepository;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CampaignLeadRepository
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$campaignLeadRepository;

    protected function setUp(): void
    {
        \$this->leadRepository         = \$this->createMock(LeadRepository::class);
        \$this->campaignLeadRepository = \$this->createMock(CampaignLeadRepository::class);
    }

    public function testNoContactsFoundExceptionIsThrown(): void
    {
        \$this->campaignLeadRepository->expects(\$this->once())
            ->method('getInactiveContacts')
            ->willReturn([]);

        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(0, 0, 0, 0);
        \$this->getContactFinder()->getContacts(1, new Event(), \$limiter);
    }

    public function testNoContactsFoundExceptionIsThrownIfEntitiesAreNotFound(): void
    {
        \$contactMemberDates = [
            1 => new \\DateTime(),
        ];

        \$this->campaignLeadRepository->expects(\$this->once())
            ->method('getInactiveContacts')
            ->willReturn(\$contactMemberDates);

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(new ArrayCollection([]));

        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(0, 0, 0, 0);
        \$this->getContactFinder()->getContacts(1, new Event(), \$limiter);
    }

    public function testContactsAreFoundAndStoredInCampaignMemberDatesAdded(): void
    {
        \$contactMemberDates = [
            1 => new \\DateTime(),
        ];

        \$this->campaignLeadRepository->expects(\$this->once())
            ->method('getInactiveContacts')
            ->willReturn(\$contactMemberDates);

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(new ArrayCollection([new Lead()]));

        \$contactFinder = \$this->getContactFinder();

        \$limiter  = new ContactLimiter(0, 0, 0, 0);
        \$contacts = \$contactFinder->getContacts(1, new Event(), \$limiter);
        \$this->assertCount(1, \$contacts);

        \$this->assertEquals(\$contactMemberDates, \$contactFinder->getDatesAdded());
    }

    /**
     * @return InactiveContactFinder
     */
    private function getContactFinder()
    {
        return new InactiveContactFinder(
            \$this->leadRepository,
            \$this->campaignLeadRepository,
            new NullLogger()
        );
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
        return "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/ContactFinder/InactiveContactFinderTest.php");
    }
}
