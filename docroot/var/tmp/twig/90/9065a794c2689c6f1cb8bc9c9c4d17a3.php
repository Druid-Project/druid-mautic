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

/* @MauticReport/SubscribedEvents/Dashboard/widget.html.twig */
class __TwigTemplate_374c439a258d28a656ff0106696bf1f7 extends Template
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
        if ((array_key_exists("chartData", $context) && array_key_exists("chartType", $context))) {
            // line 2
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["chartData"] ?? null), "data", [], "any", true, true, false, 2)) {
                // line 3
                yield "        ";
                $context["chartData"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 3, $this->source); })()), "data", [], "any", false, false, false, 3);
                // line 4
                yield "    ";
            }
            // line 5
            yield "
    ";
            // line 6
            if (("table" == (isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 6, $this->source); })()))) {
                // line 7
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/table.html.twig", ["headItems" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 8
($context["chartData"] ?? null), 0, [], "array", true, true, false, 8)) ? (Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 8, $this->source); })()), 0, [], "array", false, false, false, 8))) : ([])), "bodyItems" =>                 // line 9
(isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 9, $this->source); })())]);
                // line 10
                yield "
    ";
            } else {
                // line 12
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 12, $this->source); })()), "chartType" => (isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 12, $this->source); })()), "chartHeight" => (isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 12, $this->source); })())]);
                yield "
    ";
            }
            // line 14
            yield "
    ";
            // line 15
            if (is_iterable((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 15, $this->source); })()))) {
                // line 16
                yield "        ";
                // line 17
                yield "        ";
                $context["dateFrom"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 17, $this->source); })()), "timezone", [], "any", false, false, false, 17));
                // line 18
                yield "        ";
                $context["dateTo"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 18, $this->source); })()), "timezone", [], "any", false, false, false, 18));
                // line 19
                yield "    ";
            }
            // line 20
            yield "    <div class=\"pull-right mr-md mb-md\">
        <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_report_action", ["objectId" => (isset($context["reportId"]) || array_key_exists("reportId", $context) ? $context["reportId"] : (function () { throw new RuntimeError('Variable "reportId" does not exist.', 21, $this->source); })()), "objectAction" => "view", "daterange" => ["date_to" => (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 21, $this->source); })()), "date_from" => (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 21, $this->source); })())]]), "html", null, true);
            yield "\">
            <span class=\"label label-success\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.dashboard.widgets.full_report"), "html", null, true);
            yield "</span>
        </a>
    </div>
    <div class=\"clearfix\"></div>
";
        } else {
            // line 27
            yield "    <div class=\"ml-20 mr-20 mt-lg px-2 alert alert-danger\" role=\"alert\">
        <a href=\"#\" class=\"alert-link\"><i class=\"ri-alert-line\" aria-hidden=\"true\"></i> ";
            // line 28
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.dashboard.widgets.no_report_found"));
            yield "</a>
    </div>
    <div class=\"clearfix\"></div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/SubscribedEvents/Dashboard/widget.html.twig";
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
        return array (  107 => 28,  104 => 27,  96 => 22,  92 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  78 => 16,  76 => 15,  73 => 14,  67 => 12,  63 => 10,  61 => 9,  60 => 8,  58 => 7,  56 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/SubscribedEvents/Dashboard/widget.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/SubscribedEvents/Dashboard/widget.html.twig");
    }
}
