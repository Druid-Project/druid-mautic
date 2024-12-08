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

/* @MauticForm/Field/text.html.twig */
class __TwigTemplate_f08f9823c897c6aec736c7f7889e4cab extends Template
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
        // line 12
        $context["containerType"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()), "text")) : ("text"));
        // line 13
        $context["defaultInputClass"] = ((array_key_exists("inputClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inputClass"]) || array_key_exists("inputClass", $context) ? $context["inputClass"] : (function () { throw new RuntimeError('Variable "inputClass" does not exist.', 13, $this->source); })()), "input")) : ("input"));
        // line 14
        yield "
";
        // line 16
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 16, $this->source); })()), "")) : (""));
        // line 17
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 17, $this->source); })()), "label")) : ("label"));
        // line 18
        $context["formName"] = ((array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 18, $this->source); })()), "")) : (""));
        // line 19
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 19, $this->source); })()));
        // line 20
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 20, $this->source); })()));
        // line 21
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 21, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 21, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 21, $this->source); })())));
        // line 22
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 22), 0)) : (0));
        // line 23
        $context["validationMessage"] = "";
        // line 24
        yield "
";
        // line 25
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 25)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 25), "")) : ("")));
        // line 26
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 26), "")) : ("")));
        // line 27
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 27), "")) : ("")));
        // line 28
        yield "
";
        // line 29
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 29, $this->source); })()))))) {
            // line 30
            yield "  ";
            $context["inputName"] = (("mauticform[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 30, $this->source); })()), "alias", [], "any", false, false, false, 30)) . "]");
            // line 31
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 31), "multiple", [], "any", true, true, false, 31)) {
                // line 32
                yield "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 32, $this->source); })()) . "[]");
                // line 33
                yield "  ";
            }
            // line 34
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 34, $this->source); })()), ["name" =>             // line 35
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 35, $this->source); })())]);
        }
        // line 38
        yield "
";
        // line 39
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 40
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), ["value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 41
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 41), "")) : (""))]);
        }
        // line 44
        yield "
";
        // line 45
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 45, $this->source); })()))))) {
            // line 46
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 46, $this->source); })()), ["id" => ((("mauticform_input" .             // line 47
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 47, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 47, $this->source); })()), "alias", [], "any", false, false, false, 47))]);
            // line 49
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 49, $this->source); })()), ["id" => ((("mauticform_label" .             // line 50
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 50, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 50, $this->source); })()), "alias", [], "any", false, false, false, 50)), "for" => ((("mauticform_input" .             // line 51
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 51, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "alias", [], "any", false, false, false, 51))]);
        }
        // line 54
        yield "
";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 55), "placeholder", [], "any", true, true, false, 55) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 55, $this->source); })()), "properties", [], "any", false, false, false, 55), "placeholder", [], "any", false, false, false, 55)))) {
            // line 56
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 56, $this->source); })()), ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 57
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 57, $this->source); })()), "properties", [], "any", false, false, false, 57), "placeholder", [], "any", false, false, false, 57)]);
        }
        // line 60
        yield "

";
        // line 63
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 63, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 63, $this->source); })()))))) {
            // line 64
            yield "  ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64), ["button", "pagebreak"])) {
                // line 65
                yield "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 65, $this->source); })()) . " btn btn-ghost");
                // line 66
                yield "  ";
            }
            // line 67
            yield "
  ";
            // line 68
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 68, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 69), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 69, $this->source); })())])]);
            // line 71
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 71, $this->source); })()), ["disabled" => "disabled", "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 73), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 73, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 73, $this->source); })())])]);
        } else {
            // line 76
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 76, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 77
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 77), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 77, $this->source); })())])]);
            // line 79
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 79, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 80
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 80)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 80), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 80, $this->source); })())])]);
        }
        // line 83
        yield "
";
        // line 85
        $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 85, $this->source); })()), ["id" => ((("mauticform" . ((        // line 86
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 86, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 86, $this->source); })())), "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 87
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 87), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 89
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 89, $this->source); })())), ("mauticform-field-" .         // line 90
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 90, $this->source); })()))])]);
        // line 93
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "parent", [], "any", false, false, false, 93) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "parent", [], "any", false, false, false, 93), [], "array", true, true, false, 93))) {
            // line 94
            yield "  ";
            $context["values"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "conditions", [], "any", false, false, false, 94), "values", [], "any", false, false, false, 94), "|");
            // line 95
            yield "
  ";
            // line 96
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 96, $this->source); })()), "conditions", [], "any", false, false, false, 96), "any", [], "any", false, false, false, 96) != false) && ("notIn" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 96, $this->source); })()), "conditions", [], "any", false, false, false, 96), "expr", [], "any", false, false, false, 96)))) {
                // line 97
                yield "    ";
                $context["values"] = "*";
                // line 98
                yield "  ";
            }
            // line 99
            yield "
  ";
            // line 100
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 100, $this->source); })()), ["data-mautic-form-show-on" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 101
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 101, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "parent", [], "any", false, false, false, 101), [], "array", false, false, false, 101), "alias", [], "any", false, false, false, 101) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 101, $this->source); })())), "data-mautic-form-expr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 102
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "conditions", [], "any", false, false, false, 102), "expr", [], "any", false, false, false, 102), "class" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 103
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 103, $this->source); })()), "class", [], "any", false, false, false, 103), ["mauticform-field-hidden"])]);
        }
        // line 108
        yield "
";
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 110) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })()), "isRequired", [], "any", false, false, false, 110))) {
            // line 111
            yield "  ";
            $context["required"] = true;
            // line 112
            yield "  ";
            $context["validationMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })()), "validationMessage", [], "any", false, false, false, 112);
            // line 113
            yield "  ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 113, $this->source); })()))) {
                // line 114
                yield "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 114, $this->source); })()), null)) : (null)));
                // line 115
                yield "  ";
            }
            // line 116
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 116, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 117
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 117), [])) : ([])), ["mauticform-required"]), "data-validate" => CoreExtension::getAttribute($this->env, $this->source,             // line 120
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 120, $this->source); })()), "alias", [], "any", false, false, false, 120), "data-validation-type" => CoreExtension::getAttribute($this->env, $this->source,             // line 121
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 121, $this->source); })()), "type", [], "any", false, false, false, 121)]);
            // line 123
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 123), "multiple", [], "any", true, true, false, 123) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 123, $this->source); })()), "properties", [], "any", false, false, false, 123), "multiple", [], "any", false, false, false, 123)))) {
                // line 124
                yield "    ";
                $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 124, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 127
                yield "  ";
            }
        } elseif ((        // line 128
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 128, $this->source); })())))) {
            // line 129
            yield "  ";
            // line 130
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 130, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 131
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 131)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 131), [])) : ([])), ["mauticform-required"])]);
        }
        // line 137
        yield "
<div ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 138, $this->source); })()));
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
        // line 139
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "showLabel", [], "any", false, false, false, 139)) {
            yield "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 139, $this->source); })()));
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
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "label", [], "any", false, false, false, 139));
            yield "</label>";
        }
        // line 140
        yield "
  ";
        // line 141
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "helpMessage", [], "any", false, false, false, 141))) {
            yield "<span class=\"mauticform-helpmessage\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "helpMessage", [], "any", false, false, false, 141));
            yield "</span>";
        }
        // line 142
        yield "
  ";
        // line 143
        if (("textarea" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 143, $this->source); })()), "type", [], "any", false, false, false, 143))) {
            // line 144
            yield "    <textarea ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 144, $this->source); })()));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 144, $this->source); })()), "defaultValue", [], "any", false, false, false, 144), "html", null, true);
            yield "</textarea>
  ";
        } elseif (("number" == CoreExtension::getAttribute($this->env, $this->source,         // line 145
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 145, $this->source); })()), "type", [], "any", false, false, false, 145))) {
            // line 146
            yield "      <input type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 146, $this->source); })()), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 146, $this->source); })()));
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
            yield " step=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 146, $this->source); })()), "html", null, true);
            yield "\"/>
  ";
        } elseif (("companyLookup" == CoreExtension::getAttribute($this->env, $this->source,         // line 147
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 147, $this->source); })()), "type", [], "any", false, false, false, 147))) {
            // line 148
            yield "      <input class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "\" placeholder=\"start typing\" data-toggle=\"field-company-lookup\" data-set-id=\"mauticform_input";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 148, $this->source); })()), "html", null, true);
            yield "_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "alias", [], "any", false, false, false, 148), "html", null, true);
            yield "\" type=\"search\"  dir=\"ltr\" spellcheck=false autocorrect=\"off\" autocomplete=\"off\" autocapitalize=\"off\" maxlength=\"191\"/>
      <input type=\"number\" ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 149, $this->source); })()));
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
            yield " style=\"display: none;\">
  ";
        } else {
            // line 151
            yield "    <input type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 151, $this->source); })()), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 151, $this->source); })()));
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
            yield " />
  ";
        }
        // line 153
        yield "
  <span class=\"mauticform-errormsg\" style=\"display:none;\">";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 154, $this->source); })()), "html", null, true);
        yield "</span>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/text.html.twig";
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
        return array (  402 => 154,  399 => 153,  377 => 151,  358 => 149,  349 => 148,  347 => 147,  324 => 146,  322 => 145,  301 => 144,  299 => 143,  296 => 142,  290 => 141,  287 => 140,  265 => 139,  247 => 138,  244 => 137,  241 => 131,  239 => 130,  237 => 129,  235 => 128,  232 => 127,  229 => 124,  226 => 123,  224 => 121,  223 => 120,  222 => 117,  220 => 116,  217 => 115,  214 => 114,  211 => 113,  208 => 112,  205 => 111,  203 => 110,  200 => 108,  197 => 103,  196 => 102,  195 => 101,  194 => 100,  191 => 99,  188 => 98,  185 => 97,  183 => 96,  180 => 95,  177 => 94,  175 => 93,  173 => 90,  172 => 89,  171 => 87,  170 => 86,  169 => 85,  166 => 83,  163 => 80,  161 => 79,  159 => 77,  157 => 76,  154 => 73,  152 => 71,  150 => 69,  149 => 68,  146 => 67,  143 => 66,  140 => 65,  137 => 64,  135 => 63,  131 => 60,  128 => 57,  126 => 56,  124 => 55,  121 => 54,  118 => 51,  117 => 50,  115 => 49,  113 => 47,  111 => 46,  109 => 45,  106 => 44,  103 => 41,  101 => 40,  99 => 39,  96 => 38,  93 => 35,  91 => 34,  88 => 33,  85 => 32,  82 => 31,  79 => 30,  77 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 25,  65 => 24,  63 => 23,  61 => 22,  59 => 21,  57 => 20,  55 => 19,  53 => 18,  51 => 17,  49 => 16,  46 => 14,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/text.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Field/text.html.twig");
    }
}
