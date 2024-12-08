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

/* @bundles/WebhookBundle/EventListener/WebhookSubscriber.php */
class __TwigTemplate_3915217d1f87a9bbb836c5f65a0f42b7 extends Template
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

namespace Mautic\\WebhookBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\WebhookBundle\\Event\\WebhookEvent;
use Mautic\\WebhookBundle\\Notificator\\WebhookKillNotificator;
use Mautic\\WebhookBundle\\WebhookEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class WebhookSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel,
        private WebhookKillNotificator \$webhookKillNotificator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            WebhookEvents::WEBHOOK_POST_SAVE   => ['onWebhookSave', 0],
            WebhookEvents::WEBHOOK_POST_DELETE => ['onWebhookDelete', 0],
            WebhookEvents::WEBHOOK_KILL        => ['onWebhookKill', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onWebhookSave(WebhookEvent \$event): void
    {
        \$webhook = \$event->getWebhook();

        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'webhook',
                'object'    => 'webhook',
                'objectId'  => \$webhook->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onWebhookDelete(WebhookEvent \$event): void
    {
        \$webhook = \$event->getWebhook();
        \$log     = [
            'bundle'    => 'webhook',
            'object'    => 'webhook',
            'objectId'  => \$event->getWebhook()->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$webhook->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }

    /**
     * Send notification about killed webhook.
     */
    public function onWebhookKill(WebhookEvent \$event): void
    {
        \$this->webhookKillNotificator->send(\$event->getWebhook(), \$event->getReason());
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
        return "@bundles/WebhookBundle/EventListener/WebhookSubscriber.php";
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
        return new Source("", "@bundles/WebhookBundle/EventListener/WebhookSubscriber.php", "/app/docroot/app/bundles/WebhookBundle/EventListener/WebhookSubscriber.php");
    }
}
