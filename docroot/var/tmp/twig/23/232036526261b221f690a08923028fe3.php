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

/* @bundles/PointBundle/Entity/Trigger.php */
class __TwigTemplate_4bd3fa85dd9467a283ae43b8419dd04e extends Template
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
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

class Trigger extends FormEntity
{
    /**
     * @var int
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
     * @var \\DateTimeInterface
     */
    private \$publishUp;

    /**
     * @var \\DateTimeInterface
     */
    private \$publishDown;

    /**
     * @var int
     */
    private \$points = 0;

    /**
     * @var string
     */
    private \$color = 'a0acb8';

    /**
     * @var bool
     */
    private \$triggerExistingLeads = false;

    /**
     * @var \\Mautic\\CategoryBundle\\Entity\\Category|null
     **/
    private \$category;

    /**
     * @var ArrayCollection<int, \\Mautic\\PointBundle\\Entity\\TriggerEvent>
     */
    private \$events;

    private ?Group \$group = null;

    public function __clone()
    {
        \$this->id = null;

        parent::__clone();
    }

    public function __construct()
    {
        \$this->events = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('point_triggers')
            ->setCustomRepositoryClass(TriggerRepository::class);

        \$builder->addIdColumns();

        \$builder->addPublishDates();

        \$builder->addField('points', 'integer');

        \$builder->createField('color', 'string')
            ->length(7)
            ->build();

        \$builder->createField('triggerExistingLeads', 'boolean')
            ->columnName('trigger_existing_leads')
            ->build();

        \$builder->addCategory();

        \$builder->createOneToMany('events', 'TriggerEvent')
            ->setIndexBy('id')
            ->setOrderBy(['order' => 'ASC'])
            ->mappedBy('trigger')
            ->cascadeAll()
            ->fetchExtraLazy()
            ->build();

        \$builder->createManyToOne('group', Group::class)
            ->addJoinColumn('group_id', 'id', true, false, 'CASCADE')
            ->build();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata): void
    {
        \$metadata->addPropertyConstraint('name', new Assert\\NotBlank([
            'message' => 'mautic.core.name.required',
        ]));
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('trigger')
            ->addListProperties(
                [
                    'id',
                    'name',
                    'category',
                    'description',
                ]
            )
            ->addProperties(
                [
                    'publishUp',
                    'publishDown',
                    'points',
                    'color',
                    'events',
                    'triggerExistingLeads',
                ]
            )
            ->build();
    }

    /**
     * @param string \$prop
     * @param mixed  \$val
     */
    protected function isChanged(\$prop, \$val)
    {
        if ('events' == \$prop) {
            // changes are already computed so just add them
            \$this->changes[\$prop][\$val[0]] = \$val[1];
        } else {
            parent::isChanged(\$prop, \$val);
        }
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set description.
     *
     * @param string \$description
     *
     * @return Trigger
     */
    public function setDescription(\$description)
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * Set name.
     *
     * @param string \$name
     *
     * @return Trigger
     */
    public function setName(\$name)
    {
        \$this->isChanged('name', \$name);
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * Add events.
     *
     * @return Point
     */
    public function addTriggerEvent(\$key, TriggerEvent \$event)
    {
        if (\$changes = \$event->getChanges()) {
            \$this->isChanged('events', [\$key, \$changes]);
        }
        \$this->events[\$key] = \$event;

        return \$this;
    }

    /**
     * Remove events.
     */
    public function removeTriggerEvent(TriggerEvent \$event): void
    {
        \$this->events->removeElement(\$event);
    }

    /**
     * Get events.
     *
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getEvents()
    {
        return \$this->events;
    }

    /**
     * Set publishUp.
     *
     * @param \\DateTime \$publishUp
     *
     * @return Point
     */
    public function setPublishUp(\$publishUp)
    {
        \$this->isChanged('publishUp', \$publishUp);
        \$this->publishUp = \$publishUp;

        return \$this;
    }

    /**
     * Get publishUp.
     *
     * @return \\DateTimeInterface
     */
    public function getPublishUp()
    {
        return \$this->publishUp;
    }

    /**
     * Set publishDown.
     *
     * @param \\DateTime \$publishDown
     *
     * @return Point
     */
    public function setPublishDown(\$publishDown)
    {
        \$this->isChanged('publishDown', \$publishDown);
        \$this->publishDown = \$publishDown;

        return \$this;
    }

    /**
     * Get publishDown.
     *
     * @return \\DateTimeInterface
     */
    public function getPublishDown()
    {
        return \$this->publishDown;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return \$this->points;
    }

    /**
     * @param mixed \$points
     */
    public function setPoints(\$points): void
    {
        \$this->isChanged('points', \$points);
        \$this->points = \$points;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return \$this->color;
    }

    /**
     * @param mixed \$color
     */
    public function setColor(\$color): void
    {
        \$this->color = \$color;
    }

    /**
     * @return mixed
     */
    public function getTriggerExistingLeads()
    {
        return \$this->triggerExistingLeads;
    }

    /**
     * @param mixed \$triggerExistingLeads
     */
    public function setTriggerExistingLeads(\$triggerExistingLeads): void
    {
        \$this->triggerExistingLeads = \$triggerExistingLeads;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @param mixed \$category
     */
    public function setCategory(\$category): void
    {
        \$this->category = \$category;
    }

    public function getGroup(): ?Group
    {
        return \$this->group;
    }

    public function setGroup(Group \$group): void
    {
        \$this->group = \$group;
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
        return "@bundles/PointBundle/Entity/Trigger.php";
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
        return new Source("", "@bundles/PointBundle/Entity/Trigger.php", "/app/docroot/app/bundles/PointBundle/Entity/Trigger.php");
    }
}
