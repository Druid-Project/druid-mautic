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

/* @MauticLead/Field/properties_boolean.html.twig */
class __TwigTemplate_04c51ecc25b98d1a3c90d3068bd27435 extends Template
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
        yield "<div class=\"boolean\">
    <label class=\"control-label\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.properties.boolean"), "html", null, true);
        yield "</label>
    <div class=\"row\">
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-addon text-danger\">
                    <i class=\"ri-lg ri-fw ri-close-line\"></i>
                </span>
                <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"leadfield[properties][no]\"
                       value=\"";
        // line 10
        ((array_key_exists("no", $context)) ? (yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["no"]) || array_key_exists("no", $context) ? $context["no"] : (function () { throw new RuntimeError('Variable "no" does not exist.', 10, $this->source); })()))) : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.no"), "html", null, true)));
        yield "\" onkeyup=\"Mautic.updateLeadFieldBooleanLabels(this, 0);\">
            </div>
        </div>
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <div class=\"input-group\">
                <span class=\"input-group-addon text-success\">
                    <i class=\"ri-lg ri-fw ri-check-line\"></i>
                </span>
                <input type=\"text\" autocomplete=\"false\" class=\"form-control\" name=\"leadfield[properties][yes]\"
                       value=\"";
        // line 19
        ((array_key_exists("yes", $context)) ? (yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["yes"]) || array_key_exists("yes", $context) ? $context["yes"] : (function () { throw new RuntimeError('Variable "yes" does not exist.', 19, $this->source); })()))) : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.yes"), "html", null, true)));
        yield "\" onkeyup=\"Mautic.updateLeadFieldBooleanLabels(this, 1);\">
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Field/properties_boolean.html.twig";
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
        return array (  68 => 19,  56 => 10,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Field/properties_boolean.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Field/properties_boolean.html.twig");
    }
}
