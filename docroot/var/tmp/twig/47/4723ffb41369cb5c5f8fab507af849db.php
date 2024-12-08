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

/* @MauticForm/Field/group.html.twig */
class __TwigTemplate_679fa83e04ab2551c5eda1ca196b69ae extends Template
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
        // line 5
        $context["containerType"] = ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })()) . "grp");
        // line 6
        $context["defaultInputClass"] = (((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 6, $this->source); })()) . "-") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })()));
        // line 7
        $context["ignoreId"] = true;
        // line 8
        $context["ignoreName"] = ("checkbox" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()));
        // line 9
        yield "
";
        // line 11
        $context["defaultInputFormClass"] = ((array_key_exists("defaultInputFormClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 11, $this->source); })()), "")) : (""));
        // line 12
        $context["defaultLabelClass"] = ((array_key_exists("defaultLabelClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 12, $this->source); })()), "label")) : ("label"));
        // line 13
        $context["formName"] = ((array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 13, $this->source); })()), "")) : (""));
        // line 14
        $context["defaultInputClass"] = ("mauticform-" . (isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 14, $this->source); })()));
        // line 15
        $context["defaultLabelClass"] = ("mauticform-" . (isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 15, $this->source); })()));
        // line 16
        $context["containerClass"] = ((array_key_exists("containerClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 16, $this->source); })()), (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 16, $this->source); })()))) : ((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 16, $this->source); })())));
        // line 17
        $context["order"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 17), 0)) : (0));
        // line 18
        $context["validationMessage"] = "";
        // line 19
        yield "
";
        // line 20
        $context["inputAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "inputAttributes", [], "any", false, false, false, 20), "")) : ("")));
        // line 21
        $context["labelAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "labelAttributes", [], "any", false, false, false, 21), "")) : ("")));
        // line 22
        $context["containerAttributes"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "containerAttributes", [], "any", false, false, false, 22), "")) : ("")));
        // line 23
        yield "
";
        // line 24
        if (( !array_key_exists("ignoreName", $context) || (array_key_exists("ignoreName", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreName"]) || array_key_exists("ignoreName", $context) ? $context["ignoreName"] : (function () { throw new RuntimeError('Variable "ignoreName" does not exist.', 24, $this->source); })()))))) {
            // line 25
            yield "  ";
            $context["inputName"] = (("mauticform[" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 25, $this->source); })()), "alias", [], "any", false, false, false, 25)) . "]");
            // line 26
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 26), "multiple", [], "any", true, true, false, 26)) {
                // line 27
                yield "    ";
                $context["inputName"] = ((isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 27, $this->source); })()) . "[]");
                // line 28
                yield "  ";
            }
            // line 29
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 29, $this->source); })()), ["name" =>             // line 30
(isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 30, $this->source); })())]);
        }
        // line 33
        yield "
";
        // line 34
        if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34), ["checkboxgrp", "radiogrp", "textarea"])) {
            // line 35
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 35, $this->source); })()), ["value" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 36
($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", false, false, false, 36), "")) : (""))]);
        }
        // line 39
        yield "
";
        // line 40
        if (( !array_key_exists("ignoreId", $context) || (array_key_exists("ignoreId", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["ignoreId"]) || array_key_exists("ignoreId", $context) ? $context["ignoreId"] : (function () { throw new RuntimeError('Variable "ignoreId" does not exist.', 40, $this->source); })()))))) {
            // line 41
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 41, $this->source); })()), ["id" => ((("mauticform_input" .             // line 42
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 42, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 42, $this->source); })()), "alias", [], "any", false, false, false, 42))]);
            // line 44
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 44, $this->source); })()), ["id" => ((("mauticform_label" .             // line 45
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 45, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "alias", [], "any", false, false, false, 45)), "for" => ((("mauticform_input" .             // line 46
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 46, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 46, $this->source); })()), "alias", [], "any", false, false, false, 46))]);
        }
        // line 49
        yield "
";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 50), "placeholder", [], "any", true, true, false, 50) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 50, $this->source); })()), "properties", [], "any", false, false, false, 50), "placeholder", [], "any", false, false, false, 50)))) {
            // line 51
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 51, $this->source); })()), ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 52
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 52, $this->source); })()), "properties", [], "any", false, false, false, 52), "placeholder", [], "any", false, false, false, 52)]);
        }
        // line 55
        yield "
";
        // line 56
        if ((array_key_exists("inForm", $context) && ((true == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 56, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 56, $this->source); })()))))) {
            // line 57
            yield "  ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57), ["button", "pagebreak"])) {
                // line 58
                yield "    ";
                $context["defaultInputFormClass"] = ((isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 58, $this->source); })()) . " btn btn-ghost");
                // line 59
                yield "  ";
            }
            // line 60
            yield "
  ";
            // line 61
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 61, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 62
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 62), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 62, $this->source); })())])]);
            // line 64
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 64, $this->source); })()), ["disabled" => "disabled", "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 66
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 66)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 66), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 66, $this->source); })()), (isset($context["defaultInputFormClass"]) || array_key_exists("defaultInputFormClass", $context) ? $context["defaultInputFormClass"] : (function () { throw new RuntimeError('Variable "defaultInputFormClass" does not exist.', 66, $this->source); })())])]);
        } else {
            // line 69
            yield "  ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 69, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["labelAttributes"] ?? null), "class", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["labelAttributes"] ?? null), "class", [], "any", false, false, false, 70), [])) : ([])), [(isset($context["defaultLabelClass"]) || array_key_exists("defaultLabelClass", $context) ? $context["defaultLabelClass"] : (function () { throw new RuntimeError('Variable "defaultLabelClass" does not exist.', 70, $this->source); })())])]);
            // line 72
            yield "  ";
            $context["inputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 72, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["inputAttributes"] ?? null), "class", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["inputAttributes"] ?? null), "class", [], "any", false, false, false, 73), [])) : ([])), [(isset($context["defaultInputClass"]) || array_key_exists("defaultInputClass", $context) ? $context["defaultInputClass"] : (function () { throw new RuntimeError('Variable "defaultInputClass" does not exist.', 73, $this->source); })())])]);
        }
        // line 76
        yield "
";
        // line 77
        $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 77, $this->source); })()), ["id" => ((("mauticform" . ((        // line 78
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 78, $this->source); })()), "")) : (""))) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 78, $this->source); })())), "class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 79
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 79)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 79), [])) : ([])), ["mauticform-row", ("mauticform-" .         // line 81
(isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 81, $this->source); })())), ("mauticform-field-" .         // line 82
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 82, $this->source); })()))])]);
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 85, $this->source); })()), "parent", [], "any", false, false, false, 85) && CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 85, $this->source); })()), "parent", [], "any", false, false, false, 85), [], "array", true, true, false, 85))) {
            // line 86
            yield "  ";
            $context["values"] = Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 86, $this->source); })()), "conditions", [], "any", false, false, false, 86), "values", [], "any", false, false, false, 86), "|");
            // line 88
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 88, $this->source); })()), "conditions", [], "any", false, false, false, 88), "any", [], "any", false, false, false, 88) != false) && ("notIn" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 88, $this->source); })()), "conditions", [], "any", false, false, false, 88), "expr", [], "any", false, false, false, 88)))) {
                // line 89
                $context["values"] = "*";
                // line 90
                yield "  ";
            }
            // line 91
            yield "
  ";
            // line 92
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 92, $this->source); })()), ["data-mautic-form-show-on" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 93
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 93, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 93, $this->source); })()), "parent", [], "any", false, false, false, 93), [], "array", false, false, false, 93), "alias", [], "any", false, false, false, 93) . ":") . (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 93, $this->source); })())), "data-mautic-form-expr" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 94
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 94, $this->source); })()), "conditions", [], "any", false, false, false, 94), "expr", [], "any", false, false, false, 94), "class" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source,             // line 95
(isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 95, $this->source); })()), "class", [], "any", false, false, false, 95), ["mauticform-field-hidden"])]);
        }
        // line 100
        yield "
";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "isRequired", [], "any", true, true, false, 101) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 101, $this->source); })()), "isRequired", [], "any", false, false, false, 101))) {
            // line 102
            yield "  ";
            $context["required"] = true;
            // line 103
            yield "  ";
            $context["validationMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 103, $this->source); })()), "validationMessage", [], "any", false, false, false, 103);
            // line 104
            yield "  ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 104, $this->source); })()))) {
                // line 105
                yield "        ";
                $context["validationMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.generic.required", [], "validators", ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 105, $this->source); })()), null)) : (null)));
                // line 106
                yield "  ";
            }
            // line 107
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 107, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 108
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 108)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 108), [])) : ([])), ["mauticform-required"]), "data-validate" => CoreExtension::getAttribute($this->env, $this->source,             // line 111
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "alias", [], "any", false, false, false, 111), "data-validation-type" => CoreExtension::getAttribute($this->env, $this->source,             // line 112
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112)]);
            // line 114
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 114), "multiple", [], "any", true, true, false, 114) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 114, $this->source); })()), "properties", [], "any", false, false, false, 114), "multiple", [], "any", false, false, false, 114)))) {
                // line 115
                yield "    ";
                $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 115, $this->source); })()), ["data-validate-multiple" => "true"]);
                // line 118
                yield "  ";
            }
        } elseif ((        // line 119
array_key_exists("required", $context) && (true == (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 119, $this->source); })())))) {
            // line 120
            yield "  ";
            // line 121
            yield "  ";
            $context["containerAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 121, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,             // line 122
($context["containerAttributes"] ?? null), "class", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["containerAttributes"] ?? null), "class", [], "any", false, false, false, 122), [])) : ([])), ["mauticform-required"])]);
        }
        // line 127
        yield "
";
        // line 129
        if ((((array_key_exists("list", $context) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 129), "syncList", [], "any", true, true, false, 129)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 129), "list", [], "any", true, true, false, 129)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 129), "optionList", [], "any", true, true, false, 129))) {
            // line 130
            $context["parseList"] = [];
            // line 131
            $context["isBooleanList"] = false;
            // line 133
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 134
($context["field"] ?? null), "properties", [], "any", false, true, false, 134), "syncList", [], "any", true, true, false, 134) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 134, $this->source); })()), "properties", [], "any", false, false, false, 134), "syncList", [], "any", false, false, false, 134))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 135
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 135, $this->source); })()), "mappedField", [], "any", false, false, false, 135))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,             // line 136
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 136, $this->source); })()), "mappedObject", [], "any", false, false, false, 136))) && CoreExtension::getAttribute($this->env, $this->source,             // line 137
($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 137, $this->source); })()), "mappedObject", [], "any", false, false, false, 137), [], "array", true, true, false, 137))) {
                // line 140
                yield "    ";
                $context["fieldCollection"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 140, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 140, $this->source); })()), "mappedObject", [], "any", false, false, false, 140), [], "array", false, false, false, 140);
                // line 141
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 141, $this->source); })()), "getFieldByKey", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 141, $this->source); })()), "mappedField", [], "any", false, false, false, 141), false], "method", false, false, false, 141))) {
                    // line 142
                    yield "      ";
                    $context["mappedField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 142, $this->source); })()), "getFieldByKey", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 142, $this->source); })()), "mappedField", [], "any", false, false, false, 142)], "method", false, false, false, 142);
                    // line 143
                    yield "      ";
                    $context["mappedFieldType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 143, $this->source); })()), "type", [], "any", false, false, false, 143);
                    // line 145
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mappedField"] ?? null), "properties", [], "any", false, true, false, 145), "list", [], "any", true, true, false, 145) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 145, $this->source); })()), "properties", [], "any", false, false, false, 145), "list", [], "any", false, false, false, 145)))) {
                        // line 146
                        $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 146, $this->source); })()), "properties", [], "any", false, false, false, 146), "list", [], "any", false, false, false, 146);
                    } elseif (("boolean" ==                     // line 147
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 147, $this->source); })()))) {
                        // line 148
                        $context["parseList"] = ["0" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 149
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 149, $this->source); })()), "properties", [], "any", false, false, false, 149), "no", [], "any", false, false, false, 149), "1" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 150
(isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 150, $this->source); })()), "properties", [], "any", false, false, false, 150), "yes", [], "any", false, false, false, 150)];
                    } elseif (("country" ==                     // line 152
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 152, $this->source); })()))) {
                        // line 153
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices();
                    } elseif (("region" ==                     // line 154
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 154, $this->source); })()))) {
                        // line 155
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getRegionChoices();
                    } elseif (("timezone" ==                     // line 156
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 156, $this->source); })()))) {
                        // line 157
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getTimezonesChoices();
                    } elseif (("locale" ==                     // line 158
(isset($context["mappedFieldType"]) || array_key_exists("mappedFieldType", $context) ? $context["mappedFieldType"] : (function () { throw new RuntimeError('Variable "mappedFieldType" does not exist.', 158, $this->source); })()))) {
                        // line 159
                        $context["list"] = Mautic\LeadBundle\Helper\FormFieldHelper::getLocaleChoices();
                    }
                }
            }
            // line 164
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 164, $this->source); })()))) {
                // line 165
                if (array_key_exists("list", $context)) {
                    // line 166
                    $context["parseList"] = (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 166, $this->source); })());
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 167
($context["field"] ?? null), "properties", [], "any", false, true, false, 167), "optionlist", [], "any", true, true, false, 167) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 167, $this->source); })()), "properties", [], "any", false, false, false, 167), "optionlist", [], "any", false, false, false, 167)))) {
                    // line 168
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 168, $this->source); })()), "properties", [], "any", false, false, false, 168), "optionlist", [], "any", false, false, false, 168);
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 169
($context["field"] ?? null), "properties", [], "any", false, true, false, 169), "list", [], "any", true, true, false, 169) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 169, $this->source); })()), "properties", [], "any", false, false, false, 169), "list", [], "any", false, false, false, 169)))) {
                    // line 170
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 170, $this->source); })()), "properties", [], "any", false, false, false, 170), "list", [], "any", false, false, false, 170);
                }
                // line 173
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["parseList"] ?? null), "list", [], "any", true, true, false, 173)) {
                    // line 174
                    $context["parseList"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 174, $this->source); })()), "list", [], "any", false, false, false, 174);
                }
            }
            // line 178
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 178, $this->source); })()), "mappedField", [], "any", false, false, false, 178) && CoreExtension::getAttribute($this->env, $this->source, ($context["mappedFields"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 178, $this->source); })()), "mappedObject", [], "any", false, false, false, 178), [], "array", true, true, false, 178))) {
                // line 180
                yield "    ";
                $context["fieldCollection"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 180, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 180, $this->source); })()), "mappedObject", [], "any", false, false, false, 180), [], "array", false, false, false, 180);
                // line 181
                yield "
    ";
                // line 182
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["fieldCollection"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 182, $this->source); })()), "mappedField", [], "any", false, false, false, 182), [], "array", true, true, false, 182)) {
                    // line 183
                    yield "      ";
                    $context["mappedField"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 183, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 183, $this->source); })()), "mappedField", [], "any", false, false, false, 183), [], "array", false, false, false, 183);
                    // line 184
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 184, $this->source); })()), "type", [], "any", false, false, false, 184), ["datetime", "date"])) {
                        // line 185
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 185, $this->source); })()));
                        foreach ($context['_seq'] as $context["key"] => $context["aTemp"]) {
                            // line 186
                            $context["date"] = ((("datetime" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["mappedField"]) || array_key_exists("mappedField", $context) ? $context["mappedField"] : (function () { throw new RuntimeError('Variable "mappedField" does not exist.', 186, $this->source); })()), "type", [], "any", false, false, false, 186))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 186))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toDate(CoreExtension::getAttribute($this->env, $this->source, $context["aTemp"], "label", [], "any", false, false, false, 186))));
                            // line 187
                            if ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 187, $this->source); })())) {
                                // line 188
                                $context["parseList"] = Twig\Extension\CoreExtension::merge((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 188, $this->source); })()), [                                // line 189
$context["key"] => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 189, $this->source); })()), $context["key"], [], "array", false, false, false, 189), ["label" =>                                 // line 190
(isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 190, $this->source); })())])]);
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['key'], $context['aTemp'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                }
            }
            // line 199
            if ((isset($context["isBooleanList"]) || array_key_exists("isBooleanList", $context) ? $context["isBooleanList"] : (function () { throw new RuntimeError('Variable "isBooleanList" does not exist.', 199, $this->source); })())) {
                // line 200
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 200, $this->source); })()));
            } else {
                // line 202
                $context["list"] = Mautic\FormBundle\Helper\FormFieldHelper::parseList((isset($context["parseList"]) || array_key_exists("parseList", $context) ? $context["parseList"] : (function () { throw new RuntimeError('Variable "parseList" does not exist.', 202, $this->source); })()));
            }
            // line 205
            $context["firstListValue"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 205, $this->source); })()));
        }
        // line 208
        yield "
";
        // line 209
        $context["optionLabelAttr"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\HtmlExtension']->convertHtmlAttributesToArray(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 209), "labelAttributes", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 209), "labelAttributes", [], "any", false, false, false, 209), "")) : ("")));
        // line 210
        $context["wrapDiv"] = true;
        // line 211
        $context["defaultOptionLabelClass"] = (("mauticform-" . (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 211, $this->source); })())) . "-label");
        // line 212
        $context["optionLabelAttr"] = Twig\Extension\CoreExtension::merge((isset($context["optionLabelAttr"]) || array_key_exists("optionLabelAttr", $context) ? $context["optionLabelAttr"] : (function () { throw new RuntimeError('Variable "optionLabelAttr" does not exist.', 212, $this->source); })()), ["class" => Twig\Extension\CoreExtension::merge(((CoreExtension::getAttribute($this->env, $this->source,         // line 213
($context["optionLabelAttr"] ?? null), "class", [], "any", true, true, false, 213)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["optionLabelAttr"] ?? null), "class", [], "any", false, false, false, 213), [])) : ([])), [(isset($context["defaultOptionLabelClass"]) || array_key_exists("defaultOptionLabelClass", $context) ? $context["defaultOptionLabelClass"] : (function () { throw new RuntimeError('Variable "defaultOptionLabelClass" does not exist.', 213, $this->source); })())])]);
        // line 215
        if (CoreExtension::inFilter("class", ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 215), "labelAttributes", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 215), "labelAttributes", [], "any", false, false, false, 215), "")) : ("")))) {
            // line 216
            yield "  ";
            $context["wrapDiv"] = false;
        }
        // line 218
        $context["firstId"] = (((((((("mauticform_" . (isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 218, $this->source); })())) . "_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 218, $this->source); })())) . "_") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 218, $this->source); })()), "alias", [], "any", false, false, false, 218)) . "_") . Mautic\CoreBundle\Helper\InputHelper::alphanum(Mautic\CoreBundle\Helper\InputHelper::transliterate(((array_key_exists("firstListValue", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["firstListValue"]) || array_key_exists("firstListValue", $context) ? $context["firstListValue"] : (function () { throw new RuntimeError('Variable "firstListValue" does not exist.', 218, $this->source); })()), null)) : (null))))) . "1");
        // line 219
        yield "
<div ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["containerAttributes"]) || array_key_exists("containerAttributes", $context) ? $context["containerAttributes"] : (function () { throw new RuntimeError('Variable "containerAttributes" does not exist.', 220, $this->source); })()));
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
        // line 221
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 221, $this->source); })()), "showLabel", [], "any", false, false, false, 221)) {
            // line 222
            yield "    ";
            $context["labelAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 222, $this->source); })()), ["for" =>             // line 223
(isset($context["firstId"]) || array_key_exists("firstId", $context) ? $context["firstId"] : (function () { throw new RuntimeError('Variable "firstId" does not exist.', 223, $this->source); })())]);
            // line 225
            yield "    <label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["labelAttributes"]) || array_key_exists("labelAttributes", $context) ? $context["labelAttributes"] : (function () { throw new RuntimeError('Variable "labelAttributes" does not exist.', 225, $this->source); })()));
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
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 225, $this->source); })()), "label", [], "any", false, false, false, 225));
            yield "</label>
  ";
        }
        // line 227
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 227, $this->source); })()), "helpMessage", [], "any", false, false, false, 227))) {
            yield "<span class=\"mauticform-helpmessage\">";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 227, $this->source); })()), "helpMessage", [], "any", false, false, false, 227));
            yield "</span>";
        }
        // line 228
        yield "
  ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("list", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 229, $this->source); })()), [])) : ([])));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["listValue"] => $context["listLabel"]) {
            // line 230
            yield "    ";
            $context["id"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 230, $this->source); })()), "alias", [], "any", false, false, false, 230) . "_") . Mautic\CoreBundle\Helper\InputHelper::alphanum(Mautic\CoreBundle\Helper\InputHelper::transliterate($context["listValue"]))) . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 230));
            // line 231
            yield "    ";
            $context["checkboxBrackets"] = ((("checkbox" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 231, $this->source); })()))) ? ("[]") : (""));
            // line 232
            yield "    ";
            $context["listInputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["inputAttributes"]) || array_key_exists("inputAttributes", $context) ? $context["inputAttributes"] : (function () { throw new RuntimeError('Variable "inputAttributes" does not exist.', 232, $this->source); })()), ["name" => ((("mauticform[" . CoreExtension::getAttribute($this->env, $this->source,             // line 233
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 233, $this->source); })()), "alias", [], "any", false, false, false, 233)) . "]") . (isset($context["checkboxBrackets"]) || array_key_exists("checkboxBrackets", $context) ? $context["checkboxBrackets"] : (function () { throw new RuntimeError('Variable "checkboxBrackets" does not exist.', 233, $this->source); })())), "id" => ((((("mauticform_" .             // line 234
(isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 234, $this->source); })())) . "_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 234, $this->source); })())) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 234, $this->source); })())), "type" =>             // line 235
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 235, $this->source); })()), "value" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(            // line 236
$context["listValue"])]);
            // line 238
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 238, $this->source); })()), "defaultValue", [], "any", false, false, false, 238) == $context["listValue"])) {
                // line 239
                yield "      ";
                $context["listInputAttributes"] = Twig\Extension\CoreExtension::merge((isset($context["listInputAttributes"]) || array_key_exists("listInputAttributes", $context) ? $context["listInputAttributes"] : (function () { throw new RuntimeError('Variable "listInputAttributes" does not exist.', 239, $this->source); })()), ["checked" => "checked"]);
                // line 242
                yield "    ";
            }
            // line 243
            yield "
    ";
            // line 244
            if ((isset($context["wrapDiv"]) || array_key_exists("wrapDiv", $context) ? $context["wrapDiv"] : (function () { throw new RuntimeError('Variable "wrapDiv" does not exist.', 244, $this->source); })())) {
                yield "<div class=\"mauticform-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 244, $this->source); })()), "html", null, true);
                yield "-row\">";
            }
            // line 245
            yield "
    <input ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listInputAttributes"]) || array_key_exists("listInputAttributes", $context) ? $context["listInputAttributes"] : (function () { throw new RuntimeError('Variable "listInputAttributes" does not exist.', 246, $this->source); })()));
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
            // line 247
            $context["optionLabelAttr"] = Twig\Extension\CoreExtension::merge((isset($context["optionLabelAttr"]) || array_key_exists("optionLabelAttr", $context) ? $context["optionLabelAttr"] : (function () { throw new RuntimeError('Variable "optionLabelAttr" does not exist.', 247, $this->source); })()), ["id" => ((("mauticform_" .             // line 248
(isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 248, $this->source); })())) . "_label_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 248, $this->source); })())), "for" => ((((("mauticform_" .             // line 249
(isset($context["containerType"]) || array_key_exists("containerType", $context) ? $context["containerType"] : (function () { throw new RuntimeError('Variable "containerType" does not exist.', 249, $this->source); })())) . "_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 249, $this->source); })())) . "_") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 249, $this->source); })()))]);
            // line 251
            yield "    <label ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["optionLabelAttr"]) || array_key_exists("optionLabelAttr", $context) ? $context["optionLabelAttr"] : (function () { throw new RuntimeError('Variable "optionLabelAttr" does not exist.', 251, $this->source); })()));
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
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($context["listLabel"]);
            yield "</label>

    ";
            // line 253
            if ((isset($context["wrapDiv"]) || array_key_exists("wrapDiv", $context) ? $context["wrapDiv"] : (function () { throw new RuntimeError('Variable "wrapDiv" does not exist.', 253, $this->source); })())) {
                yield "</div>";
            }
            // line 254
            yield "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['listValue'], $context['listLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        yield "
  <span class=\"mauticform-errormsg\" style=\"display:none;\">";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["validationMessage"]) || array_key_exists("validationMessage", $context) ? $context["validationMessage"] : (function () { throw new RuntimeError('Variable "validationMessage" does not exist.', 256, $this->source); })()), "html", null, true);
        yield "</span>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/group.html.twig";
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
        return array (  561 => 256,  558 => 255,  544 => 254,  540 => 253,  518 => 251,  516 => 249,  515 => 248,  514 => 247,  496 => 246,  493 => 245,  487 => 244,  484 => 243,  481 => 242,  478 => 239,  475 => 238,  473 => 236,  472 => 235,  471 => 234,  470 => 233,  468 => 232,  465 => 231,  462 => 230,  445 => 229,  442 => 228,  435 => 227,  413 => 225,  411 => 223,  409 => 222,  407 => 221,  389 => 220,  386 => 219,  384 => 218,  380 => 216,  378 => 215,  376 => 213,  375 => 212,  373 => 211,  371 => 210,  369 => 209,  366 => 208,  363 => 205,  360 => 202,  357 => 200,  355 => 199,  345 => 190,  344 => 189,  343 => 188,  341 => 187,  339 => 186,  335 => 185,  333 => 184,  330 => 183,  328 => 182,  325 => 181,  322 => 180,  320 => 178,  316 => 174,  314 => 173,  311 => 170,  309 => 169,  307 => 168,  305 => 167,  303 => 166,  301 => 165,  299 => 164,  294 => 159,  292 => 158,  290 => 157,  288 => 156,  286 => 155,  284 => 154,  282 => 153,  280 => 152,  278 => 150,  277 => 149,  276 => 148,  274 => 147,  272 => 146,  270 => 145,  267 => 143,  264 => 142,  261 => 141,  258 => 140,  256 => 137,  255 => 136,  254 => 135,  253 => 134,  252 => 133,  250 => 131,  248 => 130,  246 => 129,  243 => 127,  240 => 122,  238 => 121,  236 => 120,  234 => 119,  231 => 118,  228 => 115,  225 => 114,  223 => 112,  222 => 111,  221 => 108,  219 => 107,  216 => 106,  213 => 105,  210 => 104,  207 => 103,  204 => 102,  202 => 101,  199 => 100,  196 => 95,  195 => 94,  194 => 93,  193 => 92,  190 => 91,  187 => 90,  185 => 89,  183 => 88,  180 => 86,  178 => 85,  176 => 82,  175 => 81,  174 => 79,  173 => 78,  172 => 77,  169 => 76,  166 => 73,  164 => 72,  162 => 70,  160 => 69,  157 => 66,  155 => 64,  153 => 62,  152 => 61,  149 => 60,  146 => 59,  143 => 58,  140 => 57,  138 => 56,  135 => 55,  132 => 52,  130 => 51,  128 => 50,  125 => 49,  122 => 46,  121 => 45,  119 => 44,  117 => 42,  115 => 41,  113 => 40,  110 => 39,  107 => 36,  105 => 35,  103 => 34,  100 => 33,  97 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  81 => 24,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  59 => 14,  57 => 13,  55 => 12,  53 => 11,  50 => 9,  48 => 8,  46 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/group.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Field/group.html.twig");
    }
}
