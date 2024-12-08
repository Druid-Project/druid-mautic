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

/* @bundles/PluginBundle/Event/PluginIntegrationEvent.php */
class __TwigTemplate_340c4ca07067093b86349ccd3059f09f extends Template
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

use Mautic\\PluginBundle\\Entity\\Integration;
use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

class PluginIntegrationEvent extends AbstractPluginIntegrationEvent
{
    public function __construct(UnifiedIntegrationInterface \$integration)
    {
        \$this->integration = \$integration;
    }

    /**
     * @return Integration
     */
    public function getEntity()
    {
        return \$this->integration->getIntegrationSettings();
    }

    public function setEntity(Integration \$integration): void
    {
        \$this->integration->setIntegrationSettings(\$integration);
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
        return "@bundles/PluginBundle/Event/PluginIntegrationEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationEvent.php", "/app/docroot/app/bundles/PluginBundle/Event/PluginIntegrationEvent.php");
    }
}
