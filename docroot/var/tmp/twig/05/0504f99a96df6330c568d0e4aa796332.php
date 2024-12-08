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

/* @bundles/CoreBundle/Entity/NotificationRepository.php */
class __TwigTemplate_873ded9b8e1b4af2834587e94ad6703f extends Template
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

namespace Mautic\\CoreBundle\\Entity;

/**
 * @extends CommonRepository<Notification>
 */
class NotificationRepository extends CommonRepository
{
    public function getTableAlias(): string
    {
        return 'n';
    }

    public function getDefaultOrder(): array
    {
        return [
            ['n.dateAdded', 'DESC'],
        ];
    }

    /**
     * Mark user notifications as read.
     */
    public function markAllReadForUser(\$userId): void
    {
        \$this->_em->getConnection()->update(MAUTIC_TABLE_PREFIX.'notifications', ['is_read' => 1], ['user_id' => (int) \$userId]);
    }

    /**
     * Clear notifications for a user.
     *
     * @throws \\Doctrine\\DBAL\\Exception\\InvalidArgumentException
     */
    public function clearNotificationsForUser(\$userId, \$id = null, \$limit = null): void
    {
        if (!empty(\$id)) {
            \$this->getEntityManager()->getConnection()->update(
                MAUTIC_TABLE_PREFIX.'notifications',
                [
                    'is_read' => 1,
                ],
                [
                    'user_id' => (int) \$userId,
                    'id'      => \$id,
                ]
            );
        } else {
            // Only mark the first 30 read
            \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();
            \$qb->update(MAUTIC_TABLE_PREFIX.'notifications')
                ->set('is_read', 1)
                ->where('user_id = '.(int) \$userId.' AND is_read = 0')
                ->orderBy('id');

            if (\$limit) {
                // Doctrine API doesn't support updates with limits
                \$this->getEntityManager()->getConnection()->executeStatement(
                    \$qb->getSQL().\" LIMIT \$limit\"
                );
            } else {
                \$qb->executeStatement();
            }
        }
    }

    /**
     * @return mixed|null
     */
    public function getUpstreamLastDate()
    {
        \$qb = \$this->createQueryBuilder('n')
            ->select('partial n.{id, dateAdded}')
            ->where('n.type = :type')
            ->setParameter('type', 'upstream')
            ->setMaxResults(1);

        /** @var Notification \$result */
        \$result = \$qb->getQuery()->getOneOrNullResult();

        return null === \$result ? null : \$result->getDateAdded();
    }

    /**
     * Fetch notifications for this user.
     *
     * @param bool \$includeRead
     *
     * @return array
     */
    public function getNotifications(\$userId, \$afterId = null, \$includeRead = false, \$type = null, \$limit = null)
    {
        \$qb = \$this->createQueryBuilder('n');

        \$expr = \$qb->expr()->andX(
            \$qb->expr()->eq('IDENTITY(n.user)', (int) \$userId)
        );

        if (\$afterId) {
            \$expr->add(
                \$qb->expr()->gt('n.id', (int) \$afterId)
            );
        }

        if (!\$includeRead) {
            \$expr->add(
                \$qb->expr()->eq('n.isRead', 0)
            );
        }

        if (null !== \$type) {
            \$expr->add(
                \$qb->expr()->eq('n.type', ':type')
            );
            \$qb->setParameter('type', \$type);
        }

        \$qb->where(\$expr)
            ->orderBy('n.dateAdded', \\Doctrine\\Common\\Collections\\Criteria::DESC);

        if (\$limit) {
            \$qb->setMaxResults(\$limit);
        }

        return \$qb->getQuery()->getArrayResult();
    }

    public function isDuplicate(int \$userId, string \$deduplicate, \\DateTime \$from): bool
    {
        \$qb = \$this->getEntityManager()
            ->getConnection()
            ->createQueryBuilder();

        \$qb->select('1')
            ->from(MAUTIC_TABLE_PREFIX.'notifications')
            ->where('user_id = :userId')
            ->andWhere('deduplicate = :deduplicate')
            ->andWhere('date_added >= :from')
            ->setParameter('userId', \$userId)
            ->setParameter('deduplicate', \$deduplicate)
            ->setParameter('from', \$from->format('Y-m-d H:i:s'))
            ->setMaxResults(1);

        return (bool) \$qb->executeQuery()
            ->fetchOne();
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
        return "@bundles/CoreBundle/Entity/NotificationRepository.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/NotificationRepository.php", "/app/docroot/app/bundles/CoreBundle/Entity/NotificationRepository.php");
    }
}
