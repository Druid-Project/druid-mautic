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

/* @bundles/CoreBundle/Entity/IpAddressRepository.php */
class __TwigTemplate_c4811bc0e84c267e7f085cee6c23e368 extends Template
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

use Doctrine\\DBAL\\Exception as DBALException;

/**
 * @extends CommonRepository<IpAddress>
 */
class IpAddressRepository extends CommonRepository
{
    /**
     * Count how many unique IP addresses is there.
     */
    public function countIpAddresses(): int
    {
        \$q = \$this->createQueryBuilder('i');
        \$q->select('COUNT(DISTINCT i.id) as unique');
        \$results = \$q->getQuery()->getSingleResult();

        if (!isset(\$results['unique'])) {
            return 0;
        }

        return (int) \$results['unique'];
    }

    /**
     * Get IP addresses that are not being used in any other table.
     *
     * @return array<int, array<int>>
     *
     * @throws DBALException
     */
    public function getUnusedIpAddressesIds(int \$limit): array
    {
        \$prefix = MAUTIC_TABLE_PREFIX;

        \$sql = <<<SQL
            SELECT {\$prefix}ip_addresses.id FROM {\$prefix}ip_addresses
                LEFT JOIN {\$prefix}asset_downloads
                    ON {\$prefix}asset_downloads.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}campaign_lead_event_log
                    ON {\$prefix}campaign_lead_event_log.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}email_stats
                    ON {\$prefix}email_stats.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}email_stats_devices
                    ON {\$prefix}email_stats_devices.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}form_submissions
                    ON {\$prefix}form_submissions.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}lead_ips_xref
                    ON {\$prefix}lead_ips_xref.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}lead_points_change_log
                    ON {\$prefix}lead_points_change_log.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}page_hits
                    ON {\$prefix}page_hits.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}point_lead_action_log
                    ON {\$prefix}point_lead_action_log.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}point_lead_event_log
                    ON {\$prefix}point_lead_event_log.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}push_notification_stats
                    ON {\$prefix}push_notification_stats.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}sms_message_stats
                    ON {\$prefix}sms_message_stats.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}stage_lead_action_log
                    ON {\$prefix}stage_lead_action_log.ip_id = {\$prefix}ip_addresses.id
                LEFT JOIN {\$prefix}video_hits
                    ON {\$prefix}video_hits.ip_id = {\$prefix}ip_addresses.id
            WHERE {\$prefix}asset_downloads.id IS NULL
              AND {\$prefix}campaign_lead_event_log.id IS NULL
              AND {\$prefix}email_stats.id IS NULL
              AND {\$prefix}email_stats_devices.id IS NULL
              AND {\$prefix}form_submissions.id IS NULL
              AND {\$prefix}lead_ips_xref.lead_id IS NULL
              AND {\$prefix}lead_points_change_log.id IS NULL
              AND {\$prefix}page_hits.id IS NULL
              AND {\$prefix}point_lead_action_log.point_id IS NULL
              AND {\$prefix}point_lead_event_log.event_id IS NULL
              AND {\$prefix}push_notification_stats.id IS NULL
              AND {\$prefix}sms_message_stats.id IS NULL
              AND {\$prefix}stage_lead_action_log.stage_id IS NULL
              AND {\$prefix}video_hits.id IS NULL
            LIMIT :limit
SQL;

        \$params = ['limit' => \$limit];
        \$types  = ['limit' => \\PDO::PARAM_INT];

        return \$this->_em->getConnection()->executeQuery(\$sql, \$params, \$types)->fetchFirstColumn();
    }

    /**
     * @param array<int, array<int>> \$ids
     *
     * @throws DBALException
     */
    public function deleteUnusedIpAddresses(array \$ids): int
    {
        \$prefix    = MAUTIC_TABLE_PREFIX;
        \$ids       = implode(',', \$ids);
        \$deleteSql = <<<SQL
                DELETE FROM {\$prefix}ip_addresses WHERE {\$prefix}ip_addresses.id IN ({\$ids});
SQL;

        return \$this->_em->getConnection()->executeStatement(\$deleteSql);
    }

    /**
     * @throws DBALException
     */
    public function anonymizeAllIpAddress(): int
    {
        \$table_name        = \$this->getTableName();
        \$sql               = \"UPDATE {\$table_name} SET ip_address = '*.*.*.*', ip_details = 'N;' WHERE ip_address != '*.*.*.*'\";
        \$conn              = \$this->getEntityManager()->getConnection();

        return \$conn->executeQuery(\$sql)->rowCount();
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
        return "@bundles/CoreBundle/Entity/IpAddressRepository.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/IpAddressRepository.php", "/app/docroot/app/bundles/CoreBundle/Entity/IpAddressRepository.php");
    }
}