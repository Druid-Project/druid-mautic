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

/* @bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php */
class __TwigTemplate_fc92e1f538cf8fc90d01394dd81fa0d0 extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Model\\CsvExporter;
use Mautic\\ReportBundle\\Model\\ExportHandler;
use Mautic\\ReportBundle\\Model\\ReportExportOptions;
use Mautic\\ReportBundle\\Model\\ReportFileWriter;
use Mautic\\ReportBundle\\Tests\\Fixtures;

class ReportFileWriterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWriteReportData(): void
    {
        \$csvExporter = \$this->getMockBuilder(CsvExporter::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$exportHandler = \$this->getMockBuilder(ExportHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$handler = 'Handler';
        \$report  = new Report();

        \$report->setName('Report A');

        \$scheduler = new Scheduler(\$report, new \\DateTime());

        \$reportDataResult = new ReportDataResult(Fixtures::getValidReportResult());

        \$coreParametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_batch_size')
            ->willReturn(3);

        \$reportExportOptions = new ReportExportOptions(\$coreParametersHelper);

        \$exportHandler->expects(\$this->once())
            ->method('getHandler')
            ->willReturn(\$handler);

        \$csvExporter->expects(\$this->once())
            ->method('export')
            ->with(\$reportDataResult, \$handler, 1);

        \$exportHandler->expects(\$this->once())
            ->method('closeHandler');

        \$reportFileWriter = new ReportFileWriter(\$csvExporter, \$exportHandler);

        \$reportFileWriter->writeReportData(\$scheduler, \$reportDataResult, \$reportExportOptions);
    }

    public function testClear(): void
    {
        \$csvExporter = \$this->getMockBuilder(CsvExporter::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$exportHandler = \$this->getMockBuilder(ExportHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$report    = new Report();
        \$scheduler = new Scheduler(\$report, new \\DateTime());

        \$report->setName('Report A');

        \$exportHandler->expects(\$this->once())
            ->method('removeFile');

        \$reportFileWriter = new ReportFileWriter(\$csvExporter, \$exportHandler);

        \$reportFileWriter->clear(\$scheduler);
    }

    public function testGetFilePath(): void
    {
        \$csvExporter = \$this->getMockBuilder(CsvExporter::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$exportHandler = \$this->getMockBuilder(ExportHandler::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$report    = new Report();
        \$scheduler = new Scheduler(\$report, new \\DateTime());

        \$report->setName('Report A');

        \$exportHandler->expects(\$this->once())
            ->method('getPath');

        \$reportFileWriter = new ReportFileWriter(\$csvExporter, \$exportHandler);

        \$reportFileWriter->getFilePath(\$scheduler);
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
        return "@bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Model/ReportFileWriterTest.php");
    }
}
