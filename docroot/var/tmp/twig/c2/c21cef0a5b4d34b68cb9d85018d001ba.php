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

/* @bundles/CampaignBundle/Tests/EventListener/CampaignEventSubscriberTest.php */
class __TwigTemplate_b57b5c0684bab862cfda0d9f60e0abd7 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventListener;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\EventRepository;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\CampaignEvent;
use Mautic\\CampaignBundle\\Event\\FailedEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\EventListener\\CampaignEventSubscriber;
use Mautic\\CampaignBundle\\Executioner\\Helper\\NotificationHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class CampaignEventSubscriberTest extends TestCase
{
    private CampaignEventSubscriber \$fixture;

    /**
     * @var EventRepository|MockObject
     */
    private \$eventRepo;

    /**
     * @var NotificationHelper|MockObject
     */
    private \$notificationHelper;

    /**
     * @var CampaignRepository|MockObject
     */
    private \$campaignRepository;

    public function setUp(): void
    {
        \$this->eventRepo          = \$this->createMock(EventRepository::class);
        \$this->notificationHelper = \$this->createMock(NotificationHelper::class);
        \$this->campaignRepository = \$this->createMock(CampaignRepository::class);
        \$this->fixture            = new CampaignEventSubscriber(\$this->eventRepo, \$this->notificationHelper, \$this->campaignRepository);
    }

    public function testEventFailedCountsGetResetOnCampaignPublish(): void
    {
        \$campaign = new Campaign();
        // Ensure the campaign is unpublished
        \$campaign->setIsPublished(false);
        // Go from unpublished to published.
        \$campaign->setIsPublished(true);

        \$this->eventRepo->expects(\$this->once())
            ->method('resetFailedCountsForEventsInCampaign')
            ->with(\$campaign);

        \$this->fixture->onCampaignPreSave(new CampaignEvent(\$campaign));
    }

    public function testEventFailedCountsDoesNotGetResetOnCampaignUnPublish(): void
    {
        \$campaign = new Campaign();
        // Ensure the campaign is published
        \$campaign->setIsPublished(true);
        // Go from published to unpublished.
        \$campaign->setIsPublished(false);

        \$this->eventRepo->expects(\$this->never())
            ->method('resetFailedCountsForEventsInCampaign');

        \$this->fixture->onCampaignPreSave(new CampaignEvent(\$campaign));
    }

    public function testEventFailedCountsDoesNotGetResetWhenPublishedStateIsNotChanged(): void
    {
        \$campaign = new Campaign();

        \$this->eventRepo->expects(\$this->never())
            ->method('resetFailedCountsForEventsInCampaign');

        \$this->fixture->onCampaignPreSave(new CampaignEvent(\$campaign));
    }

    public function testFailedEventGeneratesANotification(): void
    {
        \$mockLead     = \$this->createMock(Lead::class);
        \$mockCampaign = \$this->createMock(Campaign::class);
        \$mockCampaign->expects(\$this->once())
            ->method('getLeads')
            ->willReturn(new ArrayCollection(range(0, 99)));

        \$mockEvent = \$this->createMock(Event::class);
        \$mockEvent->expects(\$this->once())
            ->method('getCampaign')
            ->willReturn(\$mockCampaign);

        \$mockEventLog = \$this->createMock(LeadEventLog::class);
        \$mockEventLog->expects(\$this->once())
            ->method('getEvent')
            ->willReturn(\$mockEvent);

        \$mockEventLog->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$mockLead);

        // Set failed count to 5% of getLeads()->count()
        \$this->eventRepo->expects(\$this->once())
            ->method('incrementFailedCount')
            ->with(\$mockEvent)
            ->willReturn(5);

        \$this->notificationHelper->expects(\$this->once())
            ->method('notifyOfFailure')
            ->with(\$mockLead, \$mockEvent);

        \$failedEvent = new FailedEvent(\$this->createMock(AbstractEventAccessor::class), \$mockEventLog);

        \$this->fixture->onEventFailed(\$failedEvent);
    }

    public function testFailedCountOverDisableCampaignThresholdDisablesTheCampaign(): void
    {
        \$mockLead     = \$this->createMock(Lead::class);
        \$mockCampaign = \$this->createMock(Campaign::class);
        \$mockCampaign->expects(\$this->once())
            ->method('isPublished')
            ->willReturn(true);

        \$mockCampaign->expects(\$this->once())
            ->method('getLeads')
            ->willReturn(new ArrayCollection(range(0, 99)));

        \$mockEvent = \$this->createMock(Event::class);
        \$mockEvent->expects(\$this->once())
            ->method('getCampaign')
            ->willReturn(\$mockCampaign);

        \$mockEventLog = \$this->createMock(LeadEventLog::class);
        \$mockEventLog->expects(\$this->once())
            ->method('getEvent')
            ->willReturn(\$mockEvent);

        \$mockEventLog->expects(\$this->once())
            ->method('getLead')
            ->willReturn(\$mockLead);

        // Set failed count to 10% of getLeads()->count()
        \$this->eventRepo->expects(\$this->once())
            ->method('incrementFailedCount')
            ->with(\$mockEvent)
            ->willReturn(10);

        \$this->notificationHelper->expects(\$this->once())
            ->method('notifyOfFailure')
            ->with(\$mockLead, \$mockEvent);

        \$this->notificationHelper->expects(\$this->once())
            ->method('notifyOfUnpublish')
            ->with(\$mockEvent);

        \$failedEvent = new FailedEvent(\$this->createMock(AbstractEventAccessor::class), \$mockEventLog);

        \$this->campaignRepository->expects(\$this->once())
            ->method('saveEntity')
            ->with(\$mockCampaign);

        \$mockCampaign->expects(\$this->once())
            ->method('setIsPublished')
            ->with(false);

        \$this->fixture->onEventFailed(\$failedEvent);
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
        return "@bundles/CampaignBundle/Tests/EventListener/CampaignEventSubscriberTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventListener/CampaignEventSubscriberTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/EventListener/CampaignEventSubscriberTest.php");
    }
}
