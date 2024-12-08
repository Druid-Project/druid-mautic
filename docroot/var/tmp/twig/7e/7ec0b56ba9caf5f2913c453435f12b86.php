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

/* @bundles/ReportBundle/Scheduler/Factory/SchedulerTemplateFactory.php */
class __TwigTemplate_5f109daac9a7a6e94ddbdda5a7c5c9c1 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Factory;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerDailyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerMonthBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerNowBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerWeeklyBuilder;
use Mautic\\ReportBundle\\Scheduler\\BuilderInterface;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;

class SchedulerTemplateFactory
{
    /**
     * @return BuilderInterface
     *
     * @throws NotSupportedScheduleTypeException
     */
    public function getBuilder(SchedulerInterface \$scheduler)
    {
        if (\$scheduler->isScheduledNow()) {
            return new SchedulerNowBuilder();
        }
        if (\$scheduler->isScheduledDaily()) {
            return new SchedulerDailyBuilder();
        }
        if (\$scheduler->isScheduledWeekly()) {
            return new SchedulerWeeklyBuilder();
        }
        if (\$scheduler->isScheduledMonthly()) {
            return new SchedulerMonthBuilder();
        }

        throw new NotSupportedScheduleTypeException();
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
        return "@bundles/ReportBundle/Scheduler/Factory/SchedulerTemplateFactory.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Factory/SchedulerTemplateFactory.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Factory/SchedulerTemplateFactory.php");
    }
}
