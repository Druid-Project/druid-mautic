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

/* @MauticEmail/Tokens/tokens_help_bundle.html.twig */
class __TwigTemplate_4b6e8dbf16dc4d1fac9044a39dfb6d5d extends Template
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
        yield "<h4 class=\"pa-md mt-lg fw-sb\">Email specific</h4>
<p class=\"text-muted pi-md\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email_tokens.explanation"), "html", null, true);
        yield "</p>
<ul id=\"emailTokensAccordion\" class=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
  <!-- Email specific tokens -->
  <li class=\"panel\">
    <a role=\"button\" id=\"headingEmailTokens\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
      data-parent=\"#tokensAccordion\" href=\"#collapseEmailTokens\" aria-expanded=\"false\"
      aria-controls=\"collapseEmailTokens\">
      <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
      <span class=\"accordion-title\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email_tokens"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseEmailTokens\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
      aria-labelledby=\"headingEmailTokens\">

      <table class=\"table table-hover\">
        <thead>
          <tr>
            <th>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
            <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email.signature"), "html", null, true);
        yield "</td>
            <td><code>{signature}</code></td>
          </tr>
          <tr>
            <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email.subject"), "html", null, true);
        yield "</td>
            <td><code>{subject}</code></td>
          </tr>
          <tr>
            <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email.unsubscribe_text"), "html", null, true);
        yield "</td>
            <td><code>{unsubscribe_text}</code></td>
          </tr>
          <tr>
            <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email.unsubscribe_url"), "html", null, true);
        yield "</td>
            <td><code>{unsubscribe_url}</code></td>
          </tr>
          <tr>
            <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email.resubscribe_url"), "html", null, true);
        yield "</td>
            <td><code>{resubscribe_url}</code></td>
          </tr>
          <tr>
            <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email.webview_text"), "html", null, true);
        yield "</td>
            <td><code>{webview_text}</code></td>
          </tr>
          <tr>
            <td>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.email.webview_url"), "html", null, true);
        yield "</td>
            <td><code>{webview_url}</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </li>
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Tokens/tokens_help_bundle.html.twig";
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
        return array (  121 => 48,  114 => 44,  107 => 40,  100 => 36,  93 => 32,  86 => 28,  79 => 24,  71 => 19,  67 => 18,  56 => 10,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Tokens/tokens_help_bundle.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Tokens/tokens_help_bundle.html.twig");
    }
}
