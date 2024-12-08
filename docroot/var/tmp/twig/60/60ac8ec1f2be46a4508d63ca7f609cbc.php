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

/* @bundles/PluginBundle/Translations/en_US/messages.ini */
class __TwigTemplate_a339fe7131d8ff5af2c6f40f226b35f4 extends Template
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
        yield "mautic.campaign.plugin.leadpush=\"Push contact\"
mautic.integration.callbackuri=\"If applicable, use the following as the callback URL (may also be called the return URI) when configuring your application:\"
mautic.integration.closewindow=\"Close Window\"
mautic.integration.error=\"%name% Error\"
mautic.integration.error.generic_contact_name=\"Contact ID# %id%\"
mautic.integration.error.refreshtoken_expired=\"The refresh token has expired. Re-authorization is required.\"
mautic.integration.filter.all=\"Show all plugins\"
mautic.integration.form.authorize=\"Authorize App\"
mautic.integration.form.enabled=\"Is enabled?\"
mautic.integration.form.feature.login_button=\"Login Button\"
mautic.integration.form.feature.public_activity=\"Display public activity\"
mautic.integration.form.feature.public_profile=\"Display public profile and enable profile to contact field matching\"
mautic.integration.form.feature.push_lead=\"Triggered action push contacts to integration\"
mautic.integration.form.feature.settings=\"Feature Specific Settings\"
mautic.integration.form.feature.share_button=\"Display share button on landing page social widget\"
mautic.integration.form.feature.sso_service=\"Single Sign On - Service Authentication\"
mautic.integration.form.feature.sso_form=\"Single Sign On - Form Authentication\"
mautic.integration.form.features=\"Enabled features\"
mautic.integration.form.field_match_notes=\"If the values are empty for the Mautic object, a value of 'Unknown' will be sent. If the integration field is a pick list, be sure the list values of Mautic's field match those of the integration.\"
mautic.integration.form.lead.unknown=\"Unknown\"
mautic.integration.form.profile=\"Public Profile\"
mautic.integration.form.reauthorize=\"Reauthorize App\"
mautic.integration.form.savefirst=\"Required keys are missing in order to authenticate. Please enter the keys then save.\"
mautic.integration.form.sharebutton=\"Share Buttons\"
mautic.integration.integrations=\"Integrations\"
mautic.integration.integration=\"Integration\"
mautic.integration.integration.tooltip=\"Select the integration to be used.\"
mautic.integration.keyfield.api=\"API Key\"
mautic.integration.keyfield.appid=\"App ID\"
mautic.integration.keyfield.appsecret=\"App Secret\"
mautic.integration.keyfield.clientid=\"Client ID\"
mautic.integration.keyfield.clientsecret=\"Client Secret\"
mautic.integration.keyfield.consumerid=\"Consumer ID\"
mautic.integration.keyfield.consumersecret=\"Consumer Secret\"
mautic.integration.keyfield.username=\"Username\"
mautic.integration.keyfield.password=\"Password\"
mautic.integration.leadfield_matches=\"Assign available integration fields to local contact fields.\"
mautic.integration.companyfield_matches=\"Assign available integration fields to local company fields.\"
mautic.integration.missingkeys=\"Keys are not available for this transaction to take place. Please verify your settings then try again.\"
mautic.integration.noresults.tip=\"Expecting integrations but see none? Enable the associated addon via the Addon Manager! For example, the Social Media addon must be enabled in order for Facebook to be listed.\"
mautic.integration.sso.auto_create_user=\"Automatically create local user?\"
mautic.integration.sso.auto_create_user.tooltip=\"If the user is authenticated and does not exist locally, a new local user will be created.\"
mautic.integration.sso.new_user_role=\"Role for created user\"
mautic.integration.sso.new_user_role.tooltip=\"If new user creation is enabled, select the role the new user should be assigned.\"
mautic.integrations.noresults=\"\"
mautic.plugin.actions=\"Addon actions\"
mautic.plugin.actions.facebookLogin=\"Facebook Login\"
mautic.plugin.actions.push_lead=\"Push contact to integration\"
mautic.plugin.actions.tooltip=\"Push a contact to the selected integration.\"
mautic.plugin.actions.social_share=\"Social Networks Share Icons\"
mautic.plugin.actions.social_share_tooltip=\"Adds social network icons to share form\"
mautic.plugin.actions.twitterLogin=\"Twitter Login\"
mautic.plugin.command.fetch.leads=\"Command to fetch contacts from integration\"
mautic.plugin.command.fetch.leads.starting=\"Fetch contacts command is starting\"
mautic.plugin.command.fetch.contacts.starting=\"Fetching contacts...\"
mautic.plugin.command.fetch.leads.events_executed=\"Number of leads/contacts fetched: %events%\"
mautic.plugin.command.fetch.leads.events_executed_breakout=\"%updated% contacts were updated and %created% contacts were created\"
mautic.plugin.command.fetch.companies.events_executed=\"Number of companies fetched: %events%\"
mautic.plugin.command.fetch.companies.events_executed_breakout=\"%updated% companies were updated and %created% companies were created\"
mautic.plugin.command.push.leads.events_executed=\"Number of contacts processed: %events%\"
mautic.plugin.form.add.fields=\"Add Field\"
mautic.plugin.plugins=\"Plugins\"
mautic.plugin.integration.tab.details=\"Enabled/Auth\"
mautic.plugin.integration.tab.features=\"Features\"
mautic.plugin.integration.tab.fieldmapping=\"Contact Mapping\"
mautic.plugin.integration.tab.companyfieldmapping=\"Company Mapping\"
mautic.plugin.manage.plugins=\"Manage Plugins\"
mautic.plugin.permissions.plugins=\"Plugins - User has access to\"
mautic.plugin.permissions.header=\"Plugin Permissions\"
mautic.plugin.point.action=\"Addon triggers\"
mautic.plugin.reload.plugins=\"Install/Upgrade Plugins\"
mautic.plugin.reload.plugins.tooltip=\"Upload the plugin via FTP or some other protocol to the plugins directory then click this button to install/upgrade.\"
mautic.integration.form.feature.get_leads=\"Pull contacts and/or companies from integration\"
mautic.plugin.command.push.leads.activity=\"Push activity timeline to %integration% mautic object\"
mautic.plugin.command.fetch.companies=\"Fetching companies\"
mautic.plugin.command.fetch.companies.starting=\"Fetch companies command is starting\"
mautic.plugin.command.pushing.leads=\"Updating/creating leads from Mautic to %integration%\"
mautic.plugin.command.fetch.pushing.leads.events_executed=\"Number of contacts pushed: %updated% updated, %created% created, %errored% had errors and %ignored% were ignored (likely duplicates or didn't match field criteria)\"
mautic.plugins.integration.fields=\"Integration fields\"
mautic.plugins.mautic.direction=\"Direction\"
mautic.plugins.mautic.fields=\"Mautic fields\"
mautic.plugin.direction.data.update=\"Pick direction of data update\"
mautic.integration.form.feature.push_leads=\"Push contacts and/or companies to this integration\"
mautic.plugin.integration.campaign_members=\"Integration Campaign Members\"
mautic.plugin.integration.contact.timeline.link=\"Contact's timeline link\"
mautic.plugin.integration.campaigns=\"Push contacts to this integration campaign\"
mautic.plugin.config.campaign.member.chooseone=\"Choose a campaign to insert contacts into\"
mautic.plugin.integration.campaigns.member.status=\"Campaign member status\"
mautic.integrations.blanks=\"Update blank values\"
mautic.integrations.form.blanks=\"This will update blank values regardless of data priority, on both Integration and Mautic.\"
mautic.plugin.command.notauthorized=\"%s is not authorized\"
mautic.plugin.integration.contact.donotcontact.email=\"Do not contact by email\"
mautic.plugin.command.pushing.companies=\"Updating/creating companies from Mautic to %integration%\"
mautic.plugin.command.fetch.pushing.companies.events_executed=\"Number of companies pushed: %updated% updated, %created% created, %errored% had errors and %ignored% were ignored (likely duplicates or didn't match field criteria)\"
mautic.integrations.update.dnc.by.date=\"Use latest updated Do Not Contact record\"
mautic.integrations.form.update.dnc.by.date.label=\"Select this option if you wish to update the Do not contact field by the latest updated on either systems\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PluginBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/PluginBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/PluginBundle/Translations/en_US/messages.ini");
    }
}
