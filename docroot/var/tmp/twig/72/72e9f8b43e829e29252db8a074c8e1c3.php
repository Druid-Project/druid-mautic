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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php */
class __TwigTemplate_d6356272a9fa402ee07490f7829d4148 extends Template
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

namespace Mautic\\StatsBundle\\Tests\\Aggregate\\Collection;

use Mautic\\StatsBundle\\Aggregate\\Collector;
use Mautic\\StatsBundle\\Event\\AggregateStatRequestEvent;
use Mautic\\StatsBundle\\StatEvents;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;

class CollectorTest extends TestCase
{
    private EventDispatcher \$eventDispatcher;

    protected function setUp(): void
    {
        \$this->eventDispatcher = new EventDispatcher();
    }

    public function testEventIsDispatched(): void
    {
        \$this->eventDispatcher->addListener(
            StatEvents::AGGREGATE_STAT_REQUEST,
            function (AggregateStatRequestEvent \$event): void {
                \$statCollection = \$event->getStatCollection();

                \$statCollection->addStat(2018, 12, 7, 1, 100);
                \$statCollection->addStat(2018, 12, 7, 2, 110);
            }
        );

        \$statCollection = \$this->getCollector()->fetchStats('event-name', new \\DateTime(), new \\DateTime());
        \$stats          = \$statCollection->getStats();
        \$year           = \$stats->getYear(2018);

        \$this->assertEquals(210, \$year->getSum());
    }

    /**
     * @return Collector
     */
    private function getCollector()
    {
        return new Collector(\$this->eventDispatcher);
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
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php", "/app/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/CollectorTest.php");
    }
}
