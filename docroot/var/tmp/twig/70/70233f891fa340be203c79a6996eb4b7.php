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

/* @bundles/CampaignBundle/Translations/en_US/messages.ini */
class __TwigTemplate_d51f6952b61d1a75a91f723e55970445 extends Template
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
        yield "mautic.campaign.add_new_source=\"Add a contact source...\"
mautic.campaign.allow_restart=\"Allow contacts to restart the campaign\"
mautic.campaign.allow_restart.tooltip=\"When enabled, if a contact is removed from the campaign for any reason then added back, they will restart from the beginning.\"
mautic.campaign.campaign=\"Campaign\"
mautic.campaign.campaign.id=\"Campaign ID\"
mautic.campaign.campaign.addremovelead=\"Add / remove contact\"
mautic.campaign.campaign.description=\"<strong>Campaign description:</strong> %description%\"
mautic.campaign.campaign.launch.builder=\"Launch Campaign Builder\"
mautic.campaign.campaign.leads=\"Contacts added\"
mautic.campaign.campaigns=\"Campaigns\"
mautic.protip.campaigns.reengagement=\"Implement re-engagement campaigns for leads that become inactive\"
mautic.protip.campaigns.survey=\"Deploy targeted survey campaigns to gather actionable insights and improve customer satisfaction\"
mautic.protip.campaigns.crosssell=\"Use personalized cross-sell campaigns based on purchase history to increase customer lifetime value\"
mautic.protip.campaigns.onboarding=\"Create automated onboarding sequences to guide new users through key product features and increase activation rates\"
mautic.campaign.connection.trigger.date.label=\"wait until %full%\"
mautic.campaign.connection.trigger.date.label_inaction=\"by %full%\"
mautic.campaign.connection.trigger.interval.label=\"wait %number% %unit%\"
mautic.campaign.connection.trigger.interval.label_inaction=\"within %number% %unit%\"
mautic.campaign.email.send.to.user=\"Send email to user\"
mautic.campaign.event.back_to_panel=\"Back to event selection panel\"
mautic.campaign.event.action.descr=\"An action is something executed by Mautic (e.g. send an email).\"
mautic.campaign.event.action.header=\"Action\"
mautic.campaign.event.actions.header=\"Actions\"
mautic.campaign.event.addremovelead=\"Change campaigns\"
mautic.campaign.event.addremovelead_descr=\"Add contact to specific campaigns and/or remove from specific campaigns when the event is triggered.\"
mautic.campaign.event.campaign_unpublished=\"The campaign was unpublished.\"
mautic.campaign.event.condition.header=\"Condition\"
mautic.campaign.event.condition.descr=\"A condition is based on known profile field values or submitted form data.\"
mautic.campaign.event.conditions.header=\"Conditions\"
mautic.campaign.event.decision.descr=\"A decision is made when a contact decides to take action or not (e.g. opened an email).\"
mautic.campaign.event.decision.header=\"Decision\"
mautic.campaign.event.decisions.header=\"Decisions\"
mautic.campaign.event.clone.header=\"Insert cloned event here\"
mautic.campaign.event.clone.name=\"Name\"
mautic.campaign.event.clone.from=\"From\"
mautic.campaign.event.clone.insert=\"Insert\"
mautic.campaign.event.clone.request.missing=\"The clone is no longer available\"
mautic.campaign.event.clone.btn.tooltip=\"Clone\"
mautic.campaign.event.clone.new.campaign=\"New campaign\"
mautic.campaign.event.edit.btn.tooltip=\"Edit\"
mautic.campaign.event.remove.btn.tooltip=\"Remove\"
mautic.campaign.event.inline.triggerimmediately=\"immediately\"
mautic.campaign.event.inline.triggerinterval=\"+ %interval% %unit%\"
mautic.campaign.event.last_error=\"Last execution error\"
mautic.campaign.event.failed=\"Failed to execute campaign event for %contact%.\"
mautic.campaign.event.failed.campaign.unpublished=\"Due to repeated event failures, your %campaign% campaign has been unpublished. The failing event is named %event%.\"
mautic.campaign.event.failed.timeline=\"Generic error.\"
mautic.campaign.event.intervalunit.choice.d=\"day(s)\"
mautic.campaign.event.intervalunit.choice.h=\"hour(s)\"
mautic.campaign.event.intervalunit.choice.i=\"minute(s)\"
mautic.campaign.event.intervalunit.choice.m=\"month(s)\"
mautic.campaign.event.intervalunit.choice.y=\"year(s)\"
mautic.campaign.event.intervalunit.d=\"{0} days|{1} day|[2,Inf] days\"
mautic.campaign.event.intervalunit.h=\"{0} hours|{1} hour|[2,Inf] hours\"
mautic.campaign.event.intervalunit.i=\"{0} minutes|{1} minute|[2,Inf] minutes\"
mautic.campaign.event.intervalunit.m=\"{0} months|{1} month|[2,Inf] months\"
mautic.campaign.event.intervalunit.y=\"{0} years|{1} year|[2,Inf] years\"
mautic.campaign.event.timed.choice.today=\"Is Today\"
mautic.campaign.event.timed.choice.yesterday=\"Is Yesterday\"
mautic.campaign.event.timed.choice.tomorrow=\"Is Tomorrow\"
mautic.campaign.event.timed.choice.anniversary=\"Anniversary\"
mautic.campaign.event.timed.choice.custom=\"Custom\"
mautic.campaign.event.leadchange=\"contact changed campaigns\"
mautic.campaign.event.leadchange_descr=\"Trigger actions when a contact is added/removed from a campaign.\"
mautic.campaign.event.reschedule=\"Reschedule this event.\"
mautic.campaign.event.save=\"Save\"
mautic.campaign.event.cancel=\"Cancel this event (it cannot be rescheduled later).\"
mautic.campaign.event.cancelled=\"This event has been cancelled. Reschedule it to restore.\"
mautic.campaign.event.cancelled.time=\"This event was scheduled for %date% but has been cancelled.\"
mautic.campaign.event.has_last_attempt_error=\"This event encountered an error during the last attempt to process.\"
mautic.campaign.event.systemchanges.header=\"System Changes\"
mautic.campaign.event.triggered=\"'%event%' event triggered\"
mautic.campaign.event.triggered.description=\"Triggered on '%campaign%' campaign by %lead%\"
mautic.campaign.event.upcoming=\"'%event%' event triggers\"
mautic.campaign.event.upcoming.description=\"Will be triggered on '%campaign%'\"
mautic.campaign.filter.placeholder=\"Contact Source Filter\"
mautic.campaign.form.addevent=\"Use the list to the right to add triggers and actions to the dripflow.\"
mautic.campaign.form.addtocampaigns=\"Add contact to\"
mautic.campaign.form.confirmbatchdelete=\"Delete the selected campaigns?\"
mautic.campaign.form.confirmdelete=\"Delete the campaign, %name%?\"
mautic.campaign.form.lead_source=\"Contact source\"
mautic.campaign.form.limittocampaigns=\"Limit to campaigns\"
mautic.campaign.form.limittocampaigns_descr=\"Select the campaigns this trigger applies to (meaning that the trigger will only fire for the selected campaigns). If none are selected, it'll apply to any campaign.\"
mautic.campaign.form.modalheader=\"Campaign Event Details\"
mautic.campaign.form.removefromcampaigns=\"Remove contact from\"
mautic.campaign.form.thiscampaign=\"This campaign\"
mautic.campaign.form.thiscampaign_restart=\"This campaign (restart the campaign)\"
mautic.campaign.form.trigger_leadchanged=\"Apply when contact is\"
mautic.campaign.form.trigger_leadchanged_added=\"added\"
mautic.campaign.form.trigger_leadchanged_removed=\"removed\"
mautic.campaign.form.type=\"Execute this event...\"
mautic.campaign.form.type_inaction=\"Execute this event if the contact does not take action...\"
mautic.campaign.form.type.date=\"at a specific date/time\"
mautic.campaign.form.type.date_inaction=\"by a specific date/time\"
mautic.campaign.form.type.help=\"This event will be executed for newly added Contacts to the Campaign, even if the scheduled date is in the past. For scheduled Emails, it is recommended that you unpublish the Email if you would not like Contacts to receive it after that date. All dates are in the Contact's timezone.\"
mautic.campaign.form.type.immediate=\"immediately\"
mautic.campaign.form.type.interval=\"at a relative time period\"
mautic.campaign.form.type.interval_inaction=\"within a relative time period\"
mautic.campaign.form.type.interval_schedule_at=\"Send from\"
mautic.campaign.form.type.interval_schedule_between_hours=\"or between the hours of\"
mautic.campaign.form.type.interval_trigger_restricted_dow=\"Schedule only on the selected days of the week:\"
mautic.campaign.form.type.optimized=\"optimal for contact\"
mautic.campaign.form.type.trigger_window_day=\"Within 24 hours for optimal timing\"
mautic.campaign.form.type.trigger_window_week=\"Within 7 days for the best day\"
mautic.campaign.lead.changeowner=\"Change contact owner\"
mautic.campaign.leadsource.form=\"Form\"
mautic.campaign.leadsource.forms=\"Campaign forms\"
mautic.campaign.leadsource.forms.tooltip=\"Contacts created from submissions for the selected forms will be automatically added to this campaign.\"
mautic.campaign.leadsource.header=\"Contact Sources\"
mautic.campaign.leadsource.header.singular=\"Contact Source\"
mautic.campaign.leadsource.list=\"Segment\"
mautic.campaign.leadsource.lists=\"Contact segments\"
mautic.campaign.leadsource.lists.tooltip=\"Contacts that are members of the selected segments will be automatically added to this campaign.\"
mautic.campaign.menu.edit=\"Edit Campaign\"
mautic.campaign.menu.index=\"Campaigns\"
mautic.campaign.menu.new=\"New Campaign\"
mautic.campaign.member.removed=\"Contact removed from campaign on %date%\"
mautic.campaign.modify.warning=\"WARNING: This campaign is currently published. Modifying events or removing contact segments may affect contacts in mid-campaign.\"
mautic.campaign.noresults.tip=\"Campaigns allow automated interaction with contacts through dripflows based on series of actions and decisions. For example, you can schedule a follow up email if the contact opens an email already sent to them! Or give the contact 10 points if they click through to a specific landing page.\"
mautic.campaign.permissions.campaigns=\"Campaigns - User has access to\"
mautic.campaign.permissions.header=\"Campaign Permissions\"
mautic.campaign.point.trigger=\"Campaign triggers\"
mautic.campaign.point.trigger.changecampaigns=\"Modify contact's campaigns\"
mautic.campaign.preview.header=\"Preview\"
mautic.campaign.rebuild.leads_affected=\"%leads% contact(s) affected\"
mautic.campaign.rebuild.rebuilding=\"Rebuilding contacts for campaign %id%\"
mautic.campaign.rebuild.no_lists=\"There are no lists to rebuild from.\"
mautic.campaign.rebuild.not_found=\"Campaign #%id% does not exist\"
mautic.campaign.rebuild.to_be_added=\"%leads% total contact(s) to be added in batches of %batch%\"
mautic.campaign.rebuild.to_be_removed=\"%leads% total contact(s) to be removed in batches of %batch%\"
mautic.campaign.scheduled=\"Campaign event scheduled\"
mautic.campaign.summarizing=\"Building summary statistics for past campaign events, in batches of %batch% hours. Will back-fill data from the newest to the oldest events.\"
mautic.campaign.trigger.event_count=\"%events% total events(s) to be processed in batches of %batch% contacts\"
mautic.campaign.trigger.events_executed=\"{0} 0 total events were executed|{1} 1 total event was executed|[2,Inf] %count% total events were executed\"
mautic.campaign.trigger.events_scheduled=\"{0} 0 total events were scheduled|{1} 1 total event was scheduled|[2,Inf] %count% total events were scheduled\"
mautic.campaign.trigger.decision_count_analyzed=\"%decisions% total decisions(s) to be analyzed for inactivity for approximately %leads% contacts in batches of %batch%\"
mautic.campaign.trigger.lead_count_processed=\"%leads% total contact(s) to be processed in batches of %batch%\"
mautic.campaign.trigger.negative=\"Triggering events for inactive contacts\"
mautic.campaign.trigger.scheduled=\"Triggering scheduled events\"
mautic.campaign.trigger.starting=\"Triggering events for newly added contacts\"
mautic.campaign.trigger.triggering=\"Triggering events for campaign %id%\"
mautic.campaign.triggered=\"Campaign action triggered\"
mautic.campaign.user.devent.description=\"<strong>Event description:</strong> %description%\"
mautic.campaign.user.event.triggered=\"Triggered <strong>%event%</strong> event\"
mautic.campaign.dashboard.widgets=\"Campaign Widgets\"
mautic.widget.events.in.time=\"Events triggered in time\"
mautic.widget.leads.added.in.time=\"Leads added in time\"
mautic.campaign.triggered.events=\"Triggered Events\"
mautic.config.tab.campaignconfig=\"Campaign Settings\"
mautic.campaignconfig.campaign_time_wait_on_event_false=\"Wait time before retrying a failed action\"
mautic.campaignconfig.campaign_time_wait_on_event_false_tooltip=\"If an action fails to execute, wait this long before trying again.\"
mautic.campaignconfig.campaign_by_range=\"Use date range for all views\"
mautic.campaignconfig.campaign_by_range.tooltip=\"The actions, conditions, decisions and contacts tabs will be based on the date range provided when viewing a campaign.\"
mautic.campaignconfig.use_summary=\"Use summary statistics\"
mautic.campaignconfig.use_summary.tooltip=\"Improves performance when viewing a campaign with thousands of events per day by using summarized data. May require you to run a command via SSH to backfill your data once.\"
mautic.campaign.stats=\"Campaign statistics\"
mautic.stage.campaign.event.change_descr=\"Choose a stage to change a contact to.\"
mautic.campaign.command.process.messages=\"Processing message queue\"
mautic.campaign.command.messages.sent=\"Messages sent: %events%\"
mautic.campaign.lead.addtocompany=\"Add contact to company\"
mautic.campaign.event.messages.header=\"Messages\"
mautic.campaign.event.message.header=\"Message\"
mautic.campaign.event.message.descr=\"Send a message through the contact's preferred channel.\"
mautic.report.group.campaign_lead_event_log=\"Campaigns\"
mautic.campaign.events=\"Campaign Events\"
mautic.report.campaign.event.name=\"Event name\"
mautic.report.campaign.event.description=\"Event description\"
mautic.report.campaign.event.type=\"Event context\"
mautic.report.campaign.event.event_type=\"Event type\"
mautic.report.campaign.event.trigger_date=\"Event trigger date\"
mautic.report.campaign.event.trigger_mode=\"Event trigger mode\"
mautic.report.campaign.event.channel=\"Event channel\"
mautic.report.campaign.event.channel_id=\"Event channel ID\"
mautic.report.campaign.event.rotation=\"Rotation\"
mautic.report.campaign.log.date_triggered=\"Event log date triggered\"
mautic.report.campaign.log.is_scheduled=\"Event log is scheduled\"
mautic.report.campaign.log.trigger_date=\"Event log trigger date\"
mautic.report.campaign.log.system_triggered=\"Event log system triggered?\"
mautic.report.campaign.log.non_action_path_taken=\"Event log non-action path taken?\"
mautic.report.campaign.log.channel=\"Event log channel\"
mautic.report.campaign.log.channel_id=\"Event log channel ID\"
mautic.report.campaign.yes.percent=\"Success percent\"
mautic.report.campaign.no.percent=\"Failed percent\"
mautic.report.campaign.completed.actions=\"Completed actions\"
mautic.report.campaign.pending.actions=\"Pending actions\"
mautic.campaign.event.jump_to_event=\"Jump to Event\"
mautic.campaign.campaign.jump_to_event=\"Jump to Event\"
mautic.campaign.campaign.jump_to_event.target_not_exist=\"Jump to target no longer exists\"
mautic.campaign.event.jump_to_event_descr=\"Jump to the chosen event within the campaign flow.\"
mautic.campaign.form.jump_to_event=\"Event to jump to\"
mautic.campaign.message.send=\"Messages sent\"
mautic.campaign.form.confirmation.message=\"Are you sure you want to unpublish this campaign and stop processing contact(s) and campaign event(s) (including scheduled event(s)) immediately?\"
mautic.campaign.form.confirmation.confirm_text=\"Yes\"
mautic.campaign.form.confirmation.cancel_text=\"No\"
mautic.campaign.if=\"Filter by\"
mautic.campaign.when=\"Check if\"
mautic.campaign.locate=\"Locate\"
mautic.config.peak_interaction_timer.title='Optimal for Contact event scheduler'
mautic.config.peak_interaction_timer.cache_timeout_min_message='The cache timeout must be greater than or equal to 0.'
mautic.config.peak_interaction_timer.fetch_limit_min_message='The fetch limit must be greater than 10.'
mautic.config.peak_interaction_timer.best_default_hour_start='Default Optimal Start Hour'
mautic.config.peak_interaction_timer.best_default_hour_end='Default Optimal End Hour'
mautic.config.peak_interaction_timer.best_default_days='Default Optimal Days'
mautic.config.peak_interaction_timer.cache_timeout='Interaction Data Cache Timeout'
mautic.config.peak_interaction_timer.fetch_interactions_from='Fetch Interactions From'
mautic.config.peak_interaction_timer.fetch_limit='Interaction Fetch Limit'
mautic.config.peak_interaction_timer.cache.off='No cache'
mautic.config.peak_interaction_timer.cache.month='1 Month'
mautic.config.peak_interaction_timer.fetch.from_30_days='Last 30 Days'
mautic.config.peak_interaction_timer.fetch.from_60_days='Last 60 Days'
mautic.config.peak_interaction_timer.fetch.from_90_days='Last 90 Days'
mautic.config.peak_interaction_timer.best_default_hour_start.tooltip='Set the default start hour for the optimal interaction window when specific contact data is unavailable.'
mautic.config.peak_interaction_timer.best_default_hour_end.tooltip='Set the default end hour for the optimal interaction window when specific contact data is unavailable.'
mautic.config.peak_interaction_timer.best_default_days.tooltip='Select the default days of the week that are considered optimal for interaction when specific contact data is unavailable.'
mautic.config.peak_interaction_timer.cache_timeout.tooltip='Choose how long the interaction data should be cached. Select \"No cache\" to disable caching or \"1 Month\" to cache data for a month.'
mautic.config.peak_interaction_timer.fetch_interactions_from.tooltip='Select the time frame for fetching interaction data. This determines how far back the system will look for interactions.'
mautic.config.peak_interaction_timer.fetch_limit.tooltip='Set the maximum number of interactions of each type (e.g., page hits, email reads) to retrieve for timing optimization.'";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CampaignBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/CampaignBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/CampaignBundle/Translations/en_US/messages.ini");
    }
}
