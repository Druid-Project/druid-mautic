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

/* @MauticLead/Timeline/_list.html.twig */
class __TwigTemplate_859301b6a3de91748633843180b47b69 extends Template
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
        yield "<!-- timeline -->
<div class=\"table-responsive\">
    <table class=\"table table-hover\" id=\"contact-timeline\">
        <thead>
        <tr>
            <th class=\"timeline-icon np\"></th>
            <th class=\"table-expand np\">
                <a class=\"table-expand-button\" data-activate-details=\"all\" data-toggle=\"tooltip\" title=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        yield "\">
                    <span class=\"ri-arrow-down-s-line\"></span>
                </a>
            </th>
            ";
        // line 12
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventLabel", "text" => "mautic.lead.timeline.event_name", "class" => "timeline-name", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "target" => "#timeline-table"]);
        // line 19
        yield "

            ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventType", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "target" => "#timeline-table"]);
        // line 28
        yield "

            ";
        // line 30
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "timestamp", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)) . ".timeline"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "target" => "#timeline-table"]);
        // line 37
        yield "
        </tr>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 40, $this->source); })()), "events", [], "any", false, false, false, 40));
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
            // line 41
            yield "            ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 41)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 41)) : ("ri-history-line"));
            // line 42
            yield "            ";
            $context["eventLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 42)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 42)) : (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 42)));
            // line 43
            yield "            ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 43, $this->source); })()))) {
                // line 44
                yield "                ";
                $context["eventLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 45
                    yield "                  <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 45, $this->source); })()), "href", [], "any", false, false, false, 45), "html", null, true);
                    yield "\" ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 45)) {
                        yield "data-toggle=\"ajax\"";
                    } else {
                        yield "target=\"_new\"";
                    }
                    yield ">";
                    // line 46
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 46, $this->source); })()), "label", [], "any", false, false, false, 46));
                    // line 47
                    yield "</a>
                ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 49
                yield "            ";
            }
            // line 50
            yield "
            ";
            // line 51
            $context["details"] = "";
            // line 52
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 52)) {
                // line 53
                yield "                ";
                $context["details"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 53), ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 53, $this->source); })())], false, true));
                // line 54
                yield "            ";
            }
            // line 55
            yield "
            <tr class=\"timeline-row ";
            // line 56
            if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56) % 2)) {
                yield "timeline-row-highlighted";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "featured", [], "any", true, true, false, 56) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "featured", [], "any", false, false, false, 56)))) {
                yield "timeline-featured";
            }
            yield "\">
                <td class=\"timeline-icon np\">
                    <span class=\"fa ri-fw ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\"></span>
                </td>
                <td class=\"table-expand np\">
                    <a href=\"javascript:void(0);\"
                       data-activate-details=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
                       class=\"table-expand-button ";
            // line 63
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 63, $this->source); })()))) {
                yield "disabled";
            }
            yield "\"
                       data-toggle=\"tooltip\" title=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            yield "\">
                       <span class=\"ri-arrow-down-s-line\"></span>
                    </a>
                </td>
                <td class=\"timeline-name\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 68, $this->source); })()), "html", null, true);
            yield "</td>
                <td class=\"timeline-type\">";
            // line 69
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 69)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 69), "html", null, true);
            }
            yield "</td>
                <td class=\"timeline-timestamp\">";
            // line 70
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 70), "local", "Y-m-d H:i:s", true);
            yield "</td>
            </tr>
            ";
            // line 72
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 72, $this->source); })()))) {
                // line 73
                yield "                <tr class=\"timeline-row ";
                if ((0 == CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73) % 2)) {
                    yield "timeline-row-highlighted";
                }
                yield " timeline-details hide\" id=\"timeline-details-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73), "html", null, true);
                yield "\">
                    <td colspan=\"6\">
                        <!-- template: \"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 75), "html", null, true);
                yield "\" -->
                        ";
                // line 76
                yield (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 76, $this->source); })());
                yield "
                        <!--/ template: \"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 77), "html", null, true);
                yield "\" -->
                    </td>
                </tr>
            ";
            }
            // line 81
            yield "        ";
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
        // line 82
        yield "        </tbody>
    </table>
</div>
";
        // line 85
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" => CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 86, $this->source); })()), "page", [], "any", false, false, false, 86), "fixedPages" => CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()), "maxPages", [], "any", false, false, false, 87), "fixedLimit" => true, "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contacttimeline_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 89
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "target" => "#timeline-table", "totalItems" => CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 91, $this->source); })()), "total", [], "any", false, false, false, 91)]);
        // line 92
        yield "
<!--/ timeline -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Timeline/_list.html.twig";
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
        return array (  251 => 92,  249 => 91,  248 => 89,  247 => 87,  246 => 86,  245 => 85,  240 => 82,  226 => 81,  219 => 77,  215 => 76,  211 => 75,  201 => 73,  199 => 72,  194 => 70,  188 => 69,  184 => 68,  177 => 64,  171 => 63,  167 => 62,  160 => 58,  149 => 56,  146 => 55,  143 => 54,  140 => 53,  137 => 52,  135 => 51,  132 => 50,  129 => 49,  124 => 47,  122 => 46,  112 => 45,  109 => 44,  106 => 43,  103 => 42,  100 => 41,  83 => 40,  78 => 37,  76 => 35,  75 => 34,  74 => 30,  70 => 28,  68 => 26,  67 => 25,  66 => 21,  62 => 19,  60 => 17,  59 => 16,  58 => 12,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Timeline/_list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Timeline/_list.html.twig");
    }
}
