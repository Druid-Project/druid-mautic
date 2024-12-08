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

/* @bundles/SmsBundle/EventListener/ReplySubscriber.php */
class __TwigTemplate_76cfeead203cdd982a02677b994ec628 extends Template
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

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\LeadEventLogRepository;
use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;
use Mautic\\LeadBundle\\EventListener\\TimelineEventLogTrait;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReplySubscriber implements EventSubscriberInterface
{
    use TimelineEventLogTrait;

    public function __construct(Translator \$translator, LeadEventLogRepository \$eventLogRepository)
    {
        \$this->translator         = \$translator;
        \$this->eventLogRepository = \$eventLogRepository;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SmsEvents::ON_REPLY              => ['onReply', 0],
            LeadEvents::TIMELINE_ON_GENERATE => 'onTimelineGenerate',
        ];
    }

    public function onReply(ReplyEvent \$event): void
    {
        \$message = \$event->getMessage();
        \$contact = \$event->getContact();

        \$log = new LeadEventLog();
        \$log
            ->setLead(\$contact)
            ->setBundle('sms')
            ->setObject('sms')
            ->setAction('reply')
            ->setProperties(
                [
                    'message' => InputHelper::clean(\$message),
                ]
            );

        \$this->eventLogRepository->saveEntity(\$log);
        \$this->eventLogRepository->detachEntity(\$log);
        \$event->setEventLog(\$log);
    }

    public function onTimelineGenerate(LeadTimelineEvent \$event): void
    {
        \$this->addEvents(
            \$event,
            'sms_reply',
            'mautic.sms.timeline.reply',
            'ri-smartphone-line',
            'sms',
            'sms',
            'reply',
            '@MauticSms/SubscribedEvents/Timeline/reply.html.twig'
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
        return "@bundles/SmsBundle/EventListener/ReplySubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/ReplySubscriber.php", "/app/docroot/app/bundles/SmsBundle/EventListener/ReplySubscriber.php");
    }
}
