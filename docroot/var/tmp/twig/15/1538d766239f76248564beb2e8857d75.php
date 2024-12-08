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

/* @bundles/IntegrationsBundle/Translations/en_US/messages.ini */
class __TwigTemplate_17f8994595e4f478416c8a6ae93a9117 extends Template
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
        yield "mautic.integration.app.authorize=\"Authorize app\"
mautic.integration.app.reauthorize=\"Reauthorize app\"
mautic.integration.integration=\"Integration\"
mautic.integration.message=\"Message\"
mautic.integration.not_configured=\"The integration is not configured.\"
mautic.integration.object=\"Object\"
mautic.integration.object_id=\"Object ID\"
mautic.integration.last_sync_date=\"Last Sync Date\"
mautic.integration.sync_objects=\"Select the objects to sync with Mautic\"
mautic.integration.sync.update_blanks=\"Should non-blank values be overridden with blanks from the opposite system?\"
mautic.integration.enabled=\"Is Enabled?\"
mautic.integration.feature.sync=\"Sync objects between Mautic and this integration\"
mautic.integration.feature.push_activity=\"Push Mautic activity to this integration\"
mautic.integration.feature.push_activity.included_events=\"Events to include when pushing activity\"
mautic.integration.feature.push_activity.included_events.tooltip=\"Select the Mautic events that will be sent to the integration as activity.\"
mautic.integration.features=\"What features of this integration should be enabled?\"
mautic.integration.sync_field_mapping=\"%object% Field Mapping\"
mautic.integration.sync_direction_integration=\"Sync only to the integration\"
mautic.integration.sync_direction_mautic=\"Sync only to Mautic\"
mautic.integration.sync_direction_bidirectional=\"Sync both ways\"
mautic.integration.sync_mautic_field=\"Choose a Mautic field...\"
mautic.integration.sync_filter_fields=\"Filter integration fields...\"
mautic.integration.oauth1a.consumer.key=\"Consumer Key\"
mautic.integration.oauth1a.consumer.secret=\"Consumer Secret\"
mautic.integration.oauth1a.token=\"Token\"
mautic.integration.oauth1a.token.secret=\"Token Secret\"
mautic.integration.sync.channel_dnc=\"Do Not Contact - %channel%\"
mautic.integration.sync.contact_timeline=\"Contact Timeline URL\"
mautic.integration.sync.event=\"%integration%: %message%\"
mautic.integration.sync.user_notification.header=\"Issue encountered while syncing with the %integration% %object% object\"
mautic.integration.sync.user_notification.count_message=\"%count% objects failed to sync. Consider validating the integration's configuration.\"
mautic.integration.sync.user_notification.contact=\"The following contacts failed to sync. Check their timelines for more details. %contacts%\"
mautic.integration.sync.user_notification.sync_error=\"%name% failed to sync with message, &quot;%message%&quot;\"
mautic.integration.sync.timeline_notices=\"Integration sync notice\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/IntegrationsBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/IntegrationsBundle/Translations/en_US/messages.ini");
    }
}
