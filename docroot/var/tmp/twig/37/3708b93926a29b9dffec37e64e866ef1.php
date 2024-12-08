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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php */
class __TwigTemplate_d7ebaf1e18b7ec3d20b33dafdf11286c extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ObjectProvider
{
    /**
     * Cached internal objects.
     *
     * @var ObjectInterface[]
     */
    private array \$objects = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * @throws ObjectNotFoundException
     */
    public function getObjectByName(string \$name): ObjectInterface
    {
        \$this->collectObjects();

        foreach (\$this->objects as \$object) {
            if (\$object->getName() === \$name) {
                return \$object;
            }
        }

        throw new ObjectNotFoundException(\"Internal object '{\$name}' was not found\");
    }

    /**
     * @throws ObjectNotFoundException
     */
    public function getObjectByEntityName(string \$entityName): ObjectInterface
    {
        \$this->collectObjects();

        foreach (\$this->objects as \$object) {
            if (\$object->getEntityName() === \$entityName) {
                return \$object;
            }
        }

        throw new ObjectNotFoundException(\"Internal object was not found for entity '{\$entityName}'\");
    }

    /**
     * Dispatches an event to collect all internal objects.
     * It caches the objects to a local property so it won't dispatch every time but only once.
     */
    private function collectObjects(): void
    {
        if (empty(\$this->objects)) {
            \$event = new InternalObjectEvent();
            \$this->dispatcher->dispatch(\$event, IntegrationEvents::INTEGRATION_COLLECT_INTERNAL_OBJECTS);
            \$this->objects = \$event->getObjects();
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
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectProvider.php");
    }
}
