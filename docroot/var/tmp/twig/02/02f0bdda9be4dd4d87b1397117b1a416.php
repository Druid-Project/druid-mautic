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

/* @bundles/LeadBundle/Entity/TimelineTrait.php */
class __TwigTemplate_4da588c230c93c2633389a4131eac6c6 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\Helper\\Chart\\ChartQuery;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;

trait TimelineTrait
{
    /**
     * @param QueryBuilder \$query                 DBAL QueryBuilder
     * @param array<mixed> \$options               Query optons from LeadTimelineEvent
     * @param string       \$eventNameColumn       Name of column to sort event name by
     * @param string       \$timestampColumn       Name of column to sort timestamp by
     * @param array<mixed> \$serializedColumns     Array of columns to unserialize
     * @param array<mixed> \$dateTimeColumns       Array of columns to be converted to \\DateTime
     * @param mixed|null   \$resultsParserCallback Callback to custom parse results
     * @param string|null  \$secondaryOrdering     Name of column for secondary sort
     *
     * @return array<mixed>
     */
    private function getTimelineResults(
        QueryBuilder \$query,
        array \$options,
        \$eventNameColumn,
        \$timestampColumn,
        \$serializedColumns = [],
        \$dateTimeColumns = [],
        \$resultsParserCallback = null,
        string \$secondaryOrdering = null
    ) {
        if (!empty(\$options['unitCounts'])) {
            [\$tablePrefix, \$column] = explode('.', \$timestampColumn);

            // Get counts grouped by unit based on date range
            /** @var ChartQuery \$cq */
            \$cq = \$options['chartQuery'];
            \$cq->modifyTimeDataQuery(\$query, \$column, \$tablePrefix);
            \$cq->applyDateFilters(\$query, \$column, \$tablePrefix);
            \$data = \$query->executeQuery()->fetchAllAssociative();

            return \$cq->completeTimeData(\$data);
        }

        if (!empty(\$options['fromDate']) && !empty(\$options['toDate'])) {
            \$query->andWhere(\$timestampColumn.' BETWEEN :dateFrom AND :dateTo')
                ->setParameter('dateFrom', \$options['fromDate']->format('Y-m-d H:i:s'))
                ->setParameter('dateTo', \$options['toDate']->format('Y-m-d H:i:s'));
        } elseif (!empty(\$options['fromDate'])) {
            \$query->andWhere(\$query->expr()->gte(\$timestampColumn, ':dateFrom'))
                ->setParameter('dateFrom', \$options['fromDate']->format('Y-m-d H:i:s'));
        } elseif (!empty(\$options['toDate'])) {
            \$query->andWhere(\$query->expr()->lte(\$timestampColumn, ':dateTo'))
                ->setParameter('dateTo', \$options['toDate']->format('Y-m-d H:i:s'));
        }

        if (isset(\$options['leadIds'])) {
            \$leadColumn = \$this->getTableAlias().'.lead_id';
            \$query->addSelect(\$leadColumn);
            \$query->andWhere(
                \$query->expr()->in(\$leadColumn, \$options['leadIds'])
            );
        }

        if (isset(\$options['order'])) {
            [\$orderBy, \$orderByDir] = \$options['order'];

            \$orderBy = match (\$orderBy) {
                'eventLabel' => \$eventNameColumn,
                default      => \$timestampColumn,
            };

            \$query->orderBy(\$orderBy, \$orderByDir);

            if (\$secondaryOrdering) {
                \$query->addOrderBy(\$secondaryOrdering, \$orderByDir);
            }
        }

        if (!empty(\$options['limit'])) {
            \$query->setMaxResults(\$options['limit']);
            if (!empty(\$options['start'])) {
                \$query->setFirstResult(\$options['start']);
            }
        }

        \$results = \$query->executeQuery()->fetchAllAssociative();

        if (!empty(\$serializedColumns) || !empty(\$dateTimeColumns) || is_callable(\$resultsParserCallback)) {
            // Convert to array or \\DateTime since we're using DBAL here
            foreach (\$results as &\$result) {
                foreach (\$serializedColumns as \$col) {
                    if (isset(\$result[\$col])) {
                        \$result[\$col] = (null == \$result[\$col]) ? [] : Serializer::decode(\$result[\$col]);
                    }
                }

                foreach (\$dateTimeColumns as \$col) {
                    if (isset(\$result[\$col]) && !empty(\$result[\$col])) {
                        \$dt           = new DateTimeHelper(\$result[\$col], 'Y-m-d H:i:s', 'UTC');
                        \$result[\$col] = \$dt->getLocalDateTime();
                        unset(\$dt);
                    }
                }

                if (is_callable(\$resultsParserCallback)) {
                    \$resultsParserCallback(\$result);
                }
            }
        }

        if (!empty(\$options['paginated'])) {
            // Get a total count along with results
            \$query->resetQueryParts(['select', 'orderBy'])
                ->setFirstResult(0)
                ->setMaxResults(null)
                ->select('count(*)');

            \$total = \$query->executeQuery()->fetchOne();

            return [
                'total'   => \$total,
                'results' => \$results,
            ];
        }

        return \$results;
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
        return "@bundles/LeadBundle/Entity/TimelineTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/TimelineTrait.php", "/app/docroot/app/bundles/LeadBundle/Entity/TimelineTrait.php");
    }
}
