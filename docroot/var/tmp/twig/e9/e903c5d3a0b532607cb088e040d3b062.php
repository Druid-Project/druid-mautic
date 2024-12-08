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

/* @MauticLead/Auditlog/details.html.twig */
class __TwigTemplate_568c6aa9531f3eaf9db7fb42a39da41d extends Template
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
        $context["objects"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "details", [], "any", false, true, false, 6), "fields", [], "any", true, true, false, 6)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "details", [], "any", false, false, false, 6), "fields", [], "any", false, false, false, 6)) : ([]));
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })()), "details", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 8
            yield "    ";
            if (((("fields" != $context["key"]) && ("dateIdentified" != $context["key"])) && ("dateModified" != $context["key"]))) {
                // line 9
                yield "        ";
                $context["objects"] = Twig\Extension\CoreExtension::merge((isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 9, $this->source); })()), [$context["key"] => $context["value"]]);
                // line 10
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 12, $this->source); })())) > 0)) {
            // line 13
            yield "    ";
            if (("create" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "eventType", [], "any", false, false, false, 13))) {
                // line 14
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Auditlog/_table.html.twig", ["objects" => (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 14, $this->source); })())]);
                yield "
    ";
            } elseif (("delete" == CoreExtension::getAttribute($this->env, $this->source,             // line 15
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 15, $this->source); })()), "eventType", [], "any", false, false, false, 15))) {
                // line 16
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.deleted"), "html", null, true);
                yield "
    ";
            } elseif (("update" == CoreExtension::getAttribute($this->env, $this->source,             // line 17
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 17, $this->source); })()), "eventType", [], "any", false, false, false, 17))) {
                // line 18
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Auditlog/_table.html.twig", ["objects" => (isset($context["objects"]) || array_key_exists("objects", $context) ? $context["objects"] : (function () { throw new RuntimeError('Variable "objects" does not exist.', 18, $this->source); })())]);
                yield "
    ";
            } elseif (("identified" == CoreExtension::getAttribute($this->env, $this->source,             // line 19
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "eventType", [], "any", false, false, false, 19))) {
                // line 20
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.identified"), "html", null, true);
                yield "
    ";
            } elseif (("ipadded" == CoreExtension::getAttribute($this->env, $this->source,             // line 21
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "eventType", [], "any", false, false, false, 21))) {
                // line 22
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.accessed"), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "details", [], "any", false, false, false, 22)), ","), "html", null, true);
                yield "
    ";
            } elseif (("merged" == CoreExtension::getAttribute($this->env, $this->source,             // line 23
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "eventType", [], "any", false, false, false, 23))) {
                // line 24
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.audit.merged"), "html", null, true);
                yield "
    ";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Auditlog/details.html.twig";
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
        return array (  103 => 24,  101 => 23,  94 => 22,  92 => 21,  87 => 20,  85 => 19,  80 => 18,  78 => 17,  73 => 16,  71 => 15,  66 => 14,  63 => 13,  61 => 12,  54 => 10,  51 => 9,  48 => 8,  44 => 7,  42 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Auditlog/details.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Auditlog/details.html.twig");
    }
}
