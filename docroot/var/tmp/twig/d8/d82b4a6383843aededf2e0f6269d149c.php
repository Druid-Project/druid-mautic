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

/* @bundles/CoreBundle/Test/MauticSqliteTestCase.php */
class __TwigTemplate_9e41a5bdf96017db7f12fa0d42085d33 extends Template
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

namespace Mautic\\CoreBundle\\Test;

use Doctrine\\ORM\\Events;
use Mautic\\CoreBundle\\Test\\DoctrineExtensions\\TablePrefix;
use Mautic\\InstallBundle\\Helper\\SchemaHelper;
use Mautic\\InstallBundle\\InstallFixtures\\ORM\\LeadFieldData;
use Mautic\\InstallBundle\\InstallFixtures\\ORM\\RoleData;
use Mautic\\UserBundle\\DataFixtures\\ORM\\LoadRoleData;
use Mautic\\UserBundle\\DataFixtures\\ORM\\LoadUserData;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
abstract class MauticSqliteTestCase extends AbstractMauticTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        if (file_exists(\$this->getOriginalDatabasePath())) {
            \$this->createDatabaseFromFile();
        } else {
            \$this->createDatabase();
            \$this->applyMigrations();
            \$this->installDatabaseFixtures([LeadFieldData::class, RoleData::class, LoadRoleData::class, LoadUserData::class]);
            \$this->backupOrginalDatabase();
        }
    }

    private function createDatabase(): void
    {
        // fix problem with prefixes in sqlite
        \$tablePrefix = new TablePrefix('prefix_');
        \$this->em->getEventManager()->addEventListener(Events::loadClassMetadata, \$tablePrefix);

        \$dbParams = array_merge(static::getContainer()->get('doctrine')->getConnection()->getParams(), [
            'table_prefix'  => null,
            'backup_tables' => 0,
        ]);

        // create schema
        \$schemaHelper = new SchemaHelper(\$dbParams);
        \$schemaHelper->setEntityManager(\$this->em);

        \$schemaHelper->createDatabase();
        \$schemaHelper->installSchema();

        \$this->em->getConnection()->close();
    }

    private function createDatabaseFromFile(): void
    {
        copy(\$this->getOriginalDatabasePath(), \$this->getDatabasePath());
    }

    private function backupOrginalDatabase(): void
    {
        copy(\$this->getDatabasePath(), \$this->getOriginalDatabasePath());
    }

    private function getOriginalDatabasePath()
    {
        return \$this->getDatabasePath().'.original';
    }

    private function getDatabasePath()
    {
        return static::getContainer()->get('doctrine')->getConnection()->getParams()['path'];
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
        return "@bundles/CoreBundle/Test/MauticSqliteTestCase.php";
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
        return new Source("", "@bundles/CoreBundle/Test/MauticSqliteTestCase.php", "/app/docroot/app/bundles/CoreBundle/Test/MauticSqliteTestCase.php");
    }
}
