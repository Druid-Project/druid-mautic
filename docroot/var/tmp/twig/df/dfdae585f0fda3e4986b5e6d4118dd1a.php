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

/* @MauticLead/FormTheme/FormActionAddUtmTags/_formaction_properties_row.html.twig */
class __TwigTemplate_209ababfd3b47eb0cad1d32267277ea4 extends Template
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
            '_formaction_properties_row' => [$this, 'block__formaction_properties_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('_formaction_properties_row', $context, $blocks);
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__formaction_properties_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<div class=\"row\">
    <div class=\"col-xs-6\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "children", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            yield "            <div class=\"form-group col-xs-6\">
                ";
            // line 6
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
            yield "
                ";
            // line 7
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/FormTheme/FormActionAddUtmTags/_formaction_properties_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  78 => 10,  69 => 7,  65 => 6,  62 => 5,  58 => 4,  54 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/FormTheme/FormActionAddUtmTags/_formaction_properties_row.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/FormTheme/FormActionAddUtmTags/_formaction_properties_row.html.twig");
    }
}
