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

/* @MauticCore/Helper/toggletip.html.twig */
class __TwigTemplate_ce338befb152d52c8d4f0fb35adbc83c extends Template
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
        $context["classes"] = ["btn", "btn-nospin", "btn-ghost"];
        // line 2
        $context["is_icon_only"] =  !(array_key_exists("label", $context) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 2, $this->source); })()));
        // line 3
        $context["size_class"] = ((((isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 3, $this->source); })()) &&  !(array_key_exists("size", $context) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 3, $this->source); })())))) ? ("btn-toggletip") : ((((array_key_exists("size", $context) && (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 3, $this->source); })()))) ? (("btn-" . (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 3, $this->source); })()))) : ("btn-xs"))));
        // line 4
        $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 4, $this->source); })()), [(isset($context["size_class"]) || array_key_exists("size_class", $context) ? $context["size_class"] : (function () { throw new RuntimeError('Variable "size_class" does not exist.', 4, $this->source); })())]);
        // line 5
        yield "
";
        // line 6
        if ((isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "    ";
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 7, $this->source); })()), ["btn-icon", ((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 7, $this->source); })()), "ri-information-2-line")) : ("ri-information-2-line")), "ri-1x"]);
        } else {
            // line 9
            yield "    ";
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 9, $this->source); })()), ["gap-5"]);
        }
        // line 11
        yield "
<button type=\"button\"
    class=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 13, $this->source); })()), " "), "html", null, true);
        yield "\"
    data-toggle=\"popover\"
    data-container=\"body\"
    data-placement=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("placement", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 16, $this->source); })()), "right")) : ("right")), "html", null, true);
        yield "\"
    data-html=\"";
        // line 17
        yield (((array_key_exists("html", $context) && (isset($context["html"]) || array_key_exists("html", $context) ? $context["html"] : (function () { throw new RuntimeError('Variable "html" does not exist.', 17, $this->source); })()))) ? ("true") : ("false"));
        yield "\"
    data-trigger=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("trigger", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["trigger"]) || array_key_exists("trigger", $context) ? $context["trigger"] : (function () { throw new RuntimeError('Variable "trigger" does not exist.', 18, $this->source); })()), "focus")) : ("focus")), "html", null, true);
        yield "\"
    ";
        // line 19
        if ((array_key_exists("selector", $context) && (isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 19, $this->source); })()))) {
            yield " data-selector=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selector"]) || array_key_exists("selector", $context) ? $context["selector"] : (function () { throw new RuntimeError('Variable "selector" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "\" ";
        }
        // line 20
        yield "    ";
        if ((array_key_exists("title", $context) && (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 20, $this->source); })()))) {
            yield " title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 20, $this->source); })())), "html", null, true);
            yield "\" ";
        }
        // line 21
        yield "    ";
        if ((array_key_exists("content", $context) && (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 21, $this->source); })()))) {
            yield " data-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 21, $this->source); })())), "html", null, true);
            yield "\" ";
        }
        // line 22
        yield "    aria-haspopup=\"true\"
    aria-label=\"";
        // line 23
        if ((( !(isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 23, $this->source); })()) && array_key_exists("label", $context)) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 23, $this->source); })()))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 23, $this->source); })())), "html", null, true);
        } elseif ((isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 23, $this->source); })())) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.toggletip"), "html", null, true);
        }
        yield "\"
>
    ";
        // line 25
        if ( !(isset($context["is_icon_only"]) || array_key_exists("is_icon_only", $context) ? $context["is_icon_only"] : (function () { throw new RuntimeError('Variable "is_icon_only" does not exist.', 25, $this->source); })())) {
            // line 26
            yield "        <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("icon", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 26, $this->source); })()), "ri-information-2-line")) : ("ri-information-2-line")), "html", null, true);
            yield " ri-1x\"></i>
    ";
        }
        // line 28
        yield "    ";
        if ((array_key_exists("label", $context) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 28, $this->source); })()))) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 28, $this->source); })())), "html", null, true);
            yield " ";
        }
        // line 29
        yield "</button>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/toggletip.html.twig";
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
        return array (  132 => 29,  125 => 28,  119 => 26,  117 => 25,  108 => 23,  105 => 22,  98 => 21,  91 => 20,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  67 => 13,  63 => 11,  59 => 9,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/toggletip.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/toggletip.html.twig");
    }
}
