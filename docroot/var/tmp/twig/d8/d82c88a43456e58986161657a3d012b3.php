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

/* @MauticSocial/Tokens/tokens_help_bundle.html.twig */
class __TwigTemplate_65dbbb1ae346ec107c135a0a7a1dab75 extends Template
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
        yield "<!-- Contact Monitoring tokens -->
<li class=\"panel\">
    <a role=\"button\" id=\"headingContactMonitoring\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
      data-parent=\"#tokensAccordion\" href=\"#collapseContactMonitoring\" aria-expanded=\"false\"
      aria-controls=\"collapseContactMonitoring\">
      <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
      <span class=\"accordion-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact_monitoring"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseContactMonitoring\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
      aria-labelledby=\"headingContactMonitoring\">

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.language"), "html", null, true);
        yield "</td>
            <td><code>{language}</code></td>
          </tr>
          <tr>
            <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.title"), "html", null, true);
        yield "</td>
            <td><code>{title}</code></td>
          </tr>
          <tr>
            <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.landing_page_title"), "html", null, true);
        yield "</td>
            <td><code>{page_title}</code></td>
          </tr>
          <tr>
            <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.url"), "html", null, true);
        yield "</td>
            <td><code>{url}</code></td>
          </tr>
          <tr>
            <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.landing_page_url"), "html", null, true);
        yield "</td>
            <td><code>{page_url}</code></td>
          </tr>
          <tr>
            <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.referrer"), "html", null, true);
        yield "</td>
            <td><code>{referrer}</code></td>
          </tr>
          <tr>
            <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.tracking_pixel"), "html", null, true);
        yield "</td>
            <td><code>{tracking_pixel}</code></td>
          </tr>
          <tr>
            <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.utm_campaign"), "html", null, true);
        yield "</td>
            <td><code>{utm_campaign}</code></td>
          </tr>
          <tr>
            <td>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.utm_content"), "html", null, true);
        yield "</td>
            <td><code>{utm_content}</code></td>
          </tr>
          <tr>
            <td>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.utm_medium"), "html", null, true);
        yield "</td>
            <td><code>{utm_medium}</code></td>
          </tr>
          <tr>
            <td>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.utm_source"), "html", null, true);
        yield "</td>
            <td><code>{utm_source}</code></td>
          </tr>
          <tr>
            <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.monitoring.utm_term"), "html", null, true);
        yield "</td>
            <td><code>{utm_term}</code></td>
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
        return "@MauticSocial/Tokens/tokens_help_bundle.html.twig";
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
        return array (  150 => 65,  143 => 61,  136 => 57,  129 => 53,  122 => 49,  115 => 45,  108 => 41,  101 => 37,  94 => 33,  87 => 29,  80 => 25,  73 => 21,  65 => 16,  61 => 15,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticSocial/Tokens/tokens_help_bundle.html.twig", "/app/docroot/plugins/MauticSocialBundle/Resources/views/Tokens/tokens_help_bundle.html.twig");
    }
}
