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

/* @MauticLead/Lead/_list_column_points.html.twig */
class __TwigTemplate_db6d2bce1a5570a12e141560dc8b16a7 extends Template
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
        yield "<td class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\">
    <span size=\"sm\" class=\"label label-warm-gray\" style=\"";
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "color", [], "any", false, false, false, 2)) {
            yield "background-color:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "color", [], "any", false, false, false, 2), "html", null, true);
            yield ";";
        }
        yield "\"><i class=\"ri-coins-fill\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })()), "points", [], "any", false, false, false, 2), "html", null, true);
        yield "</span>
</td>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/_list_column_points.html.twig";
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
        return array (  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_list_column_points.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/_list_column_points.html.twig");
    }
}
