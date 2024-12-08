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

/* @MauticCampaign/Campaign/Builder/_index.html.twig */
class __TwigTemplate_010a3ccfad232b35afe579a0172b73e6 extends Template
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
        // line 6
        $context["route"] = ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), "mautic_campaignevent_action")) : ("mautic_campaignevent_action"));
        // line 7
        yield "<div class=\"hide\" id=\"CampaignEventPanel\">
    <div id=\"CampaignEventPanelGroups\">
        <div class=\"row\">
            <div class=\"mr-0 ml-0 pl-xs pr-xs campaign-group-container col-md-4\" id=\"DecisionGroupSelector\">
                <div class=\"panel panel-success mb-0\">
                    <div class=\"panel-heading\">
                        <div class=\"col-xs-8 col-sm-10 np\">
                            <h3 class=\"panel-title\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.decision.header"), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                            <i class=\"hidden-xs ri-shuffle-line ri-lg\"></i>
                            ";
        // line 18
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_index.html.twig", 18)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "variant" => "ghost", "size" => "sm", "attributes" => ["class" => "visible-xs pull-right text-success", "data-type" => "Decision"]]]]));
        // line 31
        yield "                        </div>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.decision.descr"), "html", null, true);
        yield "
                    </div>
                    <div class=\"hidden-xs panel-footer text-center\">
                        ";
        // line 37
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_index.html.twig", 37)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "variant" => "ghost", "size" => "md", "attributes" => ["data-type" => "Decision", "type" => "button"]]]]));
        // line 50
        yield "                    </div>
                </div>
            </div>
            <div class=\"mr-0 ml-0 pl-xs pr-xs campaign-group-container col-md-4 \" id=\"ActionGroupSelector\">
                <div class=\"panel panel-primary mb-0\">
                    <div class=\"panel-heading\">
                        <div class=\"col-xs-8 col-sm-10 np\">
                            <h3 class=\"panel-title\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.action.header"), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                            <i class=\"hidden-xs ri-focus-2-line ri-lg\"></i>
                            ";
        // line 61
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_index.html.twig", 61)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "size" => "sm", "attributes" => ["class" => "visible-xs pull-right", "data-type" => "Action", "type" => "button"], "variant" => "ghost"]]]));
        // line 75
        yield "                        </div>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.action.descr"), "html", null, true);
        yield "
                    </div>
                    <div class=\"hidden-xs panel-footer text-center\">
                        ";
        // line 81
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_index.html.twig", 81)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "variant" => "ghost", "size" => "md", "attributes" => ["data-type" => "Action", "type" => "button"]]]]));
        // line 94
        yield "                    </div>
                </div>
            </div>
            <div class=\"mr-0 ml-0 pl-xs pr-xs campaign-group-container col-md-4\" id=\"ConditionGroupSelector\">
                <div class=\"panel panel-danger mb-0\">
                    <div class=\"panel-heading\">
                        <div class=\"col-xs-8 col-sm-10 np\">
                            <h3 class=\"panel-title\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.condition.header"), "html", null, true);
        yield "</h3>
                        </div>
                        <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                            <i class=\"hidden-xs ri-filter-2-fill ri-lg\"></i>
                            ";
        // line 105
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_index.html.twig", 105)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "size" => "sm", "attributes" => ["class" => "visible-xs pull-right", "data-type" => "Condition", "type" => "button"], "variant" => "ghost"]]]));
        // line 119
        yield "                        </div>
                    </div>
                    <div class=\"panel-body\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.condition.descr"), "html", null, true);
        yield "</div>
                    <div class=\"hidden-xs panel-footer text-center\">
                        ";
        // line 123
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_index.html.twig", 123)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.select", "variant" => "ghost", "size" => "md", "attributes" => ["data-type" => "Condition", "type" => "button"]]]]));
        // line 136
        yield "                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"mr-0 ml-0 pl-xs pr-xs mt-xs campaign-group-container col-md-12\">
                <div id=\"CampaignPasteContainer mt-10\" class=\"panel mb-0\">
                    <div id=\"CampaignPasteDescription\" class=\"panel-body\">
                        <div><b>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.header"), "html", null, true);
        yield "</b></div>
                        <div><span class=\"text-muted\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.name"), "html", null, true);
        yield ": </span><span data-campaign-event-clone=\"sourceEventName\"></span></div>
                        <div><span class=\"text-muted\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.from"), "html", null, true);
        yield ": </span><span data-campaign-event-clone=\"sourceCampaignName\"></span></div>

                    </div>
                    <div class=\"panel-footer\">
                        ";
        // line 150
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_index.html.twig", 150)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.campaign.event.clone.insert", "size" => "md", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(        // line 155
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 155, $this->source); })()), ["objectAction" => "insert", "campaignId" =>         // line 157
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 157, $this->source); })()), "anchor" => "none", "anchorEventType" => "none"]), "variant" => "ghost", "attributes" => ["id" => "EventInsertButton", "data-toggle" => "ajax", "data-target" => "CampaignEvent_", "data-ignore-formexit" => "true", "data-method" => "POST", "data-hide-loadingbar" => "true"]]]]));
        // line 173
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"CampaignEventPanelLists\" class=\"hide\">";
        // line 179
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/Builder/_source_list.html.twig", ["campaignSources" =>         // line 180
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 180, $this->source); })()), "campaignId" =>         // line 181
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 181, $this->source); })())]);
        // line 184
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/Builder/_event_list.html.twig", ["eventSettings" =>         // line 185
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 185, $this->source); })()), "campaignId" =>         // line 186
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 186, $this->source); })())]);
        // line 188
        yield "</div>
</div>
<div class=\"clearfix\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/Builder/_index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  179 => 188,  177 => 186,  176 => 185,  175 => 184,  173 => 181,  172 => 180,  171 => 179,  164 => 173,  162 => 157,  161 => 155,  160 => 150,  153 => 146,  149 => 145,  145 => 144,  135 => 136,  133 => 123,  128 => 121,  124 => 119,  122 => 105,  115 => 101,  106 => 94,  104 => 81,  98 => 78,  93 => 75,  91 => 61,  84 => 57,  75 => 50,  73 => 37,  67 => 34,  62 => 31,  60 => 18,  53 => 14,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/Builder/_index.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/Builder/_index.html.twig");
    }
}
