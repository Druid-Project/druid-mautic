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

/* @bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php */
class __TwigTemplate_4e8d1ab379aa07311d6a07d078f78918 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\EventCollector\\Accessor\\Event;

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;

class ActionAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBatchEventNameIsNotExtra(): void
    {
        \$actionAccessor = new ActionAccessor(['batchEventName' => 'test']);

        \$this->assertEmpty(\$actionAccessor->getExtraProperties());
    }

    public function testBatchNameIsReturned(): void
    {
        \$actionAccessor = new ActionAccessor(['batchEventName' => 'test']);

        \$this->assertEquals('test', \$actionAccessor->getBatchEventName());
    }

    public function testExtraParamIsReturned(): void
    {
        \$actionAccessor = new ActionAccessor(['batchEventName' => 'test', 'foo' => 'bar']);

        \$this->assertEquals(['foo' => 'bar'], \$actionAccessor->getExtraProperties());
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
        return "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/ActionAccessorTest.php");
    }
}
