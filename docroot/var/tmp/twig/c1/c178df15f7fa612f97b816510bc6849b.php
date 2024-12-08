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

/* @MauticForm/Builder/form.html.twig */
class __TwigTemplate_c3b78eb50823c6cf01c309b8c39b666b extends Template
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
        // line 17
        $context["formName"] = (("_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "generateFormName", [], "method", false, false, false, 17)) . ((array_key_exists("suffix", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 17, $this->source); })()), "")) : ("")));
        // line 18
        $context["fields"] = ((array_key_exists("fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fields", [], "any", false, false, false, 18))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fields", [], "any", false, false, false, 18)));
        // line 19
        $context["pageCount"] = 1;
        // line 20
        $context["inBuilder"] = ((array_key_exists("inBuilder", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 20, $this->source); })()), false)) : (false));
        // line 21
        $context["action"] = ((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_postresults", ["formId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_postresults", ["formId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)])));
        // line 22
        $context["theme"] = ((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 22, $this->source); })()), "")) : (""));
        // line 23
        $context["mappedFields"] = ((array_key_exists("mappedFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 23, $this->source); })()), [])) : ([]));
        // line 24
        $context["style"] = ((array_key_exists("style", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 24, $this->source); })()), "")) : (""));
        // line 25
        $context["isAjax"] = ((array_key_exists("isAjax", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 25, $this->source); })()), true)) : (true));
        // line 26
        $context["submissions"] = ((array_key_exists("submissions", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 26, $this->source); })()), null)) : (null));
        // line 27
        $context["lead"] = ((array_key_exists("lead", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 27, $this->source); })()), null)) : (null));
        // line 28
        $context["successfulSubmitAction"] = ((array_key_exists("successfulSubmitAction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["successfulSubmitAction"]) || array_key_exists("successfulSubmitAction", $context) ? $context["successfulSubmitAction"] : (function () { throw new RuntimeError('Variable "successfulSubmitAction" does not exist.', 28, $this->source); })()), "")) : (""));
        // line 29
        yield "
";
        // line 30
        yield (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 30, $this->source); })());
        yield "
<style type=\"text/css\" scoped>
    .mauticform-field-hidden { display:none }
</style>
<div id=\"mauticform_wrapper";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\" class=\"mauticform_wrapper\">
    <form autocomplete=\"false\" role=\"form\" method=\"post\" action=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\" id=\"mauticform";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\" ";
        if ((isset($context["isAjax"]) || array_key_exists("isAjax", $context) ? $context["isAjax"] : (function () { throw new RuntimeError('Variable "isAjax" does not exist.', 35, $this->source); })())) {
            yield "data-mautic-form=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 35, $this->source); })()), "_", "left"), "html", null, true);
            yield "\"";
        }
        yield " enctype=\"multipart/form-data\" ";
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "formAttributes", [], "any", false, false, false, 35);
        yield ">";
        // line 36
        if (((isset($context["successfulSubmitAction"]) || array_key_exists("successfulSubmitAction", $context) ? $context["successfulSubmitAction"] : (function () { throw new RuntimeError('Variable "successfulSubmitAction" does not exist.', 36, $this->source); })()) == "top")) {
            // line 37
            yield "<div class=\"mauticform-error\" id=\"mauticform";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "_error\"></div>
            <div class=\"mauticform-message\" id=\"mauticform";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 38, $this->source); })()), "html", null, true);
            yield "_message\"></div>";
        }
        // line 40
        yield "<div class=\"mauticform-innerform\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 42, $this->source); })()));
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
        foreach ($context['_seq'] as $context["fieldId"] => $context["f"]) {
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["formPages"] ?? null), "open", [], "array", false, true, false, 43), $context["fieldId"], [], "array", true, true, false, 43)) {
                // line 45
                $context["lastFieldAttribute"] = ((((isset($context["lastFormPage"]) || array_key_exists("lastFormPage", $context) ? $context["lastFormPage"] : (function () { throw new RuntimeError('Variable "lastFormPage" does not exist.', 45, $this->source); })()) == $context["fieldId"])) ? ("data-mautic-form-pagebreak-lastpage=\"true\"") : (""));
                // line 46
                yield "<div class=\"mauticform-page-wrapper mauticform-page-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 46, $this->source); })()), "html", null, true);
                yield "\" data-mautic-form-page=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 46, $this->source); })()), "html", null, true);
                yield "\" ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastFieldAttribute"]) || array_key_exists("lastFieldAttribute", $context) ? $context["lastFieldAttribute"] : (function () { throw new RuntimeError('Variable "lastFieldAttribute" does not exist.', 46, $this->source); })()), "html", null, true);
                yield ">";
            }
            // line 48
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["f"], "parent", [], "any", false, false, false, 48) && CoreExtension::getAttribute($this->env, $this->source, $context["f"], "showForContact", [(isset($context["submissions"]) || array_key_exists("submissions", $context) ? $context["submissions"] : (function () { throw new RuntimeError('Variable "submissions" does not exist.', 48, $this->source); })()), (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 48, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), (isset($context["displayManager"]) || array_key_exists("displayManager", $context) ? $context["displayManager"] : (function () { throw new RuntimeError('Variable "displayManager" does not exist.', 48, $this->source); })())], "method", false, false, false, 48))) {
                // line 49
                if (CoreExtension::getAttribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 49)) {
                    // line 50
                    $context["params"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldSettings"]) || array_key_exists("fieldSettings", $context) ? $context["fieldSettings"] : (function () { throw new RuntimeError('Variable "fieldSettings" does not exist.', 50, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 50), [], "array", false, false, false, 50);
                    // line 51
                    CoreExtension::getAttribute($this->env, $this->source, $context["f"], "setCustomParameters", [(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 51, $this->source); })())], "method", false, false, false, 51);
                    // line 52
                    $context["template"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 52, $this->source); })()), "template", [], "any", false, false, false, 52);
                } else {
                    // line 54
                    if (((((( !CoreExtension::getAttribute($this->env, $this->source,                     // line 55
$context["f"], "isAlwaysDisplay", [], "any", false, false, false, 55) &&  !CoreExtension::getAttribute($this->env, $this->source,                     // line 56
$context["f"], "showWhenValueExists", [], "any", false, false, false, 56)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                     // line 57
$context["f"], "mappedField", [], "any", false, false, false, 57))) && ("contact" === CoreExtension::getAttribute($this->env, $this->source,                     // line 58
$context["f"], "mappedObject", [], "any", false, false, false, 58))) && CoreExtension::getAttribute($this->env, $this->source,                     // line 59
$context["f"], "isAutoFill", [], "any", false, false, false, 59)) && ((                    // line 60
array_key_exists("lead", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 60, $this->source); })()))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 60, $this->source); })()), "getFieldValue", [CoreExtension::getAttribute($this->env, $this->source, $context["f"], "mappedField", [], "any", false, false, false, 60)], "method", false, false, false, 60))))) {
                        // line 62
                        CoreExtension::getAttribute($this->env, $this->source, $context["f"], "setType", ["hidden"], "method", false, false, false, 62);
                    } else {
                        // line 64
                        CoreExtension::getAttribute($this->env, $this->source, (isset($context["displayManager"]) || array_key_exists("displayManager", $context) ? $context["displayManager"] : (function () { throw new RuntimeError('Variable "displayManager" does not exist.', 64, $this->source); })()), "increaseDisplayedFields", [$context["f"]], "method", false, false, false, 64);
                    }
                    // line 66
                    $context["template"] = (("@MauticForm/Field/" . CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 66)) . ".html.twig");
                }
                // line 68
                yield "
                  ";
                // line 70
                yield Twig\Extension\CoreExtension::include($this->env, $context, [(((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 70, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 70)) . ".html.twig"), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 70, $this->source); })())], ["theme" =>                 // line 71
(isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 71, $this->source); })()), "field" => CoreExtension::getAttribute($this->env, $this->source,                 // line 72
$context["f"], "convertToArray", [], "any", false, false, false, 72), "id" => CoreExtension::getAttribute($this->env, $this->source,                 // line 73
$context["f"], "alias", [], "any", false, false, false, 73), "formName" =>                 // line 74
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 74, $this->source); })()), "fieldPage" => (                // line 75
(isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 75, $this->source); })()) - 1), "mappedFields" =>                 // line 76
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 76, $this->source); })()), "inBuilder" =>                 // line 77
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 77, $this->source); })()), "fields" =>                 // line 78
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 78, $this->source); })()), "language" => CoreExtension::getAttribute($this->env, $this->source,                 // line 79
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "getLanguage", [], "method", false, false, false, 79)]);
            }
            // line 83
            $context["parentField"] = $context["f"];
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 84, $this->source); })()));
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
            foreach ($context['_seq'] as $context["fieldId2"] => $context["f"]) {
                // line 85
                if ((("hidden" != CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentField"]) || array_key_exists("parentField", $context) ? $context["parentField"] : (function () { throw new RuntimeError('Variable "parentField" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85)) && (CoreExtension::getAttribute($this->env, $this->source, $context["f"], "parent", [], "any", false, false, false, 85) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentField"]) || array_key_exists("parentField", $context) ? $context["parentField"] : (function () { throw new RuntimeError('Variable "parentField" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)))) {
                    // line 86
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 86)) {
                        // line 87
                        $context["params"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldSettings"]) || array_key_exists("fieldSettings", $context) ? $context["fieldSettings"] : (function () { throw new RuntimeError('Variable "fieldSettings" does not exist.', 87, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 87), [], "array", false, false, false, 87);
                        // line 88
                        CoreExtension::getAttribute($this->env, $this->source, $context["f"], "setCustomParameters", [(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 88, $this->source); })())], "method", false, false, false, 88);
                        // line 89
                        $context["template"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 89, $this->source); })()), "template", [], "any", false, false, false, 89);
                    } else {
                        // line 91
                        if ((((( !CoreExtension::getAttribute($this->env, $this->source,                         // line 92
$context["f"], "showWhenValueExists", [], "any", false, false, false, 92) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source,                         // line 93
$context["f"], "mappedField", [], "any", false, false, false, 93))) && ("contact" === CoreExtension::getAttribute($this->env, $this->source,                         // line 94
$context["f"], "mappedObject", [], "any", false, false, false, 94))) && CoreExtension::getAttribute($this->env, $this->source,                         // line 95
$context["f"], "isAutoFill", [], "any", false, false, false, 95)) && ((                        // line 96
array_key_exists("lead", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 96, $this->source); })()))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 96, $this->source); })()), "getFieldValue", [CoreExtension::getAttribute($this->env, $this->source, $context["f"], "mappedField", [], "any", false, false, false, 96)], "method", false, false, false, 96))))) {
                            // line 98
                            CoreExtension::getAttribute($this->env, $this->source, $context["f"], "setType", ["hidden"], "method", false, false, false, 98);
                        }
                        // line 100
                        $context["template"] = (("@MauticForm/Field/" . CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 100)) . ".html.twig");
                    }
                    // line 103
                    yield "<!-- start: \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 103, $this->source); })()), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 103, $this->source); })()), "html", null, true);
                    yield "\" -->";
                    // line 104
                    yield Twig\Extension\CoreExtension::include($this->env, $context, [(((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 104, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 104)) . ".html.twig"), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 104, $this->source); })())], ["field" => CoreExtension::getAttribute($this->env, $this->source,                     // line 105
$context["f"], "convertToArray", [], "any", false, false, false, 105), "id" => CoreExtension::getAttribute($this->env, $this->source,                     // line 106
$context["f"], "alias", [], "any", false, false, false, 106), "formName" =>                     // line 107
(isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 107, $this->source); })()), "fieldPage" => (                    // line 108
(isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 108, $this->source); })()) - 1), "mappedFields" =>                     // line 109
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 109, $this->source); })()), "inBuilder" =>                     // line 110
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 110, $this->source); })()), "fields" =>                     // line 111
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 111, $this->source); })()), "language" => CoreExtension::getAttribute($this->env, $this->source,                     // line 112
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "getLanguage", [], "method", false, false, false, 112)]);
                    // line 114
                    yield "<!-- end: \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 114, $this->source); })()), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 114, $this->source); })()), "html", null, true);
                    yield "\" -->";
                }
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
            unset($context['_seq'], $context['fieldId2'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            if ((array_key_exists("formPages", $context) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["formPages"] ?? null), "close", [], "array", false, true, false, 118), $context["fieldId"], [], "array", true, true, false, 118))) {
                // line 120
                yield "                  </div>";
                // line 121
                $context["pageCount"] = ((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 121, $this->source); })()) + 1);
            }
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
        unset($context['_seq'], $context['fieldId'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "</div>";
        // line 126
        if (((isset($context["successfulSubmitAction"]) || array_key_exists("successfulSubmitAction", $context) ? $context["successfulSubmitAction"] : (function () { throw new RuntimeError('Variable "successfulSubmitAction" does not exist.', 126, $this->source); })()) == "bottom")) {
            // line 127
            yield "<div class=\"mauticform-error\" id=\"mauticform";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 127, $this->source); })()), "html", null, true);
            yield "_error\"></div>
            <div class=\"mauticform-message\" id=\"mauticform";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 128, $this->source); })()), "html", null, true);
            yield "_message\"></div>";
        }
        // line 131
        yield "<input type=\"hidden\" name=\"mauticform[formId]\" id=\"mauticform";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "_id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131));
        yield "\"/>
        <input type=\"hidden\" name=\"mauticform[return]\" id=\"mauticform";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 132, $this->source); })()), "html", null, true);
        yield "_return\" value=\"\"/>
        <input type=\"hidden\" name=\"mauticform[formName]\" id=\"mauticform";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 133, $this->source); })()), "html", null, true);
        yield "_name\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 133, $this->source); })()), "_", "left"));
        yield "\"/>
        ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("formExtra", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formExtra"]) || array_key_exists("formExtra", $context) ? $context["formExtra"] : (function () { throw new RuntimeError('Variable "formExtra" does not exist.', 134, $this->source); })()), "")) : ("")), "html", null, true);
        yield "
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Builder/form.html.twig";
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
        return array (  305 => 134,  299 => 133,  295 => 132,  288 => 131,  284 => 128,  279 => 127,  277 => 126,  275 => 124,  260 => 121,  258 => 120,  256 => 118,  238 => 114,  236 => 112,  235 => 111,  234 => 110,  233 => 109,  232 => 108,  231 => 107,  230 => 106,  229 => 105,  228 => 104,  223 => 103,  220 => 100,  217 => 98,  215 => 96,  214 => 95,  213 => 94,  212 => 93,  211 => 92,  210 => 91,  207 => 89,  205 => 88,  203 => 87,  201 => 86,  199 => 85,  182 => 84,  180 => 83,  177 => 79,  176 => 78,  175 => 77,  174 => 76,  173 => 75,  172 => 74,  171 => 73,  170 => 72,  169 => 71,  168 => 70,  165 => 68,  162 => 66,  159 => 64,  156 => 62,  154 => 60,  153 => 59,  152 => 58,  151 => 57,  150 => 56,  149 => 55,  148 => 54,  145 => 52,  143 => 51,  141 => 50,  139 => 49,  137 => 48,  128 => 46,  126 => 45,  124 => 43,  107 => 42,  104 => 40,  100 => 38,  95 => 37,  93 => 36,  80 => 35,  76 => 34,  69 => 30,  66 => 29,  64 => 28,  62 => 27,  60 => 26,  58 => 25,  56 => 24,  54 => 23,  52 => 22,  50 => 21,  48 => 20,  46 => 19,  44 => 18,  42 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Builder/form.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Builder/form.html.twig");
    }
}
