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

/* @bundles/PointBundle/Translations/en_US/messages.ini */
class __TwigTemplate_3874df291753e08f20b582176b3214d0 extends Template
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
        yield "mautic.point.point=\"Point\"
mautic.point.action.delta=\"Change points (+/-)\"
mautic.point.action.delta.help=\"Set the number of points to be added or deducted for this action. If it is a positive number, it will be added to the contact's points. If negative, it will be deducted.\"
mautic.point.action.noresults.tip=\"Use point actions to adjust a contact's point score based on defined events. For example, give a contact 10 points if he/she opens a campaign email.\"
mautic.point.actions.header.index=\"Point Actions\"
mautic.point.event.gained=\"Point gained\"
mautic.point.event.manual_change=\"Manual change\"
mautic.point.form.score_not_set=\"Score not set\"
mautic.point.form.no_point_groups=\"There are no point groups available.\"
mautic.point.form.addaction=\"Use the list to the right to add an action.\"
mautic.point.form.confirmbatchdelete=\"Delete the selected point actions?\"
mautic.point.form.confirmdelete=\"Delete the point action, %name%?\"
mautic.point.form.repeat=\"Is repeatable\"
mautic.protip.points.decay=\"Implement a lead scoring decay model to accurately capture intent.\"
mautic.protip.points.reduce=\"Reduce scores systematically over time if contacts become inactive.\"
mautic.protip.points.limit=\"Use a limit to prevent scores from getting too high or low.\"
mautic.protip.triggers.behavioral=\"Use behavioral triggers to send timely, relevant emails based on user actions.\"
mautic.point.form.type=\"Action taken by contact\"
mautic.point.form.repeat.help=\"Enable to score leads multiple times for this action; disable for one-time scoring.\"
mautic.point.form.repeat.yes=\"Allow multiple scores\"
mautic.point.form.repeat.no=\"One-time scoring only\"
mautic.point.menu.edit=\"Edit Point Action\"
mautic.point.menu.index=\"Manage Actions\"
mautic.point.menu.new=\"New Point Action\"
mautic.point.permissions.header=\"Point Permissions\"
mautic.point.permissions.points=\"Point Actions - User has access to\"
mautic.point.permissions.triggers=\"Triggers - User has access to\"
mautic.point.permissions.groups=\"Groups - User has access to\"
mautic.point.thead.action=\"Action\"
mautic.point.thead.delta=\"Points +/-\"
mautic.point.thead.group=\"Group\"
mautic.point.trigger.addevent=\"Select an event from the 'Add an event' list.\"
mautic.point.trigger.event.add=\"Add an event\"
mautic.point.trigger.form.color=\"Contact color\"
mautic.point.trigger.form.color_descr=\"Contacts with at least the number of points above will be designated this color.\"
mautic.point.trigger.form.confirmbatchdelete=\"Delete the selected triggers?\"
mautic.point.trigger.form.confirmdelete=\"Delete the trigger, %name%?\"
mautic.point.trigger.form.existingleads=\"Trigger for existing applicable contacts upon saving (if published)?\"
mautic.point.trigger.form.modalheader=\"Trigger Action Details\"
mautic.point.trigger.form.points=\"Minimum number of points\"
mautic.point.trigger.form.points_descr=\"Minimum number of points required in order to trigger associated actions.\"
mautic.point.trigger.header.edit=\"Edit Trigger\"
mautic.point.trigger.header.index=\"Point Triggers\"
mautic.point.trigger.header.new=\"New Trigger\"
mautic.point.trigger.menu.edit=\"Edit Trigger Event\"
mautic.point.trigger.menu.index=\"Manage Triggers\"
mautic.point.trigger.noresults.tip=\"Create a trigger to take some action with the contact once a certain point level is reached. You can adjust a contact's campaign, push to a CRM, send an email, etc. Define a color to easily see where your contacts are at a glance when viewing contact lists!\"
mautic.point.trigger.tab.events=\"Events\"
mautic.point.trigger.thead.points=\"Point Total\"
mautic.point.trigger.thead.pointstrigger=\"Trigger at Points\"
mautic.point.group.menu.index=\"Manage Groups\"
mautic.point.group.menu.new=\"New Group\"
mautic.point.group.menu.edit=\"Edit Group\"
mautic.point.group.header.index=\"Point Groups\"
mautic.point.group.form.group=\"Point group\"
mautic.point.group.form.group_descr=\"Choose the point group to which this applies. If no groups are selected, it will apply to the main contact points.\"
mautic.point.group.form.nogroup=\"None\"
mautic.point.group.form.confirmdelete=\"Delete the point group, %name%?\"
mautic.points.menu.root=\"Points\"
mautic.point.dashboard.widgets=\"Point Widgets\"
mautic.widget.points.in.time=\"Points in time\"
mautic.point.changes=\"Point changes\"
mautic.point.group.report.table=\"Group score\"
mautic.point.report.group_id=\"Group ID\"
mautic.point.report.group_name=\"Group name\"
mautic.point.report.group_score=\"Group score\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/PointBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/PointBundle/Translations/en_US/messages.ini");
    }
}
