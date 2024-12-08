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

/* @bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php */
class __TwigTemplate_a0cd2d633e31bf59a882fce537e92bd9 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Scheduler\\Date\\DateBuilder;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NoScheduleException;

class SchedulerPlanner
{
    /**
     * @var SchedulerRepository
     */
    private \\Doctrine\\ORM\\EntityRepository \$schedulerRepository;

    public function __construct(
        private DateBuilder \$dateBuilder,
        private EntityManager \$entityManager
    ) {
        \$this->schedulerRepository = \$entityManager->getRepository(Scheduler::class);
    }

    public function computeScheduler(Report \$report): void
    {
        \$this->removeSchedulerOfReport(\$report);
        \$this->planScheduler(\$report);
    }

    private function planScheduler(Report \$report): void
    {
        try {
            \$date = \$this->dateBuilder->getNextEvent(\$report);
        } catch (NoScheduleException) {
            return;
        }

        \$scheduler = new Scheduler(\$report, \$date);
        \$this->entityManager->persist(\$scheduler);
        \$this->entityManager->flush();
    }

    private function removeSchedulerOfReport(Report \$report): void
    {
        \$scheduler = \$this->schedulerRepository->getSchedulerByReport(\$report);
        if (!\$scheduler) {
            return;
        }

        \$this->entityManager->remove(\$scheduler);
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
        return "@bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Model/SchedulerPlanner.php");
    }
}
