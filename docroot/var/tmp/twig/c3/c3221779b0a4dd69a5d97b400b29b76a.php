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

/* @MauticCore/Slots/segmentlist.html.twig */
class __TwigTemplate_44fefc3711b5e827adb4fe2ba1ee26c5 extends Template
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
        if (array_key_exists("form", $context)) {
            // line 2
            yield "    ";
            if ((((array_key_exists("showContactSegments", $context) && (isset($context["showContactSegments"]) || array_key_exists("showContactSegments", $context) ? $context["showContactSegments"] : (function () { throw new RuntimeError('Variable "showContactSegments" does not exist.', 2, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lead_lists", [], "any", true, true, false, 2)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "lead_lists", [], "any", false, false, false, 2)) > 0))) {
                // line 3
                yield "        <div class=\"contact-segments\">
            <div class=\"text-left\">
                <label class=\"control-label\">";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("label_text", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label_text"]) || array_key_exists("label_text", $context) ? $context["label_text"] : (function () { throw new RuntimeError('Variable "label_text" does not exist.', 5, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.list"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.list"))), "html", null, true);
                yield "</label>
            </div>
            ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "lead_lists", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["key"] => $context["leadList"]) {
                    // line 8
                    yield "                <div id=\"segment-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"text-left\">
                    ";
                    // line 9
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'widget');
                    yield "
                    ";
                    // line 10
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["leadList"], 'label');
                    yield "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['leadList'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                yield "        </div>
    ";
            }
        } else {
            // line 16
            yield "    <div class=\"contact-segments\">
        <div class=\"text-left\">
            <label class=\"control-label\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.list"), "html", null, true);
            yield "</label>
        </div>
        <div id=\"segment-1\" class=\"text-left\">
            <input type=\"checkbox\" id=\"lead_contact_frequency_rules_lead_lists_1\" name=\"lead_contact_frequency_rules[lead_lists][]\" autocomplete=\"false\" value=\"2\" checked=\"checked\">
            <label for=\"lead_contact_frequency_rules_lead_lists_1\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.field.list"), "html", null, true);
            yield "</label>
        </div>
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
        return "@MauticCore/Slots/segmentlist.html.twig";
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
        return array (  94 => 22,  87 => 18,  83 => 16,  78 => 13,  69 => 10,  65 => 9,  60 => 8,  56 => 7,  51 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Slots/segmentlist.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Slots/segmentlist.html.twig");
    }
}
