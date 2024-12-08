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

/* @MauticCampaign/Source/_index.html.twig */
class __TwigTemplate_652b79ac35961253ac50d925738740e9 extends Template
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
        // line 7
        $context["sourceType"] = ((array_key_exists("sourceType", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 7, $this->source); })()), null)) : (null));
        // line 8
        yield "
";
        // line 9
        if (( !array_key_exists("update", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 9, $this->source); })())))) {
            // line 10
            yield "  <div id=\"CampaignEvent_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 10, $this->source); })()), "html", null, true);
            yield "\" data-type=\"source\" class=\"draggable list-campaign-source list-campaign-leadsource\">
";
        }
        // line 12
        yield "<div class=\"h5 fw-b mb-5 campaign-source-title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.form.lead_source"), "html", null, true);
        yield "</div>
<div class=\"campaign-event-content\">
    <div><span class=\"campaign-event-name ellipsis\"><i class=\"mr-xs campaign-event-icon ";
        // line 14
        if (("lists" == (isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 14, $this->source); })()))) {
            yield "ri-pie-chart-line";
        } else {
            yield "ri-survey-line";
        }
        yield "\"></i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("names", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 14, $this->source); })()), null)) : (null)), "html", null, true);
        yield "</span></div>
</div>

";
        // line 17
        if (( !array_key_exists("update", $context) || Twig\Extension\CoreExtension::testEmpty((isset($context["update"]) || array_key_exists("update", $context) ? $context["update"] : (function () { throw new RuntimeError('Variable "update" does not exist.', 17, $this->source); })())))) {
            // line 18
            yield "  <div class=\"campaign-event-buttons hide\">
    ";
            // line 19
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Source/_index.html.twig", 19)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "edit", "objectId" =>             // line 24
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 24, $this->source); })()), "sourceType" =>             // line 25
(isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 25, $this->source); })())]), "variant" => "secondary", "icon" => "ri-edit-line", "size" => "xs", "icon_only" => true, "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.edit.btn.tooltip"), "attributes" => ["data-toggle" => "ajaxmodal", "data-prevent-dismiss" => "true", "data-target" => "#CampaignEventModal", "class" => "btn-edit"]], ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignsource_action", ["objectAction" => "delete", "objectId" =>             // line 42
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 42, $this->source); })()), "sourceType" =>             // line 43
(isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 43, $this->source); })())]), "variant" => "primary", "danger" => true, "icon" => "ri-close-line", "size" => "xs", "icon_only" => true, "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.remove.btn.tooltip"), "attributes" => ["data-toggle" => "ajax", "data-target" => ("CampaignEvent_" .             // line 53
(isset($context["sourceType"]) || array_key_exists("sourceType", $context) ? $context["sourceType"] : (function () { throw new RuntimeError('Variable "sourceType" does not exist.', 53, $this->source); })())), "data-ignore-formexit" => "true", "data-method" => "POST", "data-hide-loadingbar" => "true", "class" => "btn-delete"]]]]));
            // line 62
            yield "  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Source/_index.html.twig";
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
        return array (  85 => 62,  83 => 53,  82 => 43,  81 => 42,  80 => 25,  79 => 24,  78 => 19,  75 => 18,  73 => 17,  61 => 14,  55 => 12,  49 => 10,  47 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Source/_index.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Source/_index.html.twig");
    }
}
