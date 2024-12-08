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

/* @bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php */
class __TwigTemplate_8df6faa97b70d5500560a9d18831c6ed extends Template
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

namespace Mautic\\ChannelBundle\\Command;

use Mautic\\ChannelBundle\\Model\\MessageQueueModel;
use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ProcessMarketingMessagesQueueCommand extends ModeratedCommand
{
    public function __construct(
        private TranslatorInterface \$translator,
        private MessageQueueModel \$messageQueueModel,
        PathsHelper \$pathsHelper,
        CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct(\$pathsHelper, \$coreParametersHelper);
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:messages:send')
            ->setAliases(
                [
                    'mautic:campaigns:messagequeue',
                    'mautic:campaigns:messages',
                ]
            )
            ->addOption(
                '--channel',
                '-c',
                InputOption::VALUE_OPTIONAL,
                'Channel to use for sending messages i.e. email, sms.',
                null
            )
            ->addOption('--channel-id', '-i', InputOption::VALUE_REQUIRED, 'The ID of the message i.e. email ID, sms ID.')
            ->addOption('--message-id', '-m', InputOption::VALUE_REQUIRED, 'ID of a specific queued message');

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$processed  = 0;
        \$channel    = \$input->getOption('channel');
        \$channelId  = \$input->getOption('channel-id');
        \$messageId  = \$input->getOption('message-id');
        \$key        = \$channel.\$channelId.\$messageId;

        if (!\$this->checkRunStatus(\$input, \$output, \$key)) {
            return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
        }

        \$output->writeln('<info>'.\$this->translator->trans('mautic.campaign.command.process.messages').'</info>');

        if (\$messageId) {
            if (\$message = \$this->messageQueueModel->getEntity(\$messageId)) {
                \$processed = intval(\$this->messageQueueModel->processMessageQueue(\$message));
            }
        } else {
            \$processed = intval(\$this->messageQueueModel->sendMessages(\$channel, \$channelId));
        }

        \$output->writeln('<comment>'.\$this->translator->trans('mautic.campaign.command.messages.sent', ['%events%' => \$processed]).'</comment>'.\"\\n\");

        \$this->completeRun();

        return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Process sending of messages queue.';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php";
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
        return new Source("", "@bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php", "/app/docroot/app/bundles/ChannelBundle/Command/ProcessMarketingMessagesQueueCommand.php");
    }
}
