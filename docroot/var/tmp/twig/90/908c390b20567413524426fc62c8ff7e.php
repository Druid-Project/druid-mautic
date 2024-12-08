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

/* @bundles/CoreBundle/Test/Doctrine/DBALMocker.php */
class __TwigTemplate_ec577611a889d21401da36012d9efad5 extends Template
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

namespace Mautic\\CoreBundle\\Test\\Doctrine;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Driver\\Result;
use Doctrine\\DBAL\\Query\\Expression\\ExpressionBuilder;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\Lead;

class DBALMocker
{
    protected \$testCase;

    protected \$mockEm;

    protected \$mockConnection;

    protected \$mockQueryBuilder;

    protected \$queryResponse;

    protected \$connectionUpdated;

    protected \$connectionInserted;

    protected \$queryParts = [
        'select'     => [],
        'from'       => [],
        'where'      => [],
        'parameters' => [],
    ];

    public function __construct(\\PHPUnit\\Framework\\TestCase \$testCase)
    {
        \$this->testCase = \$testCase;
    }

    public function setQueryResponse(\$queryResponse): void
    {
        \$this->queryResponse = \$queryResponse;
    }

    public function getQueryParts()
    {
        return \$this->queryParts;
    }

    public function getQueryPart(\$part)
    {
        if (array_key_exists(\$part, \$this->queryParts)) {
            return \$this->queryParts[\$part];
        }

        throw new \\UnexpectedValueException(sprintf('The requested query part (%s) does not exist. It must be one of %s.', \$part, implode(', ', array_keys(\$this->queryParts))));
    }

    public function resetQueryParts(): void
    {
        \$this->queryParts = [
            'select'     => [],
            'from'       => [],
            'where'      => [],
            'parameters' => [],
        ];
    }

    public function resetUpdated(): void
    {
        \$this->connectionUpdated = [];
    }

    public function resetInserted(): void
    {
        \$this->connectionInserted = [];
    }

    public function reset(): void
    {
        \$this->resetQueryParts();
        \$this->resetUpdated();
        \$this->resetInserted();
    }

    public function getMockEm()
    {
        if (null === \$this->mockEm) {
            \$mock = \$this->testCase->getMockBuilder(EntityManager::class)
                ->disableOriginalConstructor()
                ->setMethods(
                    [
                        'getConnection',
                        'getReference',
                    ]
                )
                ->getMock();

            \$mock->expects(\$this->testCase->any())
                ->method('getConnection')
                ->willReturn(\$this->getMockConnection());

            \$mock->expects(\$this->testCase->any())
                ->method('getReference')
                ->willReturnCallback(function () {
                    switch (func_get_arg(0)) {
                        case Lead::class:
                            \$entity = new Lead();
                            break;
                    }

                    \$entity->setId(func_get_arg(1));

                    return \$entity;
                });

            \$this->mockEm = \$mock;
        }

        return \$this->mockEm;
    }

    public function getMockConnection()
    {
        if (null === \$this->mockConnection) {
            \$mock = \$this->testCase->getMockBuilder(Connection::class)
                ->disableOriginalConstructor()
                ->setMethods([
                    'createQueryBuilder',
                    'quote',
                    'update',
                    'insert',
                ])
                ->getMock();

            \$mock->expects(\$this->testCase->any())
                ->method('createQueryBuilder')
                ->willReturn(\$this->getMockQueryBuilder());

            \$mock->expects(\$this->testCase->any())
                ->method('quote')
                ->willReturnArgument(0);

            \$mock->expects(\$this->testCase->any())
                ->method('update')
                ->willReturnCallback(function (): void {
                    \$this->connectionUpdated[] = func_get_args();
                });

            \$mock->expects(\$this->testCase->any())
                ->method('insert')
                ->willReturnCallback(function (): void {
                    \$this->connectionInserted[] = func_get_args();
                });

            \$this->mockConnection = \$mock;
        }

        return \$this->mockConnection;
    }

    public function getMockQueryBuilder()
    {
        if (null === \$this->mockQueryBuilder) {
            \$mock = \$this->testCase->getMockBuilder(QueryBuilder::class)
                ->disableOriginalConstructor()
                ->setMethods(
                    [
                        'select',
                        'from',
                        'expr',
                        'where',
                        'andWhere',
                        'setParameter',
                        'execute',
                    ]
                )
                ->getMock();

            \$mock->expects(\$this->testCase->any())
                ->method('select')
                ->willReturnCallback(
                    function () use (\$mock) {
                        \$this->queryParts['select'][] = func_get_args();

                        return \$mock;
                    }
                );

            \$mock->expects(\$this->testCase->any())
                ->method('from')
                ->willReturnCallback(
                    function () use (\$mock) {
                        \$this->queryParts['from'][] = func_get_args();

                        return \$mock;
                    }
                );

            \$mock->expects(\$this->testCase->any())
                ->method('expr')
                ->willReturnCallback(
                    fn () => new ExpressionBuilder(\$this->getMockConnection())
                );

            \$mock->expects(\$this->testCase->any())
                ->method('where')
                ->willReturnCallback(
                    function () use (\$mock) {
                        \$this->queryParts['where'][] = func_get_args();

                        return \$mock;
                    }
                );

            \$mock->expects(\$this->testCase->any())
                ->method('andWhere')
                ->willReturnCallback(
                    function () use (\$mock) {
                        \$this->queryParts['where'][] = func_get_args();

                        return \$mock;
                    }
                );

            \$mock->expects(\$this->testCase->any())
                ->method('setParameter')
                ->willReturnCallback(
                    function () use (\$mock) {
                        \$this->queryParts['parameters'][] = func_get_args();

                        return \$mock;
                    }
                );

            \$mock->expects(\$this->testCase->any())
                ->method('execute')
                ->willReturnCallback([\$this, 'getMockResultStatement']);

            \$this->mockQueryBuilder = \$mock;
        }

        return \$this->mockQueryBuilder;
    }

    public function getMockResultStatement()
    {
        \$mock = \$this->testCase->getMockBuilder(Result::class)
            ->disableOriginalConstructor()
            ->setMethods([
                'fetchNumeric',
                'fetchAssociative',
                'fetchOne',
                'fetchAllNumeric',
                'fetchAllAssociative',
                'fetchFirstColumn',
                'rowCount',
                'columnCount',
                'free',
            ])
            ->getMock();

        \$mock->method('columnCount')
            ->willReturnCallback(function () {
                if (isset(\$this->queryResponse[0]) && is_array(\$this->queryResponse[0])) {
                    return count(\$this->queryResponse[0]);
                } else {
                    return count(\$this->queryResponse);
                }
            });

        \$mock->expects(\$this->testCase->any())
            ->method('fetchOne')
            ->willReturn(\$this->queryResponse);

        \$mock->expects(\$this->testCase->any())
            ->method('fetchAllAssociative')
            ->willReturn(\$this->queryResponse);

        return \$mock;
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
        return "@bundles/CoreBundle/Test/Doctrine/DBALMocker.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Doctrine/DBALMocker.php", "/app/docroot/app/bundles/CoreBundle/Test/Doctrine/DBALMocker.php");
    }
}
