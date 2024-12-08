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

/* @bundles/LeadBundle/Tests/Field/Helper/IndexHelperTest.php */
class __TwigTemplate_e6ff5730aed1dab6f7f13f07147074d6 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field\\Helper;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Result;
use Doctrine\\DBAL\\Statement;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Field\\Helper\\IndexHelper;

class IndexHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public const COLUMN_NAME_KEY = 'Column_name';

    public function testGetIndexCountAndColumns(): void
    {
        \$tableName   = 'table_name';
        \$sql         = \"SHOW INDEXES FROM `\$tableName`\";
        \$columnNames = [
            'id', '0', '1', '1', '2', '2',
        ];
        foreach (\$columnNames as \$columnName) {
            \$sqlResult[][self::COLUMN_NAME_KEY] = \$columnName;
        }
        \$expectedColumnNames = array_map(
            function (\$column) {
                return \$column[self::COLUMN_NAME_KEY];
            },
            \$sqlResult
        );

        \$expectedCount = count(\$expectedColumnNames);

        \$emMock = \$this->createMock(EntityManager::class);
        \$helper = new IndexHelper(\$emMock);

        \$mdMock = \$this->createMock(ClassMetadata::class);

        \$emMock->expects(\$this->once())
            ->method('getClassMetadata')
            ->with(Lead::class)
            ->willReturn(\$mdMock);

        \$mdMock->expects(\$this->once())
            ->method('getTableName')
            ->willReturn(\$tableName);

        \$connMock = \$this->createMock(Connection::class);

        \$emMock->expects(\$this->once())
            ->method('getConnection')
            ->willReturn(\$connMock);

        \$stmtMock = \$this->createMock(Statement::class);
        \$result   = \$this->createMock(Result::class);
        \$connMock->expects(\$this->once())
            ->method('prepare')
            ->with(\$sql)
            ->willReturn(\$stmtMock);

        \$stmtMock->expects(\$this->once())
            ->method('executeQuery')
            ->willReturn(\$result);

        \$result->expects(\$this->once())
            ->method('fetchAllAssociative')
            ->willReturn(\$sqlResult);

        \$this->assertEquals(\$expectedColumnNames, \$helper->getIndexedColumnNames());
        \$this->assertEquals(\$expectedCount, \$helper->getIndexCount());
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
        return "@bundles/LeadBundle/Tests/Field/Helper/IndexHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/Helper/IndexHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/Helper/IndexHelperTest.php");
    }
}
