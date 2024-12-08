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

/* @bundles/PluginBundle/Event/PluginUpdateEvent.php */
class __TwigTemplate_f1cfe1c1d00c32edf227257a8a57e696 extends Template
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

declare(strict_types=1);

namespace Mautic\\PluginBundle\\Event;

use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Contracts\\EventDispatcher\\Event;

class PluginUpdateEvent extends Event
{
    public function __construct(
        private Plugin \$plugin,
        private string \$oldVersion
    ) {
    }

    public function getPlugin(): Plugin
    {
        return \$this->plugin;
    }

    public function getOldVersion(): string
    {
        return \$this->oldVersion;
    }

    public function checkContext(string \$pluginName): bool
    {
        return \$pluginName === \$this->plugin->getName();
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
        return "@bundles/PluginBundle/Event/PluginUpdateEvent.php";
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
        return new Source("", "@bundles/PluginBundle/Event/PluginUpdateEvent.php", "/app/docroot/app/bundles/PluginBundle/Event/PluginUpdateEvent.php");
    }
}
