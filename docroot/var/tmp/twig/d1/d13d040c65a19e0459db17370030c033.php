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

/* @MauticCore/Helper/button.html.twig */
class __TwigTemplate_aa01b31256a9583e0fad490623f4eb51 extends Template
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
        $context["default_variants"] = [];
        // line 2
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 2, $this->source); })())) == 2)) {
            // line 3
            yield "    ";
            $context["default_variants"] = ["primary", "secondary"];
        } else {
            // line 5
            yield "    ";
            $context["default_variants"] = ["primary"];
            // line 6
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 6, $this->source); })())) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 7
                yield "        ";
                $context["default_variants"] = Twig\Extension\CoreExtension::merge((isset($context["default_variants"]) || array_key_exists("default_variants", $context) ? $context["default_variants"] : (function () { throw new RuntimeError('Variable "default_variants" does not exist.', 7, $this->source); })()), ["tertiary"]);
                // line 8
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        yield "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 11, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 12
            yield "    ";
            $context["variant"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "variant", [], "any", true, true, false, 12)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "variant", [], "any", false, false, false, 12)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_variants"]) || array_key_exists("default_variants", $context) ? $context["default_variants"] : (function () { throw new RuntimeError('Variable "default_variants" does not exist.', 12, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 12), [], "array", false, false, false, 12)));
            // line 13
            yield "    ";
            $context["icon_only"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", true, true, false, 13) && CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", false, false, false, 13))) ? ("btn-icon") : (""));
            // line 14
            yield "    ";
            $context["danger_modifier"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "danger", [], "any", true, true, false, 14) && CoreExtension::getAttribute($this->env, $this->source, $context["button"], "danger", [], "any", false, false, false, 14))) ? ("btn-danger") : (""));
            // line 15
            yield "    ";
            $context["wide_modifier"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "wide", [], "any", true, true, false, 15) && CoreExtension::getAttribute($this->env, $this->source, $context["button"], "wide", [], "any", false, false, false, 15))) ? ("btn-block") : (""));
            // line 16
            yield "    ";
            $context["spin"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "spin", [], "any", true, true, false, 16) && CoreExtension::getAttribute($this->env, $this->source, $context["button"], "spin", [], "any", false, false, false, 16))) ? ("") : ("btn-nospin"));
            // line 17
            yield "    ";
            $context["button_classes"] = ["btn", ("btn-" . (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new RuntimeError('Variable "variant" does not exist.', 17, $this->source); })()))];
            // line 18
            yield "
    ";
            // line 19
            if ((isset($context["icon_only"]) || array_key_exists("icon_only", $context) ? $context["icon_only"] : (function () { throw new RuntimeError('Variable "icon_only" does not exist.', 19, $this->source); })())) {
                // line 20
                yield "        ";
                $context["button_classes"] = Twig\Extension\CoreExtension::merge((isset($context["button_classes"]) || array_key_exists("button_classes", $context) ? $context["button_classes"] : (function () { throw new RuntimeError('Variable "button_classes" does not exist.', 20, $this->source); })()), [(isset($context["icon_only"]) || array_key_exists("icon_only", $context) ? $context["icon_only"] : (function () { throw new RuntimeError('Variable "icon_only" does not exist.', 20, $this->source); })())]);
                // line 21
                yield "    ";
            }
            // line 22
            yield "    ";
            if ((isset($context["danger_modifier"]) || array_key_exists("danger_modifier", $context) ? $context["danger_modifier"] : (function () { throw new RuntimeError('Variable "danger_modifier" does not exist.', 22, $this->source); })())) {
                // line 23
                yield "        ";
                $context["button_classes"] = Twig\Extension\CoreExtension::merge((isset($context["button_classes"]) || array_key_exists("button_classes", $context) ? $context["button_classes"] : (function () { throw new RuntimeError('Variable "button_classes" does not exist.', 23, $this->source); })()), [(isset($context["danger_modifier"]) || array_key_exists("danger_modifier", $context) ? $context["danger_modifier"] : (function () { throw new RuntimeError('Variable "danger_modifier" does not exist.', 23, $this->source); })())]);
                // line 24
                yield "    ";
            }
            // line 25
            yield "    ";
            if ((isset($context["wide_modifier"]) || array_key_exists("wide_modifier", $context) ? $context["wide_modifier"] : (function () { throw new RuntimeError('Variable "wide_modifier" does not exist.', 25, $this->source); })())) {
                // line 26
                yield "        ";
                $context["button_classes"] = Twig\Extension\CoreExtension::merge((isset($context["button_classes"]) || array_key_exists("button_classes", $context) ? $context["button_classes"] : (function () { throw new RuntimeError('Variable "button_classes" does not exist.', 26, $this->source); })()), [(isset($context["wide_modifier"]) || array_key_exists("wide_modifier", $context) ? $context["wide_modifier"] : (function () { throw new RuntimeError('Variable "wide_modifier" does not exist.', 26, $this->source); })())]);
                // line 27
                yield "    ";
            }
            // line 28
            yield "    ";
            if ((isset($context["spin"]) || array_key_exists("spin", $context) ? $context["spin"] : (function () { throw new RuntimeError('Variable "spin" does not exist.', 28, $this->source); })())) {
                // line 29
                yield "        ";
                $context["button_classes"] = Twig\Extension\CoreExtension::merge((isset($context["button_classes"]) || array_key_exists("button_classes", $context) ? $context["button_classes"] : (function () { throw new RuntimeError('Variable "button_classes" does not exist.', 29, $this->source); })()), [(isset($context["spin"]) || array_key_exists("spin", $context) ? $context["spin"] : (function () { throw new RuntimeError('Variable "spin" does not exist.', 29, $this->source); })())]);
                // line 30
                yield "    ";
            }
            // line 31
            yield "
    ";
            // line 32
            $context["extra_classes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", false, true, false, 32), "class", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", false, false, false, 32), "class", [], "any", false, false, false, 32), " ")) : ([]));
            // line 33
            yield "    ";
            $context["button_classes"] = Twig\Extension\CoreExtension::merge((isset($context["button_classes"]) || array_key_exists("button_classes", $context) ? $context["button_classes"] : (function () { throw new RuntimeError('Variable "button_classes" does not exist.', 33, $this->source); })()), (isset($context["extra_classes"]) || array_key_exists("extra_classes", $context) ? $context["extra_classes"] : (function () { throw new RuntimeError('Variable "extra_classes" does not exist.', 33, $this->source); })()));
            // line 34
            yield "    ";
            $context["custom_attributes"] = "";
            // line 35
            yield "
    ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", true, true, false, 36)) {
                // line 37
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                    // line 38
                    yield "            ";
                    if (($context["attribute"] != "class")) {
                        // line 39
                        yield "                ";
                        $context["custom_attributes"] = ((((((isset($context["custom_attributes"]) || array_key_exists("custom_attributes", $context) ? $context["custom_attributes"] : (function () { throw new RuntimeError('Variable "custom_attributes" does not exist.', 39, $this->source); })()) . " ") . $context["attribute"]) . "=\"") . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html_attr")) . "\"");
                        // line 40
                        yield "            ";
                    }
                    // line 41
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "    ";
            }
            // line 43
            yield "
    ";
            // line 45
            yield "    ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", true, true, false, 45) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", false, true, false, 45), "id", [], "any", true, true, false, 45))) {
                // line 46
                yield "        ";
                $context["label_split"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 46), ".");
                // line 47
                yield "        ";
                $context["last_two"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["label_split"]) || array_key_exists("label_split", $context) ? $context["label_split"] : (function () { throw new RuntimeError('Variable "label_split" does not exist.', 47, $this->source); })()),  -2, 2);
                // line 48
                yield "        ";
                $context["id"] = Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::join((isset($context["last_two"]) || array_key_exists("last_two", $context) ? $context["last_two"] : (function () { throw new RuntimeError('Variable "last_two" does not exist.', 48, $this->source); })()), "-"), ["_" => "-"]);
                // line 49
                yield "        ";
                $context["custom_attributes"] = ((((isset($context["custom_attributes"]) || array_key_exists("custom_attributes", $context) ? $context["custom_attributes"] : (function () { throw new RuntimeError('Variable "custom_attributes" does not exist.', 49, $this->source); })()) . " id=\"") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })())) . "\"");
                // line 50
                yield "    ";
            }
            // line 51
            yield "
    ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "size", [], "any", true, true, false, 52)) {
                // line 53
                yield "        ";
                $context["custom_attributes"] = ((((isset($context["custom_attributes"]) || array_key_exists("custom_attributes", $context) ? $context["custom_attributes"] : (function () { throw new RuntimeError('Variable "custom_attributes" does not exist.', 53, $this->source); })()) . " size=\"") . CoreExtension::getAttribute($this->env, $this->source, $context["button"], "size", [], "any", false, false, false, 53)) . "\"");
                // line 54
                yield "    ";
            }
            // line 55
            yield "
    ";
            // line 56
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", true, true, false, 56) && CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", false, false, false, 56))) {
                // line 57
                yield "        ";
                $context["tooltip_placement"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "tooltip_placement", [], "any", true, true, false, 57)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "tooltip_placement", [], "any", false, false, false, 57)) : ("top"));
                // line 58
                yield "        ";
                $context["icon_attributes"] = ((((" data-toggle=\"tooltip\" title=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 58))) . "\" data-placement=\"") . (isset($context["tooltip_placement"]) || array_key_exists("tooltip_placement", $context) ? $context["tooltip_placement"] : (function () { throw new RuntimeError('Variable "tooltip_placement" does not exist.', 58, $this->source); })())) . "\"");
                // line 59
                yield "    ";
            } else {
                // line 60
                yield "        ";
                $context["icon_attributes"] = "";
                // line 61
                yield "    ";
            }
            // line 62
            yield "
    ";
            // line 63
            if (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "href", [], "any", true, true, false, 63)) {
                // line 64
                yield "        <a class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["button_classes"]) || array_key_exists("button_classes", $context) ? $context["button_classes"] : (function () { throw new RuntimeError('Variable "button_classes" does not exist.', 64, $this->source); })()), " "), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 64)), "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "href", [], "any", false, false, false, 64), "html", null, true);
                yield "\"";
                yield (isset($context["custom_attributes"]) || array_key_exists("custom_attributes", $context) ? $context["custom_attributes"] : (function () { throw new RuntimeError('Variable "custom_attributes" does not exist.', 64, $this->source); })());
                yield ">
            ";
                // line 65
                if (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon", [], "any", true, true, false, 65)) {
                    // line 66
                    yield "                <i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon", [], "any", false, false, false, 66), "html", null, true);
                    yield "\" aria-hidden=\"true\" focusable=\"false\" ";
                    yield (isset($context["icon_attributes"]) || array_key_exists("icon_attributes", $context) ? $context["icon_attributes"] : (function () { throw new RuntimeError('Variable "icon_attributes" does not exist.', 66, $this->source); })());
                    yield "></i>
            ";
                }
                // line 68
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", true, true, false, 68) &&  !(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", true, true, false, 68) && CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", false, false, false, 68)))) {
                    // line 69
                    yield "                <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 69)), "html", null, true);
                    yield "</span>
            ";
                }
                // line 71
                yield "        </a>
    ";
            } else {
                // line 73
                yield "        ";
                $context["button_type"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", false, true, false, 73), "type", [], "any", true, true, false, 73)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["button"], "attributes", [], "any", false, false, false, 73), "type", [], "any", false, false, false, 73)) : ((((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "onclick", [], "any", true, true, false, 73) && (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "onclick", [], "any", false, false, false, 73) != ""))) ? ("button") : ("submit"))));
                // line 74
                yield "        <button type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button_type"]) || array_key_exists("button_type", $context) ? $context["button_type"] : (function () { throw new RuntimeError('Variable "button_type" does not exist.', 74, $this->source); })()), "html", null, true);
                yield "\" aria-label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 74)), "html", null, true);
                yield "\" class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["button_classes"]) || array_key_exists("button_classes", $context) ? $context["button_classes"] : (function () { throw new RuntimeError('Variable "button_classes" does not exist.', 74, $this->source); })()), " "), "html", null, true);
                yield "\" onclick=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "onclick", [], "any", true, true, false, 74)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "onclick", [], "any", false, false, false, 74), "html_attr")) : (""));
                yield "\"";
                yield (isset($context["custom_attributes"]) || array_key_exists("custom_attributes", $context) ? $context["custom_attributes"] : (function () { throw new RuntimeError('Variable "custom_attributes" does not exist.', 74, $this->source); })());
                yield ">
            ";
                // line 75
                if (CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon", [], "any", true, true, false, 75)) {
                    // line 76
                    yield "                <i class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon", [], "any", false, false, false, 76), "html", null, true);
                    yield "\" aria-hidden=\"true\" focusable=\"false\" ";
                    yield (isset($context["icon_attributes"]) || array_key_exists("icon_attributes", $context) ? $context["icon_attributes"] : (function () { throw new RuntimeError('Variable "icon_attributes" does not exist.', 76, $this->source); })());
                    yield "></i>
            ";
                }
                // line 78
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", true, true, false, 78) &&  !(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", true, true, false, 78) && CoreExtension::getAttribute($this->env, $this->source, $context["button"], "icon_only", [], "any", false, false, false, 78)))) {
                    // line 79
                    yield "                <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 79)), "html", null, true);
                    yield "</span>
            ";
                }
                // line 81
                yield "        </button>
    ";
            }
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
        unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/button.html.twig";
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
        return array (  309 => 81,  303 => 79,  300 => 78,  292 => 76,  290 => 75,  277 => 74,  274 => 73,  270 => 71,  264 => 69,  261 => 68,  253 => 66,  251 => 65,  240 => 64,  238 => 63,  235 => 62,  232 => 61,  229 => 60,  226 => 59,  223 => 58,  220 => 57,  218 => 56,  215 => 55,  212 => 54,  209 => 53,  207 => 52,  204 => 51,  201 => 50,  198 => 49,  195 => 48,  192 => 47,  189 => 46,  186 => 45,  183 => 43,  180 => 42,  174 => 41,  171 => 40,  168 => 39,  165 => 38,  160 => 37,  158 => 36,  155 => 35,  152 => 34,  149 => 33,  147 => 32,  144 => 31,  141 => 30,  138 => 29,  135 => 28,  132 => 27,  129 => 26,  126 => 25,  123 => 24,  120 => 23,  117 => 22,  114 => 21,  111 => 20,  109 => 19,  106 => 18,  103 => 17,  100 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  71 => 11,  68 => 10,  61 => 8,  58 => 7,  53 => 6,  50 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/button.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/button.html.twig");
    }
}
