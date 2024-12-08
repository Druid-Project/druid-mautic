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

/* @bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php */
class __TwigTemplate_15b65585f854594696c728987cd813ea extends Template
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

use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\DecisionAccessor;

class DecisionAccessorTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEventNameIsReturned(): void
    {
        \$accessor = new DecisionAccessor(['eventName' => 'test']);

        \$this->assertEquals('test', \$accessor->getEventName());
    }

    public function testExtraParamIsReturned(): void
    {
        \$accessor = new DecisionAccessor(['eventName' => 'test', 'foo' => 'bar']);

        \$this->assertEquals(['foo' => 'bar'], \$accessor->getExtraProperties());
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
        return "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/EventCollector/Accessor/Event/DecisionAccessorTest.php");
    }
}
