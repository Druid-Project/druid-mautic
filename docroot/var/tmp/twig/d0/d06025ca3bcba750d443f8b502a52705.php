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

/* @bundles/CampaignBundle/Tests/Executioner/ContactFinder/KickoffContactFinderTest.php */
class __TwigTemplate_f9a2172820826c0719291f606e3d0707 extends Template
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
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\KickoffContactFinder;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\NullLogger;

class KickoffContactFinderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|LeadRepository
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$leadRepository;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CampaignRepository
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$campaignRepository;

    protected function setUp(): void
    {
        \$this->leadRepository = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->campaignRepository = \$this->getMockBuilder(CampaignRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testNoContactsFoundExceptionIsThrown(): void
    {
        \$this->campaignRepository->expects(\$this->once())
            ->method('getPendingContactIds')
            ->willReturn([]);

        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(0, 0, 0, 0);
        \$this->getContactFinder()->getContacts(1, \$limiter);
    }

    public function testNoContactsFoundExceptionIsThrownIfEntitiesAreNotFound(): void
    {
        \$contactIds = [1, 2];

        \$this->campaignRepository->expects(\$this->once())
            ->method('getPendingContactIds')
            ->willReturn(\$contactIds);

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(new ArrayCollection([]));

        \$this->expectException(NoContactsFoundException::class);

        \$limiter = new ContactLimiter(0, 0, 0, 0);
        \$this->getContactFinder()->getContacts(1, \$limiter);
    }

    public function testArrayCollectionIsReturnedForFoundContacts(): void
    {
        \$contactIds = [1, 2];

        \$this->campaignRepository->expects(\$this->once())
            ->method('getPendingContactIds')
            ->willReturn(\$contactIds);

        \$foundContacts = new ArrayCollection([new Lead(), new Lead()]);
        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(\$foundContacts);

        \$limiter = new ContactLimiter(0, 0, 0, 0);
        \$this->assertEquals(\$foundContacts, \$this->getContactFinder()->getContacts(1, \$limiter));
    }

    /**
     * @return KickoffContactFinder
     */
    private function getContactFinder()
    {
        return new KickoffContactFinder(
            \$this->leadRepository,
            \$this->campaignRepository,
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
        return "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/KickoffContactFinderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/KickoffContactFinderTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/ContactFinder/KickoffContactFinderTest.php");
    }
}
