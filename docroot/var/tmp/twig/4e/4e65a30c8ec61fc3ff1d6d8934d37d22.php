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

/* @MauticCore/Exception/404.html.twig */
class __TwigTemplate_a2c426974ebafd28f2a236196aca0cd1 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Exception/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["src"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("openMouth");
        // line 4
        $context["message"] = "mautic.core.error.404";
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Exception/base.html.twig", "@MauticCore/Exception/404.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Exception/404.html.twig";
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
        return array (  50 => 1,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Exception/404.html.twig", "/app/docroot/app/bundles/CoreBundle/Resources/views/Exception/404.html.twig");
    }
}
