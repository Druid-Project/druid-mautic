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

/* @MauticForm/Field/freehtml.html.twig */
class __TwigTemplate_5cebb2ff3417250073e4a3d13d16cc65 extends Template
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
        $context["defaultInputClass"] = "freehtml";
        // line 2
        $context["containerType"] = (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 2, $this->source); })());
        // line 3
        yield "
";
        // line 5
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 5, $this->source); })()), "")) : (""));
        // line 6
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 6, $this->source); })()), "label")) : ("label"));
        // line 7
        $context["formName"] = ((array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 7, $this->source); })()), "")) : (""));
        // line 8
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 8, $this->source); })()));
        // line 9
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 9, $this->source); })()));
        // line 10
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 10, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 10, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 10, $this->source); })())));
        // line 11
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 11), 0)) : (0));
        // line 12
        $context["validationMessage"] = "";
        // line 13
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 13), "")) : ("")));
        // line 14
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 14), "")) : ("")));
        // line 15
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray($this->extensions['Mautic\FormBundle\Twig\Extension\FormFieldExtension']->cleanInputAttributes(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 15), "")) : (""))));
        // line 16
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 16, $this->source); })()))))) {
            // line 17
            yield "  ";
            $context["inputName"] = (("mauticform[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 17, $this->source); })()), "alias", [], "any", false, false, false, 17)) . "]");
            // line 18
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 18), "multiple", [], "any", true, true, false, 18)) {
                // line 19
                yield "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 19, $this->source); })()) . "[]");
                // line 20
                yield "  ";
            }
            // line 21
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 21, $this->source); })()), ["name" =>             // line 22
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 22, $this->source); })())]);
        }
        // line 25
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 26
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 26, $this->source); })()), ["value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 27
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 27), "")) : (""))]);
        }
        // line 30
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 30, $this->source); })()))))) {
            // line 31
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 31, $this->source); })()), ["id" => ((("mauticform_input" .             // line 32
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 32, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 32, $this->source); })()), "alias", [], "any", false, false, false, 32))]);
            // line 34
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 34, $this->source); })()), ["id" => ((("mauticform_label" .             // line 35
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 35, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 35, $this->source); })()), "alias", [], "any", false, false, false, 35)), "for" => ((("mauticform_input" .             // line 36
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 36, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 36, $this->source); })()), "alias", [], "any", false, false, false, 36))]);
        }
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 39), "placeholder", [], "any", true, true, false, 39) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "properties", [], "any", false, false, false, 39), "placeholder", [], "any", false, false, false, 39)))) {
            // line 40
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 41
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 41, $this->source); })()), "properties", [], "any", false, false, false, 41), "placeholder", [], "any", false, false, false, 41)]);
        }
        // line 44
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 44, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 44, $this->source); })()))))) {
            // line 45
            yield "  ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), ["button", "pagebreak"])) {
                // line 46
                yield "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 46, $this->source); })()) . " btn btn-ghost");
                // line 47
                yield "  ";
            }
            // line 48
            yield "
  ";
            // line 49
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 49, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 50
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 50), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 50, $this->source); })())])]);
            // line 52
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 52, $this->source); })()), ["disabled" => "disabled", "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 54
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 54), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 54, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 54, $this->source); })())])]);
        } else {
            // line 57
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 57, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 58), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 58, $this->source); })())])]);
            // line 60
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 60, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 61
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 61), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 61, $this->source); })())])]);
        }
        // line 64
        $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 64, $this->source); })()), ["id" => ((("mauticform" . ((        // line 65
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 65, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 65, $this->source); })())), "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 66
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 66), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 68
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 68, $this->source); })())), ("mauticform-field-" .         // line 69
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()))])]);
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 72, $this->source); })()), "parent", [], "any", false, false, false, 72) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 72, $this->source); })()), "parent", [], "any", false, false, false, 72), [], "array", true, true, false, 72))) {
            // line 73
            yield "  ";
            $context["values"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 73, $this->source); })()), "conditions", [], "any", false, false, false, 73), "values", [], "any", false, false, false, 73), "|");
            // line 75
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "conditions", [], "any", false, false, false, 75), "any", [], "any", false, false, false, 75) != false) && ("notIn" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "conditions", [], "any", false, false, false, 75), "expr", [], "any", false, false, false, 75)))) {
                // line 76
                $context["values"] = "*";
                // line 77
                yield "  ";
            }
            // line 78
            yield "
  ";
            // line 79
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 79, $this->source); })()), ["data-mautic-form-show-on" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 80
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 80, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 80, $this->source); })()), "parent", [], "any", false, false, false, 80), [], "array", false, false, false, 80), "alias", [], "any", false, false, false, 80) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 80, $this->source); })())), "data-mautic-form-expr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 81
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 81, $this->source); })()), "conditions", [], "any", false, false, false, 81), "expr", [], "any", false, false, false, 81), "class" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 82
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 82, $this->source); })()), "class", [], "any", false, false, false, 82), ["mauticform-field-hidden"])]);
        }
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 87) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "isRequired", [], "any", false, false, false, 87))) {
            // line 88
            yield "  ";
            $context["required"] = true;
            // line 89
            yield "  ";
            $context["validationMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 89, $this->source); })()), "validationMessage", [], "any", false, false, false, 89);
            // line 90
            yield "  ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 90, $this->source); })()))) {
                // line 91
                yield "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 91, $this->source); })()), null)) : (null)));
                // line 92
                yield "  ";
            }
            // line 93
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 93, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 94
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 94)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 94), [])) : ([])), ["mauticform-required"]), "data-validate" => CoreExtension::getAttribute($this->env, $this->source,             // line 97
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 97, $this->source); })()), "alias", [], "any", false, false, false, 97), "data-validation-type" => CoreExtension::getAttribute($this->env, $this->source,             // line 98
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 98, $this->source); })()), "type", [], "any", false, false, false, 98)]);
            // line 100
            yield "  ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "properties", [], "any", false, false, false, 100), "multiple", [], "any", false, false, false, 100))) {
                // line 101
                yield "    ";
                $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 101, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 104
                yield "  ";
            }
        } elseif ((        // line 105
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 105, $this->source); })())))) {
            // line 106
            yield "  ";
            // line 107
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 107, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 108), [])) : ([])), ["mauticform-required"])]);
        }
        // line 113
        if ((((array_key_exists("list", $context) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "syncList", [], "any", true, true, false, 113)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "list", [], "any", true, true, false, 113)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "optionList", [], "any", true, true, false, 113))) {
            // line 114
            yield "  ";
            $context["parseList"] = [];
            // line 115
            yield "  ";
            $context["isBooleanList"] = false;
            // line 116
            yield "  ";
            $context["contactFields"] = ((array_key_exists("contactFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 116, $this->source); })()), [])) : ([]));
            // line 117
            yield "  ";
            $context["companyFields"] = ((array_key_exists("companyFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 117, $this->source); })()), [])) : ([]));
            // line 118
            yield "  ";
            $context["formFields"] = Twig\Extension\CoreExtension::merge((isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 118, $this->source); })()), (isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 118, $this->source); })()));
            // line 119
            yield "
  ";
            // line 120
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 121
($context["field"] ?? null), "properties", [], "any", false, true, false, 121), "syncList", [], "any", true, true, false, 121) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 121, $this->source); })()), "properties", [], "any", false, false, false, 121), "syncList", [], "any", false, false, false, 121))) && CoreExtension::getAttribute($this->env, $this->source,             // line 122
($context["field"] ?? null), "leadField", [], "any", true, true, false, 122)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 122, $this->source); })()), "leadField", [], "any", false, false, false, 122))) && CoreExtension::getAttribute($this->env, $this->source,             // line 123
($context["formFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 123, $this->source); })()), "leadField", [], "any", false, false, false, 123), [], "array", true, true, false, 123))) {
                // line 125
                yield "    ";
                $context["leadFieldType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 125, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 125, $this->source); })()), "leadField", [], "any", false, false, false, 125), [], "array", false, false, false, 125), "type", [], "any", false, false, false, 125);
                // line 126
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 126, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 126, $this->source); })()), "leadField", [], "any", false, false, false, 126), [], "array", false, false, false, 126), "properties", [], "any", false, false, false, 126), "list", [], "any", false, false, false, 126))) {
                    // line 127
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 127, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 127, $this->source); })()), "leadField", [], "any", false, false, false, 127), [], "array", false, false, false, 127), "properties", [], "any", false, false, false, 127), "list", [], "any", false, false, false, 127);
                    // line 128
                    yield "    ";
                } elseif (("boolean" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 128, $this->source); })()))) {
                    // line 129
                    yield "      ";
                    $context["parseList"] = ["0" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 130
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 130, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 130, $this->source); })()), "leadField", [], "any", false, false, false, 130), [], "array", false, false, false, 130), "properties", [], "any", false, false, false, 130), "no", [], "any", false, false, false, 130), "1" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 131
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 131, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 131, $this->source); })()), "leadField", [], "any", false, false, false, 131), [], "array", false, false, false, 131), "properties", [], "any", false, false, false, 131), "yes", [], "any", false, false, false, 131)];
                    // line 133
                    yield "    ";
                } elseif (("country" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 133, $this->source); })()))) {
                    // line 134
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    // line 135
                    yield "    ";
                } elseif (("region" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 135, $this->source); })()))) {
                    // line 136
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    // line 137
                    yield "    ";
                } elseif (("timezone" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 137, $this->source); })()))) {
                    // line 138
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    // line 139
                    yield "    ";
                } elseif (("locale" == (isset($context["leadFieldType"]) || array_key_exists("leadFieldType", $context) ? $context["leadFieldType"] : (function () { throw new RuntimeError('Variable "leadFieldType" does not exist.', 139, $this->source); })()))) {
                    // line 140
                    yield "      ";
                    $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    // line 141
                    yield "    ";
                }
                // line 142
                yield "  ";
            }
            // line 143
            yield "
  ";
            // line 144
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 144, $this->source); })()))) {
                // line 145
                yield "    ";
                if (array_key_exists("list", $context)) {
                    // line 146
                    yield "      ";
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 146, $this->source); })());
                    // line 147
                    yield "    ";
                } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 147, $this->source); })()), "properties", [], "any", false, false, false, 147), "optionlist", [], "any", false, false, false, 147))) {
                    // line 148
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 148, $this->source); })()), "properties", [], "any", false, false, false, 148), "optionlist", [], "any", false, false, false, 148);
                    // line 149
                    yield "    ";
                } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 149, $this->source); })()), "properties", [], "any", false, false, false, 149), "list", [], "any", false, false, false, 149))) {
                    // line 150
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 150, $this->source); })()), "properties", [], "any", false, false, false, 150), "list", [], "any", false, false, false, 150);
                    // line 151
                    yield "    ";
                }
                // line 152
                yield "
    ";
                // line 153
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 153)) {
                    // line 154
                    yield "      ";
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 154, $this->source); })()), "list", [], "any", false, false, false, 154);
                    // line 155
                    yield "    ";
                }
                // line 156
                yield "  ";
            }
            // line 157
            yield "
  ";
            // line 158
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 158, $this->source); })()), "leadField", [], "any", false, false, false, 158) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 158, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 158, $this->source); })()), "leadField", [], "any", false, false, false, 158), [], "array", false, false, false, 158), "type", [], "any", false, false, false, 158))) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 158, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 158, $this->source); })()), "leadField", [], "any", false, false, false, 158), [], "array", false, false, false, 158), "type", [], "any", false, false, false, 158), ["datetime", "date"]))) {
                // line 159
                yield "    ";
                $context["tempLeadFieldType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 159, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 159, $this->source); })()), "leadField", [], "any", false, false, false, 159), [], "array", false, false, false, 159), "type", [], "any", false, false, false, 159);
                // line 160
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 160, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                    // line 161
                    yield "      ";
                    $context["date"] = ((("datetime" == (isset($context["tempLeadFieldType"]) || array_key_exists("tempLeadFieldType", $context) ? $context["tempLeadFieldType"] : (function () { throw new RuntimeError('Variable "tempLeadFieldType" does not exist.', 161, $this->source); })()))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 161))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 161))));
                    // line 162
                    yield "      ";
                    if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 162, $this->source); })())) {
                        // line 163
                        yield "          ";
                        $context["parseList"] = Twig\Extension\CoreExtension::merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 163, $this->source); })()), [                        // line 164
$context["key"] => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 164, $this->source); })()), $context["key"], [], "array", false, false, false, 164), ["label" =>                         // line 165
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 165, $this->source); })())])]);
                        // line 168
                        yield "      ";
                    }
                    // line 169
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['aTemp'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                yield "  ";
            }
            // line 171
            yield "
  ";
            // line 172
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 172, $this->source); })())) {
                // line 173
                yield "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 173, $this->source); })()));
                // line 174
                yield "  ";
            } else {
                // line 175
                yield "    ";
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 175, $this->source); })()));
                // line 176
                yield "  ";
            }
            // line 177
            yield "
  ";
            // line 178
            $context["firstListValue"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 178, $this->source); })()));
        }
        // line 181
        yield "
<div ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 182, $this->source); })()));
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
        // line 183
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 183, $this->source); })()), "showLabel", [], "any", false, false, false, 183)) {
            yield "<h3 ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 183, $this->source); })()));
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
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 183, $this->source); })()), "label", [], "any", false, false, false, 183));
            yield "</h3>";
        }
        // line 184
        yield "  <div ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 184, $this->source); })()));
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
        // line 185
        if ((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 185, $this->source); })())) {
            // line 186
            yield "      ";
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->showScriptTags(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 186), "text", [], "any", true, true, false, 186)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 186), "text", [], "any", false, false, false, 186), "")) : ("")));
            yield "
    ";
        } else {
            // line 188
            yield "      ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 188, $this->source); })()), "properties", [], "any", false, false, false, 188), "text", [], "any", false, false, false, 188);
            yield "
    ";
        }
        // line 190
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/freehtml.html.twig";
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
        return array (  462 => 190,  456 => 188,  450 => 186,  448 => 185,  429 => 184,  407 => 183,  389 => 182,  386 => 181,  383 => 178,  380 => 177,  377 => 176,  374 => 175,  371 => 174,  368 => 173,  366 => 172,  363 => 171,  360 => 170,  354 => 169,  351 => 168,  349 => 165,  348 => 164,  346 => 163,  343 => 162,  340 => 161,  335 => 160,  332 => 159,  330 => 158,  327 => 157,  324 => 156,  321 => 155,  318 => 154,  316 => 153,  313 => 152,  310 => 151,  307 => 150,  304 => 149,  301 => 148,  298 => 147,  295 => 146,  292 => 145,  290 => 144,  287 => 143,  284 => 142,  281 => 141,  278 => 140,  275 => 139,  272 => 138,  269 => 137,  266 => 136,  263 => 135,  260 => 134,  257 => 133,  255 => 131,  254 => 130,  252 => 129,  249 => 128,  246 => 127,  243 => 126,  240 => 125,  238 => 123,  237 => 122,  236 => 121,  235 => 120,  232 => 119,  229 => 118,  226 => 117,  223 => 116,  220 => 115,  217 => 114,  215 => 113,  212 => 108,  210 => 107,  208 => 106,  206 => 105,  203 => 104,  200 => 101,  197 => 100,  195 => 98,  194 => 97,  193 => 94,  191 => 93,  188 => 92,  185 => 91,  182 => 90,  179 => 89,  176 => 88,  174 => 87,  171 => 82,  170 => 81,  169 => 80,  168 => 79,  165 => 78,  162 => 77,  160 => 76,  158 => 75,  155 => 73,  153 => 72,  151 => 69,  150 => 68,  149 => 66,  148 => 65,  147 => 64,  144 => 61,  142 => 60,  140 => 58,  138 => 57,  135 => 54,  133 => 52,  131 => 50,  130 => 49,  127 => 48,  124 => 47,  121 => 46,  118 => 45,  116 => 44,  113 => 41,  111 => 40,  109 => 39,  106 => 36,  105 => 35,  103 => 34,  101 => 32,  99 => 31,  97 => 30,  94 => 27,  92 => 26,  90 => 25,  87 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/freehtml.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Field/freehtml.html.twig");
    }
}
