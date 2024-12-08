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

/* @bundles/CampaignBundle/Event/CampaignDecisionEvent.php */
class __TwigTemplate_ed202cd61a5c004828f5c4b6dc47711c extends Template
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
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @deprecated 2.13.0; to be removed in 3.0
 */
class CampaignDecisionEvent extends Event
{
    protected \$decisionTriggered = false;

    /**
     * @param LeadEventLog[] \$logs
     */
    public function __construct(
        protected \$lead,
        protected \$decisionType,
        protected \$decisionEventDetails,
        protected \$events,
        protected \$eventSettings,
        protected \$isRootLevel = false,
        protected \$logs = []
    ) {
    }

    /**
     * @return mixed
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return mixed
     */
    public function getEvents()
    {
        return \$this->events;
    }

    /**
     * @return mixed
     */
    public function getDecisionType()
    {
        return \$this->decisionType;
    }

    /**
     * @return mixed
     */
    public function getDecisionEventDetails()
    {
        return \$this->decisionEventDetails;
    }

    /**
     * @return bool
     */
    public function getEventSettings(\$eventType = null, \$type = null)
    {
        if (\$type) {
            return (!empty(\$this->eventSettings[\$eventType][\$type])) ? \$this->eventSettings[\$eventType][\$type] : false;
        } elseif (\$eventType) {
            return (!empty(\$this->eventSettings[\$eventType])) ? \$this->eventSettings[\$eventType] : false;
        }

        return \$this->eventSettings;
    }

    /**
     * Is the decision used as a root level event?
     *
     * @return bool
     */
    public function isRootLevel()
    {
        return \$this->isRootLevel;
    }

    /**
     * Set if the decision has already been triggered and if so, child events will be executed.
     *
     * @param bool|true \$triggered
     */
    public function setDecisionAlreadyTriggered(\$triggered = true): void
    {
        \$this->decisionTriggered = \$triggered;
    }

    /**
     * Returns if the decision has already been triggered.
     *
     * @return mixed
     */
    public function wasDecisionTriggered()
    {
        return \$this->decisionTriggered;
    }

    /**
     * @return array|LeadEventLog[]
     */
    public function getLogs()
    {
        return \$this->logs;
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
        return "@bundles/CampaignBundle/Event/CampaignDecisionEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignDecisionEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/CampaignDecisionEvent.php");
    }
}
