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

/* @bundles/ReportBundle/Model/ReportFileWriter.php */
class __TwigTemplate_c825b2198beba6ca10509183d944429e extends Template
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

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Exception\\FileIOException;

class ReportFileWriter
{
    public function __construct(
        private CsvExporter \$csvExporter,
        private ExportHandler \$exportHandler
    ) {
    }

    /**
     * @throws FileIOException
     */
    public function writeReportData(Scheduler \$scheduler, ReportDataResult \$reportDataResult, ReportExportOptions \$reportExportOptions): void
    {
        \$fileName = \$this->getFileName(\$scheduler);
        \$handler  = \$this->exportHandler->getHandler(\$fileName);
        \$this->csvExporter->export(\$reportDataResult, \$handler, \$reportExportOptions->getPage());
        \$this->exportHandler->closeHandler(\$handler);
    }

    public function clear(Scheduler \$scheduler): void
    {
        \$fileName = \$this->getFileName(\$scheduler);
        \$this->exportHandler->removeFile(\$fileName);
    }

    /**
     * @throws FileIOException
     */
    public function getFilePath(Scheduler \$scheduler): string
    {
        \$fileName = \$this->getFileName(\$scheduler);

        return \$this->exportHandler->getPath(\$fileName);
    }

    private function getFileName(Scheduler \$scheduler): string
    {
        \$date       = \$scheduler->getScheduleDate();
        \$dateString = \$date->format('Y-m-d');
        \$reportName = \$scheduler->getReport()->getName();

        return \$dateString.'_'.InputHelper::alphanum(\$reportName, false, '-');
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
        return "@bundles/ReportBundle/Model/ReportFileWriter.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ReportFileWriter.php", "/app/docroot/app/bundles/ReportBundle/Model/ReportFileWriter.php");
    }
}
