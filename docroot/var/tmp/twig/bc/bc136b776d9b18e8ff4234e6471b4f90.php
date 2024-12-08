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

/* @bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php */
class __TwigTemplate_4ed3c27dd291b5151b5a35c128804273 extends Template
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

declare(strict_types=1);

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Dispatcher;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\DecisionEvent;
use Mautic\\CampaignBundle\\Event\\DecisionResultsEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\DecisionDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\LegacyEventDispatcher;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class DecisionDispatcherTest extends TestCase
{
    /**
     * @var MockObject|EventDispatcherInterface
     */
    private MockObject \$dispatcher;

    /**
     * @var MockObject|LegacyEventDispatcher
     */
    private MockObject \$legacyDispatcher;

    /**
     * @var MockObject|DecisionAccessor
     */
    private MockObject \$config;

    private DecisionDispatcher \$decisionDispatcher;

    protected function setUp(): void
    {
        \$this->dispatcher         = \$this->createMock(EventDispatcherInterface::class);
        \$this->legacyDispatcher   = \$this->createMock(LegacyEventDispatcher::class);
        \$this->config             = \$this->createMock(DecisionAccessor::class);
        \$this->decisionDispatcher = new DecisionDispatcher(\$this->dispatcher, \$this->legacyDispatcher);
    }

    public function testDecisionEventIsDispatched(): void
    {
        \$this->config->expects(\$this->once())
            ->method('getEventName')
            ->willReturn('something');

        \$this->legacyDispatcher->expects(\$this->never())
            ->method('dispatchDecisionEvent');

        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->isInstanceOf(DecisionEvent::class), 'something');

        \$this->decisionDispatcher->dispatchRealTimeEvent(\$this->config, new LeadEventLog(), null);
    }

    public function testDecisionEvaluationEventIsDispatched(): void
    {
        \$this->config->expects(\$this->never())
            ->method('getEventName');

        \$this->legacyDispatcher->expects(\$this->once())
            ->method('dispatchDecisionEvent');

        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->isInstanceOf(DecisionEvent::class), CampaignEvents::ON_EVENT_DECISION_EVALUATION);

        \$this->decisionDispatcher->dispatchEvaluationEvent(\$this->config, new LeadEventLog());
    }

    public function testDecisionResultsEventIsDispatched(): void
    {
        \$this->dispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->isInstanceOf(DecisionResultsEvent::class), CampaignEvents::ON_EVENT_DECISION_EVALUATION_RESULTS);

        \$this->decisionDispatcher->dispatchDecisionResultsEvent(\$this->config, new ArrayCollection([new LeadEventLog()]), new EvaluatedContacts());
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
        return "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/Dispatcher/DecisionDispatcherTest.php");
    }
}
