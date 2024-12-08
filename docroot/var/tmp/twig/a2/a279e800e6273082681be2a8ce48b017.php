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

/* @MauticCore/Helper/_tag.html.twig */
class __TwigTemplate_fa5b7d4350db632c18a55a06f9d30d1e extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 2
            yield "    ";
            $context["type"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 2), "read-only")) : ("read-only"));
            // line 3
            yield "    ";
            $context["color"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "color", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "color", [], "any", false, false, false, 3), "gray")) : ("gray"));
            // line 4
            yield "    ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon", [], "any", false, false, false, 4), "")) : (""));
            // line 5
            yield "    ";
            $context["attributes"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "attributes", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "attributes", [], "any", false, false, false, 5), [])) : ([]));
            // line 6
            yield "    ";
            $context["icon_only"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon_only", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "icon_only", [], "any", false, false, false, 6), false)) : (false));
            // line 7
            yield "
    ";
            // line 9
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", true, true, false, 9)) {
                // line 10
                yield "        ";
                $context["id"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10);
                // line 11
                yield "    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 11)) {
                // line 12
                yield "        ";
                $context["parts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 12), ".");
                // line 13
                yield "        ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 13, $this->source); })())) >= 2)) {
                    // line 14
                    yield "            ";
                    $context["id"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["parts"]) || array_key_exists("parts", $context) ? $context["parts"] : (function () { throw new RuntimeError('Variable "parts" does not exist.', 14, $this->source); })()),  -2, 2), "-"), [" " => "-"]));
                    // line 15
                    yield "        ";
                } else {
                    // line 16
                    yield "            ";
                    $context["id"] = ("tag-" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 16), [" " => "-", "." => "-"])));
                    // line 17
                    yield "        ";
                }
                // line 18
                yield "    ";
            } else {
                // line 19
                yield "        ";
                $context["id"] = ("tag-" . Twig\Extension\CoreExtension::random($this->env->getCharset()));
                // line 20
                yield "    ";
            }
            // line 21
            yield "
    ";
            // line 22
            $context["translated_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "label", [], "any", false, false, false, 22));
            // line 23
            yield "    ";
            $context["classes"] = ["label", ("label-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 23, $this->source); })()))];
            // line 24
            yield "
    ";
            // line 26
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 26)) {
                // line 27
                yield "        ";
                $context["classes"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 27, $this->source); })()), "class", [], "any", false, false, false, 27))) ? (Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 27, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 27, $this->source); })()), "class", [], "any", false, false, false, 27))) : (Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 27, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 27, $this->source); })()), "class", [], "any", false, false, false, 27)])));
                // line 28
                yield "    ";
            }
            // line 29
            yield "
    ";
            // line 30
            $context["other_attributes"] = Twig\Extension\CoreExtension::filter($this->env, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 30, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 30, $this->source); })()) != "class") && ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 30, $this->source); })()) != "id")); });
            // line 31
            yield "    ";
            $context["truncated_label"] = (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 31, $this->source); })());
            // line 32
            yield "    ";
            $context["label_tooltip"] = "";
            // line 33
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 33, $this->source); })())) > 27)) {
                // line 34
                yield "        ";
                $context["truncated_label"] = (Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 34, $this->source); })()), 0, 24) . "...");
                // line 35
                yield "        ";
                $context["label_tooltip"] = (isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 35, $this->source); })());
                // line 36
                yield "    ";
            }
            // line 37
            yield "
    ";
            // line 39
            yield "    ";
            $context["wrapper_tag"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "href", [], "any", true, true, false, 39)) ? ("a") : ("div"));
            // line 40
            yield "    <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapper_tag"]) || array_key_exists("wrapper_tag", $context) ? $context["wrapper_tag"] : (function () { throw new RuntimeError('Variable "wrapper_tag" does not exist.', 40, $this->source); })()), "html", null, true);
            yield " id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 40, $this->source); })()), " "), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\"
        ";
            // line 41
            if (((isset($context["wrapper_tag"]) || array_key_exists("wrapper_tag", $context) ? $context["wrapper_tag"] : (function () { throw new RuntimeError('Variable "wrapper_tag" does not exist.', 41, $this->source); })()) == "a")) {
                yield " href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 41, $this->source); })()), "href", [], "any", false, false, false, 41), "html", null, true);
                yield "\" ";
            }
            // line 42
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["other_attributes"]) || array_key_exists("other_attributes", $context) ? $context["other_attributes"] : (function () { throw new RuntimeError('Variable "other_attributes" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["attr_key"] => $context["attr_value"]) {
                // line 43
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr_key"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr_value"], "html", null, true);
                yield "\"
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attr_key'], $context['attr_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield ">

        ";
            // line 46
            if ((isset($context["icon_only"]) || array_key_exists("icon_only", $context) ? $context["icon_only"] : (function () { throw new RuntimeError('Variable "icon_only" does not exist.', 46, $this->source); })())) {
                // line 47
                yield "            <i class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "\" aria-hidden=\"true\" focusable=\"false\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 47, $this->source); })()), "html", null, true);
                yield "\" data-toggle=\"tooltip\" tooltip-placement=\"top\"></i>
        ";
            } else {
                // line 49
                yield "            ";
                if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 49, $this->source); })()) == "dismissible")) {
                    // line 50
                    yield "                ";
                    if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 50, $this->source); })())) {
                        // line 51
                        yield "                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 51, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                ";
                    }
                    // line 53
                    yield "                <span aria-hidden=\"true\" ";
                    if ((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 53, $this->source); })())) {
                        yield " title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 53, $this->source); })()), "html", null, true);
                        yield "\" data-toggle=\"tooltip\" tooltip-placement=\"top\"";
                    }
                    yield ">
                    ";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 54, $this->source); })()), "html", null, true);
                    yield "
                </span>
                <button type=\"button\" aria-label=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.builder.storage.dismiss.button"), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.builder.storage.dismiss.button"), "html", null, true);
                    yield "\">
                    <i class=\"ri-close-line\" aria-hidden=\"true\" focusable=\"false\"></i>
                </button>

            ";
                } elseif ((                // line 60
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 60, $this->source); })()) == "read-only")) {
                    // line 61
                    yield "                ";
                    if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 61, $this->source); })())) {
                        // line 62
                        yield "                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 62, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                ";
                    }
                    // line 64
                    yield "                <span aria-hidden=\"true\" ";
                    if ((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 64, $this->source); })())) {
                        yield " title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 64, $this->source); })()), "html", null, true);
                        yield "\" data-toggle=\"tooltip\" tooltip-placement=\"top\"";
                    }
                    yield ">
                    ";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 65, $this->source); })()), "html", null, true);
                    yield "
                </span>

            ";
                } elseif ((                // line 68
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 68, $this->source); })()) == "selectable")) {
                    // line 69
                    yield "                <button type=\"button\" aria-pressed=\"false\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 69, $this->source); })())) ?: ((isset($context["translated_label"]) || array_key_exists("translated_label", $context) ? $context["translated_label"] : (function () { throw new RuntimeError('Variable "translated_label" does not exist.', 69, $this->source); })()))), "html", null, true);
                    yield "\">
                    ";
                    // line 70
                    if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 70, $this->source); })())) {
                        // line 71
                        yield "                        <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 71, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                    ";
                    }
                    // line 73
                    yield "                    <span aria-hidden=\"true\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 73, $this->source); })()), "html", null, true);
                    yield "</span>
                </button>

            ";
                } else {
                    // line 77
                    yield "                ";
                    if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 77, $this->source); })())) {
                        // line 78
                        yield "                    <i class=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 78, $this->source); })()), "html", null, true);
                        yield "\" aria-hidden=\"true\" focusable=\"false\"></i>
                ";
                    }
                    // line 80
                    yield "                <span aria-hidden=\"true\" ";
                    if ((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 80, $this->source); })())) {
                        yield " title=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label_tooltip"]) || array_key_exists("label_tooltip", $context) ? $context["label_tooltip"] : (function () { throw new RuntimeError('Variable "label_tooltip" does not exist.', 80, $this->source); })()), "html", null, true);
                        yield "\"";
                    }
                    yield ">
                    ";
                    // line 81
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["truncated_label"]) || array_key_exists("truncated_label", $context) ? $context["truncated_label"] : (function () { throw new RuntimeError('Variable "truncated_label" does not exist.', 81, $this->source); })()), "html", null, true);
                    yield "
                </span>
            ";
                }
                // line 84
                yield "        ";
            }
            // line 85
            yield "    </";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapper_tag"]) || array_key_exists("wrapper_tag", $context) ? $context["wrapper_tag"] : (function () { throw new RuntimeError('Variable "wrapper_tag" does not exist.', 85, $this->source); })()), "html", null, true);
            yield ">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/_tag.html.twig";
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
        return array (  307 => 85,  304 => 84,  298 => 81,  289 => 80,  283 => 78,  280 => 77,  272 => 73,  266 => 71,  264 => 70,  259 => 69,  257 => 68,  251 => 65,  242 => 64,  236 => 62,  233 => 61,  231 => 60,  222 => 56,  217 => 54,  208 => 53,  202 => 51,  199 => 50,  196 => 49,  188 => 47,  186 => 46,  182 => 44,  171 => 43,  166 => 42,  160 => 41,  149 => 40,  146 => 39,  143 => 37,  140 => 36,  137 => 35,  134 => 34,  131 => 33,  128 => 32,  125 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  111 => 26,  108 => 24,  105 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 7,  58 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/_tag.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/_tag.html.twig");
    }
}
