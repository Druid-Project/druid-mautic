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

/* @bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php */
class __TwigTemplate_5493adb9067d39108e35e37e8f7af1aa extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class TimelineEventLogCampaignSubscriber implements EventSubscriberInterface
{
    use TimelineEventLogTrait;

    public function __construct(
        LeadEventLogRepository \$eventLogRepository,
        private UserHelper \$userHelper,
        Translator \$translator
    ) {
        \$this->eventLogRepository = \$eventLogRepository;
        \$this->translator         = \$translator;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_LEADCHANGE     => 'onChange',
            CampaignEvents::LEAD_CAMPAIGN_BATCH_CHANGE => 'onBatchChange',
            LeadEvents::TIMELINE_ON_GENERATE           => 'onTimelineGenerate',
        ];
    }

    public function onChange(CampaignLeadChangeEvent \$event): void
    {
        if (!\$contact = \$event->getLead()) {
            return;
        }

        \$this->writeEntries(
            [\$contact],
            \$event->getCampaign(),
            \$event->getAction()
        );
    }

    public function onBatchChange(CampaignLeadChangeEvent \$event): void
    {
        if (!\$contacts = \$event->getLeads()) {
            return;
        }

        \$this->writeEntries(
            \$contacts,
            \$event->getCampaign(),
            \$event->getAction()
        );
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        \$this->addEvents(
            \$event,
            'campaign_membership',
            'mautic.lead.timeline.campaign_membership',
            'ri-time-line',
            'campaign',
            'campaign'
        );
    }

    /**
     * @param Lead[] \$contacts
     */
    private function writeEntries(array \$contacts, Campaign \$campaign, \$action): void
    {
        \$user = \$this->userHelper->getUser();

        \$logs = [];
        foreach (\$contacts as \$contact) {
            \$log = new LeadEventLog();
            \$log->setUserId(\$user->getId())
                ->setUserName(\$user->getUsername() ?: \$this->translator->trans('mautic.core.system'))
                ->setLead(\$contact)
                ->setBundle('campaign')
                ->setAction(\$action)
                ->setObject('campaign')
                ->setObjectId(\$campaign->getId())
                ->setProperties(
                    [
                        'campaign_id'        => \$campaign->getId(),
                        'campaign_name'      => \$campaign->getName(),
                        'object_description' => \$campaign->getName(),
                    ]
                );

            \$logs[] = \$log;
        }

        \$this->eventLogRepository->saveEntities(\$logs);
        \$this->eventLogRepository->detachEntities(\$logs);
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
        return "@bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/TimelineEventLogCampaignSubscriber.php");
    }
}
