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

/* @bundles/StageBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_cfcefbd4dec74372d2be5e0bc30fc527 extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\LeadBundle\\Entity\\StagesChangeLogRepository;
use Mautic\\LeadBundle\\Event\\LeadMergeEvent;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\StageBundle\\Entity\\LeadStageLogRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private StagesChangeLogRepository \$stagesChangeLogRepository,
        private LeadStageLogRepository \$leadStageLogRepository,
        private TranslatorInterface \$translator,
        private RouterInterface \$router
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
            LeadEvents::LEAD_POST_MERGE      => ['onLeadMerge', 0],
        ];
    }

    /**
     * Compile events for the lead timeline.
     */
    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        // Set available event types
        \$eventTypeKey  = 'stage.changed';
        \$eventTypeName = \$this->translator->trans('mautic.stage.event.changed');
        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup('stageList');

        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        \$logs = \$this->stagesChangeLogRepository->getLeadTimelineEvents(\$event->getLeadId(), \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventTypeKey, \$logs);

        if (!\$event->isEngagementCount()) {
            // Add the logs to the event array
            foreach (\$logs['results'] as \$log) {
                if (isset(\$log['reference']) && null != \$log['reference']) {
                    \$eventLabel = [
                        'label'      => \$log['eventName'],
                        'href'       => \$this->router->generate('mautic_stage_action', ['objectAction' => 'edit', 'objectId' => \$log['reference']]),
                        'isExternal' => false,
                    ];
                } else {
                    \$eventLabel = \$log['eventName'];
                }

                \$event->addEvent(
                    [
                        'event'      => \$eventTypeKey,
                        'eventId'    => \$eventTypeKey.\$log['id'],
                        'eventLabel' => \$eventLabel,
                        'eventType'  => \$eventTypeName,
                        'timestamp'  => \$log['dateAdded'],
                        'extra'      => [
                            'log' => \$log,
                        ],
                        'icon'      => 'ri-speed-up-line',
                        'contactId' => \$log['lead_id'],
                    ]
                );
            }
        }
    }

    public function onLeadMerge(LeadMergeEvent \$event): void
    {
        \$this->leadStageLogRepository->updateLead(
            \$event->getLoser()->getId(),
            \$event->getVictor()->getId()
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
        return "@bundles/StageBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/LeadSubscriber.php", "/app/docroot/app/bundles/StageBundle/EventListener/LeadSubscriber.php");
    }
}
