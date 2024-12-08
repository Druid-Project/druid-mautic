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

/* @MauticCore/FormTheme/form_simple.html.twig */
class __TwigTemplate_fc938185d8d673875bcfaed1803b9981 extends Template
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

        $this->blocks = [
            'mainFormContent' => [$this, 'block_mainFormContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/FormTheme/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["hasRightColumn"] =         $this->unwrap()->hasBlock("rightFormContent", $context, $blocks);
        // line 3
        $context["modalView"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "getRequest", [], "method", false, false, false, 3), "get", ["modal", false], "method", false, false, false, 3) ||         $this->unwrap()->hasBlock("inModal", $context, $blocks));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form.html.twig", "@MauticCore/FormTheme/form_simple.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mainFormContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "<div class=\"box-layout\">
    <div class=\"col-md-";
        // line 6
        yield ((((isset($context["hasRightColumn"]) || array_key_exists("hasRightColumn", $context) ? $context["hasRightColumn"] : (function () { throw new RuntimeError('Variable "hasRightColumn" does not exist.', 6, $this->source); })()) &&  !(isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 6, $this->source); })()))) ? (9) : (12));
        yield " height-auto bdr-r\">
        <div class=\"pa-md\">
            ";
        // line 8
        yield from         $this->unwrap()->yieldBlock("primaryFormContent", $context, $blocks);
        yield "
        </div>
    </div>
    ";
        // line 11
        if ((isset($context["hasRightColumn"]) || array_key_exists("hasRightColumn", $context) ? $context["hasRightColumn"] : (function () { throw new RuntimeError('Variable "hasRightColumn" does not exist.', 11, $this->source); })())) {
            // line 12
            yield "    <div class=\"col-md-";
            yield (((isset($context["modalView"]) || array_key_exists("modalView", $context) ? $context["modalView"] : (function () { throw new RuntimeError('Variable "modalView" does not exist.', 12, $this->source); })())) ? (12) : (3));
            yield " height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
            // line 14
            yield from             $this->unwrap()->yieldBlock("rightFormContent", $context, $blocks);
            yield "
        </div>
    </div>
    ";
        }
        // line 18
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/FormTheme/form_simple.html.twig";
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
        return array (  92 => 18,  85 => 14,  79 => 12,  77 => 11,  71 => 8,  66 => 6,  63 => 5,  56 => 4,  51 => 1,  49 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/FormTheme/form_simple.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/FormTheme/form_simple.html.twig");
    }
}
