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

/* @bundles/LeadBundle/Field/Command/AnalyseCustomFieldCommand.php */
class __TwigTemplate_64d470ac7b0eff8553fbb9e165f3092c extends Template
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

namespace Mautic\\LeadBundle\\Field\\Command;

use Mautic\\LeadBundle\\Field\\SchemaDefinition;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\Table;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class AnalyseCustomFieldCommand extends Command
{
    public function __construct(private FieldModel \$fieldModel, private LeadModel \$leadModel, private TranslatorInterface \$translator)
    {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        \$this
            ->setName('mautic:fields:analyse')
            ->setDescription('Analyse actual usage of custom columns in leads table.')
            ->addOption(
                'display-table',
                't',
                InputOption::VALUE_NONE,
                'Display results in table format'
            );
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$displayAsTable = \$input->getOption('display-table');

        \$fieldDetails   = \$this->getCustomFieldDetails();
        if (empty(\$fieldDetails)) {
            \$output->writeln('No custom field(s) to analyse!!!');

            return 0;
        }

        \$results = \$this->leadModel->getCustomLeadFieldLength(array_keys(\$fieldDetails));

        \$fieldLengths = [];
        foreach (\$results as \$key => \$detail) {
            \$fieldLengths[\$key] = ['max_length' => \$detail];
        }

        \$analysisDetails = array_merge_recursive(\$fieldDetails, \$fieldLengths);

        \$headers   = [
            \$this->translator->trans('mautic.lead.field.analyse.header.name'),
            \$this->translator->trans('mautic.lead.field.analyse.header.alias'),
            \$this->translator->trans('mautic.lead.field.analyse.header.length'),
            \$this->translator->trans('mautic.lead.field.analyse.header.max_length'),
            \$this->translator->trans('mautic.lead.field.analyse.header.suggested_length'),
            \$this->translator->trans('mautic.lead.field.analyse.header.indexed'),
        ];

        \$rows      = [];
        foreach (\$analysisDetails as \$analysisDetail) {
            \$maxLength          = (int) \$analysisDetail['max_length'] ?: 0;
            \$columnLength       = (int) \$analysisDetail['char_length_limit'] ?: 0;
            \$suggestedMaxSize   = \$this->getSuggestedMaxSize(\$columnLength, \$maxLength);

            \$rows[] = [
                \$analysisDetail['label'],
                \$analysisDetail['alias'],
                \$columnLength,
                \$maxLength,
                \$suggestedMaxSize,
                \$analysisDetail['is_index'] ? \$this->translator->trans('mautic.core.yes') : \$this->translator->trans('mautic.core.no'),
            ];
        }

        if (\$displayAsTable) {
            \$table = new Table(\$output);
            \$table
                ->setHeaders(\$headers)
                ->setRows(\$rows);
            \$table->render();
        } else {
            \$output->writeln(implode(', ', \$headers));
            foreach (\$rows as \$row) {
                \$output->writeln(implode(', ', \$row));
            }
        }

        return 0;
    }

    /**
     * @return mixed[]
     */
    private function getCustomFieldDetails(): array
    {
        \$fields         = \$this->fieldModel->getLeadFieldCustomFields();
        \$fieldSchemas   = \$this->fieldModel->getLeadFieldCustomFieldSchemaDetails();

        \$fieldDetails = [];
        foreach (\$fields as \$field) {
            if (!isset(\$fieldSchemas[\$field->getAlias()])) {
                continue;
            }

            \$schemaDef = SchemaDefinition::getSchemaDefinition(\$field->getAlias(), \$field->getType(), \$field->getIsUniqueIdentifier(), \$field->getCharLengthLimit());
            if ('string' !== \$schemaDef['type']) {
                continue;
            }

            \$fieldDetails[\$field->getAlias()] = [
                'label'             => \$field->getLabel(),
                'alias'             => \$field->getAlias(),
                'type'              => \$schemaDef['type'],
                'char_length_limit' => \$fieldSchemas[\$field->getAlias()]->getLength(),
                'is_index'          => \$field->isIsIndex(),
            ];
        }

        return \$fieldDetails;
    }

    private function getSuggestedMaxSize(int \$columnLength, int \$utilisedLength): int
    {
        if (\$utilisedLength > 0) {
            return min(\$utilisedLength * 2, \$columnLength, 191);
        }

        return min(\$columnLength, 191);
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
        return "@bundles/LeadBundle/Field/Command/AnalyseCustomFieldCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Command/AnalyseCustomFieldCommand.php", "/app/docroot/app/bundles/LeadBundle/Field/Command/AnalyseCustomFieldCommand.php");
    }
}
