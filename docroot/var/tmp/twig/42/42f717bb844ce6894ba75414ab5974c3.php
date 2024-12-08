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

/* @bundles/ReportBundle/Config/services.php */
class __TwigTemplate_c75ba157e98660988f11d38b54fc0f86 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\MauticCoreExtension;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Generator',
        'Builder/MauticReportBuilder.php',
        'Form/DataTransformer/ReportFilterDataTransformer.php',
        'Scheduler/Entity',
        'Scheduler/Option',
    ];

    \$services->load('Mautic\\\\ReportBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\ReportBundle\\\\Entity\\\\', '../Entity/*Repository.php');

    \$services->alias('mautic.report.model.report', Mautic\\ReportBundle\\Model\\ReportModel::class);
    \$services->alias('mautic.report.model.csv_exporter', Mautic\\ReportBundle\\Model\\CsvExporter::class);
    \$services->alias('mautic.report.model.excel_exporter', Mautic\\ReportBundle\\Model\\ExcelExporter::class);
    \$services->alias('mautic.report.model.report_exporter', Mautic\\ReportBundle\\Model\\ReportExporter::class);
    \$services->alias('mautic.report.model.schedule_model', Mautic\\ReportBundle\\Model\\ScheduleModel::class);
    \$services->alias('mautic.report.model.report_export_options', Mautic\\ReportBundle\\Model\\ReportExportOptions::class);
    \$services->alias('mautic.report.model.report_file_writer', Mautic\\ReportBundle\\Model\\ReportFileWriter::class);
    \$services->alias('mautic.report.model.export_handler', Mautic\\ReportBundle\\Model\\ExportHandler::class);
};
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ReportBundle/Config/services.php";
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
        return new Source("", "@bundles/ReportBundle/Config/services.php", "/app/docroot/app/bundles/ReportBundle/Config/services.php");
    }
}
