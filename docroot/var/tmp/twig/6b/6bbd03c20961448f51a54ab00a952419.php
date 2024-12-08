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

/* @bundles/CampaignBundle/Command/ValidateEventCommand.php */
class __TwigTemplate_03f34218ef698310eb823c737fff32bc extends Template
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

namespace Mautic\\CampaignBundle\\Command;

use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\InactiveExecutioner;
use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ValidateEventCommand extends Command
{
    use WriteCountTrait;

    public function __construct(
        private InactiveExecutioner \$inactiveExecution,
        private TranslatorInterface \$translator,
        private FormatterHelper \$formatterHelper
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:campaigns:validate')
            ->addOption(
                '--decision-id',
                null,
                InputOption::VALUE_REQUIRED,
                'ID of the decision to evaluate.'
            )
            ->addOption(
                '--contact-id',
                null,
                InputOption::VALUE_OPTIONAL,
                'Evaluate for specific contact'
            )
            ->addOption(
                '--contact-ids',
                null,
                InputOption::VALUE_OPTIONAL,
                'CSV of contact IDs to evaluate.'
            );

        parent::configure();
    }

    /**
     * @throws \\Exception
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        defined('MAUTIC_CAMPAIGN_SYSTEM_TRIGGERED') or define('MAUTIC_CAMPAIGN_SYSTEM_TRIGGERED', 1);

        \$decisionId = \$input->getOption('decision-id');
        \$contactId  = \$input->getOption('contact-id');
        \$contactIds = \$this->formatterHelper->simpleCsvToArray(\$input->getOption('contact-ids'), 'int');

        if (!\$contactIds && !\$contactId) {
            \$output->writeln(
                \"\\n\".
                '<comment>'.\$this->translator->trans('mautic.campaign.trigger.events_executed', ['%count%' => 0])
                .'</comment>'
            );

            return Command::SUCCESS;
        }

        \$limiter = new ContactLimiter(null, \$contactId, null, null, \$contactIds);
        \$counter = \$this->inactiveExecution->validate(\$decisionId, \$limiter, \$output);

        \$this->writeCounts(\$output, \$this->translator, \$counter);

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Validate if a contact has been inactive for a decision and execute events if so.';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CampaignBundle/Command/ValidateEventCommand.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/ValidateEventCommand.php", "/app/docroot/app/bundles/CampaignBundle/Command/ValidateEventCommand.php");
    }
}
