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

/* @bundles/LeadBundle/Segment/Query/Filter/SegmentReferenceFilterQueryBuilder.php */
class __TwigTemplate_27a6fa47671be05d5e5edd4a532f6dd2 extends Template
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
use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterFactory;
use Mautic\\LeadBundle\\Segment\\Exception\\SegmentNotFoundException;
use Mautic\\LeadBundle\\Segment\\Exception\\SegmentQueryException;
use Mautic\\LeadBundle\\Segment\\Query\\ContactSegmentQueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryException;
use Mautic\\LeadBundle\\Segment\\RandomParameterName;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class SegmentReferenceFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public function __construct(
        RandomParameterName \$randomParameterNameService,
        private ContactSegmentQueryBuilder \$leadSegmentQueryBuilder,
        private EntityManager \$entityManager,
        private ContactSegmentFilterFactory \$leadSegmentFilterFactory,
        EventDispatcherInterface \$dispatcher
    ) {
        parent::__construct(\$randomParameterNameService, \$dispatcher);
    }

    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.special.leadlist';
    }

    /**
     * @throws SegmentNotFoundException
     * @throws SegmentQueryException
     * @throws \\Doctrine\\DBAL\\Exception
     * @throws QueryException
     */
    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$segmentIds      = \$filter->getParameterValue();

        if (!is_array(\$segmentIds)) {
            \$segmentIds = [intval(\$segmentIds)];
        }

        \$orLogic = [];

        foreach (\$segmentIds as \$segmentId) {
            \$exclusion = in_array(\$filter->getOperator(), ['notExists', 'notIn']);

            /** @var LeadList \$contactSegment */
            \$contactSegment = \$this->entityManager->getRepository(LeadList::class)->find(\$segmentId);
            if (!\$contactSegment) {
                throw new SegmentNotFoundException(sprintf('Segment %d used in the filter does not exist anymore.', \$segmentId));
            }

            \$filters = \$this->leadSegmentFilterFactory->getSegmentFilters(\$contactSegment);

            \$segmentQueryBuilder       = \$this->leadSegmentQueryBuilder->assembleContactsSegmentQueryBuilder(\$contactSegment->getId(), \$filters, true);
            \$subSegmentLeadsTableAlias = \$segmentQueryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
            \$segmentQueryBuilder->resetQueryParts(['select'])->select('null');

            //  If the segment contains no filters; it means its for manually subscribed only
            if (count(\$filters)) {
                \$segmentQueryBuilder = \$this->leadSegmentQueryBuilder->addManuallyUnsubscribedQuery(\$segmentQueryBuilder, (int) \$contactSegment->getId());
            }

            \$segmentQueryBuilder = \$this->leadSegmentQueryBuilder->addManuallySubscribedQuery(\$segmentQueryBuilder, (int) \$contactSegment->getId());

            \$parameters = \$segmentQueryBuilder->getParameters();
            foreach (\$parameters as \$key => \$value) {
                \$queryBuilder->setParameter(\$key, \$value);
            }

            \$this->leadSegmentQueryBuilder->queryBuilderGenerated(\$contactSegment, \$segmentQueryBuilder);

            \$segmentQueryWherePart = \$segmentQueryBuilder->getQueryPart('where');
            \$segmentQueryBuilder->where(\"\$leadsTableAlias.id = \$subSegmentLeadsTableAlias.id\");
            \$segmentQueryBuilder->andWhere(\$segmentQueryWherePart);

            if (\$exclusion) {
                \$expression = \$queryBuilder->expr()->notExists(\$segmentQueryBuilder->getSQL());
            } else {
                \$expression = \$queryBuilder->expr()->exists(\$segmentQueryBuilder->getSQL());
            }

            if (!\$exclusion && count(\$segmentIds) > 1) {
                \$orLogic[] = \$expression;
            } else {
                \$queryBuilder->addLogic(\$expression, \$filter->getGlue());
            }
        }

        if (count(\$orLogic)) {
            \$queryBuilder->addLogic(new CompositeExpression(CompositeExpression::TYPE_OR, \$orLogic), \$filter->getGlue());
        }

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
        return "@bundles/LeadBundle/Segment/Query/Filter/SegmentReferenceFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/SegmentReferenceFilterQueryBuilder.php", "/app/docroot/app/bundles/LeadBundle/Segment/Query/Filter/SegmentReferenceFilterQueryBuilder.php");
    }
}