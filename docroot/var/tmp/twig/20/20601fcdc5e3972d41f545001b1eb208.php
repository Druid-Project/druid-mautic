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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationBuilder.php */
class __TwigTemplate_002831e53b7d2a00d3bb157dc0024638 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UserNotificationBuilder
{
    public function __construct(
        private UserHelper \$userHelper,
        private OwnerProvider \$ownerProvider,
        private RouteHelper \$routeHelper,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @return int[]
     *
     * @throws ObjectNotSupportedException
     */
    public function getUserIds(string \$mauticObject, int \$id): array
    {
        \$owners = \$this->ownerProvider->getOwnersForObjectIds(\$mauticObject, [\$id]);

        if (!empty(\$owners[0]['owner_id'])) {
            return [(int) \$owners[0]['owner_id']];
        }

        return \$this->userHelper->getAdminUsers();
    }

    public function buildLink(string \$mauticObject, int \$id, string \$linkText): string
    {
        return \$this->routeHelper->getLink(\$mauticObject, \$id, \$linkText);
    }

    public function formatHeader(string \$integrationDisplayName, string \$objectDisplayName): string
    {
        return \$this->translator->trans(
            'mautic.integration.sync.user_notification.header',
            [
                '%integration%' => \$integrationDisplayName,
                '%object%'      => \$objectDisplayName,
            ]
        );
    }

    public function formatMessage(string \$message, string \$link): string
    {
        return \$this->translator->trans(
            'mautic.integration.sync.user_notification.sync_error',
            [
                '%name%'    => \$link,
                '%message%' => \$message,
            ]
        );
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationBuilder.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationBuilder.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationBuilder.php");
    }
}
