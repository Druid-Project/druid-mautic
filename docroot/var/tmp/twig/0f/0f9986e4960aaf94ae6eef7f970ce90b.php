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

/* @MauticForm/Field/captcha.html.twig */
class __TwigTemplate_67f105ce9d2a419579549dbf171eb125 extends Template
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
        $context["required"] = true;
        // line 2
        $context["type"] = "text";
        // line 3
        yield "
";
        // line 4
        if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, true, false, 4), "captcha", [], "any", true, true, false, 4) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "properties", [], "any", false, false, false, 4), "captcha", [], "any", false, false, false, 4)))) {
            // line 5
            yield "    ";
            $context["required"] = false;
            // line 6
            yield "    ";
            if ((( !array_key_exists("inForm", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 6, $this->source); })()))) || (false == (isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 6, $this->source); })())))) {
                // line 7
                yield "        ";
                // line 8
                yield "        ";
                $context["field"] = Twig\Extension\CoreExtension::merge((isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), ["containerAttributes" => (CoreExtension::getAttribute($this->env, $this->source,                 // line 9
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 9, $this->source); })()), "containerAttributes", [], "any", false, false, false, 9) . " style=\"display:none;\"")]);
                // line 11
                yield "    ";
            } else {
                // line 12
                yield "        ";
                // line 13
                yield "        ";
                $context["type"] = "hidden";
                // line 14
                yield "    ";
            }
        }
        // line 16
        yield "
";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, [(((array_key_exists("theme", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 25, $this->source); })()), "")) : ("")) . "text.html.twig"), "@MauticForm/Field/text.html.twig"], ["field" =>         // line 26
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 26, $this->source); })()), "fields" => ((        // line 27
array_key_exists("fields", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 27, $this->source); })()), [])) : ([])), "inForm" => ((        // line 28
array_key_exists("inForm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["inForm"]) || array_key_exists("inForm", $context) ? $context["inForm"] : (function () { throw new RuntimeError('Variable "inForm" does not exist.', 28, $this->source); })()), false)) : (false)), "type" =>         // line 29
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()), "id" =>         // line 30
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })()), "required" =>         // line 31
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 31, $this->source); })()), "formId" => ((        // line 32
array_key_exists("formId", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 32, $this->source); })()), 0)) : (0)), "formName" => ((        // line 33
array_key_exists("formName", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 33, $this->source); })()), "")) : (""))]);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Field/captcha.html.twig";
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
        return array (  86 => 33,  85 => 32,  84 => 31,  83 => 30,  82 => 29,  81 => 28,  80 => 27,  79 => 26,  78 => 25,  75 => 16,  71 => 14,  68 => 13,  66 => 12,  63 => 11,  61 => 9,  59 => 8,  57 => 7,  54 => 6,  51 => 5,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Field/captcha.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Field/captcha.html.twig");
    }
}
