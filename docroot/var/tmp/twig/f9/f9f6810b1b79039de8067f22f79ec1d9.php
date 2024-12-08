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

/* @bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php */
class __TwigTemplate_50c238af061ea92e9059df4e4c0f4841 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Entity;

use Doctrine\\ORM\\AbstractQuery;
use Doctrine\\ORM\\QueryBuilder;
use Mautic\\CoreBundle\\Test\\Doctrine\\RepositoryConfiguratorTrait;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;
use PHPUnit\\Framework\\MockObject\\MockObject;

class SchedulerRepositoryTest extends \\PHPUnit\\Framework\\TestCase
{
    use RepositoryConfiguratorTrait;

    public function testGetScheduledReportsForExportNoID(): void
    {
        \$schedulerRepository = \$this->configureRepository(Scheduler::class);

        \$this->entityManager->expects(\$this->once())
            ->method('createQueryBuilder')
            ->with()
            ->willReturn(\$this->getQueryBuilderMock());

        \$result = \$schedulerRepository->getScheduledReportsForExport(new ExportOption(null));

        \$this->assertSame([], \$result);
    }

    /**
     * @return QueryBuilder|MockObject
     */
    private function getQueryBuilderMock()
    {
        \$queryBuilderMock = \$this->getMockBuilder(QueryBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$queryBuilderMock->expects(\$this->once())
            ->method('select')
            ->with('scheduler')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('from')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('addSelect')
            ->with('report')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('leftJoin')
            ->with('scheduler.report', 'report')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('andWhere')
            ->with('scheduler.scheduleDate <= :scheduleDate')
            ->willReturn(\$queryBuilderMock);

        \$queryBuilderMock->expects(\$this->once())
            ->method('setParameter')
            ->with('scheduleDate', \$this->callback(function (\$date) {
                \$today = new \\DateTime();
                \$today->modify('+1 seconds'); // make sure our date is bigger

                return \$date instanceof \\DateTime && \$date < \$today;
            }))
            ->willReturn(\$queryBuilderMock);

        \$abstractQueryMock = \$this->getMockBuilder(AbstractQuery::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$queryBuilderMock->expects(\$this->once())
            ->method('getQuery')
            ->with()
            ->willReturn(\$abstractQueryMock);

        \$abstractQueryMock->expects(\$this->once())
            ->method('getResult')
            ->with()
            ->willReturn([]);

        return \$queryBuilderMock;
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
        return "@bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Entity/SchedulerRepositoryTest.php");
    }
}
