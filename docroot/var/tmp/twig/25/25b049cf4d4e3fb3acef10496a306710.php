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

/* @bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php */
class __TwigTemplate_4669484247e412af481428c35bd2e3d2 extends Template
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

namespace Mautic\\IntegrationsBundle\\EventListener;

use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class TimelineSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LeadEventLogRepository \$eventLogRepository,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
        ];
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        \$eventType     = 'integration_sync_issues';
        \$eventTypeName = \$this->translator->trans('mautic.integration.sync.timeline_notices');
        \$event->addEventType(\$eventType, \$eventTypeName);

        if (!\$event->isApplicable(\$eventType)) {
            return;
        }

        \$events = \$this->eventLogRepository->getEvents(\$event->getLead(), 'integrations', null, 'sync', \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventType, \$events);

        if (\$event->isEngagementCount()) {
            return;
        }

        // Add the logs to the event array
        foreach (\$events['results'] as \$log) {
            \$event->addEvent(
                \$this->getEventEntry(\$log, \$eventType, \$eventTypeName)
            );
        }
    }

    /**
     * @param mixed[] \$log
     *
     * @return mixed[]
     */
    private function getEventEntry(array \$log, string \$eventType, string \$eventTypeName): array
    {
        \$properties = json_decode(\$log['properties'], true);

        return [
            'event'           => \$eventType,
            'eventId'         => \$eventType.\$log['id'],
            'eventType'       => \$eventTypeName,
            'eventLabel'      => \$this->translator->trans(
                'mautic.integration.sync.user_notification.header',
                [
                    '%integration%' => \$properties['integration'],
                    '%object%'      => \$properties['object'],
                ]
            ),
            'timestamp'       => \$log['date_added'],
            'icon'            => 'ri-refresh-line',
            'contactId'       => \$log['lead_id'],
            'contentTemplate' => '@Integrations/Timeline/index.html.twig',
            'extra'           => \$properties,
        ];
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
        return "@bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php", "/app/docroot/app/bundles/IntegrationsBundle/EventListener/TimelineSubscriber.php");
    }
}
