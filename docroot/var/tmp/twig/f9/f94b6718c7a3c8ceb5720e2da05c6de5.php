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

/* @bundles/LeadBundle/Command/DeduplicateCommand.php */
class __TwigTemplate_b2a467c941da0bb9e2cd51fe47d48ce2 extends Template
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

namespace Mautic\\LeadBundle\\Command;

use Mautic\\CoreBundle\\Service\\ProcessQueue;
use Mautic\\LeadBundle\\Deduplicate\\ContactDeduper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface;
use Symfony\\Component\\Process\\Process;
use Symfony\\Component\\Stopwatch\\Stopwatch;

class DeduplicateCommand extends Command
{
    public const NAME = 'mautic:contacts:deduplicate';

    public function __construct(
        private ContactDeduper \$contactDeduper,
        private ParameterBagInterface \$params
    ) {
        parent::__construct();
    }

    public function configure(): void
    {
        parent::configure();

        \$this->setName(self::NAME)
            ->addOption(
                '--newer-into-older',
                null,
                InputOption::VALUE_NONE,
                'By default, this command will merge older contacts and activity into the newer. Use this flag to reverse that behavior.'
            )
            ->addOption(
                '--batch',
                null,
                InputOption::VALUE_REQUIRED,
                'How many contact duplicates to process at once. Defaults to 100.',
                100
            )
            ->addOption(
                '--processes',
                null,
                InputOption::VALUE_REQUIRED,
                'The commands can run in multiple PHP processes. This option defines how many processes to run. Defaults to 1.',
                1
            )
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command will dedpulicate contacts based on unique identifier values. 

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$newerIntoOlder  = (bool) \$input->getOption('newer-into-older');
        \$batch           = (int) \$input->getOption('batch');
        \$processes       = (int) \$input->getOption('processes');
        \$uniqueFields    = \$this->contactDeduper->getUniqueFields('lead');
        \$duplicateCount  = \$this->contactDeduper->countDuplicatedContacts(array_keys(\$uniqueFields));
        \$stopwatch       = new Stopwatch();

        if (!\$duplicateCount) {
            \$output->writeln('<error>No contacts to deduplicate.</error>');

            return Command::FAILURE;
        }

        \$stopwatch->start('deduplicate');

        \$output->writeln('Deduplicating contacts based on unique identifiers: '.implode(', ', \$uniqueFields));
        \$output->writeln(\"{\$duplicateCount} contacts found to deduplicate\");

        \$processQueue = new ProcessQueue(\$processes);
        \$processCount = (int) ceil(\$duplicateCount / \$batch);

        \$output->writeln('');
        \$output->writeln(\"Finding duplicates and creating processes for deduplication. {\$processCount} processes will be queued.\");

        \$contactIds      = \$this->contactDeduper->getDuplicateContactIds(array_keys(\$uniqueFields));
        \$contactIdChunks = array_chunk(\$contactIds, \$batch);
        foreach (\$contactIdChunks as \$contactIdBatch) {
            \$command = [
                \$this->params->get('kernel.project_dir').'/bin/console',
                DeduplicateIdsCommand::NAME,
                '--contact-ids',
                implode(',', \$contactIdBatch),
                '-e',
                MAUTIC_ENV,
            ];

            if (\$newerIntoOlder) {
                \$command[] = '--newer-into-older';
            }

            \$envParams = [
                'db_table_prefix'                     => MAUTIC_TABLE_PREFIX,
                'contact_unique_identifiers_operator' => \$this->params->get('mautic.contact_unique_identifiers_operator'),
            ];

            \$processQueue->enqueue(new Process(\$command, null, ['MAUTIC_CONFIG_PARAMETERS' => json_encode(\$envParams)]));
        }

        \$output->writeln('');
        \$output->writeln(\"Starting to execute the {\$processCount} processes for deduplication. {\$processes} processes will be executed in parallel.\");

        \$progressBar = new ProgressBar(\$output, \$processCount);
        \$progressBar->setFormat('debug');
        \$progressBar->start();

        \$processQueue->refresh();

        while (\$processQueue->isProcessing()) {
            usleep(100);
            \$processQueue->refresh();
            \$progressBar->setProgress(\$processQueue->getProcessedCount());
        }

        \$output->writeln('');
        \$output->writeln('');
        \$output->writeln('All processes have finished. The output of each process is below.');

        foreach (\$processQueue->getProcessed() as \$process) {
            \$output->writeln(\"<comment>{\$process->getCommandLine()}</comment>\");
            if (0 === \$process->getExitCode()) {
                \$output->writeln(\"<info>{\$process->getOutput()}</info>\");
            } else {
                \$output->writeln(\"<error>{\$process->getErrorOutput()}</error>\");
            }
        }

        \$progressBar->finish();

        \$event = \$stopwatch->stop('deduplicate');
        \$output->writeln('');
        \$output->writeln(\"Duration: {\$event->getDuration()} ms, Memory: {\$event->getMemory()} bytes\");

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Merge contacts based on same unique identifiers';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Command/DeduplicateCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Command/DeduplicateCommand.php", "/app/docroot/app/bundles/LeadBundle/Command/DeduplicateCommand.php");
    }
}
