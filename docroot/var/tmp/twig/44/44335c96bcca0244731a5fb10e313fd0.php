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

/* @MauticDynamicContent/FormTheme/Filter/layout.html.twig */
class __TwigTemplate_343e0d739c5144cfc77fe55fd5f6d20e extends Template
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

        // line 66
        $_trait_0 = $this->loadTemplate("@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig", "@MauticDynamicContent/FormTheme/Filter/layout.html.twig", 66);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig".'" cannot be used as a trait.', 66, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                '_dwc_filters_entry_widget' => [$this, 'block__dwc_filters_entry_widget'],
                '_dwc_filters_widget' => [$this, 'block__dwc_filters_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_dwc_filters_entry_widget', $context, $blocks);
        // line 64
        yield "
";
        // line 65
        yield from $this->unwrap()->yieldBlock('_dwc_filters_widget', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__dwc_filters_entry_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["isPrototype"] = ("__name__" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "name", [], "any", false, false, false, 2));
        // line 3
        $context["filterType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "field", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3);
        // line 4
        $context["inGroup"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 4), "data", [], "any", false, true, false, 4), "glue", [], "any", true, true, false, 4) && ("and" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4), "glue", [], "any", false, false, false, 4)));
        // line 5
        $context["isBehavior"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "behaviors", [], "any", false, true, false, 5), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 5, $this->source); })()), [], "array", false, true, false, 5), "label", [], "any", true, true, false, 5);
        // line 6
        $context["icon"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 6), "data", [], "any", false, true, false, 6), "object", [], "any", true, true, false, 6) && ("company" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6), "object", [], "any", false, false, false, 6)))) ? ("ri-building-2-line") : ("ri-user-6-fill"));
        // line 8
        if ((isset($context["isBehavior"]) || array_key_exists("isBehavior", $context) ? $context["isBehavior"] : (function () { throw new RuntimeError('Variable "isBehavior" does not exist.', 8, $this->source); })())) {
            // line 9
            $context["object"] = "behaviors";
        } else {
            // line 11
            $context["object"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 11), "data", [], "any", false, true, false, 11), "object", [], "any", true, true, false, 11)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "object", [], "any", false, false, false, 11)) : ("lead"));
        }
        // line 14
        if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 14, $this->source); })()) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 14, $this->source); })()), [], "array", false, true, false, 14), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 14, $this->source); })()), [], "array", false, true, false, 14), "label", [], "any", true, true, false, 14))) {
            // line 15
            yield "<div class=\"panel ";
            if (((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 15, $this->source); })()) && (false === (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 15, $this->source); })())))) {
                yield "in-group";
            }
            yield "\">
    <div class=\"panel-heading ";
            // line 16
            if (( !(isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 16, $this->source); })()) && ("0" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16)))) {
                yield "hide";
            }
            yield "\">
        <div class=\"panel-glue col-sm-2 pl-0 \">
            ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "glue", [], "any", false, false, false, 18), 'widget');
            yield "
        </div>
    </div>
    <div class=\"panel-body\">
        <div class=\"col-xs-6 col-sm-3 field-name\">
            <i class=\"object-icon fa ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
            <span>";
            // line 24
            (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 24, $this->source); })())) ? (yield "__label__") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 24, $this->source); })()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), "label", [], "any", false, false, false, 24), "html", null, true)));
            yield "</span>
        </div>

        <div class=\"col-xs-6 col-sm-3 padding-none\">
            ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "operator", [], "any", false, false, false, 28), 'widget');
            yield "
        </div>";
            // line 31
            $context["hasErrors"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "filter", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) || Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "display", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)));
            // line 32
            yield "<div class=\"col-xs-10 col-sm-5 padding-none ";
            if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 32, $this->source); })())) {
                yield "has-error";
            }
            yield "\">
            ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "filter", [], "any", false, false, false, 33), 'widget');
            yield "
            ";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "display", [], "any", false, false, false, 34), 'widget');
            yield "
            ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "filter", [], "any", false, false, false, 35), 'errors');
            yield "
            ";
            // line 36
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "display", [], "any", false, false, false, 36), 'errors');
            yield "
        </div>

        <div class=\"col-xs-2 col-sm-1\">
            ";
            // line 40
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticDynamicContent/FormTheme/Filter/layout.html.twig", 40)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.report.report.label.removefilter", "variant" => "ghost", "icon_only" => true, "size" => "xs", "danger" => "true", "icon" => "ri-delete-bin-line", "href" => "javascript: void(0);", "attributes" => ["class" => "remove-selected text-danger pull-right"]]]]));
            // line 56
            yield "        </div>
        ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "field", [], "any", false, false, false, 57), 'widget');
            yield "
        ";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "type", [], "any", false, false, false, 58), 'widget');
            yield "
        ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "object", [], "any", false, false, false, 59), 'widget');
            yield "
    </div>
</div>";
        }
        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__dwc_filters_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 66
        yield "  ";
        // line 67
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("_leadlist_filters_widget", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDynamicContent/FormTheme/Filter/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  189 => 67,  187 => 66,  180 => 65,  171 => 59,  167 => 58,  163 => 57,  160 => 56,  158 => 40,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  132 => 32,  130 => 31,  126 => 28,  119 => 24,  115 => 23,  107 => 18,  100 => 16,  93 => 15,  91 => 14,  88 => 11,  85 => 9,  83 => 8,  81 => 6,  79 => 5,  77 => 4,  75 => 3,  73 => 2,  66 => 1,  61 => 65,  58 => 64,  56 => 1,  35 => 66,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/FormTheme/Filter/layout.html.twig", "/app/docroot/app/bundles/DynamicContentBundle/Resources/views/FormTheme/Filter/layout.html.twig");
    }
}
