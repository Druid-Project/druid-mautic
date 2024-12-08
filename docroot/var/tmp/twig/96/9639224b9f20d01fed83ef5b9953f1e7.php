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

/* @bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php */
class __TwigTemplate_ccf4f0f52892e200b9450e50b6e4d519 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Validator;

use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\ScheduleNotValidException;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class ScheduleIsValidValidator extends ConstraintValidator
{
    public function __construct(
        private SchedulerBuilder \$schedulerBuilder
    ) {
    }

    /**
     * @param Report \$report
     */
    public function validate(\$report, Constraint \$constraint): void
    {
        if (!\$report->isScheduled()) {
            \$report->setAsNotScheduled();

            return;
        }

        if (is_null(\$report->getToAddress())) {
            \$this->context->buildViolation('mautic.report.schedule.to_address_required')
                ->atPath('toAddress')
                ->addViolation();
        }

        if (\$report->isScheduledDaily()) {
            \$report->ensureIsDailyScheduled();
            \$this->buildScheduler(\$report);

            return;
        }
        if (\$report->isScheduledWeekly()) {
            try {
                \$report->ensureIsWeeklyScheduled();
                \$this->buildScheduler(\$report);

                return;
            } catch (ScheduleNotValidException) {
                \$this->addReportScheduleNotValidViolation();
            }
        }
        if (\$report->isScheduledMonthly()) {
            try {
                \$report->ensureIsMonthlyScheduled();
                \$this->buildScheduler(\$report);

                return;
            } catch (ScheduleNotValidException) {
                \$this->addReportScheduleNotValidViolation();
            }
        }
    }

    private function addReportScheduleNotValidViolation(): void
    {
        \$this->context->buildViolation('mautic.report.schedule.notValid')
            ->atPath('isScheduled')
            ->addViolation();
    }

    private function buildScheduler(Report \$report): void
    {
        try {
            \$this->schedulerBuilder->getNextEvent(\$report);

            return;
        } catch (InvalidSchedulerException) {
            \$message = 'mautic.report.schedule.notValid';
        } catch (NotSupportedScheduleTypeException) {
            \$message = 'mautic.report.schedule.notSupportedType';
        }

        \$this->context->buildViolation(\$message)
            ->atPath('isScheduled')
            ->addViolation();
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
        return "@bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Validator/ScheduleIsValidValidator.php");
    }
}
