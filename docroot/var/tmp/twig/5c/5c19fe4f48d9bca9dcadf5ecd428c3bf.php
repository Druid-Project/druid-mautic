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

/* @MauticCore/Slots/categorylist.html.twig */
class __TwigTemplate_439522b6fa3197fd266b5705dec485e1 extends Template
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
            if ((((array_key_exists("showContactCategories", $context) && (isset($context["showContactCategories"]) || array_key_exists("showContactCategories", $context) ? $context["showContactCategories"] : (function () { throw new RuntimeError('Variable "showContactCategories" does not exist.', 2, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "global_categories", [], "any", true, true, false, 2)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "global_categories", [], "any", false, false, false, 2)) > 0))) {
                // line 3
                yield "<div class=\"global-categories text-left\">
    <div>
        <label class=\"control-label\">";
                // line 5
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.categories"), "html", null, true);
                yield "</label>
    </div>
        ";
                // line 7
                $context["categoryNumber"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "global_categories", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "choices", [], "any", false, false, false, 7));
                // line 8
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "global_categories", [], "any", false, false, false, 8));
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
                foreach ($context['_seq'] as $context["_key"] => $context["temp"]) {
                    // line 9
                    yield "            <div id=\"category-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 9), "html", null, true);
                    yield "\" class=\"text-left\">
                ";
                    // line 10
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "global_categories", [], "any", false, false, false, 10), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 10), [], "array", false, false, false, 10), 'widget');
                    yield "
                ";
                    // line 11
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "global_categories", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 11), [], "array", false, false, false, 11), 'label');
                    yield "
            </div>
        ";
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
                unset($context['_seq'], $context['_key'], $context['temp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                yield "        ";
                // line 15
                yield "    </div>
    ";
            } else {
                // line 17
                yield "        ";
                // line 18
                yield "    ";
            }
        } else {
            // line 20
            yield "    <div class=\"global-categories text-left\">
        <div>
            <label class=\"control-label\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.form.categories"), "html", null, true);
            yield "</label>
        </div>
        <div id=\"category-1\" class=\"text-left\">
            <input type=\"checkbox\" id=\"lead_contact_frequency_rules_global_categories_1\" name=\"lead_contact_frequency_rules[global_categories][]\" autocomplete=\"false\" value=\"1\" checked=\"checked\">
            <label for=\"lead_contact_frequency_rules_global_categories_1\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.category"), "html", null, true);
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
        return "@MauticCore/Slots/categorylist.html.twig";
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
        return array (  125 => 26,  118 => 22,  114 => 20,  110 => 18,  108 => 17,  104 => 15,  102 => 14,  85 => 11,  81 => 10,  76 => 9,  58 => 8,  56 => 7,  51 => 5,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Slots/categorylist.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Slots/categorylist.html.twig");
    }
}
