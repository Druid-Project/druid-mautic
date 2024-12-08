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

/* @bundles/LeadBundle/Tests/EventListener/SegmentOperatorQuerySubscriberTest.php */
class __TwigTemplate_b7d333a53e3974f1a158f33cad6d83a4 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Mautic\\LeadBundle\\Event\\SegmentOperatorQueryBuilderEvent;
use Mautic\\LeadBundle\\EventListener\\SegmentOperatorQuerySubscriber;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\Expression\\ExpressionBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

final class SegmentOperatorQuerySubscriberTest extends TestCase
{
    /**
     * @var MockObject|QueryBuilder
     */
    private MockObject \$queryBuilder;

    /**
     * @var MockObject|ExpressionBuilder
     */
    private MockObject \$expressionBuilder;

    /**
     * @var MockObject|ContactSegmentFilter
     */
    private MockObject \$contactSegmentFilter;

    private SegmentOperatorQuerySubscriber \$subscriber;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->queryBuilder         = \$this->createMock(QueryBuilder::class);
        \$this->expressionBuilder    = \$this->createMock(ExpressionBuilder::class);
        \$this->contactSegmentFilter = \$this->createMock(ContactSegmentFilter::class);
        \$this->subscriber           = new SegmentOperatorQuerySubscriber();

        \$this->queryBuilder->method('expr')->willReturn(\$this->expressionBuilder);
        \$this->queryBuilder->method('getTableAlias')->willReturn('l');
    }

    public function testOnEmptyOperatorIfNotEmpty(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('unicorn');

        \$this->queryBuilder->expects(\$this->never())
            ->method('addLogic');

        \$this->subscriber->onEmptyOperator(\$event);

        \$this->assertFalse(\$event->wasOperatorHandled());
    }

    /**
     * @dataProvider dataOnEmptyOperatorIfEmpty
     */
    public function testOnEmptyOperatorIfEmpty(bool \$doesColumnSupportEmptyValue, string \$expectedExpression): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getField')
            ->willReturn('email');

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('empty');

        \$this->contactSegmentFilter->method('getGlue')
            ->willReturn(CompositeExpression::TYPE_AND);

        \$this->contactSegmentFilter->method('doesColumnSupportEmptyValue')
            ->willReturn(\$doesColumnSupportEmptyValue);

        \$this->queryBuilder->expects(\$this->once())
            ->method('addLogic')
            ->with(
                \$this->callback(function (CompositeExpression \$expression) use (\$expectedExpression) {
                    \$this->assertSame(\$expectedExpression, (string) \$expression);

                    return true;
                }),
                CompositeExpression::TYPE_AND
            );

        \$this->expressionBuilder->expects(\$this->once())
            ->method('isNull')
            ->with('l.email')
            ->willReturnCallback(fn (\$x) => \$x.' IS NULL');

        \$this->expressionBuilder->expects(\$doesColumnSupportEmptyValue ? \$this->once() : \$this->never())
            ->method('eq')
            ->with('l.email')
            ->willReturnCallback(fn (\$x, \$y) => \$x.' = '.\$y);

        \$this->expressionBuilder->expects(\$doesColumnSupportEmptyValue ? \$this->once() : \$this->never())
            ->method('literal')
            ->with('')
            ->willReturn(\"''\");

        \$this->subscriber->onEmptyOperator(\$event);

        \$this->assertTrue(\$event->wasOperatorHandled());
    }

    /**
     * @return iterable<array<bool|string>>
     */
    public function dataOnEmptyOperatorIfEmpty(): iterable
    {
        yield [false, 'l.email IS NULL'];
        yield [true, \"(l.email IS NULL) OR (l.email = '')\"];
    }

    public function testOnNotEmptyOperatorIfNotEmpty(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('unicorn');

        \$this->queryBuilder->expects(\$this->never())
            ->method('addLogic');

        \$this->subscriber->onNotEmptyOperator(\$event);

        \$this->assertFalse(\$event->wasOperatorHandled());
    }

    /**
     * @dataProvider dataOnNotEmptyOperatorIfEmpty
     */
    public function testOnNotEmptyOperatorIfEmpty(bool \$doesColumnSupportEmptyValue, string \$expectedExpression): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getField')
            ->willReturn('email');

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('notEmpty');

        \$this->contactSegmentFilter->method('getGlue')
            ->willReturn(CompositeExpression::TYPE_AND);

        \$this->contactSegmentFilter->method('doesColumnSupportEmptyValue')
            ->willReturn(\$doesColumnSupportEmptyValue);

        \$this->queryBuilder->expects(\$this->once())
            ->method('addLogic')
            ->with(
                \$this->callback(function (CompositeExpression \$expression) use (\$expectedExpression) {
                    \$this->assertSame(\$expectedExpression, (string) \$expression);

                    return true;
                }),
                CompositeExpression::TYPE_AND
            );

        \$this->expressionBuilder->expects(\$this->once())
            ->method('isNotNull')
            ->with('l.email')
            ->willReturnCallback(fn (\$x) => \$x.' IS NOT NULL');

        \$this->expressionBuilder->expects(\$doesColumnSupportEmptyValue ? \$this->once() : \$this->never())
            ->method('neq')
            ->with('l.email')
            ->willReturnCallback(fn (\$x, \$y) => \$x.' <> '.\$y);

        \$this->expressionBuilder->expects(\$doesColumnSupportEmptyValue ? \$this->once() : \$this->never())
            ->method('literal')
            ->with('')
            ->willReturn(\"''\");

        \$this->subscriber->onNotEmptyOperator(\$event);

        \$this->assertTrue(\$event->wasOperatorHandled());
    }

    /**
     * @return iterable<array<bool|string>>
     */
    public function dataOnNotEmptyOperatorIfEmpty(): iterable
    {
        yield [false, 'l.email IS NOT NULL'];
        yield [true, \"(l.email IS NOT NULL) AND (l.email <> '')\"];
    }

    public function testOnNegativeOperatorsIfNotNegativeOperator(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('unicorn');

        \$this->expressionBuilder->expects(\$this->never())
            ->method('isNull');

        \$this->subscriber->onNegativeOperators(\$event);

        \$this->assertFalse(\$event->wasOperatorHandled());
    }

    public function testOnNegativeOperatorsIfNegativeOperator(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getField')
            ->willReturn('email');

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('notBetween');

        \$this->contactSegmentFilter->method('getGlue')
            ->willReturn(CompositeExpression::TYPE_AND);

        \$this->queryBuilder->expects(\$this->once())
            ->method('addLogic')
            ->with(
                \$this->anything(),
                CompositeExpression::TYPE_AND
            );

        \$this->expressionBuilder->expects(\$this->once())
            ->method('or');

        \$this->expressionBuilder->expects(\$this->once())
            ->method('isNull')
            ->with('l.email');

        \$this->expressionBuilder->expects(\$this->once())
            ->method('notBetween')
            ->with('l.email', 'paramenter_holder_1');

        \$this->subscriber->onNegativeOperators(\$event);

        \$this->assertTrue(\$event->wasOperatorHandled());
    }

    public function testOnMultiselectOperatorsIfNotMultiselectOperator(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            ['paramenter_holder_1']
        );

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('unicorn');

        \$this->subscriber->onMultiselectOperators(\$event);

        \$this->assertFalse(\$event->wasOperatorHandled());
    }

    public function testOnMultiselectOperatorsIfMultiselectOperator(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            ['paramenter_holder_1']
        );

        \$this->contactSegmentFilter->method('getField')
            ->willReturn('email');

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('multiselect');

        \$this->contactSegmentFilter->method('getGlue')
            ->willReturn(CompositeExpression::TYPE_AND);

        \$this->queryBuilder->expects(\$this->once())
            ->method('addLogic')
            ->with(
                \$this->anything(),
                CompositeExpression::TYPE_AND
            );

        \$this->expressionBuilder->expects(\$this->once())
            ->method('and');

        \$this->expressionBuilder->expects(\$this->once())
            ->method('regexp')
            ->with('l.email', 'paramenter_holder_1');

        \$this->subscriber->onMultiselectOperators(\$event);

        \$this->assertTrue(\$event->wasOperatorHandled());
    }

    public function testOnDefaultOperatorsIfNotDefaultOperator(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('unicorn');

        \$this->subscriber->onDefaultOperators(\$event);

        \$this->assertFalse(\$event->wasOperatorHandled());
    }

    public function testOnDefaultOperatorsIfDefaultOperator(): void
    {
        \$event = new SegmentOperatorQueryBuilderEvent(
            \$this->queryBuilder,
            \$this->contactSegmentFilter,
            'paramenter_holder_1'
        );

        \$this->contactSegmentFilter->method('getField')
            ->willReturn('email');

        \$this->contactSegmentFilter->method('getOperator')
            ->willReturn('gt');

        \$this->contactSegmentFilter->method('getGlue')
            ->willReturn(CompositeExpression::TYPE_AND);

        \$this->queryBuilder->expects(\$this->once())
            ->method('addLogic')
            ->with(
                \$this->anything(),
                CompositeExpression::TYPE_AND
            );

        \$this->expressionBuilder->expects(\$this->once())
            ->method('gt')
            ->with('l.email', 'paramenter_holder_1');

        \$this->subscriber->onDefaultOperators(\$event);

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
        return "@bundles/LeadBundle/Tests/EventListener/SegmentOperatorQuerySubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/SegmentOperatorQuerySubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/SegmentOperatorQuerySubscriberTest.php");
    }
}