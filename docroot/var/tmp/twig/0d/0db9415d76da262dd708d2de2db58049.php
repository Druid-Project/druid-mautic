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

/* @bundles/WebhookBundle/WebhookEvents.php */
class __TwigTemplate_a0f15d780fc326c35b4475d5cb634214 extends Template
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

namespace Mautic\\WebhookBundle;

/**
 * Events available for MauticWebhookBundle.
 */
final class WebhookEvents
{
    /**
     * The mautic.webhook_pre_save event is thrown right before a form is persisted.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookBundleEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_PRE_SAVE = 'mautic.webhook_pre_save';

    /**
     * The mautic.webhook_post_save event is thrown right after a form is persisted.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookBundleEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_POST_SAVE = 'mautic.webhook_post_save';

    /**
     * The mautic.webhook_pre_delete event is thrown before a form is deleted.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookBundleEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_PRE_DELETE = 'mautic.webhook_pre_delete';

    /**
     * The mautic.webhook_post_delete event is thrown after a form is deleted.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookBundleEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_POST_DELETE = 'mautic.webhook_post_delete';

    /**
     * The mautic.webhook_kill event is thrown when target is not available.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_KILL = 'mautic.webhook_kill';

    /**
     * The mautic.webhook_queue_on_add event is thrown as the queue entity is created, before it is persisted to the database.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookQueueEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_QUEUE_ON_ADD = 'mautic.webhook_queue_on_add';

    /**
     * The mautic.webhook_pre_execute event is thrown right before a webhook URL is executed.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookExecuteEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_PRE_EXECUTE = 'mautic.webhook_pre_execute';

    /**
     * The mautic.webhook_post_execute event is thrown right after a webhook URL is executed.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookExecuteEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_POST_EXECUTE = 'mautic.webhook_post_execute';

    /**
     * The mautic.webhook_on_build event is as the webhook form is built.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookBuild instance.
     *
     * @var string
     */
    public const WEBHOOK_ON_BUILD = 'mautic.webhook_on_build';

    /**
     * The mautic.webhook.campaign_on_trigger event is dispatched from the mautic:campaign:trigger command.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignTriggerEvent instance.
     *
     * @var string
     */
    public const ON_CAMPAIGN_TRIGGER_ACTION = 'mautic.webhook.campaign_on_trigger_action';

    /**
     * The mautic.webhook_on_request event is fired before request is processed.
     *
     * The event listener receives a Mautic\\WebhookBundle\\Event\\WebhookRequestEvent instance.
     *
     * @var string
     */
    public const WEBHOOK_ON_REQUEST = 'mautic.webhook_on_request';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/WebhookBundle/WebhookEvents.php";
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
        return new Source("", "@bundles/WebhookBundle/WebhookEvents.php", "/app/docroot/app/bundles/WebhookBundle/WebhookEvents.php");
    }
}
