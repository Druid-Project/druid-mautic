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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php */
class __TwigTemplate_4c908250346781f2d72cd1cba5b816c1 extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection\\Stats;

class YearStat implements StatInterface
{
    /**
     * @var MonthStat[]
     */
    private array \$stats = [];

    private int \$year;

    /**
     * @param int \$year
     */
    public function __construct(\$year)
    {
        \$this->year = (int) \$year;
    }

    /**
     * @param int \$month
     *
     * @return MonthStat
     *
     * @throws \\Exception
     */
    public function getMonth(\$month)
    {
        \$key = (new \\DateTime(\"{\$this->year}-\$month-01 00:00:00\"))->format('Y-m');

        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = new MonthStat(\$key);
        }

        return \$this->stats[\$key];
    }

    /**
     * @return MonthStat[]
     */
    public function getStats()
    {
        return \$this->stats;
    }

    /**
     * @return int
     */
    public function getSum()
    {
        \$sum = 0;
        foreach (\$this->stats as \$stat) {
            \$sum += \$stat->getSum();
        }

        return \$sum;
    }

    public function getCount(): int
    {
        return count(\$this->stats);
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
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php", "/app/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/YearStat.php");
    }
}
