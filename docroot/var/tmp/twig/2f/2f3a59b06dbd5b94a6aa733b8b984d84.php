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

/* @bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php */
class __TwigTemplate_0beb4a2f62f61864b7bb31578d26b50e extends Template
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

declare(strict_types=1);

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerNowBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Rule;

class SchedulerNowBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBuilEvent(): void
    {
        \$schedulerNowBuilder = new SchedulerNowBuilder();
        \$schedulerEntity     = new SchedulerEntity(true, SchedulerEnum::UNIT_NOW, null, null);
        \$startDate           = new \\DateTime();
        \$rule                = new Rule();

        \$rule->setStartDate(\$startDate)
            ->setCount(1);

        \$schedulerNowBuilder->build(\$rule, \$schedulerEntity);

        \$this->assertEquals(Rule::\$freqs['SECONDLY'], \$rule->getFreq());
    }

    public function testBuilEventFails(): void
    {
        \$schedulerNowBuilder = new SchedulerNowBuilder();
        \$schedulerEntity     = new SchedulerEntity(true, SchedulerEnum::UNIT_NOW, null, null);
        \$rule                = \$this->createMock(Rule::class);

        \$rule->expects(\$this->once())
            ->method('setFreq')
            ->with('SECONDLY')
            ->willThrowException(new InvalidArgument());

        \$this->expectException(InvalidSchedulerException::class);

        \$schedulerNowBuilder->build(\$rule, \$schedulerEntity);
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
        return "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/Builder/SchedulerNowBuilderTest.php");
    }
}
