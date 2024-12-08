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

/* @bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumn.php */
class __TwigTemplate_180e0de36ec2933ed31c36332a017427 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\GeneratedColumn;

final class GeneratedColumn implements GeneratedColumnInterface
{
    /**
     * @var string
     */
    private \$tablePrefix = '';

    private string \$columnName;

    private ?string \$originalDateColumn = null;

    private ?string \$timeUnit = null;

    private array \$indexColumns = [];

    public function __construct(
        private string \$tableName,
        string \$columnName,
        private string \$columnType,
        private string \$as
    ) {
        \$this->indexColumns[] = \$columnName;
        \$this->tablePrefix    = MAUTIC_TABLE_PREFIX;
        \$this->columnName     = \$columnName;
    }

    public function getTableName(): string
    {
        return \$this->tablePrefix.\$this->tableName;
    }

    public function getColumnName(): string
    {
        return \$this->columnName;
    }

    public function addIndexColumn(string \$indexColumn): void
    {
        \$this->indexColumns[] = \$indexColumn;
    }

    public function setOriginalDateColumn(string \$originalDateColumn, string \$timeUnit): void
    {
        \$this->originalDateColumn = \$originalDateColumn;
        \$this->timeUnit           = \$timeUnit;
    }

    public function getOriginalDateColumn(): ?string
    {
        return \$this->originalDateColumn;
    }

    public function getTimeUnit(): string
    {
        return \$this->timeUnit;
    }

    public function getAlterTableSql(): string
    {
        return \"ALTER TABLE {\$this->getTableName()} ADD {\$this->getColumnName()} {\$this->getColumnDefinition()};
            ALTER TABLE {\$this->getTableName()} ADD INDEX `{\$this->getIndexName()}`({\$this->indexColumnsToString()})\";
    }

    public function getColumnDefinition(): string
    {
        return \"{\$this->columnType} AS ({\$this->as}) COMMENT '(DC2Type:generated)'\";
    }

    public function getIndexColumns(): array
    {
        return \$this->indexColumns;
    }

    public function getIndexName(): string
    {
        return \$this->tablePrefix.\$this->indexColumnsToString('_');
    }

    private function indexColumnsToString(string \$separator = ', '): string
    {
        return implode(\$separator, \$this->indexColumns);
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
        return "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumn.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumn.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/GeneratedColumn/GeneratedColumn.php");
    }
}
