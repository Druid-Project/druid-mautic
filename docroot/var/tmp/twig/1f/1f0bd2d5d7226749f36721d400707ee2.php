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

/* @MauticForm/Field/checkboxgrp.html.twig */
class __TwigTemplate_07489fa2e869a472e20d200b846ce129 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "defaultValue", [], "any", true, true, false, 1) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 1, $this->source); })()), "defaultValue", [], "any", false, false, false, 1)))) {
            // line 2
            yield "
";
            // line 11
            yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::include($this->env, $context, [(((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 11, $this->source); })()), "")) : ("")) . "hidden.html.twig"), "@MauticForm/Field/hidden.html.twig"], ["field" =>             // line 12
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "fields" => ((            // line 13
array_key_exists("fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 13, $this->source); })()), [])) : ([])), "inForm" => ((            // line 14
array_key_exists("inForm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 14, $this->source); })()), false)) : (false)), "id" =>             // line 15
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "formId" => ((            // line 16
array_key_exists("formId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 16, $this->source); })()), 0)) : (0)), "type" => "checkbox", "formName" => ((            // line 18
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 18, $this->source); })()), "")) : ("")), "mappedFields" => ((            // line 19
array_key_exists("mappedFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 19, $this->source); })()), [])) : ([]))]), ["<input" => (("<input value=\"" . CoreExtension::getAttribute($this->env, $this->source,             // line 21
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 21, $this->source); })()), "defaultValue", [], "any", false, false, false, 21)) . "\"")]);
        }
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, [(((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 32, $this->source); })()), "")) : ("")) . "group.html.twig"), "@MauticForm/Field/group.html.twig"], ["field" =>         // line 33
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 33, $this->source); })()), "inForm" => ((        // line 34
array_key_exists("inForm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 34, $this->source); })()), false)) : (false)), "id" =>         // line 35
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), "formId" => ((        // line 36
array_key_exists("formId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 36, $this->source); })()), 0)) : (0)), "type" => "checkbox", "formName" => ((        // line 38
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 38, $this->source); })()), "")) : ("")), "mappedFields" => ((        // line 39
array_key_exists("mappedFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 39, $this->source); })()), [])) : ([])), "fields" => ((        // line 40
array_key_exists("fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 40, $this->source); })()), null)) : (null))]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/checkboxgrp.html.twig";
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
        return array (  65 => 40,  64 => 39,  63 => 38,  62 => 36,  61 => 35,  60 => 34,  59 => 33,  58 => 32,  55 => 21,  54 => 19,  53 => 18,  52 => 16,  51 => 15,  50 => 14,  49 => 13,  48 => 12,  47 => 11,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/checkboxgrp.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Field/checkboxgrp.html.twig");
    }
}
