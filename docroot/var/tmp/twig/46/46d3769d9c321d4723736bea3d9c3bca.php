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

/* @bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php */
class __TwigTemplate_c02a37e584309b0b98e64b64488172f5 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\EventListener;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Event\\ReportEvent;
use Mautic\\ReportBundle\\Scheduler\\EventListener\\ReportSchedulerSubscriber;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;

class ReportSchedulerSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testOnReportSave(): void
    {
        \$report = new Report();
        \$event  = new ReportEvent(\$report);

        \$schedulerPlanner = \$this->getMockBuilder(SchedulerPlanner::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$schedulerPlanner->expects(\$this->once())
            ->method('computeScheduler')
            ->with(\$report);

        \$reportSchedulerSubscriber = new ReportSchedulerSubscriber(\$schedulerPlanner);
        \$reportSchedulerSubscriber->onReportSave(\$event);
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
        return "@bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/EventListener/ReportSchedulerSubscriberTest.php");
    }
}
