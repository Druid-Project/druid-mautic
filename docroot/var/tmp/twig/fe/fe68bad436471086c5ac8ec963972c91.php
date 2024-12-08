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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/DAO/StatsDAOTest.php */
class __TwigTemplate_ef1b8bd58d869963d407fa83d2cd1e10 extends Template
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

namespace Mautic\\StatsBundle\\Tests\\Aggregate\\Collection\\DAO;

use Mautic\\StatsBundle\\Aggregate\\Collection\\DAO\\StatsDAO;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\DayStat;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\MonthStat;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\WeekStat;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\YearStat;
use PHPUnit\\Framework\\TestCase;

class StatsDAOTest extends TestCase
{
    public function testGetYearsReturnsYears(): void
    {
        \$expected = [
            2018,
            2019,
        ];

        \$stats = \$this->getStats()->getYears();
        \$this->assertEquals(\$expected, array_keys(\$stats));

        array_walk(\$stats, function (\$stat): void {
            \$this->assertInstanceOf(YearStat::class, \$stat);
        });
    }

    public function testGetMonthsReturnsFlattenedMonths(): void
    {
        \$expected = [
            '2018-12',
            '2019-11',
            '2019-12',
        ];

        \$stats = \$this->getStats()->getMonths();
        \$this->assertEquals(\$expected, array_keys(\$stats));

        array_walk(\$stats, function (\$stat): void {
            \$this->assertInstanceOf(MonthStat::class, \$stat);
        });
    }

    public function testGetWeekReturnsFlattenedMonths(): void
    {
        \$expected = [
            '2018-49',
            '2019-45',
            '2019-49',
        ];

        \$stats = \$this->getStats()->getWeeks();
        \$this->assertEquals(\$expected, array_keys(\$stats));

        array_walk(\$stats, function (\$stat): void {
            \$this->assertInstanceOf(WeekStat::class, \$stat);
        });
    }

    public function testGetDaysReturnsFlattenedDays(): void
    {
        \$expected = [
            '2018-12-07',
            '2019-11-07',
            '2019-11-08',
            '2019-12-07',
        ];

        \$stats = \$this->getStats()->getDays();
        \$this->assertEquals(\$expected, array_keys(\$stats));

        array_walk(\$stats, function (\$stat): void {
            \$this->assertInstanceOf(DayStat::class, \$stat);
        });
    }

    public function testGetHoursReturnsFlattenedHours(): void
    {
        \$expected = [
            '2018-12-07 12',
            '2018-12-07 13',
            '2018-12-07 14',
            '2019-11-07 12',
            '2019-11-08 12',
            '2019-12-07 12',
        ];

        \$stats = \$this->getStats()->getHours();
        \$this->assertEquals(\$expected, array_keys(\$stats));

        array_walk(\$stats, function (\$stat): void {
            \$this->assertTrue(is_int(\$stat->getCount()));
        });
    }

    private function getStats(): StatsDAO
    {
        \$stats = new StatsDAO();

        \$stats->getYear(2019)
            ->getMonth(11)
            ->getDay(8)
            ->getHour(12)
            ->setCount(100);

        \$stats->getYear(2018)
            ->getMonth(12)
            ->getDay(7)
            ->getHour(12)
            ->setCount(100);

        \$stats->getYear(2018)
            ->getMonth(12)
            ->getDay(7)
            ->getHour(14)
            ->setCount(300);

        \$stats->getYear(2018)
            ->getMonth(12)
            ->getDay(7)
            ->getHour(13)
            ->setCount(200);

        \$stats->getYear(2019)
            ->getMonth(12)
            ->getDay(7)
            ->getHour(12)
            ->setCount(100);

        \$stats->getYear(2019)
            ->getMonth(11)
            ->getDay(7)
            ->getHour(12)
            ->setCount(100);

        return \$stats;
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
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/DAO/StatsDAOTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/DAO/StatsDAOTest.php", "/app/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/DAO/StatsDAOTest.php");
    }
}
