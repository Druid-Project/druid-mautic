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

/* @MauticPlugin/FormTheme/Integration/layout.html.twig */
class __TwigTemplate_c0927386aabd6c777731a209cf999207 extends Template
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
            'integration_company_fields_row' => [$this, 'block_integration_company_fields_row'],
            'integration_fields_row' => [$this, 'block_integration_fields_row'],
            '_integration_details_supportedFeatures_row' => [$this, 'block__integration_details_supportedFeatures_row'],
            '_integration_details_featureSettings_row' => [$this, 'block__integration_details_featureSettings_row'],
            'fields_row' => [$this, 'block_fields_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('integration_company_fields_row', $context, $blocks);
        // line 7
        yield "
";
        // line 8
        yield from $this->unwrap()->yieldBlock('integration_fields_row', $context, $blocks);
        // line 14
        yield "
";
        // line 15
        yield from $this->unwrap()->yieldBlock('_integration_details_supportedFeatures_row', $context, $blocks);
        // line 45
        yield "
";
        // line 46
        yield from $this->unwrap()->yieldBlock('_integration_details_featureSettings_row', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('fields_row', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integration_company_fields_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["containerId"] = "companyFieldsContainer";
        // line 3
        $context["numberOfFields"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "offsetExists", ["update_mautic_company1"], "method", false, false, false, 3)) ? (5) : (4));
        // line 4
        $context["object"] = "company";
        // line 5
        yield from         $this->unwrap()->yieldBlock("fields_row", $context, $blocks);
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integration_fields_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        $context["containerId"] = "leadFieldsContainer";
        // line 10
        $context["numberOfFields"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "offsetExists", ["update_mautic1"], "method", false, false, false, 10)) ? (5) : (4));
        // line 11
        $context["object"] = "lead";
        // line 12
        yield from         $this->unwrap()->yieldBlock("fields_row", $context, $blocks);
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__integration_details_supportedFeatures_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  ";
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "attr", [], "any", false, false, false, 16);
        // line 17
        yield "  ";
        $context["builtin"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["formSettings"] ?? null), "builtin_features", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["formSettings"] ?? null), "builtin_features", [], "any", false, false, false, 17), [])) : ([]));
        // line 18
        yield "  ";
        $context["showLabel"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["builtin"]) || array_key_exists("builtin", $context) ? $context["builtin"] : (function () { throw new RuntimeError('Variable "builtin" does not exist.', 18, $this->source); })())) != Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18)));
        // line 19
        yield "  <div class=\"row\">
      <div class=\"col-sm-12\">
          ";
        // line 21
        if ((isset($context["showLabel"]) || array_key_exists("showLabel", $context) ? $context["showLabel"] : (function () { throw new RuntimeError('Variable "showLabel" does not exist.', 21, $this->source); })())) {
            // line 22
            yield "              <h4 class=\"mb-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "label", [], "array", false, false, false, 22)), "html", null, true);
            yield "</h4>
          ";
        }
        // line 24
        yield "          ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formNotes"] ?? null), "supported_features", [], "any", true, true, false, 24) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 24, $this->source); })()), "supported_features", [], "any", false, false, false, 24)))) {
            // line 25
            yield "              <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 25, $this->source); })()), "supported_features", [], "array", false, false, false, 25), "type", [], "array", false, false, false, 25), "html", null, true);
            yield "\">
                  ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 26, $this->source); })()), "supported_features", [], "array", false, false, false, 26), "note", [], "array", false, false, false, 26)), "html", null, true);
            yield "
              </div>
          ";
        }
        // line 29
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "children", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 30
            yield "              ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), (isset($context["builtin"]) || array_key_exists("builtin", $context) ? $context["builtin"] : (function () { throw new RuntimeError('Variable "builtin" does not exist.', 30, $this->source); })()))) {
                // line 31
                yield "                <div class=\"checkbox\" >
                    <label>
                        ";
                // line 33
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 33, $this->source); })())]);
                yield "
                        ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 34), "label", [], "any", false, false, false, 34)), "html", null, true);
                yield "
                    </label>
                </div>
              ";
            } else {
                // line 38
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isRendered", [], "method", false, false, false, 38), "html", null, true);
                yield "
                  <input type=\"hidden\" id=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 39), "id", [], "array", false, false, false, 39), "html", null, true);
                yield "\" name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 39), "full_name", [], "array", false, false, false, 39), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 39), "value", [], "array", false, false, false, 39));
                yield "\" />
              ";
            }
            // line 41
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "      </div>
  </div>
";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__integration_details_featureSettings_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "<div class=\"row\">
    <div class=\"col-sm-12\">
        <h4 class=\"mb-sm mt-lg\">
            ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "label", [], "array", false, false, false, 50)), "html", null, true);
        yield "
        </h4>
        ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formNotes"] ?? null), "features", [], "any", true, true, false, 52) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 52, $this->source); })()), "features", [], "any", false, false, false, 52)))) {
            // line 53
            yield "            <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 53, $this->source); })()), "features", [], "array", false, false, false, 53), "type", [], "array", false, false, false, 53), "html", null, true);
            yield "\">
                ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formNotes"]) || array_key_exists("formNotes", $context) ? $context["formNotes"] : (function () { throw new RuntimeError('Variable "formNotes" does not exist.', 54, $this->source); })()), "features", [], "array", false, false, false, 54), "note", [], "array", false, false, false, 54)), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 57
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'widget');
        yield "
    </div>
</div>
";
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_fields_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 74
        $context["rowCount"] = 0;
        // line 75
        $context["indexCount"] = 1;
        // line 76
        yield "<div class=\"row fields-container\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["containerId"]) || array_key_exists("containerId", $context) ? $context["containerId"] : (function () { throw new RuntimeError('Variable "containerId" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\">

    ";
        // line 78
        if ((array_key_exists("specialInstructions", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["specialInstructions"]) || array_key_exists("specialInstructions", $context) ? $context["specialInstructions"] : (function () { throw new RuntimeError('Variable "specialInstructions" does not exist.', 78, $this->source); })())))) {
            // line 79
            yield "      <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alertType"]) || array_key_exists("alertType", $context) ? $context["alertType"] : (function () { throw new RuntimeError('Variable "alertType" does not exist.', 79, $this->source); })()), "html", null, true);
            yield "\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["specialInstructions"]) || array_key_exists("specialInstructions", $context) ? $context["specialInstructions"] : (function () { throw new RuntimeError('Variable "specialInstructions" does not exist.', 80, $this->source); })())), "html", null, true);
            // line 81
            yield "</div>
    ";
        }
        // line 83
        yield "
    ";
        // line 84
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "vars", [], "any", false, false, false, 84), "errors", [], "any", false, false, false, 84)) > 0)) {
            // line 85
            yield "      <div class=\"alert alert-danger\">
        ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 87
                yield "          <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 87), "html", null, true);
                yield "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "      </div>
    ";
        }
        // line 91
        yield "
    <div class=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "-field form-group col-xs-12\">
      <div class=\"row\">
        <div class=\"mb-xs col-sm-";
        // line 94
        yield (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 94, $this->source); })()))) ? (5) : (6));
        yield " text-center\"><h4>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugins.integration.fields"), "html", null, true);
        yield "</h4></div>
        ";
        // line 95
        if ((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 95, $this->source); })()))) {
            // line 96
            yield "<div class=\"col-sm-2\"></div>";
        }
        // line 98
        yield "        <div class=\"mb-xs col-sm-";
        yield (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 98, $this->source); })()))) ? (5) : (6));
        yield " text-center\"><h4>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugins.mautic.fields"), "html", null, true);
        yield "</h4></div>
      </div>
      ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "children", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 101
            yield "          ";
            $context["selected"] = false;
            // line 102
            yield "          ";
            $context["isRequired"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 102), "attr", [], "any", false, true, false, 102), "data-required", [], "array", true, true, false, 102) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 102), "attr", [], "any", false, false, false, 102), "data-required", [], "array", false, false, false, 102) === 0));
            // line 103
            yield "          ";
            if ((0 == (isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 103, $this->source); })()) % (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 103, $this->source); })()))) {
                // line 104
                yield "            <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 104, $this->source); })()), "html", null, true);
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 104, $this->source); })()), "html", null, true);
                yield "\" class=\"field-container row ";
                if ((5 != (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 104, $this->source); })()))) {
                    yield "pb-md";
                }
                yield "\">
          ";
            }
            // line 106
            yield "          ";
            $context["rowCount"] = ((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 106, $this->source); })()) + 1);
            // line 107
            yield "          ";
            if (("hidden" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 107), "block_prefixes", [], "any", false, false, false, 107), 1, [], "array", false, false, false, 107))) {
                // line 108
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                yield "
          ";
            } else {
                // line 110
                yield "            ";
                $context["class"] = "";
                // line 111
                yield "            ";
                $context["remainder"] = ((isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 111, $this->source); })()) % (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 111, $this->source); })()));
                // line 112
                yield "            ";
                if (((1 == (isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 112, $this->source); })())) || (3 == (isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 112, $this->source); })())))) {
                    // line 113
                    yield "              ";
                    $context["class"] = (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 113, $this->source); })()))) ? ("col-sm-5") : ("col-sm-6"));
                    // line 114
                    yield "            ";
                } elseif ((2 == (isset($context["remainder"]) || array_key_exists("remainder", $context) ? $context["remainder"] : (function () { throw new RuntimeError('Variable "remainder" does not exist.', 114, $this->source); })()))) {
                    // line 115
                    yield "              ";
                    $context["class"] = (((5 == (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 115, $this->source); })()))) ? ("col-sm-2") : ("col-sm-6"));
                    // line 116
                    yield "            ";
                }
                // line 117
                yield "          ";
            }
            // line 118
            yield "          ";
            if ((("label_" . (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 118, $this->source); })())) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 118), "name", [], "any", false, false, false, 118))) {
                // line 119
                yield "            ";
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 119, $this->source); })())) {
                    // line 120
                    yield "              ";
                    $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 120), "full_name", [], "any", false, false, false, 120);
                    // line 121
                    yield "              <input type=\"hidden\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 121), "attr", [], "array", false, false, false, 121), "data-label", [], "array", false, false, false, 121), "html", null, true);
                    yield "\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 121, $this->source); })()), "html", null, true);
                    yield "\" />
            ";
                }
                // line 123
                yield "            <div class=\"pl-xs pr-xs ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 123, $this->source); })()), "html", null, true);
                yield " ";
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 123, $this->source); })())) {
                    yield "has-error";
                }
                yield "\">
              <div class=\"placeholder\" data-placeholder=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 124), "attr", [], "any", false, false, false, 124), "placeholder", [], "any", false, false, false, 124), "html", null, true);
                yield "\">
                <input type=\"text\"
                       id=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126), "html", null, true);
                yield "\"
                       name=\"";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 127), "full_name", [], "any", false, false, false, 127), "html", null, true);
                yield "\"
                       class=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 128), "attr", [], "any", false, false, false, 128), "class", [], "any", false, false, false, 128), "html", null, true);
                yield "\"
                       value=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 129), "attr", [], "any", false, true, false, 129), "data-label", [], "array", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 129), "attr", [], "any", false, true, false, 129), "data-label", [], "array", false, false, false, 129), "")) : ("")));
                yield "\" readonly />
              </div>
            </div>
          ";
            }
            // line 134
            if (CoreExtension::inFilter("update_mautic", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134))) {
                // line 135
                yield "<div class=\"pr-xs ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 135, $this->source); })()), "html", null, true);
                yield "\" style=\"padding-left: 8px;\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.direction.data.update"), "html", null, true);
                yield "\">
              <div class=\"row\">
                <div class=\"form-group col-xs-12 \">
                  <div class=\"choice-wrapper\">
                    <div class=\"btn-group btn-block\" data-toggle=\"buttons\" ";
                // line 139
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 139), "attr", [], "array", false, false, false, 139), "forceDirection", [], "array", false, false, false, 139)) {
                    yield "data-force-direction=\"1\"";
                }
                yield ">
                      ";
                // line 140
                $context["checked"] = ("0" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 140), "value", [], "any", false, false, false, 140));
                // line 141
                yield "                      <label class=\"btn-arrow";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 141, $this->source); })()), "html", null, true);
                yield " btn btn-ghost ";
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 141, $this->source); })())) {
                    yield "active";
                }
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 141), "attr", [], "array", false, false, false, 141), "disabled", [], "array", false, false, false, 141)) {
                    yield "disabled";
                }
                yield "\">
                        <input type=\"radio\"
                               id=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 143), "id", [], "array", false, false, false, 143), "html", null, true);
                yield "_0\"
                               name=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 144), "full_name", [], "array", false, false, false, 144), "html", null, true);
                yield "\"
                               title=\"\"
                               autocomplete=\"false\"
                               value=\"0\"
                               onchange=\"Mautic.matchedFields(";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 148, $this->source); })()), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 148, $this->source); })()), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 148, $this->source); })()), "html", null, true);
                yield "')\"
                               ";
                // line 149
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 149, $this->source); })())) {
                    yield "checked=\"checked\"";
                }
                // line 150
                yield "                               ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 150), "attr", [], "array", false, false, false, 150), "disabled", [], "array", false, false, false, 150)) {
                    yield "disabled";
                }
                yield ">
                        <btn class=\"btn-nospin ri-arrow-left-circle-line\"></btn>
                      </label>
                      ";
                // line 153
                $context["checked"] = ("1" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 153), "value", [], "any", false, false, false, 153));
                // line 154
                yield "                      <label class=\"btn-arrow";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 154, $this->source); })()), "html", null, true);
                yield " btn btn-ghost ";
                if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 154, $this->source); })())) {
                    yield "active";
                }
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 154), "attr", [], "array", false, false, false, 154), "disabled", [], "array", false, false, false, 154)) {
                    yield "disabled";
                }
                yield "\">
                        <input type=\"radio\" id=\"";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 155), "id", [], "array", false, false, false, 155), "html", null, true);
                yield "_1\"
                               name=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 156), "full_name", [], "array", false, false, false, 156), "html", null, true);
                yield "\"
                               title=\"\"
                               autocomplete=\"false\"
                               value=\"1\"
                               onchange=\"Mautic.matchedFields(";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 160, $this->source); })()), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 160, $this->source); })()), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 160, $this->source); })()), "html", null, true);
                yield "')\"
                               ";
                // line 161
                if (("1" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 161), "value", [], "array", false, false, false, 161))) {
                    yield "checked=\"checked\"";
                }
                // line 162
                yield "                               ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 162), "attr", [], "array", false, false, false, 162), "disabled", [], "array", false, false, false, 162)) {
                    yield "disabled";
                }
                yield ">
                        <btn class=\"btn-nospin ri-arrow-right-circle-line\"></btn>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
            }
            // line 172
            if ((("m_" . (isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 172, $this->source); })())) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 172), "name", [], "any", false, false, false, 172))) {
                // line 173
                yield "            <div class=\"pl-xs pr-xs ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 173, $this->source); })()), "html", null, true);
                yield "\">
              ";
                // line 174
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 174, $this->source); })())) {
                    yield "<div class=\"has-errors\">";
                }
                // line 175
                yield "              <select id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175), "html", null, true);
                yield "\"
                      name=\"";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 176), "full_name", [], "any", false, false, false, 176), "html", null, true);
                yield "\"
                      class=\"";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 177), "attr", [], "any", false, false, false, 177), "class", [], "any", false, false, false, 177), "html", null, true);
                yield "\"
                      data-placeholder=\"\"
                      autocomplete=\"false\" onchange=\"Mautic.matchedFields(";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 179, $this->source); })()), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 179, $this->source); })()), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 179, $this->source); })()), "html", null, true);
                yield "')\">
                <option value=\"\"></option>";
                // line 181
                $context["mauticChoices"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 181), "attr", [], "any", false, false, false, 181), "data-choices", [], "array", false, false, false, 181);
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mauticChoices"]) || array_key_exists("mauticChoices", $context) ? $context["mauticChoices"] : (function () { throw new RuntimeError('Variable "mauticChoices" does not exist.', 182, $this->source); })()));
                foreach ($context['_seq'] as $context["keyLabel"] => $context["options"]) {
                    // line 183
                    yield "                  ";
                    if (is_iterable($context["options"])) {
                        // line 184
                        yield "                    <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyLabel"], "html", null, true);
                        yield "\">
                        ";
                        // line 185
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["options"]);
                        foreach ($context['_seq'] as $context["optionLabel"] => $context["keyValue"]) {
                            // line 186
                            yield "                          <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyValue"]);
                            yield "\" ";
                            if (($context["keyValue"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 186), "data", [], "any", false, false, false, 186))) {
                                yield "selected";
                                $context["selected"] = true;
                            } elseif (((array_key_exists("selected", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 186, $this->source); })()))) && ("-1" == $context["keyValue"]))) {
                                yield "selected";
                            }
                            yield ">";
                            // line 187
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["optionLabel"]), "html", null, true);
                            // line 188
                            yield "</option>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['optionLabel'], $context['keyValue'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 190
                        yield "                    </optgroup>
                  ";
                    } else {
                        // line 192
                        yield "                    <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["options"]);
                        yield "\"";
                        if (($context["options"] == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 192), "data", [], "any", false, false, false, 192))) {
                            yield "selected";
                            $context["selected"] = true;
                        } elseif (((array_key_exists("selected", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 192, $this->source); })()))) && ("-1" == $context["options"]))) {
                            yield "selected";
                        }
                        yield ">";
                        // line 193
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["keyLabel"]), "html", null, true);
                        // line 194
                        yield "</option>
                  ";
                    }
                    // line 196
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['keyLabel'], $context['options'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                yield "              </select>
              ";
                // line 198
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 198, $this->source); })())) {
                    yield "</div>";
                }
                // line 199
                yield "            </div>
          ";
            }
            // line 201
            yield "          ";
            if ((0 == (isset($context["rowCount"]) || array_key_exists("rowCount", $context) ? $context["rowCount"] : (function () { throw new RuntimeError('Variable "rowCount" does not exist.', 201, $this->source); })()) % (isset($context["numberOfFields"]) || array_key_exists("numberOfFields", $context) ? $context["numberOfFields"] : (function () { throw new RuntimeError('Variable "numberOfFields" does not exist.', 201, $this->source); })()))) {
                // line 202
                yield "              </div>
              ";
                // line 203
                $context["indexCount"] = ((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 203, $this->source); })()) + 1);
                // line 204
                yield "          ";
            }
            // line 205
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "    </div>
    ";
        // line 207
        if ((((isset($context["indexCount"]) || array_key_exists("indexCount", $context) ? $context["indexCount"] : (function () { throw new RuntimeError('Variable "indexCount" does not exist.', 207, $this->source); })()) - 1) < (isset($context["totalFields"]) || array_key_exists("totalFields", $context) ? $context["totalFields"] : (function () { throw new RuntimeError('Variable "totalFields" does not exist.', 207, $this->source); })()))) {
            // line 208
            yield "      <div class=\"panel-footer\">
          ";
            // line 209
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" =>             // line 210
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 210, $this->source); })()), "fixedPages" =>             // line 211
(isset($context["fixedPageNum"]) || array_key_exists("fixedPageNum", $context) ? $context["fixedPageNum"] : (function () { throw new RuntimeError('Variable "fixedPageNum" does not exist.', 211, $this->source); })()), "fixedLimit" => true, "target" => "#IntegrationEditModal", "totalItems" =>             // line 214
(isset($context["totalFields"]) || array_key_exists("totalFields", $context) ? $context["totalFields"] : (function () { throw new RuntimeError('Variable "totalFields" does not exist.', 214, $this->source); })()), "jsCallback" => "Mautic.getIntegrationFields", "jsArguments" => [["object" =>             // line 218
(isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 218, $this->source); })()), "integration" =>             // line 219
(isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 219, $this->source); })())]]]);
            // line 222
            yield "
      </div>
    ";
        }
        // line 225
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPlugin/FormTheme/Integration/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  696 => 225,  691 => 222,  689 => 219,  688 => 218,  687 => 214,  686 => 211,  685 => 210,  684 => 209,  681 => 208,  679 => 207,  676 => 206,  670 => 205,  667 => 204,  665 => 203,  662 => 202,  659 => 201,  655 => 199,  651 => 198,  648 => 197,  642 => 196,  638 => 194,  636 => 193,  625 => 192,  621 => 190,  614 => 188,  612 => 187,  601 => 186,  597 => 185,  592 => 184,  589 => 183,  585 => 182,  583 => 181,  575 => 179,  570 => 177,  566 => 176,  561 => 175,  557 => 174,  552 => 173,  550 => 172,  536 => 162,  532 => 161,  524 => 160,  517 => 156,  513 => 155,  500 => 154,  498 => 153,  489 => 150,  485 => 149,  477 => 148,  470 => 144,  466 => 143,  452 => 141,  450 => 140,  444 => 139,  434 => 135,  432 => 134,  425 => 129,  421 => 128,  417 => 127,  413 => 126,  408 => 124,  399 => 123,  391 => 121,  388 => 120,  385 => 119,  382 => 118,  379 => 117,  376 => 116,  373 => 115,  370 => 114,  367 => 113,  364 => 112,  361 => 111,  358 => 110,  352 => 108,  349 => 107,  346 => 106,  334 => 104,  331 => 103,  328 => 102,  325 => 101,  321 => 100,  313 => 98,  310 => 96,  308 => 95,  302 => 94,  297 => 92,  294 => 91,  290 => 89,  281 => 87,  277 => 86,  274 => 85,  272 => 84,  269 => 83,  265 => 81,  263 => 80,  259 => 79,  257 => 78,  251 => 76,  249 => 75,  247 => 74,  240 => 62,  230 => 57,  224 => 54,  219 => 53,  217 => 52,  212 => 50,  207 => 47,  200 => 46,  193 => 42,  187 => 41,  178 => 39,  173 => 38,  166 => 34,  162 => 33,  158 => 31,  155 => 30,  150 => 29,  144 => 26,  139 => 25,  136 => 24,  130 => 22,  128 => 21,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  108 => 15,  103 => 12,  101 => 11,  99 => 10,  97 => 9,  90 => 8,  85 => 5,  83 => 4,  81 => 3,  79 => 2,  72 => 1,  67 => 62,  64 => 61,  62 => 46,  59 => 45,  57 => 15,  54 => 14,  52 => 8,  49 => 7,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPlugin/FormTheme/Integration/layout.html.twig", "/app/docroot/app/bundles/PluginBundle/Resources/views/FormTheme/Integration/layout.html.twig");
    }
}
