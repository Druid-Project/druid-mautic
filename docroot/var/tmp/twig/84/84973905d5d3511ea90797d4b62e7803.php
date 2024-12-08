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

/* @bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php */
class __TwigTemplate_e3aa28c5ce4714bde940514724cd2ccc extends Template
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

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class InternalObjectCreateEvent extends Event
{
    /**
     * @var ObjectMapping[]
     */
    private array \$objectMappings = [];

    public function __construct(
        private ObjectInterface \$object,
        private array \$createObjects
    ) {
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    public function getCreateObjects(): array
    {
        return \$this->createObjects;
    }

    /**
     * @return ObjectMapping[]
     */
    public function getObjectMappings(): array
    {
        return \$this->objectMappings;
    }

    /**
     * @param ObjectMapping[] \$objectMappings
     */
    public function setObjectMappings(array \$objectMappings): void
    {
        \$this->objectMappings = \$objectMappings;
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
        return "@bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/InternalObjectCreateEvent.php");
    }
}
