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

/* @bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php */
class __TwigTemplate_6c776074b92c9190b73074ecacdefc1c extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\SegmentOperatorQueryBuilderEvent;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use PHPUnit\\Framework\\MockObject\\MockObject;

final class SegmentOperatorQueryBuilderEventTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|QueryBuilder
     */
    private MockObject \$queryBuilder;

    /**
     * @var MockObject|ContactSegmentFilter
     */
    private MockObject \$filter;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->queryBuilder = \$this->createMock(QueryBuilder::class);
        \$this->filter       = \$this->createMock(ContactSegmentFilter::class);

        \$this->queryBuilder->method('getTableAlias')
            ->with(MAUTIC_TABLE_PREFIX.'leads')
            ->willReturn('leads');
    }

    public function testConstructGettersSetters(): void
    {
        \$this->filter->method('getOperator')->willReturn('=');
        \$this->filter->method('getGlue')->willReturn('and');

        \$event = new SegmentOperatorQueryBuilderEvent(\$this->queryBuilder, \$this->filter, 'parameterHolder1');

        \$this->assertSame(\$this->queryBuilder, \$event->getQueryBuilder());
        \$this->assertSame(\$this->filter, \$event->getFilter());
        \$this->assertSame('parameterHolder1', \$event->getParameterHolder());
        \$this->assertFalse(\$event->operatorIsOneOf('like'));
        \$this->assertTrue(\$event->operatorIsOneOf('=', 'like'));
        \$this->assertFalse(\$event->wasOperatorHandled());

        \$this->queryBuilder->expects(\$this->once())
            ->method('addLogic')
            ->with('a != b', 'and');

        \$event->addExpression('a != b');

        \$this->assertTrue(\$event->wasOperatorHandled());
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
        return "@bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/SegmentOperatorQueryBuilderEventTest.php");
    }
}
