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

/* @bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php */
class __TwigTemplate_1c337e771404826f0a977dfc750b6924 extends Template
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

use Mautic\\CoreBundle\\Helper\\Chart\\LineChart;

class LineChartTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox The getUnitInterval returns the correct interval objects
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\Chart\\LineChart::getUnitInterval
     */
    public function testGetUnitInterval(): void
    {
        \$units = [
            'Y' => new \\DateInterval('P1Y'),
            'm' => new \\DateInterval('P1M'),
            'W' => new \\DateInterval('P1W'),
            'd' => new \\DateInterval('P1D'),
            'H' => new \\DateInterval('PT1H'),
            'i' => new \\DateInterval('PT1M'),
            's' => new \\DateInterval('PT1S'),
        ];

        foreach (\$units as \$unit => \$expected) {
            \$chart    = new LineChart(\$unit, new \\DateTime(), new \\DateTime());
            \$interval = \$chart->getUnitInterval();
            \$this->assertEquals(\$expected, \$interval);
        }
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Chart/LineChartTest.php");
    }
}
