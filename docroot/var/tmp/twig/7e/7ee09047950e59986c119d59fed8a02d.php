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

/* @MauticForm/Tokens/tokens_help_bundle.html.twig */
class __TwigTemplate_d881308a0c9c744bc7035d346f852b3f extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.forms"), "html", null, true);
        yield "</h4>
<p class=\"pi-md text-helper\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.form.redirect_url"), "html", null, true);
        yield "</p>

<ul id=\"formTokensAccordion\" class=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
    <!-- Form specific tokens -->
    <li class=\"panel\">
        <a role=\"button\" id=\"headingFormTokens\" class=\"accordion-heading collapsed\" data-toggle=\"collapse\"
            data-parent=\"#formTokensAccordion\" href=\"#collapseFormTokens\" aria-expanded=\"false\"
            aria-controls=\"collapseFormTokens\">
            <i class=\"ri-arrow-down-s-line accordion-arrow\"></i>
            <span class=\"accordion-title\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.form_tokens"), "html", null, true);
        yield "</span>
        </a>
        <div id=\"collapseFormTokens\" class=\"collapse accordion-wrapper\" role=\"tabpanel\"
            aria-labelledby=\"headingFormTokens\">

            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_name"), "html", null, true);
        yield "</th>
                        <th>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.variable_syntax"), "html", null, true);
        yield "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.form.field_value"), "html", null, true);
        yield "</td>
                        <td><code>{formfield=alias}</code></td>
                    </tr>
                    <tr>
                        <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.placeholder_tokens.form.page"), "html", null, true);
        yield "</td>
                        <td><code>{pagelink=ID}</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </li>
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticForm/Tokens/tokens_help_bundle.html.twig";
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
        return array (  89 => 29,  82 => 25,  74 => 20,  70 => 19,  59 => 11,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticForm/Tokens/tokens_help_bundle.html.twig", "/app/docroot/app/bundles/FormBundle/Resources/views/Tokens/tokens_help_bundle.html.twig");
    }
}
