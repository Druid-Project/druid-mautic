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

/* @MauticLead/Lead/_list_column_location.html.twig */
class __TwigTemplate_006ecff1ef5e249c5aa38173f4410274 extends Template
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
        yield "<td class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 2
        $context["flag"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 2), "country", [], "any", true, true, false, 2) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 2, $this->source); })()), "core", [], "any", false, false, false, 2), "country", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 2, $this->source); })()), "core", [], "any", false, false, false, 2), "country", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2))) : (""));
        // line 3
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 3, $this->source); })()))) {
            // line 4
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\" style=\"max-height: 24px;\" class=\"mr-sm\" />
    ";
        }
        // line 6
        yield "
    ";
        // line 7
        $context["location"] = [];
        // line 8
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 8), "city", [], "any", true, true, false, 8)) {
            // line 9
            yield "        ";
            $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 9, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 9, $this->source); })()), "core", [], "any", false, false, false, 9), "city", [], "any", false, false, false, 9), "value", [], "any", false, false, false, 9)]);
            // line 10
            yield "    ";
        }
        // line 11
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 11), "state", [], "any", true, true, false, 11)) {
            // line 12
            yield "        ";
            $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 12, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 12, $this->source); })()), "core", [], "any", false, false, false, 12), "state", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12)]);
            // line 13
            yield "    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 13), "country", [], "any", true, true, false, 13)) {
            // line 14
            yield "        ";
            $context["location"] = Twig\Extension\CoreExtension::merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 14, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 14, $this->source); })()), "core", [], "any", false, false, false, 14), "country", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14)]);
            // line 15
            yield "    ";
        }
        // line 16
        yield "    ";
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 16, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 16, $this->source); })())); }), ", "));
        yield "
    <div class=\"clearfix\"></div>
</td>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/_list_column_location.html.twig";
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
        return array (  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  52 => 4,  49 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/_list_column_location.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/_list_column_location.html.twig");
    }
}
