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

/* @bundles/PluginBundle/Command/ReloadCommand.php */
class __TwigTemplate_52b3c74ddc9314d0436b4d29aa5c608f extends Template
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

namespace Mautic\\PluginBundle\\Command;

use Mautic\\PluginBundle\\Facade\\ReloadFacade;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ReloadCommand extends Command
{
    public function __construct(
        private ReloadFacade \$reloadFacade
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:plugins:reload')
            ->setAliases(
                [
                    'mautic:plugins:install',
                    'mautic:plugins:update',
                ]
            );

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$output->writeLn(\$this->reloadFacade->reloadPlugins());

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Installs, updates, enable and/or disable plugins.';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PluginBundle/Command/ReloadCommand.php";
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
        return new Source("", "@bundles/PluginBundle/Command/ReloadCommand.php", "/app/docroot/app/bundles/PluginBundle/Command/ReloadCommand.php");
    }
}
