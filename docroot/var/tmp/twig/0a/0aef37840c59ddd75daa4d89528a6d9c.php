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

/* @bundles/CoreBundle/Tests/Fixtures/metadata.json */
class __TwigTemplate_a8d6e8ac882ba6b1ddcec218a17896c1 extends Template
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
        yield "{
  \"version\": \"4.0.2\",
  \"stability\": \"stable\",
  \"minimum_php_version\": \"7.4.0\",
  \"maximum_php_version\": \"8.0.99\",
  \"show_php_version_warning_if_under\": \"7.4.0\",
  \"minimum_mautic_version\": \"3.2.0\",
  \"announcement_url\": \"https://github.com/mautic/mautic/releases/tag/4.0.2\"
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Fixtures/metadata.json";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/metadata.json", "/app/docroot/app/bundles/CoreBundle/Tests/Fixtures/metadata.json");
    }
}
