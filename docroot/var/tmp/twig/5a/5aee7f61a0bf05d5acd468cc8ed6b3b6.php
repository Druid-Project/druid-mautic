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

/* @MauticCore/Helper/lifecycle.html.twig */
class __TwigTemplate_3ff2662708983105d149b4bd3a06b093 extends Template
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
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chartItems"]) || array_key_exists("chartItems", $context) ? $context["chartItems"] : (function () { throw new RuntimeError('Variable "chartItems" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["chartData"]) {
            // line 15
            yield "  <div style=\"float: left; width: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "%; \" class=\"pt-sd pr-md pb-md pl-md\">
    <div class=\"chart-wrapper\">
      <div>
        <div class=\"chart-legend pull-left-lg\"><h4>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["columnName"]) || array_key_exists("columnName", $context) ? $context["columnName"] : (function () { throw new RuntimeError('Variable "columnName" does not exist.', 18, $this->source); })()), $context["key"], [], "array", false, false, false, 18), "html", null, true);
            yield "</h4></div>
        <div class=\"clearfix\"></div>
        <div class=\"pull-left\"><a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 20, $this->source); })()), $context["key"], [], "array", false, false, false, 20), "html", null, true);
            yield "\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 20, $this->source); })()), $context["key"], [], "array", false, false, false, 20), "html", null, true);
            yield " Contacts</div></a>
        <div class=\"clearfix\"></div>
        <div style=\"height:";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 22, $this->source); })()) / 2.3), "html", null, true);
            yield "px;\">
            ";
            // line 23
            if (array_key_exists("chartType", $context)) {
                // line 24
                yield "          <canvas class=\"chart ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 24, $this->source); })()), "html", null, true);
                yield "-chart\" style=\"font-size:9px!important;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($context["chartData"]), "html", null, true);
                yield "</canvas>
            ";
            }
            // line 26
            yield "        </div>
        <div class=\"legend\" style=\"font-size: 9px;\"></div>
      </div>
    </div>
    ";
            // line 30
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 30, $this->source); })()), $context["key"], [], "array", false, false, false, 30)) {
                // line 31
                yield "      <div class=\"chart-wrapper\">
        <div>
          <div class=\"chart-legend pt-sd pr-md pb-md pl-md\"><h5>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lifecycle.graph.stage.cycle"), "html", null, true);
                yield "</h5></div>
          <div class=\"clearfix\"></div>
          <div style=\"height:";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 35, $this->source); })()) / 2.3), "html", null, true);
                yield "px;\">
            <canvas class=\"chart liefechart-bar-chart\" style=\"font-size: 9px!important;\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stages"]) || array_key_exists("stages", $context) ? $context["stages"] : (function () { throw new RuntimeError('Variable "stages" does not exist.', 36, $this->source); })()), $context["key"], [], "array", false, false, false, 36)), "html", null, true);
                yield "</canvas>
          </div>
          <div class=\"legend\" style=\"font-size: 9px;\"></div>
        </div>
      </div>
    ";
            }
            // line 42
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 42, $this->source); })()), $context["key"], [], "array", false, false, false, 42)) {
                // line 43
                yield "        <div class=\"chart-wrapper\">
            <div>
                <div class=\"chart-legend pt-sd pr-md pb-md pl-md\"><h5>";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lifecycle.graph.device.granularity"), "html", null, true);
                yield "</h5></div>
                <div class=\"clearfix\"></div>
                <div style=\"height:";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 47, $this->source); })()) / 5), "html", null, true);
                yield "px;\">
                    <canvas class=\"chart horizontal-bar-chart\" style=\"font-size: 9px!important;\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devices"]) || array_key_exists("devices", $context) ? $context["devices"] : (function () { throw new RuntimeError('Variable "devices" does not exist.', 48, $this->source); })()), $context["key"], [], "array", false, false, false, 48)), "html", null, true);
                yield "</canvas>
                </div>
                <div class=\"legend\" style=\"font-size: 9px;\"></div>
            </div>
        </div>
    ";
            }
            // line 54
            yield "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['chartData'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "<div class=\"clearfix\"></div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/lifecycle.html.twig";
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
        return array (  141 => 56,  134 => 54,  125 => 48,  121 => 47,  116 => 45,  112 => 43,  109 => 42,  100 => 36,  96 => 35,  91 => 33,  87 => 31,  85 => 30,  79 => 26,  71 => 24,  69 => 23,  65 => 22,  58 => 20,  53 => 18,  46 => 15,  42 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/lifecycle.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/lifecycle.html.twig");
    }
}
