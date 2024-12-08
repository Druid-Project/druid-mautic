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

/* @MauticPage/SubscribedEvents/Timeline/videohit.html.twig */
class __TwigTemplate_ae71c8fdb19b536d538dd14cdbd71128 extends Template
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
        $context["viewTime"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 2
        $context["duration"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 3
        $context["percentage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 4
        $context["unknown"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown");
        // line 5
        $context["icon"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "icon", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "icon", [], "any", false, false, false, 5), "")) : (""));
        // line 6
        yield "
";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 7), "hit", [], "any", false, true, false, 7), "time_watched", [], "any", true, true, false, 7)) {
            // line 8
            yield "    ";
            $context["viewTimeActual"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "extra", [], "any", false, false, false, 8), "hit", [], "any", false, false, false, 8), "time_watched", [], "any", false, false, false, 8);
            // line 9
            yield "    ";
            $context["viewTime"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 9, $this->source); })()), "extra", [], "any", false, false, false, 9), "hit", [], "any", false, false, false, 9), "time_watched", [], "any", false, false, false, 9);
            // line 10
            yield "
    ";
            // line 12
            yield "    ";
            if (((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 12, $this->source); })()) > 60)) {
                // line 13
                yield "        ";
                $context["sec"] = ((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 13, $this->source); })()) % 60);
                // line 14
                yield "        ";
                $context["min"] = Twig\Extension\CoreExtension::round(((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 14, $this->source); })()) / 60), 0, "floor");
                // line 15
                yield "        ";
                $context["viewTime"] = ((((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 15, $this->source); })()) . "m ") . (isset($context["sec"]) || array_key_exists("sec", $context) ? $context["sec"] : (function () { throw new RuntimeError('Variable "sec" does not exist.', 15, $this->source); })())) . "s");
                // line 16
                yield "    ";
            } else {
                // line 17
                yield "        ";
                $context["viewTime"] = ((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 17, $this->source); })()) . "s");
                // line 18
                yield "    ";
            }
        }
        // line 20
        yield "
";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 21), "hit", [], "any", false, true, false, 21), "duration", [], "any", true, true, false, 21)) {
            // line 22
            yield "    ";
            $context["durationActual"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "extra", [], "any", false, false, false, 22), "hit", [], "any", false, false, false, 22), "duration", [], "any", false, false, false, 22);
            // line 23
            yield "    ";
            $context["duration"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "extra", [], "any", false, false, false, 23), "hit", [], "any", false, false, false, 23), "duration", [], "any", false, false, false, 23);
            // line 24
            yield "
    ";
            // line 26
            yield "    ";
            if (((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 26, $this->source); })()) > 60)) {
                // line 27
                yield "        ";
                $context["sec"] = ((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 27, $this->source); })()) % 60);
                // line 28
                yield "        ";
                $context["min"] = Twig\Extension\CoreExtension::round(((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 28, $this->source); })()) / 60), 0, "floor");
                // line 29
                yield "        ";
                $context["duration"] = ((((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 29, $this->source); })()) . "m ") . (isset($context["sec"]) || array_key_exists("sec", $context) ? $context["sec"] : (function () { throw new RuntimeError('Variable "sec" does not exist.', 29, $this->source); })())) . "s");
                // line 30
                yield "    ";
            } else {
                // line 31
                yield "        ";
                $context["duration"] = ((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 31, $this->source); })()) . "s");
                // line 32
                yield "    ";
            }
        }
        // line 34
        yield "
";
        // line 35
        if ((((isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 35, $this->source); })()) != (isset($context["unknown"]) || array_key_exists("unknown", $context) ? $context["unknown"] : (function () { throw new RuntimeError('Variable "unknown" does not exist.', 35, $this->source); })())) && ((isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 35, $this->source); })()) != (isset($context["unknown"]) || array_key_exists("unknown", $context) ? $context["unknown"] : (function () { throw new RuntimeError('Variable "unknown" does not exist.', 35, $this->source); })())))) {
            // line 36
            yield "    ";
            $context["percentage"] = Twig\Extension\CoreExtension::round((((isset($context["viewTimeActual"]) || array_key_exists("viewTimeActual", $context) ? $context["viewTimeActual"] : (function () { throw new RuntimeError('Variable "viewTimeActual" does not exist.', 36, $this->source); })()) / (isset($context["durationActual"]) || array_key_exists("durationActual", $context) ? $context["durationActual"] : (function () { throw new RuntimeError('Variable "durationActual" does not exist.', 36, $this->source); })())) * 100));
        }
        // line 38
        yield "
<dl class=\"dl-horizontal\">
    <dt>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.time.on.video"), "html", null, true);
        yield ":</dt>
    <dd class=\"ellipsis\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.time.on.video.value", ["%time_watched%" => (isset($context["viewTime"]) || array_key_exists("viewTime", $context) ? $context["viewTime"] : (function () { throw new RuntimeError('Variable "viewTime" does not exist.', 41, $this->source); })()), "%duration%" => (isset($context["duration"]) || array_key_exists("duration", $context) ? $context["duration"] : (function () { throw new RuntimeError('Variable "duration" does not exist.', 41, $this->source); })()), "%percentage%" => (isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 41, $this->source); })())]), "html", null, true);
        yield "</dd>
    <dt>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.referrer"), "html", null, true);
        yield ":</dt>
    <dd class=\"ellipsis\">";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 43), "hit", [], "any", false, true, false, 43), "referer", [], "any", true, true, false, 43) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "extra", [], "any", false, false, false, 43), "hit", [], "any", false, false, false, 43), "referer", [], "any", false, false, false, 43)))) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 43, $this->source); })()), "extra", [], "array", false, false, false, 43), "hit", [], "array", false, false, false, 43), "referer", [], "array", false, false, false, 43));
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
        }
        yield "</dd>
    <dt>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.video.url"), "html", null, true);
        yield ":</dt>
    <dd class=\"ellipsis\">";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "hit", [], "any", false, true, false, 45), "url", [], "any", true, true, false, 45) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "hit", [], "any", false, false, false, 45), "url", [], "any", false, false, false, 45)))) {
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "extra", [], "array", false, false, false, 45), "hit", [], "array", false, false, false, 45), "url", [], "array", false, false, false, 45));
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.unknown"), "html", null, true);
        }
        yield "</dd>
</dl>
<div class=\"small\">
    ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Mautic\CoreBundle\Helper\InputHelper::clean(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 48, $this->source); })()), "extra", [], "any", false, false, false, 48), "hit", [], "any", false, false, false, 48), "user_agent", [], "any", false, false, false, 48)), "html", null, true);
        yield "
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPage/SubscribedEvents/Timeline/videohit.html.twig";
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
        return array (  171 => 48,  161 => 45,  157 => 44,  149 => 43,  145 => 42,  141 => 41,  137 => 40,  133 => 38,  129 => 36,  127 => 35,  124 => 34,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  99 => 24,  96 => 23,  93 => 22,  91 => 21,  88 => 20,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 10,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/SubscribedEvents/Timeline/videohit.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/SubscribedEvents/Timeline/videohit.html.twig");
    }
}
