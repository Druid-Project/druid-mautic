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

/* @bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php */
class __TwigTemplate_bd154c3effd5106639bf6942d7ae4412 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\Chart;

use Mautic\\CoreBundle\\Helper\\Chart\\DateRangeUnitTrait;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class DateRangeUnitTraitTest extends TestCase
{
    /**
     * @var MockObject|DateRangeUnitTrait
     */
    private MockObject \$trait;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->trait = \$this->getMockForTrait(DateRangeUnitTrait::class);
    }

    public function testGetTimeUnitFromDateRangeWithSameDay(): void
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2019-04-01');
        \$this->assertSame('H', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanDay(): void
    {
        \$from = new \\DateTime('2019-04-01 00:00:00');
        \$to   = new \\DateTime('2019-04-01 04:30:00');
        \$this->assertSame('H', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanHour(): void
    {
        \$from = new \\DateTime('2019-04-01 04:00:00');
        \$to   = new \\DateTime('2019-04-01 04:30:00');
        \$this->assertSame('i', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanMinute(): void
    {
        \$from = new \\DateTime('2019-04-01 04:00:00');
        \$to   = new \\DateTime('2019-04-01 04:00:30');
        \$this->assertSame('i', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThanMonth(): void
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2019-04-30');
        \$this->assertSame('d', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThan100Days(): void
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2019-05-30');
        \$this->assertSame('W', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithLessThan1000Days(): void
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2020-05-30');
        \$this->assertSame('m', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
    }

    public function testGetTimeUnitFromDateRangeWithMoreThan1000Days(): void
    {
        \$from = new \\DateTime('2019-04-01');
        \$to   = new \\DateTime('2022-05-30');
        \$this->assertSame('Y', \$this->trait->getTimeUnitFromDateRange(\$from, \$to));
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Chart/DateRangeUnitTraitTest.php");
    }
}
