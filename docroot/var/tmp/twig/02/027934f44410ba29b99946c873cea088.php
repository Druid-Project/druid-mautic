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

/* @bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php */
class __TwigTemplate_afedd518915f83b820c84d7dc0318e5a extends Template
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
        yield "<?php

namespace Mautic\\PluginBundle\\Event;

use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

class PluginIntegrationAuthRedirectEvent extends AbstractPluginIntegrationEvent
{
    /**
     * @param string \$authUrl
     */
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private \$authUrl
    ) {
        \$this->integration = \$integration;
    }

    /**
     * @return string
     */
    public function getAuthUrl()
    {
        return \$this->authUrl;
    }

    /**
     * @param string \$authUrl
     */
    public function setAuthUrl(\$authUrl): void
    {
        \$this->authUrl = \$authUrl;

        \$this->stopPropagation();
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php", "/app/docroot/app/bundles/PluginBundle/Event/PluginIntegrationAuthRedirectEvent.php");
    }
}
