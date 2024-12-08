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

/* @bundles/CampaignBundle/Tests/Entity/CampaignRepositoryTest.php */
class __TwigTemplate_1bd50fbab346675f0d667650ae749bd3 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Entity;

use Doctrine\\ORM\\AbstractQuery;
use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\QueryBuilder;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\CampaignRepository;
use Mautic\\CoreBundle\\Test\\Doctrine\\RepositoryConfiguratorTrait;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class CampaignRepositoryTest extends TestCase
{
    use RepositoryConfiguratorTrait;

    /**
     * @var MockObject&QueryBuilder
     */
    private MockObject \$queryBuilder;

    private CampaignRepository \$repository;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->queryBuilder = \$this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['select', 'from', 'where', 'setParameter', 'andWhere', 'getQuery', 'getRootAliases'])
            ->getMock();

        \$this->repository = \$this->configureRepository(Campaign::class);

        \$this->entityManager->method('createQueryBuilder')->willReturn(\$this->queryBuilder);
    }

    public function testFetchEmailIdsById(): void
    {
        \$id = 2;

        \$queryResult = [
            1 => ['channelId' => 1],
            2 => ['channelId' => 2],
        ];

        \$expectedResult = [1, 2];

        \$this->entityManager
            ->method('createQueryBuilder')
            ->willReturn(\$this->queryBuilder);

        \$this->queryBuilder->expects(self::once())
            ->method('select')
            ->with('e.channelId')
            ->willReturn(\$this->queryBuilder);

        \$this->queryBuilder->expects(self::once())
            ->method('from')
            ->with(Campaign::class, \$this->repository->getTableAlias(), \$this->repository->getTableAlias().'.id')
            ->willReturn(\$this->queryBuilder);

        \$this->queryBuilder->expects(self::once())
            ->method('where')
            ->with(\$this->repository->getTableAlias().'.id = :id')
            ->willReturn(\$this->queryBuilder);

        \$this->queryBuilder->expects(self::once())
            ->method('setParameter')
            ->with('id', \$id)
            ->willReturn(\$this->queryBuilder);

        \$this->queryBuilder->method('getRootAliases')
            ->willReturn(['e']);

        \$this->queryBuilder->expects(self::once())
            ->method('andWhere')
            ->with('e.channelId IS NOT NULL')
            ->willReturn(\$this->queryBuilder);

        \$query = \$this->getMockBuilder(AbstractQuery::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['setHydrationMode', 'getResult'])
            ->getMockForAbstractClass();

        \$query->expects(self::once())
            ->method('setHydrationMode')
            ->with(Query::HYDRATE_ARRAY)
            ->willReturn(\$query);

        \$this->queryBuilder->expects(self::once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$query->expects(self::once())
            ->method('getResult')
            ->willReturn(\$queryResult);

        \$result = \$this->repository->fetchEmailIdsById(\$id);

        \$this->assertEquals(\$expectedResult, \$result);
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
        return "@bundles/CampaignBundle/Tests/Entity/CampaignRepositoryTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Entity/CampaignRepositoryTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Entity/CampaignRepositoryTest.php");
    }
}
