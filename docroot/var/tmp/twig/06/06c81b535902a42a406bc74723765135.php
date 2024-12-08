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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateRelativeIntervalTest.php */
class __TwigTemplate_ba47bb658c7667c5afc30a49eb40e6f1 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date\\Other;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionParameters;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\TimezoneResolver;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;

class DateRelativeIntervalTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getOperator
     */
    public function testGetOperatorEqual(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$filter        = [
            'operator' => '=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '+5 days', \$dateOptionParameters);

        \$this->assertEquals('like', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getOperator
     */
    public function testGetOperatorNotEqual(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$filter        = [
            'operator' => '!=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '+5 days', \$dateOptionParameters);

        \$this->assertEquals('notLike', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getOperator
     */
    public function testGetOperatorLessOrEqual(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$dateDecorator->method('getOperator')
            ->with()
            ->willReturn('==<<'); // Test that value is really returned from Decorator

        \$filter        = [
            'operator' => '=<',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '+5 days', \$dateOptionParameters);

        \$this->assertEquals('==<<', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getParameterValue
     */
    public function testGetParameterValuePlusDaysWithGreaterOperator(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('2018-03-02', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter = [
            'operator' => '>',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '+5 days', \$dateOptionParameters);

        \$this->assertEquals('2018-03-07', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getParameterValue
     */
    public function testGetParameterValueMinusMonthWithNotEqualOperator(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('2018-03-02', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter = [
            'operator' => '!=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '-3 months', \$dateOptionParameters);

        \$this->assertEquals('2017-12-02%', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getParameterValue
     */
    public function testGetParameterValueDaysAgoWithNotEqualOperator(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('2018-03-02', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter = [
            'operator' => '!=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '5 days ago', \$dateOptionParameters);

        \$this->assertEquals('2018-02-25%', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getParameterValue
     */
    public function testGetParameterValueYearsAgoWithGreaterOperator(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('2018-03-02', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter = [
            'operator' => '>',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '2 years ago', \$dateOptionParameters);

        \$this->assertEquals('2016-03-02', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other\\DateRelativeInterval::getParameterValue
     */
    public function testGetParameterValueDaysWithEqualOperator(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('2018-03-02', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter = [
            'operator' => '=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateRelativeInterval(\$dateDecorator, '5 days', \$dateOptionParameters);

        \$this->assertEquals('2018-03-07%', \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
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
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateRelativeIntervalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateRelativeIntervalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/Other/DateRelativeIntervalTest.php");
    }
}
