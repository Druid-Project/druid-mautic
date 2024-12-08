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

/* @MauticLead/Field/form.html.twig */
class __TwigTemplate_38e349b46baa2ef027cd426ecdb8ccdb extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Field/form.html.twig", 6);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "leadfield";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)) {
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12), "label", [], "any", false, false, false, 12)]), "html", null, true);
        } else {
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.header.new"), "html", null, true);
        }
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        $context["selectTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "properties_select_template", [], "array", false, false, false, 20), 'row');
        // line 21
        $context["lookupTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "properties_lookup_template", [], "array", false, false, false, 21), 'row');
        // line 22
        $context["defaultTextTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "default_template_text", [], "array", false, false, false, 22), 'widget');
        // line 23
        $context["defaultTextareaTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "default_template_textarea", [], "array", false, false, false, 23), 'widget');
        // line 24
        $context["defaultLocaleTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "default_template_locale", [], "array", false, false, false, 24), 'widget');
        // line 25
        $context["defaultSelectTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "default_template_select", [], "array", false, false, false, 25), 'widget');
        // line 26
        $context["defaultBoolTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "default_template_boolean", [], "array", false, false, false, 26), 'widget');
        // line 27
        $context["defaultCountryTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "default_template_country", [], "array", false, false, false, 27), 'widget');
        // line 28
        $context["defaultRegionTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "default_template_region", [], "array", false, false, false, 28), 'widget');
        // line 29
        $context["defaultTimezoneTemplate"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "default_template_timezone", [], "array", false, false, false, 29), 'widget');
        // line 30
        yield "
";
        // line 31
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start');
        yield "
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-8 height-auto bdr-r\">
        <div class=\"pa-md\">
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "label", [], "any", false, false, false, 37), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "alias", [], "any", false, false, false, 38), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "object", [], "any", false, false, false, 41), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "group", [], "any", false, false, false, 42), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "defaultValue", [], "any", false, false, false, 46), 'row');
        yield "</div>
            </div>

            ";
        // line 49
        $context["type"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "data", [], "any", false, false, false, 49);
        // line 50
        yield "            ";
        $context["properties"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "properties", [], "any", false, false, false, 50), "vars", [], "any", false, false, false, 50), "data", [], "any", false, false, false, 50);
        // line 51
        yield "            ";
        $context["errors"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "properties", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51));
        // line 52
        yield "            <div class=\"row\">
                <div class=\"form-group col-md-6 ";
        // line 53
        if (((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 53, $this->source); })()) > 0)) {
            yield "has-error";
        }
        yield "\">
                    <div id=\"leadfield_properties\">
                        ";
        // line 55
        if (("boolean" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 55, $this->source); })()))) {
            // line 56
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_boolean.html.twig", ["yes" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 57
($context["properties"] ?? null), "yes", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "yes", [], "any", false, false, false, 57), "")) : ("")), "no" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 58
($context["properties"] ?? null), "no", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "no", [], "any", false, false, false, 58), "")) : (""))]);
            // line 59
            yield "
                        ";
        } elseif (("number" ==         // line 60
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 60, $this->source); })()))) {
            // line 61
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_number.html.twig", ["roundMode" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 62
($context["properties"] ?? null), "roundmode", [], "any", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "roundmode", [], "any", false, false, false, 62), "")) : ("")), "scale" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 63
($context["properties"] ?? null), "scale", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["properties"] ?? null), "scale", [], "any", false, false, false, 63), "")) : (""))]);
            // line 64
            yield "
                        ";
        } elseif ((("select" ==         // line 65
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 65, $this->source); })())) || ("multiselect" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 65, $this->source); })())))) {
            // line 66
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source,             // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "properties", [], "any", false, false, false, 67), "selectTemplate" =>             // line 68
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 68, $this->source); })()), "type" => "select"]);
            // line 70
            yield "
                        ";
        } elseif (("lookup" ==         // line 71
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()))) {
            // line 72
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => CoreExtension::getAttribute($this->env, $this->source,             // line 73
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "properties", [], "any", false, false, false, 73), "selectTemplate" =>             // line 74
(isset($context["lookupTemplate"]) || array_key_exists("lookupTemplate", $context) ? $context["lookupTemplate"] : (function () { throw new RuntimeError('Variable "lookupTemplate" does not exist.', 74, $this->source); })()), "type" => "lookup"]);
            // line 76
            yield "
                        ";
        }
        // line 78
        yield "                    </div>
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "properties", [], "any", false, false, false, 79), 'errors');
        yield "
                </div>
            </div>
            ";
        // line 82
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "properties", [], "any", false, false, false, 82), "setRendered", [], "method", false, false, false, 82);
        // line 83
        yield "        </div>
    </div>
    <div class=\"col-md-4 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            <div class=\"row\">
                <div class=\"col-md-12\" id=\"leadfield_order_container\">";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "order", [], "any", false, false, false, 88), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "isPublished", [], "any", false, false, false, 91), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "isRequired", [], "any", false, false, false, 92), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "isVisible", [], "any", false, false, false, 95), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "isShortVisible", [], "any", false, false, false, 96), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "isListable", [], "any", false, false, false, 99), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "isPubliclyUpdatable", [], "any", false, false, false, 100), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "isIndex", [], "any", false, false, false, 103), 'row');
        yield "</div>
                <div class=\"col-md-6\">
                    ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "charLengthLimit", [], "any", true, true, false, 105)) {
            // line 106
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "charLengthLimit", [], "any", false, false, false, 106), 'row');
            yield "
                    ";
        }
        // line 108
        yield "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "isUniqueIdentifer", [], "any", false, false, false, 111), 'row');
        yield "</div>
            </div>
            <div class=\"row unique-identifier-warning\" style=\"";
        // line 113
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "isUniqueIdentifer", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "data", [], "any", false, false, false, 113)) {
            yield "display:none;";
        }
        yield "\">
                <div class=\"col-md-12\">
                    <div class=\"alert alert-danger\">";
        // line 115
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.isuniqueidentifer.warning"));
        yield "</div>
                </div>
            </div>
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'rest');
        yield "
        </div>
    </div>
</div>
";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
        yield "

";
        // line 124
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "vars", [], "any", false, false, false, 124), "data", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124))) {
            // line 125
            yield "  <div id=\"field-templates\" class=\"hide\">
      <div class=\"default_template_text\">";
            // line 126
            yield (isset($context["defaultTextTemplate"]) || array_key_exists("defaultTextTemplate", $context) ? $context["defaultTextTemplate"] : (function () { throw new RuntimeError('Variable "defaultTextTemplate" does not exist.', 126, $this->source); })());
            yield "</div>
      <div class=\"default_template_textarea\">";
            // line 127
            yield (isset($context["defaultTextareaTemplate"]) || array_key_exists("defaultTextareaTemplate", $context) ? $context["defaultTextareaTemplate"] : (function () { throw new RuntimeError('Variable "defaultTextareaTemplate" does not exist.', 127, $this->source); })());
            yield "</div>
      <div class=\"default_template_boolean\">";
            // line 128
            yield (isset($context["defaultBoolTemplate"]) || array_key_exists("defaultBoolTemplate", $context) ? $context["defaultBoolTemplate"] : (function () { throw new RuntimeError('Variable "defaultBoolTemplate" does not exist.', 128, $this->source); })());
            yield "</div>
      <div class=\"default_template_country\">";
            // line 129
            yield (isset($context["defaultCountryTemplate"]) || array_key_exists("defaultCountryTemplate", $context) ? $context["defaultCountryTemplate"] : (function () { throw new RuntimeError('Variable "defaultCountryTemplate" does not exist.', 129, $this->source); })());
            yield "</div>
      <div class=\"default_template_region\">";
            // line 130
            yield (isset($context["defaultRegionTemplate"]) || array_key_exists("defaultRegionTemplate", $context) ? $context["defaultRegionTemplate"] : (function () { throw new RuntimeError('Variable "defaultRegionTemplate" does not exist.', 130, $this->source); })());
            yield "</div>
      <div class=\"default_template_locale\">";
            // line 131
            yield (isset($context["defaultLocaleTemplate"]) || array_key_exists("defaultLocaleTemplate", $context) ? $context["defaultLocaleTemplate"] : (function () { throw new RuntimeError('Variable "defaultLocaleTemplate" does not exist.', 131, $this->source); })());
            yield "</div>
      <div class=\"default_template_timezone\">";
            // line 132
            yield (isset($context["defaultTimezoneTemplate"]) || array_key_exists("defaultTimezoneTemplate", $context) ? $context["defaultTimezoneTemplate"] : (function () { throw new RuntimeError('Variable "defaultTimezoneTemplate" does not exist.', 132, $this->source); })());
            yield "</div>
      <div class=\"default_template_select\">";
            // line 133
            yield (isset($context["defaultSelectTemplate"]) || array_key_exists("defaultSelectTemplate", $context) ? $context["defaultSelectTemplate"] : (function () { throw new RuntimeError('Variable "defaultSelectTemplate" does not exist.', 133, $this->source); })());
            yield "</div>
      ";
            // line 134
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_number.html.twig");
            yield "
      ";
            // line 135
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_boolean.html.twig");
            yield "
      ";
            // line 136
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 138
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 138, $this->source); })()), "type" => "select"]);
            // line 140
            yield "

      ";
            // line 142
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 144
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 144, $this->source); })()), "type" => "multiselect"]);
            // line 146
            yield "

      ";
            // line 148
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Field/properties_select.html.twig", ["form" => null, "selectTemplate" =>             // line 150
(isset($context["selectTemplate"]) || array_key_exists("selectTemplate", $context) ? $context["selectTemplate"] : (function () { throw new RuntimeError('Variable "selectTemplate" does not exist.', 150, $this->source); })()), "type" => "lookup"]);
            // line 152
            yield "
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Field/form.html.twig";
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
        return array (  374 => 152,  372 => 150,  371 => 148,  367 => 146,  365 => 144,  364 => 142,  360 => 140,  358 => 138,  357 => 136,  353 => 135,  349 => 134,  345 => 133,  341 => 132,  337 => 131,  333 => 130,  329 => 129,  325 => 128,  321 => 127,  317 => 126,  314 => 125,  312 => 124,  307 => 122,  300 => 118,  294 => 115,  287 => 113,  282 => 111,  277 => 108,  271 => 106,  269 => 105,  264 => 103,  258 => 100,  254 => 99,  248 => 96,  244 => 95,  238 => 92,  234 => 91,  228 => 88,  221 => 83,  219 => 82,  213 => 79,  210 => 78,  206 => 76,  204 => 74,  203 => 73,  201 => 72,  199 => 71,  196 => 70,  194 => 68,  193 => 67,  191 => 66,  189 => 65,  186 => 64,  184 => 63,  183 => 62,  181 => 61,  179 => 60,  176 => 59,  174 => 58,  173 => 57,  171 => 56,  169 => 55,  162 => 53,  159 => 52,  156 => 51,  153 => 50,  151 => 49,  145 => 46,  141 => 45,  135 => 42,  131 => 41,  125 => 38,  121 => 37,  112 => 31,  109 => 30,  107 => 29,  105 => 28,  103 => 27,  101 => 26,  99 => 25,  97 => 24,  95 => 23,  93 => 22,  91 => 21,  89 => 20,  82 => 18,  76 => 14,  73 => 12,  71 => 11,  64 => 10,  53 => 8,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Field/form.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Field/form.html.twig");
    }
}
