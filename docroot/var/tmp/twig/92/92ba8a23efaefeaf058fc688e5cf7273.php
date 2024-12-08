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

/* @MauticPage/Tokens/tokens_help_bundle.html.twig */
class __TwigTemplate_8a93c206cc4f1e538cc7c3dd3e52367f extends Template
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
        yield "<h4 class=\"mt-lg fw-sb pa-md\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page_tokens"), "html", null, true);
        yield "</h4>
<p class=\"text-muted pi-md\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page_tokens.explanation"), "html", null, true);
        yield "</p>
<ul id=\"pageTokensAccordion\" class=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
  <!-- Landing Page tokens -->
  <li class=\"panel\">
    <a role=\"button\" id=\"headingLandingPageTokens\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
      data-parent=\"#pageTokensAccordion\" href=\"#collapseLandingPageTokens\" aria-expanded=\"false\"
      aria-controls=\"collapseLandingPageTokens\">
      <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
      <span class=\"accordion-title\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page_tokens"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseLandingPageTokens\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
      aria-labelledby=\"headingLandingPageTokens\">

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page.meta_description"), "html", null, true);
        yield "</td>
            <td><code>{pagemetadescription}</code></td>
          </tr>
          <tr>
            <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page.title"), "html", null, true);
        yield "</td>
            <td><code>{pagetitle}</code></td>
          </tr>
          <tr>
            <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page.language_bar"), "html", null, true);
        yield "</td>
            <td><code>{langbar}</code></td>
          </tr>
          <tr>
            <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page.share_buttons"), "html", null, true);
        yield "</td>
            <td><code>{sharebuttons}</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </li>

  <!-- Preference Center Landing Page tokens -->
  <li class=\"panel\">
    <a role=\"button\" id=\"headingPreferenceCenterTokens\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
      data-parent=\"#pageTokensAccordion\" href=\"#collapsePreferenceCenterTokens\" aria-expanded=\"false\"
      aria-controls=\"collapsePreferenceCenterTokens\">
      <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
      <span class=\"accordion-title\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.preference_center_tokens"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapsePreferenceCenterTokens\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
      aria-labelledby=\"headingPreferenceCenterTokens\">

      <table class=\"table table-hover\">
        <thead>
          <tr>
            <th>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
            <th>";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.preference_center.lead_identifier"), "html", null, true);
        yield "</td>
            <td><code>{leadidentifier}</code></td>
          </tr>
          <tr>
            <td>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.preference_center.category_list"), "html", null, true);
        yield "</td>
            <td><code>{categorylist}</code></td>
          </tr>
          <tr>
            <td>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.preference_center.segment_list"), "html", null, true);
        yield "</td>
            <td><code>{segmentlist}</code></td>
          </tr>
          <tr>
            <td>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.preference_center.preferred_channel"), "html", null, true);
        yield "</td>
            <td><code>{preferredchannel}</code></td>
          </tr>
          <tr>
            <td>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.preference_center.channel_frequency"), "html", null, true);
        yield "</td>
            <td><code>{channelfrequency}</code></td>
          </tr>
          <tr>
            <td>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.preference_center.save_preferences"), "html", null, true);
        yield "</td>
            <td><code>{saveprefsbutton}</code></td>
          </tr>
          <tr>
            <td>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.landing_page.success_message"), "html", null, true);
        yield "</td>
            <td><code>{successmessage}</code></td>
          </tr>
        </tbody>
      </table>
    </div>
  </li>

  <!-- Mautic component tokens -->
  <li class=\"panel\">
    <a role=\"button\" id=\"headingComponentTokens\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
      data-parent=\"#pageTokensAccordion\" href=\"#collapseComponentTokens\" aria-expanded=\"false\"
      aria-controls=\"collapseComponentTokens\">
      <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
      <span class=\"accordion-title\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.component_tokens"), "html", null, true);
        yield "</span>
    </a>
    <div id=\"collapseComponentTokens\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
      aria-labelledby=\"headingComponentTokens\">

      <table class=\"table table-hover\">
        <thead>
          <tr>
            <th>";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
            <th>";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.component.asset_link"), "html", null, true);
        yield "</td>
            <td><code>{assetlink=25}</code></td>
          </tr>
          <tr>
            <td>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.component.focus_item"), "html", null, true);
        yield "</td>
            <td><code>{focus=4}</code></td>
          </tr>
          <tr>
            <td>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.component.form"), "html", null, true);
        yield "</td>
            <td><code>{form=83}</code></td>
          </tr>
          <tr>
            <td>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.component.landing_page_link"), "html", null, true);
        yield "</td>
            <td><code>{pagelink=17}</code></td>
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
        return "@MauticPage/Tokens/tokens_help_bundle.html.twig";
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
        return array (  245 => 128,  238 => 124,  231 => 120,  224 => 116,  216 => 111,  212 => 110,  201 => 102,  184 => 88,  177 => 84,  170 => 80,  163 => 76,  156 => 72,  149 => 68,  142 => 64,  134 => 59,  130 => 58,  119 => 50,  102 => 36,  95 => 32,  88 => 28,  81 => 24,  73 => 19,  69 => 18,  58 => 10,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPage/Tokens/tokens_help_bundle.html.twig", "/app/docroot/app/bundles/PageBundle/Resources/views/Tokens/tokens_help_bundle.html.twig");
    }
}
