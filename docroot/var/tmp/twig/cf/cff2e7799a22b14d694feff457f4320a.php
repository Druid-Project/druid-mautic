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

/* @bundles/LeadBundle/Command/ContactScheduledExportCommand.php */
class __TwigTemplate_1bc51140cab929ee5cec2331a82947ee extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Mautic\\LeadBundle\\Event\\ContactExportSchedulerEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Model\\ContactExportSchedulerModel;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ContactScheduledExportCommand extends Command
{
    private const PICK_SCHEDULED_EXPORTS_LIMIT = 10;

    public const COMMAND_NAME                  = 'mautic:contacts:scheduled_export';

    public function __construct(
        private ContactExportSchedulerModel \$contactExportSchedulerModel,
        private EventDispatcherInterface \$eventDispatcher,
        private FormatterHelper \$formatterHelper
    ) {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this
            ->setName(self::COMMAND_NAME)
            ->addOption(
                '--ids',
                null,
                InputOption::VALUE_REQUIRED,
                'Comma separated contact_export_scheduler ids.'
            );

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$ids = \$this->formatterHelper->simpleCsvToArray(\$input->getOption('ids'), 'int');

        if (\$ids) {
            \$contactExportSchedulers = \$this->contactExportSchedulerModel->getRepository()->findBy(['id' => \$ids]);
        } else {
            \$contactExportSchedulers = \$this->contactExportSchedulerModel->getRepository()
                ->findBy([], [], self::PICK_SCHEDULED_EXPORTS_LIMIT);
        }

        \$count = 0;

        foreach (\$contactExportSchedulers as \$contactExportScheduler) {
            \$contactExportSchedulerEvent = new ContactExportSchedulerEvent(\$contactExportScheduler);
            \$this->eventDispatcher->dispatch(\$contactExportSchedulerEvent, LeadEvents::CONTACT_EXPORT_PREPARE_FILE);
            \$this->eventDispatcher->dispatch(\$contactExportSchedulerEvent, LeadEvents::CONTACT_EXPORT_SEND_EMAIL);
            \$this->eventDispatcher->dispatch(\$contactExportSchedulerEvent, LeadEvents::POST_CONTACT_EXPORT_SEND_EMAIL);
            ++\$count;
        }

        \$output->writeln('Contact export email(s) sent: '.\$count);

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Export contacts which are scheduled in `contact_export_scheduler` table.';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Command/ContactScheduledExportCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Command/ContactScheduledExportCommand.php", "/app/docroot/app/bundles/LeadBundle/Command/ContactScheduledExportCommand.php");
    }
}
