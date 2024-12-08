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

/* @bundles/ReportBundle/Model/ReportCleanup.php */
class __TwigTemplate_f8f5a6af9554b0889509ba139a84b89a extends Template
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

use Mautic\\ReportBundle\\Scheduler\\Model\\FileHandler;

class ReportCleanup
{
    public const KEEP_FILE_DAYS = 7;

    public function __construct(private FileHandler \$fileHandler)
    {
    }

    public function cleanup(int \$reportId): void
    {
        if (\$this->shouldBeDeleted(\$this->fileHandler->getPathToCompressedCsvFileForReportId(\$reportId))) {
            \$this->fileHandler->deleteCompressedCsvFileForReportId(\$reportId);
        }
    }

    /**
     * Deletes files older than KEEP_FILE_DAYS.
     */
    public function cleanupAll(): void
    {
        \$reportDirectory = \$this->fileHandler->getCompressedCsvFileForReportDir();

        if (!file_exists(\$reportDirectory)) {
            return;
        }

        \$files = array_diff(scandir(\$reportDirectory), ['.', '..']);

        foreach (\$files as \$file) {
            \$filePath = \$reportDirectory.'/'.\$file;
            if (is_dir(\$filePath)) {
                continue;
            }

            if (\$this->shouldBeDeleted(\$filePath)) {
                \$this->fileHandler->delete(\$filePath);
            }
        }
    }

    private function shouldBeDeleted(string \$filePath): bool
    {
        if (!file_exists(\$filePath)) {
            return false;
        }

        \$created = new \\DateTime(date('Y-m-d', filemtime(\$filePath)));
        \$now     = new \\DateTime();
        \$days    = \$created->diff(\$now)->days;

        if (\$days > self::KEEP_FILE_DAYS) {
            return true;
        }

        return false;
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
        return "@bundles/ReportBundle/Model/ReportCleanup.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ReportCleanup.php", "/app/docroot/app/bundles/ReportBundle/Model/ReportCleanup.php");
    }
}
