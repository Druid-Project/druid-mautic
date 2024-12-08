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

/* @bundles/CampaignBundle/Tests/Helper/InactiveHelperTest.php */
class __TwigTemplate_8b9891a244b4f0344bb46fbd6ab1969d extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Helper;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\EventRepository;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\InactiveContactFinder;
use Mautic\\CampaignBundle\\Executioner\\Helper\\DecisionHelper;
use Mautic\\CampaignBundle\\Executioner\\Helper\\InactiveHelper;
use Mautic\\CampaignBundle\\Executioner\\Scheduler\\EventScheduler;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Psr\\Log\\LoggerInterface;

class InactiveHelperTest extends TestCase
{
    /**
     * @var EventScheduler|MockObject
     */
    private MockObject \$scheduler;

    /**
     * @var InactiveContactFinder|MockObject
     */
    private MockObject \$inactiveContactFinder;

    /**
     * @var LeadEventLogRepository|MockObject
     */
    private MockObject \$eventLogRepository;

    /**
     * @var EventRepository|MockObject
     */
    private MockObject \$eventRepository;

    /**
     * @var LeadRepository|MockObject
     */
    private MockObject \$leadRepository;

    /**
     * @var LoggerInterface|MockObject
     */
    private MockObject \$logger;

    private InactiveHelper \$inactiveHelper;

    private DecisionHelper \$decisionHelper;

    protected function setUp(): void
    {
        \$this->scheduler             = \$this->createMock(EventScheduler::class);
        \$this->inactiveContactFinder = \$this->createMock(InactiveContactFinder::class);
        \$this->eventLogRepository    = \$this->createMock(LeadEventLogRepository::class);
        \$this->eventRepository       = \$this->createMock(EventRepository::class);
        \$this->leadRepository        = \$this->createMock(LeadRepository::class);
        \$this->logger                = \$this->createMock(LoggerInterface::class);
        \$this->decisionHelper        = new DecisionHelper(\$this->leadRepository);
        \$this->inactiveHelper        = new InactiveHelper(
            \$this->scheduler,
            \$this->inactiveContactFinder,
            \$this->eventLogRepository,
            \$this->eventRepository,
            \$this->logger,
            \$this->decisionHelper
        );
    }

    public function testRemoveContactsThatAreNotApplicable(): void
    {
        \$lastActiveEventId = 6;

        // lead not applicable because of parent negative path taken
        \$leadNegative = new Lead();
        \$leadNegative->setId(9);

        // lead not applicable because of parent positive path taken
        \$leadNegative2 = new Lead();
        \$leadNegative2->setId(10);

        // applicable lead
        \$leadPositive = new Lead();
        \$leadPositive->setId(12);

        // lead not applicable because of no parent event log
        \$leadNegative3 = new Lead();
        \$leadNegative3->setId(11);

        \$this->eventLogRepository->expects(\$this->once())
            ->method('getDatesExecuted')
            ->willReturn([
                \$leadNegative->getId()  => \\DateTime::createFromFormat('Y-m-d H:i:s', '2022-05-28 21:37:00'),
                \$leadNegative2->getId() => \\DateTime::createFromFormat('Y-m-d H:i:s', '2022-05-28 21:37:00'),
                \$leadPositive->getId()  => \\DateTime::createFromFormat('Y-m-d H:i:s', '2022-05-28 21:37:00'),
                \$leadNegative3->getId() => \\DateTime::createFromFormat('Y-m-d H:i:s', '2022-05-28 21:37:00'),
            ]);

        /** @var LeadEventLog&MockObject */
        \$log = \$this->createMock(LeadEventLog::class);
        \$log->expects(\$this->exactly(3))
            ->method('getNonActionPathTaken')
            ->will(\$this->onConsecutiveCalls(1, 0, 1));

        /** @var Campaign&MockObject */
        \$campaign = \$this->createMock(Campaign::class);
        \$campaign->expects(\$this->any())
            ->method('getId')
            ->willReturn(2);

        /** @var Event&MockObject */
        \$parentEvent = \$this->createMock(Event::class);
        \$parentEvent->expects(\$this->exactly(4))
            ->method('getLogByContactAndRotation')
            ->will(\$this->onConsecutiveCalls(\$log, \$log, \$log, null));

        \$event = new Event();
        \$event->setParent(\$parentEvent);
        \$event->setDecisionPath('yes');
        \$event->setCampaign(\$campaign);
        \$event->setEventType(Event::TYPE_DECISION);

        \$parentEvent->expects(\$this->any())
            ->method('getNegativeChildren')
            ->will(\$this->onConsecutiveCalls(new ArrayCollection(), new ArrayCollection([\$event])));

        \$parentEvent->expects(\$this->any())
            ->method('getPositiveChildren')
            ->will(\$this->onConsecutiveCalls(new ArrayCollection(), new ArrayCollection()));

        \$this->leadRepository->expects(\$this->exactly(4))
            ->method('getContactRotations')
            ->willReturn([]);

        \$this->scheduler->expects(\$this->any())
            ->method('getExecutionDateTime')
            ->willReturn(\\DateTime::createFromFormat('Y-m-d H:i:s', '2022-05-30 12:00:00'));

        \$now      = \\DateTime::createFromFormat('Y-m-d H:i:s', '2022-05-31 12:00:00');
        \$contacts = new ArrayCollection([
            \$leadNegative->getId()  => \$leadNegative,
            \$leadNegative2->getId() => \$leadNegative2,
            \$leadPositive->getId()  => \$leadPositive,
            \$leadNegative3->getId() => \$leadNegative3,
        ]);

        \$this->inactiveHelper->removeContactsThatAreNotApplicable(
            \$now,
            \$contacts,
            \$lastActiveEventId,
            new ArrayCollection([new Event()]),
            \$event
        );

        \$this->assertEquals(1, \$contacts->count());
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
        return "@bundles/CampaignBundle/Tests/Helper/InactiveHelperTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Helper/InactiveHelperTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Helper/InactiveHelperTest.php");
    }
}
