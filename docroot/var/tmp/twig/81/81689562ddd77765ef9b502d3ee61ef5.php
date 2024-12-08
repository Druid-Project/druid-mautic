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

/* @MauticReport/FormTheme/Report/layout.html.twig */
class __TwigTemplate_13bb4110ed38cda15e350312ec7e1cb6 extends Template
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
            '_report_aggregators_entry_column_row' => [$this, 'block__report_aggregators_entry_column_row'],
            '_report_aggregators_entry_function_row' => [$this, 'block__report_aggregators_entry_function_row'],
            '_report_aggregators_row' => [$this, 'block__report_aggregators_row'],
            '_report_filters_entry_column_row' => [$this, 'block__report_filters_entry_column_row'],
            '_report_filters_entry_condition_row' => [$this, 'block__report_filters_entry_condition_row'],
            '_report_filters_entry_value_row' => [$this, 'block__report_filters_entry_value_row'],
            '_report_filters_row' => [$this, 'block__report_filters_row'],
            '_report_tableOrder_entry_column_row' => [$this, 'block__report_tableOrder_entry_column_row'],
            '_report_tableOrder_entry_direction_row' => [$this, 'block__report_tableOrder_entry_direction_row'],
            '_report_tableOrder_row' => [$this, 'block__report_tableOrder_row'],
            'aggregator_row' => [$this, 'block_aggregator_row'],
            'filter_selector_row' => [$this, 'block_filter_selector_row'],
            'table_order_row' => [$this, 'block_table_order_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_report_aggregators_entry_column_row', $context, $blocks);
        // line 13
        yield "
";
        // line 14
        yield from $this->unwrap()->yieldBlock('_report_aggregators_entry_function_row', $context, $blocks);
        // line 29
        yield "
";
        // line 30
        yield from $this->unwrap()->yieldBlock('_report_aggregators_row', $context, $blocks);
        // line 46
        yield "
";
        // line 47
        yield from $this->unwrap()->yieldBlock('_report_filters_entry_column_row', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('_report_filters_entry_condition_row', $context, $blocks);
        // line 68
        yield "
";
        // line 69
        yield from $this->unwrap()->yieldBlock('_report_filters_entry_value_row', $context, $blocks);
        // line 78
        yield "
";
        // line 79
        yield from $this->unwrap()->yieldBlock('_report_filters_row', $context, $blocks);
        // line 91
        yield "
";
        // line 92
        yield from $this->unwrap()->yieldBlock('_report_tableOrder_entry_column_row', $context, $blocks);
        // line 104
        yield "
";
        // line 105
        yield from $this->unwrap()->yieldBlock('_report_tableOrder_entry_direction_row', $context, $blocks);
        // line 117
        yield "
";
        // line 118
        yield from $this->unwrap()->yieldBlock('_report_tableOrder_row', $context, $blocks);
        // line 130
        yield "
";
        // line 131
        yield from $this->unwrap()->yieldBlock('aggregator_row', $context, $blocks);
        // line 140
        yield "
";
        // line 141
        yield from $this->unwrap()->yieldBlock('filter_selector_row', $context, $blocks);
        // line 180
        yield "
";
        // line 181
        yield from $this->unwrap()->yieldBlock('table_order_row', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_aggregators_entry_column_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"choice-wrapper col-xs-6\" data-form-block=\"_report_aggregators_entry_column_row\">
    <label class=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "label_attr", [], "any", false, false, false, 3), "class", [], "any", false, false, false, 3), "html", null, true);
        yield "\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "label", [], "any", false, false, false, 3)), "html", null, true);
        yield "</label>
    <select id=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "full_name", [], "any", false, false, false, 4), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "attr", [], "any", false, false, false, 4), "class", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "choices", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 6
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 6));
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 6) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6))) {
                yield "selected";
            }
            yield ">
                ";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7), "html", null, true);
            yield "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    </select>
</div>
";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_aggregators_entry_function_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "<div class=\"choice-wrapper col-xs-4\" data-form-block=\"_report_aggregators_entry_function_row\">
    <label class=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "label_attr", [], "any", false, false, false, 16), "class", [], "any", false, false, false, 16), "html", null, true);
        yield "\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "label", [], "any", false, false, false, 16)), "html", null, true);
        yield "</label>
    <select id=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
            name=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "full_name", [], "any", false, false, false, 18), "html", null, true);
        yield "\"
            class=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "attr", [], "any", false, false, false, 19), "class", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
            onchange=\"Mautic.checkReportCondition('";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "')\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "choices", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 22
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["function"], "value", [], "any", false, false, false, 22));
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["function"], "value", [], "any", false, false, false, 22) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "data", [], "any", false, false, false, 22))) {
                yield "selected";
            }
            yield ">
                ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["function"], "label", [], "any", false, false, false, 23), "html", null, true);
            yield "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['function'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "    </select>
</div>
";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_aggregators_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        $context["hasErrors"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)) > 0);
        // line 32
        yield "<div id=\"aggregatorsContainer\" class=\"row\" data-form-block=\"_report_aggregators_row\">
    <div class=\"form-group col-md-12 ";
        // line 33
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 33, $this->source); })())) {
            yield "has-error";
        }
        yield "\">
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'widget');
        yield "
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'errors');
        yield "
    </div>
    <div class=\"col-xs-12\">
        <button id=\"aggregators-button\"
                disabled
                type=\"button\"
                class=\"btn btn-primary\"
                onclick=\"Mautic.addReportRow('report_aggregators');\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.function"), "html", null, true);
        yield "</button>
    </div>
</div>
";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_filters_entry_column_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "<label class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "label_attr", [], "any", false, false, false, 48), "class", [], "any", false, false, false, 48), "html", null, true);
        yield "\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "vars", [], "any", false, false, false, 48), "label", [], "any", false, false, false, 48)), "html", null, true);
        yield "</label>
<select id=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "full_name", [], "any", false, false, false, 49), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "vars", [], "any", false, false, false, 49), "attr", [], "any", false, false, false, 49), "class", [], "any", false, false, false, 49), "html", null, true);
        yield "\">
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "choices", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 51
            yield "      <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 51));
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 51) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "vars", [], "any", false, false, false, 51), "data", [], "any", false, false, false, 51))) {
                yield "selected";
            }
            yield ">
          ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 52), "html", null, true);
            yield "
      </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "</select>
";
        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_filters_entry_condition_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 59
        yield "<label class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "label_attr", [], "any", false, false, false, 59), "class", [], "any", false, false, false, 59), "html", null, true);
        yield "\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59)), "html", null, true);
        yield "</label>
<select id=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "full_name", [], "any", false, false, false, 60), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "attr", [], "any", false, false, false, 60), "class", [], "any", false, false, false, 60), "html", null, true);
        yield "\" onchange=\"Mautic.checkReportCondition('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "')\">
    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "vars", [], "any", false, false, false, 61), "choices", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
            // line 62
            yield "    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "value", [], "any", false, false, false, 62));
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "value", [], "any", false, false, false, 62) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "data", [], "any", false, false, false, 62))) {
                yield "selected";
            }
            yield ">
        ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["condition"], "label", [], "any", false, false, false, 63), "html", null, true);
            yield "
    </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['condition'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "</select>
";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_filters_entry_value_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        $context["condition"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "parent", [], "any", false, false, false, 70), "children", [], "any", false, false, false, 70), "condition", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "value", [], "any", false, false, false, 70);
        // line 71
        yield "<div class=\"form-group mb-0\" data-form-block=\"_report_filters_entry_value_row\">
    <label class=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "label_attr", [], "any", false, false, false, 72), "class", [], "any", false, false, false, 72), "html", null, true);
        yield "\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "vars", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72)), "html", null, true);
        yield "</label>
    <input type=\"text\" id=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "full_name", [], "any", false, false, false, 73), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "vars", [], "any", false, false, false, 73), "attr", [], "any", false, false, false, 73), "class", [], "any", false, false, false, 73), "html", null, true);
        yield "\"
    value=\"";
        // line 74
        if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74), ", "));
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "data", [], "any", false, false, false, 74));
        }
        yield "\"
    ";
        // line 75
        if (CoreExtension::inFilter((isset($context["condition"]) || array_key_exists("condition", $context) ? $context["condition"] : (function () { throw new RuntimeError('Variable "condition" does not exist.', 75, $this->source); })()), ["empty", "notEmpty"])) {
            yield "disabled";
        }
        yield " />
</div>
";
        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_filters_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 80
        $context["hasErrors"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "vars", [], "any", false, false, false, 80), "errors", [], "any", false, false, false, 80)) > 0);
        // line 81
        yield "<div id=\"filterSelectorContainer\" class=\"row\" data-form-block=\"_report_filters_row\">
    <div class=\"form-group col-md-12 ";
        // line 82
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 82, $this->source); })())) {
            yield "has-error";
        }
        yield "\">
        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'widget');
        yield "
        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'errors');
        yield "
    </div>
    <div class=\"col-xs-12\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"Mautic.addReportRow('report_filters');\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.addfilter"), "html", null, true);
        yield "</button>
    </div>
</div>
";
        yield from [];
    }

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_tableOrder_entry_column_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 93
        yield "<div class=\"choice-wrapper col-xs-6\" data-form-block=\"_report_tableOrder_entry_column_row\">
    <label class=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "label_attr", [], "any", false, false, false, 94), "class", [], "any", false, false, false, 94), "html", null, true);
        yield "\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "label", [], "any", false, false, false, 94)), "html", null, true);
        yield "</label>
    <select id=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "full_name", [], "any", false, false, false, 95), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "attr", [], "any", false, false, false, 95), "class", [], "any", false, false, false, 95), "html", null, true);
        yield "\">
        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "vars", [], "any", false, false, false, 96), "choices", [], "any", false, false, false, 96));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 97
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 97));
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "value", [], "any", false, false, false, 97) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "vars", [], "any", false, false, false, 97), "data", [], "any", false, false, false, 97))) {
                yield "selected";
            }
            yield ">
              ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 98), "html", null, true);
            yield "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "    </select>
</div>
";
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_tableOrder_entry_direction_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 106
        yield "<div class=\"choice-wrapper col-xs-4\" data-form-block=\"_report_tableOrder_entry_direction_row\">
    <label class=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "label_attr", [], "any", false, false, false, 107), "class", [], "any", false, false, false, 107), "html", null, true);
        yield "\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "label", [], "any", false, false, false, 107)), "html", null, true);
        yield "</label>
    <select id=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "full_name", [], "any", false, false, false, 108), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "attr", [], "any", false, false, false, 108), "class", [], "any", false, false, false, 108), "html", null, true);
        yield "\">
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "vars", [], "any", false, false, false, 109), "choices", [], "any", false, false, false, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["direction"]) {
            // line 110
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["direction"], "value", [], "any", false, false, false, 110));
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["direction"], "value", [], "any", false, false, false, 110) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "data", [], "any", false, false, false, 110))) {
                yield "selected";
            }
            yield ">
            ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["direction"], "label", [], "any", false, false, false, 111), "html", null, true);
            yield "
        </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['direction'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "    </select>
</div>
";
        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__report_tableOrder_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 119
        $context["hasErrors"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "vars", [], "any", false, false, false, 119), "errors", [], "any", false, false, false, 119)) > 0);
        // line 120
        yield "<div id=\"tableOrderContainer\" class=\"row\" data-form-block=\"_report_tableOrder_row\">
    <div class=\"form-group col-md-12 ";
        // line 121
        if ((isset($context["hasErrors"]) || array_key_exists("hasErrors", $context) ? $context["hasErrors"] : (function () { throw new RuntimeError('Variable "hasErrors" does not exist.', 121, $this->source); })())) {
            yield "has-error";
        }
        yield "\">
        ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'widget');
        yield "
        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'errors');
        yield "
    </div>
    <div class=\"col-xs-12\">
        <button type=\"button\" class=\"btn btn-primary\" onclick=\"Mautic.addReportRow('report_tableOrder');\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.addtableorder"), "html", null, true);
        yield "</button>
    </div>
</div>
";
        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_aggregator_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 132
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132), "html", null, true);
        yield "_container\" class=\"row mb-sm\" data-form-block=\"aggregator_row\">
    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "vars", [], "any", false, false, false, 133), "form", [], "any", false, false, false, 133), "children", [], "any", false, false, false, 133), "function", [], "any", false, false, false, 133), 'row');
        yield "
    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "vars", [], "any", false, false, false, 134), "form", [], "any", false, false, false, 134), "children", [], "any", false, false, false, 134), "column", [], "any", false, false, false, 134), 'row');
        yield "
    <div class=\"col-xs-1 mt-lg\">
        <button type=\"button\" class=\"btn btn-danger btn-icon\" onclick=\"Mautic.removeReportRow('";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), "html", null, true);
        yield "_container');\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.removefilter"), "html", null, true);
        yield "\"><i class=\"ri-delete-row\"></i></button>
    </div>
</div>
";
        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_filter_selector_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        $context["inGroup"] = ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 142), "data", [], "any", false, true, false, 142), "glue", [], "any", true, true, false, 142) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 142), "data", [], "any", false, true, false, 142), "glue", [], "any", true, true, false, 142) && ("and" === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "data", [], "any", false, false, false, 142), "glue", [], "any", false, false, false, 142))));
        // line 143
        yield "<div class=\"panel ";
        if ((isset($context["inGroup"]) || array_key_exists("inGroup", $context) ? $context["inGroup"] : (function () { throw new RuntimeError('Variable "inGroup" does not exist.', 143, $this->source); })())) {
            yield "in-group";
        }
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "vars", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
        yield "_container\" data-form-block=\"filter_selector_row\">
    <div class=\"panel-heading\">
        <div class=\"panel-glue col-sm-2 pl-0\">
            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "vars", [], "any", false, false, false, 146), "form", [], "any", false, false, false, 146), "children", [], "any", false, false, false, 146), "glue", [], "any", false, false, false, 146), 'row');
        yield "
        </div>
    </div>
    <div class=\"panel-body\">
        <div class=\"row mb-sm\">
            <div class=\"choice-wrapper col-xs-3\">
                ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "vars", [], "any", false, false, false, 152), "form", [], "any", false, false, false, 152), "children", [], "any", false, false, false, 152), "column", [], "any", false, false, false, 152), 'row');
        yield "
            </div>
            <div class=\"choice-wrapper col-xs-2\">
                ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "vars", [], "any", false, false, false, 155), "form", [], "any", false, false, false, 155), "children", [], "any", false, false, false, 155), "condition", [], "any", false, false, false, 155), 'row');
        yield "
            </div>
            <div class=\"choice-wrapper col-xs-4\">
                ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "vars", [], "any", false, false, false, 158), "form", [], "any", false, false, false, 158), "children", [], "any", false, false, false, 158), "value", [], "any", false, false, false, 158), 'row');
        yield "
            </div>
            <div class=\"choice-wrapper col-xs-2\">
                ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "vars", [], "any", false, false, false, 161), "form", [], "any", false, false, false, 161), "children", [], "any", false, false, false, 161), "dynamic", [], "any", false, false, false, 161), 'row', ["attr" => ["size" => "sm"]]);
        yield "
            </div>
            <div class=\"col-xs-1 pa-0 jc-center\">
                <div class=\"d-flex fd-row\">
                    <!-- Clone Button -->
                    <button type=\"button\" class=\"btn btn-xs btn-ghost btn-icon btn-nospin\" onclick=\"Mautic.cloneReportRow('";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "vars", [], "any", false, false, false, 166), "id", [], "any", false, false, false, 166), "html", null, true);
        yield "_container');\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.clonefilter"), "html", null, true);
        yield "\">
                        <i class=\"ri-file-copy-line\"></i>
                    </button>
                    <!-- Remove Button -->
                    <button type=\"button\" class=\"btn btn-xs btn-ghost btn-icon btn-danger\" onclick=\"Mautic.removeReportRow('";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "vars", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170), "html", null, true);
        yield "_container');\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.removefilter"), "html", null, true);
        yield "\">
                        <i class=\"ri-subtract-line\"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 181
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_table_order_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 182
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "vars", [], "any", false, false, false, 182), "id", [], "any", false, false, false, 182), "html", null, true);
        yield "_container\" class=\"row mb-sm\" data-form-block=\"table_order_row\">
    ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "vars", [], "any", false, false, false, 183), "form", [], "any", false, false, false, 183), "children", [], "any", false, false, false, 183), "column", [], "any", false, false, false, 183), 'row');
        yield "
    ";
        // line 184
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "vars", [], "any", false, false, false, 184), "form", [], "any", false, false, false, 184), "children", [], "any", false, false, false, 184), "direction", [], "any", false, false, false, 184), 'row');
        yield "
    <div class=\"col-xs-2 mt-lg\">
        <button type=\"button\" class=\"btn btn-ghost btn-icon btn-sm\" onclick=\"Mautic.removeReportRow('";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "vars", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186), "html", null, true);
        yield "_container');\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.report.label.removefilter"), "html", null, true);
        yield "\"><i class=\"ri-delete-bin-2-line fs-14\"></i></button>
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
        return "@MauticReport/FormTheme/Report/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  749 => 186,  744 => 184,  740 => 183,  735 => 182,  728 => 181,  711 => 170,  702 => 166,  694 => 161,  688 => 158,  682 => 155,  676 => 152,  667 => 146,  656 => 143,  654 => 142,  647 => 141,  636 => 136,  631 => 134,  627 => 133,  622 => 132,  615 => 131,  606 => 126,  600 => 123,  596 => 122,  590 => 121,  587 => 120,  585 => 119,  578 => 118,  571 => 114,  562 => 111,  553 => 110,  549 => 109,  541 => 108,  533 => 107,  530 => 106,  523 => 105,  516 => 101,  507 => 98,  498 => 97,  494 => 96,  486 => 95,  478 => 94,  475 => 93,  468 => 92,  459 => 87,  453 => 84,  449 => 83,  443 => 82,  440 => 81,  438 => 80,  431 => 79,  421 => 75,  413 => 74,  405 => 73,  397 => 72,  394 => 71,  392 => 70,  385 => 69,  379 => 66,  370 => 63,  361 => 62,  357 => 61,  347 => 60,  338 => 59,  331 => 58,  325 => 55,  316 => 52,  307 => 51,  303 => 50,  295 => 49,  286 => 48,  279 => 47,  270 => 42,  260 => 35,  256 => 34,  250 => 33,  247 => 32,  245 => 31,  238 => 30,  231 => 26,  222 => 23,  213 => 22,  209 => 21,  205 => 20,  201 => 19,  197 => 18,  193 => 17,  185 => 16,  182 => 15,  175 => 14,  168 => 10,  159 => 7,  150 => 6,  146 => 5,  138 => 4,  130 => 3,  127 => 2,  120 => 1,  115 => 181,  112 => 180,  110 => 141,  107 => 140,  105 => 131,  102 => 130,  100 => 118,  97 => 117,  95 => 105,  92 => 104,  90 => 92,  87 => 91,  85 => 79,  82 => 78,  80 => 69,  77 => 68,  75 => 58,  72 => 57,  70 => 47,  67 => 46,  65 => 30,  62 => 29,  60 => 14,  57 => 13,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/FormTheme/Report/layout.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/FormTheme/Report/layout.html.twig");
    }
}
