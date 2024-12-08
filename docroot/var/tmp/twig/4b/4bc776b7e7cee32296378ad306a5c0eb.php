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

/* @MauticLead/Field/properties_select.html.twig */
class __TwigTemplate_3304b955558997a5bde3ea995c0a967c extends Template
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
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()), "select")) : ("select"));
        // line 2
        yield "<div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 3
        if ((( !array_key_exists("form", $context) || (null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()))) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3)))) {
            // line 4
            yield "        ";
            $context["template"] = ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 4, $this->source); })()) == "lookup")) ? ((isset($context["lookupTemplate"]) || array_key_exists("lookupTemplate", $context) ? $context["lookupTemplate"] : (function () { throw new RuntimeError('Variable "lookupTemplate" does not exist.', 4, $this->source); })())) : ((isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 4, $this->source); })())));
            // line 5
            yield "        ";
            yield Twig\Extension\CoreExtension::replace((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 5, $this->source); })()), [(("properties_" .             // line 6
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 6, $this->source); })())) . "_template") => "properties", "properties" => "properties_template"]);
            // line 8
            yield "
    ";
        } else {
            // line 10
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'row');
            yield "
    ";
        }
        // line 12
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Field/properties_select.html.twig";
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
        return array (  68 => 12,  62 => 10,  58 => 8,  56 => 6,  54 => 5,  51 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Field/properties_select.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Field/properties_select.html.twig");
    }
}
