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

/* @MauticCore/Modal/tokens_help.html.twig */
class __TwigTemplate_90d03f591e4b7a5c952ff06f8031e04c extends Template
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
        yield "<!-- Tokens help modal -->
<div class=\"modal fade\" id=\"tokenPlaceholdersModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tokenPlaceholdersLabel\"
  aria-hidden=\"true\">
  <div class=\"modal-dialog modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close"), "html", null, true);
        yield "\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
        <p class=\"modal-title\" id=\"tokenPlaceholdersLabel\">
          ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.placeholder_tokens.header"), "html", null, true);
        yield "
        </p>
      </div>
      <div class=\"pa-md\">
        <h3 class=\"fw-sb mb-sm\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.introducing_tokens.title"), "html", null, true);
        yield "</h3>
        <p>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.introducing_tokens.description"), "html", null, true);
        yield "</p>
      </div>

      <h4 class=\"pa-md fw-sb\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.contact.tokens"), "html", null, true);
        yield "</h4>
      <p class=\"text-muted pi-md\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.placeholder_tokens.channels.explanation"), "html", null, true);
        yield "</p>
      <ul id=\"channelTokensAccordion\" class=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
        // line 22
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticLead/Tokens/tokens_help_bundle.html.twig", array(), true, "true");
        yield "
      </ul>

      ";
        // line 25
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticEmail/Tokens/tokens_help_bundle.html.twig", array(), true, "true");
        yield "
      ";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Tokens/tokens_help_bundle.html.twig", array(), true, "true");
        yield "
      ";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Tokens/tokens_help_bundle.html.twig", array(), true, "true");
        yield "

      <h4 class=\"pa-md mt-lg fw-sb\">Other tokens</h4>
      <ul id=\"otherTokensAccordion\" class=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
        ";
        // line 31
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticDynamicContent/Tokens/tokens_help_bundle.html.twig", array(), true, "true");
        yield "
        ";
        // line 32
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticSocial/Tokens/tokens_help_bundle.html.twig", array(), true, "true");
        yield "
      </ul>

      <div class=\"alert alert-success mt-lg mb-0\">
        <span>";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.fallback_text_info");
        yield "</span>
      </div>
    </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Modal/tokens_help.html.twig";
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
        return array (  115 => 36,  108 => 32,  104 => 31,  97 => 27,  93 => 26,  89 => 25,  83 => 22,  78 => 20,  74 => 19,  68 => 16,  64 => 15,  57 => 11,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Modal/tokens_help.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Modal/tokens_help.html.twig");
    }
}
