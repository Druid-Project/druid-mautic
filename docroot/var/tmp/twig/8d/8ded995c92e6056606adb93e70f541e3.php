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

/* @bundles/IntegrationsBundle/Sync/Notification/Handler/CompanyNotificationHandler.php */
class __TwigTemplate_c01093b1b811f8fed33122ca33c87489 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\CompanyHelper;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserNotificationHelper;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Writer;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;

class CompanyNotificationHandler implements HandlerInterface
{
    public function __construct(
        private Writer \$writer,
        private UserNotificationHelper \$userNotificationHelper,
        private CompanyHelper \$companyHelper
    ) {
    }

    public function getIntegration(): string
    {
        return MauticSyncDataExchange::NAME;
    }

    public function getSupportedObject(): string
    {
        return MauticSyncDataExchange::OBJECT_COMPANY;
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     * @throws \\Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException
     */
    public function writeEntry(NotificationDAO \$notificationDAO, string \$integrationDisplayName, string \$objectDisplayName): void
    {
        \$this->writer->writeAuditLogEntry(
            \$notificationDAO->getIntegration(),
            \$notificationDAO->getMauticObject(),
            \$notificationDAO->getMauticObjectId(),
            'sync',
            [
                'integrationObject'   => \$notificationDAO->getIntegrationObject(),
                'integrationObjectId' => \$notificationDAO->getIntegrationObjectId(),
                'message'             => \$notificationDAO->getMessage(),
            ]
        );

        \$this->userNotificationHelper->writeNotification(
            \$notificationDAO->getMessage(),
            \$integrationDisplayName,
            \$objectDisplayName,
            \$notificationDAO->getMauticObject(),
            \$notificationDAO->getMauticObjectId(),
            (string) \$this->companyHelper->getCompanyName(\$notificationDAO->getMauticObjectId())
        );
    }

    public function finalize(): void
    {
        // Nothing to do
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Handler/CompanyNotificationHandler.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Handler/CompanyNotificationHandler.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Handler/CompanyNotificationHandler.php");
    }
}
