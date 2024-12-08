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

/* @bundles/NotificationBundle/NotificationEvents.php */
class __TwigTemplate_9b4e5a72b01c625c1a9f1f0f8ca4647f extends Template
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

namespace Mautic\\NotificationBundle;

/**
 * Events available for NotificationBundle.
 */
final class NotificationEvents
{
    /**
     * The mautic.notification_token_replacement event is thrown right before the content is returned.
     *
     * The event listener receives a
     * Mautic\\CoreBundle\\Event\\TokenReplacementEvent instance.
     *
     * @var string
     */
    public const TOKEN_REPLACEMENT = 'mautic.notification_token_replacement';

    /**
     * The mautic.notification_form_action_send event is thrown when a notification is sent
     * as part of a form action.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\SendingNotificationEvent instance.
     *
     * @var string
     */
    public const NOTIFICATION_ON_FORM_ACTION_SEND = 'mautic.notification_form_action_send';

    /**
     * The mautic.notification_on_send event is thrown when a notification is sent.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationSendEvent instance.
     *
     * @var string
     */
    public const NOTIFICATION_ON_SEND = 'mautic.notification_on_send';

    /**
     * The mautic.notification_pre_save event is thrown right before a notification is persisted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    public const NOTIFICATION_PRE_SAVE = 'mautic.notification_pre_save';

    /**
     * The mautic.notification_post_save event is thrown right after a notification is persisted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    public const NOTIFICATION_POST_SAVE = 'mautic.notification_post_save';

    /**
     * The mautic.notification_pre_delete event is thrown prior to when a notification is deleted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    public const NOTIFICATION_PRE_DELETE = 'mautic.notification_pre_delete';

    /**
     * The mautic.notification_post_delete event is thrown after a notification is deleted.
     *
     * The event listener receives a
     * Mautic\\NotificationBundle\\Event\\NotificationEvent instance.
     *
     * @var string
     */
    public const NOTIFICATION_POST_DELETE = 'mautic.notification_post_delete';

    /**
     * The mautic.notification.on_batch_trigger_action event is fired when the campaign action triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\PendingEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_BATCH_ACTION = 'mautic.notification.on_batch_trigger_action';

    /**
     * The mautic.notification.on_campaign_trigger_condition event is fired when the campaign condition triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_TRIGGER_CONDITION = 'mautic.notification.on_campaign_trigger_notification';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/NotificationBundle/NotificationEvents.php";
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
        return new Source("", "@bundles/NotificationBundle/NotificationEvents.php", "/app/docroot/app/bundles/NotificationBundle/NotificationEvents.php");
    }
}
