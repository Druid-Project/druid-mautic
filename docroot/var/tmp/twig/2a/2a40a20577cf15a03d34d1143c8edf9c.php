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

/* @MauticLead/Lead/lead_stats.html.twig */
class __TwigTemplate_d3da92bdf68a62f1ba2ea5de892e33c0 extends Template
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
        if (array_key_exists("emailStats", $context)) {
            // line 2
            yield "    <div class=\"lead-stats-title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.stats.email_title"), "html", null, true);
            yield "</div>
    <div class=\"lead-stats row-no-gutters jc-space-between gap-sm fw-nowrap-md\">
        ";
            // line 4
            $context["stats"] = [["name" => "mautic.lead.stats.sent_count", "value" => CoreExtension::getAttribute($this->env, $this->source,             // line 5
(isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 5, $this->source); })()), "sent_count", [], "array", false, false, false, 5), "icon" => "ri-mail-send-line"], ["name" => "mautic.lead.stats.open_rate", "value" => (CoreExtension::getAttribute($this->env, $this->source,             // line 6
(isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 6, $this->source); })()), "open_rate", [], "array", false, false, false, 6) * 100), "suffix" => "%", "icon" => "ri-mail-open-line"], ["name" => "mautic.lead.stats.click_through_rate", "value" => (CoreExtension::getAttribute($this->env, $this->source,             // line 7
(isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 7, $this->source); })()), "click_through_rate", [], "array", false, false, false, 7) * 100), "suffix" => "%", "icon" => "ri-cursor-line"], ["name" => "mautic.lead.stats.click_through_open_rate", "value" => (CoreExtension::getAttribute($this->env, $this->source,             // line 8
(isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 8, $this->source); })()), "click_through_open_rate", [], "array", false, false, false, 8) * 100), "suffix" => "%", "icon" => "ri-bar-chart-line"]];
            // line 10
            yield "
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                // line 12
                yield "        <div class=\"lead-stats-el tile h-144 jc-space-between col-lg-3 col-xs-12\">
            <i class=\"tile-icon ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "icon", [], "any", false, false, false, 13), "html", null, true);
                yield "\"></i>
            <span class=\"lead-stats-name fw-b ellipsis\">";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "name", [], "any", false, false, false, 14)), "html", null, true);
                yield "</span>
            <span class=\"lead-stats-val lh-1 fs-40\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "value", [], "any", false, false, false, 15), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "suffix", [], "any", false, false, false, 15), "")) : ("")), "html", null, true);
                yield "</span>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "    </div>
    ";
            // line 19
            if (((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 19, $this->source); })()), "sent_count", [], "array", false, false, false, 19) == 0) && (CoreExtension::getAttribute($this->env, $this->source,             // line 20
(isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 20, $this->source); })()), "open_rate", [], "array", false, false, false, 20) == 0)) && (CoreExtension::getAttribute($this->env, $this->source,             // line 21
(isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 21, $this->source); })()), "click_through_rate", [], "array", false, false, false, 21) == 0)) && (CoreExtension::getAttribute($this->env, $this->source,             // line 22
(isset($context["emailStats"]) || array_key_exists("emailStats", $context) ? $context["emailStats"] : (function () { throw new RuntimeError('Variable "emailStats" does not exist.', 22, $this->source); })()), "click_through_open_rate", [], "array", false, false, false, 22) == 0))) {
                // line 24
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/no_information.html.twig", ["tip" => "mautic.contact.noinformation.statistics"]);
                yield "
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/lead_stats.html.twig";
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
        return array (  92 => 24,  90 => 22,  89 => 21,  88 => 20,  87 => 19,  84 => 18,  74 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 11,  56 => 10,  54 => 8,  53 => 7,  52 => 6,  51 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/lead_stats.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/lead_stats.html.twig");
    }
}
