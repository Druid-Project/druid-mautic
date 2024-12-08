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

/* @bundles/ChannelBundle/Entity/MessageRepository.php */
class __TwigTemplate_0488b77c87d6cc044dc08ab3491dbea1 extends Template
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

namespace Mautic\\ChannelBundle\\Entity;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Message>
 */
class MessageRepository extends CommonRepository
{
    /**
     * @return \\Doctrine\\ORM\\Tools\\Pagination\\Paginator
     */
    public function getEntities(array \$args = [])
    {
        \$qb = \$this->createQueryBuilder(\$this->getTableAlias());
        \$qb->join(Channel::class, 'channel', 'WITH', 'channel.message = '.\$this->getTableAlias().'.id');
        \$qb->leftJoin(Category::class, 'cat', 'WITH', 'cat.id = '.\$this->getTableAlias().'.category');
        \$qb->groupBy(\$this->getTableAlias().'.id');

        \$args['qb'] = \$qb;

        return parent::getEntities(\$args);
    }

    public function getTableAlias(): string
    {
        return 'm';
    }

    /**
     * @param string \$search
     * @param int    \$limit
     * @param int    \$start
     *
     * @return array
     */
    public function getMessageList(\$search = '', \$limit = 10, \$start = 0)
    {
        \$alias = \$this->getTableAlias();
        \$q     = \$this->createQueryBuilder(\$this->getTableAlias());
        \$q->select('partial '.\$alias.'.{id, name, description}');

        if (!empty(\$search)) {
            if (is_array(\$search)) {
                \$search = array_map('intval', \$search);
                \$q->andWhere(\$q->expr()->in(\$alias.'.id', ':search'))
                    ->setParameter('search', \$search);
            } else {
                \$q->andWhere(\$q->expr()->like(\$alias.'.name', ':search'))
                    ->setParameter('search', \"%{\$search}%\");
            }
        }
        \$q->andWhere(\$q->expr()->eq(\$alias.'.isPublished', true));

        if (!empty(\$limit)) {
            \$q->setFirstResult(\$start)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getArrayResult();
    }

    public function getMessageChannels(\$messageId): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->from(MAUTIC_TABLE_PREFIX.'message_channels', 'mc')
            ->select('id, channel, channel_id, properties')
            ->where(\$q->expr()->eq('message_id', ':messageId'))
            ->setParameter('messageId', \$messageId)
            ->andWhere(\$q->expr()->eq('is_enabled', true));

        \$results = \$q->executeQuery()->fetchAllAssociative();

        \$channels = [];
        foreach (\$results as \$result) {
            \$result['properties']         = json_decode(\$result['properties'], true);
            \$channels[\$result['channel']] = \$result;
        }

        return \$channels;
    }

    /**
     * @return array
     */
    public function getChannelMessageByChannelId(\$channelId)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->from(MAUTIC_TABLE_PREFIX.'message_channels', 'mc')
            ->select('id, channel, channel_id, properties, message_id')
            ->where(\$q->expr()->eq('id', ':channelId'))
            ->setParameter('channelId', \$channelId)
            ->andWhere(\$q->expr()->eq('is_enabled', true));

        return \$q->executeQuery()->fetchAssociative();
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
        return "@bundles/ChannelBundle/Entity/MessageRepository.php";
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
        return new Source("", "@bundles/ChannelBundle/Entity/MessageRepository.php", "/app/docroot/app/bundles/ChannelBundle/Entity/MessageRepository.php");
    }
}
