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

/* @MauticForm/Form/details.html.twig */
class __TwigTemplate_da99157c341b21df0d24dd1a86dbd625 extends Template
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
        // line 16
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticForm/Form/details.html.twig", 16);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "form";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 22
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 22, $this->source); })()), "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 24, $this->source); })()), "form:forms:viewown", [], "array", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 24, $this->source); })()), "form:forms:viewother", [], "array", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 24, $this->source); })()), "createdBy", [], "any", false, false, false, 24))], "routeBase" => "form", "langVar" => "form", "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.forms")]);
        // line 29
        yield "
";
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 36
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 36, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 38, $this->source); })()), "form:forms:editown", [], "array", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 38, $this->source); })()), "form:forms:editother", [], "array", false, false, false, 38), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 38, $this->source); })()), "createdBy", [], "any", false, false, false, 38)), "clone" => CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 39, $this->source); })()), "form:forms:create", [], "array", false, false, false, 39), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), "form:forms:deleteown", [], "array", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 40, $this->source); })()), "form:forms:deleteother", [], "array", false, false, false, 40), CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 40, $this->source); })()), "createdBy", [], "any", false, false, false, 40))], "routeBase" => "form", "langVar" => "form", "customButtons" => [["attr" => ["data-toggle" => "", "target" => "_blank", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)])], "iconClass" => "ri-camera-3-line", "btnText" => "mautic.form.form.preview", "btnClass" => "btn btn-ghost btn-nospin"], ["attr" => ["data-toggle" => "ajax", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_action", ["objectAction" => "results", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)])], "iconClass" => "ri-database-line", "btnText" => "mautic.form.form.results"]]]);
        // line 64
        yield "
";
        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 68
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" =>         // line 69
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 69, $this->source); })()), "status" => "available"]);
        // line 72
        yield from         $this->loadTemplate("@MauticCore/Helper/_tag.html.twig", "@MauticForm/Form/details.html.twig", 72)->unwrap()->yield(CoreExtension::merge($context, ["tags" => [["type" => "read-only", "color" => "warm-gray", "label" => (((CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 77, $this->source); })()), "formType", [], "any", false, false, false, 77) == "campaign")) ? ("mautic.form.type.campaign.header") : ("mautic.form.type.standalone.header"))]]]));
        // line 83
        yield "
";
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 87
        $context["showActions"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["activeFormActions"]) || array_key_exists("activeFormActions", $context) ? $context["activeFormActions"] : (function () { throw new RuntimeError('Variable "activeFormActions" does not exist.', 87, $this->source); })()));
        // line 88
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- form detail header -->
            ";
        // line 94
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticForm/Form/details.html.twig", 94)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 94, $this->source); })()), "description", [], "any", false, false, false, 94)]));
        // line 95
        yield "            <!--/ form detail header -->

            <!-- form detail collapseable -->
            <div class=\"collapse pr-md pl-md\" id=\"form-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                            ";
        // line 103
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 103, $this->source); })())]);
        yield "
                            <tr>
                                <td width=\"20%\">
                                    <span class=\"fw-b\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.stats.submission_counts"), "html", null, true);
        yield "</span>
                                </td>
                                <td>
                                    ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 109, $this->source); })()), "unique", [], "array", false, false, false, 109), "html", null, true);
        yield " / ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["submissionCounts"]) || array_key_exists("submissionCounts", $context) ? $context["submissionCounts"] : (function () { throw new RuntimeError('Variable "submissionCounts" does not exist.', 109, $this->source); })()), "total", [], "array", false, false, false, 109), "html", null, true);
        yield "
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ form detail collapseable -->
        </div>

        <div>
            <!-- form detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\"
                      title=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.details.detail"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#form-details\"><span class=\"caret\"></span> ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a>
                </span>
            </div>
            <!--/ form detail collapseable toggler -->

            <!-- stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"col-xs-6 va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"ri-download-line\"></span>
                                        ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.graph.line.submissions"), "html", null, true);
        yield "
                                    </h5>
                                </div>
                                <div class=\"col-xs-6 va-m\">
                                    ";
        // line 144
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 144, $this->source); })()), "class" => "pull-right"]);
        yield "
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
        // line 148
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 148, $this->source); })()), "submissionsInTime", [], "array", false, false, false, 148), "chartType" => "line", "chartHeight" => 300]);
        yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            ";
        // line 156
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

            <!-- tabs controls -->
            <ul class=\"nav nav-tabs nav-tabs-contained\">
                ";
        // line 160
        if ((isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 160, $this->source); })())) {
            // line 161
            yield "                    <li class=\"active\">
                        <a href=\"#actions-container\" role=\"tab\" data-toggle=\"tab\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.actions"), "html", null, true);
            yield "</a>
                    </li>
                ";
        }
        // line 165
        yield "                <li class=\"";
        if ( !(isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 165, $this->source); })())) {
            yield "active";
        }
        yield "\">
                    <a href=\"#fields-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.tab.fields"), "html", null, true);
        yield "</a>
                </li>
            </ul>
            <!--/ tabs controls -->
        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md\">
            ";
        // line 174
        if ((isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 174, $this->source); })())) {
            // line 175
            yield "                <!-- #actions-container -->
                <div class=\"tab-pane active fade in bdr-w-0\" id=\"actions-container\">
                    ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeFormActions"]) || array_key_exists("activeFormActions", $context) ? $context["activeFormActions"] : (function () { throw new RuntimeError('Variable "activeFormActions" does not exist.', 177, $this->source); })()));
            foreach ($context['_seq'] as $context["group"] => $context["groupActions"]) {
                // line 178
                yield "                        <h5 class=\"fw-sb mb-xs\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["group"]), "html", null, true);
                yield "</h5>
                        <ul class=\"list-group\">
                            ";
                // line 181
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["groupActions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 182
                    yield "                                <li class=\"list-group-item\">
                                    <div class=\"box-layout\">
                                        ";
                    // line 184
                    $context["icon"] = null;
                    // line 185
                    yield "                                        ";
                    if (("lead" == $context["group"])) {
                        // line 186
                        yield "                                          ";
                        $context["icon"] = "ri-user-6-fill";
                        // line 187
                        yield "                                        ";
                    } elseif (("asset" == $context["group"])) {
                        // line 188
                        yield "                                          ";
                        $context["icon"] = "ri-download-cloud-2-line";
                        // line 189
                        yield "                                        ";
                    }
                    // line 190
                    yield "                                        ";
                    if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 190, $this->source); })()))) {
                        // line 191
                        yield "                                            <div class=\"col-md-1 va-m\">
                                                <h3><span class=\"fa ";
                        // line 192
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 192, $this->source); })()), "html", null, true);
                        yield " text-white dark-xs\"></span></h3>
                                            </div>
                                        ";
                    }
                    // line 195
                    yield "                                        <div class=\"col-md-7 va-m\">
                                            <h5 class=\"fw-sb text-primary mb-xs\">";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 196), "html", null, true);
                    yield "</h5>
                                            <h6 class=\"text-white dark-sm\">";
                    // line 197
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "description", [], "any", false, false, false, 197));
                    yield "</h6>
                                        </div>
                                        <div class=\"col-md-4 va-m text-right\">
                                            <em class=\"text-white dark-sm\">";
                    // line 200
                    if (CoreExtension::getAttribute($this->env, $this->source, ($context["availableActions"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 200), [], "array", true, true, false, 200)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["availableActions"]) || array_key_exists("availableActions", $context) ? $context["availableActions"] : (function () { throw new RuntimeError('Variable "availableActions" does not exist.', 200, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 200), [], "array", false, false, false, 200), "label", [], "array", false, false, false, 200)), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 200), "html", null, true);
                    }
                    yield "</em>
                                        </div>
                                    </div>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 205
                yield "                        </ul>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['group'], $context['groupActions'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            yield "                </div>
                <!--/ #actions-container -->
            ";
        }
        // line 210
        yield "
            <!-- #fields-container -->
            <div class=\"tab-pane fade ";
        // line 212
        if ( !(isset($context["showActions"]) || array_key_exists("showActions", $context) ? $context["showActions"] : (function () { throw new RuntimeError('Variable "showActions" does not exist.', 212, $this->source); })())) {
            yield "active in";
        }
        yield " bdr-w-0\" id=\"fields-container\">
                <h5 class=\"fw-sb mb-xs\">";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field"), "html", null, true);
        yield "</h5>
                <ul class=\"list-group bdr-w-0 mb-xs\">
                    ";
        // line 216
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeFormFields"]) || array_key_exists("activeFormFields", $context) ? $context["activeFormFields"] : (function () { throw new RuntimeError('Variable "activeFormFields" does not exist.', 216, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 217
            yield "                      ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["field"], "parent", [], "any", false, false, false, 217)) {
                // line 218
                yield "                      <li class=\"list-group-item mt-10\">
                          ";
                // line 219
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Form/_details_fields_list.html.twig", ["field" => $context["field"]]);
                yield "
                      </li>
                      ";
            }
            // line 222
            yield "                      ";
            // line 223
            yield "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activeFormFields"]) || array_key_exists("activeFormFields", $context) ? $context["activeFormFields"] : (function () { throw new RuntimeError('Variable "activeFormFields" does not exist.', 223, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["fieldChild"]) {
                // line 224
                yield "                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["fieldChild"], "parent", [], "any", false, false, false, 224) == CoreExtension::getAttribute($this->env, $this->source, $context["field"], "id", [], "any", false, false, false, 224))) {
                    // line 225
                    yield "                              <li class=\"list-group-item ml-20\">
                                  ";
                    // line 226
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Form/_details_fields_list.html.twig", ["field" => $context["fieldChild"]]);
                    yield "
                              </li>
                          ";
                }
                // line 229
                yield "                      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['fieldChild'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "                </ul>
            </div>
            <!--/ #fields-container -->
        </div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- form HTML -->
        <div class=\"pa-md\">
            <div class=\"panel bg-info bg-light-lg bdr-w-0 mb-0\">
                <div class=\"panel-body\">
                    <h5 class=\"fw-sb mb-sm\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.copy"), "html", null, true);
        yield "</h5>
                    <p class=\"mb-sm\">";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.landingpages"), "html", null, true);
        yield "</p>
                    ";
        // line 247
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticForm/Form/details.html.twig", 247)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.form.form.header.embedded", "variant" => "info", "size" => "sm", "href" => "#", "attributes" => ["data-toggle" => "modal", "data-target" => "#modal-automatic-copy"]], ["label" => "mautic.form.form.header.selfhosted", "variant" => "info", "size" => "sm", "href" => "#", "attributes" => ["data-toggle" => "modal", "data-target" => "#modal-manual-copy"]]]]));
        // line 271
        yield "
                </div>
            </div>
        </div>
        <!--/ form HTML -->

        <hr class=\"hr-w-2\" style=\"width:50%\">

        ";
        // line 280
        yield "        <div class=\"panel shd-none bdr-rds-0 bdr-w-0 mb-0\">
            <!-- recent activity -->
            ";
        // line 282
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 282, $this->source); })())]);
        yield "
        </div>
    </div>
    <!--/ right section -->

    <!-- #modal-automatic-copy -->
    <div class=\"modal fade\" id=\"modal-automatic-copy\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-sb\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.embedded"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"modal-body\">
                    <p>";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy"), "html", null, true);
        yield "</p>
                    <h3>";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.js"), "html", null, true);
        yield "</h3>
                    <textarea class=\"form-control\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\">&lt;script type=\"text/javascript\" src=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_generateform", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 297, $this->source); })()), "id", [], "any", false, false, false, 297)], true), "html", null, true);
        yield "\"&gt;&lt;/script&gt;</textarea>
                    <h3 class=\"pt-lg\">";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.iframe"), "html", null, true);
        yield "</h3>
                    <textarea class=\"form-control\" readonly onclick=\"this.setSelectionRange(0, this.value.length);\">&lt;iframe src=\"";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_preview", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 299, $this->source); })()), "id", [], "any", false, false, false, 299)], true), "html", null, true);
        yield "\" width=\"300\" height=\"300\"&gt;&lt;p&gt;Your browser does not support iframes.&lt;/p&gt;&lt;/iframe&gt;</textarea>
                    <i>";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.automaticcopy.iframe.note"), "html", null, true);
        yield "</i>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-ghost\" data-dismiss=\"modal\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ #modal-automatic-copy -->

    <!-- #modal-manual-copy -->
    <div class=\"modal fade\" id=\"modal-manual-copy\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title fw-sb\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.header.selfhosted"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"panel-body\">
                    <p>";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted"), "html", null, true);
        yield "</p>

                    <h4 class=\"mt-sm mb-sm\">";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted.script"), "html", null, true);
        yield "</h4>
                    <textarea class=\"form-html form-control\" readonly
                              onclick=\"this.setSelectionRange(0, this.value.length);\">";
        // line 322
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["formScript"]) || array_key_exists("formScript", $context) ? $context["formScript"] : (function () { throw new RuntimeError('Variable "formScript" does not exist.', 322, $this->source); })()));
        yield "</textarea>

                    <h4 class=\"mt-sm mb-sm\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.help.selfhosted.body"), "html", null, true);
        yield "</h4>
                    <textarea class=\"form-html form-control\" readonly
                              onclick=\"this.setSelectionRange(0, this.value.length);\">";
        // line 326
        yield (isset($context["formContent"]) || array_key_exists("formContent", $context) ? $context["formContent"] : (function () { throw new RuntimeError('Variable "formContent" does not exist.', 326, $this->source); })());
        yield "</textarea>
                </div>
                <div class=\"panel-footer text-right\">
                    <button type=\"button\" class=\"btn btn-ghost\" data-dismiss=\"modal\">";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ #modal-manual-copy -->
</div>
<!--/ end: box layout -->

<input type=\"hidden\" name=\"entityId\" id=\"entityId\" value=\"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeForm"]) || array_key_exists("activeForm", $context) ? $context["activeForm"] : (function () { throw new RuntimeError('Variable "activeForm" does not exist.', 338, $this->source); })()), "id", [], "any", false, false, false, 338));
        yield "\"/>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Form/details.html.twig";
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
        return array (  623 => 338,  611 => 329,  605 => 326,  600 => 324,  595 => 322,  590 => 320,  585 => 318,  579 => 315,  564 => 303,  558 => 300,  554 => 299,  550 => 298,  546 => 297,  542 => 296,  538 => 295,  532 => 292,  519 => 282,  515 => 280,  505 => 271,  503 => 247,  499 => 246,  495 => 245,  479 => 231,  465 => 230,  451 => 229,  445 => 226,  442 => 225,  439 => 224,  421 => 223,  419 => 222,  413 => 219,  410 => 218,  407 => 217,  389 => 216,  384 => 213,  378 => 212,  374 => 210,  369 => 207,  362 => 205,  347 => 200,  341 => 197,  337 => 196,  334 => 195,  328 => 192,  325 => 191,  322 => 190,  319 => 189,  316 => 188,  313 => 187,  310 => 186,  307 => 185,  305 => 184,  301 => 182,  296 => 181,  290 => 178,  286 => 177,  282 => 175,  280 => 174,  269 => 166,  262 => 165,  256 => 162,  253 => 161,  251 => 160,  244 => 156,  233 => 148,  226 => 144,  219 => 140,  202 => 126,  197 => 124,  177 => 109,  171 => 106,  165 => 103,  155 => 95,  153 => 94,  145 => 88,  143 => 87,  136 => 86,  130 => 83,  128 => 77,  127 => 72,  125 => 69,  124 => 68,  117 => 67,  111 => 64,  109 => 58,  108 => 49,  107 => 40,  106 => 39,  105 => 38,  104 => 36,  102 => 35,  95 => 34,  84 => 32,  78 => 29,  76 => 24,  75 => 22,  74 => 21,  67 => 20,  56 => 18,  45 => 16,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Form/details.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Form/details.html.twig");
    }
}
