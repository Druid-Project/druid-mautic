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

/* @bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php */
class __TwigTemplate_623198b2c9c54b1f686c3b4328f1361d extends Template
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
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;

class SessionsFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.special.sessions';
    }

    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias      = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$pageHitsAlias        = \$this->generateRandomParameterName();
        \$exclusionAlias       = \$this->generateRandomParameterName();
        \$expressionValueAlias = \$this->generateRandomParameterName();

        \$expressionOperator = \$filter->getOperator();
        \$expression         = \$queryBuilder->expr()->\$expressionOperator('count(id)',
            \$filter->getParameterHolder(\$expressionValueAlias));

        \$queryBuilder->setParameter(\$expressionValueAlias, (int) \$filter->getParameterValue());

        \$exclusionQueryBuilder = \$queryBuilder->createQueryBuilder();
        \$exclusionQueryBuilder
            ->select(\$exclusionAlias.'.id')
            ->from(MAUTIC_TABLE_PREFIX.'page_hits', \$exclusionAlias)
            ->where(
                \$queryBuilder->expr()->and(
                    \$queryBuilder->expr()->eq(\$leadsTableAlias.'.id', \$exclusionAlias.'.lead_id'),
                    \$queryBuilder->expr()->gt(
                        \$exclusionAlias.'.date_hit',
                        \$pageHitsAlias.'.date_hit - INTERVAL 30 MINUTE'
                    ),
                    \$queryBuilder->expr()->lt(\$exclusionAlias.'.date_hit', \$pageHitsAlias.'.date_hit')
                )
            );

        \$sessionQueryBuilder = \$queryBuilder->createQueryBuilder();
        \$sessionQueryBuilder
            ->select('count(id)')
            ->from(MAUTIC_TABLE_PREFIX.'page_hits', \$pageHitsAlias)
            ->where(
                \$queryBuilder->expr()->and(
                    \$queryBuilder->expr()->eq(\$leadsTableAlias.'.id', \$pageHitsAlias.'.lead_id'),
                    \$queryBuilder->expr()->isNull(\$pageHitsAlias.'.email_id'),
                    \$queryBuilder->expr()->isNull(\$pageHitsAlias.'.redirect_id'),
                    \$queryBuilder->expr()->notExists(
                        \$exclusionQueryBuilder->getSQL()
                    )
                )
            )
            ->having(\$expression);

        \$glue = \$filter->getGlue().'Where';
        \$queryBuilder->\$glue(\$queryBuilder->expr()->exists(\$sessionQueryBuilder->getSQL()));

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
        return "@bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php", "/app/docroot/app/bundles/LeadBundle/Segment/Query/Filter/SessionsFilterQueryBuilder.php");
    }
}
