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

/* @bundles/CoreBundle/Command/ApplyUpdatesCommand.php */
class __TwigTemplate_7c97e91be3b7895ba5e645acb2a42ec5 extends Template
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

namespace Mautic\\CoreBundle\\Command;

use Mautic\\CoreBundle\\Exception\\UpdateFailedException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\ProgressBarHelper;
use Mautic\\CoreBundle\\Update\\StepProvider;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Helper\\SymfonyQuestionHelper;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Question\\ConfirmationQuestion;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * CLI Command to update the application.
 */
class ApplyUpdatesCommand extends Command
{
    public function __construct(
        private TranslatorInterface \$translator,
        private StepProvider \$stepProvider,
        private CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('mautic:update:apply')
            ->setDefinition(
                [
                    new InputOption(
                        'force', null, InputOption::VALUE_NONE,
                        'Bypasses the verification check.'
                    ),
                    new InputOption(
                        'update-package',
                        'p', InputOption::VALUE_OPTIONAL, 'Optional full path to the update package to apply.'
                    ),
                    new InputOption(
                        'finish', null, InputOption::VALUE_NONE,
                        'Finalize the upgrade.'
                    ),
                ]
            )
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command updates the Mautic application.

<info>php %command.full_name%</info>

You can optionally specify to bypass the verification check with the --force option:

<info>php %command.full_name% --force</info>

To force install a local package, pass the full path to the package as follows:

<info>php %command.full_name% --update-package=/path/to/updatepackage.zip</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        /** @var array<string, mixed> \$options */
        \$options = \$input->getOptions();

        // Start a progress bar, don't give a max number of steps because it is conditional
        \$progressBar = ProgressBarHelper::init(\$output);
        \$progressBar->setFormat('Step %current% [%bar%] <info>%message%</info>');

        // Define this just in case
        if (!defined('MAUTIC_ENV')) {
            define('MAUTIC_ENV', \$options['env'] ?? 'prod');
        }

        if (true === \$this->coreParametersHelper->get('composer_updates', false)) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.core.command.update.composer').'</error>');

            return Command::FAILURE;
        }

        try {
            if (empty(\$options['finish'])) {
                \$returnCode = \$this->startUpgrade(\$input, \$output, \$progressBar);

                \$output->writeln(
                    \"\\n\\n<warning>\".\$this->translator->trans('mautic.core.command.update.finalize_instructions').'</warning>'
                );

                // Must hard exit here to prevent Symfony from trying to use the kernel while in the same PHP process
                exit(\$returnCode);
            }

            return \$this->finishUpgrade(\$input, \$output, \$progressBar);
        } catch (UpdateFailedException \$exception) {
            \$output->writeln(
                \"\\n\\n<error>\".\$exception->getMessage().'</error>'
            );
        }

        return Command::FAILURE;
    }

    /**
     * @throws UpdateFailedException
     */
    private function startUpgrade(InputInterface \$input, OutputInterface \$output, ProgressBar \$progressBar): int
    {
        if (!\$input->getOption('force')) {
            /** @var SymfonyQuestionHelper \$helper */
            \$helper   = \$this->getHelperSet()->get('question');
            \$question = new ConfirmationQuestion(\$this->translator->trans('mautic.core.update.confirm_application_update').' ', false);

            if (!\$helper->ask(\$input, \$output, \$question)) {
                throw new UpdateFailedException(\$this->translator->trans('mautic.core.update.aborted'));
            }
        }

        foreach (\$this->stepProvider->getInitialSteps() as \$step) {
            \$step->execute(\$progressBar, \$input, \$output);
        }

        return 0;
    }

    /**
     * @throws UpdateFailedException
     */
    private function finishUpgrade(InputInterface \$input, OutputInterface \$output, ProgressBar \$progressBar): int
    {
        foreach (\$this->stepProvider->getFinalSteps() as \$step) {
            \$step->execute(\$progressBar, \$input, \$output);
        }

        return 0;
    }

    protected static \$defaultDescription = 'Updates the Mautic application';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Command/ApplyUpdatesCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/ApplyUpdatesCommand.php", "/app/docroot/app/bundles/CoreBundle/Command/ApplyUpdatesCommand.php");
    }
}
