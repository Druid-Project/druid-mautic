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

/* @MauticChannel/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_bfdb8ecbb0bd373a01162897ae6d4d2d extends Template
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
        $context["extra"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1);
        // line 2
        $context["log"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 2, $this->source); })()), "log", [], "any", false, false, false, 2);
        // line 3
        $context["eventType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3);
        // line 4
        $context["eventSettings"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 4, $this->source); })()), "campaignEventSettings", [], "any", false, false, false, 4);
        // line 5
        $context["messageSettings"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 5, $this->source); })()), "action", [], "any", false, false, false, 5), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 5, $this->source); })()), [], "array", false, false, false, 5), "timelineTemplateVars", [], "any", false, false, false, 5), "messageSettings", [], "any", false, false, false, 5);
        // line 6
        $context["template"] = "@MauticCampaign/SubscribedEvents/Timeline/index.html.twig";
        // line 7
        $context["channelEvent"] = (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })());
        // line 8
        $context["channelEvent"] = Twig\Extension\CoreExtension::merge((isset($context["channelEvent"]) || array_key_exists("channelEvent", $context) ? $context["channelEvent"] : (function () { throw new RuntimeError('Variable "channelEvent" does not exist.', 8, $this->source); })()), ["extra" => ["log" => (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 8, $this->source); })())]]);
        // line 9
        $context["vars"] = ["event" => (isset($context["channelEvent"]) || array_key_exists("channelEvent", $context) ? $context["channelEvent"] : (function () { throw new RuntimeError('Variable "channelEvent" does not exist.', 9, $this->source); })())];
        // line 10
        yield "
";
        // line 11
        $context["counter"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 11, $this->source); })()), "log", [], "any", false, false, false, 11), "metadata", [], "any", false, false, false, 11));
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 12, $this->source); })()), "log", [], "any", false, false, false, 12), "metadata", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["channel"] => $context["results"]) {
            // line 13
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["messageSettings"] ?? null), $context["channel"], [], "array", true, true, false, 13)) {
                // line 14
                yield "        <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["messageSettings"]) || array_key_exists("messageSettings", $context) ? $context["messageSettings"] : (function () { throw new RuntimeError('Variable "messageSettings" does not exist.', 14, $this->source); })()), $context["channel"], [], "array", false, false, false, 14), "label", [], "array", false, false, false, 14), "html", null, true);
                yield "</h4>
        ";
                // line 15
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "metadata", [], "any", false, true, false, 15), $context["channel"], [], "array", false, true, false, 15), "dnc", [], "any", true, true, false, 15)) {
                    // line 16
                    yield "            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Mautic\ChannelBundle\Twig\ChannelExtension']->getChannelDncText(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 16, $this->source); })()), "metadata", [], "any", false, false, false, 16), $context["channel"], [], "array", false, false, false, 16), "dnc", [], "any", false, false, false, 16)), "html", null, true);
                    yield "
        ";
                }
                // line 18
                yield "        ";
                // line 19
                yield "        ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["messageSettings"]) || array_key_exists("messageSettings", $context) ? $context["messageSettings"] : (function () { throw new RuntimeError('Variable "messageSettings" does not exist.', 19, $this->source); })()), $context["channel"], [], "array", false, false, false, 19), "campaignAction", [], "any", false, false, false, 19))) {
                    // line 20
                    yield "        ";
                    $context["eventType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["messageSettings"]) || array_key_exists("messageSettings", $context) ? $context["messageSettings"] : (function () { throw new RuntimeError('Variable "messageSettings" does not exist.', 20, $this->source); })()), $context["channel"], [], "array", false, false, false, 20), "campaignAction", [], "array", false, false, false, 20);
                    // line 21
                    yield "
        ";
                    // line 22
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["eventSettings"] ?? null), "action", [], "any", false, true, false, 22), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 22, $this->source); })()), [], "array", false, true, false, 22), "timelineTemplate", [], "any", true, true, false, 22) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 22, $this->source); })()), "action", [], "any", false, false, false, 22), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 22, $this->source); })()), [], "array", false, false, false, 22), "timelineTemplate", [], "any", false, false, false, 22)))) {
                        // line 23
                        yield "            ";
                        $context["template"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 23, $this->source); })()), "action", [], "any", false, false, false, 23), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 23, $this->source); })()), [], "array", false, false, false, 23), "timelineTemplate", [], "any", false, false, false, 23);
                        // line 24
                        yield "        ";
                    }
                    // line 25
                    yield "        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["eventSettings"] ?? null), "action", [], "any", false, true, false, 25), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 25, $this->source); })()), [], "array", false, true, false, 25), "timelineTemplateVars", [], "any", true, true, false, 25) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 25, $this->source); })()), "action", [], "any", false, false, false, 25), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 25, $this->source); })()), [], "array", false, false, false, 25), "timelineTemplateVars", [], "any", false, false, false, 25)))) {
                        // line 26
                        yield "            ";
                        $context["extra"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 26, $this->source); })()), "event", [], "any", false, false, false, 26), "extra", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["eventSettings"]) || array_key_exists("eventSettings", $context) ? $context["eventSettings"] : (function () { throw new RuntimeError('Variable "eventSettings" does not exist.', 26, $this->source); })()), "action", [], "any", false, false, false, 26), (isset($context["eventType"]) || array_key_exists("eventType", $context) ? $context["eventType"] : (function () { throw new RuntimeError('Variable "eventType" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26), "timelineTemplateVars", [], "any", false, false, false, 26));
                        // line 27
                        yield "            ";
                        $context["vars"] = ["event" => ["extra" =>                         // line 29
(isset($context["extra"]) || array_key_exists("extra", $context) ? $context["extra"] : (function () { throw new RuntimeError('Variable "extra" does not exist.', 29, $this->source); })())]];
                        // line 32
                        yield "        ";
                    }
                    // line 33
                    yield "        ";
                }
                // line 34
                yield "        ";
                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 34, $this->source); })()) - 1);
                // line 35
                yield "        ";
                if (((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 35, $this->source); })()) > 0)) {
                    // line 36
                    yield "            <hr/>
        ";
                }
                // line 38
                yield "    ";
            }
            // line 39
            yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 39, $this->source); })()), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 39, $this->source); })()));
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
        unset($context['_seq'], $context['channel'], $context['results'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticChannel/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  146 => 39,  143 => 38,  139 => 36,  136 => 35,  133 => 34,  130 => 33,  127 => 32,  125 => 29,  123 => 27,  120 => 26,  117 => 25,  114 => 24,  111 => 23,  109 => 22,  106 => 21,  103 => 20,  100 => 19,  98 => 18,  92 => 16,  90 => 15,  85 => 14,  82 => 13,  65 => 12,  63 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticChannel/SubscribedEvents/Timeline/index.html.twig", "/app/docroot/app/bundles/ChannelBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
