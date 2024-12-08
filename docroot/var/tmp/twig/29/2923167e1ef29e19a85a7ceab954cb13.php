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

/* @bundles/LeadBundle/Segment/Decorator/Date/DateOptionAbstract.php */
class __TwigTemplate_33b6926288510ad2b6734d88db8e23fb extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;

abstract class DateOptionAbstract implements FilterDecoratorInterface
{
    public function __construct(
        protected DateDecorator \$dateDecorator,
        protected DateOptionParameters \$dateOptionParameters
    ) {
    }

    /**
     * This function is responsible for setting date. \$this->dateTimeHelper holds date with midnight today.
     * Eg. +1 day for \"tomorrow\", -1 for yesterday etc.
     */
    abstract protected function modifyBaseDate(DateTimeHelper \$dateTimeHelper);

    /**
     * This function is responsible for date modification for between operator.
     * Eg. +1 day for \"today\", \"tomorrow\" and \"yesterday\", +1 week for \"this week\", \"last week\", \"next week\" etc.
     *
     * @return string
     */
    abstract protected function getModifierForBetweenRange();

    /**
     * This function returns a value if between range is needed. Could return string for like operator or array for between operator
     * Eg. //LIKE 2018-01-23% for today, //LIKE 2017-12-% for last month, //LIKE 2017-% for last year, array for this week.
     *
     * @return string|array
     */
    abstract protected function getValueForBetweenRange(DateTimeHelper \$dateTimeHelper);

    /**
     * This function returns an operator if between range is needed. Could return like or between.
     *
     * @return string
     */
    abstract protected function getOperatorForBetweenRange(ContactSegmentFilterCrate \$leadSegmentFilterCrate);

    /**
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$this->dateDecorator->getField(\$contactSegmentFilterCrate);
    }

    /**
     * @return string
     */
    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$this->dateDecorator->getTable(\$contactSegmentFilterCrate);
    }

    /**
     * @return string
     */
    public function getOperator(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        if (\$this->dateOptionParameters->isBetweenRequired()) {
            return \$this->getOperatorForBetweenRange(\$contactSegmentFilterCrate);
        }

        return \$this->dateDecorator->getOperator(\$contactSegmentFilterCrate);
    }

    /**
     * @param array|string \$argument
     *
     * @return array|string
     */
    public function getParameterHolder(ContactSegmentFilterCrate \$contactSegmentFilterCrate, \$argument)
    {
        return \$this->dateDecorator->getParameterHolder(\$contactSegmentFilterCrate, \$argument);
    }

    /**
     * @return array|bool|float|string|null
     */
    public function getParameterValue(ContactSegmentFilterCrate \$contactSegmentFilterCrate): mixed
    {
        \$dateTimeHelper = \$this->dateOptionParameters->getDefaultDate();

        \$this->modifyBaseDate(\$dateTimeHelper);

        \$dateFormat = \$this->dateOptionParameters->hasTimePart() ? 'Y-m-d H:i:s' : 'Y-m-d';

        if (\$this->dateOptionParameters->isBetweenRequired()) {
            return \$this->getValueForBetweenRange(\$dateTimeHelper);
        }

        if (\$this->dateOptionParameters->shouldUseLastDayOfRange()) {
            \$modifier = \$this->getModifierForBetweenRange();
            \$modifier .= ' -1 second';
            \$dateTimeHelper->modify(\$modifier);
        }

        return \$dateTimeHelper->toLocalString(\$dateFormat);
    }

    public function getQueryType(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        return \$this->dateDecorator->getQueryType(\$contactSegmentFilterCrate);
    }

    public function getAggregateFunc(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string|bool
    {
        return \$this->dateDecorator->getAggregateFunc(\$contactSegmentFilterCrate);
    }

    /**
     * @return \\Doctrine\\DBAL\\Query\\Expression\\CompositeExpression|string|null
     */
    public function getWhere(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$this->dateDecorator->getWhere(\$contactSegmentFilterCrate);
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
        return "@bundles/LeadBundle/Segment/Decorator/Date/DateOptionAbstract.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/DateOptionAbstract.php", "/app/docroot/app/bundles/LeadBundle/Segment/Decorator/Date/DateOptionAbstract.php");
    }
}
