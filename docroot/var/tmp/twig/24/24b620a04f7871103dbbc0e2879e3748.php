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

/* @bundles/PointBundle/Entity/TriggerEvent.php */
class __TwigTemplate_56a688ae848c87eb2ebb05a2f432b812 extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class TriggerEvent
{
    /**
     * @var int|null
     */
    private \$id;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var string|null
     */
    private \$description;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var int
     */
    private \$order = 0;

    /**
     * @var array
     */
    private \$properties = [];

    /**
     * @var Trigger
     */
    private \$trigger;

    /**
     * @var ArrayCollection<int,\\Mautic\\PointBundle\\Entity\\LeadTriggerLog>
     */
    private \$log;

    /**
     * @var array
     */
    private \$changes;

    public function __clone(): void
    {
        \$this->id = null;
    }

    public function __construct()
    {
        \$this->log = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('point_trigger_events')
            ->setCustomRepositoryClass(TriggerEventRepository::class)
            ->addIndex(['type'], 'trigger_type_search');

        \$builder->addIdColumns();

        \$builder->createField('type', 'string')
            ->length(50)
            ->build();

        \$builder->createField('order', 'integer')
            ->columnName('action_order')
            ->build();

        \$builder->addField('properties', 'array');

        \$builder->createManyToOne('trigger', 'Trigger')
            ->inversedBy('events')
            ->addJoinColumn('trigger_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createOneToMany('log', 'LeadTriggerLog')
            ->mappedBy('event')
            ->cascadePersist()
            ->cascadeRemove()
            ->fetchExtraLazy()
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('trigger')
            ->addProperties(
                [
                    'id',
                    'name',
                    'description',
                    'type',
                    'order',
                    'properties',
                ]
            )
            ->build();
    }

    private function isChanged(\$prop, \$val): void
    {
        if (\$this->\$prop != \$val) {
            \$this->changes[\$prop] = [\$this->\$prop, \$val];
        }
    }

    /**
     * @return array
     */
    public function getChanges()
    {
        return \$this->changes;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param int \$order
     *
     * @return TriggerEvent
     */
    public function setOrder(\$order)
    {
        \$this->isChanged('order', \$order);

        \$this->order = \$order;

        return \$this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return \$this->order;
    }

    /**
     * @param array \$properties
     *
     * @return TriggerEvent
     */
    public function setProperties(\$properties)
    {
        \$this->isChanged('properties', \$properties);

        \$this->properties = \$properties;

        return \$this;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return \$this->properties;
    }

    /**
     * @return self
     */
    public function setTrigger(Trigger \$trigger)
    {
        \$this->trigger = \$trigger;

        return \$this;
    }

    /**
     * @return Trigger
     */
    public function getTrigger()
    {
        return \$this->trigger;
    }

    /**
     * @param string \$type
     *
     * @return TriggerEvent
     */
    public function setType(\$type)
    {
        \$this->isChanged('type', \$type);
        \$this->type = \$type;

        return \$this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    public function convertToArray(): array
    {
        return get_object_vars(\$this);
    }

    /**
     * @param string \$description
     *
     * @return TriggerEvent
     */
    public function setDescription(\$description)
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @param string \$name
     *
     * @return TriggerEvent
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);
        \$this->name = \$name;

        return \$this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @return self
     */
    public function addLog(LeadTriggerLog \$log)
    {
        \$this->log[] = \$log;

        return \$this;
    }

    public function removeLog(LeadTriggerLog \$log): void
    {
        \$this->log->removeElement(\$log);
    }

    /**
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getLog()
    {
        return \$this->log;
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
        return "@bundles/PointBundle/Entity/TriggerEvent.php";
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
        return new Source("", "@bundles/PointBundle/Entity/TriggerEvent.php", "/app/docroot/app/bundles/PointBundle/Entity/TriggerEvent.php");
    }
}
