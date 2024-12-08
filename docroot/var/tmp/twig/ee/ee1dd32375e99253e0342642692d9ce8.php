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

/* @bundles/LeadBundle/Tests/Segment/Query/Filter/ChannelClickQueryBuilderTest.php */
class __TwigTemplate_614e14ca8c189ebb75bdd8b8ed3ef52a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Query\\Filter;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Test\\Doctrine\\MockedConnectionTrait;
use Mautic\\LeadBundle\\Provider\\FilterOperatorProviderInterface;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterOperator;
use Mautic\\LeadBundle\\Segment\\Decorator\\BaseDecorator;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\ChannelClickQueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\FilterQueryBuilderInterface;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use Mautic\\LeadBundle\\Segment\\TableSchemaColumnsCache;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ChannelClickQueryBuilderTest extends TestCase
{
    use MockedConnectionTrait;

    /**
     * @var MockObject|RandomParameterName
     */
    private MockObject \$randomParameterMock;

    /**
     * @var MockObject|EventDispatcherInterface
     */
    private MockObject \$dispatcherMock;

    /**
     * @var Connection|MockObject
     */
    private MockObject \$connectionMock;

    private ChannelClickQueryBuilder \$queryBuilder;

    public function setUp(): void
    {
        \$this->randomParameterMock = \$this->createMock(RandomParameterName::class);
        \$this->dispatcherMock      = \$this->createMock(EventDispatcherInterface::class);
        \$this->connectionMock      = \$this->getMockedConnection();
        \$this->queryBuilder        = new ChannelClickQueryBuilder(
            \$this->randomParameterMock,
            \$this->dispatcherMock
        );

        \$this->connectionMock->method('quote')
            ->willReturnArgument(0);
    }

    public function testGetServiceId(): void
    {
        \$this->assertEquals(
            'mautic.lead.query.builder.channel_click.value',
            \$this->queryBuilder::getServiceId()
        );
    }

    /**
     * @return array<mixed>
     */
    public function dataApplyQuery(): iterable
    {
        yield ['eq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email))'];
        yield ['eq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email))'];
        yield ['neq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email))'];
        yield ['neq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email))'];
    }

    /**
     * @dataProvider dataApplyQuery
     */
    public function testApplyQuery(string \$operator, string \$parameterValue, string \$expectedQuery): void
    {
        \$expectedQuery = str_replace('__PREFIX__', MAUTIC_TABLE_PREFIX, \$expectedQuery);
        \$queryBuilder  = new QueryBuilder(\$this->connectionMock);
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');

        \$filter = \$this->getContactSegmentFilter(\$operator, \$parameterValue);

        \$this->randomParameterMock->method('generateRandomParameterName')
            ->willReturnOnConsecutiveCalls('queryAlias', 'para1', 'para2');

        \$this->queryBuilder->applyQuery(\$queryBuilder, \$filter);

        Assert::assertSame(\$expectedQuery, \$queryBuilder->getDebugOutput());
    }

    /**
     * @return array<mixed>
     */
    public function dataApplyQueryWithBatchLimitersMinMaxBoth(): iterable
    {
        yield [['minId' => 1, 'maxId' => 1], 'eq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id BETWEEN 1 and 1))'];
        yield [['minId' => 1, 'maxId' => 1], 'eq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id BETWEEN 1 and 1))'];
        yield [['minId' => 1, 'maxId' => 1], 'neq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id BETWEEN 1 and 1))'];
        yield [['minId' => 1, 'maxId' => 1], 'neq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id BETWEEN 1 and 1))'];

        yield [['minId' => 1], 'eq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id >= 1))'];
        yield [['minId' => 1], 'eq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id >= 1))'];
        yield [['minId' => 1], 'neq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id >= 1))'];
        yield [['minId' => 1], 'neq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id >= 1))'];

        yield [['maxId' => 1], 'eq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id <= 1))'];
        yield [['maxId' => 1], 'eq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id <= 1))'];
        yield [['maxId' => 1], 'neq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id <= 1))'];
        yield [['maxId' => 1], 'neq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id <= 1))'];

        yield [['lead_id' => 1], 'eq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id = 1))'];
        yield [['lead_id' => 1], 'eq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id = 1))'];
        yield [['lead_id' => 1], 'neq', '1', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id NOT IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id = 1))'];
        yield [['lead_id' => 1], 'neq', '0', 'SELECT 1 FROM __PREFIX__leads l WHERE l.id IN (SELECT para1.lead_id FROM __PREFIX__page_hits para1 WHERE (para1.redirect_id IS NOT NULL) AND (para1.lead_id IS NOT NULL) AND (para1.source = email) AND (para1.lead_id = 1))'];
    }

    /**
     * @dataProvider dataApplyQueryWithBatchLimitersMinMaxBoth
     *
     * @param array<string, mixed> \$batchLimiters
     */
    public function testApplyQueryWithBatchLimitersMinMaxBoth(array \$batchLimiters, string \$operator, string \$parameterValue, string \$expectedQuery): void
    {
        \$expectedQuery = str_replace('__PREFIX__', MAUTIC_TABLE_PREFIX, \$expectedQuery);
        \$queryBuilder  = new QueryBuilder(\$this->connectionMock);
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');

        \$filter = \$this->getContactSegmentFilter(\$operator, \$parameterValue, \$batchLimiters);

        \$this->randomParameterMock->method('generateRandomParameterName')
            ->willReturnOnConsecutiveCalls('queryAlias', 'para1', 'para2');

        \$this->queryBuilder->applyQuery(\$queryBuilder, \$filter);

        Assert::assertSame(\$expectedQuery, \$queryBuilder->getDebugOutput());
    }

    /**
     * @param array<string, mixed> \$batchLimiters
     */
    private function getContactSegmentFilter(string \$operator, string \$parameterValue, array \$batchLimiters = []): ContactSegmentFilter
    {
        return new ContactSegmentFilter(
            new ContactSegmentFilterCrate(
                [
                    'operator'   => \$operator,
                    'glue'       => 'and',
                    'field'      => 'email_id',
                    'object'     => 'behaviors',
                    'type'       => 'boolean',
                    'properties' => [
                        'filter' => \$parameterValue,
                    ],
                ]
            ),
            new BaseDecorator(new ContactSegmentFilterOperator(
                \$this->createMock(FilterOperatorProviderInterface::class)
            )),
            new TableSchemaColumnsCache(\$this->createMock(EntityManager::class)),
            \$this->createMock(FilterQueryBuilderInterface::class),
            \$batchLimiters
        );
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
        return "@bundles/LeadBundle/Tests/Segment/Query/Filter/ChannelClickQueryBuilderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Query/Filter/ChannelClickQueryBuilderTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/Query/Filter/ChannelClickQueryBuilderTest.php");
    }
}
