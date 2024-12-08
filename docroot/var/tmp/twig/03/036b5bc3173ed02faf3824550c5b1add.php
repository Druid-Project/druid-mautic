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

/* @bundles/LeadBundle/Segment/Query/Filter/ForeignFuncFilterQueryBuilder.php */
class __TwigTemplate_24d948dc5d2ccdbb4cd1190d2fb4fb49 extends Template
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

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Exception\\FieldNotFoundException;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryException;

class ForeignFuncFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.foreign.func';
    }

    /**
     * @throws FieldNotFoundException
     * @throws QueryException
     */
    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$filterOperator  = \$filter->getOperator();
        \$filterAggr      = \$filter->getAggregateFunction();

        \$filterParameters = \$filter->getParameterValue();

        if (is_array(\$filterParameters)) {
            \$parameters = [];
            foreach (\$filterParameters as \$filterParameter) {
                \$parameters[] = \$this->generateRandomParameterName();
            }
        } else {
            \$parameters = \$this->generateRandomParameterName();
        }

        // Check if the column exists in the table
        \$filter->getColumn();

        \$filterParametersHolder = \$filter->getParameterHolder(\$parameters);

        \$tableAlias = \$queryBuilder->getTableAlias(\$filter->getTable());

        // for aggregate function we need to create new alias and not reuse the old one
        if (\$filterAggr) {
            \$tableAlias = false;
        }

        if (!\$tableAlias) {
            \$tableAlias = \$this->generateRandomParameterName();
            if (\$filterAggr) {
                // No join needed, it is placed in exist/not exists
            } else {
                if ('companies' == \$filter->getTable()) {
                    \$relTable = \$this->generateRandomParameterName();
                    \$queryBuilder->leftJoin(\$leadsTableAlias, MAUTIC_TABLE_PREFIX.'companies_leads', \$relTable, \$relTable.'.lead_id = '.\$leadsTableAlias.'.id');
                    \$queryBuilder->leftJoin(\$relTable, \$filter->getTable(), \$tableAlias, \$tableAlias.'.id = '.\$relTable.'.company_id');
                } else { // This should never happen
                    \$queryBuilder->leftJoin(
                        \$leadsTableAlias,
                        \$filter->getTable(),
                        \$tableAlias,
                        sprintf('%s.id = %s.lead_id', \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads'), \$tableAlias)
                    );
                }
            }
        }

        switch (\$filterOperator) {
            case 'empty':
                \$expression = \$queryBuilder->expr()->or(
                    \$queryBuilder->expr()->isNull(\$tableAlias.'.'.\$filter->getField()),
                    \$queryBuilder->expr()->eq(\$tableAlias.'.'.\$filter->getField(), ':'.\$emptyParameter = \$this->generateRandomParameterName())
                );
                \$queryBuilder->setParameter(\$emptyParameter, '');
                break;
            case 'notEmpty':
                \$expression = \$queryBuilder->expr()->and(
                    \$queryBuilder->expr()->isNotNull(\$tableAlias.'.'.\$filter->getField()),
                    \$queryBuilder->expr()->neq(\$tableAlias.'.'.\$filter->getField(), ':'.\$emptyParameter = \$this->generateRandomParameterName())
                );
                \$queryBuilder->setParameter(\$emptyParameter, '');
                break;
            default:
                if (\$filterAggr) {
                    if (!is_null(\$filter)) {
                        if ('sum' === \$filterAggr) {
                            \$expressionArg = \$queryBuilder->expr()->func('COALESCE',
                                \$queryBuilder->expr()->func('SUM', \$tableAlias.'.'.\$filter->getField()),
                                0
                            );
                            \$expression = \$queryBuilder->expr()->\$filterOperator(\$expressionArg,
                                \$filterParametersHolder);
                        } else {
                            \$expressionArg = sprintf('%s(DISTINCT %s)', \$filterAggr, \$tableAlias.'.'
                                .\$filter->getField());
                            \$expression = \$queryBuilder->expr()->\$filterOperator(
                                \$expressionArg,
                                \$filterParametersHolder
                            );
                        }
                    } else {
                        \$expressionArg = \$queryBuilder->expr()->func(\$filterAggr, \$tableAlias.'.'.\$filter->getField());
                        \$expression    = \$queryBuilder->expr()->\$filterOperator(
                            \$expressionArg,
                            \$filterParametersHolder
                        );
                    }
                } else { // This should never happen
                    \$expression = \$queryBuilder->expr()->\$filterOperator(
                        \$tableAlias.'.'.\$filter->getField(),
                        \$filterParametersHolder
                    );
                }
                break;
        }

        if (\$queryBuilder->isJoinTable(\$filter->getTable()) && !\$filterAggr) { // This should never happen
            \$queryBuilder->addJoinCondition(\$tableAlias, ' ('.\$expression.')');
            \$queryBuilder->addGroupBy(\$leadsTableAlias.'.id');
        } else {
            if (\$filterAggr) {
                \$expression = \$queryBuilder->expr()->exists('SELECT '.\$expressionArg.' FROM '.\$filter->getTable().' '.
                    \$tableAlias.' WHERE '.\$leadsTableAlias.'.id='.\$tableAlias.'.lead_id HAVING '.\$expression);
            } else { // This should never happen
                \$queryBuilder->addGroupBy(\$leadsTableAlias.'.id');
            }

            \$queryBuilder->addLogic(\$expression, \$filter->getGlue());
        }

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
        return "@bundles/LeadBundle/Segment/Query/Filter/ForeignFuncFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/ForeignFuncFilterQueryBuilder.php", "/app/docroot/app/bundles/LeadBundle/Segment/Query/Filter/ForeignFuncFilterQueryBuilder.php");
    }
}
