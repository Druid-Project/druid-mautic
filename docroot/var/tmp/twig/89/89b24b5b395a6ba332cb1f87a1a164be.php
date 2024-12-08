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

/* @MauticCore/Helper/protip.html.twig */
class __TwigTemplate_9d3f104f5efd0d9556787ee1db91ee43 extends Template
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
        if ((array_key_exists("tip", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 1, $this->source); })())))) {
            // line 2
            yield "<div class=\"col-xs-12 ai-center mt-md mb-md\">
    <div class=\"text-muted text-center\">
        <i class=\"ri-lightbulb-line ri-lg\"></i>
        <span class=\"fw-b\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.protip"), "html", null, true);
            yield "</span>
        ";
            // line 6
            yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 6, $this->source); })()));
            yield "
    </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/protip.html.twig";
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
        return array (  53 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/protip.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Helper/protip.html.twig");
    }
}
