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

/* @bundles/DynamicContentBundle/Translations/en_US/messages.ini */
class __TwigTemplate_6d55b6350e35a8f95ef8bf9d5674b04b extends Template
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
        yield "mautic.dynamicContent.dynamicContent=\"Dynamic Content\"
mautic.dynamicContent.dynamicContents=\"Dynamic Contents\"

mautic.placeholder_tokens.dynamic_content_tokens=\"Dynamic Content\"
mautic.placeholder_tokens.dynamic_content.example=\"[Dynamic Content 1] | for example User-defined variable name\"

mautic.dynamicContent.campaign.event.form.dynamicContents=\"Limit to Pages\"
mautic.dynamicContent.campaign.event.form.dynamicContents.descr=\"Select the pages this trigger applies to. If none are selected, it'll apply to any page.\"
mautic.dynamicContent.campaign.event.form.url=\"URL\"
mautic.dynamicContent.campaign.event.form.url.descr=\"Insert the URL of the page where you placed the tracking pixel. It is possible to use wildcard (*). Example: *product/123* will match http://web.com/product/1234.htm. Separate multiple URLs with a comma.\"
mautic.dynamicContent.campaign.event.dynamicContenthit=\"Visits a page\"
mautic.dynamicContent.campaign.event.dynamicContenthit_descr=\"Trigger actions on a page/url hit.\"

mautic.dynamicContent.config.form.cat.in.url=\"Show category in page URL?\"
mautic.dynamicContent.config.form.cat.in.url.tooltip=\"If enabled, the category slug will be included in the URL.\"
mautic.dynamicContent.config.form.google.analytics=\"Analytics script (i.e. Google Analytics)\"
mautic.dynamicContent.config.form.google.analytics.tooltip=\"Insert the analytics script to have it automatically included in the source of landing pages.\"

mautic.dynamicContent.event.hit=\"Page Hit\"
mautic.dynamicContent.event.publish.down=\"Set %dwc% as unavailable\"
mautic.dynamicContent.event.publish.down.description=\"Dynamic Content '%dwc%' is going to become unavailable for use.\"
mautic.dynamicContent.event.publish.up=\"Set %dwc% as unavailable\"
mautic.dynamicContent.event.publish.up.description=\"Page '%dwc%' is going to become available for use.\"

mautic.dynamicContent.form.internal.name=\"Internal Name\"
mautic.dynamicContent.form.confirmbatchdelete=\"Delete the selected items? WARNING - this will also delete all associated translations!\"
mautic.dynamicContent.form.confirmdelete=\"Delete the dynamic content item, %name%? WARNING - this will also delete all associated translations!\"
mautic.dynamicContent.form.content=\"Content\"
mautic.dynamicContent.form.content.help=\"The content to return when this variant/default item is requested.\"
mautic.dynamicContent.form.language.help=\"Translate the content into multiple languages and link them together by assigning them to a parent page. Language selection links will become available on the related landing pages for customers to choose the language they want to see.\"

mautic.dynamicContent.header.edit=\"Edit Dynamic Content - %name%\"
mautic.dynamicContent.header.new=\"New Dynamic Content\"

mautic.dynamicContent.menu.edit=\"Edit Page\"
mautic.dynamicContent.menu.view=\"View Page\"

mautic.dynamiccontent.permissions.header=\"Dynamic Content Permissions\"
mautic.dynamiccontent.permissions.dynamiccontents=\"Dynamic Content - User has access to\"
mautic.dynamicContent.publish.down=\"Set as unavailable\"
mautic.dynamicContent.publish.up=\"Set as available\"
mautic.dynamicContent.report.revision=\"Revision\"

mautic.dynamicContent.campaign.send_dwc=\"Push dynamic content\"
mautic.dynamicContent.campaign.send_dwc.tooltip=\"Trigger actions when a Dynamic Content slot is requested.\"

mautic.dynamicContent.send.selectDynamicContents.default=\"Select Default Content\"
mautic.dynamicContent.send.selectDynamicContents=\"Select Dynamic Content\"
mautic.dynamicContent.send.new.dynamicContent=\"New Dynamic Content\"
mautic.dynamicContent.send.edit.dynamicContent=\"Edit Dynamic Content\"
mautic.dynamicContent.send.slot_name=\"Requested Slot Name\"
mautic.dynamicContent.label.slot_name=\"Slot Name\"
mautic.dynamicContent.send.slot_name.tooltip=\"The name of the slot the contact is requesting.\"
mautic.dynamicContent.choose.dynamicContents=\"Select the default dynamic content to show.\"
mautic.dynamicContent.campaign.decision_dwc=\"Request dynamic content\"
mautic.dynamicContent.campaign.decision_dwc.tooltip=\"This is the top level for a dynamic content request.\"

mautic.dynamicContent.error.notfound=\"Dynamic Content item %id% not found.\"
mautic.dynamicContent.notice.batch_deleted=\"%count% dynamic content items deleted.\"
mautic.dwc.form.confirmbatchdelete=\"Confirm batch delete\"
mautic.dwc.delete_new=\"Discard the new Dynamic Content\"
mautic.dwc.form.is.campaign=\"Campaign dynamic content\"
mautic.dwc.form.is.campaign.tooltip=\"Is campaign dynamic content\"
mautic.dwc.form.is.standalone=\"Standalone dynamic content\"
mautic.dwc.form.is_campaign_based=\"Is campaign based?\"
mautic.dwc.form.is_campaign_based.tooltip=\"Select whether the content will be displayed based on campaign conditions or filters\"

mautic.campaign.dwc.decision=\"Request dynamic content\"
mautic.campaign.dwc.push_content=\"Push dynamic content\"
mautic.dynamic.content.triggered=\"Dynamic Content Triggered\"
mautic.dynamicContent.views=\"Views\"
mautic.dynamicContent.show.total.views=\"Total Views\"
mautic.dynamicContent.show.unique.views=\"Unique Views\"
mautic.dynamicContent.timeline.content=\"Content\"
mautic.dynamicContent.timeline.title=\"Read Dynamic Content\"
mautic.dynamicContent.token.slot=\"Dynamic Web Content Slot\"
mautic.dynamicContent.slot.campaign=\"Is campaign based\"
mautic.core.icon_tooltip.is_filter_based=\"Is a filter based dynamic web content\"
mautic.dynamicContent.header.is_filter_based=\"Is a filter based dynamic web content for slot: %slot%\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/DynamicContentBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/DynamicContentBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/DynamicContentBundle/Translations/en_US/messages.ini");
    }
}