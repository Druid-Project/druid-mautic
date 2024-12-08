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

/* @bundles/ReportBundle/Entity/SchedulerRepository.php */
class __TwigTemplate_eae3f9db2fe2d4d869b086a2d45b563f extends Template
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

namespace Mautic\\ReportBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

/**
 * @extends CommonRepository<Scheduler>
 */
class SchedulerRepository extends CommonRepository
{
    /**
     * @return Scheduler|null
     */
    public function getSchedulerByReport(Report \$report)
    {
        return \$this->findOneBy(['report' => \$report]);
    }

    /**
     * @return array|Scheduler[]
     */
    public function getScheduledReportsForExport(ExportOption \$exportOption)
    {
        \$qb = \$this->createQueryBuilder('scheduler');
        \$qb->addSelect('report')
            ->leftJoin('scheduler.report', 'report');

        \$date = new \\DateTime();
        \$qb->andWhere('scheduler.scheduleDate <= :scheduleDate')
            ->setParameter('scheduleDate', \$date);

        if (\$exportOption->getReportId()) {
            \$qb->andWhere('report.id = :id')
                ->setParameter('id', \$exportOption->getReportId());
        }

        return \$qb->getQuery()->getResult();
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
        return "@bundles/ReportBundle/Entity/SchedulerRepository.php";
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
        return new Source("", "@bundles/ReportBundle/Entity/SchedulerRepository.php", "/app/docroot/app/bundles/ReportBundle/Entity/SchedulerRepository.php");
    }
}
