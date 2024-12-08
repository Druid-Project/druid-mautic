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

/* @MauticCampaign/Campaign/details.html.twig */
class __TwigTemplate_ca550a2407809427eb75223b5b2c426d extends Template
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

        $this->blocks = [
            'indexButton' => [$this, 'block_indexButton'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCampaign/Campaign/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 5
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 5, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 8, $this->source); })()), "campaign:campaigns:viewown", [], "array", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 9, $this->source); })()), "campaign:campaigns:viewother", [], "array", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 10, $this->source); })()), "createdBy", [], "any", false, false, false, 10))], "routeBase" => "campaign", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaigns")]);
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 22
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 22, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 25, $this->source); })()), "campaign:campaigns:editown", [], "array", false, false, false, 25), CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "campaign:campaigns:editother", [], "array", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 27, $this->source); })()), "createdBy", [], "any", false, false, false, 27)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 29, $this->source); })()), "campaign:campaigns:create", [], "array", false, false, false, 29), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 31, $this->source); })()), "campaign:campaigns:deleteown", [], "array", false, false, false, 31), CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 32, $this->source); })()), "campaign:campaigns:deleteother", [], "array", false, false, false, 32), CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 33, $this->source); })()), "createdBy", [], "any", false, false, false, 33))], "routeBase" => "campaign"]);
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 41, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- campaign detail header -->
            ";
        // line 51
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticCampaign/Campaign/details.html.twig", 51)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51)]));
        // line 52
        yield "            <!--/ campaign detail header -->

            <!-- campaign detail collapseable -->
            <div class=\"collapse pr-md pl-md\" id=\"campaign-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                            ";
        // line 60
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 60, $this->source); })())]);
        yield "
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sources"]) || array_key_exists("sources", $context) ? $context["sources"] : (function () { throw new RuntimeError('Variable "sources" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["sourceType"] => $context["typeNames"]) {
            // line 62
            yield "                              ";
            if ( !Twig\Extension\CoreExtension::testEmpty($context["typeNames"])) {
                // line 63
                yield "                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">
                                      ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign.leadsource." . $context["sourceType"])), "html", null, true);
                yield "
                                    </td>
                                    <td>
                                        ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["typeNames"], ", "), "html", null, true);
                yield "
                                    </td>
                                </tr>
                              ";
            }
            // line 72
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sourceType'], $context['typeNames'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ campaign detail collapseable -->
        </div>

        <div>
            <!-- campaign detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#campaign-details\"><span
                            class=\"caret\"></span> ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a>
                </span>
            </div>
            <!--/ campaign detail collapseable toggler -->

            ";
        // line 92
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("left.section.top", $context);
        yield "
            ";
        // line 93
        $context["dateFrom"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 93, $this->source); })()), "children", [], "any", false, false, false, 93), "date_from", [], "array", false, false, false, 93), "vars", [], "any", false, false, false, 93), "data", [], "array", false, false, false, 93);
        // line 94
        yield "            ";
        $context["dateTo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 94, $this->source); })()), "children", [], "any", false, false, false, 94), "date_to", [], "array", false, false, false, 94), "vars", [], "any", false, false, false, 94), "data", [], "array", false, false, false, 94);
        // line 95
        yield "            <!-- some stats -->
            <div class=\"stats-menu pl-md mt-lg\">
                <!-- tabs controls -->
                <ul class=\"nav nav-tabs nav-tabs-contained\">
                    <li class=\"active\">
                        <a href=\"#stats-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.stats"), "html", null, true);
        yield "
                        </a>
                    </li>
                    <li>
                        <a href=\"#reads-map-container\" role=\"tab\" data-toggle=\"tab\" data-load=\"map\">
                            ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.maps"), "html", null, true);
        yield "
                        </a>
                    </li>
                </ul>
                <!--/ tabs controls -->
                <div class=\"date-range\">
                    ";
        // line 112
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 113
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 113, $this->source); })())]);
        // line 114
        yield "
                </div>
            </div>
            <div class=\"stats-menu__content tab-content pa-md mb-lg shd-sm\">
                <div class=\"tab-pane active bdr-w-0\" id=\"stats-container\">
                    <div id=\"emailGraphStats\">";
        // line 120
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 121
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 121, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 125
        yield "</div>

                </div>
                <div class=\"tab-pane bdr-w-0\" id=\"reads-map-container\"
                     data-map-url=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_map_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 129, $this->source); })()), "id", [], "any", false, false, false, 129), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 129, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 129, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                >
                    <div class=\"spinner\">
                        <i class=\"ri-loader-3-line ri-spin\"></i>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 138
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs nav-tabs-contained\">
                <li class=\"active\">
                    <a href=\"#preview-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.preview.header"), "html", null, true);
        yield "
                    </a>
                </li>
                ";
        // line 147
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 147, $this->source); })()), "decision", [], "any", false, false, false, 147))) {
            // line 148
            yield "                    <li class=\"\">
                        <a href=\"#decisions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.decisions.header"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 154
        yield "                ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 154, $this->source); })()), "action", [], "any", false, false, false, 154))) {
            // line 155
            yield "                    <li class=\"\">
                        <a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.actions.header"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 161
        yield "                ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 161, $this->source); })()), "condition", [], "any", false, false, false, 161))) {
            // line 162
            yield "                    <li class=\"\">
                        <a href=\"#conditions-container\" role=\"tab\" data-toggle=\"tab\">
                            ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.conditions.header"), "html", null, true);
            yield "
                        </a>
                    </li>
                ";
        }
        // line 168
        yield "                <li class=\"\">
                    <a href=\"#leads-container\" role=\"tab\" data-toggle=\"tab\">
                        ";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "
                    </a>
                </li>
                ";
        // line 173
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs", $context);
        yield "
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <!-- #events-container -->
                <div class=\"active tab-pane fade in bdr-w-0\" id=\"preview-container\">";
        // line 182
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_preview.html.twig", ["campaignId" => CoreExtension::getAttribute($this->env, $this->source,         // line 183
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183), "campaign" =>         // line 184
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 184, $this->source); })()), "campaignEvents" =>         // line 185
(isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 185, $this->source); })()), "campaignSources" =>         // line 186
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 186, $this->source); })()), "eventSettings" =>         // line 187
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 187, $this->source); })()), "canvasSettings" => CoreExtension::getAttribute($this->env, $this->source,         // line 188
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 188, $this->source); })()), "canvasSettings", [], "any", false, false, false, 188)]);
        // line 190
        yield "</div>
              ";
        // line 191
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 191, $this->source); })()), "decision", [], "any", false, false, false, 191))) {
            // line 192
            yield "                <div class=\"tab-pane fade in bdr-w-0\" id=\"decisions-container\">";
            // line 193
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 193, $this->source); })()), "decision", [], "array", false, false, false, 193)]);
            // line 194
            yield "</div>
              ";
        }
        // line 196
        yield "              ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 196, $this->source); })()), "action", [], "any", false, false, false, 196))) {
            // line 197
            yield "                <div class=\"tab-pane fade in bdr-w-0\" id=\"actions-container\">";
            // line 198
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 198, $this->source); })()), "action", [], "array", false, false, false, 198)]);
            // line 199
            yield "</div>
              ";
        }
        // line 201
        yield "              ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 201, $this->source); })()), "condition", [], "any", false, false, false, 201))) {
            // line 202
            yield "                <div class=\"tab-pane fade in bdr-w-0\" id=\"conditions-container\">";
            // line 203
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/_events.html.twig", ["events" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 203, $this->source); })()), "condition", [], "array", false, false, false, 203)]);
            // line 204
            yield "</div>
              ";
        }
        // line 206
        yield "            <!--/ #events-container -->
            <div class=\"tab-pane fade in bdr-w-0 page-list\"
                 id=\"leads-container\"
                 data-target-url=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_contacts", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209), "page" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "session", [], "any", false, false, false, 209), "get", ["mautic.campaign.contact.page", 1], "method", false, false, false, 209)]), "html", null, true);
        yield "\">
                <div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div>
                <div class=\"clearfix\"></div>
            </div>
            ";
        // line 213
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.content", $context);
        yield "
        </div>
        <!--/ end: tab-content -->

        ";
        // line 217
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("left.section.bottom", $context);
        yield "
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        ";
        // line 223
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.top", $context);
        yield "

        ";
        // line 225
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 225, $this->source); })())]);
        yield "

        ";
        // line 227
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("right.section.bottom", $context);
        yield "
    </div>
    <!--/ right section -->
</div>
<!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/details.html.twig";
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
        return array (  425 => 227,  420 => 225,  415 => 223,  406 => 217,  399 => 213,  392 => 209,  387 => 206,  383 => 204,  381 => 203,  379 => 202,  376 => 201,  372 => 199,  370 => 198,  368 => 197,  365 => 196,  361 => 194,  359 => 193,  357 => 192,  355 => 191,  352 => 190,  350 => 188,  349 => 187,  348 => 186,  347 => 185,  346 => 184,  345 => 183,  344 => 182,  333 => 173,  327 => 170,  323 => 168,  316 => 164,  312 => 162,  309 => 161,  302 => 157,  298 => 155,  295 => 154,  288 => 150,  284 => 148,  282 => 147,  276 => 144,  267 => 138,  255 => 129,  249 => 125,  247 => 121,  246 => 120,  239 => 114,  237 => 113,  236 => 112,  227 => 106,  219 => 101,  211 => 95,  208 => 94,  206 => 93,  202 => 92,  194 => 87,  178 => 73,  172 => 72,  165 => 68,  159 => 65,  155 => 63,  152 => 62,  148 => 61,  144 => 60,  134 => 52,  132 => 51,  124 => 45,  117 => 44,  109 => 41,  102 => 40,  97 => 33,  96 => 32,  95 => 31,  94 => 29,  93 => 27,  92 => 26,  91 => 25,  90 => 22,  89 => 21,  82 => 20,  71 => 18,  66 => 10,  65 => 9,  64 => 8,  63 => 5,  62 => 4,  55 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/details.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/details.html.twig");
    }
}
