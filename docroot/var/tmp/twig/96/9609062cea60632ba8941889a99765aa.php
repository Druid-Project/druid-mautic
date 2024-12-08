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

/* @MauticDynamicContent/Tokens/tokens_help_bundle.html.twig */
class __TwigTemplate_af89b3f1f81d892b14f73e7c5f1cd06e extends Template
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
        yield "<!-- Dynamic Content tokens -->
<li class=\"panel\">
    <a role=\"button\" id=\"headingDynamicContentTokens\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
      data-parent=\"#tokensAccordion\" href=\"#collapseDynamicContentTokens\" aria-expanded=\"false\"
      aria-controls=\"collapseDynamicContentTokens\">
      <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
      <span class=\"accordion-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.dynamic_content_tokens"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseDynamicContentTokens\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
      aria-labelledby=\"headingDynamicContentTokens\">

      <table class=\"table table-hover\">
        <thead>
          <tr>
            <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
            <th>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.dynamic_content.example"), "html", null, true);
        yield "</td>
            <td><code>{dynamiccontent=\"Dynamic Content 1\"}</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </li>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticDynamicContent/Tokens/tokens_help_bundle.html.twig";
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
        return array (  73 => 21,  65 => 16,  61 => 15,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticDynamicContent/Tokens/tokens_help_bundle.html.twig", "/app/docroot/app/bundles/DynamicContentBundle/Resources/views/Tokens/tokens_help_bundle.html.twig");
    }
}
