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

/* @MauticCampaign/Event/jump.html.twig */
class __TwigTemplate_9adfcf0f9d5a4b5a58119ec81f89b8eb extends Template
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
        $context["route"] = ((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 1, $this->source); })()), "mautic_campaignevent_action")) : ("mautic_campaignevent_action"));
        // line 2
        yield "
";
        // line 3
        if ( !array_key_exists("update", $context)) {
            // line 4
            yield "<div id=\"CampaignEvent_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "id", [], "array", false, false, false, 4), "html", null, true);
            yield "\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "eventType", [], "array", false, false, false, 4), "html", null, true);
            yield "\" class=\"draggable list-campaign-event list-campaign-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "eventType", [], "array", false, false, false, 4), "html", null, true);
            yield " list-campaign-jump\" data-event=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "type", [], "array", false, false, false, 4), "html", null, true);
            yield "\" data-event-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "id", [], "array", false, false, false, 4), "html", null, true);
            yield "\">
";
        }
        // line 6
        yield "<div class=\"campaign-event-type\">

<div class=\"campaign-event-content d-flex fw-nowrap ai-center gap-sm\">
    <div class=\"campaign-event-icon pa-sm mr-5\"><i class=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CampaignBundle\Twig\Extension\CampaignEventIconExtension']->getCampaignEventIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "type", [], "array", false, false, false, 9)), "html", null, true);
        yield "\"></i></div>

        <span class=\"fs-18 fw-l\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "type", [], "array", false, false, false, 11))), "html", null, true);
        yield "</span>
        <span class=\"campaign-event-name label label-primary ellipsis\">";
        // line 12
        if (("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) {
            yield "<small>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "id", [], "array", false, false, false, 12), "html", null, true);
            yield "</small> ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "name", [], "array", false, false, false, 12), "html", null, true);
        yield "</span>
        <a class=\"label label-primary has-click-event highlight-jump-target ml-sm\" href=\"javascript:void(0)\" onClick=\"Mautic.highlightJumpTarget(event, this)\" data-jump-target=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "properties", [], "array", false, false, false, 13), "jumpToEvent", [], "array", false, false, false, 13), "html", null, true);
        yield "\">
            ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.locate"), "html", null, true);
        yield "
            <i class=\"ri-map-pin-2-line\"></i>
        </a>
</div>
</div>
";
        // line 19
        if ( !array_key_exists("update", $context)) {
            // line 20
            yield "<div class=\"campaign-event-buttons hide\">
    ";
            // line 21
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Event/jump.html.twig", 21)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 24
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 24, $this->source); })()), ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 26
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "array", false, false, false, 26), "campaignId" =>             // line 27
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 27, $this->source); })())]), "variant" => "secondary", "icon" => "ri-pencil-line", "size" => "xs", "icon_only" => true, "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.edit.btn.tooltip"), "attributes" => ["data-toggle" => "ajaxmodal", "data-prevent-dismiss" => "true", "data-target" => "#CampaignEventModal", "class" => "btn-edit"]], ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 42
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 42, $this->source); })()), ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 44
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "id", [], "array", false, false, false, 44), "campaignId" =>             // line 45
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 45, $this->source); })())]), "variant" => "primary", "danger" => true, "icon" => "ri-delete-bin-line", "size" => "xs", "icon_only" => true, "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.remove.btn.tooltip"), "attributes" => ["data-toggle" => "ajax", "data-target" => ("CampaignEvent_" . CoreExtension::getAttribute($this->env, $this->source,             // line 55
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "id", [], "array", false, false, false, 55)), "data-ignore-formexit" => "true", "data-method" => "POST", "data-hide-loadingbar" => "true", "class" => "btn-delete"]]]]));
            // line 64
            yield "</div>

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
        return "@MauticCampaign/Event/jump.html.twig";
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
        return array (  112 => 64,  110 => 55,  109 => 45,  108 => 44,  107 => 42,  106 => 27,  105 => 26,  104 => 24,  103 => 21,  100 => 20,  98 => 19,  90 => 14,  86 => 13,  77 => 12,  73 => 11,  68 => 9,  63 => 6,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Event/jump.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Event/jump.html.twig");
    }
}
