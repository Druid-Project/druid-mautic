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

/* @bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php */
class __TwigTemplate_c0a9feb686c6a75b3b82e095c783fe2b extends Template
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
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\DecisionEvent;
use Mautic\\CampaignBundle\\Event\\DecisionResultsEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class DecisionDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private LegacyEventDispatcher \$legacyDispatcher
    ) {
    }

    /**
     * @param mixed \$passthrough
     */
    public function dispatchRealTimeEvent(DecisionAccessor \$config, LeadEventLog \$log, \$passthrough): DecisionEvent
    {
        \$event = new DecisionEvent(\$config, \$log, \$passthrough);
        \$this->dispatcher->dispatch(\$event, \$config->getEventName());

        return \$event;
    }

    public function dispatchEvaluationEvent(DecisionAccessor \$config, LeadEventLog \$log): DecisionEvent
    {
        \$event = new DecisionEvent(\$config, \$log);

        \$this->dispatcher->dispatch(\$event, CampaignEvents::ON_EVENT_DECISION_EVALUATION);
        \$this->legacyDispatcher->dispatchDecisionEvent(\$event);

        return \$event;
    }

    public function dispatchDecisionResultsEvent(DecisionAccessor \$config, ArrayCollection \$logs, EvaluatedContacts \$evaluatedContacts): void
    {
        if (!\$logs->count()) {
            return;
        }

        \$this->dispatcher->dispatch(
            new DecisionResultsEvent(\$config, \$logs, \$evaluatedContacts),
            CampaignEvents::ON_EVENT_DECISION_EVALUATION_RESULTS
        );
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
        return "@bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Dispatcher/DecisionDispatcher.php");
    }
}
