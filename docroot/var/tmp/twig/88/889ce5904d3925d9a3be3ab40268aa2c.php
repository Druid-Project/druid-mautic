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

/* @bundles/SmsBundle/Broadcast/BroadcastQuery.php */
class __TwigTemplate_abb30b06a082340348f64a96cf0ba866 extends Template
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

namespace Mautic\\SmsBundle\\Broadcast;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CampaignBundle\\Entity\\ContactLimiterTrait;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Mautic\\SmsBundle\\Entity\\Sms;
use Mautic\\SmsBundle\\Model\\SmsModel;

class BroadcastQuery
{
    use ContactLimiterTrait;

    /**
     * @var \\Doctrine\\DBAL\\Query\\QueryBuilder
     */
    private \$query;

    public function __construct(
        private EntityManager \$entityManager,
        private SmsModel \$smsModel
    ) {
    }

    public function getPendingContacts(Sms \$sms, ContactLimiter \$contactLimiter): array
    {
        \$query = \$this->getBasicQuery(\$sms);
        \$query->select('DISTINCT l.id, ll.id as listId');
        \$this->updateQueryFromContactLimiter('lll', \$query, \$contactLimiter);

        return \$query->executeQuery()->fetchAllAssociative();
    }

    /**
     * @return bool|string
     */
    public function getPendingCount(Sms \$sms)
    {
        \$query = \$this->getBasicQuery(\$sms);
        \$query->select('COUNT(DISTINCT l.id)');

        return \$query->executeQuery()->fetchOne();
    }

    /**
     * @return \\Doctrine\\DBAL\\Query\\QueryBuilder
     */
    private function getBasicQuery(Sms \$sms)
    {
        \$this->query = \$this->smsModel->getRepository()->getSegmentsContactsQuery(\$sms->getId());
        \$this->query->andWhere(
            \$this->query->expr()->or(
                \$this->query->expr()->or(
                    \$this->query->expr()->isNotNull('l.mobile'),
                    \$this->query->expr()->neq('l.mobile', \$this->query->expr()->literal(''))
                ),
                \$this->query->expr()->or(
                    \$this->query->expr()->isNotNull('l.phone'),
                    \$this->query->expr()->neq('l.phone', \$this->query->expr()->literal(''))
                )
            )
        );
        \$this->excludeStatsRecords(\$sms->getId());
        \$this->excludeDnc();
        \$this->excludeQueue();

        return \$this->query;
    }

    private function excludeStatsRecords(int \$smsId): void
    {
        // Do not include leads that have already received text message
        \$statQb = \$this->entityManager->getConnection()->createQueryBuilder();
        \$statQb->select('null')
            ->from(MAUTIC_TABLE_PREFIX.'sms_message_stats', 'stat')
            ->where(
                \$statQb->expr()->and(
                    \$statQb->expr()->eq('stat.lead_id', 'l.id'),
                    \$statQb->expr()->eq('stat.sms_id', \$smsId)
                )
            );

        \$this->query->andWhere(sprintf('NOT EXISTS (%s)', \$statQb->getSQL()));
    }

    private function excludeDnc(): void
    {
        // Do not include leads in the do not contact table
        \$dncQb = \$this->entityManager->getConnection()->createQueryBuilder();
        \$dncQb->select('null')
            ->from(MAUTIC_TABLE_PREFIX.'lead_donotcontact', 'dnc')
            ->where(
                \$dncQb->expr()->and(
                    \$dncQb->expr()->eq('dnc.lead_id', 'l.id'),
                    \$dncQb->expr()->eq('dnc.channel', \$dncQb->expr()->literal('sms'))
                )
            );
        \$this->query->andWhere(sprintf('NOT EXISTS (%s)', \$dncQb->getSQL()));
    }

    private function excludeQueue(): void
    {
        // Do not include contacts where the message is pending in the message queue
        \$mqQb = \$this->entityManager->getConnection()->createQueryBuilder();
        \$mqQb->select('null')
            ->from(MAUTIC_TABLE_PREFIX.'message_queue', 'mq')
            ->where(
                \$mqQb->expr()->and(
                    \$mqQb->expr()->eq('mq.lead_id', 'l.id'),
                    \$mqQb->expr()->neq('mq.status', \$mqQb->expr()->literal(MessageQueue::STATUS_SENT)),
                    \$mqQb->expr()->eq('mq.channel', \$mqQb->expr()->literal('sms'))
                )
            );
        \$this->query->andWhere(sprintf('NOT EXISTS (%s)', \$mqQb->getSQL()));
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
        return "@bundles/SmsBundle/Broadcast/BroadcastQuery.php";
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
        return new Source("", "@bundles/SmsBundle/Broadcast/BroadcastQuery.php", "/app/docroot/app/bundles/SmsBundle/Broadcast/BroadcastQuery.php");
    }
}
