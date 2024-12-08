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

/* @MauticForm/Form/_details_fields_list.html.twig */
class __TwigTemplate_46224f0dc36dcc39511360e49339c261 extends Template
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
        yield "<div class=\"box-layout\">
    <div class=\"col-md-1 va-m\">
        ";
        // line 7
        $context["requiredTitle"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "isRequired", [], "any", false, false, false, 7)) ? ("mautic.core.required") : ("mautic.core.not_required"));
        // line 8
        yield "        <h3><span class=\"";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "isRequired", [], "any", false, false, false, 8)) {
            yield "ri-check-line";
        } else {
            yield "ri-close-line";
        }
        yield " text-white dark-xs\" data-toggle=\"tooltip\"
                  data-placement=\"left\"
                  title=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["requiredTitle"]) || array_key_exists("requiredTitle", $context) ? $context["requiredTitle"] : (function () { throw new RuntimeError('Variable "requiredTitle" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "\"></span>
        </h3>
    </div>
    <div class=\"col-md-7 va-m\">
        <h5 class=\"fw-sb text-primary mb-xs\">";
        // line 14
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14));
        yield "</h5>
        <h6 class=\"text-white dark-md\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.details.field_type", ["%type%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15)]), "html", null, true);
        yield "</h6>
    </div>
    <div class=\"col-md-4 va-m text-right\">
        ";
        // line 18
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "parent", [], "any", false, false, false, 18)) {
            // line 19
            yield "            <em class=\"text-white dark-sm\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.details.field_order", ["%order%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 19, $this->source); })()), "order", [], "any", false, false, false, 19)]), "html", null, true);
            yield "</em>
        ";
        }
        // line 21
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
        return "@MauticForm/Form/_details_fields_list.html.twig";
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
        return array (  83 => 21,  77 => 19,  75 => 18,  69 => 15,  65 => 14,  58 => 10,  48 => 8,  46 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Form/_details_fields_list.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Form/_details_fields_list.html.twig");
    }
}
