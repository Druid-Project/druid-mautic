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

/* @MauticLead/Lead/company.html.twig */
class __TwigTemplate_26aec9a35e4c7c8cbba00eddd91bc46c extends Template
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
        yield "<!-- start: LeadBundle:Lead:company.html.twig -->
";
        // line 8
        $context["leadId"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8);
        // line 9
        yield "<ul class=\"list-group\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companies"]) || array_key_exists("companies", $context) ? $context["companies"] : (function () { throw new RuntimeError('Variable "companies" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 11
            yield "        ";
            $context["switch"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["companyLead"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 11), [], "array", true, true, false, 11)) ? ("ri-toggle-fill") : ("ri-toggle-line"));
            // line 12
            yield "        ";
            $context["bgClass"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["companyLead"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 12), [], "array", true, true, false, 12)) ? ("text-success") : ("text-danger"));
            // line 13
            yield "        <li class=\"list-group-item\">
            <i class=\"ri-lg ri-fw ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["switch"]) || array_key_exists("switch", $context) ? $context["switch"] : (function () { throw new RuntimeError('Variable "switch" does not exist.', 14, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bgClass"]) || array_key_exists("bgClass", $context) ? $context["bgClass"] : (function () { throw new RuntimeError('Variable "bgClass" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\"
               id=\"companyLeadsToggle";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
               onclick=\"Mautic.toggleCompanyLead('companyLeadsToggle";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["leadId"]) || array_key_exists("leadId", $context) ? $context["leadId"] : (function () { throw new RuntimeError('Variable "leadId" does not exist.', 16, $this->source); })()), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield ");\"></i>
            <span>";
            // line 17
            yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["company"], "companyname", [], "any", false, false, false, 17));
            yield "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['company'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "</ul>
<!-- end: LeadBundle:Lead:company.html.twig -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/company.html.twig";
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
        return array (  90 => 20,  81 => 17,  73 => 16,  69 => 15,  63 => 14,  60 => 13,  57 => 12,  54 => 11,  50 => 10,  47 => 9,  45 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/company.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/company.html.twig");
    }
}
