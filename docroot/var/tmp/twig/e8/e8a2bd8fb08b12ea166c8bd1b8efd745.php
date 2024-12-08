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

/* @MauticCore/Helper/map.html.twig */
class __TwigTemplate_ae7fcfc6856e1f57854280058c32f9e3 extends Template
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
        if (((array_key_exists("optionsEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["optionsEnabled"]) || array_key_exists("optionsEnabled", $context) ? $context["optionsEnabled"] : (function () { throw new RuntimeError('Variable "optionsEnabled" does not exist.', 1, $this->source); })()), false)) : (false))) {
            // line 2
            yield "    <div class=\"map-options\">
        ";
            // line 3
            if ((array_key_exists("optionsTitle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["optionsTitle"]) || array_key_exists("optionsTitle", $context) ? $context["optionsTitle"] : (function () { throw new RuntimeError('Variable "optionsTitle" does not exist.', 3, $this->source); })())))) {
                // line 4
                yield "            <h5 class=\"map-options__title text-white dark-md fw-sb mb-xs\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["optionsTitle"]) || array_key_exists("optionsTitle", $context) ? $context["optionsTitle"] : (function () { throw new RuntimeError('Variable "optionsTitle" does not exist.', 4, $this->source); })())), "html", null, true);
                yield "</h5>
        ";
            }
            // line 6
            yield "        <div class=\"map-options__container btn-group btn-block\" data-toggle=\"buttons\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 7, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 8
                yield "            <label class=\"map-options__item ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 8)) ? ("active") : (""));
                yield " btn btn-ghost\"
                   data-map-option=\"true\"
                   data-map-series=\"";
                // line 10
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "data", [], "any", false, false, false, 10)), "html", null, true);
                yield "\"
                   data-legend-text=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "legendText", [], "any", false, false, false, 11), "html", null, true);
                yield "\"
                   data-stat-unit=\"";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "unit", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "unit", [], "any", false, false, false, 12), "Lead")) : ("Lead")), "html", null, true);
                yield "\"
            >
                <input type=\"radio\"
                       name=\"map-stats\"
                       id=\"read\"
                       autocomplete=\"off\"
                       ";
                // line 18
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18)) ? ("checked") : (""));
                yield "
                >
                ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 20)), "html", null, true);
                yield "
            </label>
            ";
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
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "        </div>
    </div>
";
        }
        // line 26
        yield "<div class=\"vector-map\"
     style=\"height:";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "px\"
     data-legend-enabled=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("legendEnabled", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["legendEnabled"]) || array_key_exists("legendEnabled", $context) ? $context["legendEnabled"] : (function () { throw new RuntimeError('Variable "legendEnabled" does not exist.', 28, $this->source); })()), false)) : (false)), "html", null, true);
        yield "\"
     data-stat-unit=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("statUnit", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["statUnit"]) || array_key_exists("statUnit", $context) ? $context["statUnit"] : (function () { throw new RuntimeError('Variable "statUnit" does not exist.', 29, $this->source); })()), "Lead")) : ("Lead")), "html", null, true);
        yield "\"
>
    ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })())), "html", null, true);
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/map.html.twig";
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
        return array (  141 => 31,  136 => 29,  132 => 28,  128 => 27,  125 => 26,  120 => 23,  103 => 20,  98 => 18,  89 => 12,  85 => 11,  81 => 10,  75 => 8,  58 => 7,  55 => 6,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/map.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/map.html.twig");
    }
}
