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

/* @MauticForm/Builder/field.html.twig */
class __TwigTemplate_bb725378ab21569cd508d3933d301ebd extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "
";
        // line 19
        $context["template"] = "<div class=\"col-md-6\">{content}</div>";
        // line 20
        $context["properties"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, false, false, 20), [])) : ([]));
        // line 21
        $context["validation"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "validation", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "validation", [], "any", false, false, false, 21), [])) : ([]));
        // line 22
        yield "
";
        // line 23
        $context["showAttributes"] = ((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "labelAttributes", [], "any", true, true, false, 23) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "inputAttributes", [], "any", true, true, false, 23)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "containerAttributes", [], "any", true, true, false, 23)) || CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "labelAttributes", [], "any", true, true, false, 23)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "alias", [], "any", true, true, false, 23));
        // line 24
        $context["showBehavior"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "showWhenValueExists", [], "any", true, true, false, 24) || CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "showWhenValueExists", [], "any", true, true, false, 24));
        // line 25
        $context["showConditions"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", true, true, false, 25)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "parent", [], "any", false, false, false, 25), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25)) : (null));
        // line 26
        yield "
";
        // line 27
        $context["placeholder"] = "";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "placeholder", [], "any", true, true, false, 28)) {
            // line 29
            yield "    ";
            $context["placeholder"] = CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 29, $this->source); })()), "placeholder"], 29, $context, $this->getSourceContext());
            // line 30
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 30, $this->source); })()), "placeholder", [], "any", false, false, false, 30), "setRendered", [], "method", false, false, false, 30);
            // line 31
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "properties", [], "any", false, false, false, 31), "placeholder", [], "any", false, false, false, 31), "setRendered", [], "method", false, false, false, 31);
        }
        // line 33
        yield "
";
        // line 34
        $context["customAttributes"] = "";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "labelAttributes", [], "any", true, true, false, 35)) {
            // line 36
            yield "    ";
            $context["customAttributes"] = CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 36, $this->source); })()), "labelAttributes"], 36, $context, $this->getSourceContext());
            // line 37
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 37, $this->source); })()), "labelAttributes", [], "any", false, false, false, 37), "setRendered", [], "method", false, false, false, 37);
            // line 38
            yield "    ";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "properties", [], "any", false, false, false, 38), "labelAttributes", [], "any", false, false, false, 38), "setRendered", [], "method", false, false, false, 38);
        }
        // line 40
        yield "
";
        // line 41
        $context["showProperties"] = false;
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", true, true, false, 42) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "properties", [], "any", false, false, false, 42)) > 0))) {
            // line 43
            yield "    ";
            // line 44
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "properties", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 45
                yield "        ";
                if ((("hidden" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["property"], "vars", [], "any", false, false, false, 45), "block_prefixes", [], "any", false, false, false, 45), 1, [], "array", false, false, false, 45)) && (false === CoreExtension::getAttribute($this->env, $this->source, $context["property"], "isRendered", [], "any", false, false, false, 45)))) {
                    // line 46
                    yield "            ";
                    $context["showProperties"] = true;
                    // line 47
                    yield "        ";
                }
                // line 48
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['property'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 50
        yield "
";
        // line 52
        $context["generalTabError"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "label", [], "any", true, true, false, 52) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "label", [], "any", false, false, false, 52)));
        // line 53
        $context["propertiesTabError"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", true, true, false, 53) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "properties", [], "any", false, false, false, 53)));
        // line 54
        $context["conditionsTabError"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "conditions", [], "any", true, true, false, 54) && $this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54)));
        // line 55
        yield "

<div class=\"bundle-form\">
    <div class=\"bundle-form-header\">
        <h3 class=\"mb-lg\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["fieldHeader"]) || array_key_exists("fieldHeader", $context) ? $context["fieldHeader"] : (function () { throw new RuntimeError('Variable "fieldHeader" does not exist.', 59, $this->source); })()), "html", null, true);
        yield "</h3>
    </div>

    ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_start');
        yield "

    <div role=\"tabpanel\">
        <ul class=\"nav nav-tabs nav-tabs-contained\" role=\"tablist\">
            <li role=\"presentation\" class=\"active\">
                <a class=\"";
        // line 67
        if ((isset($context["generalTabError"]) || array_key_exists("generalTabError", $context) ? $context["generalTabError"] : (function () { throw new RuntimeError('Variable "generalTabError" does not exist.', 67, $this->source); })())) {
            yield "text-danger";
        }
        yield "\" href=\"#general\" aria-controls=\"general\" role=\"tab\" data-toggle=\"tab\">
                    ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.general"), "html", null, true);
        yield "
                    ";
        // line 69
        if ((isset($context["generalTabError"]) || array_key_exists("generalTabError", $context) ? $context["generalTabError"] : (function () { throw new RuntimeError('Variable "generalTabError" does not exist.', 69, $this->source); })())) {
            // line 70
            yield "                        <i class=\"ri-alert-line\"></i>
                    ";
        }
        // line 72
        yield "                </a>
            </li>

            ";
        // line 75
        if ((isset($context["showConditions"]) || array_key_exists("showConditions", $context) ? $context["showConditions"] : (function () { throw new RuntimeError('Variable "showConditions" does not exist.', 75, $this->source); })())) {
            // line 76
            yield "                <li role=\"presentation\">
                    <a class=\"";
            // line 77
            if ((isset($context["conditionsTabError"]) || array_key_exists("conditionsTabError", $context) ? $context["conditionsTabError"] : (function () { throw new RuntimeError('Variable "conditionsTabError" does not exist.', 77, $this->source); })())) {
                yield "text-danger";
            }
            yield "\" href=\"#conditions\" aria-controls=\"conditions\" role=\"tab\" data-toggle=\"tab\">
                        ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition"), "html", null, true);
            yield "
                        ";
            // line 79
            if ((isset($context["conditionsTabError"]) || array_key_exists("conditionsTabError", $context) ? $context["conditionsTabError"] : (function () { throw new RuntimeError('Variable "conditionsTabError" does not exist.', 79, $this->source); })())) {
                // line 80
                yield "                            <i class=\"ri-alert-line\"></i>
                        ";
            }
            // line 82
            yield "                    </a>
                </li>
            ";
        }
        // line 85
        yield "
            ";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "mappedField", [], "any", true, true, false, 86)) {
            // line 87
            yield "              <li role=\"presentation\">
                  <a href=\"#mappedfields\" aria-controls=\"mappedfields\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.mappedfield"), "html", null, true);
            yield "
                  </a>
              </li>
            ";
        }
        // line 93
        yield "
            ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isRequired", [], "any", true, true, false, 94)) {
            // line 95
            yield "              <li role=\"presentation\">
                  <a href=\"#required\" aria-controls=\"required\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.validation"), "html", null, true);
            yield "
                  </a>
              </li>
            ";
        }
        // line 101
        yield "
            ";
        // line 102
        if ((isset($context["showProperties"]) || array_key_exists("showProperties", $context) ? $context["showProperties"] : (function () { throw new RuntimeError('Variable "showProperties" does not exist.', 102, $this->source); })())) {
            // line 103
            yield "              <li role=\"presentation\">
                  <a class=\"";
            // line 104
            if ((isset($context["propertiesTabError"]) || array_key_exists("propertiesTabError", $context) ? $context["propertiesTabError"] : (function () { throw new RuntimeError('Variable "propertiesTabError" does not exist.', 104, $this->source); })())) {
                yield "text-danger";
            }
            yield "\" href=\"#properties\" aria-controls=\"properties\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.properties"), "html", null, true);
            yield "
                      ";
            // line 106
            if ((isset($context["propertiesTabError"]) || array_key_exists("propertiesTabError", $context) ? $context["propertiesTabError"] : (function () { throw new RuntimeError('Variable "propertiesTabError" does not exist.', 106, $this->source); })())) {
                // line 107
                yield "                          <i class=\"ri-alert-line\"></i>
                      ";
            }
            // line 109
            yield "                  </a>
              </li>
            ";
        }
        // line 112
        yield "
            ";
        // line 113
        if ((isset($context["showAttributes"]) || array_key_exists("showAttributes", $context) ? $context["showAttributes"] : (function () { throw new RuntimeError('Variable "showAttributes" does not exist.', 113, $this->source); })())) {
            // line 114
            yield "              <li role=\"presentation\">
                  <a href=\"#attributes\" aria-controls=\"attributes\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.attributes"), "html", null, true);
            yield "
                  </a>
              </li>
            ";
        }
        // line 120
        yield "
            ";
        // line 121
        if ((isset($context["showBehavior"]) || array_key_exists("showBehavior", $context) ? $context["showBehavior"] : (function () { throw new RuntimeError('Variable "showBehavior" does not exist.', 121, $this->source); })())) {
            // line 122
            yield "              <li role=\"progressive-profiling\">
                  <a href=\"#progressive-profiling\" aria-controls=\"progressive-profiling\" role=\"tab\" data-toggle=\"tab\">
                      ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.section.progressive.profiling"), "html", null, true);
            yield "
                  </a>
              </li>
            ";
        }
        // line 128
        yield "        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content pa-lg\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"general\">
                <div class=\"row\">
                    ";
        // line 134
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "label"], 134, $context, $this->getSourceContext());
        yield "
                    ";
        // line 135
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "showLabel"], 135, $context, $this->getSourceContext());
        yield "
                    ";
        // line 136
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "saveResult"], 136, $context, $this->getSourceContext());
        yield "
                    ";
        // line 137
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "defaultValue"], 137, $context, $this->getSourceContext());
        yield "
                    ";
        // line 138
        yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "helpMessage"], 138, $context, $this->getSourceContext());
        yield "
                    ";
        // line 139
        yield (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 139, $this->source); })());
        yield "
                </div>
            </div>

            ";
        // line 143
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "mappedField", [], "any", true, true, false, 143)) {
            // line 144
            yield "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"mappedfields\">
                  <div class=\"row\">
                      ";
            // line 146
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "mappedObject"], 146, $context, $this->getSourceContext());
            yield "
                      ";
            // line 147
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "mappedField"], 147, $context, $this->getSourceContext());
            yield "
                  </div>
              </div>
            ";
        }
        // line 151
        yield "
            ";
        // line 152
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isRequired", [], "any", true, true, false, 152)) {
            // line 153
            yield "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"required\">
                      <div class=\"row\">";
            // line 155
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "isRequired", [], "any", true, true, false, 155)) {
                yield "<div class=\"col-md-4\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "isRequired", [], "any", false, false, false, 155), 'row');
                yield "</div>";
            }
            // line 156
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "validationMessage", [], "any", true, true, false, 156)) {
                yield "<div class=\"col-md-8\">";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "validationMessage", [], "any", false, false, false, 156), 'row');
                yield "</div>";
            }
            // line 157
            yield "                      </div>
                  <div class=\"row\">
                      ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["validation"]) || array_key_exists("validation", $context) ? $context["validation"] : (function () { throw new RuntimeError('Variable "validation" does not exist.', 159, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["property"]) {
                // line 160
                yield "                          ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "validation", [], "any", false, false, false, 160), $context["name"], [], "array", false, false, false, 160), "isRendered", [], "any", false, false, false, 160) && ("labelAttributes" != $context["name"]))) {
                    // line 161
                    yield "                            ";
                    if (("hiddin" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "validation", [], "any", false, false, false, 161), $context["name"], [], "array", false, false, false, 161), "vars", [], "any", false, false, false, 161), "block_prefixes", [], "any", false, false, false, 161), 1, [], "array", false, false, false, 161))) {
                        // line 162
                        yield "                                ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "validation", [], "any", false, false, false, 162), $context["name"], [], "array", false, false, false, 162), 'row');
                        yield "
                            ";
                    } else {
                        // line 164
                        yield "                                ";
                        $context["col"] = 8;
                        // line 165
                        yield "                                ";
                        if (("chocie" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "validation", [], "any", false, false, false, 165), $context["name"], [], "array", false, false, false, 165), "vars", [], "any", false, false, false, 165), "block_prefixes", [], "any", false, false, false, 165), 1, [], "array", false, false, false, 165))) {
                            // line 166
                            yield "                                    ";
                            $context["col"] = 4;
                            // line 167
                            yield "                                ";
                        }
                        // line 168
                        yield "                                <div class=\"col-md-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 168, $this->source); })()), "html", null, true);
                        yield "\">
                                    ";
                        // line 169
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "validation", [], "any", false, false, false, 169), $context["name"], [], "array", false, false, false, 169), 'row');
                        yield "
                                </div>
                            ";
                    }
                    // line 172
                    yield "                          ";
                }
                // line 173
                yield "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['property'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            yield "                  </div>
              </div>
            ";
        }
        // line 177
        yield "
            ";
        // line 178
        if ((isset($context["showProperties"]) || array_key_exists("showProperties", $context) ? $context["showProperties"] : (function () { throw new RuntimeError('Variable "showProperties" does not exist.', 178, $this->source); })())) {
            // line 179
            yield "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"properties\">
                  ";
            // line 180
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "properties", [], "any", false, false, false, 180), 'errors');
            yield "
                  ";
            // line 181
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, true, false, 181), "syncList", [], "any", true, true, false, 181)) {
                // line 182
                yield "                      <div class=\"row\">
                          <div class=\"col-md-12\">
                              ";
                // line 184
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "properties", [], "any", false, false, false, 184), "syncList", [], "any", false, false, false, 184), 'row');
                yield "
                          </div>
                      </div>
                  ";
            }
            // line 188
            yield "                  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, true, false, 188), "list", [], "any", true, true, false, 188)) {
                // line 189
                yield "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
                // line 191
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "properties", [], "any", false, false, false, 191), "list", [], "any", false, false, false, 191), 'row');
                yield "
                        </div>
                    </div>
                  ";
            }
            // line 195
            yield "                  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", false, true, false, 195), "optionlist", [], "any", true, true, false, 195)) {
                // line 196
                yield "                      <div class=\"row\">
                          <div class=\"col-md-12\">
                              ";
                // line 198
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "properties", [], "any", false, false, false, 198), "optionlist", [], "any", false, false, false, 198), 'row');
                yield "
                          </div>
                      </div>
                  ";
            }
            // line 202
            yield "                  <div class=\"row\">
                      ";
            // line 203
            $context["i"] = 0;
            // line 204
            yield "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 204, $this->source); })()));
            foreach ($context['_seq'] as $context["name"] => $context["property"]) {
                // line 205
                yield "                        ";
                if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "properties", [], "any", false, false, false, 205), $context["name"], [], "array", false, false, false, 205), "isRendered", [], "any", false, false, false, 205) && !CoreExtension::inFilter($context["name"], ["labelAttributes", "placeholder"]))) {
                    // line 206
                    yield "                          ";
                    if (("hidden" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "properties", [], "any", false, false, false, 206), $context["name"], [], "array", false, false, false, 206), "vars", [], "any", false, false, false, 206), "block_prefixes", [], "any", false, false, false, 206), 1, [], "array", false, false, false, 206))) {
                        // line 207
                        yield "                              ";
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "properties", [], "any", false, false, false, 207), $context["name"], [], "array", false, false, false, 207), 'row');
                        yield "
                          ";
                    } else {
                        // line 209
                        yield "                              ";
                        $context["col"] = ((("text" == $context["name"])) ? (12) : (6));
                        // line 210
                        yield "                              <div class=\"col-md-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 210, $this->source); })()), "html", null, true);
                        yield "\">
                                  ";
                        // line 211
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "properties", [], "any", false, false, false, 211), $context["name"], [], "array", false, false, false, 211), 'row');
                        yield "
                              </div>
                              ";
                        // line 213
                        if ((6 == (isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 213, $this->source); })()))) {
                            // line 214
                            yield "                                  ";
                            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 214, $this->source); })()) + 1);
                            // line 215
                            yield "                                  ";
                            if ((0 == (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 215, $this->source); })()) % 2)) {
                                // line 216
                                yield "                                    <div class=\"clearfix\"></div>
                                  ";
                            }
                            // line 218
                            yield "                              ";
                        }
                        // line 219
                        yield "                          ";
                    }
                    // line 220
                    yield "                        ";
                }
                // line 221
                yield "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['property'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "                  </div>
              </div>
            ";
        }
        // line 225
        yield "
            ";
        // line 226
        if ((isset($context["showAttributes"]) || array_key_exists("showAttributes", $context) ? $context["showAttributes"] : (function () { throw new RuntimeError('Variable "showAttributes" does not exist.', 226, $this->source); })())) {
            // line 227
            yield "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"attributes\">
                  <div class=\"row\">
                      ";
            // line 229
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "alias"], 229, $context, $this->getSourceContext());
            yield "
                      ";
            // line 230
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "labelAttributes"], 230, $context, $this->getSourceContext());
            yield "
                      ";
            // line 231
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "inputAttributes"], 231, $context, $this->getSourceContext());
            yield "
                      ";
            // line 232
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "containerAttributes"], 232, $context, $this->getSourceContext());
            yield "
                      ";
            // line 233
            yield (isset($context["customAttributes"]) || array_key_exists("customAttributes", $context) ? $context["customAttributes"] : (function () { throw new RuntimeError('Variable "customAttributes" does not exist.', 233, $this->source); })());
            yield "
                  </div>
              </div>
            ";
        }
        // line 237
        yield "
            ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "parent", [], "any", false, false, false, 238), 'row');
        yield "

            ";
        // line 240
        if ((isset($context["showConditions"]) || array_key_exists("showConditions", $context) ? $context["showConditions"] : (function () { throw new RuntimeError('Variable "showConditions" does not exist.', 240, $this->source); })())) {
            // line 241
            yield "                <div role=\"tabpanel\" class=\"tab-pane\" id=\"conditions\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <label data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" data-original-title=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.show.only.tooltip"), "html", null, true);
            yield "\">
                                ";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.show.only"), "html", null, true);
            yield "
                                <i class=\"ri-question-line\"></i>
                            </label>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <label>&nbsp;</label>
                            ";
            // line 253
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "conditions", [], "any", false, false, false, 253), "expr", [], "any", false, false, false, 253), 'row');
            yield "
                        </div>
                        <div class=\"col-md-5\">
                            <label>&nbsp;</label>
                            ";
            // line 257
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "conditions", [], "any", false, false, false, 257), "values", [], "any", false, false, false, 257), 'row');
            yield "
                        </div>
                        <div class=\"col-md-4\">
                            ";
            // line 260
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 260, $this->source); })()), "conditions", [], "any", false, false, false, 260), "any", [], "any", false, false, false, 260), 'row');
            yield "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 265
        yield "
            ";
        // line 266
        if ((isset($context["showBehavior"]) || array_key_exists("showBehavior", $context) ? $context["showBehavior"] : (function () { throw new RuntimeError('Variable "showBehavior" does not exist.', 266, $this->source); })())) {
            // line 267
            yield "              <div role=\"tabpanel\" class=\"tab-pane\" id=\"progressive-profiling\">
                  <div class=\"row\">
                      ";
            // line 269
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "alwaysDisplay"], 269, $context, $this->getSourceContext());
            yield "
                      ";
            // line 270
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "isAutoFill"], 270, $context, $this->getSourceContext());
            yield "
                      ";
            // line 271
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "showWhenValueExists"], 271, $context, $this->getSourceContext());
            yield "
                      ";
            // line 272
            yield CoreExtension::callMacro($macros["_self"], "macro_row_if_exists", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "showAfterXSubmissions"], 272, $context, $this->getSourceContext());
            yield "
                  </div>
              </div>
            ";
        }
        // line 276
        yield "        </div>
    </div>
    ";
        // line 278
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), 'form_end');
        yield "
</div>
";
        yield from [];
    }

    // line 11
    public function macro_row_if_exists($__form__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "form" => $__form__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), [], "array", true, true, false, 12)) {
                // line 13
                yield "    <div class=\"col-md-6\">
      ";
                // line 14
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 14, $this->source); })()), [], "array", false, false, false, 14), 'row');
                yield "
    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/field.html.twig";
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
        return array (  685 => 14,  682 => 13,  679 => 12,  666 => 11,  658 => 278,  654 => 276,  647 => 272,  643 => 271,  639 => 270,  635 => 269,  631 => 267,  629 => 266,  626 => 265,  618 => 260,  612 => 257,  605 => 253,  594 => 245,  590 => 244,  585 => 241,  583 => 240,  578 => 238,  575 => 237,  568 => 233,  564 => 232,  560 => 231,  556 => 230,  552 => 229,  548 => 227,  546 => 226,  543 => 225,  538 => 222,  532 => 221,  529 => 220,  526 => 219,  523 => 218,  519 => 216,  516 => 215,  513 => 214,  511 => 213,  506 => 211,  501 => 210,  498 => 209,  492 => 207,  489 => 206,  486 => 205,  481 => 204,  479 => 203,  476 => 202,  469 => 198,  465 => 196,  462 => 195,  455 => 191,  451 => 189,  448 => 188,  441 => 184,  437 => 182,  435 => 181,  431 => 180,  428 => 179,  426 => 178,  423 => 177,  418 => 174,  412 => 173,  409 => 172,  403 => 169,  398 => 168,  395 => 167,  392 => 166,  389 => 165,  386 => 164,  380 => 162,  377 => 161,  374 => 160,  370 => 159,  366 => 157,  360 => 156,  354 => 155,  351 => 153,  349 => 152,  346 => 151,  339 => 147,  335 => 146,  331 => 144,  329 => 143,  322 => 139,  318 => 138,  314 => 137,  310 => 136,  306 => 135,  302 => 134,  294 => 128,  287 => 124,  283 => 122,  281 => 121,  278 => 120,  271 => 116,  267 => 114,  265 => 113,  262 => 112,  257 => 109,  253 => 107,  251 => 106,  247 => 105,  241 => 104,  238 => 103,  236 => 102,  233 => 101,  226 => 97,  222 => 95,  220 => 94,  217 => 93,  210 => 89,  206 => 87,  204 => 86,  201 => 85,  196 => 82,  192 => 80,  190 => 79,  186 => 78,  180 => 77,  177 => 76,  175 => 75,  170 => 72,  166 => 70,  164 => 69,  160 => 68,  154 => 67,  146 => 62,  140 => 59,  134 => 55,  132 => 54,  130 => 53,  128 => 52,  125 => 50,  118 => 48,  115 => 47,  112 => 46,  109 => 45,  104 => 44,  102 => 43,  100 => 42,  98 => 41,  95 => 40,  91 => 38,  88 => 37,  85 => 36,  83 => 35,  81 => 34,  78 => 33,  74 => 31,  71 => 30,  68 => 29,  66 => 28,  64 => 27,  61 => 26,  59 => 25,  57 => 24,  55 => 23,  52 => 22,  50 => 21,  48 => 20,  46 => 19,  43 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Builder/field.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/field.html.twig");
    }
}
