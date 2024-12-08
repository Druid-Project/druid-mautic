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

/* @bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php */
class __TwigTemplate_eaf60e36e5b55e1511538e28f9f954cb extends Template
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

class PluginIntegrationKeyEvent extends AbstractPluginIntegrationEvent
{
    public function __construct(
        UnifiedIntegrationInterface \$integration,
        private ?array \$keys = null
    ) {
        \$this->integration = \$integration;
    }

    /**
     * Get the keys array.
     */
    public function getKeys()
    {
        return \$this->keys;
    }

    /**
     * Set new keys array.
     */
    public function setKeys(array \$keys): void
    {
        \$this->keys = \$keys;
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
        return "@bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php", "/app/docroot/app/bundles/PluginBundle/Event/PluginIntegrationKeyEvent.php");
    }
}
