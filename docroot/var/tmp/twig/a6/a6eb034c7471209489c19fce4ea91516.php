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

/* @bundles/ReportBundle/Scheduler/Builder/SchedulerDailyBuilder.php */
class __TwigTemplate_4d3a53fe612449beb5a11255fd07b99c extends Template
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

use Mautic\\ReportBundle\\Scheduler\\BuilderInterface;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Rule;

class SchedulerDailyBuilder implements BuilderInterface
{
    /**
     * @throws InvalidSchedulerException
     */
    public function build(Rule \$rule, SchedulerInterface \$scheduler): Rule
    {
        try {
            \$rule->setFreq('DAILY');
        } catch (InvalidArgument) {
            throw new InvalidSchedulerException();
        }

        return \$rule;
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
        return "@bundles/ReportBundle/Scheduler/Builder/SchedulerDailyBuilder.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Builder/SchedulerDailyBuilder.php", "/app/docroot/app/bundles/ReportBundle/Scheduler/Builder/SchedulerDailyBuilder.php");
    }
}
