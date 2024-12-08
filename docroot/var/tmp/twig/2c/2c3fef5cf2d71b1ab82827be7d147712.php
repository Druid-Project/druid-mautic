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

/* @bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php */
class __TwigTemplate_f29c363940c17f3b0b9e0f13f4332c23 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Factory;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerDailyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerMonthBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerNowBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerWeeklyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;

class SchedulerTemplateFactoryTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNowBuilder(): void
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_NOW, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerNowBuilder::class, \$builder);
    }

    public function testDailyBuilder(): void
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerDailyBuilder::class, \$builder);
    }

    public function testWeeklyBuilder(): void
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_WEEKLY, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerWeeklyBuilder::class, \$builder);
    }

    public function testMonthlyBuilder(): void
    {
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_MONTHLY, null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$builder                  = \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);

        \$this->assertInstanceOf(SchedulerMonthBuilder::class, \$builder);
    }

    public function testNotSupportedBuilder(): void
    {
        \$schedulerEntity          = new SchedulerEntity(true, 'xx', null, null);
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();

        \$this->expectException(NotSupportedScheduleTypeException::class);
        \$schedulerTemplateFactory->getBuilder(\$schedulerEntity);
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
        return "@bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/Factory/SchedulerTemplateFactoryTest.php");
    }
}
