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

/* @MauticLead/Import/_mapping_form.html.twig */
class __TwigTemplate_4d590fa4fa4c19e3e942c89f1a8f9769 extends Template
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
        yield "<div class=\"ml-lg mr-lg mt-md pa-lg\">
    ";
        // line 6
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        yield "
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.default.owner"), "html", null, true);
        yield "</div>
        </div>
        <div class=\"panel-body\">
            <div class=\"col-xs-4\">
                ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "owner", [], "any", true, true, false, 13)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "owner", [], "any", false, false, false, 13), 'row');
        }
        // line 14
        yield "            </div>
            <div class=\"col-xs-4\">
                ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "list", [], "any", true, true, false, 16)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "list", [], "any", false, false, false, 16), 'row');
        }
        // line 17
        yield "            </div>
            <div class=\"col-xs-4\">
                ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "tags", [], "any", true, true, false, 19)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "tags", [], "any", false, false, false, 19), 'row');
        }
        // line 20
        yield "            </div>
            <div class=\"col-xs-4\">
                ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "skip_if_exists", [], "any", true, true, false, 22)) {
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "skip_if_exists", [], "any", false, false, false, 22), 'row');
        }
        // line 23
        yield "            </div>
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <div class=\"panel-title\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.fields"), "html", null, true);
        yield "</div>
        </div>
        <div class=\"panel-body\">
            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'errors');
        yield "
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "children", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 33
            yield "                ";
            if ((("properties" != $context["key"]) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "isRendered", [], "any", false, false, false, 33))) {
                // line 34
                yield "                    <div class=\"col-sm-4\">
                        ";
                // line 35
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                yield "
                    </div>
                ";
            }
            // line 38
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </div>
    </div>
    ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
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
        return "@MauticLead/Import/_mapping_form.html.twig";
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
        return array (  129 => 41,  125 => 39,  119 => 38,  113 => 35,  110 => 34,  107 => 33,  103 => 32,  99 => 31,  93 => 28,  86 => 23,  82 => 22,  78 => 20,  74 => 19,  70 => 17,  66 => 16,  62 => 14,  58 => 13,  51 => 9,  45 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Import/_mapping_form.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Import/_mapping_form.html.twig");
    }
}
