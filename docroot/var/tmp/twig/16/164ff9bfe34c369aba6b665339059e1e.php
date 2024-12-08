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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/MauticSyncDataExchange.php */
class __TwigTemplate_49c576719e00cfbbeb6e2e35ce7a5a3c extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange;

use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectMappingsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO as ReportObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectDeletedException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\MappingHelper;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\SyncDateHelper;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Helper\\FieldHelper;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner\\OrderExecutioner;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder\\FullObjectReportBuilder;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ReportBuilder\\PartialObjectReportBuilder;

class MauticSyncDataExchange implements SyncDataExchangeInterface
{
    public const NAME           = 'mautic';

    public const OBJECT_CONTACT = 'lead'; // kept as lead for BC

    public const OBJECT_COMPANY = 'company';

    public function __construct(
        private FieldChangeRepository \$fieldChangeRepository,
        private FieldHelper \$fieldHelper,
        private MappingHelper \$mappingHelper,
        private FullObjectReportBuilder \$fullObjectReportBuilder,
        private PartialObjectReportBuilder \$partialObjectReportBuilder,
        private OrderExecutioner \$orderExecutioner,
        private SyncDateHelper \$syncDateHelper
    ) {
    }

    public function getSyncReport(RequestDAO \$requestDAO): ReportDAO
    {
        if (\$requestDAO->isFirstTimeSync() || \$requestDAO->getInputOptionsDAO()->getMauticObjectIds()) {
            return \$this->fullObjectReportBuilder->buildReport(\$requestDAO);
        }

        return \$this->partialObjectReportBuilder->buildReport(\$requestDAO);
    }

    public function executeSyncOrder(OrderDAO \$syncOrderDAO): ObjectMappingsDAO
    {
        return \$this->orderExecutioner->execute(\$syncOrderDAO);
    }

    /**
     * @return ReportObjectDAO
     *
     * @throws ObjectNotFoundException
     * @throws ObjectNotSupportedException
     * @throws ObjectDeletedException
     */
    public function getConflictedInternalObject(MappingManualDAO \$mappingManualDAO, string \$internalObjectName, ReportObjectDAO \$integrationObjectDAO)
    {
        // Check to see if we have a match
        \$internalObjectDAO = \$this->mappingHelper->findMauticObject(\$mappingManualDAO, \$internalObjectName, \$integrationObjectDAO);

        if (!\$internalObjectDAO->getObjectId()) {
            return new ReportObjectDAO(\$internalObjectName, null);
        }

        \$fieldChanges = \$this->fieldChangeRepository->findChangesForObject(
            \$mappingManualDAO->getIntegration(),
            \$this->mappingHelper->getMauticEntityClassName(\$internalObjectName),
            \$internalObjectDAO->getObjectId()
        );

        foreach (\$fieldChanges as \$fieldChange) {
            \$internalObjectDAO->addField(
                \$this->fieldHelper->getFieldChangeObject(\$fieldChange)
            );
        }

        return \$internalObjectDAO;
    }

    /**
     * @param ObjectChangeDAO[] \$objectChanges
     */
    public function cleanupProcessedObjects(array \$objectChanges): void
    {
        foreach (\$objectChanges as \$changedObjectDAO) {
            try {
                \$object   = \$this->fieldHelper->getFieldObjectName(\$changedObjectDAO->getMappedObject());
                \$objectId = \$changedObjectDAO->getMappedObjectId();

                \$this->fieldChangeRepository->deleteEntitiesForObject(
                    (int) \$objectId,
                    \$object,
                    \$changedObjectDAO->getIntegration(),
                    \$this->syncDateHelper->getInternalSyncStartDateTime()
                );
            } catch (ObjectNotSupportedException \$exception) {
                DebugLogger::log(
                    self::NAME,
                    \$exception->getMessage(),
                    self::class.':'.__FUNCTION__
                );
            }
        }
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
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/MauticSyncDataExchange.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/MauticSyncDataExchange.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/MauticSyncDataExchange.php");
    }
}
