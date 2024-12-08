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

/* @bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php */
class __TwigTemplate_538c61bb4d8b14c3ab175d2ce99e5b09 extends Template
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

namespace Mautic\\LeadBundle\\Field\\Command;

use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Field\\BackgroundService;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\ColumnAlreadyCreatedException;
use Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException;
use Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CreateCustomFieldCommand extends ModeratedCommand
{
    public const COMMAND_NAME = 'mautic:custom-field:create-column';

    protected static \$defaultDescription = 'Create custom field column in the background';

    public function __construct(
        private BackgroundService \$backgroundService,
        private TranslatorInterface \$translator,
        private LeadFieldRepository \$leadFieldRepository,
        PathsHelper \$pathsHelper,
        CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct(\$pathsHelper, \$coreParametersHelper);
    }

    public function configure(): void
    {
        parent::configure();

        \$this->setName(self::COMMAND_NAME)
            ->addOption('--id', '-i', InputOption::VALUE_OPTIONAL, 'LeadField ID.')
            ->addOption('--user', '-u', InputOption::VALUE_OPTIONAL, 'User ID - User which receives a notification.')
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command will create columns in a lead_fields table if the process should run in background.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$leadFieldId = (int) \$input->getOption('id');
        \$userId      = (int) \$input->getOption('user');

        if (\$leadFieldId) {
            return \$this->addColumn(\$leadFieldId, \$userId, \$input, \$output);
        }

        return \$this->addAllMissingColumns(\$input, \$output);
    }

    private function addAllMissingColumns(InputInterface \$input, OutputInterface \$output): int
    {
        \$hasNoErrors = Command::SUCCESS;
        while (\$leadField = \$this->leadFieldRepository->getFieldThatIsMissingColumn()) {
            if (Command::FAILURE === \$this->addColumn(\$leadField->getId(), \$leadField->getCreatedBy(), \$input, \$output)) {
                \$hasNoErrors = Command::FAILURE;
            }
        }

        return \$hasNoErrors;
    }

    private function addColumn(int \$leadFieldId, ?int \$userId, InputInterface \$input, OutputInterface \$output): int
    {
        \$moderationKey = sprintf('%s-%s-%s', self::COMMAND_NAME, \$leadFieldId, \$userId);

        if (!\$this->checkRunStatus(\$input, \$output, \$moderationKey)) {
            return Command::SUCCESS;
        }

        try {
            \$this->backgroundService->addColumn(\$leadFieldId, \$userId);
        } catch (LeadFieldWasNotFoundException) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.notfound').'</error>');

            return Command::FAILURE;
        } catch (ColumnAlreadyCreatedException) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.column_already_created').'</error>');

            return Command::SUCCESS;
        } catch (AbortColumnCreateException) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.column_creation_aborted').'</error>');

            return Command::SUCCESS;
        } catch (CustomFieldLimitException|DriverException|SchemaException|\\Doctrine\\DBAL\\Exception|\\Mautic\\CoreBundle\\Exception\\SchemaException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans(\$e->getMessage()).'</error>');

            return Command::FAILURE;
        }

        \$output->writeln('<info>'.\$this->translator->trans('mautic.lead.field.column_was_created', ['%id%' => \$leadFieldId]).'</info>');
        \$this->completeRun();

        return Command::SUCCESS;
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
        return "@bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php", "/app/docroot/app/bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php");
    }
}
