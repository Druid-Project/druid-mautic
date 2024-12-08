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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/FieldValidator.php */
class __TwigTemplate_e2d7a1d013a1c215cf6ce15c6af1b736 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\BulkNotification;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner\\Exception\\FieldSchemaNotFoundException;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Field\\SchemaDefinition;

final class FieldValidator implements FieldValidatorInterface
{
    /**
     * @var mixed[]
     */
    private array \$fieldSchemaData = [];

    public function __construct(
        private LeadFieldRepository \$leadFieldRepository,
        private BulkNotification \$bulkNotification
    ) {
    }

    /**
     * @param ObjectChangeDAO[] \$changedObjects
     */
    public function validateFields(string \$objectName, array \$changedObjects): void
    {
        foreach (\$changedObjects as \$changedObject) {
            foreach (\$changedObject->getFields() as \$field) {
                \$fieldName = \$field->getName();

                try {
                    \$schema = \$this->getFieldSchema(\$objectName, \$fieldName);
                } catch (FieldSchemaNotFoundException) {
                    continue;
                }

                \$fieldValue       = \$field->getValue();
                \$normalizedValue  = \$fieldValue->getNormalizedValue();
                \$schemaDefinition = SchemaDefinition::getSchemaDefinition(
                    \$schema['alias'],
                    \$schema['type'],
                    \$schema['isUniqueIdentifer'],
                    \$schema['charLengthLimit']
                );

                if (is_string(\$normalizedValue) && !\$this->isFieldLengthValid(\$schemaDefinition, \$normalizedValue)) {
                    \$changedObject->removeField(\$fieldName);
                    \$message = sprintf(\"Custom field '%s' with value '%s' exceeded maximum allowed length and was ignored during the sync.\", \$schema['label'], \$normalizedValue);
                    \$this->addNotification(\$message, \$changedObject, \$fieldName, 'length');
                    continue;
                }

                if (!\$this->isFieldTypeValid(\$schemaDefinition, \$fieldValue)) {
                    \$changedObject->removeField(\$fieldName);
                    \$message = sprintf(\"Custom field '%s' of type '%s' did not match integration type '%s' and was ignored during the sync.\", \$schema['label'], \$schema['type'], \$fieldValue->getType());
                    \$this->addNotification(\$message, \$changedObject, \$fieldName, 'type');
                    continue;
                }
            }
        }

        \$this->bulkNotification->flush();
    }

    /**
     * @param mixed[] \$schemaDefinition
     */
    private function isFieldLengthValid(array \$schemaDefinition, string \$normalizedValue): bool
    {
        \$schemaLength = SchemaDefinition::getFieldCharLengthLimit(\$schemaDefinition);

        if (null === \$schemaLength) {
            return true;
        }

        \$actualLength = mb_strlen(\$normalizedValue);

        return \$actualLength <= \$schemaLength;
    }

    /**
     * @param mixed[] \$schemaDefinition
     */
    private function isFieldTypeValid(array \$schemaDefinition, NormalizedValueDAO \$field): bool
    {
        return match (\$schemaDefinition['type']) {
            'date', 'datetime', 'time', 'boolean' => \$field->getType() === \$schemaDefinition['type'],
            'float' => in_array(\$field->getType(), [
                NormalizedValueDAO::DOUBLE_TYPE,
                NormalizedValueDAO::FLOAT_TYPE,
                NormalizedValueDAO::INT_TYPE,
            ]),
            default => true,
        };
    }

    /**
     * @return mixed[]
     *
     * @throws FieldSchemaNotFoundException
     */
    private function getFieldSchema(string \$object, string \$alias): array
    {
        if (!isset(\$this->fieldSchemaData[\$object])) {
            \$this->fieldSchemaData[\$object] = \$this->leadFieldRepository->getFieldSchemaData(\$object);
        }

        if (!isset(\$this->fieldSchemaData[\$object][\$alias])) {
            throw new FieldSchemaNotFoundException(\$object, \$alias);
        }

        return \$this->fieldSchemaData[\$object][\$alias];
    }

    private function addNotification(string \$message, ObjectChangeDAO \$changedObject, string \$fieldName, string \$type): void
    {
        \$integrationName       = \$changedObject->getIntegration();
        \$integrationObjectName = \$changedObject->getObject();
        \$integrationObjectId   = \$changedObject->getMappedObjectId();
        \$deduplicateValue      = \$integrationName.'-'.\$integrationObjectName.'-'.\$fieldName.'-'.\$type;

        \$this->bulkNotification->addNotification(
            \$deduplicateValue,
            sprintf('%s Your %s integration plugin may be configured improperly.', \$message, \$integrationName),
            \$integrationName,
            sprintf('%s %s', \$integrationObjectId, \$integrationObjectName),
            \$integrationObjectName,
            0,
            sprintf('%s %s %s', \$integrationName, \$integrationObjectName, \$integrationObjectId)
        );
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
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/FieldValidator.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/FieldValidator.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/FieldValidator.php");
    }
}
