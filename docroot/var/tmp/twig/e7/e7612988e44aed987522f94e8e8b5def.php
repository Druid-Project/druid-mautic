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

/* @MauticCore/Helper/tabs.html.twig */
class __TwigTemplate_d232803dd251ee63fab8f6f0dfec0c9b extends Template
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
        $context["overflow"] = ((array_key_exists("overflow", $context)) ? ("nav-overflow-tabs") : (""));
        // line 2
        if ( !array_key_exists("verticalTabColWidth", $context)) {
            // line 3
            yield "    ";
            $context["verticalTabColWidth"] = 3;
        }
        // line 5
        $context["verticalContentColWidth"] = (12 - (isset($context["verticalTabColWidth"]) || array_key_exists("verticalTabColWidth", $context) ? $context["verticalTabColWidth"] : (function () { throw new RuntimeError('Variable "verticalTabColWidth" does not exist.', 5, $this->source); })()));
        // line 6
        [$context["vertical"], $context["button"]] =         [((array_key_exists("vertical", $context)) ? ((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 6, $this->source); })())) : ("")), ((array_key_exists("button", $context)) ? ((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 6, $this->source); })())) : ([]))];
        // line 7
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "<div class=\"box-layout\">
";
        }
        // line 10
        yield "<div class=\"tab-container ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overflow"]) || array_key_exists("overflow", $context) ? $context["overflow"] : (function () { throw new RuntimeError('Variable "overflow" does not exist.', 10, $this->source); })()), "html", null, true);
        (( !Twig\Extension\CoreExtension::testEmpty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 10, $this->source); })()))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" height-auto col-xs-" . (isset($context["verticalTabColWidth"]) || array_key_exists("verticalTabColWidth", $context) ? $context["verticalTabColWidth"] : (function () { throw new RuntimeError('Variable "verticalTabColWidth" does not exist.', 10, $this->source); })())) . " pr-0 bdr-r"), "html", null, true)) : (yield ""));
        yield "\">
    ";
        // line 11
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 11, $this->source); })()))) {
            // line 12
            yield "    <div class=\"tab-button";
            (( !Twig\Extension\CoreExtension::testEmpty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 12, $this->source); })()))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" tab-button-" . (isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 12, $this->source); })())), "html", null, true)) : (yield ""));
            yield "\">
        <a href=\"javascript:void(0);\"
           role=\"tab\"
           class=\"btn btn-primary btn-lg btn-block btn-nospin\"
           id=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\"
           style=\"border-radius: 0;\"
            ";
            // line 18
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 18, $this->source); })()), "attr", [], "any", false, false, false, 18))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 18, $this->source); })()), "attr", [], "any", false, false, false, 18), "html", null, true);
            }
            // line 19
            yield "        >
            <i class=\"ri-fw ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 20, $this->source); })()), "icon", [], "any", false, false, false, 20), "html", null, true);
            yield "\"></i>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 20, $this->source); })()), "text", [], "any", false, false, false, 20), "html", null, true);
            yield "
        </a>
    ";
            // line 22
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 22, $this->source); })()), "extra", [], "any", false, false, false, 22))) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 22, $this->source); })()), "extra", [], "any", false, false, false, 22), "html", null, true);
            }
            // line 23
            yield "    </div>
    ";
        }
        // line 25
        yield "    <ul";
        (((array_key_exists("deletable", $context) && $this->env->getTest('string')->getCallable()((isset($context["deletable"]) || array_key_exists("deletable", $context) ? $context["deletable"] : (function () { throw new RuntimeError('Variable "deletable" does not exist.', 25, $this->source); })())))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-delete-action=\"" . (isset($context["deletable"]) || array_key_exists("deletable", $context) ? $context["deletable"] : (function () { throw new RuntimeError('Variable "deletable" does not exist.', 25, $this->source); })())) . "\" "), "html", null, true)) : (yield ""));
        yield "
        ";
        // line 26
        (((array_key_exists("sortable", $context) && $this->env->getTest('string')->getCallable()((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 26, $this->source); })())))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" data-sort-action=\"" . (isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 26, $this->source); })())) . "\" "), "html", null, true)) : (yield ""));
        yield "
            class=\"";
        // line 27
        yield (((array_key_exists("deletable", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["deletable"]) || array_key_exists("deletable", $context) ? $context["deletable"] : (function () { throw new RuntimeError('Variable "deletable" does not exist.', 27, $this->source); })())))) ? ("nav-deletable ") : (""));
        yield "nav nav-tabs nav-tabs-contained ";
        (( !Twig\Extension\CoreExtension::testEmpty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 27, $this->source); })()))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("tabs-" . (isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 27, $this->source); })())) . " pt-0 bdr-b-wdh-0  bdr-r-wdh-0"), "html", null, true)) : (yield "tabs-horizontal"));
        yield (((array_key_exists("sortable", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["sortable"]) || array_key_exists("sortable", $context) ? $context["sortable"] : (function () { throw new RuntimeError('Variable "sortable" does not exist.', 27, $this->source); })())))) ? (" sortable") : (""));
        yield "\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["tabKey"] => $context["tab"]) {
            // line 29
            yield "            ";
            $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "class", [], "any", true, true, false, 29) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "class", [], "any", false, false, false, 29)))) ? ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "class", [], "any", false, false, false, 29))) : (""));
            // line 30
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attr", [], "any", true, true, false, 30) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attr", [], "any", false, false, false, 30)))) {
                // line 31
                yield "                ";
                $context["attr"] = [];
                // line 32
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attr", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 33
                    yield "                    ";
                    $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["aatr"]) || array_key_exists("aatr", $context) ? $context["aatr"] : (function () { throw new RuntimeError('Variable "aatr" does not exist.', 33, $this->source); })()), [((($context["key"] . "=\"") . $context["val"]) . "\"")]);
                    // line 34
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "                ";
                $context["tab"] = Twig\Extension\CoreExtension::merge($context["tab"], ["attr" => Twig\Extension\CoreExtension::join((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 35, $this->source); })()), " ")]);
                // line 36
                yield "            ";
            }
            // line 37
            yield "            ";
            $context["attr"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attr", [], "any", true, true, false, 37) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attr", [], "any", false, false, false, 37)))) ? ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attr", [], "array", false, false, false, 37))) : (""));
            // line 38
            yield "            ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "icon", [], "array", true, true, false, 38)) {
                // line 39
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "published", [], "any", true, true, false, 39) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "published", [], "array", false, false, false, 39)))) {
                    // line 40
                    yield "                    ";
                    $context["tab"] = Twig\Extension\CoreExtension::merge($context["tab"], ["icon" => "ri-checkbox-circle-line text-success"]);
                    // line 41
                    yield "                ";
                } else {
                    // line 42
                    yield "                    ";
                    $context["tab"] = Twig\Extension\CoreExtension::merge($context["tab"], ["icon" => "ri-checkbox-circle-line text-muted"]);
                    // line 43
                    yield "                ";
                }
                // line 44
                yield "            ";
            }
            // line 45
            yield "            <li data-tab-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "id", [], "array", false, false, false, 45), "html", null, true);
            yield "\" class=\"";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "array", false, false, false, 45))) {
                yield "active";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 45, $this->source); })()), "html", null, true);
            yield ">
                <a href=\"#";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "id", [], "array", false, false, false, 46), "html", null, true);
            yield "\" role=\"tab\" data-toggle=\"tab\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 46, $this->source); })()), "html", null, true);
            yield "\">
                    <span>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "array", false, false, false, 47), "html", null, true);
            yield "</span>
                    ";
            // line 48
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "icon", [], "any", false, false, false, 48))) {
                // line 49
                yield "                        <i class=\"ri-fw ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "icon", [], "array", false, false, false, 49), "html", null, true);
                yield "\"></i>
                    ";
            }
            // line 51
            yield "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['tabKey'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "    </ul>
</div>
<div class=\"tab-content";
        // line 56
        (( !Twig\Extension\CoreExtension::testEmpty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 56, $this->source); })()))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((" col-xs-" . (isset($context["verticalContentColWidth"]) || array_key_exists("verticalContentColWidth", $context) ? $context["verticalContentColWidth"] : (function () { throw new RuntimeError('Variable "verticalContentColWidth" does not exist.', 56, $this->source); })())) . " pl-0 pt-0 height-auto"), "html", null, true)) : (yield " pa-md"));
        yield "\">
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 58
            yield "        ";
            $context["containerClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerClass", [], "any", true, true, false, 58) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerClass", [], "array", false, false, false, 58)))) ? ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerClass", [], "array", false, false, false, 58))) : (""));
            // line 59
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", true, true, false, 59) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 59)))) {
                // line 60
                yield "            ";
                $context["attr"] = [];
                // line 61
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 61));
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 62
                    yield "                ";
                    $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 62, $this->source); })()), [((($context["key"] . "=\"") . $context["val"]) . "\"")]);
                    // line 63
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['val'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                yield "            ";
                $context["tab"] = Twig\Extension\CoreExtension::merge($context["tab"], ["containerAttr" => Twig\Extension\CoreExtension::join((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 64, $this->source); })()), " ")]);
                // line 65
                yield "        ";
            }
            // line 66
            yield "        ";
            $context["containerAttr"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 66))) ? ((" " . CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "containerAttr", [], "array", false, false, false, 66))) : (""));
            // line 67
            yield "        <div class=\"tab-pane fade ";
            yield (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "active", [], "array", false, false, false, 67))) ? ("in active") : (""));
            yield " bdr-w-0";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerClass"]) || array_key_exists("containerClass", $context) ? $context["containerClass"] : (function () { throw new RuntimeError('Variable "containerClass" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "id", [], "array", false, false, false, 67), "html", null, true);
            yield "\"";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["containerAttr"]) || array_key_exists("containerAttr", $context) ? $context["containerAttr"] : (function () { throw new RuntimeError('Variable "containerAttr" does not exist.', 67, $this->source); })()));
            yield ">
            ";
            // line 68
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "array", false, false, false, 68);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "
    ";
        // line 72
        if ((array_key_exists("noContentKey", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["noContentKey"]) || array_key_exists("noContentKey", $context) ? $context["noContentKey"] : (function () { throw new RuntimeError('Variable "noContentKey" does not exist.', 72, $this->source); })())))) {
            // line 73
            yield "    <div class=\"placeholder";
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 73, $this->source); })()))) ? ("") : (" hide"));
            yield "\">
        <div class=\"alert alert-warning\">
            ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["noContentKey"]) || array_key_exists("noContentKey", $context) ? $context["noContentKey"] : (function () { throw new RuntimeError('Variable "noContentKey" does not exist.', 75, $this->source); })())), "html", null, true);
            yield "
        </div>
    </div>
    ";
        }
        // line 79
        yield "</div>
";
        // line 80
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["vertical"]) || array_key_exists("vertical", $context) ? $context["vertical"] : (function () { throw new RuntimeError('Variable "vertical" does not exist.', 80, $this->source); })()))) {
            // line 81
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/tabs.html.twig";
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
        return array (  301 => 81,  299 => 80,  296 => 79,  289 => 75,  283 => 73,  281 => 72,  278 => 71,  269 => 68,  258 => 67,  255 => 66,  252 => 65,  249 => 64,  243 => 63,  240 => 62,  235 => 61,  232 => 60,  229 => 59,  226 => 58,  222 => 57,  218 => 56,  214 => 54,  206 => 51,  200 => 49,  198 => 48,  194 => 47,  188 => 46,  176 => 45,  173 => 44,  170 => 43,  167 => 42,  164 => 41,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  149 => 36,  146 => 35,  140 => 34,  137 => 33,  132 => 32,  129 => 31,  126 => 30,  123 => 29,  119 => 28,  112 => 27,  108 => 26,  103 => 25,  99 => 23,  95 => 22,  88 => 20,  85 => 19,  81 => 18,  76 => 16,  68 => 12,  66 => 11,  60 => 10,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/tabs.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/tabs.html.twig");
    }
}
