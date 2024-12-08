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

/* @MauticEmail/Heatmap/heatmap_legend.html.twig */
class __TwigTemplate_dcd79e1ffdbba76376f6e99117e39f67 extends Template
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
        yield "<div class=\"heatmap-legend\">
    <p>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.clicks_recorded"), "html", null, true);
        yield "<br />
        <small><a href=\"#\" data-toggle=\"heatmap-total\" class=\"active\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.total"), "html", null, true);
        yield "</a> | <a href=\"#\" data-toggle=\"heatmap-unique\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.unique"), "html", null, true);
        yield "</a></small></p>
    <p data-heatmap-clicks>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalClicks"]) || array_key_exists("totalClicks", $context) ? $context["totalClicks"] : (function () { throw new RuntimeError('Variable "totalClicks" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</p>
    <p>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.heat_scale"), "html", null, true);
        yield "</p>
    <div class=\"heatmap-scale-header\">
        <div>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.cold"), "html", null, true);
        yield "</div>
        <div>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.hot"), "html", null, true);
        yield "</div>
    </div>
    <div class=\"heatmap-scale\">
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
        <div class=\"heatmap-scale-bar\"></div>
    </div>
    <div class=\"heatmap-scale-footer\">
        <div>0%</div>
        <div>100%</div>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Heatmap/heatmap_legend.html.twig";
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
        return array (  68 => 8,  64 => 7,  59 => 5,  55 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Heatmap/heatmap_legend.html.twig", "/app/docroot/app/bundles/EmailBundle/Resources/views/Heatmap/heatmap_legend.html.twig");
    }
}
