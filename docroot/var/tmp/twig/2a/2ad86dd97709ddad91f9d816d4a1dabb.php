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

/* @bundles/CampaignBundle/EventCollector/EventCollector.php */
class __TwigTemplate_33f14d799f6d05a5ec225843eccd2110 extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\EventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Builder\\ConnectionBuilder;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class EventCollector
{
    private array \$eventsArray = [];

    private ?EventAccessor \$events = null;

    public function __construct(
        private TranslatorInterface \$translator,
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * @return EventAccessor
     */
    public function getEvents()
    {
        if (empty(\$this->eventsArray)) {
            \$this->buildEventList();
        }

        if (empty(\$this->events)) {
            \$this->events = new EventAccessor(\$this->eventsArray);
        }

        return \$this->events;
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getEventConfig(Event \$event)
    {
        return \$this->getEvents()->getEvent(\$event->getEventType(), \$event->getType());
    }

    /**
     * Deprecated support for pre 2.13.
     *
     * @deprecated 2.13.0 to be removed in 3.0
     *
     * @param string|null \$type
     *
     * @return array|mixed
     */
    public function getEventsArray(\$type = null)
    {
        if (empty(\$this->eventsArray)) {
            \$this->buildEventList();
        }

        if (null !== \$type) {
            if (!isset(\$this->events[\$type])) {
                throw new \\InvalidArgumentException(\"\$type not found as array key\");
            }

            return \$this->eventsArray[\$type];
        }

        return \$this->eventsArray;
    }

    private function buildEventList(): void
    {
        // build them
        \$event  = new CampaignBuilderEvent(\$this->translator);
        \$this->dispatcher->dispatch(\$event, CampaignEvents::CAMPAIGN_ON_BUILD);

        \$this->eventsArray[Event::TYPE_ACTION]    = \$event->getActions();
        \$this->eventsArray[Event::TYPE_CONDITION] = \$event->getConditions();
        \$this->eventsArray[Event::TYPE_DECISION]  = \$event->getDecisions();

        \$this->eventsArray['connectionRestrictions'] = ConnectionBuilder::buildRestrictionsArray(\$this->eventsArray);
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
        return "@bundles/CampaignBundle/EventCollector/EventCollector.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/EventCollector.php", "/app/docroot/app/bundles/CampaignBundle/EventCollector/EventCollector.php");
    }
}
