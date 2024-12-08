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

/* @bundles/ReportBundle/Tests/Model/ScheduleModelTest.php */
class __TwigTemplate_56268f7019fd2b3866a64265d1c5cc48 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Model\\ScheduleModel;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;
use PHPUnit\\Framework\\MockObject\\MockObject;

class ScheduleModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|SchedulerRepository
     */
    private MockObject \$schedulerRepository;

    /**
     * @var MockObject|EntityManager
     */
    private MockObject \$entityManager;

    /**
     * @var MockObject|SchedulerPlanner
     */
    private MockObject \$schedulerPlanner;

    /**
     * @var MockObject|ExportOption
     */
    private MockObject \$exportOption;

    private ScheduleModel \$scheduleModel;

    protected function setUp(): void
    {
        \$this->schedulerRepository = \$this->createMock(SchedulerRepository::class);
        \$this->entityManager       = \$this->createMock(EntityManager::class);
        \$this->schedulerPlanner    = \$this->createMock(SchedulerPlanner::class);
        \$this->exportOption        = \$this->createMock(ExportOption::class);

        \$this->entityManager->expects(\$this->once())
            ->method('getRepository')
            ->with(Scheduler::class)
            ->willReturn(\$this->schedulerRepository);

        \$this->scheduleModel = new ScheduleModel(\$this->entityManager, \$this->schedulerPlanner);
    }

    public function testGetScheduledReportsForExport(): void
    {
        \$this->schedulerRepository->expects(\$this->once())
            ->method('getScheduledReportsForExport')
            ->with(\$this->exportOption);

        \$this->scheduleModel->getScheduledReportsForExport(\$this->exportOption);
    }

    public function testReportWasScheduled(): void
    {
        \$report = new Report();

        \$this->schedulerPlanner->expects(\$this->once())
            ->method('computeScheduler')
            ->with(\$report);

        \$this->scheduleModel->reportWasScheduled(\$report);
    }

    public function testTurnOffScheduler(): void
    {
        \$report = new Report();

        \$report->setIsScheduled(true);

        \$this->entityManager->expects(\$this->once())
            ->method('persist')
            ->with(\$report);

        \$this->entityManager->expects(\$this->once())
            ->method('flush');

        \$this->scheduleModel->turnOffScheduler(\$report);

        \$this->assertFalse(\$report->isScheduled());
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
        return "@bundles/ReportBundle/Tests/Model/ScheduleModelTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ScheduleModelTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Model/ScheduleModelTest.php");
    }
}
