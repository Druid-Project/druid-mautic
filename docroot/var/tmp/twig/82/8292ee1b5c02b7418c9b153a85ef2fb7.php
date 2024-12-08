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

/* @bundles/CampaignBundle/Executioner/Dispatcher/ActionDispatcher.php */
class __TwigTemplate_0c0ce56d933fccb32c0fb8b0c4b21e57 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Dispatcher;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\ExecutedBatchEvent;
use Mautic\\CampaignBundle\\Event\\ExecutedEvent;
use Mautic\\CampaignBundle\\Event\\FailedEvent;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogNotProcessedException;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogPassedAndFailedException;
use Mautic\\CampaignBundle\\Executioner\\Scheduler\\EventScheduler;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ActionDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private LoggerInterface \$logger,
        private EventScheduler \$scheduler,
        private LegacyEventDispatcher \$legacyDispatcher
    ) {
    }

    /**
     * @throws LogNotProcessedException
     * @throws LogPassedAndFailedException
     */
    public function dispatchEvent(ActionAccessor \$config, Event \$event, ArrayCollection \$logs, PendingEvent \$pendingEvent = null): PendingEvent
    {
        if (!\$pendingEvent) {
            \$pendingEvent = new PendingEvent(\$config, \$event, \$logs);
        }

        // this if statement can be removed when legacy dispatcher is removed
        if (\$customEvent = \$config->getBatchEventName()) {
            \$this->dispatcher->dispatch(\$pendingEvent, \$customEvent);

            \$success = \$pendingEvent->getSuccessful();
            \$failed  = \$pendingEvent->getFailures();

            \$this->validateProcessedLogs(\$logs, \$success, \$failed);

            if (\$success) {
                \$this->dispatchExecutedEvent(\$config, \$event, \$success);
            }

            if (\$failed) {
                \$this->dispatchFailedEvent(\$config, \$failed);
            }

            // Dispatch legacy ON_EVENT_EXECUTION event for BC
            \$this->legacyDispatcher->dispatchExecutionEvents(\$config, \$success, \$failed);
        }

        // Execute BC eventName or callback. Or support case where the listener has been converted to batchEventName but still wants to execute
        // eventName for BC support for plugins that could be listening to it's own custom event.
        \$this->legacyDispatcher->dispatchCustomEvent(\$config, \$logs, \$customEvent, \$pendingEvent);

        return \$pendingEvent;
    }

    private function dispatchExecutedEvent(AbstractEventAccessor \$config, Event \$event, ArrayCollection \$logs): void
    {
        if (!\$logs->count()) {
            return;
        }

        foreach (\$logs as \$log) {
            \$this->dispatcher->dispatch(
                new ExecutedEvent(\$config, \$log),
                CampaignEvents::ON_EVENT_EXECUTED
            );
        }

        \$this->dispatcher->dispatch(
            new ExecutedBatchEvent(\$config, \$event, \$logs),
            CampaignEvents::ON_EVENT_EXECUTED_BATCH
        );
    }

    private function dispatchFailedEvent(AbstractEventAccessor \$config, ArrayCollection \$logs): void
    {
        if (!\$logs->count()) {
            return;
        }

        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$this->logger->debug(
                'CAMPAIGN: '.ucfirst(\$log->getEvent()->getEventType() ?? 'unknown event').' ID# '.\$log->getEvent()->getId().' for contact ID# '.\$log->getLead()->getId()
            );

            \$this->dispatcher->dispatch(
                new FailedEvent(\$config, \$log),
                CampaignEvents::ON_EVENT_FAILED
            );
        }

        \$this->scheduler->rescheduleFailures(\$logs);
    }

    /**
     * @throws LogNotProcessedException
     * @throws LogPassedAndFailedException
     */
    private function validateProcessedLogs(ArrayCollection \$pending, ArrayCollection \$success, ArrayCollection \$failed): void
    {
        foreach (\$pending as \$log) {
            if (!\$success->contains(\$log) && !\$failed->contains(\$log)) {
                throw new LogNotProcessedException(\$log);
            }

            if (\$success->contains(\$log) && \$failed->contains(\$log)) {
                throw new LogPassedAndFailedException(\$log);
            }
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
        return "@bundles/CampaignBundle/Executioner/Dispatcher/ActionDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/ActionDispatcher.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Dispatcher/ActionDispatcher.php");
    }
}
