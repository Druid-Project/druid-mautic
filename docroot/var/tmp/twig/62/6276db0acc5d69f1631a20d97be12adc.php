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

/* @bundles/ReportBundle/EventListener/SchedulerSubscriber.php */
class __TwigTemplate_b7b6c7acc17a7b5f243ac15fac6b57dd extends Template
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

namespace Mautic\\ReportBundle\\EventListener;

use Mautic\\ReportBundle\\Event\\ReportScheduleSendEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Mautic\\ReportBundle\\Scheduler\\Model\\SendSchedule;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SchedulerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private SendSchedule \$sendSchedule
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ReportEvents::REPORT_SCHEDULE_SEND => ['onScheduleSend', 0],
        ];
    }

    public function onScheduleSend(ReportScheduleSendEvent \$event): void
    {
        \$scheduler = \$event->getScheduler();
        \$file      = \$event->getFile();

        \$this->sendSchedule->send(\$scheduler, \$file);
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
        return "@bundles/ReportBundle/EventListener/SchedulerSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/SchedulerSubscriber.php", "/app/docroot/app/bundles/ReportBundle/EventListener/SchedulerSubscriber.php");
    }
}
