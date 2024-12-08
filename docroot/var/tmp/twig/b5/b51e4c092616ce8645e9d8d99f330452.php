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

/* @bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php */
class __TwigTemplate_53db84ee6596bae0ebef7dcb7d29f755 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Query;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Test\\Doctrine\\MockedConnectionTrait;
use Mautic\\LeadBundle\\Segment\\Query\\ContactSegmentQueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class ContactSegmentQueryBuilderTest extends TestCase
{
    use MockedConnectionTrait;

    public function testAddNewContactsRestrictions(): void
    {
        \$queryBuilder = new QueryBuilder(\$this->createConnection());
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');
        \$queryBuilder->where('NULL');

        \$filterQueryBuilder = new ContactSegmentQueryBuilder(\$this->createMock(EntityManager::class), new RandomParameterName(), new EventDispatcher());

        Assert::assertSame(\$queryBuilder, \$filterQueryBuilder->addNewContactsRestrictions(\$queryBuilder, 8));
        Assert::assertSame('SELECT 1 FROM '.MAUTIC_TABLE_PREFIX.'leads l WHERE (NULL) AND (l.id NOT IN (SELECT par0.lead_id FROM '.MAUTIC_TABLE_PREFIX.'lead_lists_leads par0 WHERE par0.leadlist_id = 8))', \$queryBuilder->getDebugOutput());
    }

    /**
     * @return array<mixed>
     */
    public function dataAddNewContactsRestrictionsWithBatchLimiters(): iterable
    {
        yield [['minId' => 1,  'maxId' => 2], 'par0.lead_id BETWEEN 1 and 2'];
        yield [['minId' => 1], 'par0.lead_id >= 1'];
        yield [['maxId' => 2], 'par0.lead_id <= 2'];
        yield [['lead_id' => 1], 'par0.lead_id = 1'];
    }

    /**
     * @dataProvider dataAddNewContactsRestrictionsWithBatchLimiters
     *
     * @param array<string, mixed> \$batchLimiters
     */
    public function testAddNewContactsRestrictionsWithBatchLimiters(array \$batchLimiters, string \$expectedWhereClause): void
    {
        \$queryBuilder = new QueryBuilder(\$this->createConnection());
        \$queryBuilder->select('1');
        \$queryBuilder->from(MAUTIC_TABLE_PREFIX.'leads', 'l');
        \$queryBuilder->where('NULL');

        \$filterQueryBuilder = new ContactSegmentQueryBuilder(\$this->createMock(EntityManager::class), new RandomParameterName(), new EventDispatcher());

        Assert::assertSame(\$queryBuilder, \$filterQueryBuilder->addNewContactsRestrictions(\$queryBuilder, 8, \$batchLimiters));
        Assert::assertSame('SELECT 1 FROM '.MAUTIC_TABLE_PREFIX.'leads l WHERE (NULL) AND (l.id NOT IN (SELECT par0.lead_id FROM '.MAUTIC_TABLE_PREFIX.'lead_lists_leads par0 WHERE (par0.leadlist_id = 8) AND ('.\$expectedWhereClause.')))', \$queryBuilder->getDebugOutput());
    }

    private function createConnection(): Connection
    {
        return \$this->getMockedConnection();
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
        return "@bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/Query/ContactSegmentQueryBuilderTest.php");
    }
}
