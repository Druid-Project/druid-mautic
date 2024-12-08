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

/* @bundles/LeadBundle/Entity/PointsChangeLogRepository.php */
class __TwigTemplate_04633054062852bf922d7d2e1673018b extends Template
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

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\PointBundle\\Entity\\Group;

/**
 * @extends CommonRepository<PointsChangeLog>
 */
class PointsChangeLogRepository extends CommonRepository
{
    use TimelineTrait;

    /**
     * Get a lead's point log.
     *
     * @param int|null \$leadId
     *
     * @return array
     */
    public function getLeadTimelineEvents(\$leadId = null, array \$options = [])
    {
        \$query = \$this->getEntityManager()->getConnection()->createQueryBuilder()
            ->from(MAUTIC_TABLE_PREFIX.'lead_points_change_log', 'lp')
            ->select('lp.event_name as eventName, lp.action_name as actionName, lp.date_added as dateAdded, lp.type, lp.delta, lp.id, lp.lead_id, pl.name as groupName')
            ->leftJoin('lp', MAUTIC_TABLE_PREFIX.Group::TABLE_NAME, 'pl', 'lp.group_id = pl.id');

        if (\$leadId) {
            \$query->where('lp.lead_id = '.(int) \$leadId);
        }

        if (isset(\$options['search']) && \$options['search']) {
            \$query->andWhere(\$query->expr()->or(
                \$query->expr()->like('lp.event_name', \$query->expr()->literal('%'.\$options['search'].'%')),
                \$query->expr()->like('lp.action_name', \$query->expr()->literal('%'.\$options['search'].'%'))
            ));
        }

        return \$this->getTimelineResults(\$query, \$options, 'lp.event_name', 'lp.date_added', [], ['dateAdded'], null, 'lp.id');
    }

    /**
     * Get table stat data from point log table.
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getMostPoints(QueryBuilder \$query, \$limit = 10, \$offset = 0): array
    {
        \$query->setMaxResults(\$limit)
                ->setFirstResult(\$offset);

        return \$query->executeQuery()->fetchAllAssociative();
    }

    /**
     * Get table stat data from lead table.
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getMostLeads(QueryBuilder \$query, \$limit = 10, \$offset = 0): array
    {
        \$query->setMaxResults(\$limit)
                ->setFirstResult(\$offset);

        return \$query->executeQuery()->fetchAllAssociative();
    }

    /**
     * Updates lead ID (e.g. after a lead merge).
     *
     * @param int \$fromLeadId
     * @param int \$toLeadId
     */
    public function updateLead(\$fromLeadId, \$toLeadId): void
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'lead_points_change_log')
            ->set('lead_id', (int) \$toLeadId)
            ->where('lead_id = '.(int) \$fromLeadId)
            ->executeStatement();
    }

    public function getTableAlias(): string
    {
        return 'lp';
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
        return "@bundles/LeadBundle/Entity/PointsChangeLogRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/PointsChangeLogRepository.php", "/app/docroot/app/bundles/LeadBundle/Entity/PointsChangeLogRepository.php");
    }
}
