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

/* @bundles/PluginBundle/Event/AbstractPluginIntegrationEvent.php */
class __TwigTemplate_778ebe71248cd3ef93c88e896db248a4 extends Template
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

use Mautic\\PluginBundle\\Integration\\AbstractIntegration;
use Symfony\\Contracts\\EventDispatcher\\Event;

class AbstractPluginIntegrationEvent extends Event
{
    /**
     * @var AbstractIntegration
     */
    protected \$integration;

    /**
     * Get the integration's name.
     *
     * @return mixed
     */
    public function getIntegrationName()
    {
        return \$this->integration->getName();
    }

    /**
     * Get the integration object.
     *
     * @return AbstractIntegration
     */
    public function getIntegration()
    {
        return \$this->integration;
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
        return "@bundles/PluginBundle/Event/AbstractPluginIntegrationEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/AbstractPluginIntegrationEvent.php", "/app/docroot/app/bundles/PluginBundle/Event/AbstractPluginIntegrationEvent.php");
    }
}
