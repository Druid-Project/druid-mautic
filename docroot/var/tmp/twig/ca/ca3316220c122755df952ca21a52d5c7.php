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

/* @MauticCampaign/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_02257a48af1c8140db946dddfc536cc5 extends Template
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
        $context["item"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "log", [], "any", false, false, false, 1);
        // line 2
        $context["errors"] = false;
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 3), "errors", [], "any", true, true, false, 3) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "metadata", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3)))) {
            // line 4
            yield "    ";
            $context["errors"] = ((is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4))) ? (Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4), "<br />")) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "metadata", [], "any", false, false, false, 4), "errors", [], "any", false, false, false, 4)));
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 5
($context["item"] ?? null), "metadata", [], "any", false, true, false, 5), "failed", [], "any", true, true, false, 5) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "metadata", [], "any", false, false, false, 5), "failed", [], "any", false, false, false, 5)))) {
            // line 6
            yield "    ";
            $context["errors"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "metadata", [], "any", false, false, false, 6), "reason", [], "any", false, false, false, 6))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "metadata", [], "any", false, false, false, 6), "reason", [], "any", false, false, false, 6)) : ("mautic.campaign.event.failed.timeline"));
            // line 7
            yield "    ";
            $context["errors"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 7, $this->source); })()));
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 8
($context["item"] ?? null), "fail_reason", [], "any", true, true, false, 8) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 8, $this->source); })()), "fail_reason", [], "any", false, false, false, 8)))) {
            // line 9
            yield "    ";
            $context["errors"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "fail_reason", [], "any", false, false, false, 9);
        }
        // line 11
        yield "
";
        // line 12
        $context["cancelled"] = (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "isScheduled", [], "any", false, false, false, 12)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 12, $this->source); })()), "dateTriggered", [], "any", false, false, false, 12)));
        // line 13
        $context["dateSpan"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "triggerDate", [], "any", false, false, false, 13))) ? ((((((("<span class=\"timeline-campaign-event-date-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "event_id", [], "any", false, false, false, 13)) . "\" data-date=\"") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "triggerDate", [], "any", false, false, false, 13), "format", ["Y-m-d H:i:s"], "method", false, false, false, 13)) . "\">") . $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "triggerDate", [], "any", false, false, false, 13))) . "</span>")) : (""));
        // line 14
        yield "
";
        // line 15
        if ((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "    ";
            // line 17
            yield "    ";
            $context["item"] = Twig\Extension\CoreExtension::merge((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), ["isScheduled" => true]);
        }
        // line 19
        yield "
<div class=\"mt-10\">
";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "isScheduled", [], "any", false, false, false, 21)) {
            // line 22
            yield "    <p class=\"mt-0 mb-10 text-info\" id=\"timeline-campaign-event-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "event_id", [], "any", false, false, false, 22), "html", null, true);
            yield "\">
        <span id=\"timeline-campaign-event-text-";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "event_id", [], "any", false, false, false, 23), "html", null, true);
            yield "\"";
            yield (((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 23, $this->source); })())) ? (" class=\"text-warning\"") : (""));
            yield ">
            <i class=\"ri-time-line\"></i>
            <span class=\"timeline-campaign-event-scheduled-";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "event_id", [], "any", false, false, false, 25), "html", null, true);
            yield (((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 25, $this->source); })())) ? (" hide") : (""));
            yield "\">
                ";
            // line 26
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.event.scheduled.time", ["%date%" => (isset($context["dateSpan"]) || array_key_exists("dateSpan", $context) ? $context["dateSpan"] : (function () { throw new RuntimeError('Variable "dateSpan" does not exist.', 26, $this->source); })()), "%event%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "eventLabel", [], "any", false, false, false, 26)]));
            yield "
            </span>
            <span class=\"timeline-campaign-event-cancelled-";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 28, $this->source); })()), "event_id", [], "any", false, false, false, 28), "html", null, true);
            yield ((Twig\Extension\CoreExtension::testEmpty((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 28, $this->source); })()))) ? (" hide") : (""));
            yield "\">
                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.cancelled.time", ["%date%" => (isset($context["dateSpan"]) || array_key_exists("dateSpan", $context) ? $context["dateSpan"] : (function () { throw new RuntimeError('Variable "dateSpan" does not exist.', 29, $this->source); })()), "%event%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "eventLabel", [], "any", false, false, false, 29)]), "html", null, true);
            yield "
            </span>
        </span>
        ";
            // line 32
            if (((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 32, $this->source); })()) && $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess("lead:leads:editown", "lead:leads:editother", CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 32, $this->source); })()), "getPermissionUser", [], "method", false, false, false, 32)))) {
                // line 33
                yield "        <span class=\"form-buttons btn-group btn-group-xs mb-3\" role=\"group\" aria-label=\"Field options\">
            <button type=\"button\" id=\"timeline-campaign-event-save-";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "event_id", [], "any", false, false, false, 34), "html", null, true);
                yield "\" class=\"btn btn-ghost btn-nospin\" onmousedown=\"return false;\" onclick=\"Mautic.saveScheduledCampaignEvent(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "event_id", [], "any", false, false, false, 34), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "getId", [], "method", false, false, false, 34), "html", null, true);
                yield ")\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.save"), "html", null, true);
                yield "\" style=\"display:none\">
                <i class=\"ri-save-line text-primary\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-ghost btn-nospin btn-reschedule\" onclick=\"Mautic.updateScheduledCampaignEvent(";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "event_id", [], "any", false, false, false, 37), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 37, $this->source); })()), "getId", [], "method", false, false, false, 37), "html", null, true);
                yield ")\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.reschedule"), "html", null, true);
                yield "\">
                <i class=\"ri-time-line text-primary\"></i>
            </button>
            <button type=\"button\" class=\"btn btn-ghost btn-nospin\"";
                // line 40
                yield (((isset($context["cancelled"]) || array_key_exists("cancelled", $context) ? $context["cancelled"] : (function () { throw new RuntimeError('Variable "cancelled" does not exist.', 40, $this->source); })())) ? (" disabled") : (""));
                yield " onclick=\"Mautic.cancelScheduledCampaignEvent(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "event_id", [], "any", false, false, false, 40), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 40, $this->source); })()), "getId", [], "method", false, false, false, 40), "html", null, true);
                yield ")\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.cancel"), "html", null, true);
                yield "\">
                <i class=\"ri-close-line text-danger\"></i>
            </button>
        </span>
        ";
            }
            // line 45
            yield "    </p>
";
        }
        // line 47
        yield "
";
        // line 48
        if ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 48, $this->source); })())) {
            // line 49
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "isScheduled", [], "any", false, false, false, 49)) {
                // line 50
                yield "    <hr />
    ";
            }
            // line 52
            yield "    <p class=\"text-danger mt-0 mb-10\"><i class=\"ri-alert-line\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.last_error"), "html", null, true);
            yield ":<br/>";
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 52, $this->source); })()));
            yield "</p>
";
        }
        // line 54
        yield "
";
        // line 55
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 55), "timeline", [], "any", true, true, false, 55) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "metadata", [], "any", false, false, false, 55), "timeline", [], "any", false, false, false, 55))) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "campaign_description", [], "any", false, false, false, 55)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 55, $this->source); })()), "event_description", [], "any", false, false, false, 55))) {
            // line 56
            yield "    <hr />

    ";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "metadata", [], "any", false, true, false, 58), "timeline", [], "any", true, true, false, 58) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "metadata", [], "any", false, false, false, 58), "timeline", [], "any", false, false, false, 58)))) {
                // line 59
                yield "        <p class=\"mt-0 mb-10\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 59, $this->source); })()), "metadata", [], "any", false, false, false, 59), "timeline", [], "any", false, false, false, 59), "html", null, true);
                yield "</p>
    ";
            }
            // line 61
            yield "
    ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 62, $this->source); })()), "campaign_description", [], "any", false, false, false, 62)) {
                // line 63
                yield "        <p class=\"mt-0 mb-10\">";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign.description", ["%description%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 63, $this->source); })()), "campaign_description", [], "any", false, false, false, 63)]));
                yield "</p>
    ";
            }
            // line 65
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 65, $this->source); })()), "event_description", [], "any", false, false, false, 65)) {
                // line 66
                yield "        <p class=\"mt-0 mb-10\">";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.campaign.description", ["%description%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 66, $this->source); })()), "event_description", [], "any", false, false, false, 66)]));
                yield "</p>
    ";
            }
        }
        // line 69
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  225 => 69,  218 => 66,  215 => 65,  209 => 63,  207 => 62,  204 => 61,  198 => 59,  196 => 58,  192 => 56,  190 => 55,  187 => 54,  179 => 52,  175 => 50,  172 => 49,  170 => 48,  167 => 47,  163 => 45,  149 => 40,  139 => 37,  127 => 34,  124 => 33,  122 => 32,  116 => 29,  111 => 28,  106 => 26,  101 => 25,  94 => 23,  89 => 22,  87 => 21,  83 => 19,  79 => 17,  77 => 16,  75 => 15,  72 => 14,  70 => 13,  68 => 12,  65 => 11,  61 => 9,  59 => 8,  56 => 7,  53 => 6,  51 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig", "/app/docroot/app/bundles/CampaignBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
