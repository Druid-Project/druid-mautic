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

/* @MauticForm/SubscribedEvents/AbTest/submissions.html.twig */
class __TwigTemplate_c526f0431b3a54251d12c925303c5309 extends Template
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
        $context["support"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 1, $this->source); })()), "support", [], "any", false, false, false, 1);
        // line 2
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 2, $this->source); })()), "criteria", [], "any", false, false, false, 2), CoreExtension::getAttribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 2, $this->source); })()), "basedOn", [], "any", false, false, false, 2), [], "array", false, false, false, 2), "label", [], "any", false, false, false, 2));
        // line 3
        $context["chart"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\BarChartExtension']->createNewChart(CoreExtension::getAttribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 3, $this->source); })()), "labels", [], "any", false, false, false, 3));
        // line 4
        yield "
";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5)) {
            // line 6
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new RuntimeError('Variable "support" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["datasetLabel"] => $context["values"]) {
                // line 7
                yield "        ";
                CoreExtension::getAttribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 7, $this->source); })()), "setDataset", [$context["datasetLabel"], $context["values"]], "method", false, false, false, 7);
                // line 8
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['datasetLabel'], $context['values'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        yield "
<div class=\"panel ovf-h abtest-bar-chart\">
    <div class=\"panel-body box-layout\">
        <div class=\"col-xs-8 va-m\">
            <h5 class=\"text-white dark-md fw-sb mb-xs\">
                ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "
            </h5>
        </div>
        <div class=\"col-xs-4 va-t text-right\">
            <h3 class=\"text-white dark-sm\"><span class=\"ri-bar-chart-box-line\"></span></h3>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <canvas id=\"abtest-bar-chart\" height=\"300\"></canvas>
        </div>
    </div>
</div>

<script>
    mQuery(document).ready(function() {
        mQuery('#abStatsModal').on('shown.bs.modal', function (event) {
            var canvas = document.getElementById(\"abtest-bar-chart\");
            var barData = mQuery.parseJSON('";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 33, $this->source); })()), "render", [], "any", false, false, false, 33)), ["'" => "\\'"]), "html", null, true);
        yield "');
            var barGraph = new Chart(canvas, {type: 'bar', data: barData});
        });
    });
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/SubscribedEvents/AbTest/submissions.html.twig";
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
        return array (  96 => 33,  75 => 15,  68 => 10,  61 => 8,  58 => 7,  53 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/SubscribedEvents/AbTest/submissions.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/SubscribedEvents/AbTest/submissions.html.twig");
    }
}
