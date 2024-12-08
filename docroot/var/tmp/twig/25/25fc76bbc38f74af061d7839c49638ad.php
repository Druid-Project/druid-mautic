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

/* @bundles/ReportBundle/Adapter/ReportDataAdapter.php */
class __TwigTemplate_d81c6ffdf11bd888dab814bf97c0760e extends Template
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

namespace Mautic\\ReportBundle\\Adapter;

use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Model\\ReportExportOptions;
use Mautic\\ReportBundle\\Model\\ReportModel;

class ReportDataAdapter
{
    public function __construct(
        private ReportModel \$reportModel
    ) {
    }

    public function getReportData(Report \$report, ReportExportOptions \$reportExportOptions): ReportDataResult
    {
        \$options                    = [];
        \$options['paginate']        = true;
        \$options['limit']           = \$reportExportOptions->getBatchSize();
        \$options['ignoreGraphData'] = true;
        \$options['page']            = \$reportExportOptions->getPage();
        \$options['dateTo']          = \$reportExportOptions->getDateTo();
        \$options['dateFrom']        = \$reportExportOptions->getDateFrom();

        \$data = \$this->reportModel->getReportData(\$report, null, \$options);

        return new ReportDataResult(\$data);
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
        return "@bundles/ReportBundle/Adapter/ReportDataAdapter.php";
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
        return new Source("", "@bundles/ReportBundle/Adapter/ReportDataAdapter.php", "/app/docroot/app/bundles/ReportBundle/Adapter/ReportDataAdapter.php");
    }
}
