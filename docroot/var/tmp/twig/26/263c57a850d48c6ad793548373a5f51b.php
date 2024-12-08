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

/* @bundles/IntegrationsBundle/Event/InternalObjectOwnerEvent.php */
class __TwigTemplate_23687510894b29b7b88c6c4306c64738 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class InternalObjectOwnerEvent extends Event
{
    /**
     * Format: [object_id => owner_id].
     */
    private array \$owners = [];

    /**
     * @param int[] \$objectIds
     */
    public function __construct(
        private ObjectInterface \$object,
        private array \$objectIds
    ) {
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    /**
     * @return int[]
     */
    public function getObjectIds(): array
    {
        return \$this->objectIds;
    }

    public function getOwners(): array
    {
        return \$this->owners;
    }

    public function setOwners(array \$owners): void
    {
        \$this->owners = \$owners;
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
        return "@bundles/IntegrationsBundle/Event/InternalObjectOwnerEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectOwnerEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/InternalObjectOwnerEvent.php");
    }
}
