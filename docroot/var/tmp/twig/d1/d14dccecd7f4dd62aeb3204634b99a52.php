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

/* @bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php */
class __TwigTemplate_4db46b4e54c18746ce5e7e6c047c36de extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Entity;

use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;

class SchedulerEntity implements SchedulerInterface
{
    /**
     * @param bool        \$isScheduled
     * @param string|null \$scheduleUnit
     * @param string|null \$scheduleDay
     * @param string|null \$scheduleMonthFrequency
     */
    public function __construct(
        private \$isScheduled,
        private \$scheduleUnit,
        private \$scheduleDay,
        private \$scheduleMonthFrequency
    ) {
    }

    /**
     * @return bool
     */
    public function isScheduled()
    {
        return \$this->isScheduled;
    }

    /**
     * @return string|null
     */
    public function getScheduleUnit()
    {
        return \$this->scheduleUnit;
    }

    /**
     * @return string|null
     */
    public function getScheduleDay()
    {
        return \$this->scheduleDay;
    }

    /**
     * @return string|null
     */
    public function getScheduleMonthFrequency()
    {
        return \$this->scheduleMonthFrequency;
    }

    public function isScheduledNow(): bool
    {
        return SchedulerEnum::UNIT_NOW === \$this->getScheduleUnit();
    }

    public function isScheduledDaily(): bool
    {
        return SchedulerEnum::UNIT_DAILY === \$this->getScheduleUnit();
    }

    public function isScheduledWeekly(): bool
    {
        return SchedulerEnum::UNIT_WEEKLY === \$this->getScheduleUnit();
    }

    public function isScheduledMonthly(): bool
    {
        return SchedulerEnum::UNIT_MONTHLY === \$this->getScheduleUnit();
    }

    public function isScheduledWeekDays(): bool
    {
        return SchedulerEnum::DAY_WEEK_DAYS === \$this->getScheduleDay();
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
        return "@bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php");
    }
}
