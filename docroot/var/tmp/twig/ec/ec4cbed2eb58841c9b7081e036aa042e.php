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

/* @bundles/ReportBundle/Tests/Model/ReportCleanupTest.php */
class __TwigTemplate_58ec79e294ddae8d4fb7960082d8d2ae extends Template
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

use Mautic\\ReportBundle\\Model\\ReportCleanup;
use Mautic\\ReportBundle\\Scheduler\\Model\\FileHandler;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class ReportCleanupTest extends TestCase
{
    private MockObject|FileHandler \$fileHandler;

    private ReportCleanup \$cleanup;

    protected function setUp(): void
    {
        \$this->fileHandler = \$this->createMock(FileHandler::class);
        \$this->cleanup     =  new ReportCleanup(\$this->fileHandler);
    }

    public function testCleanupAll(): void
    {
        \$reportIds  = [11, 13, 33];
        \$reportsDir = sys_get_temp_dir().'/csv_reports';

        if (false === file_exists(\$reportsDir)) {
            mkdir(\$reportsDir);
        }

        \$filePaths = [];

        foreach (\$reportIds as \$reportId) {
            \$filePath     = \$this->getFilePath(\$reportsDir, \$reportId);
            \$filePaths[]  = \$filePath;

            \$days = ReportCleanup::KEEP_FILE_DAYS + 1;

            // this report shouldn't be deleted
            if (33 === \$reportId) {
                \$days = ReportCleanup::KEEP_FILE_DAYS - 1;
            }

            \$modifiedDate = time() - (86400 * \$days);
            \$this->createTmpFile(\$filePath, \$modifiedDate);
        }

        \$this->fileHandler->expects(\$this->once())
            ->method('getCompressedCsvFileForReportDir')
            ->willReturn(\$reportsDir);

        \$this->fileHandler->expects(\$this->exactly(2))
            ->method('delete')
            ->willReturnOnConsecutiveCalls(\$filePaths[0], \$filePaths[1]);

        \$this->cleanup->cleanupAll();

        foreach (\$filePaths as \$filePath) {
            unlink(\$filePath);
        }

        rmdir(\$reportsDir);
    }

    public function testCleanup(): void
    {
        \$reportId   = 9;
        \$reportsDir = sys_get_temp_dir().'/csv_reports';

        if (false === file_exists(\$reportsDir)) {
            mkdir(\$reportsDir);
        }

        \$filePath     = \$this->getFilePath(\$reportsDir, \$reportId);
        \$days         = ReportCleanup::KEEP_FILE_DAYS + 1;
        \$modifiedDate = time() - (86400 * \$days);

        \$this->createTmpFile(\$filePath, \$modifiedDate);

        \$this->fileHandler->expects(\$this->once())
            ->method('deleteCompressedCsvFileForReportId')
            ->with(\$reportId);

        \$this->fileHandler->expects(\$this->once())
            ->method('getPathToCompressedCsvFileForReportId')
            ->with(\$reportId)
            ->willReturn(\$filePath);

        \$this->cleanup->cleanup(\$reportId);

        unlink(\$filePath);
        rmdir(\$reportsDir);
    }

    private function createTmpFile(string \$filePath, ?int \$modifiedDate = null, string \$content = ''): string
    {
        file_put_contents(\$filePath, \$content);
        if (null !== \$modifiedDate) {
            touch(\$filePath, \$modifiedDate);
        }

        return \$filePath;
    }

    private function getFilePath(string \$reportsDir, int \$reportId): string
    {
        return \$reportsDir.'/'.\"report_{\$reportId}.zip\";
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
        return "@bundles/ReportBundle/Tests/Model/ReportCleanupTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ReportCleanupTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Model/ReportCleanupTest.php");
    }
}
