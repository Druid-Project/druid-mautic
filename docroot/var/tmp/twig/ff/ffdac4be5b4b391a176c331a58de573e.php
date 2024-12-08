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

/* @MauticReport/Report/export.html.twig */
class __TwigTemplate_7ae47bc414952e1111e2a3cb436659db extends Template
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
            'pageTitle' => [$this, 'block_pageTitle'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/slim.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/slim.html.twig", "@MauticReport/Report/export.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 3, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "report";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "  ";
        // line 11
        $context["showGraphsAboveTable"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 11), "showGraphsAboveTable", [], "any", true, true, false, 11);
        // line 13
        $context["dataCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 13, $this->source); })()), "getData", [], "method", false, false, false, 13));
        // line 14
        $context["columnOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 14, $this->source); })()), "columns", [], "any", false, false, false, 14);
        // line 15
        $context["graphOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 15, $this->source); })()), "graphs", [], "any", false, false, false, 15);
        // line 16
        $context["aggregatorOrder"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 16, $this->source); })()), "aggregators", [], "any", false, false, false, 16);
        // line 17
        yield "<style>
      #app-content.content-only.container {
          overflow-x: scroll;
      }
  </style>

  <div class=\"pa-md\">
      <h3>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
      <div class=\"small\">
          ";
        // line 26
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 26, $this->source); })()), "getDateFrom", [], "method", false, false, false, 26), "UTC");
        yield " - ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 26, $this->source); })()), "getDateTo", [], "method", false, false, false, 26), "UTC");
        yield "
      </div>
  </div>

  ";
        // line 30
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticReport/Report/details_data_graphs.html.twig", ["graphOrder" =>             // line 32
(isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 32, $this->source); })()), "graphs" => CoreExtension::getAttribute($this->env, $this->source,             // line 33
(isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 33, $this->source); })()), "getGraphs", [], "method", false, false, false, 33), "report" =>             // line 34
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 34, $this->source); })())]);
            // line 35
            yield "
  ";
        }
        // line 37
        yield "

  ";
        // line 39
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 39, $this->source); })()))) {
            // line 40
            yield "      <table class=\"table table-hover report-list\" id=\"reportTable\">
          <thead>
          <tr>
              <th class=\"col-report-count\"></th>

              ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 45, $this->source); })()), "headers", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 46
                yield "                  <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["header"], "html", null, true);
                yield "</th>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "          </tr>
          </thead>
          <tbody>
          ";
            // line 51
            if ((isset($context["dataCount"]) || array_key_exists("dataCount", $context) ? $context["dataCount"] : (function () { throw new RuntimeError('Variable "dataCount" does not exist.', 51, $this->source); })())) {
                // line 52
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 52, $this->source); })()), "data", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["count"] => $context["data"]) {
                    // line 53
                    yield "                  <tr>
                      <td>";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["count"] + 1), "html", null, true);
                    yield "</td>
                      ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["data"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 56
                        yield "                          <td>";
                        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_($context["v"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 56, $this->source); })()), "getType", [$context["k"]], "method", false, false, false, 56)));
                        yield "</td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    yield "                  </tr>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['count'], $context['data'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                yield "              ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 60, $this->source); })()), "totals", [], "any", false, false, false, 60)) {
                    // line 61
                    yield "                  <tr class=\"cm-strong\">
                      <td>";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.groupby.totals"), "html", null, true);
                    yield "</td>
                      ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 63, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                        // line 64
                        yield "                          <td>&nbsp;</td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 66
                    yield "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["aggregatorOrder"]) || array_key_exists("aggregatorOrder", $context) ? $context["aggregatorOrder"] : (function () { throw new RuntimeError('Variable "aggregatorOrder" does not exist.', 66, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["aggregator"]) {
                        // line 67
                        $context["i"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "function", [], "any", false, false, false, 67) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["aggregator"], "column", [], "any", false, false, false, 67));
                        // line 68
                        yield "                              <td>
                                  ";
                        // line 69
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["reportDataResult"] ?? null), "totals", [], "any", false, true, false, 69), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 69, $this->source); })()), [], "array", true, true, false, 69)) {
                            // line 70
                            yield "                                      ";
                            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->_(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 70, $this->source); })()), "totals", [], "any", false, false, false, 70), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 70, $this->source); })()), [], "array", false, false, false, 70), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 70, $this->source); })()), "getType", [(isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 70, $this->source); })())], "method", false, false, false, 70));
                            yield "
                                  ";
                        }
                        // line 72
                        yield "                              </td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['aggregator'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    yield "                  </tr>
              ";
                }
                // line 76
                yield "          ";
            } else {
                // line 77
                yield "              <tr>
                  <td>&nbsp;</td>
                  ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["columnOrder"]) || array_key_exists("columnOrder", $context) ? $context["columnOrder"] : (function () { throw new RuntimeError('Variable "columnOrder" does not exist.', 79, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 80
                    yield "                      <td>&nbsp;</td>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                yield "              </tr>
          ";
            }
            // line 84
            yield "          </tbody>
      </table>
  ";
        }
        // line 87
        yield "
  ";
        // line 88
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["showGraphsAboveTable"]) || array_key_exists("showGraphsAboveTable", $context) ? $context["showGraphsAboveTable"] : (function () { throw new RuntimeError('Variable "showGraphsAboveTable" does not exist.', 88, $this->source); })()))) {
            // line 89
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticReport/Report/details_data_graphs.html.twig", ["graphOrder" =>             // line 90
(isset($context["graphOrder"]) || array_key_exists("graphOrder", $context) ? $context["graphOrder"] : (function () { throw new RuntimeError('Variable "graphOrder" does not exist.', 90, $this->source); })()), "graphs" => CoreExtension::getAttribute($this->env, $this->source,             // line 91
(isset($context["reportDataResult"]) || array_key_exists("reportDataResult", $context) ? $context["reportDataResult"] : (function () { throw new RuntimeError('Variable "reportDataResult" does not exist.', 91, $this->source); })()), "getGraphs", [], "method", false, false, false, 91), "report" =>             // line 92
(isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 92, $this->source); })())]);
            // line 93
            yield "
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/export.html.twig";
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
        return array (  294 => 93,  292 => 92,  291 => 91,  290 => 90,  288 => 89,  286 => 88,  283 => 87,  278 => 84,  274 => 82,  267 => 80,  263 => 79,  259 => 77,  256 => 76,  252 => 74,  245 => 72,  239 => 70,  237 => 69,  234 => 68,  232 => 67,  227 => 66,  220 => 64,  216 => 63,  212 => 62,  209 => 61,  206 => 60,  199 => 58,  190 => 56,  186 => 55,  182 => 54,  179 => 53,  174 => 52,  172 => 51,  167 => 48,  158 => 46,  154 => 45,  147 => 40,  145 => 39,  141 => 37,  137 => 35,  135 => 34,  134 => 33,  133 => 32,  131 => 31,  129 => 30,  120 => 26,  115 => 24,  106 => 17,  104 => 16,  102 => 15,  100 => 14,  98 => 13,  96 => 11,  94 => 10,  87 => 9,  76 => 7,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/export.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Report/export.html.twig");
    }
}
