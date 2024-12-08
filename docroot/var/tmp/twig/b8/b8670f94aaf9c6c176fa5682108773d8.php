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

/* @bundles/LeadBundle/Tests/Segment/Decorator/Date/Month/DateMonthThisTest.php */
class __TwigTemplate_8310580d23783573df3ea38775d6205a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Segment\\Decorator\\Date\\Month;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionParameters;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthThis;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\TimezoneResolver;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;

class DateMonthThisTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthThis::getOperator
     */
    public function testGetOperatorBetween(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$filter        = [
            'operator' => '=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateMonthThis(\$dateDecorator, \$dateOptionParameters);

        \$this->assertEquals('like', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthThis::getOperator
     */
    public function testGetOperatorLessOrEqual(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$dateDecorator->method('getOperator')
            ->with()
            ->willReturn('=<');

        \$filter        = [
            'operator' => 'lte',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateMonthThis(\$dateDecorator, \$dateOptionParameters);

        \$this->assertEquals('=<', \$filterDecorator->getOperator(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthThis::getParameterValue
     */
    public function testGetParameterValueBetween(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter        = [
            'operator' => '!=',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateMonthThis(\$dateDecorator, \$dateOptionParameters);

        \$expectedDate = new \\DateTime('first day of this month');

        \$this->assertEquals(\$expectedDate->format('Y-m-%'), \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
    }

    /**
     * @covers \\Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Month\\DateMonthThis::getParameterValue
     */
    public function testGetParameterValueSingle(): void
    {
        \$dateDecorator    = \$this->createMock(DateDecorator::class);
        \$timezoneResolver = \$this->createMock(TimezoneResolver::class);

        \$date = new DateTimeHelper('', null, 'local');

        \$timezoneResolver->method('getDefaultDate')
            ->with()
            ->willReturn(\$date);

        \$filter        = [
            'operator' => 'lt',
        ];
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);
        \$dateOptionParameters      = new DateOptionParameters(\$contactSegmentFilterCrate, [], \$timezoneResolver);

        \$filterDecorator = new DateMonthThis(\$dateDecorator, \$dateOptionParameters);

        \$expectedDate = new \\DateTime('first day of this month');

        \$this->assertEquals(\$expectedDate->format('Y-m-d'), \$filterDecorator->getParameterValue(\$contactSegmentFilterCrate));
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
        return "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Month/DateMonthThisTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Segment/Decorator/Date/Month/DateMonthThisTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Segment/Decorator/Date/Month/DateMonthThisTest.php");
    }
}
