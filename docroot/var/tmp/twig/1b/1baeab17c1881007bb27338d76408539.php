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

/* @bundles/SmsBundle/EventListener/LeadSubscriber.php */
class __TwigTemplate_7fc80c1e1f37b864562d6085aabcdc93 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
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
        private EntityManager \$em
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
        \$this->addSmsEvents(\$event, 'sent');
        \$this->addSmsEvents(\$event, 'failed');
    }

    protected function addSmsEvents(LeadTimelineEvent \$event, \$state)
    {
        // Set available event types
        \$eventTypeKey  = 'sms.'.\$state;
        \$eventTypeName = \$this->translator->trans('mautic.sms.timeline.status.'.\$state);
        \$event->addEventType(\$eventTypeKey, \$eventTypeName);
        \$event->addSerializerGroup('smsList');

        // Decide if those events are filtered
        if (!\$event->isApplicable(\$eventTypeKey)) {
            return;
        }

        /** @var \\Mautic\\SmsBundle\\Entity\\StatRepository \$statRepository */
        \$statRepository        = \$this->em->getRepository(\\Mautic\\SmsBundle\\Entity\\Stat::class);
        \$queryOptions          = \$event->getQueryOptions();
        \$queryOptions['state'] = \$state;
        \$stats                 = \$statRepository->getLeadStats(\$event->getLeadId(), \$queryOptions);

        // Add total to counter
        \$event->addToCounter(\$eventTypeKey, \$stats);

        if (!\$event->isEngagementCount()) {
            // Add the events to the event array
            foreach (\$stats['results'] as \$stat) {
                if (!empty(\$stat['sms_name'])) {
                    \$label = \$stat['sms_name'];
                } else {
                    \$label = \$this->translator->trans('mautic.sms.timeline.event.custom_sms');
                }

                \$eventName = [
                    'label'      => \$label,
                    'href'       => \$this->router->generate('mautic_sms_action', ['objectAction'=>'view', 'objectId' => \$stat['sms_id']]),
                ];
                if ('failed' == \$state or 'sent' == \$state) { // this is to get the correct column for date dateSent
                    \$dateSent = 'sent';
                }

                \$contactId = \$stat['lead_id'];
                unset(\$stat['lead_id']);
                \$event->addEvent(
                    [
                        'event'      => \$eventTypeKey,
                        'eventId'    => \$eventTypeKey.\$stat['id'],
                        'eventLabel' => \$eventName,
                        'eventType'  => \$eventTypeName,
                        'timestamp'  => \$stat['date'.ucfirst(\$dateSent)],
                        'extra'      => [
                            'stat'   => \$stat,
                            'type'   => \$state,
                        ],
                        'contentTemplate' => '@MauticSms/SubscribedEvents/Timeline/index.html.twig',
                        'icon'            => ('read' == \$state) ? 'ri-chat-1-fill' : 'ri-message-2-fill',
                        'contactId'       => \$contactId,
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
        return "@bundles/SmsBundle/EventListener/LeadSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/LeadSubscriber.php", "/app/docroot/app/bundles/SmsBundle/EventListener/LeadSubscriber.php");
    }
}
