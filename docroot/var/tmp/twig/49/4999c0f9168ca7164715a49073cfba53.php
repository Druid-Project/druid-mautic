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

/* @MauticLead/LeadLists/index.html.twig */
class __TwigTemplate_6c2b2e30189d26e70ec0f852b4837d3e extends Template
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
        // line 7
        yield "<ul class=\"list-group\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lists"]) || array_key_exists("lists", $context) ? $context["lists"] : (function () { throw new RuntimeError('Variable "lists" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 9
            yield "        <li class=\"list-group-item\">
            <i class=\"ri-lg ri-fw ";
            // line 10
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["leadLists"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 10), [], "array", true, true, false, 10)) {
                yield "ri-toggle-fill text-success";
            } else {
                yield "ri-toggle-line text-danger";
            }
            yield "\"
               id=\"leadListToggle";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 11), "html", null, true);
            yield "\"
               onclick=\"Mautic.toggleLeadList('leadListToggle";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield ");\"></i>
            <span>";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "name", [], "any", false, false, false, 13), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["l"], "alias", [], "any", false, false, false, 13), "html", null, true);
            yield ")</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['l'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/LeadLists/index.html.twig";
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
        return array (  83 => 16,  72 => 13,  64 => 12,  60 => 11,  52 => 10,  49 => 9,  45 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/LeadLists/index.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/LeadLists/index.html.twig");
    }
}
