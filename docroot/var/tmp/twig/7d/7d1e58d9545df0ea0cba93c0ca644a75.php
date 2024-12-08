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

/* @bundles/IntegrationsBundle/Sync/Notification/BulkNotification.php */
class __TwigTemplate_ae54315a526088ca1aa90d47eb2a5b37 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Service\\BulkNotificationInterface;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserNotificationBuilder;
use Mautic\\UserBundle\\Entity\\User;

class BulkNotification
{
    public function __construct(
        private BulkNotificationInterface \$bulkNotification,
        private UserNotificationBuilder \$userNotificationBuilder,
        private EntityManagerInterface \$entityManager
    ) {
    }

    public function addNotification(
        string \$deduplicateValue,
        string \$message,
        string \$integrationDisplayName,
        string \$objectDisplayName,
        string \$mauticObject,
        int \$id,
        string \$linkText
    ): void {
        \$link    = \$this->userNotificationBuilder->buildLink(\$mauticObject, \$id, \$linkText);
        \$userIds = \$this->userNotificationBuilder->getUserIds(\$mauticObject, \$id);

        foreach (\$userIds as \$userId) {
            /** @var User \$user */
            \$user = \$this->entityManager->getReference(User::class, \$userId);
            \$this->bulkNotification->addNotification(
                \$deduplicateValue,
                \$this->userNotificationBuilder->formatMessage(\$message, \$link),
                null,
                \$this->userNotificationBuilder->formatHeader(\$integrationDisplayName, \$objectDisplayName),
                'ri-refresh-line',
                null,
                \$user
            );
        }
    }

    /**
     * @param \\DateTime|null \$deduplicateDateTimeFrom If last 24 hours for deduplication does not fit, change it here
     */
    public function flush(\\DateTime \$deduplicateDateTimeFrom = null): void
    {
        \$this->bulkNotification->flush(\$deduplicateDateTimeFrom);
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
        return "@bundles/IntegrationsBundle/Sync/Notification/BulkNotification.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/BulkNotification.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/BulkNotification.php");
    }
}
