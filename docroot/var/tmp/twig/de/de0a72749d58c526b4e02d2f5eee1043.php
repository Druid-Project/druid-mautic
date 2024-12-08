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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php */
class __TwigTemplate_e4ebfcd1e077857ff51eb677e0b3442e extends Template
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

namespace Mautic\\StatsBundle\\Tests\\Aggregate\\Collection\\Stats;

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\DayStat;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\HourStat;
use PHPUnit\\Framework\\TestCase;

class DayStatTest extends TestCase
{
    private \$day  = '2019-11-07';

    private \$hour = 11;

    private DayStat \$dayStat;

    private \$hourStat;

    protected function setUp(): void
    {
        \$this->dayStat  = new DayStat(\$this->day);
        \$this->hourStat = \$this->dayStat->getHour(\$this->hour);
    }

    public function testGetHour(): void
    {
        \$this->assertInstanceOf(HourStat::class, \$this->hourStat);
        \$this->assertSame(\"\$this->day \$this->hour\", \$this->hourStat->getHour());
        \$this->assertSame(0, \$this->hourStat->getCount());

        \$this->hourStat = \$this->dayStat->getHour(\$this->hour);

        \$this->assertSame(\$this->hourStat, \$this->dayStat->getHour(\$this->hour));
        \$this->assertSame(\"\$this->day \$this->hour\", \$this->hourStat->getHour());
        \$this->assertSame(0, \$this->hourStat->getCount());
    }

    public function testGetStats(): void
    {
        \$result = \$this->dayStat->getStats();
        \$this->assertSame([\"\$this->day \$this->hour\" => \$this->hourStat], \$result);
    }

    public function testGetSum(): void
    {
        \$this->dayStat  = new DayStat(\$this->day);
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour + 1);
        \$this->assertSame(2, \$this->dayStat->getCount());
    }

    public function testGetCount(): void
    {
        \$this->dayStat  = new DayStat(\$this->day);
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour);
        \$this->assertSame(1, \$this->dayStat->getCount());
        \$this->dayStat->getHour(\$this->hour + 1);
        \$this->assertSame(2, \$this->dayStat->getCount());
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
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php", "/app/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/DayStatTest.php");
    }
}
