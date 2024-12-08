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

/* @bundles/ReportBundle/Scheduler/Model/FileHandler.php */
class __TwigTemplate_9673cb1f5145aab91479ca11f1ebc368 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Model;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\CoreBundle\\Helper\\FileProperties;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Exception\\FileTooBigException;

class FileHandler
{
    private const REPORTS_DIR = 'csv_reports';

    public function __construct(
        private FilePathResolver \$filePathResolver,
        private FileProperties \$fileProperties,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @throws FileInvalidException
     * @throws FileTooBigException
     */
    public function fileCanBeAttached(string \$filePath): void
    {
        \$fileSize    = \$this->fileProperties->getFileSize(\$filePath);
        \$maxFileSize = (int) \$this->coreParametersHelper->get('report_export_max_filesize_in_bytes');

        if (\$fileSize > \$maxFileSize) {
            throw new FileTooBigException(\"File {\$filePath} has {\$fileSize} bytes which is more than the limit of {\$maxFileSize} bytes.\");
        }
    }

    /**
     * Zips the file and returns the path where the zip file was created.
     *
     * @throws FilePathException
     */
    public function zipIt(string \$originalFilePath): string
    {
        \$zipFilePath = str_replace('.csv', '.zip', \$originalFilePath);
        \$zipArchive  = new \\ZipArchive();

        if (true === \$zipArchive->open(\$zipFilePath, \\ZipArchive::OVERWRITE | \\ZipArchive::CREATE)) {
            \$zipArchive->addFile(\$originalFilePath, 'report.csv');
            \$zipArchive->close();

            return \$zipFilePath;
        }

        throw new FilePathException(\"Could not create zip archive at {\$zipFilePath}. {\$zipArchive->getStatusString()}\");
    }

    public function getPathToCompressedCsvFileForReport(Report \$report): string
    {
        return \$this->getPathToCompressedCsvFileForReportId(\$report->getId());
    }

    public function getPathToCompressedCsvFileForReportId(int \$reportId): string
    {
        return \$this->getCompressedCsvFileForReportDir().\"/report_{\$reportId}.zip\";
    }

    /**
     * @codeCoverageIgnore as it calls PHP function only.
     */
    public function compressedCsvFileForReportExists(Report \$report): bool
    {
        \$filePath = \$this->getPathToCompressedCsvFileForReport(\$report);

        return file_exists(\$filePath);
    }

    public function moveZipToPermanentLocation(Report \$report, string \$originalPath): void
    {
        \$compressedCsvPath = \$this->getPathToCompressedCsvFileForReport(\$report);

        \$this->filePathResolver->delete(\$compressedCsvPath);
        \$this->filePathResolver->createDirectory(dirname(\$compressedCsvPath));
        \$this->filePathResolver->move(\$originalPath, \$compressedCsvPath);
    }

    public function delete(string \$filePath): void
    {
        \$this->filePathResolver->delete(\$filePath);
    }

    public function deleteCompressedCsvFileForReportId(int \$reportId): void
    {
        \$filePath = \$this->getPathToCompressedCsvFileForReportId(\$reportId);
        if (file_exists(\$filePath)) {
            \$this->delete(\$filePath);
        }
    }

    public function getCompressedCsvFileForReportDir(): string
    {
        \$reportDir = \$this->coreParametersHelper->get('report_temp_dir');

        return \$reportDir.'/'.self::REPORTS_DIR;
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
        return "@bundles/ReportBundle/Scheduler/Model/FileHandler.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Model/FileHandler.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Model/FileHandler.php");
    }
}
