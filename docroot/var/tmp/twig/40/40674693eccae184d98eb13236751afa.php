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

/* @bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php */
class __TwigTemplate_087b9a6372d97ee6fbf78cf086196ae7 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update;

use Mautic\\CoreBundle\\Update\\Step\\StepInterface;
use Mautic\\CoreBundle\\Update\\StepProvider;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class StepProviderTest extends TestCase
{
    private StepProvider \$provider;

    protected function setUp(): void
    {
        \$this->provider = new StepProvider();

        /** @var MockObject|StepInterface \$step1 */
        \$step1 = \$this->createMock(StepInterface::class);
        \$step1->method('getOrder')
            ->willReturn(10);
        \$step1->method('shouldExecuteInFinalStage')
            ->willReturn(false);
        \$this->provider->addStep(\$step1);

        /** @var MockObject|StepInterface \$step2 */
        \$step2 = \$this->createMock(StepInterface::class);
        \$step2->method('getOrder')
            ->willReturn(0);
        \$step2->method('shouldExecuteInFinalStage')
            ->willReturn(false);
        \$this->provider->addStep(\$step2);

        /** @var MockObject|StepInterface \$step3 */
        \$step3 = \$this->createMock(StepInterface::class);
        \$step3->method('getOrder')
            ->willReturn(50);
        \$step3->method('shouldExecuteInFinalStage')
            ->willReturn(true);
        \$this->provider->addStep(\$step3);

        /** @var MockObject|StepInterface \$step4 */
        \$step4 = \$this->createMock(StepInterface::class);
        \$step4->method('getOrder')
            ->willReturn(30);
        \$step4->method('shouldExecuteInFinalStage')
            ->willReturn(true);
        \$this->provider->addStep(\$step4);
    }

    public function testInitialStepsAreOrdered(): void
    {
        \$steps = \$this->provider->getInitialSteps();
        \$this->assertCount(2, \$steps);
        \$this->assertEquals(0, \$steps[0]->getOrder());
        \$this->assertEquals(10, \$steps[1]->getOrder());
    }

    public function testsFinalStepsAreOrdered(): void
    {
        \$steps = \$this->provider->getFinalSteps();
        \$this->assertCount(2, \$steps);
        \$this->assertEquals(30, \$steps[0]->getOrder());
        \$this->assertEquals(50, \$steps[1]->getOrder());
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
        return "@bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Update/StepProviderTest.php");
    }
}
