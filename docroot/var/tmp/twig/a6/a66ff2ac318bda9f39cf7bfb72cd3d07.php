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

/* @bundles/LeadBundle/Command/UpdateLeadListsCommand.php */
class __TwigTemplate_2a662a3258707852a5be4858192cf9ed extends Template
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

namespace Mautic\\LeadBundle\\Command;

use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\NullOutput;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UpdateLeadListsCommand extends ModeratedCommand
{
    public const NAME = 'mautic:segments:update';

    public function __construct(
        private ListModel \$listModel,
        private TranslatorInterface \$translator,
        PathsHelper \$pathsHelper,
        CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct(\$pathsHelper, \$coreParametersHelper);
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:segments:update')
            ->setAliases(['mautic:segments:rebuild'])
            ->addOption(
                '--batch-limit',
                '-b',
                InputOption::VALUE_OPTIONAL,
                'Set batch size of contacts to process per round. Defaults to 300.',
                300
            )
            ->addOption(
                '--max-contacts',
                '-m',
                InputOption::VALUE_OPTIONAL,
                'Set max number of contacts to process per segment for this script execution. Defaults to all.',
                false
            )
            ->addOption(
                '--list-id',
                '-i',
                InputOption::VALUE_OPTIONAL,
                'Specific ID to rebuild. Defaults to all.',
                false
            )
            ->addOption(
                '--timing',
                '-tm',
                InputOption::VALUE_OPTIONAL,
                'Measure timing of build with output to CLI .',
                false
            )
            ->addOption(
                'exclude',
                'd',
                InputOption::VALUE_IS_ARRAY | InputOption::VALUE_OPTIONAL,
                'Exclude a specific segment from being rebuilt. Otherwise, all segments will be rebuilt.',
                []
            );

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$id                    = \$input->getOption('list-id');
        \$batch                 = \$input->getOption('batch-limit');
        \$max                   = \$input->getOption('max-contacts');
        \$enableTimeMeasurement = (bool) \$input->getOption('timing');
        \$output                = (\$input->getOption('quiet')) ? new NullOutput() : \$output;
        \$excludeSegments       = \$input->getOption('exclude');

        if (!\$this->checkRunStatus(\$input, \$output, \$id)) {
            return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
        }

        if (\$enableTimeMeasurement) {
            \$startTime = microtime(true);
        }

        if (\$id) {
            \$list = \$this->listModel->getEntity(\$id);

            if (!\$list) {
                \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.list.rebuild.not_found', ['%id%' => \$id]).'</error>');

                return \\Symfony\\Component\\Console\\Command\\Command::FAILURE;
            }

            \$this->rebuildSegment(\$list, \$batch, \$max, \$output);
        } else {
            \$filter = [
                'iterable_mode' => true,
            ];

            if (is_array(\$excludeSegments) && count(\$excludeSegments) > 0) {
                \$filter['filter'] = [
                    'force' => [
                        [
                            'expr'   => 'notIn',
                            'column' => \$this->listModel->getRepository()->getTableAlias().'.id',
                            'value'  => \$excludeSegments,
                        ],
                    ],
                ];
            }
            \$leadLists = \$this->listModel->getEntities(\$filter);

            foreach (\$leadLists as \$leadList) {
                \$startTimeForSingleSegment = time();
                \$this->rebuildSegment(\$leadList, \$batch, \$max, \$output);
                if (\$enableTimeMeasurement) {
                    \$totalTime = round(microtime(true) - \$startTimeForSingleSegment, 2);
                    \$output->writeln('<fg=cyan>'.\$this->translator->trans('mautic.lead.list.rebuild.contacts.time', ['%time%' => \$totalTime]).'</>'.\"\\n\");
                }
                unset(\$leadList);
            }
            unset(\$leadLists);
        }

        \$this->completeRun();

        if (\$enableTimeMeasurement) {
            \$totalTime = round(microtime(true) - \$startTime, 2);
            \$output->writeln('<fg=magenta>'.\$this->translator->trans('mautic.lead.list.rebuild.total.time', ['%time%' => \$totalTime]).'</>'.\"\\n\");
        }

        return \\Symfony\\Component\\Console\\Command\\Command::SUCCESS;
    }

    private function rebuildSegment(LeadList \$segment, int \$batch, int \$max, OutputInterface \$output): void
    {
        if (\$segment->isPublished()) {
            \$output->writeln('<info>'.\$this->translator->trans('mautic.lead.list.rebuild.rebuilding', ['%id%' => \$segment->getId()]).'</info>');
            \$startTime   = microtime(true);
            \$processed   = \$this->listModel->rebuildListLeads(\$segment, \$batch, \$max, \$output);
            \$rebuildTime = round(microtime(true) - \$startTime, 2);
            if (0 >= (int) \$max) {
                // Only full segment rebuilds count
                \$segment->setLastBuiltDateToCurrentDatetime();
                \$segment->setLastBuiltTime(\$rebuildTime);
                \$this->listModel->saveEntity(\$segment);
            }

            \$output->writeln(
                '<comment>'.\$this->translator->trans('mautic.lead.list.rebuild.leads_affected', ['%leads%' => \$processed]).'</comment>'
            );
        }
    }

    protected static \$defaultDescription = 'Update contacts in smart segments based on new contact data.';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Command/UpdateLeadListsCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Command/UpdateLeadListsCommand.php", "/app/docroot/app/bundles/LeadBundle/Command/UpdateLeadListsCommand.php");
    }
}
