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

/* @bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php */
class __TwigTemplate_c3c066a9d111b8bf6934ebb7b6df9520 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;
use Recurr\\Exception\\InvalidWeekday;
use Recurr\\Rule;
use Recurr\\Transformer\\ArrayTransformer;

class SchedulerBuilder
{
    public function __construct(
        private SchedulerTemplateFactory \$schedulerTemplateFactory
    ) {
    }

    /**
     * @return \\Recurr\\Recurrence[]|\\Recurr\\RecurrenceCollection
     *
     * @throws InvalidSchedulerException
     * @throws NotSupportedScheduleTypeException
     */
    public function getNextEvent(SchedulerInterface \$scheduler)
    {
        return \$this->getNextEvents(\$scheduler, 1);
    }

    /**
     * @param int \$count
     *
     * @return \\Recurr\\RecurrenceCollection
     *
     * @throws InvalidSchedulerException
     * @throws NotSupportedScheduleTypeException
     */
    public function getNextEvents(SchedulerInterface \$scheduler, \$count)
    {
        if (!\$scheduler->isScheduled()) {
            throw new InvalidSchedulerException();
        }

        \$builder   = \$this->schedulerTemplateFactory->getBuilder(\$scheduler);
        \$startDate = new \\DateTime();
        \$rule      = new Rule();

        if (!\$scheduler->isScheduledNow()) {
            \$startDate->setTime(0, 0)->modify('+1 day');
        }

        \$rule->setStartDate(\$startDate)->setCount(\$count);

        try {
            \$finalScheduler = \$builder->build(\$rule, \$scheduler);
            \$transformer    = new ArrayTransformer();

            return \$transformer->transform(\$finalScheduler);
        } catch (InvalidWeekday) {
            throw new InvalidSchedulerException();
        }
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
        return "@bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php");
    }
}
