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

/* @bundles/IntegrationsBundle/Event/InternalObjectUpdateEvent.php */
class __TwigTemplate_7fc9fc8790a70276bd01e742459b7a46 extends Template
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

namespace Mautic\\IntegrationsBundle\\Event;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\UpdatedObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class InternalObjectUpdateEvent extends Event
{
    /**
     * @var UpdatedObjectMappingDAO[]
     */
    private array \$updatedObjectMappings = [];

    public function __construct(
        private ObjectInterface \$object,
        private array \$identifiedObjectIds,
        /**
         * @var ObjectChangeDAO[]
         */
        private array \$updateObjects
    ) {
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    public function getIdentifiedObjectIds(): array
    {
        return \$this->identifiedObjectIds;
    }

    /**
     * @return ObjectChangeDAO[]
     */
    public function getUpdateObjects(): array
    {
        return \$this->updateObjects;
    }

    /**
     * @return UpdatedObjectMappingDAO[]
     */
    public function getUpdatedObjectMappings(): array
    {
        return \$this->updatedObjectMappings;
    }

    /**
     * @param UpdatedObjectMappingDAO[] \$updatedObjectMappings
     */
    public function setUpdatedObjectMappings(array \$updatedObjectMappings): void
    {
        \$this->updatedObjectMappings = \$updatedObjectMappings;
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
        return "@bundles/IntegrationsBundle/Event/InternalObjectUpdateEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectUpdateEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/InternalObjectUpdateEvent.php");
    }
}
