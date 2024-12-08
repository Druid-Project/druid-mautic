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

/* @MauticCampaign/Campaign/_builder.html.twig */
class __TwigTemplate_6985beeb75b3c3ded3672c953df8cd63 extends Template
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
        // line 9
        yield "<div id=\"campaign-builder\" class=\"hide builder campaign-builder live\">
    <div class=\"btns-builder\">
        ";
        // line 11
        yield from         $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticCampaign/Campaign/_builder.html.twig", 11)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["label" => "mautic.core.form.apply", "variant" => "primary", "onclick" => "Mautic.saveCampaignFromBuilder();", "icon" => "ri-save-line", "attributes" => ["class" => "btn-apply-builder", "type" => "submit"]], ["label" => "mautic.core.close.builder", "variant" => "secondary", "onclick" => "Mautic.closeCampaignBuilder();", "icon" => "ri-close-line", "attributes" => ["class" => "btn-close-campaign-builder"]]]]));
        // line 34
        yield "    </div>
    <div id=\"builder-errors\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\">test</div>
    <div class=\"builder-content\">
        <div id=\"CampaignCanvas\">
            <div id=\"CampaignEvent_newsource";
        // line 38
        if ((array_key_exists("campaignSources", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 38, $this->source); })())))) {
            yield "_hide";
        }
        yield "\" class=\"text-center list-campaign-source list-campaign-leadsource\">
                <div class=\"campaign-event-content\">
                    <div>
                        <span class=\"campaign-event-name ellipsis\">
                            <i class=\"mr-sm ri-team-line\"></i> ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.add_new_source"), "html", null, true);
        yield "
                        </span>
                    </div>
                </div>
            </div>

            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 48, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 49
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Source/_index.html.twig", ["sourceType" => CoreExtension::getAttribute($this->env, $this->source,             // line 50
$context["source"], "sourceType", [], "any", false, false, false, 50), "names" => CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["source"], "names", [], "any", false, false, false, 51), "campaignId" => CoreExtension::getAttribute($this->env, $this->source,             // line 52
$context["source"], "campaignId", [], "any", false, false, false, 52)]);
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
        unset($context['_seq'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 56, $this->source); })()));
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
            // line 57
            yield "                ";
            if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "deleted", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "deleted", [], "any", false, false, false, 57), null)) : (null)))) {
                // line 58
                yield "                  ";
                $context["settings"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["eventSettings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 58), [], "array", false, true, false, 58), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 58), [], "array", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["eventSettings"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 58), [], "array", false, true, false, 58), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "type", [], "any", false, false, false, 58), [], "array", false, false, false, 58), null)) : (null));
                // line 59
                yield Twig\Extension\CoreExtension::include($this->env, $context, ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "template", [], "array", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "template", [], "array", false, false, false, 59), "@MauticCampaign/Event/_generic.html.twig")) : ("@MauticCampaign/Event/_generic.html.twig")), ["event" =>                 // line 60
$context["event"], "campaignId" =>                 // line 61
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 61, $this->source); })())]);
            }
            // line 64
            yield "            ";
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
        // line 66
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCampaign/Campaign/Builder/_index.html.twig", ["campaignSources" =>         // line 67
(isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 67, $this->source); })()), "eventSettings" =>         // line 68
(isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 68, $this->source); })()), "campaignId" =>         // line 69
(isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 69, $this->source); })())]);
        // line 71
        yield "</div>
        <div id=\"EventJumpOverlay\"></div>
    </div>
</div>
<!-- dropped coordinates -->
<input type=\"hidden\" value=\"\" id=\"droppedX\"/>
<input type=\"hidden\" value=\"\" id=\"droppedY\"/>
<input type=\"hidden\" value=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["campaignId"]) || array_key_exists("campaignId", $context) ? $context["campaignId"] : (function () { throw new RuntimeError('Variable "campaignId" does not exist.', 78, $this->source); })()));
        yield "\" id=\"campaignId\"/>";
        // line 79
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "CampaignEventModal", "header" => false, "footerButtons" => true, "dismissible" => false]);
        // line 85
        yield "<script>
    /**
     * We typecast to object here so that an empty value will
     * be encoded to {} instead of []. Adding JSON_FORCE_OBJECT
     * is not an option because it does a deep transform to
     * object, whereas typecasting only does the first level.
     */
    Mautic.campaignBuilderCanvasSettings = ";
        // line 92
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 92, $this->source); })()))) {
            yield json_encode((isset($context["canvasSettings"]) || array_key_exists("canvasSettings", $context) ? $context["canvasSettings"] : (function () { throw new RuntimeError('Variable "canvasSettings" does not exist.', 92, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderCanvasSources = ";
        // line 93
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 93, $this->source); })()))) {
            yield json_encode((isset($context["campaignSources"]) || array_key_exists("campaignSources", $context) ? $context["campaignSources"] : (function () { throw new RuntimeError('Variable "campaignSources" does not exist.', 93, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderCanvasEvents = ";
        // line 94
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 94, $this->source); })()))) {
            yield json_encode((isset($context["campaignEvents"]) || array_key_exists("campaignEvents", $context) ? $context["campaignEvents"] : (function () { throw new RuntimeError('Variable "campaignEvents" does not exist.', 94, $this->source); })()), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderConnectionRestrictions = ";
        // line 95
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 95, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 95))) {
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 95, $this->source); })()), "connectionRestrictions", [], "array", false, false, false, 95), Twig\Extension\CoreExtension::constant("JSON_PRETTY_PRINT"));
        } else {
            yield "{}";
        }
        yield ";
    Mautic.campaignBuilderHasEventClone = ";
        // line 96
        if ((isset($context["hasEventClone"]) || array_key_exists("hasEventClone", $context) ? $context["hasEventClone"] : (function () { throw new RuntimeError('Variable "hasEventClone" does not exist.', 96, $this->source); })())) {
            yield "true";
        } else {
            yield "false";
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
        return "@MauticCampaign/Campaign/_builder.html.twig";
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
        return array (  211 => 96,  203 => 95,  195 => 94,  187 => 93,  179 => 92,  170 => 85,  168 => 79,  165 => 78,  156 => 71,  154 => 69,  153 => 68,  152 => 67,  151 => 66,  137 => 64,  134 => 61,  133 => 60,  132 => 59,  129 => 58,  126 => 57,  109 => 56,  106 => 55,  92 => 52,  91 => 51,  90 => 50,  89 => 49,  72 => 48,  63 => 42,  54 => 38,  48 => 34,  46 => 11,  42 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/Campaign/_builder.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/Campaign/_builder.html.twig");
    }
}
