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

/* @bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php */
class __TwigTemplate_ff75b8680617b416accb7791bebcdba0 extends Template
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

use Mautic\\CoreBundle\\IpLookup\\AbstractLocalDataLookup;
use Mautic\\CoreBundle\\IpLookup\\AbstractLookup;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * CLI Command to fetch updated Maxmind database.
 */
class UpdateIpDataStoreCommand extends Command
{
    public function __construct(
        private TranslatorInterface \$translator,
        private AbstractLookup \$ipService
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('mautic:iplookup:download')
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command is used to update local IP lookup data if applicable.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        if (\$this->ipService instanceof AbstractLocalDataLookup) {
            if (\$this->ipService->downloadRemoteDataStore()) {
                \$output->writeln('<info>'.\$this->translator->trans('mautic.core.success').'</info>');
            } else {
                \$remoteUrl = \$this->ipService->getRemoteDateStoreDownloadUrl();
                \$localPath = \$this->ipService->getLocalDataStoreFilepath();

                if (\$remoteUrl && \$localPath) {
                    \$output->writeln('<error>'.\$this->translator->trans(
                        'mautic.core.ip_lookup.remote_fetch_error',
                        [
                            '%remoteUrl%' => \$remoteUrl,
                            '%localPath%' => \$localPath,
                        ]
                    ).'</error>');
                } else {
                    \$output->writeln('<error>'.\$this->translator->trans(
                        'mautic.core.ip_lookup.remote_fetch_error_generic'
                    ).'</error>');
                }
            }
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Fetch remote datastores for IP lookup services that leverage local lookups';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php", "/app/docroot/app/bundles/CoreBundle/Command/UpdateIpDataStoreCommand.php");
    }
}
