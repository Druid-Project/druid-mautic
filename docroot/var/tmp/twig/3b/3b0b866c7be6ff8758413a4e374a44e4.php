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

/* @bundles/ReportBundle/Model/ScheduleModel.php */
class __TwigTemplate_b45587693957b73b33edf05752c75a4c extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

class ScheduleModel
{
    /**
     * @var SchedulerRepository
     */
    private \\Doctrine\\ORM\\EntityRepository \$schedulerRepository;

    public function __construct(
        private EntityManager \$entityManager,
        private SchedulerPlanner \$schedulerPlanner
    ) {
        \$this->schedulerRepository = \$entityManager->getRepository(Scheduler::class);
    }

    /**
     * @return Scheduler[]
     */
    public function getScheduledReportsForExport(ExportOption \$exportOption)
    {
        return \$this->schedulerRepository->getScheduledReportsForExport(\$exportOption);
    }

    public function reportWasScheduled(Report \$report): void
    {
        \$this->schedulerPlanner->computeScheduler(\$report);
    }

    public function turnOffScheduler(Report \$report): void
    {
        \$report->setIsScheduled(false);
        \$this->entityManager->persist(\$report);
        \$this->entityManager->flush();
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
        return "@bundles/ReportBundle/Model/ScheduleModel.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ScheduleModel.php", "/app/docroot/app/bundles/ReportBundle/Model/ScheduleModel.php");
    }
}
