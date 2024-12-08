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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.15.0.json */
class __TwigTemplate_3d3873b2034eac95815bc255c0ef7896 extends Template
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
  \"version\": \"2.15.0\",
  \"stability\": \"stable\",
  \"minimum_php_version\": \"5.6.99\",
  \"maximum_php_version\": \"7.2.99\",
  \"show_php_version_warning_if_under\": \"7.0.0\",
  \"minimum_mautic_version\": \"1.0.0\",
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.15.0.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.15.0.json", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/metadata-2.15.0.json");
    }
}
