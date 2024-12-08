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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php */
class __TwigTemplate_6d88348182d7bc6db5c806e99eaf0d21 extends Template
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
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\MonthStat;
use PHPUnit\\Framework\\TestCase;

class MonthStatTest extends TestCase
{
    private \$month  = '2019-12';

    private \$day    = 11;

    private MonthStat \$monthStat;

    private \$dayStat;

    protected function setUp(): void
    {
        \$this->monthStat = new MonthStat(\$this->month);
        \$this->dayStat   = \$this->monthStat->getDay(\$this->day);
    }

    public function testGetDay(): void
    {
        \$this->assertInstanceOf(DayStat::class, \$this->dayStat);
        \$day = \$this->monthStat->getDay(\$this->day);
        \$this->assertInstanceOf(DayStat::class, \$day);
        \$this->assertSame([], \$day->getStats());
        \$this->assertSame(1, \$this->monthStat->getCount());

        \$day = \$this->monthStat->getDay(\$this->day + 1);
        \$this->assertSame([], \$day->getStats());
        \$this->assertSame(2, \$this->monthStat->getCount());
    }

    public function testGetStats(): void
    {
        \$result = \$this->monthStat->getStats();
        \$this->assertSame([\"\$this->month-\$this->day\" => \$this->dayStat], \$result);
    }

    public function testGetSum(): void
    {
        \$this->monthStat  = new MonthStat(\$this->month);
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day + 1);
        \$this->assertSame(2, \$this->monthStat->getCount());
    }

    public function testGetCount(): void
    {
        \$this->monthStat  = new MonthStat(\$this->month);
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day);
        \$this->assertSame(1, \$this->monthStat->getCount());
        \$this->monthStat->getDay(\$this->day + 1);
        \$this->assertSame(2, \$this->monthStat->getCount());
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
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php", "/app/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/MonthStatTest.php");
    }
}
