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

/* @MauticReport/Report/_details_content_header.html.twig */
class __TwigTemplate_8ff771d6b3f64995bba319f7ab382564 extends Template
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
        $context["showDynamicFilters"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 1), "showDynamicFilters", [], "any", true, true, false, 1) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 1, $this->source); })()), "settings", [], "any", false, false, false, 1), "showDynamicFilters", [], "any", false, false, false, 1));
        // line 2
        $context["hideDateRangeFilter"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["report"] ?? null), "settings", [], "any", false, true, false, 2), "hideDateRangeFilter", [], "any", true, true, false, 2) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 2, $this->source); })()), "settings", [], "any", false, false, false, 2), "hideDateRangeFilter", [], "any", false, false, false, 2));
        // line 4
        yield "<!-- report detail header -->
";
        // line 5
        yield from         $this->loadTemplate("@MauticCore/Helper/description.html.twig", "@MauticReport/Report/_details_content_header.html.twig", 5)->unwrap()->yield(CoreExtension::merge($context, ["description" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 5, $this->source); })()), "description", [], "any", false, false, false, 5)]));
        // line 6
        yield "<!--/ report detail header -->
<!-- report detail collapseable -->
<div id=\"report-shelves\" class=\"mb-5\" aria-multiselectable=\"true\">
    <div class=\"collapse pr-md pl-md\" id=\"report-details\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0\">
                <table class=\"table table-hover mb-0\">
                    <tbody>
                      ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["report"]) || array_key_exists("report", $context) ? $context["report"] : (function () { throw new RuntimeError('Variable "report" does not exist.', 14, $this->source); })())]);
        yield "
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"collapse ";
        // line 20
        if ((isset($context["showDynamicFilters"]) || array_key_exists("showDynamicFilters", $context) ? $context["showDynamicFilters"] : (function () { throw new RuntimeError('Variable "showDynamicFilters" does not exist.', 20, $this->source); })())) {
            yield "in";
        }
        yield "\" id=\"report-filters\">
        <div class=\"pr-md pl-md pb-md\">
            <div class=\"panel shd-none mb-0 pa-lg\">
                <div class=\"row\">
                    <div class=\"col-sm-12 mb-10 ";
        // line 24
        if ((isset($context["hideDateRangeFilter"]) || array_key_exists("hideDateRangeFilter", $context) ? $context["hideDateRangeFilter"] : (function () { throw new RuntimeError('Variable "hideDateRangeFilter" does not exist.', 24, $this->source); })())) {
            yield "hide";
        }
        yield "\">
                        ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" => (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 25, $this->source); })())]);
        yield "
                    </div>
                    ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 27, $this->source); })()), 'form_start');
        yield "
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 28, $this->source); })()), "children", [], "any", false, false, false, 28), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ("hidden" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "block_prefixes", [], "any", false, false, false, 28), 1, [], "array", false, false, false, 28)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 29
            yield "                      <div class=\"col-sm-4\">
                          ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            yield "
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "                    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dynamicFilterForm"]) || array_key_exists("dynamicFilterForm", $context) ? $context["dynamicFilterForm"] : (function () { throw new RuntimeError('Variable "dynamicFilterForm" does not exist.', 33, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
    <!--/ report detail collapseable -->

    <div>
        <!-- report detail collapseable toggler -->
        <div class=\"hr-expand nm\">
            <a href=\"#report-details\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"report-details\">
                <span class=\"caret\"></span> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
            </a>
            <a href=\"#report-filters\" class=\"arrow text-muted ";
        // line 46
        if ( !(isset($context["showDynamicFilters"]) || array_key_exists("showDynamicFilters", $context) ? $context["showDynamicFilters"] : (function () { throw new RuntimeError('Variable "showDynamicFilters" does not exist.', 46, $this->source); })())) {
            yield "collapsed";
        }
        yield "\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"report-filters\">
                <span class=\"caret\"></span> ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        yield "
            </a>
        </div>
        <!--/ report detail collapseable toggler -->
    </div>
</div>

<div class=\"report-content\">
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticReport/Report/_details_content_header.html.twig";
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
        return array (  136 => 47,  130 => 46,  125 => 44,  110 => 33,  101 => 30,  98 => 29,  94 => 28,  90 => 27,  85 => 25,  79 => 24,  70 => 20,  61 => 14,  51 => 6,  49 => 5,  46 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticReport/Report/_details_content_header.html.twig", "/app/docroot/app/bundles/ReportBundle/Resources/views/Report/_details_content_header.html.twig");
    }
}
