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

/* @MauticLead/SubscribedEvents/Timeline/utmadded.html.twig */
class __TwigTemplate_b85f815f33dbfebea999cf4d712c7af0 extends Template
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
        // line 5
        $context["utmTags"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "utmtags", [], "any", false, false, false, 5);
        // line 6
        yield "<dl class=\"dl-horizontal\">
  ";
        // line 7
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 7, $this->source); })()), "utm_campaign", [], "any", false, false, false, 7))) {
            // line 8
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmcampaign"), "html", null, true);
            yield ":</dt>
    <dd>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 9, $this->source); })()), "utm_campaign", [], "array", false, false, false, 9), "html", null, true);
            yield "</dd>
  ";
        }
        // line 11
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 11, $this->source); })()), "utm_content", [], "any", false, false, false, 11))) {
            // line 12
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmcontent"), "html", null, true);
            yield ":</dt>
    <dd>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 13, $this->source); })()), "utm_content", [], "array", false, false, false, 13), "html", null, true);
            yield "</dd>
  ";
        }
        // line 15
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 15, $this->source); })()), "utm_medium", [], "any", false, false, false, 15))) {
            // line 16
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmmedium"), "html", null, true);
            yield ":</dt>
    <dd>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 17, $this->source); })()), "utm_medium", [], "array", false, false, false, 17), "html", null, true);
            yield "</dd>
  ";
        }
        // line 19
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 19, $this->source); })()), "utm_source", [], "any", false, false, false, 19))) {
            // line 20
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.umtsource"), "html", null, true);
            yield ":</dt>
    <dd>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 21, $this->source); })()), "utm_source", [], "array", false, false, false, 21), "html", null, true);
            yield "</dd>
  ";
        }
        // line 23
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 23, $this->source); })()), "utm_term", [], "any", false, false, false, 23))) {
            // line 24
            yield "    <dt>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.timeline.event.utmterm"), "html", null, true);
            yield ":</dt>
    <dd>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 25, $this->source); })()), "utm_term", [], "array", false, false, false, 25), "html", null, true);
            yield "</dd>
  ";
        }
        // line 27
        yield "  ";
        $context["counter"] = 1;
        // line 28
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 28, $this->source); })()), "query", [], "any", false, false, false, 28))) {
            // line 29
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utmTags"]) || array_key_exists("utmTags", $context) ? $context["utmTags"] : (function () { throw new RuntimeError('Variable "utmTags" does not exist.', 29, $this->source); })()), "query", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 30
                yield "          ";
                // line 31
                yield "          ";
                $context["v"] = Mautic\CoreBundle\Helper\InputHelper::clean($context["v"]);
                // line 32
                yield "          ";
                if (((!CoreExtension::inFilter(                // line 33
$context["v"], ["", null, []]) && !CoreExtension::inFilter(                // line 34
$context["k"], ["ct", "page_title", "page_referrer", "page_url", "utm_campaign", "utm_source", "utm_medium", "utm_content", "utm_term"])) &&  !Twig\Extension\CoreExtension::testEmpty(                // line 35
$context["v"]))) {
                    // line 37
                    yield "              ";
                    $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 37, $this->source); })()) + 1);
                    // line 38
                    yield "              ";
                    $context["k"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["k"], ["_" => " "]));
                    // line 39
                    yield "
              <dt>";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    yield ":</dt>
              <dd>";
                    // line 41
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                    yield "</dd>

              ";
                    // line 43
                    if (( !array_key_exists("showMore", $context) && ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 43, $this->source); })()) > 5))) {
                        // line 44
                        yield "                  ";
                        $context["showMore"] = true;
                        // line 45
                        yield "                  <div style=\"display:none\">
              ";
                    }
                    // line 47
                    yield "          ";
                }
                // line 48
                yield "
          ";
                // line 49
                if ((array_key_exists("showMore", $context) && ((isset($context["showMore"]) || array_key_exists("showMore", $context) ? $context["showMore"] : (function () { throw new RuntimeError('Variable "showMore" does not exist.', 49, $this->source); })()) == true))) {
                    // line 50
                    yield "              </div>
              <a href=\"javascript:void(0);\" class=\"text-center small center-block mt-xs\" onclick=\"Mautic.toggleTimelineMoreVisiblity(mQuery(this).prev());\">";
                    // line 52
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
                    // line 53
                    yield "</a>
          ";
                }
                // line 55
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "  ";
        }
        // line 57
        yield "</dl>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/SubscribedEvents/Timeline/utmadded.html.twig";
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
        return array (  186 => 57,  183 => 56,  177 => 55,  173 => 53,  171 => 52,  168 => 50,  166 => 49,  163 => 48,  160 => 47,  156 => 45,  153 => 44,  151 => 43,  146 => 41,  142 => 40,  139 => 39,  136 => 38,  133 => 37,  131 => 35,  130 => 34,  129 => 33,  127 => 32,  124 => 31,  122 => 30,  117 => 29,  114 => 28,  111 => 27,  106 => 25,  101 => 24,  98 => 23,  93 => 21,  88 => 20,  85 => 19,  80 => 17,  75 => 16,  72 => 15,  67 => 13,  62 => 12,  59 => 11,  54 => 9,  49 => 8,  47 => 7,  44 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/SubscribedEvents/Timeline/utmadded.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/SubscribedEvents/Timeline/utmadded.html.twig");
    }
}
