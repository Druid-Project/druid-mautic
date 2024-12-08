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

/* @bundles/LeadBundle/Entity/PointsChangeLog.php */
class __TwigTemplate_3e3f06d1e5070accb4b4932d8dcc7e16 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\PointBundle\\Entity\\Group;

class PointsChangeLog
{
    public const TABLE_NAME = 'lead_points_change_log';
    /**
     * @var string
     */
    private \$id;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var IpAddress|null
     */
    private \$ipAddress;

    /**
     * @var string
     */
    private \$type;

    /**
     * @var string
     */
    private \$eventName;

    /**
     * @var string
     */
    private \$actionName;

    /**
     * @var int
     */
    private \$delta;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    private ?Group \$group = null;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable(self::TABLE_NAME)
            ->setCustomRepositoryClass(PointsChangeLogRepository::class)
            ->addIndex(['date_added'], 'point_date_added');

        \$builder->addBigIntIdField();

        \$builder->addLead(false, 'CASCADE', false, 'pointsChangeLog');

        \$builder->addIpAddress(true);

        \$builder->createField('type', 'text')
            ->length(50)
            ->build();

        \$builder->createField('eventName', 'string')
            ->columnName('event_name')
            ->build();

        \$builder->createField('actionName', 'string')
            ->columnName('action_name')
            ->build();

        \$builder->addField('delta', 'integer');

        \$builder->createManyToOne('group', Group::class)
            ->addJoinColumn('group_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->addDateAdded();
    }

    /**
     * Get id.
     */
    public function getId(): int
    {
        return (int) \$this->id;
    }

    /**
     * Set type.
     *
     * @param string \$type
     *
     * @return PointsChangeLog
     */
    public function setType(\$type)
    {
        \$this->type = \$type;

        return \$this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Set eventName.
     *
     * @param string \$eventName
     *
     * @return PointsChangeLog
     */
    public function setEventName(\$eventName)
    {
        \$this->eventName = \$eventName;

        return \$this;
    }

    /**
     * Get eventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return \$this->eventName;
    }

    /**
     * Set actionName.
     *
     * @param string \$actionName
     *
     * @return PointsChangeLog
     */
    public function setActionName(\$actionName)
    {
        \$this->actionName = \$actionName;

        return \$this;
    }

    /**
     * Get actionName.
     *
     * @return string
     */
    public function getActionName()
    {
        return \$this->actionName;
    }

    /**
     * Set delta.
     *
     * @param int \$delta
     *
     * @return PointsChangeLog
     */
    public function setDelta(\$delta)
    {
        \$this->delta = \$delta;

        return \$this;
    }

    /**
     * Get delta.
     *
     * @return int
     */
    public function getDelta()
    {
        return \$this->delta;
    }

    /**
     * Set dateAdded.
     *
     * @param \\DateTime \$dateAdded
     *
     * @return PointsChangeLog
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * Get dateAdded.
     *
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * Set lead.
     *
     * @return PointsChangeLog
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * Get lead.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return PointsChangeLog
     */
    public function setIpAddress(IpAddress \$ipAddress)
    {
        \$this->ipAddress = \$ipAddress;

        return \$this;
    }

    /**
     * @return IpAddress
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
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
        return "@bundles/LeadBundle/Entity/PointsChangeLog.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/PointsChangeLog.php", "/app/docroot/app/bundles/LeadBundle/Entity/PointsChangeLog.php");
    }
}
