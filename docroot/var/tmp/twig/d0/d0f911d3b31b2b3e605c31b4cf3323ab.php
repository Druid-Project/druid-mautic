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

/* @bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php */
class __TwigTemplate_201f71a551b78d378a72abc078c68094 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Logger;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Executioner\\Logger\\EventLogger;
use Mautic\\CampaignBundle\\Model\\SummaryModel;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class EventLoggerTest extends TestCase
{
    /**
     * @var LeadRepository|MockObject
     */
    private MockObject \$ipLookupHelper;

    /**
     * @var ContactTracker|MockObject
     */
    private MockObject \$contactTracker;

    /**
     * @var LeadEventLogRepository|MockObject
     */
    private MockObject \$leadEventLogRepository;

    /**
     * @var LeadRepository|MockObject
     */
    private MockObject \$leadRepository;

    /**
     * @var SummaryModel|MockObject
     */
    private MockObject \$summaryModel;

    protected function setUp(): void
    {
        \$this->ipLookupHelper         = \$this->createMock(IpLookupHelper::class);
        \$this->contactTracker         = \$this->createMock(ContactTracker::class);
        \$this->leadEventLogRepository = \$this->createMock(LeadEventLogRepository::class);
        \$this->leadRepository         = \$this->createMock(LeadRepository::class);
        \$this->summaryModel           = \$this->createMock(SummaryModel::class);
    }

    public function testAllLogsAreReturnedWithFinalPersist(): void
    {
        \$logCollection = new ArrayCollection();
        while (\$logCollection->count() < 60) {
            \$log = \$this->createMock(LeadEventLog::class);
            \$log->method('getId')
                ->willReturn(\$logCollection->count() + 1);

            \$logCollection->add(\$log);
        }

        \$this->leadEventLogRepository->expects(\$this->exactly(3))
            ->method('saveEntities');

        \$logger = \$this->getLogger();
        foreach (\$logCollection as \$log) {
            \$logger->queueToPersist(\$log);
        }

        \$persistedLogs = \$logger->persistQueuedLogs();

        \$this->assertEquals(\$persistedLogs->count(), \$logCollection->count());
        \$this->assertEquals(\$logCollection->getValues(), \$persistedLogs->getValues());
    }

    public function testBuildLogEntry(): void
    {
        \$this->ipLookupHelper->method('getIpAddress')->willReturn(new IpAddress());

        \$this->leadRepository->expects(\$this->exactly(3))
            ->method('getContactRotations')
            ->willReturnOnConsecutiveCalls(
                [1 => ['rotation' => 1, 'manually_removed' => 0]],
                [1 => ['rotation' => 2, 'manually_removed' => 0]],
                [1 => ['rotation' => 1, 'manually_removed' => 0]],
            );

        \$campaign = \$this->createMock(Campaign::class);
        \$campaign->method('getId')->willReturnOnConsecutiveCalls([1, 1, 2]);

        \$event = \$this->createMock(Event::class);
        \$event->method('getCampaign')->willReturn(\$campaign);

        \$contact = \$this->createMock(Lead::class);
        \$contact->method('getId')->willReturn(1);

        // rotation for campaign 1 and contact 1
        \$log = \$this->getLogger()->buildLogEntry(\$event, \$contact, false);
        \$this->assertEquals(1, \$log->getRotation());

        // rotation for campaign 1 and contact 1
        \$log = \$this->getLogger()->buildLogEntry(\$event, \$contact, false);
        \$this->assertEquals(2, \$log->getRotation());

        // rotation for campaign 2 and contact 1
        \$log = \$this->getLogger()->buildLogEntry(\$event, \$contact, false);
        \$this->assertEquals(1, \$log->getRotation());
    }

    private function getLogger(): EventLogger
    {
        return new EventLogger(
            \$this->ipLookupHelper,
            \$this->contactTracker,
            \$this->leadEventLogRepository,
            \$this->leadRepository,
            \$this->summaryModel
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
        return "@bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/Logger/EventLoggerTest.php");
    }
}
