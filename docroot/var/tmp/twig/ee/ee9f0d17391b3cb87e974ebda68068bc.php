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

/* @MauticFocus/Builder/Modal/index.html.twig */
class __TwigTemplate_78b641451b529a3482cb0b95c74cb484 extends Template
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
        $context["props"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 1, $this->source); })()), "properties", [], "any", false, false, false, 1);
        // line 2
        $context["style"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 2, $this->source); })()), "style", [], "any", false, false, false, 2);
        // line 3
        $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["props"] ?? null), (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 3, $this->source); })()), [], "array", false, true, false, 3), "placement", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 3, $this->source); })()), (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 3, $this->source); })()), [], "array", false, false, false, 3), "placement", [], "any", false, false, false, 3), ["_" => "-"])) : (false));
        // line 4
        $context["animate"] = (( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 4, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["props"] ?? null), "animate", [], "any", true, true, false, 4)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 4, $this->source); })()), "animate", [], "any", false, false, false, 4) == 1));
        // line 5
        yield "<style scoped>
    .mf-";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 6, $this->source); })()), "html", null, true);
        yield " {
        border-color: #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 7, $this->source); })()), "colors", [], "any", false, false, false, 7), "primary", [], "any", false, false, false, 7), "html", null, true);
        yield ";
    }
</style>
<div class=\"mautic-focus mf-";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 10, $this->source); })()), "html", null, true);
        yield " ";
        if ((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 10, $this->source); })())) {
            yield "mf-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 10, $this->source); })()), "html", null, true);
        }
        yield " ";
        if ((isset($context["animate"]) || array_key_exists("animate", $context) ? $context["animate"] : (function () { throw new RuntimeError('Variable "animate" does not exist.', 10, $this->source); })())) {
            yield "mf-animate";
        }
        yield "\">
    <div class=\"mf-";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "-container\">
        <div class=\"mf-";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "-close\">
            <a href=\"javascript:void(0)\" ";
        // line 13
        if ( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 13, $this->source); })())) {
            yield "onclick=\"Mautic.closeFocusModal('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "')\"";
        }
        yield ">x</a>
        </div>
        <div class=\"mf-content\">
            ";
        // line 16
        if (CoreExtension::inFilter((isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 16, $this->source); })()), ["editor", "html"])) {
            // line 17
            yield "                ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 17, $this->source); })()), (isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17);
            yield "
            ";
        } else {
            // line 19
            yield "              <div class=\"mf-headline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 19, $this->source); })()), "content", [], "array", false, false, false, 19), "headline", [], "array", false, false, false, 19), "html", null, true);
            yield "</div>
              ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["props"] ?? null), "content", [], "array", false, true, false, 20), "tagline", [], "array", true, true, false, 20)) {
                // line 21
                yield "                  <div class=\"mf-tagline\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 21, $this->source); })()), "content", [], "array", false, false, false, 21), "tagline", [], "array", false, false, false, 21), "html", null, true);
                yield "</div>
              ";
            }
            // line 23
            yield "              <div class=\"mf-inner-container\">
                  ";
            // line 24
            if (("form" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24))) {
                // line 25
                yield "                      {focus_form}
                  ";
            } elseif (("link" == CoreExtension::getAttribute($this->env, $this->source,             // line 26
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26))) {
                // line 27
                yield "                      <a href=\"";
                if ( !(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 27, $this->source); })())) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 27, $this->source); })()), "html", null, true);
                } else {
                    yield "#";
                }
                yield "\"
                         class=\"mf-link\"
                         target=\"";
                // line 29
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29), "link_new_window", [], "any", false, false, false, 29)) {
                    yield "_new";
                } else {
                    yield "_parent";
                }
                yield "\">
                          ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 30, $this->source); })()), "content", [], "array", false, false, false, 30), "link_text", [], "array", false, false, false, 30), "html", null, true);
                yield "
                      </a>
                  ";
            }
            // line 33
            yield "              </div>
            ";
        }
        // line 35
        yield "        </div>
    </div>
</div>
";
        // line 38
        if (("modal" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "    <div class=\"mf-move-to-parent mf-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "-overlay mf-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 39, $this->source); })()), "html", null, true);
            yield "-overlay-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 39, $this->source); })()), "id", [], "array", false, false, false, 39), "html", null, true);
            yield "\"></div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/Modal/index.html.twig";
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
        return array (  162 => 39,  160 => 38,  155 => 35,  151 => 33,  145 => 30,  137 => 29,  127 => 27,  125 => 26,  122 => 25,  120 => 24,  117 => 23,  111 => 21,  109 => 20,  104 => 19,  98 => 17,  96 => 16,  86 => 13,  82 => 12,  78 => 11,  63 => 10,  57 => 7,  53 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Modal/index.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Modal/index.html.twig");
    }
}
