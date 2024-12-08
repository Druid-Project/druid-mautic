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

/* @bundles/CoreBundle/Test/Doctrine/RepositoryConfiguratorTrait.php */
class __TwigTemplate_1fe909391f10e8492e472eeb8b0096d6 extends Template
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

namespace Mautic\\CoreBundle\\Test\\Doctrine;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Query\\Expression\\ExpressionBuilder;
use Doctrine\\DBAL\\Result;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\Persistence\\ManagerRegistry;
use PHPUnit\\Framework\\MockObject\\MockObject;

/**
 * This trait will help with writing unit tests for repositories.
 * However, consider using a functional test instead. It's simpler and adds more value.
 */
trait RepositoryConfiguratorTrait
{
    use MockedConnectionTrait;

    /**
     * @var MockObject&EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @var MockObject&ClassMetadata<object>
     */
    private \$classMetadata;

    /**
     * @var MockObject&ManagerRegistry
     */
    private \$managerRegistry;

    /**
     * @var MockObject&Connection
     */
    private \$connection;

    /**
     * @var MockObject&Result
     */
    private \$result;

    /**
     * @return object the repository for the entity
     */
    private function configureRepository(string \$entityClass)
    {
        \$this->classMetadata   = \$this->createMock(ClassMetadata::class);
        \$this->entityManager   = \$this->createMock(EntityManagerInterface::class);
        \$this->managerRegistry = \$this->createMock(ManagerRegistry::class);
        \$this->connection      = \$this->getMockedConnection();
        \$this->result          = \$this->createMock(Result::class);

        \$this->configureMocks(\$entityClass);

        \$repositoryClass = \$entityClass.'Repository';

        return new \$repositoryClass(\$this->managerRegistry);
    }

    private function configureMocks(string \$entityClass): void
    {
        \$this->managerRegistry->method('getManagerForClass')->with(\$entityClass)->willReturn(\$this->entityManager);
        \$this->entityManager->method('getClassMetadata')->with(\$entityClass)->willReturn(\$this->classMetadata);
        \$this->entityManager->method('getConnection')->willReturn(\$this->connection);
        \$this->connection->method('getExpressionBuilder')->willReturnCallback(fn () => new ExpressionBuilder(\$this->connection));
        \$this->connection->method('executeQuery')->willReturn(\$this->result);
        \$this->connection->method('quote')->willReturnCallback(fn (\$value) => \"'\$value'\");
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
        return "@bundles/CoreBundle/Test/Doctrine/RepositoryConfiguratorTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Doctrine/RepositoryConfiguratorTrait.php", "/app/docroot/app/bundles/CoreBundle/Test/Doctrine/RepositoryConfiguratorTrait.php");
    }
}
