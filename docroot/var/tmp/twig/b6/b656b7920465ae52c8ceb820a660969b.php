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

/* @bundles/IntegrationsBundle/Sync/SyncService/SyncService.php */
class __TwigTemplate_6ae8dbb712d722dd32998bb2c0cd31c7 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncService;

use GuzzleHttp\\Exception\\ClientException;
use Mautic\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\MappingHelper;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\RelationsHelper;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\SyncDateHelper;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Notifier;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Integration\\IntegrationSyncProcess;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Internal\\MauticSyncProcess;
use Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\SyncProcess;
use Psr\\Log\\LogLevel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class SyncService implements SyncServiceInterface
{
    public function __construct(
        private MauticSyncDataExchange \$internalSyncDataExchange,
        private SyncDateHelper \$syncDateHelper,
        private MappingHelper \$mappingHelper,
        private RelationsHelper \$relationsHelper,
        private SyncIntegrationsHelper \$syncIntegrationsHelper,
        private EventDispatcherInterface \$eventDispatcher,
        private Notifier \$notifier,
        private IntegrationSyncProcess \$integratinSyncProcess,
        private MauticSyncProcess \$mauticSyncProcess
    ) {
    }

    /**
     * @throws \\Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException
     */
    public function processIntegrationSync(InputOptionsDAO \$inputOptionsDAO): void
    {
        \$integrationSyncProcess = new SyncProcess(
            \$this->syncDateHelper,
            \$this->mappingHelper,
            \$this->relationsHelper,
            \$this->integratinSyncProcess,
            \$this->mauticSyncProcess,
            \$this->eventDispatcher,
            \$this->notifier,
            \$this->syncIntegrationsHelper->getMappingManual(\$inputOptionsDAO->getIntegration()),
            \$this->internalSyncDataExchange,
            \$this->syncIntegrationsHelper->getSyncDataExchange(\$inputOptionsDAO->getIntegration()),
            \$inputOptionsDAO,
            \$this
        );

        DebugLogger::log(
            \$inputOptionsDAO->getIntegration(),
            sprintf(
                'Starting %s sync from %s date/time',
                \$inputOptionsDAO->isFirstTimeSync() ? 'first time' : 'subsequent',
                \$inputOptionsDAO->getStartDateTime() ? \$inputOptionsDAO->getStartDateTime()->format('Y-m-d H:i:s') : 'yet to be determined'
            ),
            self::class.':'.__FUNCTION__
        );

        try {
            \$integrationSyncProcess->execute();
        } catch (ClientException \$exception) {
            // The sync failed to communicate with the integration so log it
            DebugLogger::log(\$inputOptionsDAO->getIntegration(), \$exception->getMessage(), null, [], LogLevel::ERROR);
        }
    }

    public function initiateDebugLogger(DebugLogger \$logger): void
    {
        // Yes it's a hack to prevent from having to pass the logger as a dependency into dozens of classes
        // So not doing anything with the logger, just need Symfony to initiate the service
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
        return "@bundles/IntegrationsBundle/Sync/SyncService/SyncService.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncService/SyncService.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncService/SyncService.php");
    }
}
