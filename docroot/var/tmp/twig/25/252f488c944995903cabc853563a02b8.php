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

/* @bundles/IntegrationsBundle/Tests/Unit/Event/CompletedSyncIterationEventTest.php */
class __TwigTemplate_f2a1016ff8e6a90be8cdc518c1b5d0ad extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Event;

use Mautic\\IntegrationsBundle\\Event\\CompletedSyncIterationEvent;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderResultsDAO;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class CompletedSyncIterationEventTest extends TestCase
{
    public function testGetters(): void
    {
        \$mappingManual = new MappingManualDAO('foobar');
        \$orderResults  = new OrderResultsDAO([], [], [], []);
        \$iteration     = 1;
        \$inputOptions  = new InputOptionsDAO(['integration' => 'foobar']);

        \$event = new CompletedSyncIterationEvent(\$orderResults, \$iteration, \$inputOptions, \$mappingManual);

        Assert::assertSame(\$mappingManual->getIntegration(), \$event->getIntegration());
        Assert::assertSame(\$orderResults, \$event->getOrderResults());
        Assert::assertSame(\$iteration, \$event->getIteration());
        Assert::assertSame(\$inputOptions, \$event->getInputOptions());
        Assert::assertSame(\$mappingManual, \$event->getMappingManual());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Event/CompletedSyncIterationEventTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Event/CompletedSyncIterationEventTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Event/CompletedSyncIterationEventTest.php");
    }
}
