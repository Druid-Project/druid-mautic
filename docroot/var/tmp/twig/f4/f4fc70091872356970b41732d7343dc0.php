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

/* @bundles/LeadBundle/Tests/Entity/LeadRepositoryTest.php */
class __TwigTemplate_7f4a066dcb5a1d7b8dc7652d49924e84 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Doctrine\\DBAL\\ArrayParameterType;
use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use Doctrine\\ORM\\AbstractQuery;
use Mautic\\CoreBundle\\Test\\Doctrine\\DBALMocker;
use Mautic\\CoreBundle\\Test\\Doctrine\\RepositoryConfiguratorTrait;
use Mautic\\LeadBundle\\Entity\\CustomFieldRepositoryTrait;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;

class LeadRepositoryTest extends \\PHPUnit\\Framework\\TestCase
{
    use RepositoryConfiguratorTrait;

    private LeadRepository \$repository;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->repository = \$this->configureRepository(Lead::class);
    }

    public function testBooleanWithPrepareDbalFieldsForSave(): void
    {
        \$trait  = \$this->getMockForTrait(CustomFieldRepositoryTrait::class);
        \$fields = [
            'true'   => true,
            'false'  => false,
            'string' => 'blah',
        ];

        \$reflection = new \\ReflectionObject(\$trait);
        \$method     = \$reflection->getMethod('prepareDbalFieldsForSave');
        \$method->setAccessible(true);
        \$method->invokeArgs(\$trait, [&\$fields]);

        \$this->assertEquals(1, \$fields['true']);
        \$this->assertEquals(0, \$fields['false']);
        \$this->assertEquals('blah', \$fields['string']);
    }

    /**
     * Ensure that the emails are bound separately as parameters according to
     * https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/query-builder.html#line-number-0a267d5a2c69797a7656aae33fcc140d16b0a566-72.
     */
    public function testBuildQueryForGetLeadsByFieldValue(): void
    {
        \$dbalMock = new DBALMocker(\$this);

        \$mock = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getEntityManager'])
            ->getMock();

        \$mock->method('getEntityManager')
            ->will(\$this->returnValue(\$dbalMock->getMockEm()));

        \$reflection = new \\ReflectionClass(LeadRepository::class);
        \$refMethod  = \$reflection->getMethod('buildQueryForGetLeadsByFieldValue');
        \$refMethod->setAccessible(true);

        \$refMethod->invoke(\$mock, 'email', ['test@example.com', 'test2@example.com']);

        \$parameters = \$dbalMock->getQueryPart('parameters');

        \$this->assertCount(2, \$parameters, 'There should be two parameters bound because that\\'s the number of emails we passed into the method.');
    }

    /**
     * Ensure that the array_combine return value matches the old style.
     */
    public function testGetLeadsByFieldValueArrayMapReturn(): void
    {
        /** @var MockObject&LeadRepository */
        \$repository = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getEntities', 'buildQueryForGetLeadsByFieldValue'])
            ->getMock();

        \$contact = new Lead();
        \$contact->setEmail('test@example.com');

        \$contact2 = new Lead();
        \$contact2->setEmail('test2@example.com');

        \$entities = [\$contact, \$contact2];

        \$repository->method('getEntities')->will(\$this->returnValue(\$entities));
        \$repository->method('buildQueryForGetLeadsByFieldValue')->will(\$this->returnValue(null));

        \$contacts = \$repository->getLeadsByFieldValue('email', ['test@example.com', 'test2@example.com']);

        \$this->assertSame(\$entities, \$contacts, 'When getting leads without indexing by column, it should match the expected result.');

        \$contacts = \$repository->getLeadsByFieldValue('email', ['test@example.com', 'test2@example.com'], null, true);
        \$expected = ['test@example.com', 'test2@example.com'];

        \$this->assertSame(\$expected, array_keys(\$contacts), 'When getting leads with indexing by column, it should match the expected result.');
    }

    /**
     * Ensure that we will join each table with the same alias only once.
     */
    public function testApplySearchQueryRelationshipJoinOnlyOnce(): void
    {
        \$queryBuilder = new QueryBuilder(\$this->connection);
        \$queryBuilder->select('*')->from(MAUTIC_TABLE_PREFIX.'table_a');
        \$tableB = [
            'alias'      => 'alias_b',
            'from_alias' => MAUTIC_TABLE_PREFIX.'table_a',
            'table'      => 'table_b',
            'condition'  => 'condition_b',
        ];
        \$tableC = [
            'alias'      => 'alias_c',
            'from_alias' => MAUTIC_TABLE_PREFIX.'table_a',
            'table'      => 'table_c',
            'condition'  => 'condition_c',
        ];

        \$this->repository->applySearchQueryRelationship(
            \$queryBuilder,
            [\$tableB, \$tableC, \$tableB], // Sending 2 table B here.
            true
        );

        Assert::assertSame(
            'SELECT * FROM '.MAUTIC_TABLE_PREFIX.'table_a INNER JOIN '.MAUTIC_TABLE_PREFIX.'table_b alias_b ON condition_b INNER JOIN '.MAUTIC_TABLE_PREFIX.'table_c alias_c ON condition_c GROUP BY l.id',
            \$queryBuilder->getSQL()
        );
    }

    public function testGetContactIdsByEmails(): void
    {
        \$emails = [
            'somebody1@anywhere.com',
            'somebody2@anywhere.com',
        ];

        \$query = \$this->createMock(AbstractQuery::class);
        \$query->expects(self::once())
            ->method('setParameter')
            ->with('emails', \$emails, ArrayParameterType::STRING)
            ->willReturn(\$query);
        \$query->expects(self::once())
            ->method('getArrayResult')
            ->willReturn([
                0 => [
                    'id' => '1',
                ],
                1 => [
                    'id' => '2',
                ],
            ]);

        \$this->entityManager->expects(self::once())
            ->method('createQuery')
            ->willReturn(\$query);

        self::assertEquals(
            [1, 2],
            \$this->repository->getContactIdsByEmails(\$emails)
        );
    }

    public function testGetUniqueIdentifiersOperator(): void
    {
        \$this->repository->setUniqueIdentifiersOperator(CompositeExpression::TYPE_AND);

        \$reflection = new \\ReflectionClass(LeadRepository::class);
        \$refMethod  = \$reflection->getMethod('getUniqueIdentifiersWherePart');
        \$refMethod->setAccessible(true);

        \$this->assertEquals('andWhere', \$refMethod->invoke(\$this->repository));

        \$this->repository->setUniqueIdentifiersOperator(CompositeExpression::TYPE_OR);

        \$this->assertEquals('orWhere', \$refMethod->invoke(\$this->repository));
    }

    public function testUpdateLastActiveWithId(): void
    {
        \$this->entityManager->expects(\$this->once())
            ->method('getConnection')
            ->willReturn(\$this->connection);

        \$this->repository->updateLastActive(1);
    }

    public function testUpdateLastActiveWithNoId(): void
    {
        \$this->entityManager->expects(\$this->never())
            ->method('getConnection')
            ->willReturn(\$this->connection);

        \$this->repository->updateLastActive(null); // @phpstan-ignore-line this tests if we provide null instead which actually happens.
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
        return "@bundles/LeadBundle/Tests/Entity/LeadRepositoryTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/LeadRepositoryTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/LeadRepositoryTest.php");
    }
}
