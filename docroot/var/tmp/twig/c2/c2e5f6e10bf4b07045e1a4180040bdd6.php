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

/* @MauticCore/Update/update.html.twig */
class __TwigTemplate_78f6fe00c58e387d5d6dbeab9726b61c extends Template
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
        // line 4
        yield "<div class=\"col-sm-offset-2 col-sm-8\">
    <div id=\"main-update-panel\" class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h2 class=\"panel-title\">
                ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.in.progress"), "html", null, true);
        yield "
            </h2>
        </div>
        <div class=\"panel-body\">
            <table class=\"table table-hover addon-list\" id=\"updateTable\">
                <thead>
                <tr>
                    <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.heading.step"), "html", null, true);
        yield "</th>
                    <th>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.heading.status"), "html", null, true);
        yield "</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.step.running.checks"), "html", null, true);
        yield "</td>
                    <td id=\"update-step-running-checks-status\"><span class=\"hidden-xs\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.step.in.progress"), "html", null, true);
        yield "</span><i class=\"pull-right ri-loader-3-line ri-spin\"></i></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Update/update.html.twig";
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
        return array (  74 => 22,  70 => 21,  62 => 16,  58 => 15,  48 => 8,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Update/update.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Update/update.html.twig");
    }
}
