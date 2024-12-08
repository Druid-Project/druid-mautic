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

/* @bundles/LeadBundle/Segment/Query/Filter/ComplexRelationValueFilterQueryBuilder.php */
class __TwigTemplate_cc4765d7075a0698dc8ee5702f8dc178 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query\\Filter;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;

/**
 * Used to connect foreign tables using third table.
 *
 * Currently only company decorator uses this functionality but it may be used by plugins in the future
 *
 * filter decorator must implement methods:
 *  \$filter->getRelationJoinTable()
 *  \$filter->getRelationJoinTableField()
 *
 * @see \\Mautic\\LeadBundle\\Segment\\Decorator\\CompanyDecorator
 */
class ComplexRelationValueFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.complex_relation.value';
    }

    /**
     * @throws \\Exception
     */
    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$filterOperator  = \$filter->getOperator();

        \$filterParameters = \$filter->getParameterValue();

        if (is_array(\$filterParameters)) {
            \$parameters = [];
            foreach (\$filterParameters as \$filterParameter) {
                \$parameters[] = \$this->generateRandomParameterName();
            }
        } else {
            \$parameters = \$this->generateRandomParameterName();
        }

        \$filterParametersHolder = \$filter->getParameterHolder(\$parameters);

        \$tableAlias = \$queryBuilder->getTableAlias(\$filter->getTable());

        if (!\$tableAlias) {
            \$tableAlias = \$this->generateRandomParameterName();

            \$relTable = \$this->generateRandomParameterName();
            \$queryBuilder->leftJoin(\$leadsTableAlias, \$filter->getRelationJoinTable(), \$relTable, \$relTable.'.lead_id = '.\$leadsTableAlias.'.id');
            \$queryBuilder->leftJoin(\$relTable, \$filter->getTable(), \$tableAlias, \$tableAlias.'.id = '.\$relTable.'.'
                .\$filter->getRelationJoinTableField());
        }

        switch (\$filterOperator) {
            case 'empty':
                \$expression = new CompositeExpression(CompositeExpression::TYPE_OR,
                    [
                        \$queryBuilder->expr()->isNull(\$tableAlias.'.'.\$filter->getField()),
                        \$queryBuilder->expr()->eq(\$tableAlias.'.'.\$filter->getField(), \$queryBuilder->expr()->literal('')),
                    ]
                );
                break;
            case 'notEmpty':
                \$expression = new CompositeExpression(CompositeExpression::TYPE_AND,
                    [
                        \$queryBuilder->expr()->isNotNull(\$tableAlias.'.'.\$filter->getField()),
                        \$queryBuilder->expr()->neq(\$tableAlias.'.'.\$filter->getField(), \$queryBuilder->expr()->literal('')),
                    ]
                );

                break;
            case 'neq':
                \$expression = \$queryBuilder->expr()->or(
                    \$queryBuilder->expr()->isNull(\$tableAlias.'.'.\$filter->getField()),
                    \$queryBuilder->expr()->\$filterOperator(
                        \$tableAlias.'.'.\$filter->getField(),
                        \$filterParametersHolder
                    )
                );
                break;
            case 'startsWith':
            case 'endsWith':
            case 'gt':
            case 'eq':
            case 'gte':
            case 'like':
            case 'lt':
            case 'lte':
            case 'in':
            case 'between':   // Used only for date with week combination (EQUAL [this week, next week, last week])
            case 'regexp':
            case 'notRegexp': // Different behaviour from 'notLike' because of BC (do not use condition for NULL). Could be changed in Mautic 3.
                \$expression = \$queryBuilder->expr()->\$filterOperator(
                    \$tableAlias.'.'.\$filter->getField(),
                    \$filterParametersHolder
                );
                break;
            case 'notLike':
            case 'notBetween': // Used only for date with week combination (NOT EQUAL [this week, next week, last week])
            case 'notIn':
                \$expression = \$queryBuilder->expr()->or(
                    \$queryBuilder->expr()->\$filterOperator(\$tableAlias.'.'.\$filter->getField(), \$filterParametersHolder),
                    \$queryBuilder->expr()->isNull(\$tableAlias.'.'.\$filter->getField())
                );
                break;
            case 'multiselect':
            case '!multiselect':
                \$operator    = 'multiselect' === \$filterOperator ? 'regexp' : 'notRegexp';
                \$expressions = [];
                foreach (\$filterParametersHolder as \$parameter) {
                    \$expressions[] = \$queryBuilder->expr()->\$operator(\$tableAlias.'.'.\$filter->getField(), \$parameter);
                }

                \$expression = \$queryBuilder->expr()->and(...\$expressions);
                break;
            default:
                throw new \\Exception('Dunno how to handle operator \"'.\$filterOperator.'\"');
        }

        \$queryBuilder->addLogic(\$expression, \$filter->getGlue());

        \$queryBuilder->setParametersPairs(\$parameters, \$filterParameters);

        return \$queryBuilder;
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
        return "@bundles/LeadBundle/Segment/Query/Filter/ComplexRelationValueFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/ComplexRelationValueFilterQueryBuilder.php", "/app/docroot/app/bundles/LeadBundle/Segment/Query/Filter/ComplexRelationValueFilterQueryBuilder.php");
    }
}
