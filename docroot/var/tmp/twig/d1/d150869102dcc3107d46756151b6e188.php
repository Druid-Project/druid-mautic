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

/* @MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig */
class __TwigTemplate_2db4f50bd35c932c788b55eed2aa1b5a extends Template
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
            '_leadlist_filters_widget' => [$this, 'block__leadlist_filters_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield from $this->unwrap()->yieldBlock('_leadlist_filters_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__leadlist_filters_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["filter"]) {
            // line 7
            yield "    ";
            $context["isPrototype"] = ("__name__" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7));
            // line 8
            yield "    ";
            $context["isBehavior"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "fields", [], "any", false, true, false, 8), "behaviors", [], "any", false, true, false, 8), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "field", [], "any", false, false, false, 8), [], "array", true, true, false, 8);
            // line 9
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "parent", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "fields", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["object"] => $context["objectfields"]) {
                // line 10
                yield "      ";
                $context["isField"] = CoreExtension::getAttribute($this->env, $this->source, $context["objectfields"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "field", [], "any", false, false, false, 10), [], "array", true, true, false, 10);
                // line 11
                yield "      ";
                if (((((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 11, $this->source); })()) || (isset($context["isField"]) || array_key_exists("isField", $context) ? $context["isField"] : (function () { throw new RuntimeError('Variable "isField" does not exist.', 11, $this->source); })())) || (isset($context["isBehavior"]) || array_key_exists("isBehavior", $context) ? $context["isBehavior"] : (function () { throw new RuntimeError('Variable "isBehavior" does not exist.', 11, $this->source); })())) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "isRendered", [], "any", false, false, false, 11))) {
                    // line 12
                    yield "        ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget', ["first" => (0 == $context["i"])]);
                    yield "
      ";
                }
                // line 14
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['object'], $context['objectfields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  88 => 15,  82 => 14,  76 => 12,  73 => 11,  70 => 10,  65 => 9,  62 => 8,  59 => 7,  54 => 6,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/FormTheme/Filter/_leadlist_filters_widget.html.twig");
    }
}
