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

/* @bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountTest.php */
class __TwigTemplate_8538b6ac79dab00cedcf87a7169272b4 extends Template
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

class EmailRepositoryUpCountTest extends \\PHPUnit\\Framework\\TestCase
{
    use RepositoryConfiguratorTrait;

    /**
     * @var MockObject|QueryBuilder
     */
    private MockObject \$queryBuilderMock;

    private EmailRepository \$repo;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->queryBuilderMock = \$this->createMock(QueryBuilder::class);
        \$this->repo             = \$this->configureRepository(Email::class);
        \$this->connection->method('createQueryBuilder')->willReturn(\$this->queryBuilderMock);
    }

    public function testUpCountWithNoIncrease(): void
    {
        \$this->queryBuilderMock->expects(\$this->never())
            ->method('update');

        /** @phpstan-ignore-next-line */
        \$this->repo->upCount(45, 'sent', 0);
    }

    public function testUpCountWithId(): void
    {
        \$this->queryBuilderMock->expects(\$this->once())
            ->method('update')
            ->with(MAUTIC_TABLE_PREFIX.'emails');

        \$this->queryBuilderMock->expects(\$this->once())
            ->method('set')
            ->with('sent_count', 'sent_count + 1');

        \$this->queryBuilderMock->expects(\$this->once())
            ->method('where')
            ->with('id = 45');

        \$this->queryBuilderMock->expects(\$this->once())
            ->method('executeStatement');

        /** @phpstan-ignore-next-line */
        \$this->repo->upCount(45);
    }

    public function testUpCountWithVariant(): void
    {
        \$this->queryBuilderMock->expects(\$this->once())
            ->method('update')
            ->with(MAUTIC_TABLE_PREFIX.'emails');

        \$this->queryBuilderMock->method('set')
            ->withConsecutive(
                ['read_count', 'read_count + 2'],
                ['variant_read_count', 'variant_read_count + 2']
            );

        \$this->queryBuilderMock->expects(\$this->once())
            ->method('where')
            ->with('id = 45');

        \$this->queryBuilderMock->expects(\$this->once())
            ->method('executeStatement');

        /** @phpstan-ignore-next-line */
        \$this->repo->upCount(45, 'read', 2, true);
    }

    public function testUpCountWithTwoErrors(): void
    {
        \$this->queryBuilderMock->expects(\$this->exactly(3))
            ->method('executeStatement')
            ->willReturnOnConsecutiveCalls(
                \$this->throwException(new DBALException()),
                \$this->throwException(new DBALException()),
                0
            );

        /** @phpstan-ignore-next-line */
        \$this->repo->upCount(45);
    }

    public function testUpCountWithFourErrors(): void
    {
        \$this->queryBuilderMock->expects(\$this->exactly(3))
            ->method('executeStatement')
            ->will(\$this->throwException(new DBALException()));

        \$this->expectException(DBALException::class);
        /** @phpstan-ignore-next-line */
        \$this->repo->upCount(45);
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
        return "@bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Entity/EmailRepositoryUpCountTest.php");
    }
}
