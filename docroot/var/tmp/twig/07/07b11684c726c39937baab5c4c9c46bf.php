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

/* @MauticLead/LeadCampaigns/index.html.twig */
class __TwigTemplate_d956b33fbd248901d8441febf38d3ba5 extends Template
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
        // line 6
        $context["leadId"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6);
        // line 7
        $context["leadName"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 7, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 7);
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaigns"]) || array_key_exists("campaigns", $context) ? $context["campaigns"] : (function () { throw new RuntimeError('Variable "campaigns" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "<ul class=\"list-group\">
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaigns"]) || array_key_exists("campaigns", $context) ? $context["campaigns"] : (function () { throw new RuntimeError('Variable "campaigns" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 11
                yield "        ";
                $context["switch"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "inCampaign", [], "any", false, false, false, 11)) ? ("ri-toggle-fill") : ("ri-toggle-line"));
                // line 12
                yield "        ";
                $context["bgClass"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["c"], "inCampaign", [], "any", false, false, false, 12)) ? ("text-success") : ("text-danger"));
                // line 13
                yield "    <li class=\"list-group-item\">
        <i class=\"ri-lg ri-fw ";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["switch"]) || array_key_exists("switch", $context) ? $context["switch"] : (function () { throw new RuntimeError('Variable "switch" does not exist.', 14, $this->source); })()), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bgClass"]) || array_key_exists("bgClass", $context) ? $context["bgClass"] : (function () { throw new RuntimeError('Variable "bgClass" does not exist.', 14, $this->source); })()), "html", null, true);
                yield "\" id=\"leadCampaignToggle";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 14), "html", null, true);
                yield "\" onclick=\"Mautic.toggleLeadCampaign('leadCampaignToggle";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 14), "html", null, true);
                yield "', ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 14, $this->source); })()), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 14), "html", null, true);
                yield ");\"></i>
        <a data-dismiss=\"modal\" class=\"pull-right\" href=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_campaign_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 15)]), "html", null, true);
                yield "\" data-toggle=\"ajax\"><span class=\"label label-primary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.id"), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 15), "html", null, true);
                yield "</span></a>
        <span> ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 16), "html", null, true);
                yield "</span>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['c'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "</ul>
";
        } else {
            // line 21
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/no_information.html.twig", ["tip" => "mautic.campaign.lead.notfound"]);
            // line 23
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/LeadCampaigns/index.html.twig";
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
        return array (  101 => 23,  99 => 21,  95 => 19,  86 => 16,  78 => 15,  64 => 14,  61 => 13,  58 => 12,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/LeadCampaigns/index.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/LeadCampaigns/index.html.twig");
    }
}
