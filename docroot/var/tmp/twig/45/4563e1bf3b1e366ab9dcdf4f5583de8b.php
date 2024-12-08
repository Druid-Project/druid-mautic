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

/* @MauticFocus/Builder/Bar/index.html.twig */
class __TwigTemplate_0254b8a2981b5e67385847ecc6a0a682 extends Template
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
        $context["color"] = ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 2, $this->source); })()), "colors", [], "any", false, false, false, 2), "primary", [], "any", false, false, false, 2)) && $this->env->getTest('color light')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 2, $this->source); })()), "colors", [], "any", false, false, false, 2), "primary", [], "any", false, false, false, 2)))) ? ("000000") : ("ffffff"));
        // line 3
        $context["animate"] = ((( !Twig\Extension\CoreExtension::testEmpty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 3, $this->source); })())) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 3, $this->source); })()), "animate", [], "any", false, false, false, 3)))) ? (" mf-animate") : (""));
        // line 4
        yield "
<div class=\"mautic-focus mf-bar mf-bar-";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "bar", [], "any", false, false, false, 5), "size", [], "any", false, false, false, 5), "html", null, true);
        yield " mf-bar-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "bar", [], "any", false, false, false, 5), "placement", [], "any", false, false, false, 5), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "bar", [], "any", false, false, false, 5), "sticky", [], "any", false, false, false, 5)) {
            yield "mf-bar-sticky";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["animate"]) || array_key_exists("animate", $context) ? $context["animate"] : (function () { throw new RuntimeError('Variable "animate" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\" style=\"background-color: #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 5, $this->source); })()), "colors", [], "any", false, false, false, 5), "primary", [], "any", false, false, false, 5), ["#" => ""]), "html", null, true);
        yield ";\">
    <div class=\"mf-content\">
        ";
        // line 7
        if (CoreExtension::inFilter((isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 7, $this->source); })()), ["editor", "html"])) {
            // line 8
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 8, $this->source); })()), (isset($context["htmlMode"]) || array_key_exists("htmlMode", $context) ? $context["htmlMode"] : (function () { throw new RuntimeError('Variable "htmlMode" does not exist.', 8, $this->source); })()), [], "array", false, false, false, 8);
            yield "
        ";
        } else {
            // line 10
            yield "            <div class=\"mf-headline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), "headline", [], "any", false, false, false, 10), "html", null, true);
            yield "</div>
            ";
            // line 11
            if (("form" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 11, $this->source); })()), "type", [], "any", false, false, false, 11))) {
                // line 12
                yield "                {focus_form}
            ";
            } elseif (("link" == CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13))) {
                // line 14
                yield "                <a href=\"";
                if (Twig\Extension\CoreExtension::testEmpty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 14, $this->source); })()))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clickUrl"]) || array_key_exists("clickUrl", $context) ? $context["clickUrl"] : (function () { throw new RuntimeError('Variable "clickUrl" does not exist.', 14, $this->source); })()), "html", null, true);
                } else {
                    yield "#";
                }
                yield "\" class=\"mf-link\" target=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), "link_new_window", [], "any", false, false, false, 14)) {
                    yield "_new";
                } else {
                    yield "_parent";
                }
                yield "\">
                    ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 15, $this->source); })()), "content", [], "any", false, false, false, 15), "link_text", [], "any", false, false, false, 15), "html", null, true);
                yield "
                </a>
            ";
            }
            // line 18
            yield "        ";
        }
        // line 19
        yield "    </div>
    <div class=\"mf-bar-collapse\"></div>
</div>

";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 23, $this->source); })()), "bar", [], "any", false, false, false, 23), "allow_hide", [], "any", false, false, false, 23)) {
            // line 24
            yield "    <div class=\"mf-copy-to-parent mf-bar-collapser mf-bar-collapser-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 24, $this->source); })()), "bar", [], "any", false, false, false, 24), "placement", [], "any", false, false, false, 24), "html", null, true);
            yield " mf-bar-collapser-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 24, $this->source); })()), "bar", [], "any", false, false, false, 24), "size", [], "any", false, false, false, 24), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 24, $this->source); })()), "bar", [], "any", false, false, false, 24), "sticky", [], "any", false, false, false, 24)) {
                yield "mf-bar-collapser-sticky";
            }
            yield " mf-bar-collapser-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
            yield "\"
         style=\"background-color: #";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 25, $this->source); })()), "colors", [], "any", false, false, false, 25), "primary", [], "any", false, false, false, 25), ["#" => ""]), "html", null, true);
            yield "; color: #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 25, $this->source); })()), "colors", [], "any", false, false, false, 25), "text", [], "any", false, false, false, 25), ["#" => ""]), "html", null, true);
            yield ";\">
        <style scoped>
            .mf-bar-collapser-icon {
                color: #";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 28, $this->source); })()), "html", null, true);
            yield ";
            }

            .mf-bar-collapser-icon:hover {
                color: #";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 32, $this->source); })()), "html", null, true);
            yield ";
            }
        </style>
        <a class=\"mf-bar-collapser-icon\" href=\"javascript:void(0)\" ";
            // line 35
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 35, $this->source); })()))) {
                yield "onclick=\"Mautic.toggleBarCollapse()\"";
            }
            yield ">
            ";
            // line 36
            $context["size"] = ((("large" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 36, $this->source); })()), "bar", [], "any", false, false, false, 36), "size", [], "any", false, false, false, 36))) ? (40) : (24));
            // line 37
            yield "            ";
            $context["transformSize"] = 20;
            // line 38
            yield "            ";
            $context["scale"] = ((("large" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 38, $this->source); })()), "bar", [], "any", false, false, false, 38), "size", [], "any", false, false, false, 38))) ? (1) : (0.6));
            // line 39
            yield "            ";
            $context["direction"] = ((("top" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 39, $this->source); })()), "bar", [], "any", false, false, false, 39), "placement", [], "any", false, false, false, 39))) ? ("-90") : ("90"));
            // line 40
            yield "            <svg style=\"overflow: hidden;\" xmlns=\"http://www.w3.org/2000/svg\" width=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\" version=\"1.1\"
                 height=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\" data-transform-size=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transformSize"]) || array_key_exists("transformSize", $context) ? $context["transformSize"] : (function () { throw new RuntimeError('Variable "transformSize" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\" data-transform-direction=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\" data-transform-scale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 41, $this->source); })()), "html", null, true);
            yield "\">
                <g transform=\"scale(";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 42, $this->source); })()), "html", null, true);
            yield ") rotate(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 42, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transformSize"]) || array_key_exists("transformSize", $context) ? $context["transformSize"] : (function () { throw new RuntimeError('Variable "transformSize" does not exist.', 42, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["transformSize"]) || array_key_exists("transformSize", $context) ? $context["transformSize"] : (function () { throw new RuntimeError('Variable "transformSize" does not exist.', 42, $this->source); })()), "html", null, true);
            yield ")\">
                    <desc>Created with Raphaël 2.1.2</desc>
                    <defs>
                        <linearGradient gradientTransform=\"matrix(1,0,0,1,-4,-4)\" y2=\"0\" x2=\"6.123233995736766e-17\" y1=\"1\" x1=\"0\" id=\"1390-_0050af-_002c62\">
                            <stop stop-color=\"#";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 46, $this->source); })()), "html", null, true);
            yield "\" offset=\"0%\"></stop>
                            <stop stop-color=\"#";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 47, $this->source); })()), "html", null, true);
            yield "\" offset=\"100%\"></stop>
                        </linearGradient>
                    </defs>
                    <path transform=\"matrix(1,0,0,1,4,4)\" opacity=\"0\" stroke-linejoin=\"round\" stroke-width=\"3\"
                          d=\"M16,1.466C7.973,1.466,1.466,7.973,1.466,16C1.466,24.027,7.973,30.534,16,30.534C24.027,30.534,30.534,24.027,30.534,15.999999999999998C30.534,7.973,24.027,1.466,16,1.466ZM13.665,25.725L10.129,22.186L16.316,15.998999999999999L10.128999999999998,9.811999999999998L13.664999999999997,6.275999999999998L23.388999999999996,15.998999999999999L13.665,25.725Z\"
                          stroke=\"#ffffff\" fill=\"none\" style=\"stroke-linejoin: round; opacity: 0;\"></path>
                    <path fill-opacity=\"1\" opacity=\"1\" transform=\"matrix(1,0,0,1,4,4)\"
                          d=\"M16,1.466C7.973,1.466,1.466,7.973,1.466,16C1.466,24.027,7.973,30.534,16,30.534C24.027,30.534,30.534,24.027,30.534,15.999999999999998C30.534,7.973,24.027,1.466,16,1.466ZM13.665,25.725L10.129,22.186L16.316,15.998999999999999L10.128999999999998,9.811999999999998L13.664999999999997,6.275999999999998L23.388999999999996,15.998999999999999L13.665,25.725Z\"
                          stroke=\"none\" fill=\"url(#1390-_0050af-_002c62)\" style=\"opacity: 1; fill-opacity: 1;\"></path>
                    <rect opacity=\"0\" style=\"opacity: 0;\" stroke=\"#000\" fill=\"#000000\" ry=\"0\" rx=\"0\" r=\"0\" y=\"0\" x=\"0\"></rect>
                </g>
            </svg>
        </a>
    </div>
";
        }
        // line 62
        yield "
";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 63, $this->source); })()), "bar", [], "any", false, false, false, 63), "push_page", [], "any", false, false, false, 63) && ("top" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 63, $this->source); })()), "bar", [], "any", false, false, false, 63), "placement", [], "any", false, false, false, 63)))) {
            // line 64
            yield "    <div class=\"mf-move-to-parent mf-bar-spacer mf-bar-spacer-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["props"]) || array_key_exists("props", $context) ? $context["props"] : (function () { throw new RuntimeError('Variable "props" does not exist.', 64, $this->source); })()), "bar", [], "any", false, false, false, 64), "size", [], "any", false, false, false, 64), "html", null, true);
            yield " mf-bar-spacer-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["focus"]) || array_key_exists("focus", $context) ? $context["focus"] : (function () { throw new RuntimeError('Variable "focus" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
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
        return "@MauticFocus/Builder/Bar/index.html.twig";
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
        return array (  224 => 64,  222 => 63,  219 => 62,  201 => 47,  197 => 46,  184 => 42,  174 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  158 => 36,  152 => 35,  146 => 32,  139 => 28,  131 => 25,  118 => 24,  116 => 23,  110 => 19,  107 => 18,  101 => 15,  86 => 14,  84 => 13,  81 => 12,  79 => 11,  74 => 10,  68 => 8,  66 => 7,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Bar/index.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Bar/index.html.twig");
    }
}
