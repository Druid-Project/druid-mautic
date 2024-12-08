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

/* @bundles/NotificationBundle/Entity/StatRepository.php */
class __TwigTemplate_4165a69ff57daf5995231c74bbe9fb77 extends Template
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

namespace Mautic\\NotificationBundle\\Entity;

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

/**
 * @extends CommonRepository<Stat>
 */
class StatRepository extends CommonRepository
{
    /**
     * @return mixed
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getNotificationStatus(\$trackingHash)
    {
        \$q = \$this->createQueryBuilder('s');
        \$q->select('s')
            ->leftJoin('s.lead', 'l')
            ->leftJoin('s.notification', 'e')
            ->where(
                \$q->expr()->eq('s.trackingHash', ':hash')
            )
            ->setParameter('hash', \$trackingHash);

        \$result = \$q->getQuery()->getResult();

        return (!empty(\$result)) ? \$result[0] : null;
    }

    /**
     * Updates lead ID (e.g. after a lead merge).
     */
    public function getSentStats(\$notificationId, \$listId = null): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->select('s.lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'push_notification_stats', 's')
            ->where('s.notification_id = :notification')
            ->setParameter('notification', \$notificationId);

        if (\$listId) {
            \$q->andWhere('s.list_id = :list')
                ->setParameter('list', \$listId);
        }

        \$result = \$q->executeQuery()->fetchAllAssociative();

        // index by lead
        \$stats = [];
        foreach (\$result as \$r) {
            \$stats[\$r['lead_id']] = \$r['lead_id'];
        }

        unset(\$result);

        return \$stats;
    }

    /**
     * @param int|array \$notificationIds
     * @param int       \$listId
     *
     * @return int
     */
    public function getSentCount(\$notificationIds = null, \$listId = null)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();

        \$q->select('count(s.id) as sent_count')
            ->from(MAUTIC_TABLE_PREFIX.'push_notification_stats', 's');

        if (\$notificationIds) {
            if (!is_array(\$notificationIds)) {
                \$notificationIds = [(int) \$notificationIds];
            }
            \$q->where(
                \$q->expr()->in('s.notification_id', \$notificationIds)
            );
        }

        if (\$listId) {
            \$q->andWhere('s.list_id = '.(int) \$listId);
        }

        \$q->andWhere('s.is_failed = :false')
            ->setParameter('false', false, 'boolean');

        \$results = \$q->executeQuery()->fetchAllAssociative();

        return (isset(\$results[0])) ? \$results[0]['sent_count'] : 0;
    }

    /**
     * @param array|int \$notificationIds
     * @param int       \$listId
     *
     * @return int
     */
    public function getReadCount(\$notificationIds = null, \$listId = null)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();

        \$q->select('count(s.id) as read_count')
            ->from(MAUTIC_TABLE_PREFIX.'push_notification_stats', 's');

        if (\$notificationIds) {
            if (!is_array(\$notificationIds)) {
                \$notificationIds = [(int) \$notificationIds];
            }
            \$q->where(
                \$q->expr()->in('s.notification_id', \$notificationIds)
            );
        }

        if (\$listId) {
            \$q->andWhere('s.list_id = '.(int) \$listId);
        }

        \$q->andWhere('is_read = :true')
            ->setParameter('true', true, 'boolean');
        \$results = \$q->executeQuery()->fetchAllAssociative();

        return (isset(\$results[0])) ? \$results[0]['read_count'] : 0;
    }

    /**
     * Get a contact's notifications stat.
     *
     * @param int \$leadId
     *
     * @return array
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getLeadStats(\$leadId, array \$options = [])
    {
        \$query = \$this->createQueryBuilder('s');

        \$query->select('IDENTITY(s.notification) AS notification_id, s.id, s.dateRead, s.dateSent, e.title, s.isRead, s.retryCount, IDENTITY(s.list) AS list_id, l.name as list_name, s.trackingHash as idHash, s.clickDetails')
            ->leftJoin(Notification::class, 'e', 'WITH', 'e.id = s.notification')
            ->leftJoin(\\Mautic\\LeadBundle\\Entity\\LeadList::class, 'l', 'WITH', 'l.id = s.list')
            ->where(
                \$query->expr()->andX(
                    \$query->expr()->eq('IDENTITY(s.lead)', \$leadId),
                    \$query->expr()->eq('s.isFailed', ':false'))
            )->setParameter('false', false, 'boolean');

        if (isset(\$options['search']) && \$options['search']) {
            \$query->andWhere(
                \$query->expr()->like('e.title', \$query->expr()->literal('%'.\$options['search'].'%'))
            );
        }

        if (isset(\$options['order'])) {
            [\$orderBy, \$orderByDir] = \$options['order'];

            \$orderBy = match (\$orderBy) {
                'eventLabel' => 'e.title',
                default      => 'e.dateRead, e.dateSent',
            };

            \$query->orderBy(\$orderBy, \$orderByDir);
        }

        if (!empty(\$options['limit'])) {
            \$query->setMaxResults(\$options['limit']);

            if (!empty(\$options['start'])) {
                \$query->setFirstResult(\$options['start']);
            }
        }

        \$stats = \$query->getQuery()->getArrayResult();

        foreach (\$stats as &\$stat) {
            \$dateSent = new DateTimeHelper(\$stat['dateSent']);
            if (!empty(\$stat['dateSent']) && !empty(\$stat['dateRead'])) {
                \$stat['timeToRead'] = \$dateSent->getDiff(\$stat['dateRead']);
            } else {
                \$stat['timeToRead'] = false;
            }
        }

        return \$stats;
    }

    /**
     * Get pie graph data for Sent, Read and Failed notifications count.
     *
     * @param QueryBuilder \$query
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getMostNotifications(\$query, \$limit = 10, \$offset = 0): array
    {
        \$query
            ->setMaxResults(\$limit)
            ->setFirstResult(\$offset);

        return \$query->executeQuery()->fetchAllAssociative();
    }

    /**
     * Get sent counts based grouped by notification Id.
     *
     * @param array \$notificationIds
     */
    public function getSentCounts(\$notificationIds = [], \\DateTime \$fromDate = null): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->select('s.notification_id, count(n.id) as sentcount')
            ->from(MAUTIC_TABLE_PREFIX.'push_notification_stats', 's')
            ->where(
                \$q->expr()->in('s.notification_id', \$notificationIds)
            );

        if (null !== \$fromDate) {
            // make sure the date is UTC
            \$dt = new DateTimeHelper(\$fromDate);
            \$q->andWhere(
                \$q->expr()->gte('s.date_read', \$q->expr()->literal(\$dt->toUtcString()))
            );
        }
        \$q->groupBy('s.notification_id');

        // get a total number of sent notifications first
        \$results = \$q->executeQuery()->fetchAllAssociative();

        \$counts = [];

        foreach (\$results as \$r) {
            \$counts[\$r['notification_id']] = \$r['sentcount'];
        }

        return \$counts;
    }

    /**
     * Updates lead ID (e.g. after a lead merge).
     */
    public function updateLead(\$fromLeadId, \$toLeadId): void
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'push_notification_stats')
            ->set('notification_id', (int) \$toLeadId)
            ->where('notification_id = '.(int) \$fromLeadId)
            ->executeStatement();
    }

    /**
     * Delete a stat.
     */
    public function deleteStat(\$id): void
    {
        \$this->_em->getConnection()->delete(MAUTIC_TABLE_PREFIX.'push_notification_stats', ['id' => (int) \$id]);
    }

    public function getTableAlias(): string
    {
        return 's';
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
        return "@bundles/NotificationBundle/Entity/StatRepository.php";
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
        return new Source("", "@bundles/NotificationBundle/Entity/StatRepository.php", "/app/docroot/app/bundles/NotificationBundle/Entity/StatRepository.php");
    }
}