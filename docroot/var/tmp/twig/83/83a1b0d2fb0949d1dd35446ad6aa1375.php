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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php */
class __TwigTemplate_db499bcf5b42b481516ee1f6c33d1582 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper;

use Doctrine\\ORM\\ORMException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Writer;

class UserNotificationHelper
{
    public function __construct(
        private Writer \$writer,
        private UserNotificationBuilder \$userNotificationBuilder
    ) {
    }

    /**
     * @throws ORMException
     * @throws ObjectNotSupportedException
     */
    public function writeNotification(
        string \$message,
        string \$integrationDisplayName,
        string \$objectDisplayName,
        string \$mauticObject,
        int \$id,
        string \$linkText,
        string \$deduplicateValue = null,
        \\DateTime \$deduplicateDateTimeFrom = null
    ): void {
        \$link    = \$this->userNotificationBuilder->buildLink(\$mauticObject, \$id, \$linkText);
        \$userIds = \$this->userNotificationBuilder->getUserIds(\$mauticObject, \$id);

        foreach (\$userIds as \$userId) {
            \$this->writer->writeUserNotification(
                \$this->userNotificationBuilder->formatHeader(\$integrationDisplayName, \$objectDisplayName),
                \$this->userNotificationBuilder->formatMessage(\$message, \$link),
                \$userId,
                \$deduplicateValue,
                \$deduplicateDateTimeFrom
            );
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php");
    }
}
