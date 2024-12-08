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

/* @bundles/LeadBundle/EventListener/DoctrineSubscriber.php */
class __TwigTemplate_a69c242ffb781cd4b1c8a35e7cda8ca0 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\DBAL\\Types\\StringType;
use Doctrine\\ORM\\Tools\\Event\\GenerateSchemaEventArgs;
use Doctrine\\ORM\\Tools\\ToolEvents;
use Mautic\\LeadBundle\\Field\\SchemaDefinition;
use Monolog\\Logger;

class DoctrineSubscriber implements EventSubscriber
{
    public function __construct(
        private Logger \$logger
    ) {
    }

    public function getSubscribedEvents(): array
    {
        return [
            ToolEvents::postGenerateSchema,
        ];
    }

    public function postGenerateSchema(GenerateSchemaEventArgs \$args): void
    {
        \$schema = \$args->getSchema();

        try {
            if (!\$schema->hasTable(MAUTIC_TABLE_PREFIX.'lead_fields')) {
                return;
            }

            \$objects = [
                'lead'    => 'leads',
                'company' => 'companies',
            ];

            foreach (\$objects as \$object => \$tableName) {
                \$table = \$schema->getTable(MAUTIC_TABLE_PREFIX.\$tableName);

                // get a list of fields
                \$fields = \$args->getEntityManager()->getConnection()->createQueryBuilder()
                    ->select('f.alias, f.is_unique_identifer as is_unique, f.is_index, f.type, f.object')
                    ->from(MAUTIC_TABLE_PREFIX.'lead_fields', 'f')
                    ->where(\"f.object = '\$object'\")
                    ->orderBy('f.field_order', 'ASC')
                    ->executeQuery()
                    ->fetchAllAssociative();

                // Compile which ones are unique identifiers
                \$uniqueFields = [];
                foreach (\$fields as \$field) {
                    if (\$field['is_unique']) {
                        \$uniqueFields[\$field['alias']] = \$field['alias'];
                    }
                    \$columnDef = SchemaDefinition::getSchemaDefinition(\$field['alias'], \$field['type'], !empty(\$field['is_unique']));

                    if (!\$table->hasColumn(\$field['alias'])) {
                        \$table->addColumn(\$columnDef['name'], \$columnDef['type'], \$columnDef['options']);
                    }

                    if (!empty(\$field['is_unique']) || !empty(\$field['is_index'])) {
                        \$table->addIndex([\$columnDef['name']], MAUTIC_TABLE_PREFIX.\$field['alias'].'_search');
                    }
                }

                // Only allow indexes for string types
                \$columns = \$table->getColumns();
                /** @var \\Doctrine\\DBAL\\Schema\\Column \$column */
                foreach (\$columns as \$column) {
                    \$type = \$column->getType();
                    \$name = \$column->getName();

                    if (!\$type instanceof StringType) {
                        unset(\$uniqueFields[\$name]);
                    }
                }

                if (count(\$uniqueFields) > 1) {
                    // Only use three to prevent max key length errors
                    asort(\$uniqueFields);
                    \$uniqueFields = array_slice(\$uniqueFields, 0, 3);
                    \$table->addIndex(\$uniqueFields, MAUTIC_TABLE_PREFIX.'unique_identifier_search');
                }

                switch (\$object) {
                    case 'lead':
                        \$table->addIndex(['attribution', 'attribution_date'], MAUTIC_TABLE_PREFIX.'contact_attribution');
                        \$table->addIndex(['date_added', 'country'], MAUTIC_TABLE_PREFIX.'date_added_country_index');
                        break;
                    case 'company':
                        \$table->addIndex(['companyname', 'companyemail'], MAUTIC_TABLE_PREFIX.'company_filter');
                        \$table->addIndex(['companyname', 'companycity', 'companycountry', 'companystate'], MAUTIC_TABLE_PREFIX.'company_match');
                        break;
                }
            }
        } catch (\\Exception \$e) {
            if (defined('MAUTIC_INSTALLER')) {
                return;
            }
            // table doesn't exist or something bad happened so oh well
            \$this->logger->error('SCHEMA ERROR: '.\$e->getMessage());
        }
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
        return "@bundles/LeadBundle/EventListener/DoctrineSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/DoctrineSubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/DoctrineSubscriber.php");
    }
}
