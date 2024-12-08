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

/* @MauticForm/Public/videoembed.html.twig */
class __TwigTemplate_f96d9d6bd1b2977d64e0a57990f39bb4 extends Template
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
        yield "<div id=\"mautic-video-form-embed\">
    <form method=\"post\" action=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_form_postresults", ["formId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\">
        ";
        // line 4
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "fields", [], "any", false, false, false, 4));
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
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 5
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 5) && CoreExtension::getAttribute($this->env, $this->source, ($context["fieldSettings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 5), [], "array", true, true, false, 5))) {
                // line 6
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["f"], "isCustom", [], "any", false, false, false, 6)) {
                    // line 7
                    yield "                    ";
                    $context["params"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fieldSettings"]) || array_key_exists("fieldSettings", $context) ? $context["fieldSettings"] : (function () { throw new RuntimeError('Variable "fieldSettings" does not exist.', 7, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 7), [], "array", false, false, false, 7);
                    // line 8
                    yield "                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["f"], "setCustomParameters", [(isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 8, $this->source); })())], "method", false, false, false, 8), "html", null, true);
                    yield "
                    ";
                    // line 9
                    $context["template"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 9, $this->source); })()), "template", [], "any", false, false, false, 9);
                    // line 10
                    yield "                ";
                } else {
                    // line 11
                    yield "                    ";
                    $context["template"] = (("@MauticForm/Field/" . CoreExtension::getAttribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 11)) . ".html.twig");
                    // line 12
                    yield "                ";
                }
                // line 13
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 13, $this->source); })()), ["field" => CoreExtension::getAttribute($this->env, $this->source, $context["f"], "convertToArray", [], "method", false, false, false, 13), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["f"], "alias", [], "any", false, false, false, 13), "formName" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["f"], "form", [], "any", false, false, false, 13), "generateFormName", [], "method", false, false, false, 13)]);
                yield "
            ";
            }
            // line 15
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Public/videoembed.html.twig";
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
        return array (  112 => 16,  98 => 15,  92 => 13,  89 => 12,  86 => 11,  83 => 10,  81 => 9,  76 => 8,  73 => 7,  70 => 6,  67 => 5,  49 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Public/videoembed.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Public/videoembed.html.twig");
    }
}
