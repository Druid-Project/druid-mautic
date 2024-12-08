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

/* @MauticCampaign/Event/_preview.html.twig */
class __TwigTemplate_b1a23f1fd6894f1151d88e3ccb2d1e5e extends Template
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
        if (( !array_key_exists("route", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })())))) {
            // line 7
            yield "  ";
            $context["route"] = "mautic_campaignevent_action";
        }
        // line 9
        yield "
";
        // line 10
        $context["eventType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "eventType", [], "array", false, false, false, 10);
        // line 11
        $context["eventLogic"] = "";
        // line 12
        yield "
";
        // line 14
        $context["eventName"] = ((("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) ? ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "name", [], "array", false, false, false, 14) . " <small>") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)) . "</small>")) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 14, $this->source); })()), "name", [], "array", false, false, false, 14)));
        // line 15
        yield "
";
        // line 16
        if (( !array_key_exists("update", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 16, $this->source); })())))) {
            // line 17
            yield "<div id=\"CampaignEvent_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "id", [], "array", false, false, false, 17), "html", null, true);
            yield "\"
data-type=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "eventType", [], "array", false, false, false, 18), "html", null, true);
            yield "\"
class=\"draggable list-campaign-event list-campaign-";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "eventType", [], "array", false, false, false, 19), "html", null, true);
            yield "\"
data-event=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "type", [], "array", false, false, false, 20), "html", null, true);
            yield "\"
data-event-id=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "id", [], "array", false, false, false, 21), "html", null, true);
            yield "\"
data-event-yes-percent=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "yesPercent", [], "array", false, false, false, 22), "html", null, true);
            yield "\"
data-event-no-percent=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "noPercent", [], "array", false, false, false, 23), "html", null, true);
            yield "\">
";
        }
        // line 25
        yield "
<div class=\"campaign-event-type\">
    ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "eventType", [], "array", false, false, false, 27) == "decision")) {
            // line 28
            yield "    <div class=\"campaign-event-content fw-nowrap gap-xs ai-center fd-row d-flex fg-1\">
        <span class=\"h5 fw-b event-type-color\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.when"), "html", null, true);
            yield "</span>
        <span>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "type", [], "array", false, false, false, 30))), "html", null, true);
            yield "</span>
        <span class=\"campaign-event-name label label-info ml-5 mr-5 ellipsis\">
            ";
            // line 32
            if (("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) {
                yield "<small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "id", [], "array", false, false, false, 32), "html", null, true);
                yield "</small> ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "name", [], "array", false, false, false, 32), "html", null, true);
            yield "
        </span>
        <i class=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CampaignBundle\Twig\Extension\CampaignEventIconExtension']->getCampaignEventIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 34, $this->source); })()), "type", [], "array", false, false, false, 34)), "html", null, true);
            yield " ri-lg ml-a campaign-event-icon event-type-color\"></i>
        <div class=\"campaign-event-stat pa-4\">
            <span data-toggle=\"tooltip\" title=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.completed.actions"), "html", null, true);
            yield "\"><span class=\"ri-check-line\"></span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 36, $this->source); })()), "logCountProcessed", [], "any", false, false, false, 36), "html", null, true);
            yield "</span>
            ";
            // line 37
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "logCountForPending", [], "any", false, false, false, 37)) {
                // line 38
                yield "            <span class=\"campaign-event-stat-divider\">|</span>
            <span data-toggle=\"tooltip\" title=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.pending.actions"), "html", null, true);
                yield "\"><span class=\"ri-hourglass-line\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 39, $this->source); })()), "logCountForPending", [], "any", false, false, false, 39), "html", null, true);
                yield "</span>
            ";
            }
            // line 41
            yield "        </div>
    </div>

    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 44
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "eventType", [], "array", false, false, false, 44) == "action")) {
            // line 45
            yield "        <div class=\"campaign-event-content d-flex fw-nowrap ai-center gap-sm\">
            <div class=\"campaign-event-icon pa-sm mr-5\"><i class=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CampaignBundle\Twig\Extension\CampaignEventIconExtension']->getCampaignEventIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 46, $this->source); })()), "type", [], "array", false, false, false, 46)), "html", null, true);
            yield "\"></i></div>
            <div class=\"d-flex fd-column ai-start\">
                <span class=\"fs-18 fw-l\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 48, $this->source); })()), "type", [], "array", false, false, false, 48))), "html", null, true);
            yield "</span>
                <span class=\"campaign-event-name ellipsis\">";
            // line 49
            if (("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) {
                yield "<small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "id", [], "array", false, false, false, 49), "html", null, true);
                yield "</small> ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "name", [], "array", false, false, false, 49), "html", null, true);
            yield "</span>
            </div>
            <div class=\"campaign-event-stat pa-4\">
                <span data-toggle=\"tooltip\" title=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.completed.actions"), "html", null, true);
            yield "\"><span class=\"ri-check-line\"></span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 52, $this->source); })()), "logCountProcessed", [], "any", false, false, false, 52), "html", null, true);
            yield "</span>
                ";
            // line 53
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 53, $this->source); })()), "logCountForPending", [], "any", false, false, false, 53)) {
                // line 54
                yield "                <span class=\"campaign-event-stat-divider\">|</span>
                <span data-toggle=\"tooltip\" title=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.pending.actions"), "html", null, true);
                yield "\"><span class=\"ri-hourglass-line\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "logCountForPending", [], "any", false, false, false, 55), "html", null, true);
                yield "</span>
                ";
            }
            // line 57
            yield "            </div>
        </div>

    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 60
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "eventType", [], "array", false, false, false, 60) == "condition")) {
            // line 61
            yield "    <div class=\"campaign-event-content fw-nowrap gap-xs ai-center fd-row d-flex fg-1\">
        <span class=\"h5 fw-b event-type-color\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.if"), "html", null, true);
            yield "</span>
        <span>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 63, $this->source); })()), "type", [], "array", false, false, false, 63))), "html", null, true);
            yield "</span>
            <span class=\"campaign-event-name label label-warning ml-5 mr-5 ellipsis\">
            ";
            // line 65
            if (("dev" == Twig\Extension\CoreExtension::constant("MAUTIC_ENV"))) {
                yield "<small>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "id", [], "array", false, false, false, 65), "html", null, true);
                yield "</small> ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "name", [], "array", false, false, false, 65), "html", null, true);
            yield "
            </span>
        <i class=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\CampaignBundle\Twig\Extension\CampaignEventIconExtension']->getCampaignEventIcon(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 67, $this->source); })()), "type", [], "array", false, false, false, 67)), "html", null, true);
            yield " ri-lg ml-a campaign-event-icon event-type-color\"></i>
        <div class=\"campaign-event-stat pa-4\">
            <span data-toggle=\"tooltip\" title=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.completed.actions"), "html", null, true);
            yield "\"><span class=\"ri-check-line\"></span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 69, $this->source); })()), "logCountProcessed", [], "any", false, false, false, 69), "html", null, true);
            yield "</span>
            ";
            // line 70
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "logCountForPending", [], "any", false, false, false, 70)) {
                // line 71
                yield "            <span class=\"campaign-event-stat-divider\">|</span>
            <span data-toggle=\"tooltip\" title=\"";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.pending.actions"), "html", null, true);
                yield "\"><span class=\"ri-hourglass-line\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 72, $this->source); })()), "logCountForPending", [], "any", false, false, false, 72), "html", null, true);
                yield "</span>
            ";
            }
            // line 74
            yield "        </div>
    </div>
    ";
        }
        // line 77
        yield "</div>


";
        // line 80
        if ( !array_key_exists("update", $context)) {
            // line 81
            yield "<div class=\"campaign-event-buttons hide\">
 <a data-toggle=\"ajax\" data-target=\"CampaignEvent_";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 82, $this->source); })()), "id", [], "array", false, false, false, 82), "html", null, true);
            yield "\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 82, $this->source); })()), ["objectAction" => "clone", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 82, $this->source); })()), "id", [], "array", false, false, false, 82), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 82, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-clone btn-xs\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.clone.btn.tooltip"), "html", null, true);
            yield "\">
     <i class=\"ri-file-copy-line\"></i>
 </a>
 <a data-toggle=\"ajaxmodal\" data-prevent-dismiss=\"true\" data-target=\"#CampaignEventModal\" href=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 85, $this->source); })()), ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 85, $this->source); })()), "id", [], "array", false, false, false, 85), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 85, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-secondary btn-xs btn-edit\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.edit.btn.tooltip"), "html", null, true);
            yield "\">
     <i class=\"ri-pencil-line\"></i>
 </a>
 <a data-toggle=\"ajax\" data-target=\"CampaignEvent_";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "id", [], "array", false, false, false, 88), "html", null, true);
            yield "\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 88, $this->source); })()), ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 88, $this->source); })()), "id", [], "array", false, false, false, 88), "campaignId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 88, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-delete btn-danger btn-xs\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.remove.btn.tooltip"), "html", null, true);
            yield "\">
     <i class=\"ri-delete-bin-line\"></i>
 </a>
</div>
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
        return "@MauticCampaign/Event/_preview.html.twig";
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
        return array (  279 => 88,  271 => 85,  261 => 82,  258 => 81,  256 => 80,  251 => 77,  246 => 74,  239 => 72,  236 => 71,  234 => 70,  228 => 69,  223 => 67,  213 => 65,  208 => 63,  204 => 62,  201 => 61,  199 => 60,  194 => 57,  187 => 55,  184 => 54,  182 => 53,  176 => 52,  165 => 49,  161 => 48,  156 => 46,  153 => 45,  151 => 44,  146 => 41,  139 => 39,  136 => 38,  134 => 37,  128 => 36,  123 => 34,  113 => 32,  108 => 30,  104 => 29,  101 => 28,  99 => 27,  95 => 25,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  65 => 17,  63 => 16,  60 => 15,  58 => 14,  55 => 12,  53 => 11,  51 => 10,  48 => 9,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Event/_preview.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Event/_preview.html.twig");
    }
}
