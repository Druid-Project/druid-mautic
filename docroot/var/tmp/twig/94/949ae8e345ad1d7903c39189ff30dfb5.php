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

/* @MauticPage/SubscribedEvents/AbTest/bargraph.html.twig */
class __TwigTemplate_ddbf714ef88472501d64f9ce557d9c15 extends Template
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
        $context["support"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 6, $this->source); })()), "support", [], "any", false, false, false, 6);
        // line 7
        $context["label"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 7, $this->source); })()), "criteria", [], "any", false, false, false, 7), CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 7, $this->source); })()), "basedOn", [], "any", false, false, false, 7), [], "array", false, false, false, 7), "label", [], "any", false, false, false, 7);
        // line 8
        $context["chart"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\BarChartExtension']->createNewChart(CoreExtension::getAttribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 8, $this->source); })()), "labels", [], "any", false, false, false, 8));
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["support"] ?? null), "data", [], "any", true, true, false, 9) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9)))) {
            // line 10
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 10, $this->source); })()), "data", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["datasetLabel"] => $context["values"]) {
                // line 11
                yield "        ";
                CoreExtension::getAttribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 11, $this->source); })()), "setDataset", [$context["datasetLabel"], $context["values"]], "method", false, false, false, 11);
                // line 12
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['datasetLabel'], $context['values'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        yield "<div class=\"panel ovf-h bg-light-xs abtest-bar-chart\">
    <div class=\"panel-body box-layout\">
        <div class=\"col-xs-8 va-m\">
            <h5 class=\"text-white dark-md fw-sb mb-xs\">
                ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 18, $this->source); })())), "html", null, true);
        yield "
            </h5>
        </div>
        <div class=\"col-xs-4 va-t text-right\">
            <h3 class=\"text-white dark-sm\"><span class=\"ri-bar-chart-box-line\"></span></h3>
        </div>
    </div>
    ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 25, $this->source); })()), "render", [], "any", false, false, false, 25), "chartType" => "bar", "chartHeight" => 300]);
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/SubscribedEvents/AbTest/bargraph.html.twig";
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
        return array (  81 => 25,  71 => 18,  65 => 14,  58 => 12,  55 => 11,  50 => 10,  48 => 9,  46 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/SubscribedEvents/AbTest/bargraph.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/SubscribedEvents/AbTest/bargraph.html.twig");
    }
}
