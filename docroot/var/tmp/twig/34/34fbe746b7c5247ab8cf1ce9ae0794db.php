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

/* @bundles/IntegrationsBundle/Event/InternalObjectFindEvent.php */
class __TwigTemplate_8a347ae1f544157006b4357e1741528b extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\DAO\\DateRange;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class InternalObjectFindEvent extends Event
{
    /**
     * @var int[]
     */
    private array \$ids = [];

    private array \$foundObjects = [];

    private ?DateRange \$dateRange = null;

    private ?int \$start = null;

    private ?int \$limit = null;

    private array \$fieldValues = [];

    public function __construct(
        private ObjectInterface \$object
    ) {
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    /**
     * @return int[]
     */
    public function getIds(): array
    {
        return \$this->ids;
    }

    /**
     * @param int[] \$ids
     */
    public function setIds(array \$ids): void
    {
        \$this->ids = \$ids;
    }

    public function getFoundObjects(): array
    {
        return \$this->foundObjects;
    }

    public function setFoundObjects(array \$foundObjects): void
    {
        \$this->foundObjects = \$foundObjects;
    }

    public function getDateRange(): ?DateRange
    {
        return \$this->dateRange;
    }

    public function setDateRange(?DateRange \$dateRange): void
    {
        \$this->dateRange = \$dateRange;
    }

    public function getStart(): ?int
    {
        return \$this->start;
    }

    public function setStart(?int \$start): void
    {
        \$this->start = \$start;
    }

    public function getLimit(): ?int
    {
        return \$this->limit;
    }

    public function setLimit(?int \$limit): void
    {
        \$this->limit = \$limit;
    }

    public function getFieldValues(): array
    {
        return \$this->fieldValues;
    }

    public function setFieldValues(array \$fieldValues): void
    {
        \$this->fieldValues = \$fieldValues;
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
        return "@bundles/IntegrationsBundle/Event/InternalObjectFindEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectFindEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/InternalObjectFindEvent.php");
    }
}
