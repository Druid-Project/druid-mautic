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

/* @MauticCampaign/Campaign/_events.html.twig */
class __TwigTemplate_1dc5559cfbf5a20b89672d29fc74acd5 extends Template
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
        // line 5
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 5, $this->source); })())) && is_iterable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 5, $this->source); })())))) {
            // line 6
            yield "<!-- start: trigger type event -->
<ul class=\"campaign-event-list\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 9
                yield "        ";
                $context["typeClass"] = (((("action" == CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 9)) && ("no" == CoreExtension::getAttribute($this->env, $this->source, $context["event"], "decisionPath", [], "any", false, false, false, 9)))) ? ("danger") : ("success"));
                // line 10
                yield "        ";
                $context["percentLabel"] = ((("danger" == (isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 10, $this->source); })()))) ? ("mautic.report.campaign.no.percent") : ("mautic.report.campaign.yes.percent"));
                // line 11
                yield "        ";
                $context["percentProp"] = ((("danger" == (isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 11, $this->source); })()))) ? ("noPercent") : ("yesPercent"));
                // line 12
                yield "        <li class=\"list-group-item\">
            <div class=\"progress-bar progress-bar-";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 13, $this->source); })()), "html", null, true);
                yield "\" style=\"width:";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "yesPercent", [], "any", false, false, false, 13), "html", null, true);
                yield "%; left: 0;\"></div>
            <div class=\"progress-bar progress-bar-danger\" style=\"width:";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "noPercent", [], "array", false, false, false, 14), "html", null, true);
                yield "%; left: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "yesPercent", [], "array", false, false, false, 14), "html", null, true);
                yield "%\"></div>
            <div class=\"box-layout\">
                <div class=\"visible-sm visible-md visible-lg col-stats\">
                    <span class=\"mt-xs label label-";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["typeClass"]) || array_key_exists("typeClass", $context) ? $context["typeClass"] : (function () { throw new RuntimeError('Variable "typeClass" does not exist.', 17, $this->source); })()), "html", null, true);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["percentLabel"]) || array_key_exists("percentLabel", $context) ? $context["percentLabel"] : (function () { throw new RuntimeError('Variable "percentLabel" does not exist.', 17, $this->source); })())), "html", null, true);
                yield "\">
                      ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], (isset($context["percentProp"]) || array_key_exists("percentProp", $context) ? $context["percentProp"] : (function () { throw new RuntimeError('Variable "percentProp" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18), "html", null, true);
                yield "%
                    </span>
                    ";
                // line 20
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 20) && ("action" != CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 20)))) {
                    // line 21
                    yield "                        <span class=\"label label-danger\" data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.no.percent"), "html", null, true);
                    yield "\">
                          ";
                    // line 22
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "noPercent", [], "any", false, false, false, 22), "html", null, true);
                    yield "%
                        </span>
                    ";
                }
                // line 25
                yield "                <span class=\"mt-xs label label-warning\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.completed.actions"), "html", null, true);
                yield "\">
                    ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "logCountProcessed", [], "any", false, false, false, 26), "html", null, true);
                yield "
                </span>
                <span size=\"sm\" class=\"mt-xs label label-gray\"  data-toggle=\"tooltip\" title=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.report.campaign.pending.actions"), "html", null, true);
                yield "\">
                    ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "logCountForPending", [], "any", false, false, false, 29), "html", null, true);
                yield "
                </span>
                </div>
                    <div class=\"col-md-5 va-m\">
                    <h5 class=\"fw-sb text-primary mb-xs\">
                        ";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 34), "html", null, true);
                yield "
                        ";
                // line 35
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 35) && ("action" != CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 35)))) {
                    // line 36
                    yield "                          <small class=\"text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "percent", [], "any", false, false, false, 36), "html", null, true);
                    yield "%</small>
                        ";
                }
                // line 38
                yield "
                    </h5>
                    <h6 class=\"text-white dark-sm\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 40), "html", null, true);
                yield "</h6>
                </div>
                <div class=\"col-md-3 va-m text-right\">
                    <em class=\"text-white dark-sm\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign." . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 43))), "html", null, true);
                yield "</em>
                </div>
            </div>
        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "</ul>
<!--/ end: trigger type event -->
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/_events.html.twig";
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
        return array (  157 => 48,  146 => 43,  140 => 40,  136 => 38,  130 => 36,  128 => 35,  124 => 34,  116 => 29,  112 => 28,  107 => 26,  102 => 25,  96 => 22,  91 => 21,  89 => 20,  84 => 18,  78 => 17,  70 => 14,  64 => 13,  61 => 12,  58 => 11,  55 => 10,  52 => 9,  48 => 8,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/_events.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/_events.html.twig");
    }
}
