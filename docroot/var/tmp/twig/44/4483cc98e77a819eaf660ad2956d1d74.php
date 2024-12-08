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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php */
class __TwigTemplate_deace2ec632f77a07b0d7e7bbd26f507 extends Template
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

class MonthStat implements StatInterface
{
    /**
     * @var DayStat[]
     */
    private array \$stats = [];

    /**
     * @param string \$month \"2019-01\" format
     */
    public function __construct(
        private \$month
    ) {
    }

    /**
     * @param int \$day
     *
     * @return DayStat
     *
     * @throws \\Exception
     */
    public function getDay(\$day)
    {
        \$key = (new \\DateTime(\"{\$this->month}-\$day 00:00:00\"))->format('Y-m-d');

        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = new DayStat(\$key);
        }

        return \$this->stats[\$key];
    }

    /**
     * @return DayStat[]
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
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php", "/app/docroot/app/bundles/StatsBundle/Aggregate/Collection/Stats/MonthStat.php");
    }
}
