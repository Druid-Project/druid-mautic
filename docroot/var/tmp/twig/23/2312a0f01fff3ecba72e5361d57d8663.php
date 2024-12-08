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

/* @MauticLead/Timeline/plugin_table.html.twig */
class __TwigTemplate_453a014a0ebbda12e4f318c6b2c15b48 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "isXmlHttpRequest", [], "any", false, false, false, 1)) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Timeline/plugin_table.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "  ";
        $context["leadId"] = ((array_key_exists("lead", $context)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) : (null));
        // line 5
        yield "
  ";
        // line 6
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "isXmlHttpRequest", [], "any", false, false, false, 6)) {
            // line 7
            yield "    <style>.container { margin: auto !important; }</style>
    <!-- filter form -->
    <form method=\"post\" action=\"";
            // line 9
            if (array_key_exists("lead", $context)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_view", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 9, $this->source); })())]), "html", null, true);
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_index", ["integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 9, $this->source); })())]), "html", null, true);
            }
            yield "\" class=\"panel\" id=\"timeline-filters\">
        <div class=\"form-control-icon pa-md\">
            <input type=\"text\" class=\"form-control bdr-w-0\" name=\"search\" id=\"search\" placeholder=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 11, $this->source); })()), "filters", [], "any", false, false, false, 11), "search", [], "any", false, false, false, 11));
            yield "\">
            <span class=\"the-icon ri-search-line text-muted\"></span>
        </div>
        ";
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "types", [], "any", true, true, false, 14) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 14, $this->source); })()), "types", [], "any", false, false, false, 14)))) {
                // line 15
                yield "            <div class=\"history-search panel-footer text-muted\">
                <div class=\"col-xs-6\">
                    <select name=\"includeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.include.placeholder"), "html", null, true);
                yield "\">
                        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 18, $this->source); })()), "types", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 19
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"]);
                    yield "\" ";
                    if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 19, $this->source); })()), "filters", [], "any", false, false, false, 19), "includeEvents", [], "any", false, false, false, 19))) {
                        yield "selected";
                    }
                    yield ">
                                ";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                    yield "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "                    </select>
                </div>
                <div class=\"col-xs-6\">
                    <select name=\"excludeEvents[]\" multiple=\"multiple\" class=\"form-control bdr-w-0\" data-placeholder=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.filter.bundles.exclude.placeholder"), "html", null, true);
                yield "\">
                        ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 27, $this->source); })()), "types", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
                    // line 28
                    yield "                            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeKey"]);
                    yield "\" ";
                    if (CoreExtension::inFilter($context["typeKey"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 28, $this->source); })()), "filters", [], "any", false, false, false, 28), "excludeEvents", [], "any", false, false, false, 28))) {
                        yield "selected";
                    }
                    yield ">
                                ";
                    // line 29
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["typeName"], "html", null, true);
                    yield "
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['typeKey'], $context['typeName'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                yield "                    </select>
                </div>
            </div>
        ";
            }
            // line 36
            yield "
        ";
            // line 37
            if (array_key_exists("lead", $context)) {
                // line 38
                yield "            <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38));
                yield "\"/>
        ";
            }
            // line 40
            yield "    </form>

    <script>
        mauticLang['showMore'] = '";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
            yield "';
        mauticLang['hideMore'] = '";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.hide"), "html", null, true);
            yield "';

        var timelineForm = mQuery('#timeline-filters');
        if (timelineForm.length) {
            timelineForm.on('change', function() {
                timelineForm.submit();
            }).on('keyup', function() {
                timelineForm.delay(200).submit();
            }).on('submit', function(e) {
                e.preventDefault();
                Mautic.refreshLeadTimeline(timelineForm);
            });

        }
    </script>

    <div id=\"timeline-table\">
  ";
        }
        // line 62
        yield "
  ";
        // line 63
        $context["baseUrl"] = ((array_key_exists("lead", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_view", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 63, $this->source); })())])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_plugin_timeline_index", ["integration" => (isset($context["integration"]) || array_key_exists("integration", $context) ? $context["integration"] : (function () { throw new RuntimeError('Variable "integration" does not exist.', 63, $this->source); })())])));
        // line 64
        yield "  <div class=\"table-responsive\">
      <div class=\"tl-header\">
          ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events", ["%total%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 66, $this->source); })()), "total", [], "any", false, false, false, 66)]), "html", null, true);
        yield "
          ";
        // line 67
        if (array_key_exists("lead", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.displaying_events_for_contact", ["%contact%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), "%id%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        }
        // line 68
        yield "          (<span class=\"tl-new\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["newCount"]) || array_key_exists("newCount", $context) ? $context["newCount"] : (function () { throw new RuntimeError('Variable "newCount" does not exist.', 68, $this->source); })()), "html", null, true);
        yield "</span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.events_new"), "html", null, true);
        yield ")
      </div>
      <table class=\"table table-hover\" id=\"contact-timeline\">
          <thead>
          <tr>
              <th class=\"timeline-icon\">
                  <a class=\"btn btn-sm btn-nospin btn-ghost\" data-activate-details=\"all\" data-toggle=\"tooltip\" title=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_all_details"), "html", null, true);
        yield "\">
                      <span class=\"ri-fw ri-corner-right-down-line\"></span>
                  </a>
              </th>
              ";
        // line 78
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventLabel", "text" => "mautic.lead.timeline.event_name", "class" => "timeline-name", "sessionVar" => (("lead." .         // line 82
(isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 82, $this->source); })())) . ".timeline"), "baseUrl" =>         // line 83
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 83, $this->source); })()), "target" => "#timeline-table"]);
        // line 85
        yield "

              ";
        // line 87
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "eventType", "text" => "mautic.lead.timeline.event_type", "class" => "visible-md visible-lg timeline-type", "sessionVar" => (("lead." .         // line 91
(isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 91, $this->source); })())) . ".timeline"), "baseUrl" =>         // line 92
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 92, $this->source); })()), "target" => "#timeline-table"]);
        // line 94
        yield "

              ";
        // line 96
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["orderBy" => "timestamp", "text" => "mautic.lead.timeline.event_timestamp", "class" => "visible-md visible-lg timeline-timestamp", "sessionVar" => (("lead." .         // line 100
(isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 100, $this->source); })())) . ".timeline"), "baseUrl" =>         // line 101
(isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 101, $this->source); })()), "target" => "#timeline-table"]);
        // line 103
        yield "
          </tr>
          <tbody>
          ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 106, $this->source); })()), "events", [], "any", false, false, false, 106));
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
            // line 107
            yield "              ";
            $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", true, true, false, 107)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "icon", [], "any", false, false, false, 107)) : ("ri-history-line"));
            // line 108
            yield "              ";
            $context["eventLabel"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", true, true, false, 108)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventLabel", [], "any", false, false, false, 108)) : (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 108)));
            // line 109
            yield "              ";
            if (is_iterable((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 109, $this->source); })()))) {
                // line 110
                yield "                  ";
                $context["eventLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 111
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 111, $this->source); })()), "href", [], "any", false, false, false, 111), "html", null, true);
                    yield "\" ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["eventLabel"] ?? null), "isExternal", [], "any", true, true, false, 111)) {
                        yield "data-toggle=\"ajax\"";
                    } else {
                        yield "target=\"_new\"";
                    }
                    yield ">";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 112, $this->source); })()), "label", [], "any", false, false, false, 112), "html", null, true);
                    // line 113
                    yield "</a>
                  ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 115
                yield "              ";
            }
            // line 116
            yield "
              ";
            // line 117
            $context["details"] = "";
            // line 118
            yield "              ";
            if ((array_key_exists("lead", $context) && CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", true, true, false, 118))) {
                // line 119
                yield "                  ";
                $context["details"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "contentTemplate", [], "any", false, false, false, 119), ["event" => $context["event"], "lead" => (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 119, $this->source); })())], false, true));
                // line 120
                yield "              ";
            }
            // line 121
            yield "
              <tr class=\"timeline-row ";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["", "timeline-row-highlighted"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122)), "html", null, true);
            yield " ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "feature", [], "any", true, true, false, 122)) {
                yield "timeline-featured";
            }
            yield "\">
                  <td class=\"timeline-icon\">
                      <a data-activate-details=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 124), "html", null, true);
            yield "\" class=\"btn btn-sm btn-nospin btn-ghost ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 124, $this->source); })()))) {
                yield "disabled";
            }
            yield "\" data-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.toggle_details"), "html", null, true);
            yield "\" data-target=\"timeline-details-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 124), "html", null, true);
            yield "\">
                          <span class=\"fa ri-fw ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 125, $this->source); })()), "html", null, true);
            yield "\"></span>
                      </a>
                  </td>
                  <td class=\"timeline-name\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["eventLabel"]) || array_key_exists("eventLabel", $context) ? $context["eventLabel"] : (function () { throw new RuntimeError('Variable "eventLabel" does not exist.', 128, $this->source); })()), "html", null, true);
            yield "</td>
                  <td class=\"timeline-type\">";
            // line 129
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", true, true, false, 129)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventType", [], "any", false, false, false, 129), "html", null, true);
            }
            yield "</td>
                  <td class=\"timeline-timestamp\">";
            // line 130
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "timestamp", [], "any", false, false, false, 130), "local", "Y-m-d H:i:s", true);
            yield "</td>
              </tr>
              ";
            // line 132
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 132, $this->source); })()))) {
                // line 133
                yield "                  <tr class=\"timeline-row ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["", "timeline-row-highlighted"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133)), "html", null, true);
                yield " timeline-details hide\" id=\"timeline-details-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133), "html", null, true);
                yield "\">
                      <td colspan=\"4\">
                          ";
                // line 135
                yield (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 135, $this->source); })());
                yield "
                      </td>
                  </tr>
              ";
            }
            // line 139
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
        // line 140
        yield "          </tbody>
      </table>
  </div>
  <!--/ timeline -->

  ";
        // line 145
        if ( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "isXmlHttpRequest", [], "any", false, false, false, 145)) {
            // line 146
            yield "    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Timeline/plugin_table.html.twig";
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
        return array (  405 => 146,  403 => 145,  396 => 140,  382 => 139,  375 => 135,  367 => 133,  365 => 132,  360 => 130,  354 => 129,  350 => 128,  344 => 125,  332 => 124,  323 => 122,  320 => 121,  317 => 120,  314 => 119,  311 => 118,  309 => 117,  306 => 116,  303 => 115,  298 => 113,  296 => 112,  286 => 111,  283 => 110,  280 => 109,  277 => 108,  274 => 107,  257 => 106,  252 => 103,  250 => 101,  249 => 100,  248 => 96,  244 => 94,  242 => 92,  241 => 91,  240 => 87,  236 => 85,  234 => 83,  233 => 82,  232 => 78,  225 => 74,  213 => 68,  209 => 67,  205 => 66,  201 => 64,  199 => 63,  196 => 62,  175 => 44,  171 => 43,  166 => 40,  160 => 38,  158 => 37,  155 => 36,  149 => 32,  140 => 29,  131 => 28,  127 => 27,  123 => 26,  118 => 23,  109 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 15,  86 => 14,  78 => 11,  69 => 9,  65 => 7,  63 => 6,  60 => 5,  57 => 4,  50 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Timeline/plugin_table.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Timeline/plugin_table.html.twig");
    }
}
