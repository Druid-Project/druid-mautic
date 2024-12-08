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

/* @bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderTest.php */
class __TwigTemplate_7361240e6b6f0d1e3b57830b6dfb2de2 extends Template
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
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Provider\\FilterOperatorProviderInterface;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterFactory;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterOperator;
use Mautic\\LeadBundle\\Segment\\Decorator\\BaseDecorator;
use Mautic\\LeadBundle\\Segment\\Exception\\SegmentNotFoundException;
use Mautic\\LeadBundle\\Segment\\Query\\ContactSegmentQueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\FilterQueryBuilderInterface;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\SegmentReferenceFilterQueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use Mautic\\LeadBundle\\Segment\\TableSchemaColumnsCache;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class SegmentReferenceFilterQueryBuilderTest extends MauticMysqlTestCase
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

    private SegmentReferenceFilterQueryBuilder \$queryBuilder;

    private LeadList \$segment;

    public function setUp(): void
    {
        parent::setUp();
        \$this->randomParameterMock = \$this->createMock(RandomParameterName::class);
        \$this->dispatcherMock      = \$this->createMock(EventDispatcherInterface::class);
        \$this->connectionMock      = \$this->getMockedConnection();

        \$this->queryBuilder        = new SegmentReferenceFilterQueryBuilder(
            \$this->randomParameterMock,
            new ContactSegmentQueryBuilder(\$this->em, \$this->randomParameterMock, \$this->dispatcherMock),
            \$this->em,
            \$this->createMock(ContactSegmentFilterFactory::class),
            \$this->dispatcherMock
        );

        \$this->segment = \$this->createNewSegment();
    }

    public function testGetServiceId(): void
    {
        \$this->assertEquals(
            'mautic.lead.query.builder.special.leadlist',
            \$this->queryBuilder::getServiceId()
        );
    }

    /**
     * @return array<mixed>
     */
    public function dataApplyQuery(): iterable
    {
        yield ['eq', \"SELECT 1 FROM <prefix>leads l WHERE EXISTS(SELECT null FROM <prefix>leads queryAlias WHERE (l.id = queryAlias.id) AND (EXISTS(SELECT null FROM <prefix>lead_lists_leads para1 WHERE (queryAlias.id = para1.lead_id) AND ((para1.leadlist_id = %s) AND ((para1.manually_added = 1) OR (para1.manually_removed = ''))))))\"];
        yield ['neq', \"SELECT 1 FROM <prefix>leads l WHERE EXISTS(SELECT null FROM <prefix>leads queryAlias WHERE (l.id = queryAlias.id) AND (EXISTS(SELECT null FROM <prefix>lead_lists_leads para1 WHERE (queryAlias.id = para1.lead_id) AND ((para1.leadlist_id = %s) AND ((para1.manually_added = 1) OR (para1.manually_removed = ''))))))\"];
    }

    /**
     * @dataProvider dataApplyQuery
     */
    public function testApplyQuery(string \$operator, string \$expectedQuery): void
    {
        \$queryBuilder = new QueryBuilder(\$this->connectionMock);
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');

        \$filter = \$this->getContactSegmentFilter(\$operator, (string) \$this->segment->getId());

        \$this->randomParameterMock->method('generateRandomParameterName')
            ->willReturnOnConsecutiveCalls('queryAlias', 'para1', 'para2');

        \$this->queryBuilder->applyQuery(\$queryBuilder, \$filter);

        \$expectedQuery = str_replace('<prefix>', MAUTIC_TABLE_PREFIX, \$expectedQuery);
        Assert::assertSame(sprintf(\$expectedQuery, \$this->segment->getId()), \$queryBuilder->getDebugOutput());
    }

    public function testApplyQueryWhenSegmentNotExist(): void
    {
        \$queryBuilder = new QueryBuilder(\$this->connectionMock);
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');

        \$filter = \$this->getContactSegmentFilter('eq', 'non_exist_segment_id');

        \$this->randomParameterMock->method('generateRandomParameterName')
            ->willReturnOnConsecutiveCalls('queryAlias', 'para1', 'para2');

        \$this->expectException(SegmentNotFoundException::class);
        \$this->queryBuilder->applyQuery(\$queryBuilder, \$filter);
    }

    private function createNewSegment(): LeadList
    {
        \$segment = new LeadList();
        \$segment->setName('Test Segment');
        \$segment->setAlias('test_segment');
        \$segment->isPublished(true);
        \$segment->setPublicName('Test Segment');

        \$this->em->persist(\$segment);
        \$this->em->flush();

        return \$segment;
    }

    private function getContactSegmentFilter(string \$operator, string \$parameterValue): ContactSegmentFilter
    {
        return new ContactSegmentFilter(
            new ContactSegmentFilterCrate(
                [
                    'object'     => 'lead',
                    'glue'       => 'and',
                    'field'      => 'leadlist',
                    'type'       => 'leadlist',
                    'operator'   => \$operator,
                    'properties' => [
                        'filter' => [
                            0 => \$parameterValue,
                        ],
                    ],
                    'filter' => [
                        0 => \$parameterValue,
                    ],
                    'display' => null,
                ]
            ),
            new BaseDecorator(new ContactSegmentFilterOperator(
                \$this->createMock(FilterOperatorProviderInterface::class)
            )),
            new TableSchemaColumnsCache(\$this->createMock(EntityManager::class)),
            \$this->createMock(FilterQueryBuilderInterface::class)
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
        return "@bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/Query/Filter/SegmentReferenceFilterQueryBuilderTest.php");
    }
}
