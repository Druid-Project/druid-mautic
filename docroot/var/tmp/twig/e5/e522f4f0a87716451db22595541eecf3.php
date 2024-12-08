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

/* @MauticEmail/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_52c544532188149cabdc8696f92b93dc extends Template
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
        $context["item"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", true, true, false, 6) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "extra", [], "any", false, false, false, 6)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "extra", [], "any", false, false, false, 6), "stat", [], "any", false, false, false, 6)) : (false));
        // line 7
        if (((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()) != false)) {
            // line 8
            yield "    <p>
        ";
            // line 9
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "isFailed", [], "any", false, false, false, 9)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "isFailed", [], "any", false, false, false, 9))) {
                // line 10
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "openDetails", [], "any", false, true, false, 10), "bouces", [], "any", true, true, false, 10)) {
                    // line 11
                    yield "                <span class=\"label label-warning\" data-toggle=\"tooltip\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.bounced"), "html", null, true);
                    yield "\">
                    ";
                    // line 12
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.bounced"), "html", null, true);
                    yield "
                </span>
            ";
                } else {
                    // line 15
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.failed"), "html", null, true);
                    yield "
            ";
                }
                // line 17
                yield "        ";
            } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "dateRead", [], "any", false, false, false, 17))) {
                // line 18
                yield "            ";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.not.read"));
                yield "
        ";
            } else {
                // line 20
                yield "            ";
                yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.email.timeline.event." . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "extra", [], "array", false, false, false, 20), "type", [], "array", false, false, false, 20)), ["%date%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source,                 // line 21
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "timestamp", [], "any", false, false, false, 21)), "%interval%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->formatRange(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 22
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 22, $this->source); })()), "dateSent", [], "any", false, false, false, 22), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "timestamp", [], "any", false, false, false, 22)], "method", false, false, false, 22)), "%sent%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(CoreExtension::getAttribute($this->env, $this->source,                 // line 23
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "dateSent", [], "any", false, false, false, 23))]));
                // line 24
                yield "
        ";
            }
            // line 26
            yield "
        ";
            // line 27
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "viewedInBrowser", [], "any", false, false, false, 27)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "viewedInBrowser", [], "any", false, false, false, 27))) {
                // line 28
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.viewed.in.browser"), "html", null, true);
                yield "
        ";
            }
            // line 30
            yield "
        ";
            // line 31
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "retryCount", [], "any", false, false, false, 31)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "retryCount", [], "any", false, false, false, 31))) {
                // line 32
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.retried", ["%count%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 32, $this->source); })()), "retryCount", [], "array", false, false, false, 32)]), "html", null, true);
                yield "
        ";
            }
            // line 34
            yield "
        ";
            // line 35
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "list_name", [], "any", false, false, false, 35))) {
                // line 36
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.event.list", ["%list%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "list_name", [], "array", false, false, false, 36)]), "html", null, true);
                yield "
        ";
            }
            // line 38
            yield "    </p>
    <div class=\"small\">
      ";
            // line 40
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 40, $this->source); })()), "openDetails", [], "any", false, false, false, 40))) {
                // line 41
                yield "        <h6 class=\"mt-lg mb-sm\"><strong>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.timeline.open_details"), "html", null, true);
                yield "</strong></h6>
        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })()), "openDetails", [], "any", false, false, false, 42));
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
                foreach ($context['_seq'] as $context["key"] => $context["detail"]) {
                    // line 43
                    yield "            ";
                    if (("bounces" != $context["key"])) {
                        // line 44
                        yield "              ";
                        if (( !array_key_exists("showMore", $context) && (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44) > 5))) {
                            // line 45
                            yield "                  ";
                            $context["showMore"] = true;
                            // line 46
                            yield "                  <div style=\"display:none\">
              ";
                        }
                        // line 48
                        yield "              ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48) > 1)) {
                            yield "<hr/>";
                        }
                        // line 49
                        yield "              <strong>";
                        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "datetime", [], "array", false, false, false, 49), "UTC");
                        yield "</strong><br/>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detail"], "useragent", [], "array", false, false, false, 49));
                        yield "
            ";
                    }
                    // line 51
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
                unset($context['_seq'], $context['key'], $context['detail'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "        ";
                if (array_key_exists("showMore", $context)) {
                    // line 53
                    yield "            </div>
            <a href=\"javascript:void(0);\" class=\"text-center small center-block mt-xs\" onclick=\"Mautic.toggleTimelineMoreVisiblity(mQuery(this).prev());\">";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
                    yield "</a>
        ";
                }
                // line 56
                yield "      ";
            }
            // line 57
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
        return "@MauticEmail/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  205 => 57,  202 => 56,  197 => 54,  194 => 53,  191 => 52,  177 => 51,  169 => 49,  164 => 48,  160 => 46,  157 => 45,  154 => 44,  151 => 43,  134 => 42,  129 => 41,  127 => 40,  123 => 38,  117 => 36,  115 => 35,  112 => 34,  106 => 32,  104 => 31,  101 => 30,  95 => 28,  93 => 27,  90 => 26,  86 => 24,  84 => 23,  83 => 22,  82 => 21,  80 => 20,  74 => 18,  71 => 17,  65 => 15,  59 => 12,  54 => 11,  51 => 10,  49 => 9,  46 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/SubscribedEvents/Timeline/index.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
