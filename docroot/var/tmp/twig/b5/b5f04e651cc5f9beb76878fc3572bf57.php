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

/* @bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php */
class __TwigTemplate_1a13d8ae57d67cc1548294ec2fa35fbd extends Template
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

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\ConditionEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Mautic\\CampaignBundle\\Executioner\\Dispatcher\\ConditionDispatcher;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ConditionDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|EventDispatcherInterface
     */
    private MockObject \$dispatcher;

    /**
     * @var MockObject|ConditionAccessor
     */
    private MockObject \$config;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->dispatcher = \$this->createMock(EventDispatcherInterface::class);
        \$this->config     = \$this->createMock(ConditionAccessor::class);
    }

    public function testConditionEventIsDispatched(): void
    {
        \$this->config->expects(\$this->once())
            ->method('getEventName')
            ->willReturn('something');

        \$this->dispatcher->expects(\$this->exactly(2))
            ->method('dispatch')
            ->withConsecutive(
                [\$this->isInstanceOf(ConditionEvent::class), 'something'],
                [\$this->isInstanceOf(ConditionEvent::class), CampaignEvents::ON_EVENT_CONDITION_EVALUATION]
            );

        (new ConditionDispatcher(\$this->dispatcher))->dispatchEvent(\$this->config, new LeadEventLog());
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
        return "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/Dispatcher/ConditionDispatcherTest.php");
    }
}
