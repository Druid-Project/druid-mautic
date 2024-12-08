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

/* @MauticReport/Report/_details_report_content.html.twig */
class __TwigTemplate_47dc1b58ec9874a09c9312f550d3c52e extends Template
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
        $context["showGraphsAboveTable"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showGraphsAboveTable", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showGraphsAboveTable", [], "any", false, false, false, 1), false)) : (false));
        // line 2
        $context["dataCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()));
        // line 3
        $context["columnOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 3, $this->source); })()), "columns", [], "any", false, false, false, 3);
        // line 4
        $context["graphOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 4, $this->source); })()), "graphs", [], "any", false, false, false, 4);
        // line 5
        $context["aggregatorOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "aggregators", [], "any", false, false, false, 5);
        // line 6
        $context["aggregatorCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 6, $this->source); })()), "aggregators", [], "any", false, false, false, 6));
        // line 7
        $context["groupBy"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 7, $this->source); })()), "groupBy", [], "any", false, false, false, 7);
        // line 8
        $context["groupByCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 8, $this->source); })()), "groupBy", [], "any", false, false, false, 8));
        // line 9
        $context["startCount"] = ((((isset($context["totalResults"]) || array_key_exists("totalResults", $context) ? $context["totalResults"] : (function () { throw new RuntimeError('Variable "totalResults" does not exist.', 9, $this->source); })()) > (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })()))) ? (((((isset($context["reportPage"]) || array_key_exists("reportPage", $context) ? $context["reportPage"] : (function () { throw new RuntimeError('Variable "reportPage" does not exist.', 9, $this->source); })()) * (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })())) - (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 9, $this->source); })())) + 1)) : (1));
        // line 10
        $context["graphContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticReport/Report/details_data_graphs.html.twig", ["graphOrder" => (isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 10, $this->source); })()), "graphs" => (isset($context["graphs"]) || array_key_exists("graphs", $context) ? $context["graphs"] : (function () { throw new RuntimeError('Variable "graphs" does not exist.', 10, $this->source); })()), "report" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 10, $this->source); })())], false);
        // line 12
        if ((isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 12, $this->source); })())) {
            yield (isset($context["graphContent"]) || array_key_exists("graphContent", $context) ? $context["graphContent"] : (function () { throw new RuntimeError('Variable "graphContent" does not exist.', 12, $this->source); })());
        }
        // line 13
        yield "
";
        // line 14
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 14, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 14, $this->source); })())))) {
            // line 15
            yield "    <!-- table section -->
    <div class=\"col-xs-12\">
        <div id=\"page-list-wrapper\" class=\"panel panel-default\">
            <div class=\"page-list\">
                <div class=\"table-responsive table-responsive-force\">
                    <table class=\"table table-hover report-list\" id=\"reportTable\">
                        <thead>
                        <tr>
                            <th class=\"col-report-count\"></th>
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 24, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 25
                yield "                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", true, true, false, 25)) {
                    // line 26
                    yield "                                    ";
                    // line 27
                    $context["orderBy"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 27), "alias", [], "any", true, true, false, 27) && (is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 27, $this->source); })()), $context["key"], [], "array", false, false, false, 27), "alias", [], "any", false, false, false, 27)) && is_string($__internal_compile_1 = "channel.") && str_starts_with($__internal_compile_0, $__internal_compile_1)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 28
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 28, $this->source); })()), $context["key"], [], "array", false, false, false, 28), "alias", [], "any", false, false, false, 28)) : (                    // line 29
$context["key"]));
                    // line 32
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("report." . CoreExtension::getAttribute($this->env, $this->source,                     // line 33
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)), "orderBy" =>                     // line 34
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 34, $this->source); })()), "text" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 35
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 35, $this->source); })()), $context["key"], [], "array", false, false, false, 35), "label", [], "any", false, false, false, 35), "class" => ("col-report-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 36
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 36, $this->source); })()), $context["key"], [], "array", false, false, false, 36), "type", [], "any", false, false, false, 36)), "dataToggle" => ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 37
(isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 37, $this->source); })()), $context["key"], [], "array", false, false, false, 37), "type", [], "any", false, false, false, 37), ["date", "datetime"])) ? ("date") : ("")), "target" => ".report-content"]);
                    // line 39
                    yield "
                                ";
                }
                // line 41
                yield "                            ";
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
            unset($context['_seq'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                            ";
            if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 42, $this->source); })())) {
                // line 43
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 43, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                    // line 44
                    $context["columnName"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 44), [], "array", false, true, false, 44), "label", [], "any", true, true, false, 44) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 44), [], "array", false, true, false, 44), "label", [], "any", false, false, false, 44)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 44), [], "array", false, true, false, 44), "label", [], "any", false, false, false, 44)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 44), [], "array", false, true, false, 44), "alias", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 44), [], "array", false, true, false, 44), "alias", [], "any", false, false, false, 44), "")) : (""))));
                    // line 45
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => ("report." . CoreExtension::getAttribute($this->env, $this->source,                     // line 46
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)), "text" => ((CoreExtension::getAttribute($this->env, $this->source,                     // line 47
$context["aggregator"], "function", [], "any", false, false, false, 47) . " ") . (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 47, $this->source); })())), "orderBy" => (((("`" . CoreExtension::getAttribute($this->env, $this->source,                     // line 48
$context["aggregator"], "function", [], "any", false, false, false, 48)) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 48)) . "`"), "dataToggle" => "", "target" => ".report-content"]);
                    // line 51
                    yield "
                                ";
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
                unset($context['_seq'], $context['_key'], $context['aggregator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "                            ";
            }
            // line 54
            yield "                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 57
            if ((isset($context["dataCount"]) || array_key_exists("dataCount", $context) ? $context["dataCount"] : (function () { throw new RuntimeError('Variable "dataCount" does not exist.', 57, $this->source); })())) {
                // line 58
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 59
                    yield "                                <tr>
                                    <td>";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 60, $this->source); })()), "html", null, true);
                    yield "</td>
                                    ";
                    // line 61
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 61, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 61, $this->source); })()), [], "array", true, true, false, 61); }));
                    foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                        // line 62
                        $context["collapse"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 62), "collapse", [], "any", true, true, false, 62)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 62, $this->source); })()), $context["key"], [], "array", false, false, false, 62), "collapse", [], "any", false, false, false, 62)) : (false));
                        // line 63
                        yield "<td>";
                        // line 64
                        $context["closeLink"] = false;
                        // line 65
                        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 65), "link", [], "any", true, true, false, 65) && CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 65, $this->source); })()), $context["key"], [], "array", false, false, false, 65), "alias", [], "any", false, false, false, 65), [], "array", true, true, false, 65)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 65, $this->source); })()), $context["key"], [], "array", false, false, false, 65), "alias", [], "any", false, false, false, 65), [], "array", false, false, false, 65)))) {
                            // line 66
                            $context["closeLink"] = true;
                            // line 67
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["columns"] ?? null), $context["key"], [], "array", false, true, false, 67), "linkParameters", [], "any", true, true, false, 67)) {
                                // line 68
                                yield "                                                    ";
                                $context["parameters"] = [];
                                // line 69
                                yield "                                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 69, $this->source); })()), $context["key"], [], "array", false, false, false, 69), "linkParameters", [], "any", false, false, false, 69));
                                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                                    // line 70
                                    yield "                                                        ";
                                    $context["parameters"] = Twig\Extension\CoreExtension::merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 70, $this->source); })()), [$context["k"] => ((($context["v"] === "%alias%")) ? (CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 70, $this->source); })()), $context["key"], [], "array", false, false, false, 70), "alias", [], "any", false, false, false, 70), [], "array", false, false, false, 70)) : ($context["v"]))]);
                                    // line 71
                                    yield "                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 72
                                yield "                                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 72, $this->source); })()), $context["key"], [], "array", false, false, false, 72), "link", [], "any", false, false, false, 72), (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 72, $this->source); })())), "html", null, true);
                                yield "\" ";
                                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["parameters"] ?? null), "objectId", [], "any", true, true, false, 72)) ? ("class=\"label label-success\"") : (""));
                                yield ">
                                                ";
                            } else {
                                // line 74
                                yield "                                                    <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 74, $this->source); })()), $context["key"], [], "array", false, false, false, 74), "link", [], "any", false, false, false, 74), ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 74, $this->source); })()), $context["key"], [], "array", false, false, false, 74), "alias", [], "any", false, false, false, 74), [], "array", false, false, false, 74)]), "html", null, true);
                                yield "\" class=\"label label-success\">
                                                ";
                            }
                            // line 76
                            yield "                                            ";
                        }
                        // line 77
                        $context["cellType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 77, $this->source); })()), $context["key"], [], "array", false, false, false, 77), "type", [], "any", false, false, false, 77);
                        // line 78
                        $context["cellVal"] = CoreExtension::getAttribute($this->env, $this->source, $context["row"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["columns"]) || array_key_exists("columns", $context) ? $context["columns"] : (function () { throw new RuntimeError('Variable "columns" does not exist.', 78, $this->source); })()), $context["key"], [], "array", false, false, false, 78), "alias", [], "any", false, false, false, 78), [], "array", false, false, false, 78);
                        // line 80
                        yield "                                            ";
                        if ((("datetime" === (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 80, $this->source); })())) && (10 === Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 80, $this->source); })()))))) {
                            // line 81
                            $context["cellType"] = "date";
                        }
                        // line 83
                        yield "                                            ";
                        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 83, $this->source); })()))) {
                            // line 84
                            yield "                                                ";
                            if (("datetime" === (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 84, $this->source); })()))) {
                                // line 85
                                yield "                                                    ";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 85, $this->source); })()), "UTC");
                                yield "
                                                ";
                            } elseif (("date" ===                             // line 86
(isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 86, $this->source); })()))) {
                                // line 87
                                yield "                                                    ";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toShort((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 87, $this->source); })()), "UTC");
                                yield "
                                                ";
                            } else {
                                // line 89
                                yield "                                                    ";
                                $context["value"] = $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 89, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 89, $this->source); })())));
                                // line 90
                                yield "                                                    ";
                                if (((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 90, $this->source); })()) == false)) {
                                    // line 91
                                    yield "                                                        ";
                                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 91, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 91, $this->source); })())));
                                    yield "
                                                    ";
                                } else {
                                    // line 93
                                    yield "                                                        ";
                                    $context["value"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->htmlEntityDecode($this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_((isset($context["cellVal"]) || array_key_exists("cellVal", $context) ? $context["cellVal"] : (function () { throw new RuntimeError('Variable "cellVal" does not exist.', 93, $this->source); })()), (isset($context["cellType"]) || array_key_exists("cellType", $context) ? $context["cellType"] : (function () { throw new RuntimeError('Variable "cellType" does not exist.', 93, $this->source); })()))));
                                    // line 94
                                    yield "                                                        <div data-toggle=\"collapse\" data-target=\"#audit-log-details-";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 94, $this->source); })()), "html", null, true);
                                    yield "\" class=\"accordion-toggle\" style=\"cursor: pointer\">
                                                            ";
                                    // line 95
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 95, $this->source); })())) > 50)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 95, $this->source); })()), 0, 50) . "...")) : ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 95, $this->source); })()))), "html", null, true);
                                    yield "
                                                        </div>
                                                    ";
                                }
                                // line 98
                                yield "                                                ";
                            }
                            // line 99
                            yield "                                            ";
                        }
                        // line 100
                        yield "                                            ";
                        if ((isset($context["closeLink"]) || array_key_exists("closeLink", $context) ? $context["closeLink"] : (function () { throw new RuntimeError('Variable "closeLink" does not exist.', 100, $this->source); })())) {
                            yield "</a>";
                        }
                        // line 101
                        yield "                                            ";
                        if ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new RuntimeError('Variable "collapse" does not exist.', 101, $this->source); })())) {
                            // line 102
                            yield "                                            <div class=\"accordian-body collapse\" id=\"audit-log-details-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 102, $this->source); })()), "html", null, true);
                            yield "\">
                                                <pre id=\"pre-audit-log-details-";
                            // line 103
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 103, $this->source); })()), "html", null, true);
                            yield "\"></pre>
                                            </div>
                                            <script>
                                                var txt = document.createElement(\"textarea\");
                                                txt.innerHTML = '";
                            // line 107
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 107, $this->source); })()), "html", null, true);
                            yield "';
                                                document.getElementById('pre-audit-log-details-";
                            // line 108
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 108, $this->source); })()), "html", null, true);
                            yield "').textContent
                                                    = JSON.stringify(JSON.parse((txt.value)), undefined, 2);
                                            </script>
                                            ";
                        }
                        // line 112
                        yield "                                        </td>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    yield "                                    ";
                    if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 114, $this->source); })())) {
                        // line 115
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 115, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                            // line 116
                            $context["_key"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 116) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 116));
                            // line 117
                            yield "                                            <td>
                                                ";
                            // line 118
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["row"], $context["_key"], [], "array", true, true, false, 118)) {
                                // line 119
                                yield "                                                    ";
                                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, $context["row"], $context["_key"], [], "array", false, false, false, 119), "text");
                                yield "
                                                ";
                            }
                            // line 121
                            yield "                                            </td>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['aggregator'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 123
                        yield "                                    ";
                    }
                    // line 124
                    yield "                                </tr>";
                    // line 125
                    $context["startCount"] = ((isset($context["startCount"]) || array_key_exists("startCount", $context) ? $context["startCount"] : (function () { throw new RuntimeError('Variable "startCount" does not exist.', 125, $this->source); })()) + 1);
                    // line 126
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                yield "                        ";
            } else {
                // line 128
                yield "                            <tr>
                                <td>&nbsp;</td>
                                ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 130, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 131
                    yield "                                    <td>&nbsp;</td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                yield "                            </tr>
                        ";
            }
            // line 135
            yield "                        <tr class=\"cm-strong\">
                            <td>";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.groupby.totals"), "html", null, true);
            yield "</td>
                            ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 137, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 138
                yield "                                <td>&nbsp;</td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                            ";
            if ((isset($context["aggregatorCount"]) || array_key_exists("aggregatorCount", $context) ? $context["aggregatorCount"] : (function () { throw new RuntimeError('Variable "aggregatorCount" does not exist.', 140, $this->source); })())) {
                // line 141
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 141, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                    // line 142
                    $context["i"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 142) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 142));
                    // line 143
                    yield "                                    <td>
                                        ";
                    // line 144
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reportDataResult"] ?? null), "totals", [], "any", false, true, false, 144), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 144, $this->source); })()), [], "array", true, true, false, 144)) {
                        // line 145
                        yield "                                            ";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 145, $this->source); })()), "totals", [], "any", false, false, false, 145), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 145, $this->source); })()), [], "array", false, false, false, 145), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 145, $this->source); })()), "getType", [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 145, $this->source); })())], "method", false, false, false, 145));
                        yield "
                                        ";
                    }
                    // line 147
                    yield "                                    </td>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['aggregator'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                yield "                            ";
            }
            // line 150
            yield "                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"panel-footer\">
                    ";
            // line 155
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 156
(isset($context["totalResults"]) || array_key_exists("totalResults", $context) ? $context["totalResults"] : (function () { throw new RuntimeError('Variable "totalResults" does not exist.', 156, $this->source); })()), "page" =>             // line 157
(isset($context["reportPage"]) || array_key_exists("reportPage", $context) ? $context["reportPage"] : (function () { throw new RuntimeError('Variable "reportPage" does not exist.', 157, $this->source); })()), "limit" =>             // line 158
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 158, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_view", ["objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 159
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159)]), "sessionVar" => ("report." . CoreExtension::getAttribute($this->env, $this->source,             // line 160
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)), "target" => ".report-content"], false);
            // line 162
            yield "
                </div>
            </div>
        </div>
    </div>
    <!--/ table section -->
";
        }
        // line 169
        yield "
";
        // line 170
        if ( !(isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 170, $this->source); })())) {
            yield (isset($context["graphContent"]) || array_key_exists("graphContent", $context) ? $context["graphContent"] : (function () { throw new RuntimeError('Variable "graphContent" does not exist.', 170, $this->source); })());
        }
        // line 171
        yield "
<script>
    mQuery(document).ready(function() {
        mQuery('.datetimepicker').datetimepicker({
            format:'Y-m-d H:i:s',
            closeOnDateSelect: true,
            validateOnBlur: false,
            scrollMonth: false,
            scrollInput: false
        });
    });
    mQuery(document).ready(function() {
        mQuery('.datepicker').datetimepicker({
            format:'Y-m-d',
            closeOnDateSelect: true,
            validateOnBlur: false,
            scrollMonth: false,
            scrollInput: false
        });
    });
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/_details_report_content.html.twig";
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
        return array (  489 => 171,  485 => 170,  482 => 169,  473 => 162,  471 => 160,  470 => 159,  469 => 158,  468 => 157,  467 => 156,  466 => 155,  459 => 150,  456 => 149,  449 => 147,  443 => 145,  441 => 144,  438 => 143,  436 => 142,  431 => 141,  428 => 140,  421 => 138,  417 => 137,  413 => 136,  410 => 135,  406 => 133,  399 => 131,  395 => 130,  391 => 128,  388 => 127,  382 => 126,  380 => 125,  378 => 124,  375 => 123,  368 => 121,  362 => 119,  360 => 118,  357 => 117,  355 => 116,  350 => 115,  347 => 114,  340 => 112,  333 => 108,  329 => 107,  322 => 103,  317 => 102,  314 => 101,  309 => 100,  306 => 99,  303 => 98,  297 => 95,  292 => 94,  289 => 93,  283 => 91,  280 => 90,  277 => 89,  271 => 87,  269 => 86,  264 => 85,  261 => 84,  258 => 83,  255 => 81,  252 => 80,  250 => 78,  248 => 77,  245 => 76,  239 => 74,  231 => 72,  225 => 71,  222 => 70,  217 => 69,  214 => 68,  212 => 67,  210 => 66,  208 => 65,  206 => 64,  204 => 63,  202 => 62,  198 => 61,  194 => 60,  191 => 59,  186 => 58,  184 => 57,  179 => 54,  176 => 53,  161 => 51,  159 => 48,  158 => 47,  157 => 46,  156 => 45,  154 => 44,  136 => 43,  133 => 42,  119 => 41,  115 => 39,  113 => 37,  112 => 36,  111 => 35,  110 => 34,  109 => 33,  108 => 32,  106 => 29,  105 => 28,  104 => 27,  102 => 26,  99 => 25,  82 => 24,  71 => 15,  69 => 14,  66 => 13,  62 => 12,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/_details_report_content.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Report/_details_report_content.html.twig");
    }
}
