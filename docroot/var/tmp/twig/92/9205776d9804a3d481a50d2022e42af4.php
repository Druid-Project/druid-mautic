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

/* @MauticCampaign/Campaign/_preview.html.twig */
class __TwigTemplate_5823ad6ab4019d791541e4be2bffc0b1 extends Template
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
        // line 10
        yield "<div id=\"campaign-builder\" class=\"builder campaign-builder preview\">
    <div class=\"builder-content\">
        <div id=\"CampaignCanvas\">
            <div id=\"CampaignEvent_newsource";
        // line 13
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 13, $this->source); })()))) {
            yield "_hide";
        }
        yield "\" class=\"text-center list-campaign-source list-campaign-leadsource\">
                <div class=\"campaign-event-content\">
                    <div>
                        <span class=\"campaign-event-name ellipsis\">
                            <i class=\"mr-sm ri-team-line\"></i> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.add_new_source"), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>

            ";
        // line 23
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 23, $this->source); })()), "forms", [], "any", false, false, false, 23))) {
            // line 24
            yield "              ";
            $context["names"] = [];
            // line 25
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 25, $this->source); })()), "forms", [], "any", false, false, false, 25), "toArray", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
                // line 26
                yield "                ";
                $context["names"] = ((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 26, $this->source); })()) + [CoreExtension::getAttribute($this->env, $this->source, $context["form"], "name", [], "any", false, false, false, 26)]);
                // line 27
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['form'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Source/_index.html.twig", ["sourceType" => "forms", "campaignId" => CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "names" => Twig\Extension\CoreExtension::join(            // line 31
(isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 31, $this->source); })()), ", ")]);
        }
        // line 34
        yield "
            ";
        // line 35
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 35, $this->source); })()), "lists", [], "any", false, false, false, 35))) {
            // line 36
            yield "              ";
            $context["names"] = [];
            // line 37
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 37, $this->source); })()), "lists", [], "any", false, false, false, 37), "toArray", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                // line 38
                yield "                ";
                $context["names"] = ((isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 38, $this->source); })()) + [CoreExtension::getAttribute($this->env, $this->source, $context["list"], "name", [], "any", false, false, false, 38)]);
                // line 39
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['list'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Source/_index.html.twig", ["sourceType" => "lists", "campaignId" => CoreExtension::getAttribute($this->env, $this->source,             // line 42
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "names" => Twig\Extension\CoreExtension::join(            // line 43
(isset($context["names"]) || array_key_exists("names", $context) ? $context["names"] : (function () { throw new RuntimeError('Variable "names" does not exist.', 43, $this->source); })()), ", ")]);
        }
        // line 46
        yield "
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 47, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 48
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Event/_preview.html.twig", ["event" =>             // line 49
$context["event"], "campaignId" => CoreExtension::getAttribute($this->env, $this->source,             // line 50
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]);
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
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/Builder/_index.html.twig", ["campaignSources" =>         // line 55
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 55, $this->source); })()), "eventSettings" =>         // line 56
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 56, $this->source); })()), "campaignId" => CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57)]);
        // line 59
        yield "</div>
    </div>
</div>
<!-- dropped coordinates -->
<input type=\"hidden\" value=\"\" id=\"droppedX\"/>
<input type=\"hidden\" value=\"\" id=\"droppedY\"/>
<input type=\"hidden\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["campaign"]) || array_key_exists("campaign", $context) ? $context["campaign"] : (function () { throw new RuntimeError('Variable "campaign" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65));
        yield "\" id=\"campaignId\"/>";
        // line 66
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "CampaignEventModal", "header" => false, "footerButtons" => true, "dismissible" => false]);
        // line 72
        yield "<script>
    Mautic.campaignBuilderCanvasSettings = ";
        // line 73
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 73, $this->source); })()))) {
            yield json_encode((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 73, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderCanvasSources = ";
        // line 74
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 74, $this->source); })()))) {
            yield json_encode((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 74, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderCanvasEvents = ";
        // line 75
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 75, $this->source); })()))) {
            yield json_encode((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 75, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderConnectionRestrictions = ";
        // line 76
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 76, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 76))) {
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 76, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 76), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/Campaign/_preview.html.twig";
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
        return array (  197 => 76,  189 => 75,  181 => 74,  173 => 73,  170 => 72,  168 => 66,  165 => 65,  157 => 59,  155 => 57,  154 => 56,  153 => 55,  152 => 54,  138 => 50,  137 => 49,  136 => 48,  119 => 47,  116 => 46,  113 => 43,  112 => 42,  111 => 40,  105 => 39,  102 => 38,  97 => 37,  94 => 36,  92 => 35,  89 => 34,  86 => 31,  85 => 30,  84 => 28,  78 => 27,  75 => 26,  70 => 25,  67 => 24,  65 => 23,  56 => 17,  47 => 13,  42 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/_preview.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/_preview.html.twig");
    }
}
