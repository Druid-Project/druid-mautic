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

/* @bundles/IntegrationsBundle/Event/CompletedSyncIterationEvent.php */
class __TwigTemplate_2f55dcd3872712d6737b9a0a4e3a1bb9 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderResultsDAO;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CompletedSyncIterationEvent extends Event
{
    public function __construct(
        private OrderResultsDAO \$orderResultsDAO,
        private int \$iteration,
        private InputOptionsDAO \$inputOptionsDAO,
        private MappingManualDAO \$mappingManualDAO
    ) {
    }

    public function getIntegration(): string
    {
        return \$this->mappingManualDAO->getIntegration();
    }

    public function getOrderResults(): OrderResultsDAO
    {
        return \$this->orderResultsDAO;
    }

    public function getIteration(): int
    {
        return \$this->iteration;
    }

    public function getInputOptions(): InputOptionsDAO
    {
        return \$this->inputOptionsDAO;
    }

    public function getMappingManual(): MappingManualDAO
    {
        return \$this->mappingManualDAO;
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
        return "@bundles/IntegrationsBundle/Event/CompletedSyncIterationEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/CompletedSyncIterationEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/CompletedSyncIterationEvent.php");
    }
}
