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

/* @bundles/CoreBundle/Update/Step/UpdateSchemaStep.php */
class __TwigTemplate_abc8ac1e402b44d6f13073afa064e087 extends Template
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

namespace Mautic\\CoreBundle\\Update\\Step;

use Mautic\\CoreBundle\\Exception\\UpdateFailedException;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\ArgvInput;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class UpdateSchemaStep implements StepInterface
{
    private ?object \$kernel;

    public function __construct(
        private TranslatorInterface \$translator,
        ContainerInterface \$container
    ) {
        \$this->kernel     = \$container->get('kernel');
    }

    public function getOrder(): int
    {
        return 50;
    }

    public function shouldExecuteInFinalStage(): bool
    {
        return true;
    }

    /**
     * @throws UpdateFailedException
     */
    public function execute(ProgressBar \$progressBar, InputInterface \$input, OutputInterface \$output): void
    {
        // Migrate the database to the current version
        \$progressBar->setMessage(\$this->translator->trans('mautic.core.update.migrating.database.schema'));
        \$progressBar->advance();

        \$migrationApplication = new Application(\$this->kernel);
        \$migrationApplication->setAutoExit(false);

        \$migrationCommandArgs = new ArgvInput(['console', 'doctrine:migrations:migrate', '--quiet', '--no-interaction']);
        \$migrationCommandArgs->setInteractive(false);

        \$migrateExitCode = \$migrationApplication->run(\$migrationCommandArgs, new NullOutput());

        // Output the error (if exists) from the migrate command after we've finished the progress bar
        if (0 !== \$migrateExitCode) {
            throw new UpdateFailedException(\$this->translator->trans('mautic.core.update.error_performing_migration'));
        }
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
        return "@bundles/CoreBundle/Update/Step/UpdateSchemaStep.php";
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
        return new Source("", "@bundles/CoreBundle/Update/Step/UpdateSchemaStep.php", "/app/docroot/app/bundles/CoreBundle/Update/Step/UpdateSchemaStep.php");
    }
}
