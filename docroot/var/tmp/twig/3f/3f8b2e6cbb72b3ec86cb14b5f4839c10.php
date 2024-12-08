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

/* @bundles/CoreBundle/Helper/ComposerHelper.php */
class __TwigTemplate_7aa796c45ec2a0099b38dfea29bcc505 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Composer\\Console\\Application;
use Mautic\\MarketplaceBundle\\DTO\\ConsoleOutput;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Provides several helper functions to interact with Composer (composer require, remove, etc.).
 */
class ComposerHelper
{
    public function __construct(
        private KernelInterface \$kernel,
        private LoggerInterface \$logger
    ) {
    }

    /**
     * Installs a package using its Packagist name.
     *
     * @param string \$packageName The package name, e.g. mautic/example-plugin
     * @param bool   \$dryRun      Whether to dry-run the installation. Comes in handy during automated tests
     *                            and to test whether an installation would succeed or not.
     */
    public function install(string \$packageName, bool \$dryRun = false): ConsoleOutput
    {
        \$input = [
            'command'  => 'require',
            'packages' => [\$packageName],
        ];

        if (true === \$dryRun) {
            \$input['--dry-run'] = null;
        }

        return \$this->runCommand(\$input);
    }

    /**
     * Removes a package using its Packagist name.
     *
     * @param string \$packageName The package name, e.g. mautic/example-plugin
     * @param bool   \$dryRun      Whether to dry-run the removal. Comes in handy during automated tests
     *                            and to test whether an removal would succeed or not.
     */
    public function remove(string \$packageName, bool \$dryRun = false): ConsoleOutput
    {
        /**
         * \"composer remove package-name\" also triggers an update of all other Mautic dependencies.
         * By using the --no-update option first, we can work around that issue and only delete
         * this specific package from the composer.json file.
         */
        \$input = [
            'command'     => 'remove',
            'packages'    => [\$packageName],
            '--no-update' => null,
        ];

        if (true === \$dryRun) {
            \$input['--dry-run'] = null;
        }

        \$firstOutput = \$this->runCommand(\$input);

        if (0 === \$firstOutput->exitCode) {
            /**
             * Triggering an update of the package we just removed from composer.json
             * will remove it from composer.lock and actually delete the plugin folder
             * as well.
             */
            \$input = [
                'command'     => 'update',
                'packages'    => [\$packageName],
            ];

            if (true === \$dryRun) {
                \$input['--dry-run'] = null;
            }

            \$secondOutput = \$this->runCommand(\$input);

            // Let's merge the output so that we return all the output we have.
            return new ConsoleOutput(
                \$secondOutput->exitCode,
                \$firstOutput->output.\"\\n\".\$secondOutput->output
            );
        }

        return \$firstOutput;
    }

    /**
     * Checks if the given Composer package is installed.
     *
     * @param string \$packageName The package name, e.g. mautic/exmple-plugin
     */
    public function isInstalled(string \$packageName): bool
    {
        return \\Composer\\InstalledVersions::isInstalled(\$packageName);
    }

    /**
     * Returns a list of installed Composer packages that are of type mautic-plugin.
     *
     * @return string[]
     */
    public function getMauticPluginPackages(): array
    {
        return \\Composer\\InstalledVersions::getInstalledPackagesByType('mautic-plugin');
    }

    /**
     * Updates one or multiple Composer packages.
     */
    public function update(?string \$packageName = null, bool \$dryRun = false): ConsoleOutput
    {
        \$input = [
            'command'  => 'update',
        ];

        if (!empty(\$packageName)) {
            \$input['packages'] = [\$packageName];
        }

        if (true === \$dryRun) {
            \$input['--dry-run'] = null;
        }

        return \$this->runCommand(\$input);
    }

    /**
     * @param array<string,mixed> \$input
     */
    private function runCommand(array \$input): ConsoleOutput
    {
        \$arrayInput = new ArrayInput(array_merge(
            \$input, [
                '--no-interaction',
                '--working-dir' => \$this->kernel->getProjectDir(),
            ]));

        \$application = new Application();
        // We don't want our script to stop after running a Composer command
        \$application->setAutoExit(false);

        \$this->logger->info('Running Composer command: '.\$arrayInput->__toString());

        \$output   = new BufferedOutput();
        \$exitCode = 1;

        try {
            \$exitCode = \$application->run(\$arrayInput, \$output);
        } catch (\\Exception \$e) {
            \$output->writeln('Exception while running Composer command: '.\$e->getMessage());
            \$this->logger->error('Exception while running Composer command: '.\$e->getMessage());
        }

        \$this->logger->info('Composer command output: '.\$output->fetch());

        return new ConsoleOutput(\$exitCode, \$output->fetch());
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
        return "@bundles/CoreBundle/Helper/ComposerHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ComposerHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/ComposerHelper.php");
    }
}
