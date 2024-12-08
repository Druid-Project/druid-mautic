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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php */
class __TwigTemplate_709a494ef849a1cb73157c84611f2296 extends Template
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

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\MonthStat;
use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\YearStat;
use PHPUnit\\Framework\\TestCase;

class YearStatTest extends TestCase
{
    private \$year     = '2019';

    private \$month    = 11;

    private YearStat \$yearStat;

    private \$monthStat;

    protected function setUp(): void
    {
        \$this->yearStat  = new YearStat(\$this->year);
        \$this->monthStat = \$this->yearStat->getMonth(\$this->month);
    }

    public function testGetMonth(): void
    {
        \$this->assertInstanceOf(MonthStat::class, \$this->monthStat);
        \$month = \$this->yearStat->getMonth(\$this->month);
        \$this->assertInstanceOf(MonthStat::class, \$month);
        \$this->assertSame([], \$month->getStats());
        \$this->assertSame(1, \$this->yearStat->getCount());

        \$month = \$this->yearStat->getMonth(\$this->month + 1);
        \$this->assertSame([], \$month->getStats());
        \$this->assertSame(2, \$this->yearStat->getCount());
    }

    public function testGetStats(): void
    {
        \$result = \$this->yearStat->getStats();
        \$this->assertSame([\"\$this->year-\$this->month\" => \$this->monthStat], \$result);
    }

    public function testGetSum(): void
    {
        \$this->yearStat  = new YearStat(\$this->year);
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month + 1);
        \$this->assertSame(2, \$this->yearStat->getCount());
    }

    public function testGetCount(): void
    {
        \$this->yearStat  = new YearStat(\$this->year);
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month);
        \$this->assertSame(1, \$this->yearStat->getCount());
        \$this->yearStat->getMonth(\$this->month + 1);
        \$this->assertSame(2, \$this->yearStat->getCount());
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
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php", "/app/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/YearStatTest.php");
    }
}
