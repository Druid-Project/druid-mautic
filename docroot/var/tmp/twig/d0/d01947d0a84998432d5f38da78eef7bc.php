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

/* @bundles/IntegrationsBundle/Command/CleanupCommand.php */
class __TwigTemplate_f48337feb98b5dd3cbc59aee72d6cc06 extends Template
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

use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

class CleanupCommand extends Command
{
    public const NAME = 'mautic:integrations:cleanup';

    public function __construct(private FieldChangeRepository \$fieldChangeRepository)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(self::NAME)
            ->setDescription('Delete records from field changes which are invalid');

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$numberOfRecordsDeleted = \$this->fieldChangeRepository->deleteOrphanLeadChanges();
        \$io->success(\"\$numberOfRecordsDeleted records deleted.\");
        \$io->success('Execution time: '.number_format(microtime(true) - \$_SERVER['REQUEST_TIME_FLOAT'], 3));

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
        return "@bundles/IntegrationsBundle/Command/CleanupCommand.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Command/CleanupCommand.php", "/app/docroot/app/bundles/IntegrationsBundle/Command/CleanupCommand.php");
    }
}
