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

/* @bundles/IntegrationsBundle/Command/SyncCommand.php */
class __TwigTemplate_6d8e62fb9ee2aff200cb25760d229062 extends Template
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

namespace Mautic\\IntegrationsBundle\\Command;

use Mautic\\IntegrationsBundle\\Exception\\InvalidValueException;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncService\\SyncServiceInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

class SyncCommand extends Command
{
    public const NAME = 'mautic:integrations:sync';

    public function __construct(
        private SyncServiceInterface \$syncService
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(self::NAME)
            ->addArgument(
                'integration',
                InputOption::VALUE_REQUIRED,
                'Fetch objects from integration.',
                null
            )
            ->addOption(
                '--start-datetime',
                '-t',
                InputOption::VALUE_OPTIONAL,
                'Set start date/time for updated values in UTC timezone.'
            )
            ->addOption(
                '--end-datetime',
                null,
                InputOption::VALUE_OPTIONAL,
                'Set start date/time for updated values in UTC timezone.'
            )
            ->addOption(
                '--mautic-object-id',
                null,
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'Provide specific Mautic object IDs you want to sync. If some object IDs are provided then the start/end dates have no effect. Example: --mautic-object-id=contact:12 --mautic-object-id=company:13'
            )
            ->addOption(
                '--integration-object-id',
                null,
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'Provide specific integration object IDs you want to sync. If some object IDs are provided then the start/end dates have no effect. It depends on each integration if this is supported. Example: --integration-object-id=Account:12 --integration-object-id=Lead:13'
            )
            ->addOption(
                '--first-time-sync',
                '-f',
                InputOption::VALUE_NONE,
                'Notate if this is a first time sync where Mautic will sync existing objects instead of just tracked changes'
            )
            ->addOption(
                '--disable-push',
                null,
                InputOption::VALUE_NONE,
                'Notate if the sync should execute only pushing items from Mautic to the integration'
            )
            ->addOption(
                '--disable-pull',
                null,
                InputOption::VALUE_NONE,
                'Notate if the sync should execute only pulling items from integration to the Mautic'
            )
            ->addOption(
                '--option',
                null,
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY,
                'Provide option pass to InputOptions Example: --option=\"type:1\" --option=\"channel_id:1\"'
            )
            ->addOption(
                '--disable-activity-push',
                null,
                InputOption::VALUE_NONE,
                'Notate if the sync should disable the activities sync if the integration supports it'
            );

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$io = new SymfonyStyle(\$input, \$output);

        try {
            \$inputOptions = new InputOptionsDAO(array_merge(\$input->getArguments(), \$input->getOptions()));
        } catch (InvalidValueException \$e) {
            \$io->error(\$e->getMessage());

            return Command::FAILURE;
        }

        try {
            defined('MAUTIC_INTEGRATION_SYNC_IN_PROGRESS') or define('MAUTIC_INTEGRATION_SYNC_IN_PROGRESS', \$inputOptions->getIntegration());

            // Tell audit log to use integration name rather than \"System\"
            defined('MAUTIC_AUDITLOG_USER') or define('MAUTIC_AUDITLOG_USER', \$inputOptions->getIntegration());

            \$this->syncService->processIntegrationSync(\$inputOptions);
        } catch (\\Throwable \$e) {
            if ('dev' === \$input->getOption('env') || (defined('MAUTIC_ENV') && MAUTIC_ENV === 'dev')) {
                throw \$e;
            }

            \$io->error(\$e->getMessage());

            return Command::FAILURE;
        }

        \$io->success('Execution time: '.number_format(microtime(true) - \$_SERVER['REQUEST_TIME_FLOAT'], 3));

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Fetch objects from integration.';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Command/SyncCommand.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Command/SyncCommand.php", "/app/docroot/app/bundles/IntegrationsBundle/Command/SyncCommand.php");
    }
}
