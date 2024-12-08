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

/* @bundles/LeadBundle/Field/Command/UpdateCustomFieldCommand.php */
class __TwigTemplate_536cf83e050da1b7e27d2e098cfa8028 extends Template
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

use Doctrine\\DBAL\\Exception as DBALException;
use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Mautic\\LeadBundle\\Field\\BackgroundService;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UpdateCustomFieldCommand extends Command
{
    public function __construct(private BackgroundService \$backgroundService, private TranslatorInterface \$translator)
    {
        parent::__construct();
    }

    public function configure(): void
    {
        parent::configure();

        \$this->setName('mautic:custom-field:update-column')
            ->setDescription('Create custom field column in the background')
            ->addOption('--id', '-i', InputOption::VALUE_REQUIRED, 'LeadField ID.')
            ->addOption('--user', '-u', InputOption::VALUE_OPTIONAL, 'User ID - User which receives a notification.')
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command will create a column in a lead_fields table if the proces should run in background.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$leadFieldId = (int) \$input->getOption('id');
        \$userId      = (int) \$input->getOption('user');

        try {
            \$this->backgroundService->updateColumn(\$leadFieldId, \$userId);
        } catch (LeadFieldWasNotFoundException) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.notfound').'</error>');

            return Command::FAILURE;
        } catch (AbortColumnUpdateException) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.column_update_aborted').'</error>');

            return Command::SUCCESS;
        } catch (DriverException|SchemaException|DBALException|\\Mautic\\CoreBundle\\Exception\\SchemaException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans(\$e->getMessage()).'</error>');

            return Command::FAILURE;
        }

        \$output->writeln('');
        \$output->writeln('<info>'.\$this->translator->trans('mautic.lead.field.column_was_updated').'</info>');

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
        return "@bundles/LeadBundle/Field/Command/UpdateCustomFieldCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Command/UpdateCustomFieldCommand.php", "/app/docroot/app/bundles/LeadBundle/Field/Command/UpdateCustomFieldCommand.php");
    }
}
