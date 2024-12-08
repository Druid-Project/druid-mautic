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

/* @bundles/ReportBundle/Tests/Scheduler/Date/DateBuilderTest.php */
class __TwigTemplate_5e9848d65b13781676c4ea95876e8d2d extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Date;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder;
use Mautic\\ReportBundle\\Scheduler\\Date\\DateBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NoScheduleException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;
use PHPUnit\\Framework\\MockObject\\MockObject;

class DateBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|SchedulerBuilder
     */
    private MockObject \$schedulerBuilder;

    private DateBuilder \$dateBuilder;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->schedulerBuilder = \$this->createMock(SchedulerBuilder::class);
        \$this->dateBuilder      = new DateBuilder(\$this->schedulerBuilder);
    }

    public function testGetNextEvent(): void
    {
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$schedulerBuilder         = new SchedulerBuilder(\$schedulerTemplateFactory);
        \$dateBuilder              = new DateBuilder(\$schedulerBuilder);
        \$schedulerEntity          = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);
        \$date                     = \$dateBuilder->getNextEvent(\$schedulerEntity);
        \$expectedDate             = (new \\DateTime())->setTime(0, 0)->modify('+1 day');

        \$this->assertEquals(\$expectedDate, \$date);
    }

    public function testInvalidScheduler(): void
    {
        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$this->schedulerBuilder->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$schedulerEntity)
            ->willThrowException(new InvalidSchedulerException());

        \$this->expectException(NoScheduleException::class);

        \$this->dateBuilder->getNextEvent(\$schedulerEntity);
    }

    public function testSchedulerNotSupported(): void
    {
        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$this->schedulerBuilder->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$schedulerEntity)
            ->willThrowException(new NotSupportedScheduleTypeException());

        \$this->expectException(NoScheduleException::class);

        \$this->dateBuilder->getNextEvent(\$schedulerEntity);
    }

    public function testNoResult(): void
    {
        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$this->schedulerBuilder->expects(\$this->once())
            ->method('getNextEvent')
            ->with(\$schedulerEntity)
            ->willReturn([]);

        \$this->expectException(NoScheduleException::class);

        \$this->dateBuilder->getNextEvent(\$schedulerEntity);
    }

    public function testGetPreviewDaysForNow(): void
    {
        \$this->schedulerBuilder->expects(\$this->once())
            ->method('getNextEvents')
            ->with(\$this->isInstanceOf(SchedulerEntity::class), 1)
            ->willReturn([]);

        \$this->dateBuilder->getPreviewDays(true, SchedulerEnum::UNIT_NOW, '', '');
    }

    public function testGetPreviewDaysForMonths(): void
    {
        \$this->schedulerBuilder->expects(\$this->once())
            ->method('getNextEvents')
            ->with(\$this->isInstanceOf(SchedulerEntity::class), 10)
            ->willReturn([]);

        \$this->dateBuilder->getPreviewDays(true, SchedulerEnum::UNIT_MONTHLY, 'MON', '1');
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
        return "@bundles/ReportBundle/Tests/Scheduler/Date/DateBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Date/DateBuilderTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/Date/DateBuilderTest.php");
    }
}
