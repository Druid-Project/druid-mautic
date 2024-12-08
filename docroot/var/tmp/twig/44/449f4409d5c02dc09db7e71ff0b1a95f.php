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

/* @bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php */
class __TwigTemplate_8521b99d9de496499c66ca32e913f553 extends Template
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

namespace Mautic\\LeadBundle\\Segment;

use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Event\\LeadListMergeFiltersEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Segment\\Decorator\\DecoratorFactory;
use Mautic\\LeadBundle\\Segment\\Decorator\\FilterDecoratorInterface;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\FilterQueryBuilderInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ContactSegmentFilterFactory
{
    public const CUSTOM_OPERATOR = 'custom_operator';

    /**
     * @var array|string[]
     */
    private array \$operatorsWithEmptyValuesAllowed = ['empty', '!empty', self::CUSTOM_OPERATOR];

    public function __construct(
        private TableSchemaColumnsCache \$schemaCache,
        private Container \$container,
        private DecoratorFactory \$decoratorFactory,
        private EventDispatcherInterface \$eventDispatcher
    ) {
    }

    /**
     * @param array<string, mixed> \$batchLimiters
     *
     * @throws \\Exception
     */
    public function getSegmentFilters(LeadList \$leadList, array \$batchLimiters = []): ContactSegmentFilters
    {
        \$contactSegmentFilters = new ContactSegmentFilters();

        \$filters = \$this->mergeFilters(\$leadList->getFilters());
        \$event   = new LeadListMergeFiltersEvent(\$filters);
        \$this->eventDispatcher->dispatch(\$event, LeadEvents::LIST_FILTERS_MERGE);
        \$filters = \$event->getFilters();

        foreach (\$filters as \$filter) {
            if (self::CUSTOM_OPERATOR === \$filter['operator']) {
                \$mergedProperty      = \$filter['merged_property'];
                \$factorSegmentFilter = null;
                foreach (\$filter['properties'] as \$index => \$nestedFilter) {
                    if (!in_array(\$nestedFilter['operator'], \$this->operatorsWithEmptyValuesAllowed) && empty(\$nestedFilter['filter']) && !is_numeric(\$nestedFilter['filter'])) {
                        continue; // If no value set for the filter, don't consider it
                    }
                    \$factorSegmentFilter                    = \$this->factorSegmentFilter(\$nestedFilter, \$batchLimiters);
                    \$mergedProperty[\$index]['filter_value'] = \$factorSegmentFilter->getParameterValue();
                    \$mergedProperty[\$index]['operator']     = \$factorSegmentFilter->getOperator();
                    \$mergedProperty[\$index]['field']        = \$factorSegmentFilter->getField();
                    \$mergedProperty[\$index]['type']         = \$factorSegmentFilter->getType();
                }
                if (\$factorSegmentFilter) {
                    \$factorSegmentFilter->contactSegmentFilterCrate->setMergedProperty(\$mergedProperty);
                    \$contactSegmentFilters->addContactSegmentFilter(\$factorSegmentFilter);
                }
            } else {
                \$contactSegmentFilters->addContactSegmentFilter(\$this->factorSegmentFilter(\$filter, \$batchLimiters));
            }
        }

        return \$contactSegmentFilters;
    }

    /**
     * @param array<string, mixed> \$filter
     * @param array<string, mixed> \$batchLimiters
     *
     * @throws \\Exception
     */
    public function factorSegmentFilter(array \$filter, array \$batchLimiters = []): ContactSegmentFilter
    {
        \$contactSegmentFilterCrate = new ContactSegmentFilterCrate(\$filter);

        \$decorator = \$this->decoratorFactory->getDecoratorForFilter(\$contactSegmentFilterCrate);

        \$filterQueryBuilder = \$this->getQueryBuilderForFilter(\$decorator, \$contactSegmentFilterCrate);

        return new ContactSegmentFilter(\$contactSegmentFilterCrate, \$decorator, \$this->schemaCache, \$filterQueryBuilder, \$batchLimiters);
    }

    /**
     * @return FilterQueryBuilderInterface
     *
     * @throws \\Exception
     */
    private function getQueryBuilderForFilter(FilterDecoratorInterface \$decorator, ContactSegmentFilterCrate \$contactSegmentFilterCrate)
    {
        \$qbServiceId = \$decorator->getQueryType(\$contactSegmentFilterCrate);

        return \$this->container->get(\$qbServiceId);
    }

    /**
     * Merge multiple filters of same field with OR.
     *
     * @param mixed[] \$filters
     *
     * @return mixed[]
     */
    private function mergeFilters(array \$filters): array
    {
        \$shrinkedFilters = [];
        \$arrStacks       = []; // Put the same filters from array into Stacks

        \$previousKey = ''; // preserve the key from previous iteration
        // replace filters with glue OR and operator = , with IN operator
        foreach (\$filters as \$filter) {
            // easy to compare
            \$key = implode('_', [
                \$filter['object'] ?? '',
                \$filter['field'],
                \$filter['glue'],
                \$filter['operator'],
            ]);

            if ('or' === strtolower(\$filter['glue']) && '=' === \$filter['operator']) {
                if (!isset(\$arrStacks[\$key])) {
                    \$arrStacks[\$key] = [];
                }

                array_push(\$arrStacks[\$key], \$filter);
            } else { // glue = and
                // if 'or' followed by 'and', it becomes - or (cond1 and cond2)
                if (isset(\$arrStacks[\$previousKey]) && count(\$arrStacks[\$previousKey]) > 0) { /** @phpstan-ignore-line `Comparison operation \">\" between 0 and 0 is always false.` I don't see anything wrong. Seems to be a PHPSTAN issue https://github.com/phpstan/phpstan/issues/3831 */
                    \$previousFilter = array_pop(\$arrStacks[\$previousKey]);
                    array_push(\$shrinkedFilters, \$previousFilter);
                }

                array_push(\$shrinkedFilters, \$filter);
            }

            \$previousKey = \$key;
        }

        // add all grouped conditions back
        foreach (\$arrStacks as \$stack) {
            \$groupedFilter = \$this->groupFilters(\$stack);
            if (!empty(\$groupedFilter)) {
                \$shrinkedFilters[] = \$groupedFilter;
            }
        }

        return array_values(\$shrinkedFilters);
    }

    /**
     * @param mixed[] \$stack
     *
     * @return mixed[]
     */
    private function groupFilters(array \$stack): array
    {
        if (empty(\$stack)) {
            return [];
        }

        if (count(\$stack) <= 1) {
            return \$stack[0];
        }

        \$filter                         = \$stack[0];
        \$filter['operator']             = 'in';
        \$filter['properties']['filter'] = \$filter['filter'] = array_map(function (\$ele) {
            return \$ele['filter'];
        }, \$stack);

        return \$filter;
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
        return "@bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php", "/app/docroot/app/bundles/LeadBundle/Segment/ContactSegmentFilterFactory.php");
    }
}
