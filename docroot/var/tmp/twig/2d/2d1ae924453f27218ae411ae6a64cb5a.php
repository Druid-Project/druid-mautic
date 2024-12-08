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

/* @bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php */
class __TwigTemplate_9c1f111ef3acb7ed548cf3c866ac2a6c extends Template
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

use Mautic\\StatsBundle\\Aggregate\\Collection\\Stats\\WeekStat;
use PHPUnit\\Framework\\TestCase;

class WeekStatTest extends TestCase
{
    public function testAll(): void
    {
        \$weekStat = new WeekStat();
        \$this->assertSame(0, \$weekStat->getCount());
        \$count = 1;
        \$weekStat->setCount(\$count);
        \$this->assertSame(\$count, \$weekStat->getCount());
        \$weekStat->addToCount(\$count);
        \$this->assertSame(\$count * 2, \$weekStat->getCount());
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
        return "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php";
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
        return new Source("", "@bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php", "/app/docroot/app/bundles/StatsBundle/Tests/Aggregate/Collection/Stats/WeekStatTest.php");
    }
}
