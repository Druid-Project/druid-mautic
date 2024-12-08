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

/* @bundles/CoreBundle/Command/FindUpdatesCommand.php */
class __TwigTemplate_a1dcd71eb077aa3184d0b5a3dd37bb72 extends Template
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

use Mautic\\CoreBundle\\Helper\\UpdateHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * CLI Command to fetch application updates.
 */
class FindUpdatesCommand extends Command
{
    public function __construct(
        private TranslatorInterface \$translator,
        private UpdateHelper \$updateHelper
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('mautic:update:find')
            ->setHelp(<<<'EOT'
The <info>%command.name%</info> command checks for updates for the Mautic application.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$updateData = \$this->updateHelper->fetchData(true);

        if (\$updateData['error']) {
            \$output->writeln('<error>'.\$this->translator->trans(\$updateData['message']).'</error>');
        } elseif ('mautic.core.updater.running.latest.version' == \$updateData['message']) {
            \$output->writeln('<info>'.\$this->translator->trans(\$updateData['message']).'</info>');
        } else {
            \$output->writeln(\$this->translator->trans(\$updateData['message'], ['%version%' => \$updateData['version'], '%announcement%' => \$updateData['announcement']]));
            \$output->writeln(\$this->translator->trans('mautic.core.updater.cli.update'));
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Fetches updates for Mautic';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Command/FindUpdatesCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/FindUpdatesCommand.php", "/app/docroot/app/bundles/CoreBundle/Command/FindUpdatesCommand.php");
    }
}