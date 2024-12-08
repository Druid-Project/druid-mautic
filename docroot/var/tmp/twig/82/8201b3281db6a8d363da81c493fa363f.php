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

/* @bundles/IntegrationsBundle/Migration/AbstractMigration.php */
class __TwigTemplate_c23003a24e7360ead81bc2174364d852 extends Template
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

namespace Mautic\\IntegrationsBundle\\Migration;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\ORM\\EntityManager;

abstract class AbstractMigration implements MigrationInterface
{
    /**
     * @var string[]
     */
    private array \$queries = [];

    public function __construct(
        protected EntityManager \$entityManager,
        protected string \$tablePrefix
    ) {
    }

    public function shouldExecute(): bool
    {
        return \$this->isApplicable(\$this->entityManager->getConnection()->createSchemaManager()->introspectSchema());
    }

    /**
     * @throws \\Doctrine\\DBAL\\Exception
     */
    public function execute(): void
    {
        \$this->up();

        if (!\$this->queries) {
            return;
        }

        \$connection = \$this->entityManager->getConnection();

        foreach (\$this->queries as \$sql) {
            \$stmt = \$connection->prepare(\$sql);
            \$stmt->executeStatement();
        }
    }

    /**
     * Generate the ALTER TABLE query that adds the foreign key.
     *
     * @param string[] \$columns
     * @param string[] \$referenceColumns
     * @param string   \$suffix           usually a 'ON DELETE ...' statement
     */
    protected function generateAlterTableForeignKeyStatement(
        string \$table,
        array \$columns,
        string \$referenceTable,
        array \$referenceColumns,
        string \$suffix = ''
    ): string {
        return \"ALTER TABLE {\$this->concatPrefix(\$table)} 
            ADD CONSTRAINT {\$this->generatePropertyName(\$table, 'fk', \$columns)} 
            FOREIGN KEY ({\$this->columnsToString(\$columns)}) 
            REFERENCES {\$this->concatPrefix(\$referenceTable)} ({\$this->columnsToString(\$referenceColumns)}) {\$suffix}
        \";
    }

    /**
     * @param string[] \$columns
     */
    protected function generateIndexStatement(string \$table, array \$columns): string
    {
        return \"INDEX {\$this->generatePropertyName(\$table, 'idx', \$columns)} ({\$this->columnsToString(\$columns)})\";
    }

    /**
     * @param string[] \$columns
     */
    protected function columnsToString(array \$columns): string
    {
        return implode(',', \$columns);
    }

    /**
     * Generate the name for the property.
     *
     * This method was copied from AbstractMauticMigration.
     *
     * @param string[] \$columnNames
     */
    protected function generatePropertyName(string \$table, string \$type, array \$columnNames): string
    {
        \$columnNames = array_merge([\$this->tablePrefix.\$table], \$columnNames);
        \$hash        = implode(
            '',
            array_map(
                fn (\$column): string => dechex(crc32(\$column)),
                \$columnNames
            )
        );

        return substr(strtoupper(\$type.'_'.\$hash), 0, 63);
    }

    protected function addSql(string \$sql): void
    {
        \$this->queries[] = \$sql;
    }

    /**
     * Concatenates table/index prefix to the provided name.
     */
    protected function concatPrefix(string \$name): string
    {
        return \$this->tablePrefix.\$name;
    }

    /**
     * Define in the child migration whether the migration should be executed.
     * Check if the migration is applied in the schema already.
     */
    abstract protected function isApplicable(Schema \$schema): bool;

    /**
     * Define queries for migration up.
     */
    abstract protected function up(): void;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Migration/AbstractMigration.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Migration/AbstractMigration.php", "/app/docroot/app/bundles/IntegrationsBundle/Migration/AbstractMigration.php");
    }
}
