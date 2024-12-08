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

/* @bundles/LeadBundle/Entity/LeadDeviceRepository.php */
class __TwigTemplate_017887818ed8558a9734cb30e79cc7ad extends Template
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

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<LeadDevice>
 */
class LeadDeviceRepository extends CommonRepository
{
    /**
     * {@inhertidoc}.
     *
     * @return Paginator
     */
    public function getEntities(array \$args = [])
    {
        \$q = \$this
            ->createQueryBuilder(\$this->getTableAlias())
            ->select(\$this->getTableAlias());
        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    public function getTableAlias(): string
    {
        return 'd';
    }

    /**
     * @return array
     */
    public function getDevice(\$lead, \$deviceNames = null, \$deviceBrands = null, \$deviceModels = null, \$deviceOss = null, \$deviceId = null)
    {
        \$sq = \$this->_em->getConnection()->createQueryBuilder();
        \$sq->select('es.id as id, es.device as device')
            ->from(MAUTIC_TABLE_PREFIX.'lead_devices', 'es');

        if (null !== \$deviceNames) {
            if (!is_array(\$deviceNames)) {
                \$deviceNames = [\$deviceNames];
            }
            foreach (\$deviceNames as \$key => \$deviceName) {
                \$sq->andWhere(
                    \$sq->expr()->eq('es.device', ':device'.\$key)
                )
                    ->setParameter('device'.\$key, \$deviceName);
            }
        }

        if (null !== \$deviceBrands) {
            if (!is_array(\$deviceBrands)) {
                \$deviceBrands = [\$deviceBrands];
            }
            foreach (\$deviceBrands as \$key => \$deviceBrand) {
                \$sq->andWhere(
                    \$sq->expr()->eq('es.device_brand', ':deviceBrand'.\$key)
                )
                    ->setParameter('deviceBrand'.\$key, \$deviceBrand);
            }
        }

        if (null !== \$deviceModels) {
            if (!is_array(\$deviceModels)) {
                \$deviceModels = [\$deviceModels];
            }
            foreach (\$deviceModels as \$key => \$deviceModel) {
                \$sq->andWhere(
                    \$sq->expr()->eq('es.device_model', ':deviceModel'.\$key)
                )
                    ->setParameter('deviceModel'.\$key, \$deviceModel);
            }
        }

        if (null !== \$deviceOss) {
            if (!is_array(\$deviceOss)) {
                \$deviceOss = [\$deviceOss];
            }
            foreach (\$deviceOss as \$key => \$deviceOs) {
                \$sq->andWhere(
                    \$sq->expr()->eq('es.device_os_name', ':deviceOs'.\$key)
                )
                    ->setParameter('deviceOs'.\$key, \$deviceOs);
            }
        }

        if (null !== \$deviceId) {
            \$sq->andWhere(
                \$sq->expr()->eq('es.id', \$deviceId)
            );
        } elseif (null !== \$lead) {
            \$sq->andWhere(
                \$sq->expr()->eq('es.lead_id', \$lead->getId())
            );
        }

        // get totals
        \$device = \$sq->executeQuery()->fetchAllAssociative();

        return (!empty(\$device)) ? \$device[0] : [];
    }

    /**
     * @param string \$trackingId
     *
     * @return LeadDevice|null
     */
    public function getByTrackingId(\$trackingId)
    {
        /** @var LeadDevice \$leadDevice */
        \$leadDevice = \$this->findOneBy([
            'trackingId' => \$trackingId,
        ]);

        return \$leadDevice;
    }

    /**
     * Check if there is at least one device with filled tracking code assigned to Lead.
     */
    public function isAnyLeadDeviceTracked(Lead \$lead): bool
    {
        \$alias = \$this->getTableAlias();
        \$qb    = \$this->createQueryBuilder(\$alias);
        \$qb->where(
            \$qb->expr()->andX(
                \$qb->expr()->eq(\$alias.'.lead', ':lead'),
                \$qb->expr()->isNotNull(\$alias.'.trackingId')
            )
        )
            ->setParameter('lead', \$lead);

        \$devices = \$qb->getQuery()->getResult();

        return !empty(\$devices);
    }

    public function getLeadDevices(Lead \$lead): array
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        return \$qb->select('*')
            ->from(MAUTIC_TABLE_PREFIX.'lead_devices', 'es')
            ->where('lead_id = :leadId')
            ->setParameter('leadId', (int) \$lead->getId())
            ->orderBy('date_added', 'desc')
            ->executeQuery()
            ->fetchAllAssociative();
    }

    /**
     * Updates lead ID (e.g. after a lead merge).
     */
    public function updateLead(\$fromLeadId, \$toLeadId): void
    {
        \$q = \$this->getEntityManager()->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'lead_devices')
            ->set('lead_id', (int) \$toLeadId)
            ->where('lead_id = '.(int) \$fromLeadId)
            ->executeStatement();
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
        return "@bundles/LeadBundle/Entity/LeadDeviceRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/LeadDeviceRepository.php", "/app/docroot/app/bundles/LeadBundle/Entity/LeadDeviceRepository.php");
    }
}
