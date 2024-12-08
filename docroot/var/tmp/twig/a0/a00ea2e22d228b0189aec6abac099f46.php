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

/* @bundles/PointBundle/Entity/PointRepository.php */
class __TwigTemplate_74eb6d77ab40ca8eef9747777d26773b extends Template
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

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Point>
 */
class PointRepository extends CommonRepository
{
    public function getEntities(array \$args = [])
    {
        \$q = \$this->_em
            ->createQueryBuilder()
            ->select(\$this->getTableAlias().', cat')
            ->from(Point::class, \$this->getTableAlias())
            ->leftJoin(\$this->getTableAlias().'.category', 'cat')
            ->leftJoin(\$this->getTableAlias().'.group', 'pl');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    public function getTableAlias(): string
    {
        return 'p';
    }

    /**
     * Get array of published actions based on type.
     *
     * @param string \$type
     *
     * @return array
     */
    public function getPublishedByType(\$type)
    {
        \$q = \$this->createQueryBuilder('p')
            ->select('partial p.{id, type, name, delta, repeatable, properties}')
            ->setParameter('type', \$type);

        // make sure the published up and down dates are good
        \$expr = \$this->getPublishedByDateExpression(\$q);
        \$expr->add(\$q->expr()->eq('p.type', ':type'));

        \$q->where(\$expr);

        return \$q->getQuery()->getResult();
    }

    /**
     * @param string \$type
     * @param int    \$leadId
     */
    public function getCompletedLeadActions(\$type, \$leadId): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('p.*')
            ->from(MAUTIC_TABLE_PREFIX.'point_lead_action_log', 'x')
            ->innerJoin('x', MAUTIC_TABLE_PREFIX.'points', 'p', 'x.point_id = p.id');

        // make sure the published up and down dates are good
        \$q->where(
            \$q->expr()->and(
                \$q->expr()->eq('p.type', ':type'),
                \$q->expr()->eq('x.lead_id', (int) \$leadId)
            )
        )
            ->setParameter('type', \$type);

        \$results = \$q->executeQuery()->fetchAllAssociative();

        \$return = [];

        foreach (\$results as \$r) {
            \$return[\$r['id']] = \$r;
        }

        return \$return;
    }

    /**
     * @param int \$leadId
     */
    public function getCompletedLeadActionsByLeadId(\$leadId): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('p.*')
            ->from(MAUTIC_TABLE_PREFIX.'point_lead_action_log', 'x')
            ->innerJoin('x', MAUTIC_TABLE_PREFIX.'points', 'p', 'x.point_id = p.id');

        // make sure the published up and down dates are good
        \$q->where(
            \$q->expr()->and(
                \$q->expr()->eq('x.lead_id', (int) \$leadId)
            )
        );

        \$results = \$q->executeQuery()->fetchAllAssociative();

        \$return = [];

        foreach (\$results as \$r) {
            \$return[\$r['id']] = \$r;
        }

        return \$return;
    }

    protected function addCatchAllWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            'p.name',
            'p.description',
        ]);
    }

    protected function addSearchCommandWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
    }

    /**
     * @return string[]
     */
    public function getSearchCommands(): array
    {
        return \$this->getStandardSearchCommands();
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
        return "@bundles/PointBundle/Entity/PointRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/PointRepository.php", "/app/docroot/app/bundles/PointBundle/Entity/PointRepository.php");
    }
}
