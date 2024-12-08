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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.0.json */
class __TwigTemplate_5bdcf2a7c636426ec7c0f9b3b43ba7e9 extends Template
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
  \"version\": \"3.0.0\",
  \"stability\": \"stable\",
  \"minimum_php_version\": \"7.2.21\",
  \"maximum_php_version\": \"7.3.99\",
  \"show_php_version_warning_if_under\": \"7.3.0\",
  \"minimum_mautic_version\": \"2.20.0\",
  \"announcement_url\": \"\"
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.0.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.0.json", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-3.0.0.json");
    }
}
