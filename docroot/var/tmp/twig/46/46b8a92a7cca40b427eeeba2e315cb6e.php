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

/* @bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php */
class __TwigTemplate_71a575663aa0fa86e854c5ec1553b596 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\EventListener;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Event\\ReportScheduleSendEvent;
use Mautic\\ReportBundle\\EventListener\\SchedulerSubscriber;
use Mautic\\ReportBundle\\Scheduler\\Model\\SendSchedule;

class SchedulerSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoEmailsProvided(): void
    {
        \$sendScheduleMock = \$this->getMockBuilder(SendSchedule::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$schedulerSubscriber = new SchedulerSubscriber(\$sendScheduleMock);

        \$report                  = new Report();
        \$date                    = new \\DateTime();
        \$scheduler               = new Scheduler(\$report, \$date);
        \$file                    = 'path-to-a-file';
        \$reportScheduleSendEvent = new ReportScheduleSendEvent(\$scheduler, \$file);

        \$sendScheduleMock->expects(\$this->once())
            ->method('send')
            ->with(\$scheduler, \$file);

        \$schedulerSubscriber->onScheduleSend(\$reportScheduleSendEvent);
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
        return "@bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/EventListener/SchedulerSubscriberTest.php");
    }
}
