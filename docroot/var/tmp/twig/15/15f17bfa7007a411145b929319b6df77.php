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

/* @MauticCore/Helper/confirm.html.twig */
class __TwigTemplate_0e6a3d03ef4587f0b51aadc80e0738d3 extends Template
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
        if (array_key_exists("template", $context)) {
            // line 2
            $context["btnClass"] = ((array_key_exists("btnClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 2, $this->source); })()), "danger")) : ("danger"));
            // line 3
            if (((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 3, $this->source); })()) === "batchdelete")) {
                // line 4
                $context["confirmText"] = ((array_key_exists("confirmText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 4, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete")));
                // line 5
                $context["iconClass"] = ((array_key_exists("iconClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 5, $this->source); })()), "ri-delete-bin-line text-danger")) : ("ri-delete-bin-line text-danger"));
                // line 6
                $context["btnText"] = ((array_key_exists("btnText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 6, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete_selected"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete_selected")));
                // line 7
                $context["confirmCallback"] = ((array_key_exists("confirmCallback", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 7, $this->source); })()), "executeBatchAction")) : ("executeBatchAction"));
                // line 8
                yield "        ";
                $context["wrapOpeningTag"] = ((array_key_exists("wrapOpeningTag", $context)) ? ((isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 8, $this->source); })())) : (""));
                // line 9
                yield "        ";
                $context["wrapClosingTag"] = ((array_key_exists("wrapClosingTag", $context)) ? ((isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 9, $this->source); })())) : (""));
                // line 10
                $context["precheck"] = ((array_key_exists("precheck", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 10, $this->source); })()), "batchActionPrecheck")) : ("batchActionPrecheck"));
            } elseif ((            // line 11
(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 11, $this->source); })()) === "delete")) {
                // line 12
                $context["confirmText"] = ((array_key_exists("confirmText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 12, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete")));
                // line 13
                $context["iconClass"] = ((array_key_exists("iconClass", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 13, $this->source); })()), "ri-delete-bin-line")) : ("ri-delete-bin-line"));
                // line 14
                $context["btnText"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("btnText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 14, $this->source); })()), "mautic.core.form.delete")) : ("mautic.core.form.delete")));
            }
        }
        // line 18
        $context["btnClass"] = (($context["btnClass"]) ?? ("btn btn-ghost"));
        // line 20
        $context["btnTextAttr"] = ((array_key_exists("btnTextAttr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 20, $this->source); })()), "")) : (""));
        // line 22
        if (array_key_exists("btnTextClass", $context)) {
            // line 23
            $context["btnTextAttr"] = ((((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 23, $this->source); })()) . " class=\"") . (isset($context["btnTextClass"]) || array_key_exists("btnTextClass", $context) ? $context["btnTextClass"] : (function () { throw new RuntimeError('Variable "btnTextClass" does not exist.', 23, $this->source); })())) . "\"");
        }
        // line 26
        $context["confirmAction"] = ((array_key_exists("confirmAction", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 26, $this->source); })()), "javascript:void(0);")) : ("javascript:void(0);"));
        // line 28
        if (( !array_key_exists("confirmCallback", $context) &&  !((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 28, $this->source); })()) === "javascript:void(0);"))) {
            // line 29
            $context["confirmCallback"] = "executeAction";
        }
        // line 32
        $context["cancelText"] = ((array_key_exists("cancelText", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 32, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel")));
        // line 34
        $context["cancelCallback"] = ((array_key_exists("cancelCallback", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 34, $this->source); })()), "dismissConfirmation")) : ("dismissConfirmation"));
        // line 36
        $context["attr"] = ((array_key_exists("attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 36, $this->source); })()), [])) : ([]));
        // line 37
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 37, $this->source); })()))) {
            // line 38
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), ["data-confirm-callback" => (isset($context["confirmCallback"]) || array_key_exists("confirmCallback", $context) ? $context["confirmCallback"] : (function () { throw new RuntimeError('Variable "confirmCallback" does not exist.', 38, $this->source); })())]);
        }
        // line 40
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 40, $this->source); })()))) {
            // line 41
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), ["data-cancel-text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cancelText"]) || array_key_exists("cancelText", $context) ? $context["cancelText"] : (function () { throw new RuntimeError('Variable "cancelText" does not exist.', 41, $this->source); })()), "js")]);
        }
        // line 43
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 43, $this->source); })()))) {
            // line 44
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 44, $this->source); })()), ["data-confirm-text" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 44, $this->source); })()), "js")]);
        }
        // line 46
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 46, $this->source); })()))) {
            // line 47
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 47, $this->source); })()), ["data-cancel-callback" => (isset($context["cancelCallback"]) || array_key_exists("cancelCallback", $context) ? $context["cancelCallback"] : (function () { throw new RuntimeError('Variable "cancelCallback" does not exist.', 47, $this->source); })())]);
        }
        // line 49
        if ((array_key_exists("target", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 49, $this->source); })())))) {
            // line 50
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 50, $this->source); })()), ["data-target" => (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 50, $this->source); })())]);
        }
        // line 53
        $context["tag"] = ((array_key_exists("tag", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 53, $this->source); })()), "a")) : ("a"));
        // line 54
        $context["buttonType"] = ((("button" === (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 54, $this->source); })()))) ? (" type=\"button\"") : (""));
        // line 56
        if ( !array_key_exists("wrapOpeningTag", $context)) {
            // line 57
            yield "    ";
            $context["wrapOpeningTag"] = "";
            // line 58
            yield "    ";
            $context["wrapClosingTag"] = "";
        }
        // line 61
        $context["tooltipAttr"] = "";
        // line 62
        if (array_key_exists("tooltip", $context)) {
            // line 63
            yield "    ";
            if ( !array_key_exists("tooltipPosition", $context)) {
                // line 64
                yield "        ";
                $context["tooltipPosition"] = "left";
                // line 65
                yield "    ";
            }
            // line 66
            yield "    ";
            $context["tooltipAttr"] = ((((" data-toogle=\"tooltip\" title=\"" . (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 66, $this->source); })())) . "\" data-placement=\"") . (isset($context["tooltipPosition"]) || array_key_exists("tooltipPosition", $context) ? $context["tooltipPosition"] : (function () { throw new RuntimeError('Variable "tooltipPosition" does not exist.', 66, $this->source); })())) . "\"");
        }
        // line 69
        $context["precheck"] = ((array_key_exists("precheck", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 69, $this->source); })()), "")) : (""));
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapOpeningTag"]) || array_key_exists("wrapOpeningTag", $context) ? $context["wrapOpeningTag"] : (function () { throw new RuntimeError('Variable "wrapOpeningTag" does not exist.', 70, $this->source); })()), "html", null, true);
        yield "
<";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 71, $this->source); })()), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "
    id=\"delete\"
    class=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "\"
    href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmAction"]) || array_key_exists("confirmAction", $context) ? $context["confirmAction"] : (function () { throw new RuntimeError('Variable "confirmAction" does not exist.', 74, $this->source); })()), "html", null, true);
        yield "\"
    data-toggle=\"confirmation\"
    data-precheck=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["precheck"]) || array_key_exists("precheck", $context) ? $context["precheck"] : (function () { throw new RuntimeError('Variable "precheck" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\"
    data-message=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 77, $this->source); })()));
        yield "\"
    ";
        // line 78
        if (!CoreExtension::inFilter("data-confirm-text", Twig\Extension\CoreExtension::keys((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 78, $this->source); })())))) {
            yield "data-confirm-text=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmText"]) || array_key_exists("confirmText", $context) ? $context["confirmText"] : (function () { throw new RuntimeError('Variable "confirmText" does not exist.', 78, $this->source); })()));
            yield "\"";
        }
        // line 79
        yield "    ";
        yield Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 79, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return  !Twig\Extension\CoreExtension::testEmpty((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 79, $this->source); })())); }), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return ((((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 79, $this->source); })()) . "=\"") . (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 79, $this->source); })())) . "\""); }), " ");
        yield ">
<span";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tooltipAttr"]) || array_key_exists("tooltipAttr", $context) ? $context["tooltipAttr"] : (function () { throw new RuntimeError('Variable "tooltipAttr" does not exist.', 80, $this->source); })()), "html", null, true);
        yield ">
    ";
        // line 81
        if (array_key_exists("iconClass", $context)) {
            // line 82
            yield "        <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 82, $this->source); })()), "html", null, true);
            yield "\"></i>
    ";
        }
        // line 84
        yield "    ";
        if (array_key_exists("btnText", $context)) {
            // line 85
            yield "        <span";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnTextAttr"]) || array_key_exists("btnTextAttr", $context) ? $context["btnTextAttr"] : (function () { throw new RuntimeError('Variable "btnTextAttr" does not exist.', 85, $this->source); })()), "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "</span>
    ";
        }
        // line 87
        yield "</span>
</";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 88, $this->source); })()), "html", null, true);
        yield ">
";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["wrapClosingTag"]) || array_key_exists("wrapClosingTag", $context) ? $context["wrapClosingTag"] : (function () { throw new RuntimeError('Variable "wrapClosingTag" does not exist.', 89, $this->source); })()), "html", null, true);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/confirm.html.twig";
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
        return array (  221 => 89,  217 => 88,  214 => 87,  206 => 85,  203 => 84,  197 => 82,  195 => 81,  191 => 80,  186 => 79,  180 => 78,  176 => 77,  172 => 76,  167 => 74,  163 => 73,  157 => 71,  153 => 70,  151 => 69,  147 => 66,  144 => 65,  141 => 64,  138 => 63,  136 => 62,  134 => 61,  130 => 58,  127 => 57,  125 => 56,  123 => 54,  121 => 53,  118 => 50,  116 => 49,  113 => 47,  111 => 46,  108 => 44,  106 => 43,  103 => 41,  101 => 40,  98 => 38,  96 => 37,  94 => 36,  92 => 34,  90 => 32,  87 => 29,  85 => 28,  83 => 26,  80 => 23,  78 => 22,  76 => 20,  74 => 18,  70 => 14,  68 => 13,  66 => 12,  64 => 11,  62 => 10,  59 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/confirm.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/confirm.html.twig");
    }
}
