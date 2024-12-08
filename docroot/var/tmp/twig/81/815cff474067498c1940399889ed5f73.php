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

/* @MauticCampaign/Event/_generic.html.twig */
class __TwigTemplate_e4f6222d7736794a94d31f532a8a9641 extends Template
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
        if ( !array_key_exists("update", $context)) {
            // line 8
            yield "  <div id=\"CampaignEvent_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "id", [], "array", false, false, false, 8), "html", null, true);
            yield "\"
       data-type=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "eventType", [], "array", false, false, false, 9), "html", null, true);
            yield "\"
       class=\"draggable list-campaign-event list-campaign-";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "eventType", [], "array", false, false, false, 10), "html", null, true);
            yield "\"
       data-event=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "type", [], "array", false, false, false, 11), "html", null, true);
            yield "\"
       data-event-id=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "id", [], "array", false, false, false, 12), "html", null, true);
            yield "\">
";
        }
        // line 14
        yield "    <div class=\"campaign-event-type\">

    ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 16, $this->source); })()), "eventType", [], "array", false, false, false, 16) == "decision")) {
            // line 17
            yield "    <div class=\"campaign-event-content fw-nowrap gap-xs ai-center fd-row d-flex fg-1 pa-md\">
        <span class=\"h5 fw-b event-type-color\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.when"), "html", null, true);
            yield "</span>
        <span>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "type", [], "array", false, false, false, 19))), "html", null, true);
            yield "</span>
        <span class=\"campaign-event-name label label-info ml-5 mr-lg ellipsis\">
            ";
            // line 21
            if (("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) {
                yield "<small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "id", [], "array", false, false, false, 21), "html", null, true);
                yield "</small> ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "name", [], "array", false, false, false, 21), "html", null, true);
            yield "
        </span>
        <i class=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CampaignBundle\Twig\Extension\CampaignEventIconExtension']->getCampaignEventIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "type", [], "array", false, false, false, 23)), "html", null, true);
            yield " ri-lg ml-a campaign-event-icon event-type-color\"></i>
    </div>

    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "eventType", [], "array", false, false, false, 26) == "action")) {
            // line 27
            yield "        <div class=\"campaign-event-content d-flex fw-nowrap ai-center gap-sm\">
            <div class=\"campaign-event-icon pa-sm mr-5\"><i class=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CampaignBundle\Twig\Extension\CampaignEventIconExtension']->getCampaignEventIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "type", [], "array", false, false, false, 28)), "html", null, true);
            yield "\"></i></div>
            <div class=\"d-flex fd-column ai-start\">
                <span class=\"fs-18 fw-l\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "type", [], "array", false, false, false, 30))), "html", null, true);
            yield "</span>
                <span class=\"campaign-event-name ellipsis\">";
            // line 31
            if (("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) {
                yield "<small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "id", [], "array", false, false, false, 31), "html", null, true);
                yield "</small> ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "name", [], "array", false, false, false, 31), "html", null, true);
            yield "</span>
            </div>
        </div>

    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "eventType", [], "array", false, false, false, 35) == "condition")) {
            // line 36
            yield "    <div class=\"campaign-event-content fw-nowrap gap-xs ai-center fd-row d-flex fg-1 pa-md\">
        <span class=\"h5 fw-b event-type-color\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.if"), "html", null, true);
            yield "</span>
        <span>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 38, $this->source); })()), "type", [], "array", false, false, false, 38))), "html", null, true);
            yield "</span>
            <span class=\"campaign-event-name label label-warning ml-5 mr-lg ellipsis\">
            ";
            // line 40
            if (("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) {
                yield "<small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "id", [], "array", false, false, false, 40), "html", null, true);
                yield "</small> ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "name", [], "array", false, false, false, 40), "html", null, true);
            yield "
            </span>
        <i class=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CampaignBundle\Twig\Extension\CampaignEventIconExtension']->getCampaignEventIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "type", [], "array", false, false, false, 42)), "html", null, true);
            yield " ri-lg ml-a campaign-event-icon event-type-color\"></i>
    </div>
    ";
        }
        // line 45
        yield "    </div>


";
        // line 48
        if ( !array_key_exists("update", $context)) {
            // line 49
            yield "    <div class=\"campaign-event-buttons hide\">
        ";
            // line 50
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Event/_generic.html.twig", 50)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 53
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 53, $this->source); })()), ["objectAction" => "clone", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 55
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "id", [], "array", false, false, false, 55), "campaignId" =>             // line 56
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 56, $this->source); })())]), "variant" => "secondary", "icon" => "ri-file-copy-line", "size" => "xs", "icon_only" => true, "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.btn.tooltip"), "attributes" => ["data-toggle" => "ajax", "data-target" => ("CampaignEvent_" . CoreExtension::getAttribute($this->env, $this->source,             // line 65
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "id", [], "array", false, false, false, 65)), "data-ignore-formexit" => "true", "data-method" => "POST", "data-hide-loadingbar" => "true", "class" => "btn-clone"]], ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 73
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 73, $this->source); })()), ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 75
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "id", [], "array", false, false, false, 75), "campaignId" =>             // line 76
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 76, $this->source); })())]), "variant" => "secondary", "icon" => "ri-pencil-line", "size" => "xs", "icon_only" => true, "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.edit.btn.tooltip"), "attributes" => ["data-toggle" => "ajaxmodal", "data-prevent-dismiss" => "true", "data-target" => "#CampaignEventModal", "class" => "btn-edit"]], ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 91
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 91, $this->source); })()), ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 93
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 93, $this->source); })()), "id", [], "array", false, false, false, 93), "campaignId" =>             // line 94
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 94, $this->source); })())]), "variant" => "primary", "icon" => "ri-delete-bin-line", "size" => "xs", "danger" => true, "icon_only" => true, "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.remove.btn.tooltip"), "attributes" => ["data-toggle" => "ajax", "data-target" => ("CampaignEvent_" . CoreExtension::getAttribute($this->env, $this->source,             // line 104
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 104, $this->source); })()), "id", [], "array", false, false, false, 104)), "data-ignore-formexit" => "true", "data-method" => "POST", "data-hide-loadingbar" => "true", "class" => "btn-delete"]]]]));
            // line 113
            yield "    </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Event/_generic.html.twig";
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
        return array (  181 => 113,  179 => 104,  178 => 94,  177 => 93,  176 => 91,  175 => 76,  174 => 75,  173 => 73,  172 => 65,  171 => 56,  170 => 55,  169 => 53,  168 => 50,  165 => 49,  163 => 48,  158 => 45,  152 => 42,  142 => 40,  137 => 38,  133 => 37,  130 => 36,  128 => 35,  116 => 31,  112 => 30,  107 => 28,  104 => 27,  102 => 26,  96 => 23,  86 => 21,  81 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 14,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  46 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Event/_generic.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Event/_generic.html.twig");
    }
}
