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

/* @bundles/LeadBundle/Segment/Decorator/Date/Other/DateDefault.php */
class __TwigTemplate_6c71aa4daa07daf3e3c68ea853c3b3ec extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Other;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\DateDecorator;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;

class DateDefault implements FilterDecoratorInterface
{
    /**
     * @param string \$originalValue
     */
    public function __construct(
        private DateDecorator \$dateDecorator,
        private \$originalValue
    ) {
    }

    /**
     * @return string|null
     */
    public function getField(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        return \$this->dateDecorator->getField(\$contactSegmentFilterCrate);
    }

    public function getTable(ContactSegmentFilterCrate \$contactSegmentFilterCrate): string
    {
        return \$this->dateDecorator->getTable(\$contactSegmentFilterCrate);
    }

    /**
     * @return string
     */
    public function getOperator(ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
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
        \$filter = \$this->originalValue;

        return match (\$contactSegmentFilterCrate->getOperator()) {
            'like', '!like' => !str_contains(\$filter, '%') ? '%'.\$filter.'%' : \$filter,
            'contains'   => '%'.\$filter.'%',
            'startsWith' => \$filter.'%',
            'endsWith'   => '%'.\$filter,
            default      => \$this->originalValue,
        };
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
        return "@bundles/LeadBundle/Segment/Decorator/Date/Other/DateDefault.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/Other/DateDefault.php", "/app/docroot/app/bundles/LeadBundle/Segment/Decorator/Date/Other/DateDefault.php");
    }
}
