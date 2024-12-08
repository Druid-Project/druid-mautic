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

/* @MauticForm/Field/country.html.twig */
class __TwigTemplate_96fe14d76ddffb79121fda5d92a30e99 extends Template
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
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, [(((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 9, $this->source); })()), "")) : ("")) . "select.html.twig"), "@MauticForm/Field/select.html.twig"], ["field" =>         // line 10
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "fields" => ((        // line 11
array_key_exists("fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 11, $this->source); })()), [])) : ([])), "mappedFields" => ((        // line 12
array_key_exists("mappedFields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 12, $this->source); })()), [])) : ([])), "inForm" => ((        // line 13
array_key_exists("inForm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 13, $this->source); })()), false)) : (false)), "list" => Mautic\LeadBundle\Helper\FormFieldHelper::getCountryChoices(), "id" =>         // line 15
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), "formId" => ((        // line 16
array_key_exists("formId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 16, $this->source); })()), 0)) : (0)), "formName" => ((        // line 17
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 17, $this->source); })()), "")) : (""))]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/country.html.twig";
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
        return array (  49 => 17,  48 => 16,  47 => 15,  46 => 13,  45 => 12,  44 => 11,  43 => 10,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/country.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Field/country.html.twig");
    }
}
