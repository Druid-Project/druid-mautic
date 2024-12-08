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

/* @bundles/StatsBundle/Aggregate/Collection/StatCollection.php */
class __TwigTemplate_6a618f4a2ef46f4d3b7d66412d641b3d extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection;

use Mautic\\StatsBundle\\Aggregate\\Calculator;
use Mautic\\StatsBundle\\Aggregate\\Collection\\DAO\\StatsDAO;
use Mautic\\StatsBundle\\Aggregate\\Helper\\CalculatorHelper;

class StatCollection
{
    private StatsDAO \$stats;

    private ?Calculator \$calculator = null;

    public function __construct()
    {
        \$this->stats = new StatsDAO();
    }

    /**
     * @param int \$year
     * @param int \$month
     * @param int \$day
     * @param int \$hour
     * @param int \$count
     *
     * @return \$this
     *
     * @throws \\Exception
     */
    public function addStat(\$year, \$month, \$day, \$hour, \$count)
    {
        \$this->stats
            ->getYear(\$year)
            ->getMonth(\$month)
            ->getDay(\$day)
            ->getHour(\$hour)
            ->setCount(\$count);

        return \$this;
    }

    /**
     * @param int \$count
     *
     * @return \$this
     *
     * @throws \\Exception
     */
    public function addStatByDateTime(\\DateTime \$dateTime, \$count)
    {
        \$dateTime->setTimezone(new \\DateTimeZone('UTC'));

        \$this->addStat(
            \$dateTime->format('Y'),
            \$dateTime->format('n'),
            \$dateTime->format('j'),
            \$dateTime->format('H'),
            \$count
        );

        return \$this;
    }

    /**
     * @return \$this
     *
     * @throws \\Exception
     */
    public function addStatByDateTimeStringInUTC(\$dateTimeInUTC, \$count)
    {
        if (preg_match('/([0-9]{4})\\\\s([0-9]{2})/', \$dateTimeInUTC, \$matches)) {    //  Is this a week?
            \$dateTimeString = CalculatorHelper::getWeekDateString(\$matches[1].'-'.\$matches[2]);
            \$dateTime       = new \\DateTime(\$dateTimeString, new \\DateTimeZone('UTC'));
        } elseif (4 === strlen(\$dateTimeInUTC) and is_numeric(\$dateTimeInUTC)) {
            \$dateTime = (new \\DateTime('now', new \\DateTimeZone('UTC')))
                ->setDate(\$dateTimeInUTC, 1, 1)
                ->setTime(0, 0);
        } else {
            \$dateTime = new \\DateTime(\$dateTimeInUTC, new \\DateTimeZone('UTC'));
        }
        \$this->addStatByDateTime(\$dateTime, \$count);

        return \$this;
    }

    /**
     * @return StatsDAO
     */
    public function getStats()
    {
        return \$this->stats;
    }

    /**
     * @return Calculator
     */
    public function getCalculator(\\DateTime \$fromDateTime, \\DateTime \$toDateTime)
    {
        if (is_null(\$this->calculator)) {
            \$this->calculator = new Calculator(\$this->stats, \$fromDateTime, \$toDateTime);
        }

        return \$this->calculator;
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
        return "@bundles/StatsBundle/Aggregate/Collection/StatCollection.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/StatCollection.php", "/app/docroot/app/bundles/StatsBundle/Aggregate/Collection/StatCollection.php");
    }
}
