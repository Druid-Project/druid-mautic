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

/* @MauticLead/Lead/dnc_small.html.twig */
class __TwigTemplate_f620c8fc7e3ca8602c05a374f6db3a99 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dncList"]) || array_key_exists("dncList", $context) ? $context["dncList"] : (function () { throw new RuntimeError('Variable "dncList" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["reason"]) {
            // line 6
            yield "  <span class=\"label label-danger\">
    <i title=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.event.donotcontact_channel", ["%channel%" => $context["channel"]]), "html", null, true);
            yield "\" class=\"ri-prohibited-line ico-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["channel"], "html", null, true);
            yield "\"></i>
  </span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['channel'], $context['reason'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/dnc_small.html.twig";
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
        return array (  49 => 7,  46 => 6,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/dnc_small.html.twig", "/app/docroot/app/bundles/LeadBundle/Resources/views/Lead/dnc_small.html.twig");
    }
}
