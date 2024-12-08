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

/* @bundles/LeadBundle/Command/DeleteContactSecondaryCompaniesCommand.php */
class __TwigTemplate_535439749cbda4b0091998684c2a0deb extends Template
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

namespace Mautic\\LeadBundle\\Command;

use Doctrine\\ORM\\Exception\\ORMException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DeleteContactSecondaryCompaniesCommand extends Command
{
    protected static \$defaultDescription = 'Deletes all contact\\'s secondary companies.';
    public const NAME                    = 'mautic:contact:delete:secondary-companies';

    public function __construct(private LoggerInterface \$logger, private TranslatorInterface \$translator, private CoreParametersHelper \$coreParametersHelper, private CompanyLeadRepository \$companyLeadsRepository)
    {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        \$this->setName(self::NAME)
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command deletes non-primary companies of every contact.

<info>php %command.full_name%</info>
EOT
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$allowMultiple = \$this->coreParametersHelper->get('contact_allow_multiple_companies');

        // We process only if the config is set to false
        if (\$allowMultiple) {
            \$output->writeln(\$this->translator->trans('mautic.lead.command.delete_contact_secondary_company.allow_multiple_enabled'));

            return Command::SUCCESS;
        }

        try {
            \$this->companyLeadsRepository->removeAllSecondaryCompanies();
        } catch (ORMException \$e) {
            \$errorMessage = \$this->translator->trans('mautic.lead.command.error', ['%name%' => self::NAME, '%error%' => \$e->getMessage()]);
            \$output->writeln(\$errorMessage);
            \$this->logger->error(\$errorMessage);
        }

        \$output->writeln(\$this->translator->trans('mautic.lead.command.delete_contact_secondary_company.success'));

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
        return "@bundles/LeadBundle/Command/DeleteContactSecondaryCompaniesCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Command/DeleteContactSecondaryCompaniesCommand.php", "/app/docroot/app/bundles/LeadBundle/Command/DeleteContactSecondaryCompaniesCommand.php");
    }
}
