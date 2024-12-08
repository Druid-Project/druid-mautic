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

/* @bundles/PluginBundle/Facade/ReloadFacade.php */
class __TwigTemplate_11fce67b4c711cbcb93fc60aef135b87 extends Template
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

namespace Mautic\\PluginBundle\\Facade;

use Mautic\\PluginBundle\\Helper\\ReloadHelper;
use Mautic\\PluginBundle\\Model\\PluginModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ReloadFacade
{
    public function __construct(
        private PluginModel \$pluginModel,
        private ReloadHelper \$reloadHelper,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * This method finds all plguins that needs to be enabled, disabled, installed and updated
     * and do all those actions.
     *
     * Returns humanly understandable message about its doings.
     *
     * @return string
     */
    public function reloadPlugins()
    {
        \$plugins                 = \$this->pluginModel->getAllPluginsConfig();
        \$pluginMetadata          = \$this->pluginModel->getPluginsMetadata();
        \$installedPlugins        = \$this->pluginModel->getInstalledPlugins();
        \$installedPluginTables   = \$this->pluginModel->getInstalledPluginTables(\$pluginMetadata);
        \$installedPluginsSchemas = \$this->pluginModel->createPluginSchemas(\$installedPluginTables);
        \$disabledPlugins         = \$this->reloadHelper->disableMissingPlugins(\$plugins, \$installedPlugins);
        \$enabledPlugins          = \$this->reloadHelper->enableFoundPlugins(\$plugins, \$installedPlugins);
        \$updatedPlugins          = \$this->reloadHelper->updatePlugins(\$plugins, \$installedPlugins, \$pluginMetadata, \$installedPluginsSchemas);
        \$installedPlugins        = \$this->reloadHelper->installPlugins(\$plugins, \$installedPlugins, \$pluginMetadata, \$installedPluginsSchemas);
        \$persist                 = array_values((array) (\$disabledPlugins + \$enabledPlugins + \$updatedPlugins + \$installedPlugins));

        \$this->pluginModel->saveEntities(\$persist);

        // Alert the user to the number of additions
        return \$this->translator->trans(
            'mautic.plugin.notice.reloaded',
            [
                '%added%'    => count(\$installedPlugins),
                '%disabled%' => count(\$disabledPlugins),
                '%updated%'  => count(\$updatedPlugins),
            ],
            'flashes'
        );
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
        return "@bundles/PluginBundle/Facade/ReloadFacade.php";
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
        return new Source("", "@bundles/PluginBundle/Facade/ReloadFacade.php", "/app/docroot/app/bundles/PluginBundle/Facade/ReloadFacade.php");
    }
}
