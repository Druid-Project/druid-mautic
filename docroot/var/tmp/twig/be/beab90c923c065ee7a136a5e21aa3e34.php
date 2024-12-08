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

/* @bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php */
class __TwigTemplate_e498bead2ab6da4277ba3835c2e9a7bd extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\EventListener;

use Mautic\\ReportBundle\\Event\\ReportEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReportSchedulerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private SchedulerPlanner \$schedulerPlanner
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [ReportEvents::REPORT_POST_SAVE => ['onReportSave', 0]];
    }

    public function onReportSave(ReportEvent \$event): ReportEvent
    {
        \$report = \$event->getReport();

        \$this->schedulerPlanner->computeScheduler(\$report);

        return \$event;
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
        return "@bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php");
    }
}
