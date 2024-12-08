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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php */
class __TwigTemplate_022f3cc5c54b267bdc1825a90b086f0e extends Template
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

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\HourStat;
use PHPUnit\\Framework\\TestCase;

class HourStatTest extends TestCase
{
    public function testAll(): void
    {
        \$hour     = '2018-12-07 12';
        \$hourStat = new HourStat('2018-12-07 12');
        \$this->assertSame(\$hour, \$hourStat->getHour());

        // Counts
        \$this->assertSame(0, \$hourStat->getCount());
        \$count = 1;
        \$hourStat->setCount(\$count);
        \$this->assertSame(\$count, \$hourStat->getCount());
        \$count = 2;
        \$hourStat->setCount(\$count);
        \$this->assertSame(\$count, \$hourStat->getCount());
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
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php", "/app/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/HourStatTest.php");
    }
}
