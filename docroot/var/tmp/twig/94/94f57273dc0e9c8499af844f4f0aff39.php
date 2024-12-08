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

/* @MauticCore/Helper/builder_buttons.html.twig */
class __TwigTemplate_7a461ce933e8e96a5c4ef5812c030b35 extends Template
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
        yield "<div class=\"row\">
    <div class=\"col-xs-12\">
        <button type=\"button\" class=\"btn btn-primary btn-apply-builder\">
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.apply"), "html", null, true);
        yield "
        </button>
        <button type=\"button\" class=\"btn btn-primary btn-close-builder\" onclick=\"";
        // line 10
        yield (isset($context["onclick"]) || array_key_exists("onclick", $context) ? $context["onclick"] : (function () { throw new RuntimeError('Variable "onclick" does not exist.', 10, $this->source); })());
        yield "\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close.builder"), "html", null, true);
        yield "
        </button>
    </div>
    ";
        // line 24
        yield "</div>
<div class=\"row\">
    <div class=\"col-xs-12 mt-15\">
        <div id=\"builder-errors\" class=\"alert alert-danger\" role=\"alert\" style=\"display: none;\"></div>
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
        return "@MauticCore/Helper/builder_buttons.html.twig";
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
        return array (  62 => 24,  56 => 11,  52 => 10,  47 => 8,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/builder_buttons.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/builder_buttons.html.twig");
    }
}
