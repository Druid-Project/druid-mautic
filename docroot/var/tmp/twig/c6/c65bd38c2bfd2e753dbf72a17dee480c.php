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

/* @bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php */
class __TwigTemplate_c111c8236c6d811c805e15c2a3795e9f extends Template
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
use Mautic\\LeadBundle\\Segment\\Query\\QueryException;

class IntegrationCampaignFilterQueryBuilder extends BaseFilterQueryBuilder
{
    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.special.integration';
    }

    /**
     * @throws QueryException
     */
    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias          = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$integrationCampaignParts = \$filter->getIntegrationCampaignParts();

        \$integrationNameParameter    = \$this->generateRandomParameterName();
        \$campaignIdParameter         = \$this->generateRandomParameterName();

        \$tableAlias = \$this->generateRandomParameterName();

        \$queryBuilder->leftJoin(
            \$leadsTableAlias,
            MAUTIC_TABLE_PREFIX.'integration_entity',
            \$tableAlias,
            \$tableAlias.'.integration_entity = \"CampaignMember\" AND '.
            \$tableAlias.\".internal_entity = 'lead' AND \".
            \$tableAlias.'.internal_entity_id = '.\$leadsTableAlias.'.id'
        );

        \$expression = \$queryBuilder->expr()->and(
            \$queryBuilder->expr()->eq(\$tableAlias.'.integration', \":\$integrationNameParameter\"),
            \$queryBuilder->expr()->eq(\$tableAlias.'.integration_entity_id', \":\$campaignIdParameter\")
        );

        \$queryBuilder->addJoinCondition(\$tableAlias, \$expression);

        if ('eq' === \$filter->getOperator()) {
            \$queryType = \$filter->getParameterValue() ? 'isNotNull' : 'isNull';
        } else {
            \$queryType = \$filter->getParameterValue() ? 'isNull' : 'isNotNull';
        }

        \$queryBuilder->addLogic(\$queryBuilder->expr()->\$queryType(\$tableAlias.'.id'), \$filter->getGlue());

        \$queryBuilder->setParameter(\$integrationNameParameter, \$integrationCampaignParts->getIntegrationName());
        \$queryBuilder->setParameter(\$campaignIdParameter, \$integrationCampaignParts->getCampaignId());

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
        return "@bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php", "/app/docroot/app/bundles/LeadBundle/Segment/Query/Filter/IntegrationCampaignFilterQueryBuilder.php");
    }
}
