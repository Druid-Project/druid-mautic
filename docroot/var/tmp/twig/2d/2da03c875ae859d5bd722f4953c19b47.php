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

/* @bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php */
class __TwigTemplate_a3857d0c8351f278c411bacd1f27218b extends Template
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
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\ActionDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Exception\\CannotProcessEventException;
use Mautic\\CampaignBundle\\Executioner\\Logger\\EventLogger;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;

class ActionExecutioner implements EventInterface
{
    public const TYPE = 'action';

    public function __construct(
        private ActionDispatcher \$dispatcher,
        private EventLogger \$eventLogger
    ) {
    }

    /**
     * @throws CannotProcessEventException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogNotProcessedException
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Dispatcher\\Exception\\LogPassedAndFailedException
     */
    public function execute(AbstractEventAccessor \$config, ArrayCollection \$logs): EvaluatedContacts
    {
        \\assert(\$config instanceof ActionAccessor);

        /** @var LeadEventLog \$firstLog */
        if (!\$firstLog = \$logs->first()) {
            return new EvaluatedContacts();
        }

        \$event = \$firstLog->getEvent();

        if (Event::TYPE_ACTION !== \$event->getEventType()) {
            throw new CannotProcessEventException('Cannot process event ID '.\$event->getId().' as an action.');
        }

        // Execute to process the batch of contacts
        \$pendingEvent = \$this->dispatcher->dispatchEvent(\$config, \$event, \$logs);

        \$passed = \$this->eventLogger->extractContactsFromLogs(\$pendingEvent->getSuccessful());
        \$failed = \$this->eventLogger->extractContactsFromLogs(\$pendingEvent->getFailures());

        return new EvaluatedContacts(\$passed, \$failed);
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
        return "@bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Event/ActionExecutioner.php");
    }
}
