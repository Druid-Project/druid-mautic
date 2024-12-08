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

/* @bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php */
class __TwigTemplate_e2c37f6a3883ce2720197e59e2aafc4c extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Event;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\DecisionDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Exception\\CannotProcessEventException;
use Mautic\\CampaignBundle\\Executioner\\Exception\\DecisionNotApplicableException;
use Mautic\\CampaignBundle\\Executioner\\Logger\\EventLogger;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Mautic\\LeadBundle\\Entity\\Lead;

class DecisionExecutioner implements EventInterface
{
    public const TYPE = 'decision';

    public function __construct(
        private EventLogger \$eventLogger,
        private DecisionDispatcher \$dispatcher
    ) {
    }

    /**
     * @param mixed       \$passthrough
     * @param string|null \$channel
     * @param int|null    \$channelId
     *
     * @throws CannotProcessEventException
     * @throws DecisionNotApplicableException
     */
    public function evaluateForContact(DecisionAccessor \$config, Event \$event, Lead \$contact, \$passthrough = null, \$channel = null, \$channelId = null): void
    {
        if (Event::TYPE_DECISION !== \$event->getEventType()) {
            throw new CannotProcessEventException('Cannot process event ID '.\$event->getId().' as a decision.');
        }

        \$log = \$this->eventLogger->buildLogEntry(\$event, \$contact);
        \$log->setChannel(\$channel);
        \$log->setChannelId(\$channelId);

        \$decisionEvent = \$this->dispatcher->dispatchRealTimeEvent(\$config, \$log, \$passthrough);

        if (!\$decisionEvent->wasDecisionApplicable()) {
            throw new DecisionNotApplicableException('evaluation failed');
        }

        \$this->eventLogger->persistLog(\$log);
    }

    /**
     * @throws CannotProcessEventException
     */
    public function execute(AbstractEventAccessor \$config, ArrayCollection \$logs): EvaluatedContacts
    {
        \\assert(\$config instanceof DecisionAccessor);
        \$evaluatedContacts = new EvaluatedContacts();
        \$failedLogs        = [];

        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            if (Event::TYPE_DECISION !== \$log->getEvent()->getEventType()) {
                throw new CannotProcessEventException('Event ID '.\$log->getEvent()->getId().' is not a decision');
            }

            try {
                /* @var DecisionAccessor \$config */
                \$this->dispatchEvent(\$config, \$log);
                \$evaluatedContacts->pass(\$log->getLead());

                // Update the date triggered timestamp
                \$log->setDateTriggered(new \\DateTime());
            } catch (DecisionNotApplicableException) {
                // Fail the contact but remove the log from being processed upstream
                // active/positive/green path while letting the InactiveExecutioner handle the inactive/negative/red paths
                \$failedLogs[] = \$log;
                \$evaluatedContacts->fail(\$log->getLead());
            }
        }

        \$this->dispatcher->dispatchDecisionResultsEvent(\$config, \$logs, \$evaluatedContacts);

        // Remove the logs
        foreach (\$failedLogs as \$log) {
            \$logs->removeElement(\$log);
        }

        return \$evaluatedContacts;
    }

    /**
     * @throws DecisionNotApplicableException
     */
    private function dispatchEvent(DecisionAccessor \$config, LeadEventLog \$log): void
    {
        \$decisionEvent = \$this->dispatcher->dispatchEvaluationEvent(\$config, \$log);

        if (!\$decisionEvent->wasDecisionApplicable()) {
            throw new DecisionNotApplicableException('evaluation failed');
        }
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
        return "@bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Event/DecisionExecutioner.php");
    }
}
