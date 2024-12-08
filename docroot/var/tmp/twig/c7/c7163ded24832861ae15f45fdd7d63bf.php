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

/* @bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php */
class __TwigTemplate_88614f76a3284c38b08fe4126761f868 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Command;

use Mautic\\ReportBundle\\Exception\\FileIOException;
use Mautic\\ReportBundle\\Model\\ReportCleanup;
use Mautic\\ReportBundle\\Model\\ReportExporter;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ExportSchedulerCommand extends Command
{
    public function __construct(
        private ReportExporter \$reportExporter,
        private ReportCleanup \$reportCleanup,
        private TranslatorInterface \$translator
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:reports:scheduler')
            ->addOption('--report', 'report', InputOption::VALUE_OPTIONAL, 'ID of report. Process all reports if not set.');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$report = \$input->getOption('report');

        try {
            \$exportOption = new ExportOption(\$report);
        } catch (\\InvalidArgumentException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.report.schedule.command.invalid_parameter').'</error>');

            return Command::SUCCESS;
        }

        try {
            if (\$exportOption->getReportId()) {
                \$this->reportCleanup->cleanup(\$exportOption->getReportId());
            } else {
                \$this->reportCleanup->cleanupAll();
            }

            \$this->reportExporter->processExport(\$exportOption);

            \$output->writeln('<info>'.\$this->translator->trans('mautic.report.schedule.command.finished').'</info>');
        } catch (FileIOException \$e) {
            \$output->writeln('<error>'.\$e->getMessage().'</error>');
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Processes scheduler for report\\'s export';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Command/ExportSchedulerCommand.php");
    }
}
