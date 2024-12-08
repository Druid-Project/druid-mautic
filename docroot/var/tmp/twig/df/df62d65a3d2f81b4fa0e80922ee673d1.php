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

/* @bundles/StageBundle/Translations/en_US/messages.ini */
class __TwigTemplate_9771f54aaccccb5ab1486f7c80628ea3 extends Template
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
        yield "mautic.stage.stage=\"Stage\"
mautic.stage.action.noresults.tip=\"Use stage actions to adjust a contact's stage score based on defined events. For example, give a contact 10 stages if he/she opens a campaign email.\"
mautic.stage.actions.header.index=\"Stage Actions\"
mautic.stage.campaign.event.change=\"Change contact's stage\"
mautic.stage.campaign.event.change.descr=\"This campaign will change a contacts stage if a contact is on a stage with lower weight.\"
mautic.stage.campaign.event.stage_missing=\"Stage is missing or unpublished\"
mautic.stage.campaign.event.stage_invalid=\"Contact was not able to move into this stage.\"
mautic.stage.campaign.event.already_in_stage=\"Contact is already in this stage.\"
mautic.stage.event.changed=\"Stage changed\"
mautic.stage.event.added.batch=\"Manually Added\"
mautic.stage.event.removed.batch=\"Manually Removed\"
mautic.stage.import.action.name=\"Import by %name%\"
mautic.stage.form.addaction=\"Use the list to the right to add an action.\"
mautic.stage.form.confirmbatchdelete=\"Delete the selected stage actions?\"
mautic.stage.form.confirmdelete=\"Delete the stage action, %name%?\"
mautic.stage.form.type=\"When a contact...\"
mautic.stage.menu.edit=\"Edit Stage Action\"
mautic.stage.menu.new=\"New Stage Action\"
mautic.stages.menu.root=\"Stages\"
mautic.stage.permissions.header=\"Stage Permissions\"
mautic.stage.permissions.stages=\"Stage Actions - User has access to\"
mautic.stage.permissions.triggers=\"Triggers - User has access to\"
mautic.stage.thead.action=\"Action\"
mautic.stage.timeline.event.stage.change=\"<strong>Stage changed to:</strong> <strong class='text-primary'>%name%</strong>\"
mautic.stages.menu.index=\"Stages\"
mautic.stage.dashboard.widgets=\"Stage Widgets\"
mautic.widget.stages.in.time=\"Stages in time\"
mautic.stage.changes=\"Stage changes\"
mautic.stage.action.weight=\"Weight\"
mautic.stage.action.weight.help=\"This will help you determine if a contact moves forward to a stage, a contact cannot change to a stage of lower weight\"
mautic.asset.stage.action.assets=\"These assets\"
mautic.asset.stage.action.assets.descr=\"When a contact downloads selected assets\"
mautic.form.stage.action.forms=\"Select form\"
mautic.form.stage.action.forms.descr=\"When a contact submits this form\"
mautic.page.stage.action.form.pages=\"Select page\"
mautic.page.stage.action.form.pages.descr=\"When a contact visits this page\"
mautic.page.stage.action.form.page.url=\"URL\"
mautic.page.stage.action.form.page.url.descr=\"When a contact visit this url\"
mautic.page.stage.action.form.accumulative.time=\"Number of visits\"
mautic.page.stage.action.form.accumulative.time.descr=\"When a contact reaches this number of visits\"
mautic.page.stage.action.form.returns.within=\"Number of days\"
mautic.page.stage.action.form.returns.within.descr=\"When a contact returns within this number of days\"
mautic.page.stage.action.form.returns.after=\"Returns after\"
mautic.page.stage.action.form.returns.after.descr=\"Returns after this number of days\"
mautic.stage.selectstage=\"Select stage\"
mautic.stage.choose.stage_descr=\"Select stage that will be assigned to contacts in this campaign\"
mautic.campaign.stage.change=\"Change contact's stage\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/StageBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/StageBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/StageBundle/Translations/en_US/messages.ini");
    }
}
