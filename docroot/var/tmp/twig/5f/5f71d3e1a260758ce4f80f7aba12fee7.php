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

/* @bundles/LeadBundle/Segment/Decorator/Date/Week/DateWeekAbstract.php */
class __TwigTemplate_7d8df1a692aba57fb43fc39e0a12063f extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionAbstract;

abstract class DateWeekAbstract extends DateOptionAbstract
{
    /**
     * @return string
     */
    protected function getModifierForBetweenRange()
    {
        return '+1 week';
    }

    protected function getValueForBetweenRange(DateTimeHelper \$dateTimeHelper)
    {
        \$dateFormat = \$this->dateOptionParameters->hasTimePart() ? 'Y-m-d H:i:s' : 'Y-m-d';
        \$startWith  = \$dateTimeHelper->toLocalString(\$dateFormat);

        \$modifier = \$this->getModifierForBetweenRange().' -1 second';
        \$dateTimeHelper->modify(\$modifier);
        \$endWith = \$dateTimeHelper->toLocalString(\$dateFormat);

        return [\$startWith, \$endWith];
    }

    protected function getOperatorForBetweenRange(ContactSegmentFilterCrate \$leadSegmentFilterCrate)
    {
        return '!=' === \$leadSegmentFilterCrate->getOperator() ? 'notBetween' : 'between';
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
        return "@bundles/LeadBundle/Segment/Decorator/Date/Week/DateWeekAbstract.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/Week/DateWeekAbstract.php", "/app/docroot/app/bundles/LeadBundle/Segment/Decorator/Date/Week/DateWeekAbstract.php");
    }
}
