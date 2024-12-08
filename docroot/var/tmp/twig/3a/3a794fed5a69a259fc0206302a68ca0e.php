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

/* @MauticCore/Helper/publishstatus_icon.html.twig */
class __TwigTemplate_960ca390c3f66d81bcfcab519ff693e8 extends Template
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
        // line 12
        $context["query"] = ((array_key_exists("query", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), "")) : (""));
        // line 13
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 13, $this->source); })()), "ri-lg")) : ("ri-lg"));
        // line 14
        $context["onclick"] = ((array_key_exists("onclick", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 14, $this->source); })()), "")) : (""));
        // line 15
        $context["attributes"] = ((array_key_exists("attributes", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 15, $this->source); })()), [])) : ([]));
        // line 16
        $context["transKeys"] = ((array_key_exists("transKeys", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["transKeys"]) || array_key_exists("transKeys", $context) ? $context["transKeys"] : (function () { throw new RuntimeError('Variable "transKeys" does not exist.', 16, $this->source); })()), [])) : ([]));
        // line 17
        $context["status"] = ((array_key_exists("status", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 17, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "publishStatus", [], "any", false, false, false, 17))) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "publishStatus", [], "any", false, false, false, 17)));
        // line 18
        $context["text"] = ((array_key_exists("text", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 18, $this->source); })()), "")) : (""));
        // line 19
        $context["icon"] = ((array_key_exists("text", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 19, $this->source); })()), "")) : (""));
        // line 21
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()))) {
            // line 22
            $context["queryParam"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\CoreHelpersExtension']->parseString((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 22, $this->source); })()));
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["queryParam"] ?? null), "customToggle", [], "any", true, true, false, 23)) {
                // line 24
                yield "    ";
                // line 25
                $context["status"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["queryParam"]) || array_key_exists("queryParam", $context) ? $context["queryParam"] : (function () { throw new RuntimeError('Variable "queryParam" does not exist.', 25, $this->source); })()), "customToggle", [], "array", false, false, false, 25), [], "any", false, false, false, 25);
            }
        }
        // line 30
        if (((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 30, $this->source); })()) === "published")) {
            // line 31
            $context["icon"] = "ri-toggle-fill text-success";
            // line 32
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.active");
        } elseif ((        // line 33
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 33, $this->source); })()) === "unpublished")) {
            // line 34
            $context["icon"] = "ri-toggle-line text-danger";
            // line 35
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.inactive");
        } elseif ((        // line 36
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 36, $this->source); })()) === "expired")) {
            // line 37
            $context["icon"] = "ri-checkbox-circle-line text-info";
            // line 38
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.expired_to", ["%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "publishDown", [], "any", false, false, false, 38))]);
        } elseif ((        // line 39
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 39, $this->source); })()) === "pending")) {
            // line 40
            $context["icon"] = "ri-donut-chart-line text-info";
            // line 41
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.pending.start_at", ["%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 41, $this->source); })()), "publishUp", [], "any", false, false, false, 41))]);
        }
        // line 44
        if ((true === (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 44, $this->source); })()))) {
            // line 45
            $context["icon"] = "ri-toggle-fill text-success";
            // line 46
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.public");
        } elseif ((false ===         // line 47
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 47, $this->source); })()))) {
            // line 48
            $context["icon"] = "ri-toggle-line text-danger";
            // line 49
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.not.public");
        }
        // line 52
        $context["text"] = ((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 52, $this->source); })()) . ((array_key_exists("aditionalLabel", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["aditionalLabel"]) || array_key_exists("aditionalLabel", $context) ? $context["aditionalLabel"] : (function () { throw new RuntimeError('Variable "aditionalLabel" does not exist.', 52, $this->source); })()), "")) : ("")));
        // line 54
        if ((array_key_exists("disableToggle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["disableToggle"]) || array_key_exists("disableToggle", $context) ? $context["disableToggle"] : (function () { throw new RuntimeError('Variable "disableToggle" does not exist.', 54, $this->source); })())))) {
            // line 55
            $context["icon"] = Twig\Extension\CoreExtension::replace((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 55, $this->source); })()), ["success" => "muted", "danger" => "muted", "warning" => "muted"]);
        }
        // line 58
        $context["clickAction"] = (((array_key_exists("disableToggle", $context) && (true === (isset($context["disableToggle"]) || array_key_exists("disableToggle", $context) ? $context["disableToggle"] : (function () { throw new RuntimeError('Variable "disableToggle" does not exist.', 58, $this->source); })())))) ? ("disabled") : ("has-click-event"));
        // line 59
        $context["idClass"] = (((Twig\Extension\CoreExtension::replace((isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 59, $this->source); })()), ["." => "-"]) . "-publish-icon") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)) . $this->env->getFunction('md5')->getCallable()((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 59, $this->source); })())));
        // line 61
        $context["backdropFlag"] = ((array_key_exists("backdrop", $context)) ? ("true") : ("false"));
        // line 63
        $context["onclick"] = ((Twig\Extension\CoreExtension::testEmpty((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 63, $this->source); })()))) ? (Twig\Extension\CoreExtension::sprintf("Mautic.togglePublishStatus(event, '.%s', '%s', '%s', '%s', %s);", (isset($context["idClass"]) || array_key_exists("idClass", $context) ? $context["idClass"] : (function () { throw new RuntimeError('Variable "idClass" does not exist.', 63, $this->source); })()), (isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 63, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 63, $this->source); })()), (isset($context["backdropFlag"]) || array_key_exists("backdropFlag", $context) ? $context["backdropFlag"] : (function () { throw new RuntimeError('Variable "backdropFlag" does not exist.', 63, $this->source); })()))) : ((isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 63, $this->source); })())));
        // line 65
        $context["defaultAttributes"] = ["data-container" => "body", "data-placement" => "right", "data-toggle" => "tooltip", "data-status" =>         // line 69
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 69, $this->source); })())];
        // line 73
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 73, $this->source); })()))) {
            // line 74
            $context["attributes"] = Twig\Extension\CoreExtension::merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), ["data-id-class" => ("." .             // line 75
(isset($context["idClass"]) || array_key_exists("idClass", $context) ? $context["idClass"] : (function () { throw new RuntimeError('Variable "idClass" does not exist.', 75, $this->source); })())), "data-model" =>             // line 76
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 76, $this->source); })()), "data-item-id" => CoreExtension::getAttribute($this->env, $this->source,             // line 77
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "data-query" =>             // line 78
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 78, $this->source); })()), "data-backdrop" =>             // line 79
(isset($context["backdropFlag"]) || array_key_exists("backdropFlag", $context) ? $context["backdropFlag"] : (function () { throw new RuntimeError('Variable "backdropFlag" does not exist.', 79, $this->source); })())]);
        }
        // line 83
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["transKeys"]) || array_key_exists("transKeys", $context) ? $context["transKeys"] : (function () { throw new RuntimeError('Variable "transKeys" does not exist.', 83, $this->source); })()))) {
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transKeys"]) || array_key_exists("transKeys", $context) ? $context["transKeys"] : (function () { throw new RuntimeError('Variable "transKeys" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 85
                yield "    ";
                $context["attributes"] = Twig\Extension\CoreExtension::merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 85, $this->source); })()), [                // line 86
$context["k"] => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["v"])]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 91
        $context["allDataAttrs"] = Twig\Extension\CoreExtension::merge((isset($context["defaultAttributes"]) || array_key_exists("defaultAttributes", $context) ? $context["defaultAttributes"] : (function () { throw new RuntimeError('Variable "defaultAttributes" does not exist.', 91, $this->source); })()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 91, $this->source); })()));
        // line 93
        $context["dataAttributes"] = Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, (isset($context["allDataAttrs"]) || array_key_exists("allDataAttrs", $context) ? $context["allDataAttrs"] : (function () { throw new RuntimeError('Variable "allDataAttrs" does not exist.', 93, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return Twig\Extension\CoreExtension::sprintf("%s=\"%s\"", (isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 93, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 93, $this->source); })())); }), " ");
        // line 94
        yield "
<i class=\"ri-fw ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 95, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 95, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clickAction"]) || array_key_exists("clickAction", $context) ? $context["clickAction"] : (function () { throw new RuntimeError('Variable "clickAction" does not exist.', 95, $this->source); })()), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["idClass"]) || array_key_exists("idClass", $context) ? $context["idClass"] : (function () { throw new RuntimeError('Variable "idClass" does not exist.', 95, $this->source); })()), "html", null, true);
        yield " toggle-publish-status\"
   title=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 96, $this->source); })()), "html", null, true);
        yield "\"
   ";
        // line 97
        yield (isset($context["dataAttributes"]) || array_key_exists("dataAttributes", $context) ? $context["dataAttributes"] : (function () { throw new RuntimeError('Variable "dataAttributes" does not exist.', 97, $this->source); })());
        yield "
   ";
        // line 98
        if (( !array_key_exists("disableToggle", $context) || (array_key_exists("disableToggle", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["disableToggle"]) || array_key_exists("disableToggle", $context) ? $context["disableToggle"] : (function () { throw new RuntimeError('Variable "disableToggle" does not exist.', 98, $this->source); })()))))) {
            yield "onclick=\"";
            yield (isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 98, $this->source); })());
            yield "\"";
        }
        yield "></i>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/publishstatus_icon.html.twig";
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
        return array (  176 => 98,  172 => 97,  168 => 96,  158 => 95,  155 => 94,  153 => 93,  151 => 91,  144 => 86,  142 => 85,  138 => 84,  136 => 83,  133 => 79,  132 => 78,  131 => 77,  130 => 76,  129 => 75,  128 => 74,  126 => 73,  124 => 69,  123 => 65,  121 => 63,  119 => 61,  117 => 59,  115 => 58,  112 => 55,  110 => 54,  108 => 52,  105 => 49,  103 => 48,  101 => 47,  99 => 46,  97 => 45,  95 => 44,  92 => 41,  90 => 40,  88 => 39,  86 => 38,  84 => 37,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 32,  72 => 31,  70 => 30,  66 => 25,  64 => 24,  62 => 23,  60 => 22,  58 => 21,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  46 => 14,  44 => 13,  42 => 12,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/publishstatus_icon.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/publishstatus_icon.html.twig");
    }
}
