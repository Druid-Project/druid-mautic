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

/* @bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php */
class __TwigTemplate_e920553f5416afd48cefbc06fedfe67e extends Template
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

namespace Mautic\\IntegrationsBundle\\Bundle;

use Doctrine\\DBAL\\Schema\\Schema;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\IntegrationsBundle\\Migration\\Engine;
use Mautic\\PluginBundle\\Bundle\\PluginBundleBase;
use Mautic\\PluginBundle\\Entity\\Plugin;

/**
 * Base Bundle class which should be extended by addon bundles.
 */
abstract class AbstractPluginBundle extends PluginBundleBase
{
    /**
     * @param array|null \$metadata
     *
     * @throws \\Exception
     */
    public static function onPluginUpdate(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, ?Schema \$installedSchema = null): void
    {
        \$entityManager = \$factory->getEntityManager();
        \$tablePrefix   = (string) \$factory->getParameter('mautic.db_table_prefix');

        \$migrationEngine = new Engine(
            \$entityManager,
            \$tablePrefix,
            __DIR__.'/../../../../plugins/'.\$plugin->getBundle(),
            \$plugin->getBundle()
        );

        \$migrationEngine->up();
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
        return "@bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php", "/app/docroot/app/bundles/IntegrationsBundle/Bundle/AbstractPluginBundle.php");
    }
}
