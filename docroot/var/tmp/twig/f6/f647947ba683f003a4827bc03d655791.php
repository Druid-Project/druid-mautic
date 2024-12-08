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

/* @bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php */
class __TwigTemplate_795d73e678c54b7c936ff0ae9084ca98 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventCollector\\Builder;

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;
use Mautic\\CampaignBundle\\EventCollector\\Builder\\EventBuilder;

class EventBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testActionsAreConvertedToAccessor(): void
    {
        \$array = [
            'some.action'  => [
                'batchEventName' => 'some.action',
            ],
            'other.action' => [
                'batchEventName' => 'other.action',
            ],
        ];

        \$converted = EventBuilder::buildActions(\$array);

        \$this->assertCount(2, \$converted);
        \$this->assertInstanceOf(ActionAccessor::class, \$converted['some.action']);
        \$this->assertEquals('some.action', \$converted['some.action']->getBatchEventName());
        \$this->assertInstanceOf(ActionAccessor::class, \$converted['other.action']);
        \$this->assertEquals('other.action', \$converted['other.action']->getBatchEventName());
    }

    public function testConditionsAreConvertedToAccessor(): void
    {
        \$array = [
            'some.condition'  => [
                'eventName' => 'some.condition',
            ],
            'other.condition' => [
                'eventName' => 'other.condition',
            ],
        ];

        \$converted = EventBuilder::buildConditions(\$array);

        \$this->assertCount(2, \$converted);
        \$this->assertInstanceOf(ConditionAccessor::class, \$converted['some.condition']);
        \$this->assertEquals('some.condition', \$converted['some.condition']->getEventName());
        \$this->assertInstanceOf(ConditionAccessor::class, \$converted['other.condition']);
        \$this->assertEquals('other.condition', \$converted['other.condition']->getEventName());
    }

    public function testDecisionsAreConvertedToAccessor(): void
    {
        \$array = [
            'some.decision'  => [
                'eventName' => 'some.decision',
            ],
            'other.decision' => [
                'eventName' => 'other.decision',
            ],
        ];

        \$converted = EventBuilder::buildDecisions(\$array);

        \$this->assertCount(2, \$converted);
        \$this->assertInstanceOf(DecisionAccessor::class, \$converted['some.decision']);
        \$this->assertEquals('some.decision', \$converted['some.decision']->getEventName());
        \$this->assertInstanceOf(DecisionAccessor::class, \$converted['other.decision']);
        \$this->assertEquals('other.decision', \$converted['other.decision']->getEventName());
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
        return "@bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Builder/EventBuilderTest.php");
    }
}
