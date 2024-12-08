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

/* @bundles/CampaignBundle/Event/ScheduledEvent.php */
class __TwigTemplate_c6e9a74845affb273569f8deb0b5e849 extends Template
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

namespace Mautic\\CampaignBundle\\Event;

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

class ScheduledEvent extends CampaignScheduledEvent
{
    use ContextTrait;

    /**
     * @param bool \$isReschedule
     */
    public function __construct(
        private AbstractEventAccessor \$eventConfig,
        private LeadEventLog \$eventLog,
        private \$isReschedule = false
    ) {
        // @deprecated support for pre 2.13.0; to be removed in 3.0
        parent::__construct(
            [
                'eventSettings'   => \$eventConfig->getConfig(),
                'eventDetails'    => null,
                'event'           => \$eventLog->getEvent(),
                'lead'            => \$eventLog->getLead(),
                'systemTriggered' => true,
                'dateScheduled'   => \$eventLog->getTriggerDate(),
            ],
            \$eventLog
        );
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getEventConfig()
    {
        return \$this->eventConfig;
    }

    /**
     * @return LeadEventLog
     */
    public function getLog()
    {
        return \$this->eventLog;
    }

    /**
     * @return bool
     */
    public function isReschedule()
    {
        return \$this->isReschedule;
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
        return "@bundles/CampaignBundle/Event/ScheduledEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ScheduledEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/ScheduledEvent.php");
    }
}
