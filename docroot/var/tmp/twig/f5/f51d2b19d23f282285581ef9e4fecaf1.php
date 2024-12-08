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

/* @MauticCore/Helper/chart.html.twig */
class __TwigTemplate_484ecdc9e1d5be22b4c4d689e2019331 extends Template
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
        if (((array_key_exists("chartType", $context) && array_key_exists("chartData", $context)) && CoreExtension::getAttribute($this->env, $this->source, ($context["chartData"] ?? null), "datasets", [], "any", true, true, false, 1))) {
            // line 2
            yield "    ";
            $context["dataValues"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 2, $this->source); })()), "datasets", [], "any", false, false, false, 2), 0, [], "array", false, false, false, 2), "data", [], "any", false, false, false, 2);
            // line 3
            yield "    ";
            if ((Twig\Extension\CoreExtension::reduce($this->env, (isset($context["dataValues"]) || array_key_exists("dataValues", $context) ? $context["dataValues"] : (function () { throw new RuntimeError('Variable "dataValues" does not exist.', 3, $this->source); })()), function ($__carry__, $__v__) use ($context, $macros) { $context["carry"] = $__carry__; $context["v"] = $__v__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 3, $this->source); })()) + (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 3, $this->source); })())); }) > 0)) {
                // line 4
                yield "        <div class=\"chart-wrapper\">
            <div class=\"pt-sd pr-md pb-md pl-md\">
                <div ";
                // line 6
                if (array_key_exists("chartHeight", $context)) {
                    yield " style=\"height: calc(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chartHeight"]) || array_key_exists("chartHeight", $context) ? $context["chartHeight"] : (function () { throw new RuntimeError('Variable "chartHeight" does not exist.', 6, $this->source); })()), "html", null, true);
                    yield "px - 15px)\" ";
                }
                yield ">
                    <canvas class=\"chart ";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 7, $this->source); })()), "html", null, true);
                yield "-chart\" ";
                yield ((array_key_exists("disableLegend", $context)) ? ("data-disable-legend") : (""));
                yield ">
                        ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 8, $this->source); })())), "html", null, true);
                yield "
                    </canvas>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 14
                yield "    <div class=\"col-xs-12\">
        <div class=\"d-flex ai-center jc-center gap-xs text-disabled h-256\">
            <i class=\"ri-bar-chart-grouped-line ri-xl\"></i>
            <div class=\"fw-sb\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.no_data"), "html", null, true);
                yield "</div>
        </div>
    </div>
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/chart.html.twig";
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
        return array (  82 => 17,  77 => 14,  68 => 8,  62 => 7,  54 => 6,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/chart.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/chart.html.twig");
    }
}
