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

/* @bundles/WebhookBundle/Entity/WebhookQueueRepository.php */
class __TwigTemplate_4ef322b2e9ba6837e0f9070897f9fd1d extends Template
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

namespace Mautic\\WebhookBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<WebhookQueue>
 */
class WebhookQueueRepository extends CommonRepository
{
    /**
     * Deletes all the webhook queues by ID.
     *
     * @param \$idList array of webhookqueue IDs
     */
    public function deleteQueuesById(array \$idList): void
    {
        // don't process the list if there are no items in it
        if (!count(\$idList)) {
            return;
        }

        \$qb = \$this->_em->getConnection()->createQueryBuilder();
        \$qb->delete(MAUTIC_TABLE_PREFIX.'webhook_queue')
            ->where(
                \$qb->expr()->in('id', \$idList)
            )
            ->executeStatement();
    }

    /**
     * Gets a count of the webhook queues filtered by the webhook id.
     *
     * @param \$id int (for Webhooks)
     *
     * @deprecated Use exists() instead
     */
    public function getQueueCountByWebhookId(\$id): int
    {
        // if no id was sent (the hook was deleted) then return a count of 0
        if (!\$id) {
            return 0;
        }

        \$qb = \$this->_em->getConnection()->createQueryBuilder();

        return (int) \$qb->select('count(*) as webhook_count')
            ->from(MAUTIC_TABLE_PREFIX.'webhook_queue', \$this->getTableAlias())
            ->where(\$this->getTableAlias().'.webhook_id = :id')
            ->setParameter('id', \$id)
            ->executeQuery()
            ->fetchOne();
    }

    /**
     * Check if there is webhook to process.
     */
    public function exists(int \$id): bool
    {
        \$qb     = \$this->_em->getConnection()->createQueryBuilder();
        \$result = \$qb->select(\$this->getTableAlias().'.id')
            ->from(MAUTIC_TABLE_PREFIX.'webhook_queue', \$this->getTableAlias())
            ->where(\$this->getTableAlias().'.webhook_id = :id')
            ->setParameter('id', \$id)
            ->setMaxResults(1)
            ->executeQuery()
            ->fetchOne();

        return (bool) \$result;
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
        return "@bundles/WebhookBundle/Entity/WebhookQueueRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/WebhookQueueRepository.php", "/app/docroot/app/bundles/WebhookBundle/Entity/WebhookQueueRepository.php");
    }
}
