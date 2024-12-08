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

/* @bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php */
class __TwigTemplate_9c232868276498756d25b20d450d3789 extends Template
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
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\ScheduledContactFinder;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\NullLogger;

class ScheduledContactFinderTest extends \\PHPUnit\\Framework\\TestCase
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

    public function testHydratedLeadsFromRepositoryAreFoundAndPushedIntoLogs(): void
    {
        \$lead1 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead1->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(1);

        \$lead2 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead2->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(2);

        \$log1 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log1->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead1);
        \$log1->expects(\$this->once())
            ->method('setLead');

        \$log2 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log2->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead2);
        \$log2->expects(\$this->once())
            ->method('setLead');

        \$logs = new ArrayCollection(
            [
                1 => \$log1,
                2 => \$log2,
            ]
        );

        \$contacs = new ArrayCollection(
            [
                1 => \$lead1,
                2 => \$lead2,
            ]
        );

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(\$contacs);

        \$this->getContactFinder()->hydrateContacts(\$logs);
    }

    public function testHydratedLeadsFromRepositoryWithMissingLeadResultsLogBeingRemoved(): void
    {
        \$lead1 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead1->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(1);

        \$lead2 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead2->expects(\$this->exactly(2))
            ->method('getId')
            ->willReturn(2);

        \$log1 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log1->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead1);
        \$log1->expects(\$this->once())
            ->method('setLead');

        \$log2 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log2->expects(\$this->exactly(2))
            ->method('getLead')
            ->willReturn(\$lead2);
        \$log2->expects(\$this->never())
            ->method('setLead');

        \$logs = new ArrayCollection(
            [
                1 => \$log1,
                2 => \$log2,
            ]
        );

        \$contacs = new ArrayCollection(
            [
                1 => \$lead1,
            ]
        );

        \$this->leadRepository->expects(\$this->once())
            ->method('getContactCollection')
            ->willReturn(\$contacs);

        \$this->getContactFinder()->hydrateContacts(\$logs);

        \$this->assertCount(1, \$logs);
    }

    public function testNoContactsFoundExceptionIsThrownIfEntitiesAreNotFound(): void
    {
        \$this->leadRepository->expects(\$this->never())
            ->method('getContactCollection');

        \$this->expectException(NoContactsFoundException::class);

        \$this->getContactFinder()->hydrateContacts(new ArrayCollection());
    }

    /**
     * @return ScheduledContactFinder
     */
    private function getContactFinder()
    {
        return new ScheduledContactFinder(
            \$this->leadRepository,
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
        return "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/ContactFinder/ScheduledContactFinderTest.php");
    }
}
