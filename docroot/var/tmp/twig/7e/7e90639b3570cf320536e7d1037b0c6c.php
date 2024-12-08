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

/* @MauticSocial/Integration/login.html.twig */
class __TwigTemplate_75ebce96423578dfb5cfd95359a8ec8d extends Template
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
        // line 13
        $context["defaultInputClass"] = "button";
        // line 14
        $context["containerType"] = "div-wrapper";
        // line 15
        yield "
";
        // line 17
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 17, $this->source); })()), "")) : (""));
        // line 18
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 18, $this->source); })()), "label")) : ("label"));
        // line 19
        $context["formName"] = ((array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 19, $this->source); })()), "")) : (""));
        // line 20
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 20, $this->source); })()));
        // line 21
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 21, $this->source); })()));
        // line 22
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 22, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 22, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 22, $this->source); })())));
        // line 23
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 23), 0)) : (0));
        // line 24
        $context["validationMessage"] = "";
        // line 25
        yield "
";
        // line 26
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 26), "")) : ("")));
        // line 27
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 27), "")) : ("")));
        // line 28
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 28), "")) : ("")));
        // line 29
        yield "
";
        // line 30
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 30, $this->source); })()))))) {
            // line 31
            yield "  ";
            $context["inputName"] = (("mauticform[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 31, $this->source); })()), "alias", [], "any", false, false, false, 31)) . "]");
            // line 32
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 32), "multiple", [], "any", true, true, false, 32)) {
                // line 33
                yield "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 33, $this->source); })()) . "[]");
                // line 34
                yield "  ";
            }
            // line 35
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 35, $this->source); })()), ["name" =>             // line 36
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 36, $this->source); })())]);
        }
        // line 39
        yield "
";
        // line 40
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 41
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 41, $this->source); })()), ["value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 42), "")) : (""))]);
        }
        // line 45
        yield "
";
        // line 46
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 46, $this->source); })()))))) {
            // line 47
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 47, $this->source); })()), ["id" => ((("mauticform_input" .             // line 48
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 48, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 48, $this->source); })()), "alias", [], "any", false, false, false, 48))]);
            // line 50
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 50, $this->source); })()), ["id" => ((("mauticform_label" .             // line 51
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 51, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "alias", [], "any", false, false, false, 51)), "for" => ((("mauticform_input" .             // line 52
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 52, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 52, $this->source); })()), "alias", [], "any", false, false, false, 52))]);
        }
        // line 55
        yield "
";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 56), "placeholder", [], "any", true, true, false, 56) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 56, $this->source); })()), "properties", [], "any", false, false, false, 56), "placeholder", [], "any", false, false, false, 56)))) {
            // line 57
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 57, $this->source); })()), ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 58
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 58, $this->source); })()), "properties", [], "any", false, false, false, 58), "placeholder", [], "any", false, false, false, 58)]);
        }
        // line 61
        yield "

";
        // line 64
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 64, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 64, $this->source); })()))))) {
            // line 65
            yield "  ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65), ["button", "pagebreak"])) {
                // line 66
                yield "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 66, $this->source); })()) . " btn btn-ghost");
                // line 67
                yield "  ";
            }
            // line 68
            yield "
  ";
            // line 69
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 69, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 70), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 70, $this->source); })())])]);
            // line 72
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 72, $this->source); })()), ["disabled" => "disabled", "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 74
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 74), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 74, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 74, $this->source); })())])]);
        } else {
            // line 77
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 77, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 78
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 78), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 78, $this->source); })())])]);
            // line 80
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 80, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 81
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 81), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 81, $this->source); })())])]);
        }
        // line 84
        yield "
";
        // line 86
        $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 86, $this->source); })()), ["id" => ((("mauticform" . ((        // line 87
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 87, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 87, $this->source); })())), "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 88
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 88), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 90
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 90, $this->source); })())), ("mauticform-field-" .         // line 91
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 91, $this->source); })()))])]);
        // line 94
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "parent", [], "any", false, false, false, 94) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "parent", [], "any", false, false, false, 94), [], "array", true, true, false, 94))) {
            // line 95
            yield "  ";
            $context["values"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 95, $this->source); })()), "conditions", [], "any", false, false, false, 95), "values", [], "any", false, false, false, 95), "|");
            // line 96
            yield "
  ";
            // line 97
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "conditions", [], "any", false, false, false, 97), "any", [], "any", false, false, false, 97)) && ("notIn" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "conditions", [], "any", false, false, false, 97), "expr", [], "any", false, false, false, 97)))) {
                // line 98
                yield "    ";
                $context["values"] = "*";
                // line 99
                yield "  ";
            }
            // line 100
            yield "
  ";
            // line 101
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 101, $this->source); })()), ["data-mautic-form-show-on" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 102
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 102, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "parent", [], "any", false, false, false, 102), [], "array", false, false, false, 102), "alias", [], "any", false, false, false, 102) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 102, $this->source); })())), "data-mautic-form-expr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 103
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "conditions", [], "any", false, false, false, 103), "expr", [], "any", false, false, false, 103), "class" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 104
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 104, $this->source); })()), "class", [], "any", false, false, false, 104), ["mauticform-field-hidden"])]);
        }
        // line 109
        yield "

";
        // line 112
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 112) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })()), "isRequired", [], "any", false, false, false, 112))) {
            // line 113
            yield "  ";
            $context["required"] = true;
            // line 114
            yield "  ";
            $context["validationMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })()), "validationMessage", [], "any", false, false, false, 114);
            // line 115
            yield "  ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 115, $this->source); })()))) {
                // line 116
                yield "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators");
                // line 117
                yield "  ";
            }
            // line 118
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 118, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 119
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 119), [])) : ([])), ["mauticform-required"]), "data-validate" => CoreExtension::getAttribute($this->env, $this->source,             // line 122
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 122, $this->source); })()), "alias", [], "any", false, false, false, 122), "data-validation-type" => CoreExtension::getAttribute($this->env, $this->source,             // line 123
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 123, $this->source); })()), "type", [], "any", false, false, false, 123)]);
            // line 125
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 125), "multiple", [], "any", true, true, false, 125) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "properties", [], "any", false, false, false, 125), "multiple", [], "any", false, false, false, 125)))) {
                // line 126
                yield "    ";
                $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 126, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 129
                yield "  ";
            }
        } elseif ((        // line 130
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 130, $this->source); })())))) {
            // line 131
            yield "  ";
            // line 132
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 132, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 133
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 133)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 133), [])) : ([])), ["mauticform-required"])]);
        }
        // line 139
        yield "
";
        // line 140
        $context["action"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "get", ["objectAction"], "method", false, false, false, 140);
        // line 141
        $context["settings"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "properties", [], "any", false, false, false, 141);
        // line 142
        yield "
";
        // line 143
        $context["integrations"] = [];
        // line 144
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "integrations", [], "any", true, true, false, 144) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 144, $this->source); })()), "integrations", [], "any", false, false, false, 144)))) {
            // line 145
            yield "  ";
            $context["integrations"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 145, $this->source); })()), "integrations", [], "any", false, false, false, 145), 0,  -1), ",");
        }
        // line 147
        yield "
";
        // line 148
        $context["formName"] = Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::replace((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 148, $this->source); })()), ["_" => ""]), "mauticform");
        // line 149
        yield "
<script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_social_js_generate", ["formName" => (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 150, $this->source); })())]), "html", null, true);
        yield "\" type=\"text/javascript\" charset=\"utf-8\" async=\"async\"></script>
<div ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
            yield "=\"";
            if (is_iterable($context["attrValue"])) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
            }
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
  ";
        // line 152
        if ((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 152, $this->source); })())) {
            // line 153
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Builder/_actions.html.twig", ["deleted" => false, "id" =>             // line 155
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 155, $this->source); })()), "formId" =>             // line 156
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 156, $this->source); })()), "formName" =>             // line 157
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 157, $this->source); })()), "disallowDelete" => false], false);
            // line 159
            yield "
  ";
        }
        // line 161
        yield "
  ";
        // line 162
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "showLabel", [], "any", false, false, false, 162)) {
            yield "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["attrName"] => $context["attrValue"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrName"], "html", null, true);
                yield "=\"";
                if (is_iterable($context["attrValue"])) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join($context["attrValue"], " "), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrValue"], "html", null, true);
                }
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrName'], $context['attrValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 162, $this->source); })()), "label", [], "any", false, false, false, 162), "html", null, true);
            yield "</label>";
        }
        // line 163
        yield "
  ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["integration"]) {
            // line 165
            yield "      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "buttonImageUrl", [], "any", true, true, false, 165) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 165, $this->source); })()), "buttonImageUrl", [], "any", false, false, false, 165))) &&  !Twig\Extension\CoreExtension::testEmpty($context["integration"]))) {
                // line 166
                yield "          <a href=\"#\" onclick=\"openOAuthWindow('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 166, $this->source); })()), (("authUrl_" . $context["integration"]) . ""), [], "array", false, false, false, 166), "html", null, true);
                yield "')\"><img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 166, $this->source); })()), "buttonImageUrl", [], "array", false, false, false, 166), "html", null, true);
                yield "btn_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integration"], "html", null, true);
                yield ".png\"></a>
      ";
            }
            // line 168
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['integration'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticSocial/Integration/login.html.twig";
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
        return array (  356 => 169,  350 => 168,  340 => 166,  337 => 165,  333 => 164,  330 => 163,  308 => 162,  305 => 161,  301 => 159,  299 => 157,  298 => 156,  297 => 155,  295 => 153,  293 => 152,  275 => 151,  271 => 150,  268 => 149,  266 => 148,  263 => 147,  259 => 145,  257 => 144,  255 => 143,  252 => 142,  250 => 141,  248 => 140,  245 => 139,  242 => 133,  240 => 132,  238 => 131,  236 => 130,  233 => 129,  230 => 126,  227 => 125,  225 => 123,  224 => 122,  223 => 119,  221 => 118,  218 => 117,  215 => 116,  212 => 115,  209 => 114,  206 => 113,  204 => 112,  200 => 109,  197 => 104,  196 => 103,  195 => 102,  194 => 101,  191 => 100,  188 => 99,  185 => 98,  183 => 97,  180 => 96,  177 => 95,  175 => 94,  173 => 91,  172 => 90,  171 => 88,  170 => 87,  169 => 86,  166 => 84,  163 => 81,  161 => 80,  159 => 78,  157 => 77,  154 => 74,  152 => 72,  150 => 70,  149 => 69,  146 => 68,  143 => 67,  140 => 66,  137 => 65,  135 => 64,  131 => 61,  128 => 58,  126 => 57,  124 => 56,  121 => 55,  118 => 52,  117 => 51,  115 => 50,  113 => 48,  111 => 47,  109 => 46,  106 => 45,  103 => 42,  101 => 41,  99 => 40,  96 => 39,  93 => 36,  91 => 35,  88 => 34,  85 => 33,  82 => 32,  79 => 31,  77 => 30,  74 => 29,  72 => 28,  70 => 27,  68 => 26,  65 => 25,  63 => 24,  61 => 23,  59 => 22,  57 => 21,  55 => 20,  53 => 19,  51 => 18,  49 => 17,  46 => 15,  44 => 14,  42 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Integration/login.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Integration/login.html.twig");
    }
}
