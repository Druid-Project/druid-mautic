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

/* @bundles/PluginBundle/Helper/ReloadHelper.php */
class __TwigTemplate_80c8a79a7388127823d9b143c5d5c92f extends Template
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

namespace Mautic\\PluginBundle\\Helper;

use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\PluginBundle\\Entity\\Plugin;
use Mautic\\PluginBundle\\Event\\PluginInstallEvent;
use Mautic\\PluginBundle\\Event\\PluginUpdateEvent;
use Mautic\\PluginBundle\\PluginEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

/**
 * Caution: none of the methods persist data.
 */
class ReloadHelper
{
    public function __construct(
        private EventDispatcherInterface \$eventDispatcher,
        private MauticFactory \$factory
    ) {
    }

    /**
     * Disables plugins that are in the database but are missing in the filesystem.
     */
    public function disableMissingPlugins(array \$allPlugins, array \$installedPlugins): array
    {
        \$disabledPlugins = [];

        foreach (\$installedPlugins as \$plugin) {
            if (!isset(\$allPlugins[\$plugin->getBundle()]) && !\$plugin->getIsMissing()) {
                // files are no longer found
                \$plugin->setIsMissing(true);
                \$disabledPlugins[\$plugin->getBundle()] = \$plugin;
            }
        }

        return \$disabledPlugins;
    }

    /**
     * Re-enables plugins that were disabled because they were missing in the filesystem
     * but appeared in it again.
     */
    public function enableFoundPlugins(array \$allPlugins, array \$installedPlugins): array
    {
        \$enabledPlugins = [];

        foreach (\$installedPlugins as \$plugin) {
            if (isset(\$allPlugins[\$plugin->getBundle()]) && \$plugin->getIsMissing()) {
                // files are no longer found
                \$plugin->setIsMissing(false);
                \$enabledPlugins[\$plugin->getBundle()] = \$plugin;
            }
        }

        return \$enabledPlugins;
    }

    /**
     * Updates plugins that exist in the filesystem and in the database and their version changed.
     */
    public function updatePlugins(array \$allPlugins, array \$installedPlugins, array \$pluginMetadata, array \$installedPluginsSchemas): array
    {
        \$updatedPlugins = [];

        foreach (\$installedPlugins as \$bundle => \$plugin) {
            if (isset(\$allPlugins[\$bundle])) {
                \$pluginConfig = \$allPlugins[\$bundle];
                \$oldVersion   = \$plugin->getVersion();
                \$plugin       = \$this->mapConfigToPluginEntity(\$plugin, \$pluginConfig);

                // compare versions to see if an update is necessary
                if ((empty(\$oldVersion) && !empty(\$plugin->getVersion())) || (!empty(\$oldVersion) && -1 == version_compare(\$oldVersion, \$plugin->getVersion()))) {
                    // call the update callback
                    \$callback        = \$pluginConfig['bundleClass'];
                    \$metadata        = \$pluginMetadata[\$pluginConfig['namespace']] ?? null;
                    \$installedSchema = isset(\$installedPluginsSchemas[\$pluginConfig['namespace']])
                        ? \$installedPluginsSchemas[\$allPlugins[\$bundle]['namespace']] : null;

                    \$callback::onPluginUpdate(\$plugin, \$this->factory, \$metadata, \$installedSchema);

                    \$event = new PluginUpdateEvent(\$plugin, \$oldVersion);

                    \$this->eventDispatcher->dispatch(\$event, PluginEvents::ON_PLUGIN_UPDATE);

                    unset(\$metadata, \$installedSchema);

                    \$updatedPlugins[\$plugin->getBundle()] = \$plugin;
                }
            }
        }

        return \$updatedPlugins;
    }

    /**
     * Installs plugins that does not exist in the database yet.
     */
    public function installPlugins(array \$allPlugins, array \$existingPlugins, array \$pluginMetadata, array \$installedPluginsSchemas): array
    {
        \$installedPlugins = [];

        foreach (\$allPlugins as \$bundle => \$pluginConfig) {
            if (!isset(\$existingPlugins[\$bundle])) {
                \$entity = \$this->mapConfigToPluginEntity(new Plugin(), \$pluginConfig);

                // Call the install callback
                \$callback        = \$pluginConfig['bundleClass'];
                \$metadata        = \$pluginMetadata[\$pluginConfig['namespace']] ?? null;
                \$installedSchema = null;

                if (isset(\$installedPluginsSchemas[\$pluginConfig['namespace']]) && 0 !== count(\$installedPluginsSchemas[\$pluginConfig['namespace']]->getTables())) {
                    \$installedSchema = true;
                }

                \$callback::onPluginInstall(\$entity, \$this->factory, \$metadata, \$installedSchema);

                \$event = new PluginInstallEvent(\$entity);

                \$this->eventDispatcher->dispatch(\$event, PluginEvents::ON_PLUGIN_INSTALL);

                \$installedPlugins[\$entity->getBundle()] = \$entity;
            }
        }

        return \$installedPlugins;
    }

    private function mapConfigToPluginEntity(Plugin \$plugin, array \$config): Plugin
    {
        \$plugin->setBundle(\$config['bundle']);

        if (isset(\$config['config'])) {
            \$details = \$config['config'];

            if (isset(\$details['version'])) {
                \$plugin->setVersion(\$details['version']);
            }

            \$plugin->setName(
                \$details['name'] ?? \$config['base']
            );

            if (isset(\$details['description'])) {
                \$plugin->setDescription(\$details['description']);
            }

            if (isset(\$details['author'])) {
                \$plugin->setAuthor(\$details['author']);
            }
        }

        return \$plugin;
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
        return "@bundles/PluginBundle/Helper/ReloadHelper.php";
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
        return new Source("", "@bundles/PluginBundle/Helper/ReloadHelper.php", "/app/docroot/app/bundles/PluginBundle/Helper/ReloadHelper.php");
    }
}
