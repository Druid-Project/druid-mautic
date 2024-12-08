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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php */
class __TwigTemplate_98567333f5defd08280e3e980f5128ed extends Template
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

use Mautic\\IntegrationsBundle\\Event\\InternalObjectRouteEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class RouteHelper
{
    /**
     * @var RouEventDispatcherInterfaceter
     */
    private \$dispatcher;

    public function __construct(
        private ObjectProvider \$objectProvider,
        EventDispatcherInterface \$dispatcher
    ) {
        \$this->dispatcher     = \$dispatcher;
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getRoute(string \$object, int \$id): string
    {
        try {
            \$event = new InternalObjectRouteEvent(\$this->objectProvider->getObjectByName(\$object), \$id);
        } catch (ObjectNotFoundException) {
            // Throw this exception instead to keep BC.
            throw new ObjectNotSupportedException(MauticSyncDataExchange::NAME, \$object);
        }

        \$this->dispatcher->dispatch(\$event, IntegrationEvents::INTEGRATION_BUILD_INTERNAL_OBJECT_ROUTE);

        return \$event->getRoute();
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getLink(string \$object, int \$id, string \$linkText): string
    {
        \$route = \$this->getRoute(\$object, \$id);

        return sprintf('<a href=\"%s\">%s</a>', \$route, \$linkText);
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getRoutes(string \$object, array \$ids): array
    {
        \$routes = [];
        foreach (\$ids as \$id) {
            \$routes[\$id] = \$this->getRoute(\$object, \$id);
        }

        return \$routes;
    }

    /**
     * @throws ObjectNotSupportedException
     */
    public function getLinkCsv(string \$object, array \$ids): string
    {
        \$links  = [];
        \$routes = \$this->getRoutes(\$object, \$ids);
        foreach (\$routes as \$id => \$route) {
            \$links[] = sprintf('[<a href=\"%s\">%s</a>]', \$route, \$id);
        }

        return implode(', ', \$links);
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Helper/RouteHelper.php");
    }
}
