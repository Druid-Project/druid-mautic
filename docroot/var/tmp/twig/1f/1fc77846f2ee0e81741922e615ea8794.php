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

/* @bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php */
class __TwigTemplate_eb8f0374f5ae751da3f1632307d05787 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerDailyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Rule;

class SchedulerDailyBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuilEvent(): void
    {
        \$schedulerDailyBuilder = new SchedulerDailyBuilder();

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$startDate = (new \\DateTime())->setTime(0, 0)->modify('+1 day');
        \$rule      = new Rule();
        \$rule->setStartDate(\$startDate)
            ->setCount(1);

        \$schedulerDailyBuilder->build(\$rule, \$schedulerEntity);

        \$this->assertEquals(Rule::\$freqs['DAILY'], \$rule->getFreq());
    }

    public function testBuilEventFails(): void
    {
        \$schedulerDailyBuilder = new SchedulerDailyBuilder();

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$rule = \$this->getMockBuilder(Rule::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$rule->expects(\$this->once())
            ->method('setFreq')
            ->with('DAILY')
            ->willThrowException(new InvalidArgument());

        \$this->expectException(InvalidSchedulerException::class);

        \$schedulerDailyBuilder->build(\$rule, \$schedulerEntity);
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
        return "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerDailyBuilderTest.php");
    }
}
