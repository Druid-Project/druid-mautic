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

/* @MauticPage/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_3b9f16753bc3aa31c52b886ec18d5601 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", true, true, false, 1)) {
            // line 2
            yield "  ";
            $context["timeOnPage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
            // line 3
            yield "
  ";
            // line 4
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "extra", [], "any", false, false, false, 4), "hit", [], "any", false, false, false, 4), "dateLeft", [], "any", false, false, false, 4)) {
                // line 5
                yield "      ";
                $context["timeOnPage"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "hit", [], "any", false, false, false, 5), "dateLeft", [], "any", false, false, false, 5), "timestamp", [], "any", false, false, false, 5) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "hit", [], "any", false, false, false, 5), "dateHit", [], "any", false, false, false, 5), "timestamp", [], "any", false, false, false, 5));
                // line 6
                yield "
      ";
                // line 8
                yield "      ";
                if (((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 8, $this->source); })()) > 60)) {
                    // line 9
                    yield "          ";
                    $context["sec"] = ((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 9, $this->source); })()) % 60);
                    // line 10
                    yield "          ";
                    $context["min"] = Twig\Extension\CoreExtension::round(((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 10, $this->source); })()) / 60), 0, "floor");
                    // line 11
                    yield "          ";
                    $context["timeOnPage"] = ((((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 11, $this->source); })()) . "m ") . (isset($context["sec"]) || array_key_exists("sec", $context) ? $context["sec"] : (function () { throw new RuntimeError('Variable "sec" does not exist.', 11, $this->source); })())) . "s");
                    // line 12
                    yield "      ";
                } else {
                    // line 13
                    yield "          ";
                    $context["timeOnPage"] = ((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 13, $this->source); })()) . "s");
                    // line 14
                    yield "      ";
                }
                // line 15
                yield "  ";
            }
            // line 16
            yield "
  <dl class=\"dl-horizontal\">
      <dt>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.time.on.page"), "html", null, true);
            yield ":</dt>
      <dd>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["timeOnPage"]) || array_key_exists("timeOnPage", $context) ? $context["timeOnPage"] : (function () { throw new RuntimeError('Variable "timeOnPage" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "</dd>
      <dt>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.referrer"), "html", null, true);
            yield ":</dt>
      <dd>";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "extra", [], "array", false, false, false, 21), "hit", [], "array", false, false, false, 21), "referer", [], "array", false, false, false, 21)) {
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "extra", [], "array", false, false, false, 21), "hit", [], "array", false, false, false, 21), "referer", [], "array", false, false, false, 21));
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
            }
            yield "</dd>
      <dt>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.url"), "html", null, true);
            yield ":</dt>
      <dd>";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "extra", [], "array", false, false, false, 23), "hit", [], "array", false, false, false, 23), "url", [], "array", false, false, false, 23)) {
                yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "extra", [], "array", false, false, false, 23), "hit", [], "array", false, false, false, 23), "url", [], "array", false, false, false, 23));
            } else {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
            }
            yield "</dd>

      ";
            // line 25
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 25), "hit", [], "any", false, true, false, 25), "device", [], "any", true, true, false, 25) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })()), "extra", [], "any", false, false, false, 25), "hit", [], "any", false, false, false, 25), "device", [], "any", false, false, false, 25)))) {
                // line 26
                yield "          <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.name"), "html", null, true);
                yield "</dt>
          <dd class=\"ellipsis\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "extra", [], "any", false, false, false, 27), "hit", [], "any", false, false, false, 27), "device", [], "any", false, false, false, 27)), "html", null, true);
                yield "</dd>
      ";
            }
            // line 29
            yield "
      ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 30), "hit", [], "any", false, true, false, 30), "deviceOsName", [], "any", true, true, false, 30) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "extra", [], "any", false, false, false, 30), "hit", [], "any", false, false, false, 30), "deviceOsName", [], "any", false, false, false, 30)))) {
                // line 31
                yield "          <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.os"), "html", null, true);
                yield "</dt>
          <dd class=\"ellipsis\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "extra", [], "any", false, false, false, 32), "hit", [], "any", false, false, false, 32), "deviceOsName", [], "any", false, false, false, 32)), "html", null, true);
                yield "</dd>
      ";
            }
            // line 34
            yield "
      ";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 35), "hit", [], "any", false, true, false, 35), "deviceBrand", [], "any", true, true, false, 35) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "extra", [], "any", false, false, false, 35), "hit", [], "any", false, false, false, 35), "deviceBrand", [], "any", false, false, false, 35)))) {
                // line 36
                yield "          <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.brand"), "html", null, true);
                yield "</dt>
          <dd class=\"ellipsis\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "extra", [], "any", false, false, false, 37), "hit", [], "any", false, false, false, 37), "deviceBrand", [], "any", false, false, false, 37)), "html", null, true);
                yield "</dd>
      ";
            }
            // line 39
            yield "
      ";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 40), "hit", [], "any", false, true, false, 40), "deviceModel", [], "any", true, true, false, 40) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 40, $this->source); })()), "extra", [], "any", false, false, false, 40), "hit", [], "any", false, false, false, 40), "deviceModel", [], "any", false, false, false, 40)))) {
                // line 41
                yield "          <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.model"), "html", null, true);
                yield "</dt>
          <dd class=\"ellipsis\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 42, $this->source); })()), "extra", [], "any", false, false, false, 42), "hit", [], "any", false, false, false, 42), "deviceModel", [], "any", false, false, false, 42)), "html", null, true);
                yield "</dd>
      ";
            }
            // line 44
            yield "
      ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 45), "hit", [], "any", false, true, false, 45), "sourceName", [], "any", true, true, false, 45) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "extra", [], "any", false, false, false, 45), "hit", [], "any", false, false, false, 45), "sourceName", [], "any", false, false, false, 45)))) {
                // line 46
                yield "          <dt>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.source"), "html", null, true);
                yield ":</dt>
          <dd>
              ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 48), "hit", [], "any", false, true, false, 48), "sourceRate", [], "any", true, true, false, 48)) {
                    // line 49
                    yield "                  <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "extra", [], "any", false, false, false, 49), "hit", [], "any", false, false, false, 49), "sourceRoute", [], "any", false, false, false, 49)), "html", null, true);
                    yield "\" data-toggle=\"ajax\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 49, $this->source); })()), "extra", [], "any", false, false, false, 49), "hit", [], "any", false, false, false, 49), "sourceName", [], "any", false, false, false, 49)), "html", null, true);
                    yield "</a>
              ";
                } else {
                    // line 51
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "extra", [], "any", false, false, false, 51), "hit", [], "any", false, false, false, 51), "sourceName", [], "any", false, false, false, 51)), "html", null, true);
                    yield "
              ";
                }
                // line 53
                yield "          </dd>

          ";
                // line 55
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 55), "hit", [], "any", false, true, false, 55), "clientInfo", [], "any", true, true, false, 55) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "extra", [], "any", false, false, false, 55), "hit", [], "any", false, false, false, 55), "clientInfo", [], "any", false, false, false, 55))) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 55, $this->source); })()), "extra", [], "any", false, false, false, 55), "hit", [], "any", false, false, false, 55), "clientInfo", [], "any", false, false, false, 55)))) {
                    // line 56
                    yield "              <dt>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.timeline.device.client.info"), "html", null, true);
                    yield "</dt>
              <dd class=\"ellipsis\">
                  ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "extra", [], "any", false, false, false, 58), "hit", [], "any", false, false, false, 58), "clientInfo", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["clientInfo"]) {
                        // line 59
                        yield "                      ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean($context["clientInfo"]), "html", null, true);
                        yield "
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['clientInfo'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    yield "              </dd>
          ";
                }
                // line 63
                yield "      ";
            }
            // line 64
            yield "
      ";
            // line 65
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 65), "hit", [], "any", false, true, false, 65), "query", [], "any", true, true, false, 65) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "extra", [], "any", false, false, false, 65), "hit", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65))) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "extra", [], "any", false, false, false, 65), "hit", [], "any", false, false, false, 65), "query", [], "any", false, false, false, 65)))) {
                // line 66
                yield "          ";
                $context["counter"] = 0;
                // line 67
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 67, $this->source); })()), "extra", [], "any", false, false, false, 67), "hit", [], "any", false, false, false, 67), "query", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 68
                    yield "              ";
                    if (( !Twig\Extension\CoreExtension::testEmpty($context["v"]) && !CoreExtension::inFilter($context["k"], ["ct", "page_title", "page_referrer", "page_url"]))) {
                        // line 69
                        yield "                ";
                        if (is_iterable($context["v"])) {
                            // line 70
                            yield "                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable($context["v"]);
                            foreach ($context['_seq'] as $context["k2"] => $context["v2"]) {
                                // line 71
                                yield "                        ";
                                $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 71, $this->source); })()) + 1);
                                // line 72
                                yield "                        ";
                                $context["k2"] = Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["k"], ["_" => " "]));
                                // line 73
                                yield "                        <dt>";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k2"], "html", null, true);
                                yield ":</dt>
                        <dd class=\"ellipsis\">";
                                // line 74
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v2"], "html", null, true);
                                yield "</dd>
                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['k2'], $context['v2'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 76
                            yield "                ";
                        } else {
                            // line 77
                            yield "                    ";
                            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 77, $this->source); })()) + 1);
                            // line 78
                            yield "                    ";
                            $context["k"] = Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["k"], ["_" => " "]));
                            // line 79
                            yield "                    <dt>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                            yield "</dt>
                    <dd class=\"ellipsis\">";
                            // line 80
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                            yield "</dd>
                ";
                        }
                        // line 82
                        yield "
                ";
                        // line 83
                        if (( !array_key_exists("showMore", $context) && ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 83, $this->source); })()) > 5))) {
                            // line 84
                            yield "                    ";
                            $context["showMore"] = true;
                            // line 85
                            yield "                    <div style=\"display:none\">
                ";
                        }
                        // line 87
                        yield "
              ";
                    }
                    // line 89
                    yield "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['k'], $context['v'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                yield "
          ";
                // line 91
                if ((array_key_exists("showMore", $context) && (true == (isset($context["showMore"]) || array_key_exists("showMore", $context) ? $context["showMore"] : (function () { throw new RuntimeError('Variable "showMore" does not exist.', 91, $this->source); })())))) {
                    // line 92
                    yield "              </div>
              <a href=\"javascript:void(0);\" class=\"text-center small center-block mt-xs\" onclick=\"Mautic.toggleTimelineMoreVisiblity(mQuery(this).prev());\">";
                    // line 93
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
                    yield "</a>
          ";
                }
                // line 95
                yield "      ";
            }
            // line 96
            yield "  </dl>
  <div class=\"small\">
      ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 98, $this->source); })()), "extra", [], "any", false, false, false, 98), "hit", [], "any", false, false, false, 98), "userAgent", [], "any", false, false, false, 98)), "html", null, true);
            yield "
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  339 => 98,  335 => 96,  332 => 95,  327 => 93,  324 => 92,  322 => 91,  319 => 90,  313 => 89,  309 => 87,  305 => 85,  302 => 84,  300 => 83,  297 => 82,  292 => 80,  287 => 79,  284 => 78,  281 => 77,  278 => 76,  270 => 74,  265 => 73,  262 => 72,  259 => 71,  254 => 70,  251 => 69,  248 => 68,  243 => 67,  240 => 66,  238 => 65,  235 => 64,  232 => 63,  228 => 61,  219 => 59,  215 => 58,  209 => 56,  207 => 55,  203 => 53,  197 => 51,  189 => 49,  187 => 48,  181 => 46,  179 => 45,  176 => 44,  171 => 42,  166 => 41,  164 => 40,  161 => 39,  156 => 37,  151 => 36,  149 => 35,  146 => 34,  141 => 32,  136 => 31,  134 => 30,  131 => 29,  126 => 27,  121 => 26,  119 => 25,  110 => 23,  106 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 6,  52 => 5,  50 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/SubscribedEvents/Timeline/index.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/SubscribedEvents/Timeline/index.html.twig");
    }
}
