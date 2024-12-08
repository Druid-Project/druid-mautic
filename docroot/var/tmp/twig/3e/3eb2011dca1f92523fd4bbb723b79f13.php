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

/* @bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php */
class __TwigTemplate_5c75a1d157bcdafa383521af6c77828c extends Template
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

namespace Mautic\\WebhookBundle\\Command;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to process queued webhook payloads.
 */
class ProcessWebhookQueuesCommand extends Command
{
    public const COMMAND_NAME = 'mautic:webhooks:process';

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private WebhookModel \$webhookModel
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName(self::COMMAND_NAME)
            ->addOption(
                '--webhook-id',
                '-i',
                InputOption::VALUE_OPTIONAL,
                'Process payload for a specific webhook.  If not specified, all webhooks will be processed.',
                null
            )
            ->addOption(
                '--min-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'Sets the minimum webhook queue ID to process (so called range mode).',
                null
            )
            ->addOption(
                '--max-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'Sets the maximum webhook queue ID to process (so called range mode).',
                null
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        // check to make sure we are in queue mode
        if (\$this->coreParametersHelper->get('queue_mode') != \$this->webhookModel::COMMAND_PROCESS) {
            \$output->writeLn('Webhook Bundle is in immediate process mode. To use the command function change to command mode.');

            return Command::SUCCESS;
        }

        \$id    = \$input->getOption('webhook-id');
        \$minId = (int) \$input->getOption('min-id');
        \$maxId = (int) \$input->getOption('max-id');

        if (\$id) {
            \$webhook        = \$this->webhookModel->getEntity(\$id);
            \$webhooks       = (null !== \$webhook && \$webhook->isPublished()) ? [\$id => \$webhook] : [];
            \$queueRangeMode = \$minId && \$maxId;
        } else {
            // make sure we only get published webhook entities
            \$webhooks = \$this->webhookModel->getEntities(
                [
                    'filter' => [
                        'force' => [
                            [
                                'column' => 'e.isPublished',
                                'expr'   => 'eq',
                                'value'  => 1,
                            ],
                        ],
                    ],
                ]
            );
        }

        if (!count(\$webhooks)) {
            \$output->writeln('<error>No published webhooks found. Try again later.</error>');

            return Command::FAILURE;
        }

        \$output->writeLn('<info>Processing Webhooks</info>');

        try {
            if (\$queueRangeMode) {
                \$webhookLimit = \$this->webhookModel->getWebhookLimit();

                if (1 > \$webhookLimit) {
                    throw new \\InvalidArgumentException('`webhook limit` parameter must be greater than zero.');
                }

                for (; \$minId <= \$maxId; \$minId += \$webhookLimit) {
                    \$this->webhookModel
                        ->setMinQueueId(\$minId)
                        ->setMaxQueueId(min(\$minId + \$webhookLimit - 1, \$maxId));

                    \$this->webhookModel->processWebhook(current(\$webhooks));
                }
            } else {
                \$this->webhookModel->processWebhooks(\$webhooks);
            }
        } catch (\\Exception \$e) {
            \$output->writeLn('<error>'.\$e->getMessage().'</error>');
            \$output->writeLn('<error>'.\$e->getTraceAsString().'</error>');

            return Command::FAILURE;
        }

        \$output->writeLn('<info>Webhook Processing Complete</info>');

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Process queued webhook payloads';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php";
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
        return new Source("", "@bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php", "/app/docroot/app/bundles/WebhookBundle/Command/ProcessWebhookQueuesCommand.php");
    }
}
