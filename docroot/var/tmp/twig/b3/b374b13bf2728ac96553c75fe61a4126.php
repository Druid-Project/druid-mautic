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

/* @MauticLead/Import/details.html.twig */
class __TwigTemplate_6be8dfed35c01eee88b6634e47f13ddf extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'indexButton' => [$this, 'block_indexButton'],
            'content' => [$this, 'block_content'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Import/details.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 15, $this->source); })())]);
        yield "
";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_indexButton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["routeBase" => "import", "langVar" => "lead.import", "templateButtons" => ["close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "lead:imports:viewown", [], "array", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "lead:imports:viewother", [], "array", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "createdBy", [], "any", false, false, false, 23))], "routeVars" => ["close" => ["object" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["object", "contacts"], "method", false, false, false, 27)]], "targetLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.list")]);
        // line 31
        yield "
";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- asset detail collapseable -->
            <div class=\"collapse pr-md pl-md\" id=\"asset-details\">
                <div class=\"pr-md pl-md pb-md\">
                    <div class=\"panel shd-none mb-0\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })())]);
        yield "

                                ";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.source.file", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 66
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "originalFile", [], "any", false, false, false, 66)]);
        // line 67
        yield "
                                ";
        // line 68
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.status", "value" => Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_label.html.twig", ["text" => ("mautic.lead.import.status." . CoreExtension::getAttribute($this->env, $this->source,         // line 70
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "status", [], "any", false, false, false, 70)), "type" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 70, $this->source); })()), "satusLabelClass", [], "any", false, false, false, 70)])]);
        // line 71
        yield "
                                ";
        // line 72
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.status.info", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 74, $this->source); })()), "statusInfo", [], "any", false, false, false, 74)]);
        // line 75
        yield "
                                ";
        // line 76
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.line.count", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 78
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 78, $this->source); })()), "lineCount", [], "any", false, false, false, 78)]);
        // line 79
        yield "
                                ";
        // line 80
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.date.started", "value" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source,         // line 82
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "dateStarted", [], "any", false, false, false, 82))]);
        // line 83
        yield "
                                ";
        // line 84
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.date.ended", "value" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 86, $this->source); })()), "dateEnded", [], "any", false, false, false, 86))]);
        // line 87
        yield "
                                ";
        // line 88
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.runtime", "value" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 90
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 90, $this->source); })()), "runTime", [], "any", false, false, false, 90)) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 90, $this->source); })()), "runTime", [], "any", false, false, false, 90))) : (""))]);
        // line 91
        yield "
                                ";
        // line 92
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.speed", "value" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.speed.value", ["%speed%" => CoreExtension::getAttribute($this->env, $this->source,         // line 94
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 94, $this->source); })()), "speed", [], "any", false, false, false, 94)])]);
        // line 95
        yield "
                                ";
        // line 96
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.progress", "value" => (CoreExtension::getAttribute($this->env, $this->source,         // line 98
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 98, $this->source); })()), "progressPercentage", [], "any", false, false, false, 98) . "%")]);
        // line 99
        yield "
                                ";
        // line 100
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.mapped.fields", "value" => CoreExtension::callMacro($macros["_self"], "macro_arrayToString", [CoreExtension::getAttribute($this->env, $this->source,         // line 102
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 102, $this->source); })()), "matchedFields", [], "any", false, false, false, 102)], 102, $context, $this->getSourceContext())]);
        // line 103
        yield "
                                ";
        // line 104
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.default.options", "value" => CoreExtension::callMacro($macros["_self"], "macro_arrayToString", [CoreExtension::getAttribute($this->env, $this->source,         // line 106
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 106, $this->source); })()), "defaults", [], "any", false, false, false, 106)], 106, $context, $this->getSourceContext())]);
        // line 107
        yield "
                                ";
        // line 108
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.csv.headers", "value" => Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 110, $this->source); })()), "headers", [], "any", false, false, false, 110), ", ")]);
        // line 111
        yield "
                                ";
        // line 112
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/_detail_row.html.twig", ["label" => "mautic.lead.import.csv.parser.config", "value" => CoreExtension::callMacro($macros["_self"], "macro_arrayToString", [CoreExtension::getAttribute($this->env, $this->source,         // line 114
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 114, $this->source); })()), "parserConfig", [], "any", false, false, false, 114)], 114, $context, $this->getSourceContext())]);
        // line 115
        yield "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ asset detail collapseable -->
        </div>

        <div>
            <!-- asset detail collapseable toggler -->
            <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#asset-details\"><span class=\"caret\"></span> ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "</a>
                </span>
            </div>
            <!--/ asset detail collapseable toggler -->

            ";
        // line 134
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 134, $this->source); })()), "dateStarted", [], "any", false, false, false, 134)) {
            // line 135
            yield "            <!-- some stats -->
            <div class=\"pa-md\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"fa-row-statuses\"></span>
                                        ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.row.statuses"), "html", null, true);
            yield "
                                    </h5>
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
            // line 149
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source,             // line 150
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 150, $this->source); })()), "getRowStatusesPieChart", [$this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->getHelper()], "method", false, false, false, 150), "chartType" => "pie", "chartHeight" => 210]);
            // line 153
            yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"panel\">
                            <div class=\"panel-body box-layout\">
                                <div class=\"va-m\">
                                    <h5 class=\"text-white dark-md fw-sb mb-xs\">
                                        <span class=\"fa-row-statuses\"></span>
                                        ";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.processed.rows.minute"), "html", null, true);
            yield "
                                    </h5>
                                </div>
                            </div>
                            <div class=\"pt-0 pl-15 pb-10 pr-15\">
                                ";
            // line 168
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>             // line 169
(isset($context["importedRowsChart"]) || array_key_exists("importedRowsChart", $context) ? $context["importedRowsChart"] : (function () { throw new RuntimeError('Variable "importedRowsChart" does not exist.', 169, $this->source); })()), "chartType" => "line", "chartHeight" => 210]);
            // line 172
            yield "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->
            ";
        }
        // line 180
        yield "        </div>

        <!-- start: tab-content -->
        <div class=\"tab-content pa-md preview-detail\">
        ";
        // line 184
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 184, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 184, $this->source); })())) > 0))) {
            // line 185
            yield "        <h3>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.failed.rows"), "html", null, true);
            yield "</h3>
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                      <th>";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.csv.line.number"), "html", null, true);
            yield "</th>
                      <th>";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.error.message"), "html", null, true);
            yield "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["failedRows"]) || array_key_exists("failedRows", $context) ? $context["failedRows"] : (function () { throw new RuntimeError('Variable "failedRows" does not exist.', 194, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 195
                yield "                        ";
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 195))) {
                    // line 196
                    yield "                            <tr>
                                <td>";
                    // line 197
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 197), "line", [], "any", false, false, false, 197), "html", null, true);
                    yield "</td>
                                <td>
                                    ";
                    // line 199
                    $context["error"] = "N/A";
                    // line 200
                    yield "                                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, true, false, 200), "error", [], "any", true, true, false, 200)) {
                        // line 201
                        yield "                                        ";
                        $context["error"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "properties", [], "any", false, false, false, 201), "error", [], "any", false, false, false, 201);
                        // line 202
                        yield "                                        ";
                        if (CoreExtension::matches("/^SQLSTATE\\[\\w+\\]: (.*)\$/", (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 202, $this->source); })()))) {
                            // line 203
                            yield "                                          ";
                            $context["error"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::split($this->env->getCharset(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 203, $this->source); })()), ": "), 1, [], "array", false, false, false, 203);
                            // line 204
                            yield "                                        ";
                        }
                        // line 205
                        yield "                                    ";
                    }
                    // line 206
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 206, $this->source); })()), "html", null, true);
                    yield "
                                </td>
                            </tr>
                        ";
                }
                // line 210
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            yield "                </tbody>
            </table>
        ";
        } else {
            // line 214
            yield "            <i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.no.failed.rows"), "html", null, true);
            yield "</i>
        ";
        }
        // line 216
        yield "        </div>
        <!--/ end: tab-content -->
    </div>
    <!--/ left section -->

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">

        <!-- activity feed -->
        ";
        // line 225
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 225, $this->source); })())]);
        yield "
    </div>
    <!--/ right section -->
    <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 228, $this->source); })()), "id", [], "any", false, false, false, 228));
        yield "\"/>
</div>
<!--/ end: box layout -->
";
        yield from [];
    }

    // line 34
    public function macro_arrayToString($__a__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "a" => $__a__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 35
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 35, $this->source); })()));
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
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "=";
                // line 37
                if (is_iterable($context["v"])) {
                    // line 38
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["v"]);
                    foreach ($context['_seq'] as $context["k2"] => $context["v2"]) {
                        // line 39
                        yield "        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v2"], "html", null, true);
                        yield "
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['k2'], $context['v2'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } elseif (((                // line 41
$context["v"] === false) || ($context["v"] === true))) {
                    // line 42
                    if ($context["v"]) {
                        yield "Yes";
                    } else {
                        yield "No";
                    }
                } elseif ( !Twig\Extension\CoreExtension::testEmpty(                // line 43
$context["v"])) {
                    // line 44
                    yield "\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                    yield "\"";
                }
                // line 46
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 46)) {
                    yield ",";
                }
                // line 47
                yield "  ";
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
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Import/details.html.twig";
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
        return array (  472 => 47,  468 => 46,  463 => 44,  461 => 43,  455 => 42,  453 => 41,  444 => 39,  440 => 38,  438 => 37,  435 => 36,  417 => 35,  405 => 34,  396 => 228,  390 => 225,  379 => 216,  373 => 214,  368 => 211,  362 => 210,  354 => 206,  351 => 205,  348 => 204,  345 => 203,  342 => 202,  339 => 201,  336 => 200,  334 => 199,  329 => 197,  326 => 196,  323 => 195,  319 => 194,  312 => 190,  308 => 189,  300 => 185,  298 => 184,  292 => 180,  282 => 172,  280 => 169,  279 => 168,  271 => 163,  259 => 153,  257 => 150,  256 => 149,  248 => 144,  237 => 135,  235 => 134,  227 => 129,  211 => 115,  209 => 114,  208 => 112,  205 => 111,  203 => 110,  202 => 108,  199 => 107,  197 => 106,  196 => 104,  193 => 103,  191 => 102,  190 => 100,  187 => 99,  185 => 98,  184 => 96,  181 => 95,  179 => 94,  178 => 92,  175 => 91,  173 => 90,  172 => 88,  169 => 87,  167 => 86,  166 => 84,  163 => 83,  161 => 82,  160 => 80,  157 => 79,  155 => 78,  154 => 76,  151 => 75,  149 => 74,  148 => 72,  145 => 71,  143 => 70,  142 => 68,  139 => 67,  137 => 66,  136 => 64,  131 => 62,  118 => 51,  111 => 50,  105 => 31,  103 => 27,  102 => 23,  100 => 19,  93 => 18,  85 => 15,  78 => 14,  67 => 12,  56 => 10,  45 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/details.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Import/details.html.twig");
    }
}
