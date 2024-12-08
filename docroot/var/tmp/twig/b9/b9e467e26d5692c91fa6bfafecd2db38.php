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

/* @MauticEmail/Email/graph.html.twig */
class __TwigTemplate_785c1ac501af341ca785bfb4fd7137eb extends Template
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
        if (("list" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 1, $this->source); })()), "getEmailType", [], "method", false, false, false, 1))) {
            // line 2
            yield "    ";
            $context["label"] = "mautic.email.lead.list.comparison";
            // line 3
            yield "    ";
            $context["type"] = "bar";
        } else {
            // line 5
            yield "    ";
            $context["label"] = "mautic.email.stats";
            // line 6
            yield "    ";
            $context["type"] = "line";
        }
        // line 8
        yield "
";
        // line 9
        $context["dateFrom"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 9, $this->source); })()), "children", [], "any", false, false, false, 9), "date_from", [], "array", false, false, false, 9), "vars", [], "any", false, false, false, 9), "data", [], "array", false, false, false, 9);
        // line 10
        $context["dateTo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 10, $this->source); })()), "children", [], "any", false, false, false, 10), "date_to", [], "array", false, false, false, 10), "vars", [], "any", false, false, false, 10), "data", [], "array", false, false, false, 10);
        // line 11
        $context["actionRoute"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 13, $this->source); })()), "getId", [], "method", false, false, false, 13), "daterange" => ["date_to" =>         // line 15
(isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 15, $this->source); })()), "date_from" =>         // line 16
(isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 16, $this->source); })())]]);
        // line 19
        yield "
<div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 22
        if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "            <div class=\"text-right small\" id=\"variant-chart-switcher\">
                <span>
                    <a data-toggle=\"ajax\" class=\"btn btn-xs";
            // line 25
            if ( !(isset($context["showAllStats"]) || array_key_exists("showAllStats", $context) ? $context["showAllStats"] : (function () { throw new RuntimeError('Variable "showAllStats" does not exist.', 25, $this->source); })())) {
                yield " disabled";
            }
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 25, $this->source); })()) . "&stats=variant"), "html", null, true);
            yield "\">
                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.variant.graph.variant"), "html", null, true);
            yield "
                    </a>
                </span>
                </span> | </span>
                <span>
                    <a data-toggle=\"ajax\" class=\"btn btn-xs";
            // line 31
            if ( !(isset($context["showAllStats"]) || array_key_exists("showAllStats", $context) ? $context["showAllStats"] : (function () { throw new RuntimeError('Variable "showAllStats" does not exist.', 31, $this->source); })())) {
                yield " disabled";
            }
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 31, $this->source); })()) . "&stats=all"), "html", null, true);
            yield "\">
                        ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.variant.graph.all"), "html", null, true);
            yield "
                    </a>
                </span>
            </div>
            ";
        }
        // line 37
        yield "
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-12 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 42, $this->source); })())), "html", null, true);
        yield "
                        </h5>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"pt-0 pl-15 pb-10 pr-15 col-xs-6\">";
        // line 48
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 49
(isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "chartType" =>         // line 50
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 50, $this->source); })()), "chartHeight" => 300]);
        // line 54
        yield "</div>
                    <div class=\"pt-0 pl-15 pb-10 pr-15 col-xs-6\">";
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" =>         // line 57
(isset($context["statsDevices"]) || array_key_exists("statsDevices", $context) ? $context["statsDevices"] : (function () { throw new RuntimeError('Variable "statsDevices" does not exist.', 57, $this->source); })()), "chartType" => "horizontal-bar", "chartHeight" => 300]);
        // line 62
        yield "</div>
                </div>

        </div>
    </div>

<!--/ some stats -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/graph.html.twig";
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
        return array (  138 => 62,  136 => 57,  135 => 56,  132 => 54,  130 => 50,  129 => 49,  128 => 48,  120 => 42,  113 => 37,  105 => 32,  97 => 31,  89 => 26,  81 => 25,  77 => 23,  75 => 22,  70 => 19,  68 => 16,  67 => 15,  66 => 13,  65 => 11,  63 => 10,  61 => 9,  58 => 8,  54 => 6,  51 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/graph.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Email/graph.html.twig");
    }
}
