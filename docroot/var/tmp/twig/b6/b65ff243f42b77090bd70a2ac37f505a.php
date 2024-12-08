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

/* @Integrations/Config/field_mapping.html.twig */
class __TwigTemplate_510ac7671644ee6aaca2e445f34d3fc9 extends Template
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
        yield "
";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "filter", [], "any", false, false, false, 2) - (isset($context["totalFieldCount"]) || array_key_exists("totalFieldCount", $context) ? $context["totalFieldCount"] : (function () { throw new RuntimeError('Variable "totalFieldCount" does not exist.', 2, $this->source); })())), 'row');
        yield "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["fieldName"] => $context["fieldForm"]) {
            // line 4
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["fieldForm"], "mappedField", [], "any", true, true, false, 4)) {
                // line 5
                yield "        <div class=\"row\">
            <div class=\"col-sm-12\">";
                // line 6
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["fieldForm"], 'label');
                yield "</div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6";
                // line 9
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, $context["fieldForm"], "mappedField", [], "any", false, false, false, 9))) {
                    yield " has-error";
                }
                yield "\">
                ";
                // line 10
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["fieldForm"], "mappedField", [], "any", false, false, false, 10), 'widget');
                yield "
            </div>
            <div class=\"col-sm-6\">";
                // line 12
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["fieldForm"], "syncDirection", [], "any", false, false, false, 12), 'widget');
                yield "</div>
        </div>
        <hr />
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['fieldName'], $context['fieldForm'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "filter-totalFieldCount", [], "array", false, false, false, 18), "vars", [], "any", false, false, false, 18), "data", [], "any", false, false, false, 18), "page" =>         // line 19
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 19, $this->source); })()), "limit" => 15, "fixedLimit" => true, "sessionVar" => ((        // line 22
(isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 22, $this->source); })()) . "-") . (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 22, $this->source); })())), "target" => "#IntegrationEditModal", "jsCallback" => "Mautic.getPaginatedIntegrationFields", "jsArguments" => [["object" =>         // line 27
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 27, $this->source); })()), "integration" =>         // line 28
(isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 28, $this->source); })()), "keyword" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "filter-keyword", [], "array", false, false, false, 29), "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29)]]]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Integrations/Config/field_mapping.html.twig";
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
        return array (  93 => 29,  92 => 28,  91 => 27,  90 => 22,  89 => 19,  88 => 18,  87 => 17,  76 => 12,  71 => 10,  65 => 9,  59 => 6,  56 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Integrations/Config/field_mapping.html.twig", "/app/docroot/app/bundles/IntegrationsBundle/Resources/views/Config/field_mapping.html.twig");
    }
}
