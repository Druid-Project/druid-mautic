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

/* @bundles/LeadBundle/Field/Helper/IndexHelper.php */
class __TwigTemplate_44fe41d0651cab5fdaa4db5075f72b9f extends Template
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

namespace Mautic\\LeadBundle\\Field\\Helper;

use Doctrine\\DBAL\\Exception as DBALException;
use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\Lead;

/**
 * Helper for getting and counting indexes on lead table.
 *
 * @see Lead
 */
class IndexHelper
{
    public const MAX_COUNT_ALLOWED = 64;
    /**
     * @var bool|array<string>
     */
    private \$indexedColumns = false;

    /**
     * Can be different from indexed column count when using multiple indexes on same table.
     */
    private int \$indexCount = 0;

    public function __construct(private EntityManager \$entityManager)
    {
    }

    /**
     * @return array<string>|bool
     */
    public function getIndexedColumnNames()
    {
        \$this->getIndexes();

        return \$this->indexedColumns;
    }

    public function getIndexCount(): int
    {
        \$this->getIndexes();

        return \$this->indexCount;
    }

    public function getMaxCount(): int
    {
        return self::MAX_COUNT_ALLOWED;
    }

    public function isNewIndexAllowed(): bool
    {
        return \$this->getIndexCount() < \$this->getMaxCount();
    }

    /**
     * Get indexes created on `leads` table.
     *
     * @see Lead
     *
     * @throws DBALException
     */
    private function getIndexes(): void
    {
        if (false !== \$this->indexedColumns) {
            // Query below performed
            return;
        }

        \$tableName = \$this->entityManager->getClassMetadata(Lead::class)->getTableName();

        \$sql = \"SHOW INDEXES FROM `\$tableName`\";

        \$stmt    = \$this->entityManager->getConnection()->prepare(\$sql);
        \$indexes = \$stmt->executeQuery()->fetchAllAssociative();

        \$this->indexedColumns = array_map(
            fn (\$index) => \$index['Column_name'],
            \$indexes
        );

        \$this->indexCount = count(\$indexes);
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
        return "@bundles/LeadBundle/Field/Helper/IndexHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Helper/IndexHelper.php", "/app/docroot/app/bundles/LeadBundle/Field/Helper/IndexHelper.php");
    }
}
