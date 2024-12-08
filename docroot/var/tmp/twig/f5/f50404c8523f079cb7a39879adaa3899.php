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

/* @MauticLead/List/details.html.twig */
class __TwigTemplate_35242941cdb3be1960b181a04133cc39 extends Template
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
            'mauticContent' => [$this, 'block_mauticContent'],
            'indexButton' => [$this, 'block_indexButton'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 17
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/List/details.html.twig", 17);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "list";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 23
(isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 23, $this->source); })()), "customButtons" => ((        // line 24
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 24, $this->source); })()), [])) : ([])), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OWN"), [], "array", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_VIEW_OTHER"), [], "array", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 26, $this->source); })()), "createdBy", [], "any", false, false, false, 26))], "routeBase" => "segment", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.lists")]);
        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 37
(isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 37, $this->source); })()), "customButtons" => ((        // line 38
array_key_exists("customButtons", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 38, $this->source); })()), [])) : ([])), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OWN"), [], "array", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_EDIT_OTHER"), [], "array", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 40, $this->source); })()), "createdBy", [], "any", false, false, false, 40)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 41, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OWN"), [], "array", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 41, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_DELETE_OTHER"), [], "array", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 41, $this->source); })()), "createdBy", [], "any", false, false, false, 41)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 42
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 42, $this->source); })()), Twig\Extension\CoreExtension::constant("Mautic\\LeadBundle\\Security\\Permissions\\LeadPermissions::LISTS_CREATE"), [], "array", false, false, false, 42)], "routeBase" => "segment"]);
        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 49, $this->source); })())]);
        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        $context["hasSegmentMembershipFilter"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 53, $this->source); })()), "hasFilterTypeOf", ["leadList"], "method", false, false, false, 53);
        // line 54
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- page detail header -->
            <!-- segment detail collapseable toggler -->
            ";
        // line 61
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticLead/List/details.html.twig", 61)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61)]));
        // line 62
        yield "            <div class=\"collapse pr-md pl-md\" id=\"segment-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                            ";
        // line 67
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 67, $this->source); })())]);
        yield "
                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "</span></td>
                                <td>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["segmentCount"]) || array_key_exists("segmentCount", $context) ? $context["segmentCount"] : (function () { throw new RuntimeError('Variable "segmentCount" does not exist.', 70, $this->source); })()), "html", null, true);
        yield "</td>
                            </tr>
                            ";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 72, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 72)) {
            // line 73
            yield "                            <tr>
                                <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.last_built_time"), "html", null, true);
            yield "</span></td>
                                <td>
                                    ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.date.second", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 76, $this->source); })()), "lastBuiltTime", [], "any", false, false, false, 76)]), "html", null, true);
            yield " (";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 76, $this->source); })()), "lastBuiltDate", [], "any", false, false, false, 76));
            yield ")
                                </td>
                            </tr>
                            ";
        }
        // line 80
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/ segment detail collapseable toggler -->
        <div>
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#segment-details\">
                        <span class=\"caret\"></span> ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
            </div>
            <!-- some stats -->

            <!--/ stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-md-3 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"ri-line-chart-fill\"></span>
                                        ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.segment.stats"), "html", null, true);
        yield "
                                    </h5>
                                </div>
                                <div class=\"col-md-9 va-m\">
                                    ";
        // line 110
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 111
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 111, $this->source); })()), "class" => "pull-right"]);
        // line 113
        yield "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 117
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 118
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 118, $this->source); })()), "chartType" => "line", "chartHeight" => 300]);
        // line 121
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 128
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <!-- search bar-->
            <form method=\"post\" action=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_contacts", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 132, $this->source); })()), "id", [], "any", false, false, false, 132)]), "html", null, true);
        yield "\" class=\"panel\" id=\"segment-contact-filters\">
                ";
        // line 133
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 133) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 133, $this->source); })()), "types", [], "any", false, false, false, 133)))) {
            // line 134
            yield "                    <div class=\"history-search panel-footer text-muted\">
                        <div class=\"col-sm-5\">
                            <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            yield "\">
                                ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 137, $this->source); })()), "types", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 138
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($context["typeKey"]);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                            </select>
                        </div>
                    </div>
                ";
        }
        // line 144
        yield "            </form>

            <!--/ search bar -->
            <ul class=\"nav nav-tabs nav-tabs-contained\">
                <li class=\"active\">
                    <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.leads"), "html", null, true);
        yield "</a>
                </li>
                ";
        // line 151
        if ((isset($context["hasSegmentMembershipFilter"]) || array_key_exists("hasSegmentMembershipFilter", $context) ? $context["hasSegmentMembershipFilter"] : (function () { throw new RuntimeError('Variable "hasSegmentMembershipFilter" does not exist.', 151, $this->source); })())) {
            // line 152
            yield "                  <li>
                      <a id=\"segment-dependencies\" href=\"#segment-dependencies-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segment.dependencies"), "html", null, true);
            yield "</a>
                  </li>
                ";
        }
        // line 156
        yield "                <li>
                    <a id=\"campaign-share-tab\" href=\"#campaign-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.campaign.share"), "html", null, true);
        yield "</a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            <div class=\"tab-pane active bdr-w-0 page-list\"
                 id=\"contacts-container\"
                 data-target-url=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_contacts", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167), "page" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "session", [], "any", false, false, false, 167), "get", ["mautic.segment.contact.page", 1], "method", false, false, false, 167)]), "html", null, true);
        yield "\">
              <div class=\"spinner\"><i class=\"ri-loader-3-line ri-spin\"></i></div>
            </div>

            ";
        // line 171
        if ((isset($context["hasSegmentMembershipFilter"]) || array_key_exists("hasSegmentMembershipFilter", $context) ? $context["hasSegmentMembershipFilter"] : (function () { throw new RuntimeError('Variable "hasSegmentMembershipFilter" does not exist.', 171, $this->source); })())) {
            // line 172
            yield "              <div class=\"tab-pane bdr-w-0 page-list\" id=\"segment-dependencies-container\"></div>
            ";
        }
        // line 174
        yield "
            <div class=\"tab-pane bdr-w-0 page-list\" id=\"campaign-container\">
                <div id=\"campaign-share-container\" style=\"position: relative\">
                    <table id=\"campaign-share-table\" class=\"table table-hover mb-0\">
                        <thead>
                        <tr>
                            <th>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign"), "html", null, true);
        yield "</th>
                            <th>";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.share"), "html", null, true);
        yield "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaignStats"]) || array_key_exists("campaignStats", $context) ? $context["campaignStats"] : (function () { throw new RuntimeError('Variable "campaignStats" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 186
            yield "                            <tr>
                                <td>
                                    <a href=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 188)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "name", [], "any", false, false, false, 189), "html", null, true);
            // line 190
            yield "</a>
                                </td>
                                <td width=\"20%\">
                                    <span class=\"campaign-share-stat\" data-value=\"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 193), "html", null, true);
            yield "\"
                                          id=\"campaign-share-stat-";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "id", [], "any", false, false, false, 194), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "share", [], "any", false, false, false, 194), "html", null, true);
            yield "</span> %
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        ";
        // line 209
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/usage.html.twig", ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segments.usages"), "stats" =>         // line 211
(isset($context["usageStats"]) || array_key_exists("usageStats", $context) ? $context["usageStats"] : (function () { throw new RuntimeError('Variable "usageStats" does not exist.', 211, $this->source); })()), "noUsages" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.segments.no_usages")]);
        // line 213
        yield "

        <!-- activity feed -->
        ";
        // line 217
        yield "    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 219, $this->source); })()), "id", [], "any", false, false, false, 219));
        yield "\" />
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
        return "@MauticLead/List/details.html.twig";
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
        return array (  413 => 219,  409 => 217,  404 => 213,  402 => 211,  401 => 209,  388 => 198,  376 => 194,  372 => 193,  367 => 190,  365 => 189,  362 => 188,  358 => 186,  354 => 185,  347 => 181,  343 => 180,  335 => 174,  331 => 172,  329 => 171,  322 => 167,  309 => 157,  306 => 156,  300 => 153,  297 => 152,  295 => 151,  290 => 149,  283 => 144,  277 => 140,  266 => 138,  262 => 137,  258 => 136,  254 => 134,  252 => 133,  248 => 132,  241 => 128,  232 => 121,  230 => 118,  229 => 117,  223 => 113,  221 => 111,  220 => 110,  213 => 106,  195 => 91,  182 => 80,  173 => 76,  168 => 74,  165 => 73,  163 => 72,  158 => 70,  154 => 69,  149 => 67,  142 => 62,  140 => 61,  131 => 54,  129 => 53,  122 => 52,  117 => 49,  110 => 48,  105 => 42,  104 => 41,  103 => 40,  102 => 38,  101 => 37,  100 => 36,  93 => 35,  82 => 33,  77 => 26,  76 => 24,  75 => 23,  74 => 22,  67 => 21,  56 => 19,  45 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/List/details.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/List/details.html.twig");
    }
}
