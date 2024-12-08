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

/* @MauticForm/Field/select.html.twig */
class __TwigTemplate_1a39f2c2f3ac198782cb9c8c7d037d95 extends Template
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
        // line 5
        $context["defaultInputFormClass"] = "not-chosen";
        // line 6
        $context["defaultInputClass"] = "selectbox";
        // line 7
        $context["containerType"] = "select";
        // line 10
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 10, $this->source); })()), "")) : (""));
        // line 11
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 11, $this->source); })()), "label")) : ("label"));
        // line 12
        $context["formName"] = ((array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 12, $this->source); })()), "")) : (""));
        // line 13
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 13, $this->source); })()));
        // line 14
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 14, $this->source); })()));
        // line 15
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 15, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 15, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 15, $this->source); })())));
        // line 16
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 16), 0)) : (0));
        // line 17
        $context["validationMessage"] = "";
        // line 19
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 19), "")) : ("")));
        // line 20
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 20), "")) : ("")));
        // line 21
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 21), "")) : ("")));
        // line 23
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 23, $this->source); })()))))) {
            // line 24
            $context["inputName"] = (("mauticform[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 24, $this->source); })()), "alias", [], "any", false, false, false, 24)) . "]");
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 25), "multiple", [], "any", true, true, false, 25) && (true == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "properties", [], "any", false, false, false, 25), "multiple", [], "any", false, false, false, 25)))) {
                // line 26
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 26, $this->source); })()) . "[]");
            }
            // line 28
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 28, $this->source); })()), ["name" =>             // line 29
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 29, $this->source); })())]);
        }
        // line 33
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 34
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 34, $this->source); })()), ["value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 35
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 35), "")) : (""))]);
        }
        // line 39
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 39, $this->source); })()))))) {
            // line 40
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 40, $this->source); })()), ["id" => ((("mauticform_input" .             // line 41
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 41, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 41, $this->source); })()), "alias", [], "any", false, false, false, 41))]);
            // line 43
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 43, $this->source); })()), ["id" => ((("mauticform_label" .             // line 44
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 44, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 44, $this->source); })()), "alias", [], "any", false, false, false, 44)), "for" => ((("mauticform_input" .             // line 45
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 45, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "alias", [], "any", false, false, false, 45))]);
        }
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 49), "placeholder", [], "any", true, true, false, 49) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 49, $this->source); })()), "properties", [], "any", false, false, false, 49), "placeholder", [], "any", false, false, false, 49)))) {
            // line 50
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 50, $this->source); })()), ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 51
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "placeholder", [], "any", false, false, false, 51)]);
        }
        // line 55
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 55, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 55, $this->source); })()))))) {
            // line 56
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 56, $this->source); })()), "type", [], "any", false, false, false, 56), ["button", "pagebreak"])) {
                // line 57
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 57, $this->source); })()) . " btn btn-ghost");
            }
            // line 60
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 60, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 61
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 61), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 61, $this->source); })())])]);
            // line 63
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 63, $this->source); })()), ["disabled" => "disabled", "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 65
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 65), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 65, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 65, $this->source); })())])]);
        } else {
            // line 68
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 68, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 69
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 69), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 69, $this->source); })())])]);
            // line 71
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 71, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 72), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 72, $this->source); })())])]);
        }
        // line 76
        $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 76, $this->source); })()), ["id" => ((("mauticform" .         // line 77
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 77, $this->source); })())) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 77, $this->source); })())), "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 78), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 80
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 80, $this->source); })())), ("mauticform-field-" .         // line 81
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 81, $this->source); })()))])]);
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "parent", [], "any", false, false, false, 84) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "parent", [], "any", false, false, false, 84), [], "array", true, true, false, 84))) {
            // line 85
            $context["values"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 85, $this->source); })()), "conditions", [], "any", false, false, false, 85), "values", [], "any", false, false, false, 85), "|");
            // line 87
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "conditions", [], "any", false, false, false, 87), "any", [], "any", false, false, false, 87) != false) && ("notIn" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 87, $this->source); })()), "conditions", [], "any", false, false, false, 87), "expr", [], "any", false, false, false, 87)))) {
                // line 88
                $context["values"] = "*";
            }
            // line 91
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 91, $this->source); })()), ["data-mautic-form-show-on" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 92
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 92, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "parent", [], "any", false, false, false, 92), [], "array", false, false, false, 92), "alias", [], "any", false, false, false, 92) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 92, $this->source); })())), "data-mautic-form-expr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 93
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "conditions", [], "any", false, false, false, 93), "expr", [], "any", false, false, false, 93), "class" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 94
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 94, $this->source); })()), "class", [], "any", false, false, false, 94), ["mauticform-field-hidden"])]);
        }
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 100) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 100, $this->source); })()), "isRequired", [], "any", false, false, false, 100))) {
            // line 101
            $context["required"] = true;
            // line 102
            $context["validationMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 102, $this->source); })()), "validationMessage", [], "any", false, false, false, 102);
            // line 103
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 103, $this->source); })()))) {
                // line 104
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 104, $this->source); })()), null)) : (null)));
            }
            // line 106
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 106, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 107
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 107), [])) : ([])), ["mauticform-required"]), "data-validate" => CoreExtension::getAttribute($this->env, $this->source,             // line 110
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 110, $this->source); })()), "alias", [], "any", false, false, false, 110), "data-validation-type" => CoreExtension::getAttribute($this->env, $this->source,             // line 111
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "type", [], "any", false, false, false, 111)]);
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 113), "multiple", [], "any", true, true, false, 113) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 113, $this->source); })()), "properties", [], "any", false, false, false, 113), "multiple", [], "any", false, false, false, 113) != false))) {
                // line 114
                $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 114, $this->source); })()), ["data-validate-multiple" => "true"]);
            }
        } elseif ((        // line 118
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 118, $this->source); })())))) {
            // line 120
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 120, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 121
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 121)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 121), [])) : ([])), ["mauticform-required"])]);
        }
        // line 128
        if ((((array_key_exists("list", $context) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "syncList", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "list", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 128), "optionList", [], "any", true, true, false, 128))) {
            // line 129
            $context["parseList"] = [];
            // line 130
            $context["isBooleanList"] = false;
            // line 132
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 133
($context["field"] ?? null), "properties", [], "any", false, true, false, 133), "syncList", [], "any", true, true, false, 133) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 133, $this->source); })()), "properties", [], "any", false, false, false, 133), "syncList", [], "any", false, false, false, 133))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 134
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 134, $this->source); })()), "mappedField", [], "any", false, false, false, 134))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 135
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 135, $this->source); })()), "mappedObject", [], "any", false, false, false, 135))) && CoreExtension::getAttribute($this->env, $this->source,             // line 136
($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 136, $this->source); })()), "mappedObject", [], "any", false, false, false, 136), [], "array", true, true, false, 136))) {
                // line 139
                yield "    ";
                $context["fieldCollection"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 139, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 139, $this->source); })()), "mappedObject", [], "any", false, false, false, 139), [], "array", false, false, false, 139);
                // line 140
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 140, $this->source); })()), "getFieldByKey", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 140, $this->source); })()), "mappedField", [], "any", false, false, false, 140), false], "method", false, false, false, 140))) {
                    // line 141
                    yield "      ";
                    $context["mappedField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 141, $this->source); })()), "getFieldByKey", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "mappedField", [], "any", false, false, false, 141)], "method", false, false, false, 141);
                    // line 142
                    yield "      ";
                    $context["mappedFieldType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 142, $this->source); })()), "type", [], "any", false, false, false, 142);
                    // line 144
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mappedField"] ?? null), "properties", [], "any", false, true, false, 144), "list", [], "any", true, true, false, 144) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 144, $this->source); })()), "properties", [], "any", false, false, false, 144), "list", [], "any", false, false, false, 144)))) {
                        // line 145
                        $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 145, $this->source); })()), "properties", [], "any", false, false, false, 145), "list", [], "any", false, false, false, 145);
                    } elseif (("boolean" ==                     // line 146
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 146, $this->source); })()))) {
                        // line 147
                        $context["parseList"] = ["0" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 148
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 148, $this->source); })()), "properties", [], "any", false, false, false, 148), "no", [], "any", false, false, false, 148), "1" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 149
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 149, $this->source); })()), "properties", [], "any", false, false, false, 149), "yes", [], "any", false, false, false, 149)];
                    } elseif (("country" ==                     // line 151
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 151, $this->source); })()))) {
                        // line 152
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    } elseif (("region" ==                     // line 153
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 153, $this->source); })()))) {
                        // line 154
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    } elseif (("timezone" ==                     // line 155
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 155, $this->source); })()))) {
                        // line 156
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    } elseif (("locale" ==                     // line 157
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 157, $this->source); })()))) {
                        // line 158
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    }
                }
            }
            // line 163
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 163, $this->source); })()))) {
                // line 164
                if (array_key_exists("list", $context)) {
                    // line 165
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 165, $this->source); })());
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 166
($context["field"] ?? null), "properties", [], "any", false, true, false, 166), "optionList", [], "any", true, true, false, 166) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 166, $this->source); })()), "properties", [], "any", false, false, false, 166), "optionList", [], "any", false, false, false, 166)))) {
                    // line 167
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 167, $this->source); })()), "properties", [], "any", false, false, false, 167), "optionList", [], "any", false, false, false, 167);
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 168
($context["field"] ?? null), "properties", [], "any", false, true, false, 168), "list", [], "any", true, true, false, 168) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 168, $this->source); })()), "properties", [], "any", false, false, false, 168), "list", [], "any", false, false, false, 168)))) {
                    // line 169
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 169, $this->source); })()), "properties", [], "any", false, false, false, 169), "list", [], "any", false, false, false, 169);
                }
                // line 172
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 172)) {
                    // line 173
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 173, $this->source); })()), "list", [], "any", false, false, false, 173);
                }
            }
            // line 177
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 177, $this->source); })()), "mappedField", [], "any", false, false, false, 177) && CoreExtension::getAttribute($this->env, $this->source, ($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 177, $this->source); })()), "mappedObject", [], "any", false, false, false, 177), [], "array", true, true, false, 177))) {
                // line 179
                yield "    ";
                $context["fieldCollection"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 179, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 179, $this->source); })()), "mappedObject", [], "any", false, false, false, 179), [], "array", false, false, false, 179);
                // line 180
                yield "
    ";
                // line 181
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["fieldCollection"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 181, $this->source); })()), "mappedField", [], "any", false, false, false, 181), [], "array", true, true, false, 181)) {
                    // line 182
                    yield "      ";
                    $context["mappedField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 182, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 182, $this->source); })()), "mappedField", [], "any", false, false, false, 182), [], "array", false, false, false, 182);
                    // line 183
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 183, $this->source); })()), "type", [], "any", false, false, false, 183), ["datetime", "date"])) {
                        // line 184
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 184, $this->source); })()));
                        foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                            // line 185
                            $context["date"] = ((("datetime" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 185, $this->source); })()), "type", [], "any", false, false, false, 185))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 185))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 185))));
                            // line 186
                            if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 186, $this->source); })())) {
                                // line 187
                                $context["parseList"] = Twig\Extension\CoreExtension::merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 187, $this->source); })()), [                                // line 188
$context["key"] => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 188, $this->source); })()), $context["key"], [], "array", false, false, false, 188), ["label" =>                                 // line 189
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 189, $this->source); })())])]);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['key'], $context['aTemp'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            // line 198
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 198, $this->source); })())) {
                // line 199
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 199, $this->source); })()));
            } else {
                // line 201
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 201, $this->source); })()));
            }
            // line 204
            $context["firstListValue"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 204, $this->source); })()));
        }
        // line 208
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 208), "multiple", [], "any", true, true, false, 208) && (true == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 208, $this->source); })()), "properties", [], "any", false, false, false, 208), "multiple", [], "any", false, false, false, 208)))) {
            // line 209
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 209, $this->source); })()), ["multiple" => "multiple"]);
        }
        // line 227
        yield "<div ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 227, $this->source); })()));
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
        // line 228
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 228, $this->source); })()), "showLabel", [], "any", false, false, false, 228)) {
            yield "<label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 228, $this->source); })()));
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
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 228, $this->source); })()), "label", [], "any", false, false, false, 228));
            yield "</label>";
        }
        // line 229
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 229, $this->source); })()), "helpMessage", [], "any", false, false, false, 229))) {
            yield "<span class=\"mauticform-helpmessage\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 229, $this->source); })()), "helpMessage", [], "any", false, false, false, 229));
            yield "</span>";
        }
        // line 230
        yield "
  <select ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 231, $this->source); })()));
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
        // line 233
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 235
($context["field"] ?? null), "properties", [], "any", false, true, false, 235), "placeholder", [], "any", true, true, false, 235) || ( !CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 235) || (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 235) && (false == CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 235, $this->source); })()), "defaultValue", [], "any", false, false, false, 235))))) && ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 237
($context["field"] ?? null), "properties", [], "any", false, true, false, 237), "multiple", [], "any", true, true, false, 237) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 237), "multiple", [], "any", true, true, false, 237) && (false == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 237, $this->source); })()), "properties", [], "any", false, false, false, 237), "multiple", [], "any", false, false, false, 237)))))) {
            // line 239
            $context["placeholder"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 239), "placeholder", [], "any", true, true, false, 239)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 239), "placeholder", [], "any", false, false, false, 239), "")) : (""));
            // line 240
            yield "<option value=\"\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 240, $this->source); })()), "html", null, true);
            yield "</option>";
        }
        // line 242
        yield CoreExtension::callMacro($macros["_self"], "macro_print_options", [(isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 242, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 242, $this->source); })())], 242, $context, $this->getSourceContext());
        yield "
  </select>
  <span class=\"mauticform-errormsg\" style=\"display:none;\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 244, $this->source); })()), "html", null, true);
        yield "</span>
</div>";
        yield from [];
    }

    // line 214
    public function macro_print_options($__list__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "list" => $__list__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 215, $this->source); })()));
            foreach ($context['_seq'] as $context["listValue"] => $context["listLabel"]) {
                // line 216
                yield "    ";
                if (is_iterable($context["listLabel"])) {
                    // line 217
                    yield "      ";
                    // line 218
                    yield "      <optgroup label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["listValue"], "html", null, true);
                    yield "\">
        ";
                    // line 219
                    yield CoreExtension::callMacro($macros["_self"], "macro_print_options", [$context["listLabel"], (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 219, $this->source); })())], 219, $context, $this->getSourceContext());
                    yield "
      </optgroup>
    ";
                } else {
                    // line 222
                    yield "<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["listValue"]);
                    yield "\" ";
                    if (($context["listValue"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 222, $this->source); })()), "defaultValue", [], "any", false, false, false, 222))) {
                        yield "selected=\"selected\"";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["listLabel"], "html", null, true);
                    yield "</option>";
                }
                // line 224
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['listValue'], $context['listLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/select.html.twig";
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
        return array (  436 => 224,  425 => 222,  419 => 219,  414 => 218,  412 => 217,  409 => 216,  405 => 215,  392 => 214,  385 => 244,  380 => 242,  375 => 240,  373 => 239,  371 => 237,  370 => 235,  369 => 233,  351 => 231,  348 => 230,  341 => 229,  319 => 228,  300 => 227,  297 => 209,  295 => 208,  292 => 204,  289 => 201,  286 => 199,  284 => 198,  274 => 189,  273 => 188,  272 => 187,  270 => 186,  268 => 185,  264 => 184,  262 => 183,  259 => 182,  257 => 181,  254 => 180,  251 => 179,  249 => 177,  245 => 173,  243 => 172,  240 => 169,  238 => 168,  236 => 167,  234 => 166,  232 => 165,  230 => 164,  228 => 163,  223 => 158,  221 => 157,  219 => 156,  217 => 155,  215 => 154,  213 => 153,  211 => 152,  209 => 151,  207 => 149,  206 => 148,  205 => 147,  203 => 146,  201 => 145,  199 => 144,  196 => 142,  193 => 141,  190 => 140,  187 => 139,  185 => 136,  184 => 135,  183 => 134,  182 => 133,  181 => 132,  179 => 130,  177 => 129,  175 => 128,  172 => 121,  171 => 120,  169 => 118,  166 => 114,  164 => 113,  162 => 111,  161 => 110,  160 => 107,  159 => 106,  156 => 104,  154 => 103,  152 => 102,  150 => 101,  148 => 100,  145 => 94,  144 => 93,  143 => 92,  142 => 91,  139 => 88,  137 => 87,  135 => 85,  133 => 84,  131 => 81,  130 => 80,  129 => 78,  128 => 77,  127 => 76,  124 => 72,  123 => 71,  121 => 69,  120 => 68,  117 => 65,  116 => 63,  114 => 61,  113 => 60,  110 => 57,  108 => 56,  106 => 55,  103 => 51,  102 => 50,  100 => 49,  97 => 45,  96 => 44,  95 => 43,  93 => 41,  92 => 40,  90 => 39,  87 => 35,  86 => 34,  84 => 33,  81 => 29,  80 => 28,  77 => 26,  75 => 25,  73 => 24,  71 => 23,  69 => 21,  67 => 20,  65 => 19,  63 => 17,  61 => 16,  59 => 15,  57 => 14,  55 => 13,  53 => 12,  51 => 11,  49 => 10,  47 => 7,  45 => 6,  43 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/select.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Field/select.html.twig");
    }
}
