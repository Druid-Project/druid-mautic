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

/* @MauticCampaign/Campaign/Builder/_source_list.html.twig */
class __TwigTemplate_e9781de48f9e96963321ea803fde20b8 extends Template
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
        yield "<div id=\"SourceGroupList\" class=\"hide\">
    <h4 class=\"mb-xs\">
        <span>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.leadsource.header"), "html", null, true);
        yield "</span>
    </h4>
    <select id=\"SourceList\" class=\"campaign-event-selector\">
        <option value=\"\"></option>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["lists", "forms"]);
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 13
            yield "            <option id=\"campaignLeadSource_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\"
                    class=\"option_campaignLeadSource_";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\"
                    data-href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "new", "objectId" => (isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 15, $this->source); })()), "sourceType" => $context["option"]]), "html", null, true);
            yield "\"
                    data-target=\"#CampaignEventModal\"
                    title=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.campaign.leadsource." . $context["option"]) . ".tooltip")));
            yield "\"
                    value=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"]);
            yield "\"
                    ";
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["campaignSources"] ?? null), $context["option"], [], "array", true, true, false, 19)) {
                yield "disabled";
            }
            yield ">
                <span>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign.leadsource." . $context["option"])), "html", null, true);
            yield "</span>
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    </select>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/Builder/_source_list.html.twig";
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
        return array (  94 => 23,  85 => 20,  79 => 19,  75 => 18,  71 => 17,  66 => 15,  62 => 14,  57 => 13,  53 => 12,  46 => 8,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/Builder/_source_list.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/Builder/_source_list.html.twig");
    }
}
