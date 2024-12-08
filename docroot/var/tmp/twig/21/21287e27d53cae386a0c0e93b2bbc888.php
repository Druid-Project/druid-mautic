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

/* @bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountSentTest.php */
class __TwigTemplate_6b6e75f1c9034cc073a286afe5ba558f extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Entity;

use Doctrine\\DBAL\\Exception as DBALException;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\Test\\Doctrine\\RepositoryConfiguratorTrait;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\EmailRepository;
use PHPUnit\\Framework\\MockObject\\MockObject;

class EmailRepositoryUpCountSentTest extends \\PHPUnit\\Framework\\TestCase
{
    use RepositoryConfiguratorTrait;

    /**
     * @var MockObject|QueryBuilder
     */
    private MockObject \$queryBuilderMock;

    private QueryBuilder \$queryBuilder;

    private EmailRepository \$repo;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->repo             = \$this->configureRepository(Email::class);
        \$this->queryBuilderMock = \$this->createMock(QueryBuilder::class);
        \$this->queryBuilder     = new QueryBuilder(\$this->connection);
    }

    public function testUpCountSentWithNoIncrease(): void
    {
        \$this->connection->method('createQueryBuilder')->willReturn(\$this->queryBuilderMock);
        \$this->queryBuilderMock->expects(\$this->never())
            ->method('update');

        \$this->repo->upCountSent(45, 0);
    }

    public function testUpCountSentWithId(): void
    {
        \$this->connection->method('createQueryBuilder')->willReturn(\$this->queryBuilder);

        \$this->connection
            ->expects(\$this->exactly(1))
            ->method('executeStatement')
            ->willReturn(1);

        \$this->repo->upCountSent(11);
        \$generatedSql = \$this->queryBuilder->getSQL();

        // Assert that the generated SQL matches our expectations
        \$expectedSql = 'UPDATE test_emails SET sent_count = sent_count + :increaseBy WHERE id = :id';
        \$this->assertEquals(\$expectedSql, \$generatedSql);

        // Assert parameters are properly set up
        \$this->assertEquals(11, \$this->queryBuilder->getParameter('id'));
        \$this->assertEquals(1, \$this->queryBuilder->getParameter('increaseBy'));
    }

    public function testUpCountWithVariant(): void
    {
        \$this->connection->method('createQueryBuilder')->willReturn(\$this->queryBuilder);

        \$this->connection
            ->expects(\$this->exactly(1))
            ->method('executeStatement')
            ->willReturn(1);

        \$this->repo->upCountSent(11, 2, true);
        \$generatedSql = \$this->queryBuilder->getSQL();

        // Assert that the generated SQL matches our expectations
        \$expectedSql = 'UPDATE test_emails SET sent_count = sent_count + :increaseBy, variant_sent_count = variant_sent_count + :increaseBy WHERE id = :id';
        \$this->assertEquals(\$expectedSql, \$generatedSql);
    }

    public function testUpCountWithTwoErrors(): void
    {
        \$this->connection->method('createQueryBuilder')->willReturn(\$this->queryBuilder);

        \$this->connection
            ->expects(\$this->exactly(3))
            ->method('executeStatement')
            ->will(
                \$this->onConsecutiveCalls(
                    \$this->throwException(new DBALException()),
                    \$this->throwException(new DBALException()),
                    1
                )
            );

        \$this->repo->upCountSent(45);
    }

    public function testUpCountWithFourErrors(): void
    {
        \$this->connection->method('createQueryBuilder')->willReturn(\$this->queryBuilder);
        \$this->connection
            ->expects(\$this->exactly(3))
            ->method('executeStatement')
            ->will(\$this->throwException(new DBALException()));

        \$this->expectException(DBALException::class);
        \$this->repo->upCountSent(45);
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
        return "@bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountSentTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountSentTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountSentTest.php");
    }
}
