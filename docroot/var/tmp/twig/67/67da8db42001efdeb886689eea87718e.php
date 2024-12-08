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

/* @bundles/CoreBundle/Tests/Twig/Fixtures/functions/includeScript.test */
class __TwigTemplate_46c88b6192747d3b3571460f0b545dca extends Template
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
        yield "--TEST--
includeScript asset function
--TEMPLATE--
";
        // line 4
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("app/bundles/IntegrationsBundle/Assets/js/integrations.js", "integrationsConfigOnLoad", "integrationsConfigOnLoad");
        yield "
";
        // line 5
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("app/bundles/IntegrationsBundle/Assets/js/integrations.js");
        yield "
--DATA--
return []
--EXPECT--
<script async=\"async\" type=\"text/javascript\" data-source=\"mautic\">Mautic.loadScript('https://example.com/app/bundles/IntegrationsBundle/Assets/js/integrations.js////}', 'integrationsConfigOnLoad', 'integrationsConfigOnLoad');</script>
<script async=\"async\" type=\"text/javascript\" data-source=\"mautic\">Mautic.loadScript('https://example.com/app/bundles/IntegrationsBundle/Assets/js/integrations.js////}', '', '');</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Twig/Fixtures/functions/includeScript.test";
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
        return array (  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Tests/Twig/Fixtures/functions/includeScript.test", "/app/docroot/app/bundles/CoreBundle/Tests/Twig/Fixtures/functions/includeScript.test");
    }
}
