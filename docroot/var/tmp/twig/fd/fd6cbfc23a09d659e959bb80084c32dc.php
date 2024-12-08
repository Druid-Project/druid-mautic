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

/* @bundles/CampaignBundle/Event/ConditionEvent.php */
class __TwigTemplate_3adb51f43d7824794eb7af3f59a35b2b extends Template
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

class ConditionEvent extends CampaignExecutionEvent
{
    use ContextTrait;

    private bool \$passed = false;

    public function __construct(
        private AbstractEventAccessor \$eventConfig,
        private LeadEventLog \$eventLog
    ) {
        // @deprecated support for pre 2.13.0; to be removed in 3.0
        parent::__construct(
            [
                'eventSettings'   => \$eventConfig->getConfig(),
                'eventDetails'    => null,
                'event'           => \$eventLog->getEvent(),
                'lead'            => \$eventLog->getLead(),
                'systemTriggered' => \$eventLog->getSystemTriggered(),
            ],
            null,
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
     * Pass this condition.
     */
    public function pass(): void
    {
        \$this->passed = true;
    }

    /**
     * Fail this condition.
     */
    public function fail(): void
    {
        \$this->passed = false;
    }

    public function wasConditionSatisfied(): bool
    {
        return \$this->passed;
    }

    /**
     * @param string   \$channel
     * @param int|null \$channelId
     */
    public function setChannel(\$channel, \$channelId = null): void
    {
        \$this->log->setChannel(\$this->channel);
        \$this->log->setChannelId(\$this->channelId);
    }

    /**
     * @deprecated 2.13.0 to be removed in 3.0; BC support
     */
    public function getResult(): bool
    {
        return \$this->passed;
    }

    /**
     * @deprecated 2.13.0 to be removed in 3.0; BC support
     *
     * @return \$this
     */
    public function setResult(\$result)
    {
        \$this->passed = (bool) \$result;

        return \$this;
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
        return "@bundles/CampaignBundle/Event/ConditionEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ConditionEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/ConditionEvent.php");
    }
}
