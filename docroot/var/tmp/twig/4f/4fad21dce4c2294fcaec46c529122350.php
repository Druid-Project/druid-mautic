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

/* @bundles/LeadBundle/EventListener/SegmentOperatorQuerySubscriber.php */
class __TwigTemplate_b8e203ff7ecbb9eb134ece600cc10967 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Mautic\\LeadBundle\\Event\\SegmentOperatorQueryBuilderEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class SegmentOperatorQuerySubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::LIST_FILTERS_OPERATOR_QUERYBUILDER_ON_GENERATE => [
                ['onEmptyOperator', 0],
                ['onNotEmptyOperator', 0],
                ['onNegativeOperators', 0],
                ['onMultiselectOperators', 0],
                ['onDefaultOperators', 0],
            ],
        ];
    }

    public function onEmptyOperator(SegmentOperatorQueryBuilderEvent \$event): void
    {
        if (!\$event->operatorIsOneOf('empty')) {
            return;
        }

        \$leadsTableAlias = \$event->getLeadsTableAlias();
        \$filter          = \$event->getFilter();
        \$field           = \$leadsTableAlias.'.'.\$filter->getField();
        \$expr            = \$event->getQueryBuilder()->expr();
        \$parts           = [\$expr->isNull(\$field)];

        if (\$filter->doesColumnSupportEmptyValue()) {
            \$parts[] = \$expr->eq(\$field, \$expr->literal(''));
        }

        \$event->addExpression(new CompositeExpression(CompositeExpression::TYPE_OR, \$parts));
        \$event->stopPropagation();
    }

    public function onNotEmptyOperator(SegmentOperatorQueryBuilderEvent \$event): void
    {
        if (!\$event->operatorIsOneOf('notEmpty')) {
            return;
        }

        \$leadsTableAlias = \$event->getLeadsTableAlias();
        \$filter          = \$event->getFilter();
        \$field           = \$leadsTableAlias.'.'.\$filter->getField();
        \$expr            = \$event->getQueryBuilder()->expr();
        \$parts           = [\$expr->isNotNull(\$field)];

        if (\$filter->doesColumnSupportEmptyValue()) {
            \$parts[] = \$expr->neq(\$field, \$expr->literal(''));
        }

        \$event->addExpression(new CompositeExpression(CompositeExpression::TYPE_AND, \$parts));
        \$event->stopPropagation();
    }

    public function onNegativeOperators(SegmentOperatorQueryBuilderEvent \$event): void
    {
        if (!\$event->operatorIsOneOf(
            'neq',
            'notLike',
            'notBetween', // Used only for date with week combination (NOT EQUAL [this week, next week, last week])
            'notIn'
        )) {
            return;
        }

        \$leadsTableAlias = \$event->getLeadsTableAlias();

        \$event->addExpression(
            \$event->getQueryBuilder()->expr()->or(
                \$event->getQueryBuilder()->expr()->isNull(\$leadsTableAlias.'.'.\$event->getFilter()->getField()),
                \$event->getQueryBuilder()->expr()->{\$event->getFilter()->getOperator()}(
                    \$leadsTableAlias.'.'.\$event->getFilter()->getField(),
                    \$event->getParameterHolder()
                )
            )
        );

        \$event->stopPropagation();
    }

    public function onMultiselectOperators(SegmentOperatorQueryBuilderEvent \$event): void
    {
        if (!\$event->operatorIsOneOf('multiselect', '!multiselect')) {
            return;
        }

        \$leadsTableAlias = \$event->getLeadsTableAlias();

        \$operator    = 'multiselect' === \$event->getFilter()->getOperator() ? 'regexp' : 'notRegexp';
        \$expressions = [];

        \$queryBuilder = \$event->getQueryBuilder();

        foreach (\$event->getParameterHolder() as \$parameter) {
            \$expressions[] = \$queryBuilder->expr()->\$operator(\$leadsTableAlias.'.'.\$event->getFilter()->getField(), \$parameter);
        }

        if ('notRegexp' === \$operator) {
            \$expressions = [\$queryBuilder->expr()->or(
                \$queryBuilder->expr()->and(...\$expressions),
                \$queryBuilder->expr()->isNull(\$leadsTableAlias.'.'.\$event->getFilter()->getField()),
            )];
        }

        \$event->addExpression(\$event->getQueryBuilder()->expr()->and(...\$expressions));
        \$event->stopPropagation();
    }

    public function onDefaultOperators(SegmentOperatorQueryBuilderEvent \$event): void
    {
        if (!\$event->operatorIsOneOf(
            'startsWith',
            'endsWith',
            'gt',
            'eq',
            'gte',
            'like',
            'lt',
            'lte',
            'in',
            'between', // Used only for date with week combination (EQUAL [this week, next week, last week])
            'regexp',
            'notRegexp' // Different behaviour from 'notLike' because of BC (do not use condition for NULL). Could be changed in Mautic 3.
        )) {
            return;
        }

        \$leadsTableAlias = \$event->getLeadsTableAlias();

        \$event->addExpression(
            \$event->getQueryBuilder()->expr()->{\$event->getFilter()->getOperator()}(
                \$leadsTableAlias.'.'.\$event->getFilter()->getField(),
                \$event->getParameterHolder()
            )
        );

        \$event->stopPropagation();
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
        return "@bundles/LeadBundle/EventListener/SegmentOperatorQuerySubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/SegmentOperatorQuerySubscriber.php", "/app/docroot/app/bundles/LeadBundle/EventListener/SegmentOperatorQuerySubscriber.php");
    }
}
