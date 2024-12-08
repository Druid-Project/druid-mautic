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

/* @MauticReport/Graph/Pie.html.twig */
class __TwigTemplate_e06b63c28de18604e59d52b38c718e23 extends Template
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
        yield "<div class=\"col-md-4\">
    <div class=\"panel ovf-h\">
        <div class=\"panel-body box-layout pb-0\">
            <div class=\"col-xs-8 va-m\">
                <h5 class=\"dark-md fw-sb mb-xs\">
                    ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)), "html", null, true);
        yield "
                </h5>
            </div>
            <div class=\"col-xs-4 va-t text-right\">
                <h3 class=\"text-white dark-sm\"><span class=\"fa ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["graph"] ?? null), "iconClass", [], "any", false, false, false, 10), "")) : ("")), "html", null, true);
        yield "\"></span></h3>
            </div>
        </div>
        ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/chart.html.twig", ["chartData" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 13, $this->source); })()), "data", [], "any", false, false, false, 13), "chartType" => "pie", "chartHeight" => 210]);
        yield "
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Graph/Pie.html.twig";
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
        return array (  62 => 13,  56 => 10,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Graph/Pie.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Graph/Pie.html.twig");
    }
}
