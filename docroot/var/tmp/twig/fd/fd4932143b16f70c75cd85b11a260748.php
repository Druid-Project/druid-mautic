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

/* @bundles/IntegrationsBundle/Entity/FieldChange.php */
class __TwigTemplate_e49890c7400345e059ca9a8380d2f47a extends Template
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

namespace Mautic\\IntegrationsBundle\\Entity;

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class FieldChange
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$integration;

    /**
     * @var int|string
     */
    private \$objectId;

    /**
     * @var string
     */
    private \$objectType;

    /**
     * @var \\DateTimeInterface
     */
    private \$modifiedAt;

    /**
     * @var string
     */
    private \$columnName;

    /**
     * @var string
     */
    private \$columnType;

    /**
     * @var string
     */
    private \$columnValue;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder
            ->setTable('sync_object_field_change_report')
            ->setCustomRepositoryClass(FieldChangeRepository::class)
            ->addIndex(['object_type', 'object_id', 'column_name'], 'object_composite_key')
            ->addIndex(['integration', 'object_type', 'object_id', 'column_name'], 'integration_object_composite_key')
            ->addIndex(['integration', 'object_type', 'modified_at'], 'integration_object_type_modification_composite_key');

        \$builder->addId();

        \$builder
            ->createField('integration', Types::STRING)
            ->build();

        \$builder->addBigIntIdField('objectId', 'object_id', false);

        \$builder
            ->createField('objectType', Types::STRING)
            ->columnName('object_type')
            ->build();

        \$builder
            ->createField('modifiedAt', Types::DATETIME_MUTABLE)
            ->columnName('modified_at')
            ->build();

        \$builder
            ->createField('columnName', Types::STRING)
            ->columnName('column_name')
            ->build();

        \$builder
            ->createField('columnType', Types::STRING)
            ->columnName('column_type')
            ->build();

        \$builder
            ->createField('columnValue', Types::TEXT)
            ->columnName('column_value')
            ->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    /**
     * @param string \$integration
     *
     * @return FieldChange
     */
    public function setIntegration(\$integration)
    {
        \$this->integration = \$integration;

        return \$this;
    }

    public function setObjectId(int \$id): self
    {
        \$this->objectId = (string) \$id;

        return \$this;
    }

    public function getObjectId(): int
    {
        return (int) \$this->objectId;
    }

    public function setObjectType(string \$type): self
    {
        \$this->objectType = \$type;

        return \$this;
    }

    public function getObjectType(): string
    {
        return \$this->objectType;
    }

    public function setModifiedAt(\\DateTime \$time): self
    {
        \$this->modifiedAt = \$time;

        return \$this;
    }

    public function getModifiedAt(): \\DateTimeInterface
    {
        return \$this->modifiedAt;
    }

    public function setColumnName(string \$name): self
    {
        \$this->columnName = \$name;

        return \$this;
    }

    public function getColumnName(): string
    {
        return \$this->columnName;
    }

    public function setColumnType(string \$type): self
    {
        \$this->columnType = \$type;

        return \$this;
    }

    public function getColumnType(): string
    {
        return \$this->columnType;
    }

    public function setColumnValue(string \$value): self
    {
        \$this->columnValue = \$value;

        return \$this;
    }

    public function getColumnValue(): string
    {
        return \$this->columnValue;
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
        return "@bundles/IntegrationsBundle/Entity/FieldChange.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Entity/FieldChange.php", "/app/docroot/app/bundles/IntegrationsBundle/Entity/FieldChange.php");
    }
}
