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

/* @MauticEmail/FormTheme/Email/layout.html.twig */
class __TwigTemplate_a6606391cc5720f0b2247024c5519b0c extends Template
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
            '_email_abtest_settings_properties_row' => [$this, 'block__email_abtest_settings_properties_row'],
            '_email_variantSettings_properties_row' => [$this, 'block__email_variantSettings_properties_row'],
            '_emailform_dynamicContent_entry_content_row' => [$this, 'block__emailform_dynamicContent_entry_content_row'],
            '_emailform_dynamicContent_entry_filters_entry_filters_entry_widget' => [$this, 'block__emailform_dynamicContent_entry_filters_entry_filters_entry_widget'],
            'dynamic_content_filter_entry_widget' => [$this, 'block_dynamic_content_filter_entry_widget'],
            'dynamic_content_filter_widget' => [$this, 'block_dynamic_content_filter_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_email_abtest_settings_properties_row', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('_email_variantSettings_properties_row', $context, $blocks);
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('_emailform_dynamicContent_entry_content_row', $context, $blocks);
        // line 41
        yield "
";
        // line 42
        yield from $this->unwrap()->yieldBlock('_emailform_dynamicContent_entry_filters_entry_filters_entry_widget', $context, $blocks);
        // line 92
        yield "
";
        // line 93
        yield from $this->unwrap()->yieldBlock('dynamic_content_filter_entry_widget', $context, $blocks);
        // line 159
        yield "
";
        // line 160
        yield from $this->unwrap()->yieldBlock('dynamic_content_filter_widget', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__email_abtest_settings_properties_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget');
        yield "
";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__email_variantSettings_properties_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        yield "
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__emailform_dynamicContent_entry_content_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    <div class=\"row form-group\">
        <div class=\"col-xs-10\">
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'label');
        yield "
        </div>
        <div class=\"col-xs-2\">
            ";
        // line 15
        if ( !("emailform_dynamicContent_0_content" === (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "            ";
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticEmail/FormTheme/Email/layout.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.dwc.delete_new", "variant" => "ghost", "icon_only" => true, "icon" => "ri-delete-bin-line", "danger" => true, "size" => "xs", "attributes" => ["class" => "remove-item as-end", "type" => "button"]]]]));
            // line 32
            yield "            ";
        }
        // line 33
        yield "        </div>
    </div>
    <div class=\"row form-group\">
        <div class=\"col-xs-12\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'widget');
        yield "
        </div>
    </div>
";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__emailform_dynamicContent_entry_filters_entry_filters_entry_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        $context["isPrototype"] = ("__name__" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43));
        // line 44
        $context["filterType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "field", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44);
        // line 45
        $context["filterGroup"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "object", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "value", [], "any", false, false, false, 45);
        // line 46
        $context["inGroup"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 46), "data", [], "any", false, true, false, 46), "glue", [], "any", true, true, false, 46) && ("and" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "vars", [], "any", false, false, false, 46), "data", [], "any", false, false, false, 46), "glue", [], "any", false, false, false, 46)));
        // line 47
        $context["objectIcon"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 47), "data", [], "any", false, true, false, 47), "object", [], "any", true, true, false, 47) && ("company" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47), "object", [], "any", false, false, false, 47)))) ? ("ri-building-2-line") : ("ri-user-6-fill"));
        // line 48
        yield "  <div class=\"panel ";
        if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 48, $this->source); })()) || ((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 48, $this->source); })()) &&  !(isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 48, $this->source); })())))) {
            yield "in-group";
        }
        yield "\">
      <div class=\"panel-footer ";
        // line 49
        if (( !(isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 49, $this->source); })()) && ("0" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49)))) {
            yield "hide";
        }
        yield "\">
          <div class=\"col-sm-2 pl-0\">
              ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "glue", [], "any", false, false, false, 51), 'widget');
        yield "
          </div>
      </div>
      <div class=\"panel-body\">
          <div class=\"col-xs-6 col-sm-3 field-name\">
              <i class=\"object-icon fa ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["objectIcon"]) || array_key_exists("objectIcon", $context) ? $context["objectIcon"] : (function () { throw new RuntimeError('Variable "objectIcon" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
              <span>";
        // line 57
        if ((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 57, $this->source); })())) {
            yield "__label__";
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "parent", [], "any", false, false, false, 57), "parent", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "fields", [], "any", false, false, false, 57), (isset($context["filterGroup"]) || array_key_exists("filterGroup", $context) ? $context["filterGroup"] : (function () { throw new RuntimeError('Variable "filterGroup" does not exist.', 57, $this->source); })()), [], "array", false, false, false, 57), (isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 57, $this->source); })()), [], "array", false, false, false, 57), "label", [], "any", false, false, false, 57), "html", null, true);
        }
        yield "</span>
          </div>
          <div class=\"col-xs-6 col-sm-3 padding-none\">
              ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "operator", [], "any", false, false, false, 60), 'widget');
        yield "
          </div>
          ";
        // line 62
        $context["hasErrors"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "filter", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "display", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) > 0));
        // line 63
        yield "          <div class=\"col-xs-10 col-sm-5 padding-none ";
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 63, $this->source); })())) {
            yield "has-error";
        }
        yield "\">
            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "filter", [], "any", false, false, false, 64), 'widget');
        yield "
            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "filter", [], "any", false, false, false, 65), 'errors');
        yield "
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "display", [], "any", false, false, false, 66), 'widget');
        yield "
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "display", [], "any", false, false, false, 67), 'errors');
        yield "
          </div>
          <div class=\"col-xs-2 col-sm-1\">
            ";
        // line 70
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticEmail/FormTheme/Email/layout.html.twig", 70)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.report.report.label.removefilter", "variant" => "ghost", "icon_only" => true, "icon" => "ri-delete-bin-line", "danger" => true, "size" => "xs", "attributes" => ["class" => "remove-selected pull-right"]]]]));
        // line 85
        yield "          </div>
          ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "field", [], "any", false, false, false, 86), 'widget');
        yield "
          ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "type", [], "any", false, false, false, 87), 'widget');
        yield "
          ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "object", [], "any", false, false, false, 88), 'widget');
        yield "
      </div>
  </div>
";
        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamic_content_filter_entry_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 94
        yield "    <div class=\"tab-pane dynamic-content-filter bdr-w-0\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\">
        <div class=\"row form-group\">
            <div class=\"col-xs-10\">
                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "content", [], "any", false, false, false, 97), 'label');
        yield "
            </div>
            <div class=\"col-xs-2\">
                ";
        // line 100
        if ( !((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 100, $this->source); })()) === "emailform_dynamicContent_0_filters_0")) {
            // line 101
            yield "                    <a class=\"remove-item remove-filter btn btn-ghost text-danger\"><i class=\"ri-delete-bin-line\"></i></a>
                ";
        }
        // line 103
        yield "            </div>
        </div>

        <div class=\"row form-group\">
            <div class=\"col-xs-12\">
                ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "content", [], "any", false, false, false, 108), 'widget');
        yield "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-7\">
                <label>";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filters"), "html", null, true);
        yield "</label>
            </div>
            <div class=\"col-xs-5\">
                <div class=\"form-group\">
                    <div class=\"available-filters pl-0\">
                        <select class=\"chosen form-control\" data-mautic=\"available_filters\">
                            <option value=\"\"></option>
                            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["object"] => $context["field"]) {
            // line 122
            yield "                                ";
            $context["icon"] = ((("company" == $context["object"])) ? ("ri-building-2-line") : ("ri-user-6-fill"));
            // line 123
            yield "                                <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead." . $context["object"])), "html", null, true);
            yield "\">
                                    ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["field"]);
            foreach ($context['_seq'] as $context["value"] => $context["params"]) {
                // line 125
                yield "                                        ";
                $context["list"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 125), "list", [], "any", true, true, false, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 125), "list", [], "any", false, false, false, 125), [])) : ([]));
                // line 126
                yield "                                        ";
                $context["choices"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 126), "type", [], "any", false, false, false, 126) === "boolean")) ? (Mautic\FormBundle\Helper\FormFieldHelper::parseBooleanList((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 126, $this->source); })()))) : (Mautic\FormBundle\Helper\FormFieldHelper::parseListForChoices((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 126, $this->source); })()))));
                // line 127
                yield "                                        ";
                $context["list"] = json_encode((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 127, $this->source); })()));
                // line 128
                yield "                                        ";
                $context["callback"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 128), "callback", [], "any", true, true, false, 128)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, true, false, 128), "callback", [], "any", false, false, false, 128), "")) : (""));
                // line 129
                yield "                                        ";
                $context["operators"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", true, true, false, 129) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 129)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 129)))) : ("{}"));
                // line 130
                yield "
                                        <option value=\"";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"]);
                yield "\"
                                                data-mautic=\"available_";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
                                                data-field-object=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "\"
                                                data-field-type=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 134), "type", [], "any", false, false, false, 134), "html", null, true);
                yield "\"
                                                data-field-list=\"";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 135, $this->source); })()));
                yield "\"
                                                data-field-callback=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 136, $this->source); })()), "html", null, true);
                yield "\"
                                                data-field-operators=\"";
                // line 137
                yield (isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 137, $this->source); })());
                yield "\"
                                                class=\"segment-filter fa ";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 138, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "label", [], "any", false, false, false, 138)), "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['value'], $context['params'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                                </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['object'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "                        </select>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>

        <div data-filter-container data-index=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "filters", [], "any", false, false, false, 149)), "html", null, true);
        yield "\">
            ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "filters", [], "any", false, false, false, 150));
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
        foreach ($context['_seq'] as $context["i"] => $context["filter"]) {
            // line 151
            yield "                ";
            $context["isPrototype"] = ("__name__" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151));
            // line 152
            yield "                ";
            if (((isset($context["isPrototype"]) || array_key_exists("isPrototype", $context) ? $context["isPrototype"] : (function () { throw new RuntimeError('Variable "isPrototype" does not exist.', 152, $this->source); })()) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 152), "fields", [], "any", false, true, false, 152), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 152), "value", [], "any", false, false, false, 152), "object", [], "any", false, false, false, 152), [], "array", false, true, false, 152), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 152), "value", [], "any", false, false, false, 152), "field", [], "any", false, false, false, 152), [], "array", true, true, false, 152))) {
                // line 153
                yield "                    ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget', ["first" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 153)]);
                yield "
                ";
            }
            // line 155
            yield "            ";
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
        unset($context['_seq'], $context['i'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "        </div>
    </div>
";
        yield from [];
    }

    // line 160
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_dynamic_content_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 161
        yield "    <div class=\"tab-pane dynamic-content bdr-w-0 ";
        yield ((("0" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "vars", [], "any", false, false, false, 161), "name", [], "any", false, false, false, 161))) ? ("active") : ("fade"));
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "vars", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161), "html", null, true);
        yield "\">
        <div class=\"panel\">
            <ul class=\"nav nav-tabs nav-tabs-contained\" id=\"dynamicContentFilterTabs_";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "vars", [], "any", false, false, false, 163), "name", [], "any", false, false, false, 163), "html", null, true);
        yield "\">
              <li>
                <a role=\"tab\" class=\"addNewDynamicContentFilter\" data-index=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "vars", [], "any", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true);
        yield "\"><i class=\"ri-add-line text-success\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.new"), "html", null, true);
        yield "</a>
              </li>
              <li class=\"active\">
                <a data-toggle=\"tab\" href=\"#emailform_dynamicContent_";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "vars", [], "any", false, false, false, 168), "name", [], "any", false, false, false, 168), "html", null, true);
        yield "_default\" role=\"tab\">Default</a>
              </li>
              ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "filters", [], "array", false, false, false, 170));
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
        foreach ($context['_seq'] as $context["i"] => $context["filter"]) {
            // line 171
            yield "                <li><a role=\"tab\" data-toggle=\"tab\" href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "vars", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent.tab"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 171), "html", null, true);
            yield "</a></li>
              ";
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
        unset($context['_seq'], $context['i'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "            </ul>

            <div class=\"tab-content pa-md\">
              <div class=\"tab-pane bdr-w-0 active\" id=\"emailform_dynamicContent_";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "vars", [], "any", false, false, false, 176), "name", [], "any", false, false, false, 176), "html", null, true);
        yield "_default\">
                <div class=\"row hidden\">
                  <div class=\"col-xs-10\">";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "tokenName", [], "any", false, false, false, 178), 'row');
        yield "</div>
                </div>
                ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "content", [], "any", false, false, false, 180), 'row');
        yield "
              </div>
              ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "filters", [], "any", false, false, false, 182));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 183
            yield "                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["filter"], 'widget');
            yield "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/FormTheme/Email/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  553 => 185,  544 => 183,  540 => 182,  535 => 180,  530 => 178,  525 => 176,  520 => 173,  499 => 171,  482 => 170,  477 => 168,  469 => 165,  464 => 163,  456 => 161,  449 => 160,  442 => 156,  428 => 155,  422 => 153,  419 => 152,  416 => 151,  399 => 150,  395 => 149,  386 => 142,  379 => 140,  369 => 138,  365 => 137,  361 => 136,  357 => 135,  353 => 134,  349 => 133,  345 => 132,  341 => 131,  338 => 130,  335 => 129,  332 => 128,  329 => 127,  326 => 126,  323 => 125,  319 => 124,  314 => 123,  311 => 122,  307 => 121,  297 => 114,  288 => 108,  281 => 103,  277 => 101,  275 => 100,  269 => 97,  262 => 94,  255 => 93,  246 => 88,  242 => 87,  238 => 86,  235 => 85,  233 => 70,  227 => 67,  223 => 66,  219 => 65,  215 => 64,  208 => 63,  206 => 62,  201 => 60,  191 => 57,  187 => 56,  179 => 51,  172 => 49,  165 => 48,  163 => 47,  161 => 46,  159 => 45,  157 => 44,  155 => 43,  148 => 42,  139 => 37,  133 => 33,  130 => 32,  127 => 16,  125 => 15,  119 => 12,  115 => 10,  108 => 9,  100 => 6,  93 => 5,  85 => 2,  78 => 1,  73 => 160,  70 => 159,  68 => 93,  65 => 92,  63 => 42,  60 => 41,  58 => 9,  55 => 8,  53 => 5,  50 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/FormTheme/Email/layout.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/FormTheme/Email/layout.html.twig");
    }
}
