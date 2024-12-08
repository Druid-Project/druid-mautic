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

/* @bundles/EmailBundle/Tests/Entity/EmailRepositoryIncrementReadTest.php */
class __TwigTemplate_4db03ee22c7be4c447f68e1412df0b9c extends Template
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

class EmailRepositoryIncrementReadTest extends \\PHPUnit\\Framework\\TestCase
{
    use RepositoryConfiguratorTrait;

    private QueryBuilder \$queryBuilder;

    private QueryBuilder \$subQueryBuilder;

    /**
     * @var EmailRepository|object
     */
    private \$repo;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->repo             = \$this->configureRepository(Email::class);
        \$this->queryBuilder     = new QueryBuilder(\$this->connection);
        \$this->subQueryBuilder  = new QueryBuilder(\$this->connection);
        \$this->connection->method('createQueryBuilder')->willReturnOnConsecutiveCalls(
            \$this->queryBuilder,
            \$this->subQueryBuilder
        );
    }

    public function testIncrementRead(): void
    {
        \$this->connection
            ->expects(\$this->exactly(1))
            ->method('executeStatement')
            ->willReturn(1);

        \$this->repo->incrementRead(11, 21);
        \$generatedSql = \$this->queryBuilder->getSQL();

        // Assert that the generated SQL matches our expectations
        \$expectedSql = 'UPDATE test_emails e SET read_count = read_count + 1 WHERE (e.id = :emailId) AND (e.id NOT IN (SELECT es.email_id FROM test_email_stats es WHERE (es.id = :statId) AND (es.is_read = 1)))';
        \$this->assertEquals(\$expectedSql, \$generatedSql);
    }

    public function testIncrementReadWithVariant(): void
    {
        \$this->connection
            ->expects(\$this->exactly(1))
            ->method('executeStatement')
            ->willReturn(1);

        \$this->repo->incrementRead(11, 21, true);
        \$generatedSql = \$this->queryBuilder->getSQL();

        // Assert that the generated SQL matches our expectations
        \$expectedSql = 'UPDATE test_emails e SET read_count = read_count + 1, variant_read_count = variant_read_count + 1 WHERE (e.id = :emailId) AND (e.id NOT IN (SELECT es.email_id FROM test_email_stats es WHERE (es.id = :statId) AND (es.is_read = 1)))';
        \$this->assertEquals(\$expectedSql, \$generatedSql);
    }

    public function testUpCountWithTwoErrors(): void
    {
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

        \$this->repo->incrementRead(45, 616);
    }

    public function testUpCountWithFourErrors(): void
    {
        \$this->connection
            ->expects(\$this->exactly(3))
            ->method('executeStatement')
            ->will(\$this->throwException(new DBALException()));

        \$this->expectException(DBALException::class);
        \$this->repo->incrementRead(45, 616);
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
        return "@bundles/EmailBundle/Tests/Entity/EmailRepositoryIncrementReadTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Entity/EmailRepositoryIncrementReadTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Entity/EmailRepositoryIncrementReadTest.php");
    }
}
