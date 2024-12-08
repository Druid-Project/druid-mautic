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

/* @bundles/PluginBundle/Bundle/PluginBundleBase.php */
class __TwigTemplate_593b078fae43ddcb9370b2b2883617a2 extends Template
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

namespace Mautic\\PluginBundle\\Bundle;

use Doctrine\\DBAL\\Schema\\Comparator;
use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\ORM\\Tools\\SchemaTool;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\PluginBundle\\Entity\\Plugin;
use Symfony\\Component\\HttpKernel\\Bundle\\Bundle;

/**
 * Base Bundle class which should be extended by addon bundles.
 */
abstract class PluginBundleBase extends Bundle
{
    /**
     * @throws \\Exception
     *
     * @deprecated To be removed in 5.0. Listen to PluginEvents::ON_PLUGIN_INSTALL instead
     */
    public static function onPluginInstall(Plugin \$plugin, MauticFactory \$factory, \$metadata = null, \$installedSchema = null): void
    {
        if (null !== \$metadata) {
            self::installPluginSchema(\$metadata, \$factory, \$installedSchema);
        }
    }

    /**
     * Install plugin schema based on Doctrine metadata.
     *
     * @throws \\Exception
     */
    public static function installPluginSchema(array \$metadata, MauticFactory \$factory, \$installedSchema = null): void
    {
        if (null !== \$installedSchema) {
            // Schema already exists, so no need to proceed
            return;
        }

        \$db             = \$factory->getDatabase();
        \$schemaTool     = new SchemaTool(\$factory->getEntityManager());
        \$installQueries = \$schemaTool->getCreateSchemaSql(\$metadata);

        foreach (\$installQueries as \$q) {
            // Check if the query is a DDL statement
            if (self::isDDLStatement(\$q)) {
                // Execute DDL statements outside of a transaction
                \$db->executeQuery(\$q);
            } else {
                // For non-DDL statements, use transactions
                try {
                    \$db->beginTransaction();
                    \$db->executeQuery(\$q);
                    \$db->commit();
                } catch (\\Exception \$e) {
                    // Rollback only for non-DDL statements
                    if (\$db->isTransactionActive()) {
                        \$db->rollBack();
                    }
                    throw \$e;
                }
            }
        }
    }

    private static function isDDLStatement(string \$query): bool|int
    {
        return preg_match('/^(CREATE|ALTER|DROP|RENAME|TRUNCATE|COMMENT)\\s/i', \$query);
    }

    /**
     * Called by PluginController::reloadAction when the addon version does not match what's installed.
     *
     * @throws \\Exception
     *
     * @deprecated To be removed in 5.0. Listen to PluginEvents::ON_PLUGIN_UPDATE instead
     */
    public static function onPluginUpdate(
        Plugin \$plugin,
        MauticFactory \$factory,
        \$metadata = null,
        Schema \$installedSchema = null
    ): void {
        // Not recommended although availalbe for simple schema changes - see updatePluginSchema docblock
        // self::updatePluginSchema(\$metadata, \$installedSchema, \$factory);
    }

    /**
     * Update plugin schema based on Doctrine metadata.
     *
     * WARNING - this is not recommended as Doctrine does not guarantee results. There is a risk
     * that Doctrine will generate an incorrect query leading to lost data. If using this method,
     * be sure to thoroughly test the queries Doctrine generates
     *
     * @throws \\Doctrine\\DBAL\\ConnectionException
     * @throws \\Exception
     */
    public static function updatePluginSchema(array \$metadata, Schema \$installedSchema, MauticFactory \$factory): void
    {
        \$db               = \$factory->getDatabase();
        \$schemaTool       = new SchemaTool(\$factory->getEntityManager());
        \$toSchema         = \$schemaTool->getSchemaFromMetadata(\$metadata);
        \$comparator       = (new Comparator())->compareSchemas(\$installedSchema, \$toSchema);
        \$databasePlatform = \$db->getDatabasePlatform();
        \$queries          = \$databasePlatform->getAlterSchemaSQL(\$comparator);

        \$db->beginTransaction();
        try {
            foreach (\$queries as \$q) {
                \$db->executeQuery(\$q);
            }

            \$db->commit();
        } catch (\\Exception \$e) {
            \$db->rollback();

            throw \$e;
        }
    }

    /**
     * Not used yet :-).
     */
    public static function onPluginUninstall(Plugin \$plugin, MauticFactory \$factory, \$metadata = null): void
    {
    }

    /**
     * Drops plugin's tables based on Doctrine metadata.
     *
     * @throws \\Doctrine\\DBAL\\ConnectionException
     * @throws \\Exception
     */
    public static function dropPluginSchema(array \$metadata, MauticFactory \$factory): void
    {
        \$db          = \$factory->getDatabase();
        \$schemaTool  = new SchemaTool(\$factory->getEntityManager());
        \$dropQueries = \$schemaTool->getDropSchemaSQL(\$metadata);

        \$db->beginTransaction();
        try {
            foreach (\$dropQueries as \$q) {
                \$db->executeQuery(\$q);
            }

            \$db->commit();
        } catch (\\Exception \$e) {
            \$db->rollback();

            throw \$e;
        }
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
        return "@bundles/PluginBundle/Bundle/PluginBundleBase.php";
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
        return new Source("", "@bundles/PluginBundle/Bundle/PluginBundleBase.php", "/app/docroot/app/bundles/PluginBundle/Bundle/PluginBundleBase.php");
    }
}
