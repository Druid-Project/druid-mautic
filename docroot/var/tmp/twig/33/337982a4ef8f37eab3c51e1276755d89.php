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

/* @MauticLead/FormTheme/FieldValueCondition/_campaignevent_lead_field_value_widget.html.twig */
class __TwigTemplate_44b80a05a06549f1f2c9f84e2ce8c800 extends Template
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
            '_campaignevent_properties_row' => [$this, 'block__campaignevent_properties_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_campaignevent_properties_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__campaignevent_properties_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"row condition-row\">
    <div class=\"col-xs-4\">
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "field", [], "any", false, false, false, 4), 'row');
        yield "
    </div>
    <div class=\"col-xs-4\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "operator", [], "any", false, false, false, 7), 'row');
        yield "
    </div>
    <div class=\"col-xs-4\">
        ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), 'row');
        yield "
    </div>
</div>

<div class=\"row condition-custom-date-row\" style=\"display: none;\">
    <div class=\"col-sm-offset-4 col-sm-4\">
        <div class=\"row\">
            <div class=\"form-group col-xs-12 \">
                <div class=\"input-group\">
                    <span class=\"input-group-addon preaddon\">
                        <i class=\"symbol-hashtag\"></i>
                    </span>
                    <input autocomplete=\"false\" type=\"number\" id=\"lead-field-custom-date-interval\" class=\"form-control\" value=\"1\" onchange=\"Mautic.updateLeadFieldValueOptions(mQuery('#campaignevent_properties_value'), true)\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"row\">
            <div class=\"form-group col-xs-12 \">
                <select id=\"lead-field-custom-date-unit\" class=\"form-control chosen\" autocomplete=\"false\" onchange=\"Mautic.updateLeadFieldValueOptions(mQuery('#campaignevent_properties_value'), true)\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["i", "h", "d", "m", "y"]);
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 32
            yield "                      <option ";
            if (("d" == $context["interval"])) {
                yield "selected";
            }
            yield " value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["interval"], "html", null, true);
            yield "\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.campaign.event.intervalunit.choice." . $context["interval"])), "html", null, true);
            // line 34
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['interval'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                </select>
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
        return "@MauticLead/FormTheme/FieldValueCondition/_campaignevent_lead_field_value_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  115 => 36,  108 => 34,  106 => 33,  98 => 32,  94 => 31,  70 => 10,  64 => 7,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/FormTheme/FieldValueCondition/_campaignevent_lead_field_value_widget.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/FormTheme/FieldValueCondition/_campaignevent_lead_field_value_widget.html.twig");
    }
}
