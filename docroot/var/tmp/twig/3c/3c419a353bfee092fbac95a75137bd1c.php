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

/* @MauticInstall/Install/final.html.twig */
class __TwigTemplate_9c189d2dfd385f5a8a07e4897010a1c8 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 9
        return "@MauticInstall/Install/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        if (("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 8, $this->source); })()))) {
        }
        // line 9
        $this->parent = $this->loadTemplate("@MauticInstall/Install/content.html.twig", "@MauticInstall/Install/final.html.twig", 9);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "<div class=\"panel-heading\">
    <h2 class=\"panel-title\">
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.final"), "html", null, true);
        yield "
    </h2>
</div>
<div class=\"panel-body text-center\">
    <div><i class=\"ri-check-line ri-5x mb-20 text-success\"></i></div>
    <h4 class=\"mb-3\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.finished"), "html", null, true);
        yield "</h4>
    <h5>";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.heading.configured");
        yield "</h5>
    ";
        // line 22
        if ((isset($context["welcome_url"]) || array_key_exists("welcome_url", $context) ? $context["welcome_url"] : (function () { throw new RuntimeError('Variable "welcome_url" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["welcome_url"]) || array_key_exists("welcome_url", $context) ? $context["welcome_url"] : (function () { throw new RuntimeError('Variable "welcome_url" does not exist.', 23, $this->source); })()), "html", null, true);
            yield "\" role=\"button\" class=\"btn btn-primary mt-20\">
            ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.install.sentence.proceed.to.mautic"), "html", null, true);
            yield "
        </a>
    ";
        }
        // line 27
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticInstall/Install/final.html.twig";
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
        return array (  95 => 27,  89 => 24,  84 => 23,  82 => 22,  78 => 21,  74 => 20,  66 => 15,  62 => 13,  55 => 12,  50 => 9,  47 => 8,  40 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticInstall/Install/final.html.twig", "/app/docroot/app/bundles/InstallBundle/Resources/views/Install/final.html.twig");
    }
}
