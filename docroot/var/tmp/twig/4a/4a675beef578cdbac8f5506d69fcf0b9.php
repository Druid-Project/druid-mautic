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

/* @MauticLead/List/form.html.twig */
class __TwigTemplate_4fdd6af1a746bbc623842d317e72792d extends Template
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
        // line 10
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@MauticLead/FormTheme/Filter/_leadlist_filters_entry_widget.html.twig", "@MauticLead/FormTheme/Filter/_leadlist_filters_widget.html.twig"], true);
        // line 10
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/List/form.html.twig", 10);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "leadlist";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "data", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15))) {
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16)]), "html", null, true);
        } else {
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.header.new"), "html", null, true);
        }
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        $context["index"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "filters", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)) > 0)) ? (max(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "filters", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23)))) : (0));
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        yield "
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <ul class=\"nav nav-tabs nav-tabs-contained\">
                    <li class=\"active\">
                        <a href=\"#details\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 31
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), ["filters"])) {
            yield "text-danger";
        }
        yield "\">
                            ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                            ";
        // line 33
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), ["filters"])) {
            // line 34
            yield "                              <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 36
        yield "                        </a>
                    </li>
                    <li data-toggle=\"tooltip\" title=\"\" data-placement=\"top\" data-original-title=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.segment.add.help"), "html", null, true);
        yield "\">
                        <a href=\"#filters\" role=\"tab\" data-toggle=\"tab\" class=\"";
        // line 39
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "filters", [], "any", false, false, false, 39))) {
            yield "text-danger";
        }
        yield "\">
                            ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.filters"), "html", null, true);
        yield "
                            ";
        // line 41
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "filters", [], "any", false, false, false, 41))) {
            // line 42
            yield "                                <i class=\"ri-alert-line\"></i>
                            ";
        }
        // line 44
        yield "                        </a>
                    </li>
                </ul>

                <!-- start: tab-content -->
                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0\" id=\"details\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "alias", [], "any", false, false, false, 56), 'row');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "publicName", [], "any", false, false, false, 59), 'row');
        yield "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'row');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade bdr-w-0\" id=\"filters\">
                        <div class=\"alert alert-info\"><p>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.segment.filter.info"), "html", null, true);
        yield "</p></div>
                        <div class=\"form-group\">
                            <div class=\"available-filters mb-md pl-0 col-md-4\" data-prototype=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "filters", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "prototype", [], "any", false, false, false, 71), 'widget'));
        yield "\" data-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 71, $this->source); })()) + 1), "html", null, true);
        yield "\">
                                <select class=\"chosen form-control\" id=\"available_segment_filters\">
                                    <option value=\"\"></option>
                                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "vars", [], "any", false, false, false, 74), "fields", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["object"] => $context["field"]) {
            // line 75
            yield "                                      ";
            $context["icon"] = ((("company" == $context["object"])) ? ("building") : ("user"));
            // line 76
            yield "                                      ";
            $context["header"] = (($this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorHasId(("mautic.lead." . $context["object"]))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead." . $context["object"]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["object"])));
            // line 77
            yield "                                      <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 77, $this->source); })()), "html", null, true);
            yield "\">
                                          ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["field"]);
            foreach ($context['_seq'] as $context["value"] => $context["params"]) {
                // line 79
                yield "                                              ";
                $context["operators"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 79))) ? (json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "operators", [], "any", false, false, false, 79))) : ("{}"));
                // line 80
                yield "                                              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"]);
                yield "\"
                                                      id=\"available_";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
                                                      data-field-object=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["object"], "html", null, true);
                yield "\"
                                                      data-field-type=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["params"], "properties", [], "any", false, false, false, 83), "type", [], "any", false, false, false, 83), "html", null, true);
                yield "\"
                                                      data-field-operators=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["operators"]) || array_key_exists("operators", $context) ? $context["operators"] : (function () { throw new RuntimeError('Variable "operators" does not exist.', 84, $this->source); })()));
                yield "\"
                                                      class=\"segment-filter ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 85, $this->source); })()), "html", null, true);
                yield "\">
                                                      ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["params"], "label", [], "any", false, false, false, 86)), "html", null, true);
                yield "
                                              </option>
                                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['value'], $context['params'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                                      </optgroup>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['object'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                                </select>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"selected-filters\" id=\"leadlist_filters\">
                            ";
        // line 96
        if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "filters", [], "any", false, false, false, 96))) {
            // line 97
            yield "                                <div class=\"alert alert-danger has-error\">
                                    ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "filters", [], "any", false, false, false, 98), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 101
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "filters", [], "any", false, false, false, 101), 'widget');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 height-auto bdr-l\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "category", [], "any", false, false, false, 110), 'row');
        yield "
            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "isGlobal", [], "any", false, false, false, 111), 'row');
        yield "
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "isPreferenceCenter", [], "any", false, false, false, 112), 'row');
        yield "
            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "isPublished", [], "any", false, false, false, 113), 'row');
        yield "
        </div>
    </div>
</div>
";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/List/form.html.twig";
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
        return array (  312 => 117,  305 => 113,  301 => 112,  297 => 111,  293 => 110,  280 => 101,  274 => 98,  271 => 97,  269 => 96,  262 => 91,  255 => 89,  246 => 86,  242 => 85,  238 => 84,  234 => 83,  230 => 82,  224 => 81,  219 => 80,  216 => 79,  212 => 78,  207 => 77,  204 => 76,  201 => 75,  197 => 74,  189 => 71,  184 => 69,  176 => 64,  168 => 59,  162 => 56,  156 => 53,  145 => 44,  141 => 42,  139 => 41,  135 => 40,  129 => 39,  125 => 38,  121 => 36,  117 => 34,  115 => 33,  111 => 32,  105 => 31,  95 => 24,  93 => 23,  86 => 22,  80 => 18,  77 => 16,  74 => 15,  67 => 14,  56 => 12,  51 => 10,  49 => 5,  42 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/List/form.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/List/form.html.twig");
    }
}
