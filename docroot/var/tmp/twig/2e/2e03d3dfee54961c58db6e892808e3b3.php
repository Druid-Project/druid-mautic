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

/* @MauticCampaign/Campaign/Builder/_event_list.html.twig */
class __TwigTemplate_342aac2b326b01762a9f438c9d4d3eed extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["action" => "primary", "decision" => "success", "condition" => "danger"]);
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
        foreach ($context['_seq'] as $context["eventGroup"] => $context["color"]) {
            // line 7
            yield "    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["eventGroup"]), "html", null, true);
            yield "GroupList\" class=\"hide\">
        <h4 class=\"mb-xs\">
            <span>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.campaign.event." . $context["eventGroup"]) . "s.header")), "html", null, true);
            yield "</span>
            ";
            // line 10
            yield from             $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/Builder/_event_list.html.twig", 10)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["icon" => "ri-fw ri-corner-right-up-line", "label" => "mautic.campaign.event.back_to_panel", "icon_only" => true, "size" => "xs", "variant" =>             // line 17
$context["color"], "attributes" => ["class" => "pull-right mb-xs", "type" => "button"]]]]));
            // line 25
            yield "        </h4>
        <select id=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $context["eventGroup"]), "html", null, true);
            yield "List\" class=\"campaign-event-selector\">
            <option value=\"\"></option>
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 28, $this->source); })()), $context["eventGroup"], [], "array", false, false, false, 28));
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 29
                yield "                <option id=\"campaignEvent_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["k"], ["." => ""]), "html", null, true);
                yield "\"
                        class=\"option_campaignEvent_";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["k"], ["." => ""]), "html", null, true);
                yield "\"
                        data-href=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaignevent_action", ["objectAction" => "new", "type" =>                 // line 33
$context["k"], "eventType" =>                 // line 34
$context["eventGroup"], "campaignId" =>                 // line 35
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 35, $this->source); })()), "anchor" => ""]), "html", null, true);
                // line 37
                yield "\"
                        data-target=\"#CampaignEventModal\"
                        title=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "description", [], "array", false, false, false, 39));
                yield "\"
                        value=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"]);
                yield "\">
                    <span>";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["e"], "label", [], "array", false, false, false, 41), "html", null, true);
                yield "</span>
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['e'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "        </select>
    </div>
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
        unset($context['_seq'], $context['eventGroup'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/Builder/_event_list.html.twig";
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
        return array (  119 => 44,  110 => 41,  106 => 40,  102 => 39,  98 => 37,  96 => 35,  95 => 34,  94 => 33,  93 => 31,  89 => 30,  84 => 29,  80 => 28,  75 => 26,  72 => 25,  70 => 17,  69 => 10,  65 => 9,  59 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/Builder/_event_list.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/Builder/_event_list.html.twig");
    }
}
