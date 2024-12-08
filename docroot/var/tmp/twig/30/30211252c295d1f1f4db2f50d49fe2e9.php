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

/* @bundles/CoreBundle/Command/UpdateDoNotSellListCommand.php */
class __TwigTemplate_70b3a8a9718fe234eb3092e8b09187c5 extends Template
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

use Mautic\\CoreBundle\\Helper\\MaxMindDoNotSellDownloadHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UpdateDoNotSellListCommand extends Command
{
    public function __construct(
        private MaxMindDoNotSellDownloadHelper \$maxMindDoNotSellDownloadHelper,
        private TranslatorInterface \$translator
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('mautic:donotsell:download')
            ->setHelp(
                <<<'EOT'
                The <info>%command.name%</info> command is used to update MaxMind Do Not Sell list.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        if (\$this->maxMindDoNotSellDownloadHelper->downloadRemoteDataStore()) {
            \$output->writeln('<info>'.\$this->translator->trans('mautic.core.success').'</info>');
        } else {
            \$remoteUrl = \$this->maxMindDoNotSellDownloadHelper->getRemoteDataStoreDownloadUrl();
            \$localPath = \$this->maxMindDoNotSellDownloadHelper->getLocalDataStoreFilepath();

            if (\$remoteUrl && \$localPath) {
                \$output->writeln('<error>'.\$this->translator->trans(
                    'mautic.core.do_not_sell.remote_fetch_error',
                    [
                        '%remoteUrl%' => \$remoteUrl,
                        '%localPath%' => \$localPath,
                    ]
                ).'</error>');
            } else {
                \$output->writeln('<error>'.\$this->translator->trans(
                    'mautic.core.do_not_sell.remote_fetch_error_generic'
                ).'</error>');
            }
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Fetch remote do not sell list from MaxMind';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Command/UpdateDoNotSellListCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/UpdateDoNotSellListCommand.php", "/app/docroot/app/bundles/CoreBundle/Command/UpdateDoNotSellListCommand.php");
    }
}
