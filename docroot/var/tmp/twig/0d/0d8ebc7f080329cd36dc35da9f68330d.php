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

/* @MauticUser/Helper/accent.html.twig */
class __TwigTemplate_f80a43766770728ad89007275d531c5c extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            yield "    ";
            $context["formatted_id"] = Twig\Extension\CoreExtension::sprintf("%02d", $context["i"]);
            // line 3
            yield "    <div class=\"accent\">
        <input type=\"radio\" id=\"accent-";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\" name=\"accent\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 4, $this->source); })()), "html", null, true);
            yield "\"
                class=\"hide\" data-attribute-toggle=\"accent\" data-attribute-value=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\" ";
            if (((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 5, $this->source); })()) == "01")) {
                yield "checked";
            }
            yield ">
        <label for=\"accent-";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "\" class=\"accent-color ma-0 bdr-rds-circle\" style=\"background-color: var(--accent";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 6, $this->source); })()), "html", null, true);
            yield ");\"></label>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        yield "
<!-- Dropdown for additional colors -->
<div class=\"dropdown\">
    <a class=\"label label-warm-gray accent-dropdown\"
            style=\"height: 28px;\" type=\"button\" id=\"dropdownMoreColors\" data-toggle=\"dropdown\"
            aria-expanded=\"false\">
            <span>More</span>
        <i class=\"ri-add-line\"></i>
    </a>
    <div class=\"dropdown-menu pa-md\" aria-labelledby=\"dropdownMoreColors\">
        <div class=\"d-flex fw-wrap gap-lg\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(8, Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["accents"]) || array_key_exists("accents", $context) ? $context["accents"] : (function () { throw new RuntimeError('Variable "accents" does not exist.', 20, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            yield "                ";
            $context["formatted_id"] = Twig\Extension\CoreExtension::sprintf("%02d", $context["i"]);
            // line 22
            yield "                <div class=\"d-inline-flex\">
                    <input type=\"radio\" id=\"accent-";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "\" name=\"accent\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "\"
                            class=\"hide\" data-attribute-toggle=\"accent\" data-attribute-value=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "\">
                    <label for=\"accent-";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 25, $this->source); })()), "html", null, true);
            yield "\" class=\"accent-color ma-0 bdr-rds-circle\" style=\"background-color: var(--accent";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_id"]) || array_key_exists("formatted_id", $context) ? $context["formatted_id"] : (function () { throw new RuntimeError('Variable "formatted_id" does not exist.', 25, $this->source); })()), "html", null, true);
            yield ");\"></label>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "        </div>

    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Helper/accent.html.twig";
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
        return array (  121 => 28,  110 => 25,  106 => 24,  100 => 23,  97 => 22,  94 => 21,  90 => 20,  77 => 9,  66 => 6,  58 => 5,  52 => 4,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Helper/accent.html.twig", "/app/docroot/app/bundles/UserBundle/Resources/views/Helper/accent.html.twig");
    }
}
