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

/* @MauticLead/Timeline/_list_filter_form.html.twig */
class __TwigTemplate_1b1c8ad40affc0d8c83fecccc17e1996 extends Template
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
        yield "<!-- filter form -->
<form method=\"post\" action=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        yield "\" class=\"panel\" id=\"timeline-filters\">
    <div class=\"form-control-icon pa-md\">
        <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 4, $this->source); })()), "filters", [], "any", false, false, false, 4), "search", [], "any", false, false, false, 4));
        yield "\">
        <span class=\"the-icon ri-search-line text-muted\"></span>
    </div>
    ";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 7) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 7, $this->source); })()), "types", [], "any", false, false, false, 7)))) {
            // line 8
            yield "        <div class=\"history-search panel-footer text-muted\">
            <div class=\"row\">
                <div class=\"col-sm-5 mna-3\">
                <label class=\"pt-lg\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            yield "</label>
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\">
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 13, $this->source); })()), "types", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 14
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"]);
                yield "\" ";
                if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 14, $this->source); })()), "filters", [], "any", false, false, false, 14), "includeEvents", [], "any", false, false, false, 14))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "                    </select>
                </div>
                <div class=\"col-sm-5 mna-3\">
                <label class=\"pt-lg\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
            yield "</label>
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\">
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 23, $this->source); })()), "types", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 24
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"]);
                yield "\" ";
                if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 24, $this->source); })()), "filters", [], "any", false, false, false, 24), "excludeEvents", [], "any", false, false, false, 24))) {
                    yield "selected";
                }
                yield ">
                                ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                yield "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "                    </select>
                </div>
                <div class=\"col-sm-2 jc-end\">
                    ";
            // line 31
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticLead/Timeline/_list_filter_form.html.twig", 31)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contact_timeline_export_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,             // line 34
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "icon" => "ri-download-line", "label" => "mautic.core.export", "size" => "sm", "attributes" => ["data-toggle" => "download"]]]]));
            // line 44
            yield "                </div>
            </div>
        </div>
    ";
        }
        // line 48
        yield "    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48));
        yield "\" />
</form>
<!--/ filter form -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Timeline/_list_filter_form.html.twig";
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
        return array (  138 => 48,  132 => 44,  130 => 34,  129 => 31,  124 => 28,  115 => 25,  106 => 24,  102 => 23,  97 => 21,  92 => 18,  83 => 15,  74 => 14,  70 => 13,  65 => 11,  60 => 8,  58 => 7,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Timeline/_list_filter_form.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Timeline/_list_filter_form.html.twig");
    }
}
