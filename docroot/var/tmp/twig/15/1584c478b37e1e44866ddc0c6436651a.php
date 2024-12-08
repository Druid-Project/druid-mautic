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

/* @bundles/CoreBundle/Command/AnonymizeIpCommand.php */
class __TwigTemplate_e7d965c0315473e1335b3c214e3abe21 extends Template
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

namespace Mautic\\CoreBundle\\Command;

use Doctrine\\DBAL\\Exception as DBALException;
use Mautic\\CoreBundle\\Entity\\AuditLogRepository;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class AnonymizeIpCommand extends Command
{
    /**
     * @var string
     */
    public const COMMAND_NAME = 'mautic:anonymize:ip';

    public function __construct(private IpAddressRepository \$ipAddressRepository, private CoreParametersHelper \$coreParametersHelper, private AuditLogRepository \$auditLogRepository)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(self::COMMAND_NAME)
            ->setDescription('Delete all stored ip addresses.');
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        if (!\$this->coreParametersHelper->get('anonymize_ip')) {
            return \$this->exitWithError('Anonymization could not be done because anonymize Ip feature is disabled for this instance.', \$output);
        }
        try {
            \$anonymizedRows = \$this->ipAddressRepository->anonymizeAllIpAddress();
            \$anonymizedRows += \$this->auditLogRepository->anonymizeAllIpAddress();
            \$output->writeln(sprintf('<info>%s IP addresses have been anonymized</info>', \$anonymizedRows));
        } catch (DBALException \$e) {
            return \$this->exitWithError(sprintf('Anonymization of IP addresses failed because of database error: %s', \$e->getMessage()), \$output);
        }

        return 0;
    }

    private function exitWithError(string \$message, OutputInterface \$output): int
    {
        \$output->writeln(sprintf('<error>%s</error>', \$message));

        return 1;
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
        return "@bundles/CoreBundle/Command/AnonymizeIpCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/AnonymizeIpCommand.php", "/app/docroot/app/bundles/CoreBundle/Command/AnonymizeIpCommand.php");
    }
}
