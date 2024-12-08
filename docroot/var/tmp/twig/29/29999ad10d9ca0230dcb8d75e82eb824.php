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

/* @bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php */
class __TwigTemplate_2fde1cb09b4b56d78663342170da4f39 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner\\Result;

use Mautic\\CampaignBundle\\Executioner\\Result\\Counter;

class CounterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testCounterIncrements(): void
    {
        \$counter = new Counter(1, 1, 1, 1, 1, 1);

        \$counter->advanceEvaluated(2);
        \$this->assertEquals(3, \$counter->getEvaluated());
        \$this->assertEquals(3, \$counter->getTotalEvaluated());

        \$counter->advanceTotalEvaluated(1);
        \$this->assertEquals(3, \$counter->getEvaluated());
        \$this->assertEquals(4, \$counter->getTotalEvaluated());

        \$counter->advanceExecuted(2);
        \$this->assertEquals(3, \$counter->getExecuted());
        \$this->assertEquals(3, \$counter->getTotalExecuted());

        \$counter->advanceTotalExecuted(1);
        \$this->assertEquals(3, \$counter->getExecuted());
        \$this->assertEquals(4, \$counter->getTotalExecuted());

        \$counter->advanceTotalScheduled(2);
        \$this->assertEquals(3, \$counter->getTotalScheduled());
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
        return "@bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/Result/CounterTest.php");
    }
}
