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

/* @bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php */
class __TwigTemplate_b90bd6b4fabc4db16eacf0a5668fd056 extends Template
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

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;
use Recurr\\Recurrence;
use Recurr\\RecurrenceCollection;

class SchedulerBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetNextEvent(): void
    {
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$schedulerBuilder         = new SchedulerBuilder(\$schedulerTemplateFactory);

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$events = \$schedulerBuilder->getNextEvent(\$schedulerEntity);

        \$this->assertInstanceOf(RecurrenceCollection::class, \$events);

        \$event = \$events[0];
        \$this->assertInstanceOf(Recurrence::class, \$event);

        \$expectedDate = (new \\DateTime())->setTime(0, 0)->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());
    }

    public function testGetNextEvents(): void
    {
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$schedulerBuilder         = new SchedulerBuilder(\$schedulerTemplateFactory);

        \$schedulerEntity = new SchedulerEntity(true, SchedulerEnum::UNIT_DAILY, null, null);

        \$events = \$schedulerBuilder->getNextEvents(\$schedulerEntity, 3);

        \$this->assertInstanceOf(RecurrenceCollection::class, \$events);

        \$event = \$events[0];
        \$this->assertInstanceOf(Recurrence::class, \$event);

        \$expectedDate = (new \\DateTime())->setTime(0, 0)->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());

        \$event = \$events[1];
        \$expectedDate->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());

        \$event = \$events[2];
        \$expectedDate->modify('+1 day');
        \$this->assertEquals(\$expectedDate, \$event->getStart());
    }

    public function testNoScheduler(): void
    {
        \$schedulerTemplateFactory = new SchedulerTemplateFactory();
        \$schedulerBuilder         = new SchedulerBuilder(\$schedulerTemplateFactory);

        \$SchedulerEntity = new SchedulerEntity(false, SchedulerEnum::UNIT_DAILY, null, null);

        \$this->expectException(InvalidSchedulerException::class);

        \$schedulerBuilder->getNextEvent(\$SchedulerEntity);
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
        return "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerBuilderTest.php");
    }
}
