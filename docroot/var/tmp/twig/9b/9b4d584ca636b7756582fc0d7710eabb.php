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

/* @MauticFocus/Builder/content.html.twig */
class __TwigTemplate_9fdcad8f2528b21df3245ba3d4438601 extends Template
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
        // line 11
        $context["templateBase"] = (("@MauticFocus/Builder/" . Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 11, $this->source); })()), "style", [], "any", false, false, false, 11))) . "/index.html.twig");
        // line 12
        $context["preview"] = ((array_key_exists("preview", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 12, $this->source); })()), false)) : (false));
        // line 13
        $context["clickUrl"] = ((array_key_exists("clickUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 13, $this->source); })()), "#")) : ("#"));
        // line 14
        $context["props"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 14, $this->source); })()), "properties", [], "any", false, false, false, 14);
        // line 15
        yield "<div>
    <style scoped>
        .mautic-focus * {
            all: revert;
            box-sizing: border-box;
        }
        .mautic-focus {
            font-family: ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 22, $this->source); })()), "content", [], "any", false, false, false, 22), "font", [], "any", false, false, false, 22), "html", null, true);
        yield ";
            color: #";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 23, $this->source); })()), "colors", [], "any", false, false, false, 23), "text", [], "any", false, false, false, 23), ["#" => ""]), "html", null, true);
        yield ";
        }

        ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["props"] ?? null), "colors", [], "any", true, true, false, 26) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 26, $this->source); })()), "colors", [], "any", false, false, false, 26)))) {
            // line 27
            yield "          .mf-content a.mf-link, .mf-content .mauticform-button, .mf-content .mauticform-pagebreak {
              background-color: #";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 28, $this->source); })()), "colors", [], "any", false, false, false, 28), "button", [], "any", false, false, false, 28), ["#" => ""]), "html", null, true);
            yield ";
              color: #";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 29, $this->source); })()), "colors", [], "any", false, false, false, 29), "button_text", [], "any", false, false, false, 29), "html", null, true);
            yield ";
          }
          .mauticform-input:focus, select:focus {
              border: 1px solid #";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 32, $this->source); })()), "colors", [], "any", false, false, false, 32), "button", [], "any", false, false, false, 32), ["#" => ""]), "html", null, true);
            yield ";
          }
        ";
        }
        // line 35
        yield "
        ";
        // line 36
        if ((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 36, $this->source); })())) {
            // line 37
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/style.less.twig", ["preview" => true, "focus" =>             // line 39
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 39, $this->source); })())], false);
            // line 40
            yield "
        ";
        }
        // line 42
        yield "    </style>
    ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["templateBase"]) || array_key_exists("templateBase", $context) ? $context["templateBase"] : (function () { throw new RuntimeError('Variable "templateBase" does not exist.', 43, $this->source); })()), ["focus" =>         // line 44
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 44, $this->source); })()), "preview" =>         // line 45
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 45, $this->source); })()), "clickUrl" =>         // line 46
(isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 46, $this->source); })()), "htmlMode" =>         // line 47
(isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 47, $this->source); })())], false);
        // line 48
        yield "
    ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["focus"] ?? null), "properties", [], "any", false, true, false, 49), "content", [], "any", false, true, false, 49), "css", [], "any", true, true, false, 49) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 49, $this->source); })()), "properties", [], "any", false, false, false, 49), "content", [], "any", false, false, false, 49), "css", [], "any", false, false, false, 49)))) {
            // line 50
            yield "    <style scoped>
        ";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "content", [], "any", false, false, false, 51), "css", [], "any", false, false, false, 51);
            yield "
    </style>
    ";
        }
        // line 54
        yield "
    ";
        // line 56
        yield "    ";
        if ( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 56, $this->source); })())) {
            // line 57
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_focus_pixel", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)], true), "html", null, true);
            yield "\" alt=\"Mautic Focus\" style=\"display: none;\"/>
    ";
        }
        // line 59
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/content.html.twig";
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
        return array (  138 => 59,  132 => 57,  129 => 56,  126 => 54,  120 => 51,  117 => 50,  115 => 49,  112 => 48,  110 => 47,  109 => 46,  108 => 45,  107 => 44,  106 => 43,  103 => 42,  99 => 40,  97 => 39,  95 => 37,  93 => 36,  90 => 35,  84 => 32,  78 => 29,  74 => 28,  71 => 27,  69 => 26,  63 => 23,  59 => 22,  50 => 15,  48 => 14,  46 => 13,  44 => 12,  42 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/content.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/content.html.twig");
    }
}
