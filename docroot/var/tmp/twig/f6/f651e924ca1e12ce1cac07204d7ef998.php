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

/* @bundles/StatsBundle/Aggregate/Collector.php */
class __TwigTemplate_e7cabdf91b0ee55aa17fcc39c27c404b extends Template
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

namespace Mautic\\StatsBundle\\Aggregate;

use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;
use Mautic\\StatsBundle\\Event\\AggregateStatRequestEvent;
use Mautic\\StatsBundle\\Event\\Options\\FetchOptions;
use Mautic\\StatsBundle\\StatEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class Collector
{
    public function __construct(
        private EventDispatcherInterface \$eventDispatcher
    ) {
    }

    /**
     * @param string \$statName
     *
     * @return StatCollection
     */
    public function fetchStats(\$statName, \\DateTime \$fromDateTime, \\DateTime \$toDateTime, FetchOptions \$fetchOptions = null)
    {
        if (null === \$fetchOptions) {
            \$fetchOptions = new FetchOptions();
        }

        \$event = new AggregateStatRequestEvent(\$statName, \$fromDateTime, \$toDateTime, \$fetchOptions);

        \$this->eventDispatcher->dispatch(\$event, StatEvents::AGGREGATE_STAT_REQUEST);

        return \$event->getStatCollection();
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
        return "@bundles/StatsBundle/Aggregate/Collector.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collector.php", "/app/docroot/app/bundles/StatsBundle/Aggregate/Collector.php");
    }
}
