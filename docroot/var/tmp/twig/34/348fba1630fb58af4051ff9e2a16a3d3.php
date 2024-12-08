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

/* @MauticLead/Field/properties_number.html.twig */
class __TwigTemplate_db69218a4a88c88ab07812d5586fbfd7 extends Template
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
        $context["roundMode"] = ((array_key_exists("roundMode", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["roundMode"]) || array_key_exists("roundMode", $context) ? $context["roundMode"] : (function () { throw new RuntimeError('Variable "roundMode" does not exist.', 1, $this->source); })()), "")) : (""));
        // line 2
        $context["scale"] = ((array_key_exists("scale", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 2, $this->source); })()), "")) : (""));
        // line 3
        $context["options"] = ["mautic.lead.field.form.number.roundup" => Twig\Extension\CoreExtension::constant("NumberFormatter::ROUND_UP"), "mautic.lead.field.form.number.rounddown" => Twig\Extension\CoreExtension::constant("NumberFormatter::ROUND_DOWN"), "mautic.lead.field.form.number.roundhalfup" => Twig\Extension\CoreExtension::constant("NumberFormatter::ROUND_HALFUP"), "mautic.lead.field.form.number.roundhalfeven" => Twig\Extension\CoreExtension::constant("NumberFormatter::ROUND_HALFEVEN"), "mautic.lead.field.form.number.roundhalfdown" => Twig\Extension\CoreExtension::constant("NumberFormatter::ROUND_HALFDOWN")];
        // line 10
        yield "<div class=\"number\">
    <div class=\"row\">
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <label class=\"control-label\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.properties.numberrounding"), "html", null, true);
        yield "</label>
            <div class=\"input-group\">
                <select class=\"form-control not-chosen\" autocomplete=\"false\" name=\"leadfield[properties][roundmode]\">
                  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["l"] => $context["v"]) {
            // line 17
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"]);
            yield "\" ";
            if (((isset($context["roundMode"]) || array_key_exists("roundMode", $context) ? $context["roundMode"] : (function () { throw new RuntimeError('Variable "roundMode" does not exist.', 17, $this->source); })()) == $context["v"])) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["l"]), "html", null, true);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['l'], $context['v'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "                </select>
                <span class=\"input-group-addon\" data-toggle=\"tooltip\" data-container=\"body\" data-placement=\"top\" data-original-title=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.help.numberrounding"), "html", null, true);
        yield "\">
                    <i class=\"ri-question-line\"></i>
                </span>
            </div>
        </div>
        <div class=\"form-group col-xs-12 col-sm-8 col-md-6\">
            <label class=\"control-label\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.form.properties.numberprecision"), "html", null, true);
        yield "</label>
            <div class=\"input-group\">
                <input autocomplete=\"false\" name=\"leadfield[properties][scale]\" class=\"form-control\" value=\"";
        // line 28
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 28, $this->source); })()));
        yield "\" type=\"number\" />
                <span class=\"input-group-addon\" data-toggle=\"tooltip\" data-container=\"body\"
                      data-placement=\"top\" data-original-title=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.help.numberprecision"), "html", null, true);
        yield "\">
                    <i class=\"ri-question-line\"></i>
                </span>
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
        return "@MauticLead/Field/properties_number.html.twig";
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
        return array (  100 => 30,  95 => 28,  90 => 26,  81 => 20,  78 => 19,  63 => 17,  59 => 16,  53 => 13,  48 => 10,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Field/properties_number.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Field/properties_number.html.twig");
    }
}
