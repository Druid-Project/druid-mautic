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

/* @MauticLead/Auditlog/_list.html.twig */
class __TwigTemplate_c789d1d55cb582cf5edc61d297aec540 extends Template
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
        yield "<!-- filter form -->
<form method=\"post\" action=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        yield "\" class=\"panel\" id=\"auditlog-filters\">
    <div class=\"form-control-icon pa-md\">
        <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })()), "filters", [], "array", false, false, false, 9), "search", [], "array", false, false, false, 9));
        yield "\">
        <span class=\"the-icon ri-search-line text-muted\"></span>
    </div>
    ";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 12) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 12, $this->source); })()), "types", [], "any", false, false, false, 12)))) {
            // line 13
            yield "        <div class=\"history-search panel-footer text-muted\">
            <div class=\"row\">
                <div class=\"col-sm-5 mna-3\">
                    <label class=\"pt-lg\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
            yield "</label>
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\"\">
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "types", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 19
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
                yield "\" ";
                if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "filters", [], "any", false, false, false, 19), "includeEvents", [], "any", false, false, false, 19))) {
                    yield "selected";
                }
                yield ">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                // line 21
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "                    </select>
                </div>
                <div class=\"col-sm-5 mna-3\">
                    <label class=\"pt-lg\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
            yield "</label>
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\">
                        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()), "types", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                // line 29
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"], "html", null, true);
                yield "\" ";
                if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 29, $this->source); })()), "filters", [], "any", false, false, false, 29), "excludeEvents", [], "any", false, false, false, 29))) {
                    yield "selected";
                }
                yield ">";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                // line 31
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "                    </select>
                </div>
                <div class=\"col-sm-2 mt-lg\">
                    ";
            // line 36
            if ((isset($context["enableExportPermission"]) || array_key_exists("enableExportPermission", $context) ? $context["enableExportPermission"] : (function () { throw new RuntimeError('Variable "enableExportPermission" does not exist.', 36, $this->source); })())) {
                // line 37
                yield "                    ";
                yield from                 $this->loadTemplate("@MauticCore/Helper/button.html.twig", "@MauticLead/Auditlog/_list.html.twig", 37)->unwrap()->yield(CoreExtension::merge($context, ["buttons" => [["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contact_auditlog_export_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,                 // line 40
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "icon" => "ri-download-line", "label" => "mautic.core.export", "size" => "sm", "attributes" => ["data-toggle" => "download"], "variant" => "tertiary", "icon_only" => false]]]));
                // line 52
                yield "                    ";
            }
            // line 53
            yield "                </div>
            </div>
        </div>
    ";
        }
        // line 57
        yield "    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57));
        yield "\" />
</form>
<script>
    mauticLang['showMore'] = '";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
        yield "';
    mauticLang['hideMore'] = '";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.hide"), "html", null, true);
        yield "';
</script>
<div id=\"auditlog-table\">
  <!-- auditlog -->
  <div class=\"table-responsive\">
      <table class=\"table table-hover\" id=\"contact-auditlog\">
          <thead>
          <tr>
            <th class=\"timeline-icon np\"></th>
            <th class=\"table-expand np\">
                <a class=\"table-expand-button\" data-activate-details=\"all\" data-toggle=\"tooltip\" title=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        yield "\">
                    <span class=\"ri-arrow-down-s-line\"></span>
                </a>
            </th>
              ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "userName", "text" => "mautic.lead.timeline.user_name", "class" => "timeline-name", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 79
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 80
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "target" => "#auditlog-table"]);
        // line 82
        yield "
              ";
        // line 83
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "action", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 87
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 88
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "target" => "#auditlog-table"]);
        // line 90
        yield "
              ";
        // line 91
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "dateAdded", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." . CoreExtension::getAttribute($this->env, $this->source,         // line 95
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)) . ".auditlog"), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 96
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "target" => "#auditlog-table"]);
        // line 98
        yield "
          </tr>
          <tbody>
          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 101, $this->source); })()), "events", [], "any", false, false, false, 101));
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
            // line 102
            yield "              ";
            $context["counter"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 102) + 1);
            // line 103
            yield "              ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 103), "ri-history-line")) : ("ri-history-line"));
            // line 104
            yield "              ";
            $context["eventLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 104))) : (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 104)));
            // line 105
            yield "              ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 105, $this->source); })()))) {
                // line 106
                yield "                  ";
                $context["linkType"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 106)) ? ("data-toggle=\"ajax\"") : ("target=\"_new\""));
                // line 107
                yield "                  ";
                $context["eventLabel"] = (((((("<a href=\"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 107, $this->source); })()), "href", [], "any", false, false, false, 107)) . "\" ") . (isset($context["linkType"]) || array_key_exists("linkType", $context) ? $context["linkType"] : (function () { throw new RuntimeError('Variable "linkType" does not exist.', 107, $this->source); })())) . ">") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 107, $this->source); })()), "label", [], "any", false, false, false, 107)) . "</a>");
                // line 108
                yield "              ";
            }
            // line 109
            yield "
              ";
            // line 110
            $context["rowStripe"] = Twig\Extension\CoreExtension::cycle(["", "timeline-row-highlighted"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 110));
            // line 111
            yield "              ";
            $context["hasDetails"] = false;
            // line 112
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "details", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 113
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 113) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "details", [], "any", false, false, false, 113)) > 0))) {
                    // line 114
                    yield "                      ";
                    $context["hasDetails"] = true;
                    // line 115
                    yield "                  ";
                }
                // line 116
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "              <tr class=\"timeline-row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowStripe"]) || array_key_exists("rowStripe", $context) ? $context["rowStripe"] : (function () { throw new RuntimeError('Variable "rowStripe" does not exist.', 117, $this->source); })()), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "featured", [], "any", true, true, false, 117)) {
                yield "timeline-featured";
            }
            yield "\">
                <td class=\"timeline-icon np\">
                    <span class=\"fa ri-fw ";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 119, $this->source); })()), "html", null, true);
            yield "\"></span>
                </td>
                  <td class=\"table-expand np\">
                      <a href=\"javascript:void(0);\"
                         data-activate-details=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 123, $this->source); })()), "html", null, true);
            yield "\"
                         class=\"table-expand-button ";
            // line 124
            if (( !CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 124) || ((isset($context["hasDetails"]) || array_key_exists("hasDetails", $context) ? $context["hasDetails"] : (function () { throw new RuntimeError('Variable "hasDetails" does not exist.', 124, $this->source); })()) == false))) {
                yield "disabled";
            }
            yield "\"
                         data-toggle=\"tooltip\"
                         title=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            yield "\">
                         <span class=\"ri-arrow-down-s-line\"></span>
                      </a>
                  </td>
                  <td class=\"timeline-name\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 130, $this->source); })()), "html", null, true);
            yield "</td>
                  <td class=\"timeline-type\">";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 131)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.event." . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 131))), "html", null, true);
            }
            // line 132
            yield "              </td>
                  <td class=\"timeline-timestamp\">";
            // line 133
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 133), "local", "Y-m-d H:i:s", true);
            yield "</td>
              </tr>
              ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 135) && ((isset($context["hasDetails"]) || array_key_exists("hasDetails", $context) ? $context["hasDetails"] : (function () { throw new RuntimeError('Variable "hasDetails" does not exist.', 135, $this->source); })()) == true))) {
                // line 136
                yield "                  <!-- contentTemplate: \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 136), "html", null, true);
                yield "\" -->
                  <tr class=\"timeline-row ";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowStripe"]) || array_key_exists("rowStripe", $context) ? $context["rowStripe"] : (function () { throw new RuntimeError('Variable "rowStripe" does not exist.', 137, $this->source); })()), "html", null, true);
                yield " timeline-details hide\" id=\"auditlog-details-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 137, $this->source); })()), "html", null, true);
                yield "\">
                      <td colspan=\"6\">
                        ";
                // line 139
                yield Twig\Extension\CoreExtension::include($this->env, $context, [CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 139), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 139)], ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 139, $this->source); })())]);
                yield "
                      </td>
                  </tr>
              ";
            }
            // line 143
            yield "          ";
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
        // line 144
        yield "          </tbody>
      </table>
  </div>
  ";
        // line 147
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["page" => CoreExtension::getAttribute($this->env, $this->source,         // line 148
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 148, $this->source); })()), "page", [], "any", false, false, false, 148), "fixedPages" => CoreExtension::getAttribute($this->env, $this->source,         // line 149
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 149, $this->source); })()), "maxPages", [], "any", false, false, false, 149), "fixedLimit" => true, "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_auditlog_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source,         // line 151
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "target" => "#auditlog-table", "totalItems" => CoreExtension::getAttribute($this->env, $this->source,         // line 153
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 153, $this->source); })()), "total", [], "any", false, false, false, 153)]);
        // line 154
        yield "
  <!--/ auditlog -->
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Auditlog/_list.html.twig";
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
        return array (  359 => 154,  357 => 153,  356 => 151,  355 => 149,  354 => 148,  353 => 147,  348 => 144,  334 => 143,  327 => 139,  320 => 137,  315 => 136,  313 => 135,  308 => 133,  305 => 132,  301 => 131,  297 => 130,  290 => 126,  283 => 124,  279 => 123,  272 => 119,  262 => 117,  256 => 116,  253 => 115,  250 => 114,  247 => 113,  242 => 112,  239 => 111,  237 => 110,  234 => 109,  231 => 108,  228 => 107,  225 => 106,  222 => 105,  219 => 104,  216 => 103,  213 => 102,  196 => 101,  191 => 98,  189 => 96,  188 => 95,  187 => 91,  184 => 90,  182 => 88,  181 => 87,  180 => 83,  177 => 82,  175 => 80,  174 => 79,  173 => 75,  166 => 71,  153 => 61,  149 => 60,  142 => 57,  136 => 53,  133 => 52,  131 => 40,  129 => 37,  127 => 36,  122 => 33,  115 => 31,  113 => 30,  105 => 29,  101 => 28,  96 => 26,  91 => 23,  84 => 21,  82 => 20,  74 => 19,  70 => 18,  65 => 16,  60 => 13,  58 => 12,  50 => 9,  45 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Auditlog/_list.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Auditlog/_list.html.twig");
    }
}
