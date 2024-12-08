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

/* @MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig */
class __TwigTemplate_8baad898b9d1093bb52afb4b390015dc extends Template
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
            '_leadlist_filters_entry_widget' => [$this, 'block__leadlist_filters_entry_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield from $this->unwrap()->yieldBlock('_leadlist_filters_entry_widget', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__leadlist_filters_entry_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        $context["isPrototype"] = ("__name__" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8));
        // line 9
        yield "  ";
        $context["filterType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "field", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9);
        // line 10
        yield "  ";
        $context["inGroup"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 10), "data", [], "any", true, true, false, 10) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 10), "data", [], "any", false, true, false, 10), "glue", [], "any", true, true, false, 10)) && ("and" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "data", [], "any", false, false, false, 10), "glue", [], "any", false, false, false, 10))) && (false == (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 10, $this->source); })())));
        // line 11
        yield "  ";
        $context["isBehavior"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "behaviors", [], "any", false, true, false, 11), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 11, $this->source); })()), [], "array", false, true, false, 11), "label", [], "any", true, true, false, 11);
        // line 12
        yield "  ";
        $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 12), "data", [], "any", false, true, false, 12), "object", [], "any", true, true, false, 12) && ("company" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12), "object", [], "any", false, false, false, 12)))) ? ("ri-building-2-line") : ("ri-user-6-fill"));
        // line 13
        yield "
  ";
        // line 14
        if ((isset($context["isBehavior"]) || array_key_exists("isBehavior", $context) ? $context["isBehavior"] : (function () { throw new RuntimeError('Variable "isBehavior" does not exist.', 14, $this->source); })())) {
            // line 15
            yield "      ";
            $context["object"] = "behaviors";
            // line 16
            yield "  ";
        } else {
            // line 17
            yield "      ";
            $context["object"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 17), "data", [], "any", false, true, false, 17), "object", [], "any", true, true, false, 17)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "data", [], "any", false, false, false, 17), "object", [], "any", false, false, false, 17)) : ("lead"));
            // line 18
            yield "  ";
        }
        // line 19
        yield "
  ";
        // line 20
        if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 20, $this->source); })()) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 20, $this->source); })()), [], "array", false, true, false, 20), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 20, $this->source); })()), [], "array", false, true, false, 20), "label", [], "any", true, true, false, 20))) {
            // line 21
            yield "    <div class=\"segment-filter panel ";
            if ((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 21, $this->source); })())) {
                yield "in-group";
            }
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "\">
        <div class=\"panel-heading pl-0 pr-0\">
            <div class=\"panel-glue col-sm-2 pl-0";
            // line 23
            if (("0" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23))) {
                yield " hide";
            }
            yield "\">
                ";
            // line 24
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "glue", [], "any", false, false, false, 24), 'widget');
            yield "
            </div>
            <div class=\"col-sm-2 pr-0 pull-right\">
                <div class=\"btn-group btn-group-xs pull-right\" role=\"group\">
                    <a href=\"javascript: void(0);\" type=\"button\" class=\"pull-right remove-selected btn btn-xs btn-secondary\">
                        <i class=\"ri-delete-bin-line\"></i>
                    </a>
                    <a href=\"javascript: void(0);\" type=\"button\" class=\"pull-right copy-filter-group btn btn-xs btn-secondary  btn-nospin";
            // line 31
            if ((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 31, $this->source); })())) {
                yield " hide";
            }
            yield "\" data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.copy.filter.group"), "html", null, true);
            yield "\">
                        <i class=\"ri-file-copy-line\"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"panel-body\">
            <div class=\"col-xs-6 col-sm-3 field-name\">
                <span><i class=\"object-icon ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "\" aria-hidden=\"true\"></i> ";
            if ((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 39, $this->source); })())) {
                yield "__label__";
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 39, $this->source); })()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 39, $this->source); })()), [], "array", false, false, false, 39), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 39, $this->source); })()), [], "array", false, false, false, 39), "label", [], "array", false, false, false, 39), "html", null, true);
            }
            yield "</span>
            </div>

            <div class=\"col-xs-6 col-sm-3 padding-none\">
                ";
            // line 43
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "operator", [], "any", false, false, false, 43), 'widget');
            yield "
            </div>

            ";
            // line 46
            $context["hasErrors"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "properties", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0);
            // line 47
            yield "            <div class=\"col-xs-12 col-sm-6 padding-none ";
            if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 47, $this->source); })())) {
                yield "has-error";
            }
            yield "\">
                <div class=\"properties-form\">
                    ";
            // line 49
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "properties", [], "any", false, false, false, 49), 'widget');
            yield "
                </div>
                ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), 'errors');
            yield "
            </div>
            ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "field", [], "any", false, false, false, 53), 'widget');
            yield "
            ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), 'widget');
            yield "
            ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "object", [], "any", false, false, false, 55), 'widget');
            yield "
        </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  179 => 55,  175 => 54,  171 => 53,  166 => 51,  161 => 49,  153 => 47,  151 => 46,  145 => 43,  132 => 39,  117 => 31,  107 => 24,  101 => 23,  91 => 21,  89 => 20,  86 => 19,  83 => 18,  80 => 17,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  43 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig");
    }
}
