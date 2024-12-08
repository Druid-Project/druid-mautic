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

/* @bundles/PointBundle/Entity/GroupContactScore.php */
class __TwigTemplate_c0077668bbc7828759a025d777c7259d extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CommonEntity;
use Mautic\\LeadBundle\\Entity\\Lead;

class GroupContactScore extends CommonEntity
{
    public const TABLE_NAME = 'point_group_contact_score';

    private Lead \$contact;

    private Group \$group;

    private int \$score;

    public function __construct()
    {
        \$this->contact = new Lead();
        \$this->group   = new Group();
        \$this->score   = 0;
    }

    /**
     * @param ORM\\ClassMetadata<GroupContactScore> \$metadata
     */
    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable(self::TABLE_NAME)
            ->setCustomRepositoryClass(GroupContactScoreRepository::class);

        \$builder->addContact(false, 'CASCADE', true, 'groupScores');

        \$builder->createManyToOne('group', Group::class)
            ->isPrimaryKey()
            ->addJoinColumn('group_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->createField('score', Types::INTEGER)
            ->build();
    }

    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('groupContactScore')
            ->addListProperties(
                [
                    'score',
                    'group',
                ]
            )
            ->addProperties(
                [
                    'score',
                    'group',
                ]
            )
            ->build();
    }

    public function getContact(): Lead
    {
        return \$this->contact;
    }

    public function setContact(Lead \$contact): void
    {
        \$this->contact = \$contact;
    }

    public function getGroup(): Group
    {
        return \$this->group;
    }

    public function setGroup(Group \$group): void
    {
        \$this->group = \$group;
    }

    public function getScore(): int
    {
        return \$this->score;
    }

    public function setScore(int \$score): void
    {
        \$this->score = \$score;
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
        return "@bundles/PointBundle/Entity/GroupContactScore.php";
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
        return new Source("", "@bundles/PointBundle/Entity/GroupContactScore.php", "/app/docroot/app/bundles/PointBundle/Entity/GroupContactScore.php");
    }
}
