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

/* @bundles/ChannelBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_86277ffb4c39f6e0a0f081c2ba33e662 extends Template
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

namespace Mautic\\ChannelBundle\\EventListener;

use Mautic\\ChannelBundle\\Entity\\MessageQueueRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TranslatorInterface \$translator,
        private RouterInterface \$router,
        private MessageQueueRepository \$messageQueueRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::TIMELINE_ON_GENERATE => ['onTimelineGenerate', 0],
        ];
    }

    /**
     * Compile events for the lead timeline.
     */
    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        \$eventTypeKey  = 'message.queue';
        \$eventTypeName = \$this->translator->trans('mautic.message.queue');

        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup('messageQueueList');

        \$label = \$this->translator->trans('mautic.queued.channel');

        // Decide if those events are filtered
        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        \$logs = \$this->messageQueueRepository->getLeadTimelineEvents(\$event->getLeadId(), \$event->getQueryOptions());

        // Add to counter
        \$event->addToCounter(\$eventTypeKey, \$logs);

        if (!\$event->isEngagementCount()) {
            // Add the logs to the event array
            foreach (\$logs['results'] as \$log) {
                \$eventName = [
                    'label' => \$label.\$log['channelName'].' '.\$log['channelId'],
                    'href'  => \$this->router->generate('mautic_'.\$log['channelName'].'_action', ['objectAction' => 'view', 'objectId' => \$log['channelId']]),
                ];
                \$event->addEvent(
                    [
                        'eventId'    => \$eventTypeKey.\$log['id'],
                        'event'      => \$eventTypeKey,
                        'eventLabel' => \$eventName,
                        'eventType'  => \$eventTypeName,
                        'timestamp'  => \$log['dateAdded'],
                        'extra'      => [
                            'log' => \$log,
                        ],
                        'contentTemplate' => '@MauticChannel/SubscribedEvents/Timeline/queued_messages.html.twig',
                        'icon'            => 'ri-question-answer-line',
                        'contactId'       => \$log['lead_id'],
                    ]
                );
            }
        }
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
        return "@bundles/ChannelBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/ChannelBundle/EventListener/LeadSubscriber.php", "/app/docroot/app/bundles/ChannelBundle/EventListener/LeadSubscriber.php");
    }
}
