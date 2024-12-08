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

/* @bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php */
class __TwigTemplate_0d0d5fd364de64decfcf7dc1e42072d1 extends Template
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
use Mautic\\LeadBundle\\Segment\\Query\\LeadBatchLimiterTrait;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;
use Mautic\\LeadBundle\\Segment\\Query\\QueryException;

class DoNotContactFilterQueryBuilder extends BaseFilterQueryBuilder
{
    use LeadBatchLimiterTrait;

    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.special.dnc';
    }

    /**
     * @throws QueryException
     */
    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias   = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$doNotContactParts = \$filter->getDoNotContactParts();
        \$batchLimiters     = \$filter->getBatchLimiters();
        \$expr              = \$queryBuilder->expr();
        \$queryAlias        = \$this->generateRandomParameterName();
        \$reasonParameter   = \"{\$queryAlias}reason\";
        \$channelParameter  = \"{\$queryAlias}channel\";

        \$queryBuilder->setParameter(\$reasonParameter, \$doNotContactParts->getParameterType());
        \$queryBuilder->setParameter(\$channelParameter, \$doNotContactParts->getChannel());

        \$filterQueryBuilder = \$queryBuilder->createQueryBuilder()
            ->select(\$queryAlias.'.lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'lead_donotcontact', \$queryAlias)
            ->andWhere(\$expr->eq(\$queryAlias.'.reason', ':'.\$reasonParameter))
            ->andWhere(\$expr->eq(\$queryAlias.'.channel', ':'.\$channelParameter));

        \$this->addLeadAndMinMaxLimiters(\$filterQueryBuilder, \$batchLimiters, 'lead_donotcontact');

        if ('eq' === \$filter->getOperator() xor !\$filter->getParameterValue()) {
            \$expression = \$expr->in(\$leadsTableAlias.'.id', \$filterQueryBuilder->getSQL());
        } else {
            \$expression = \$expr->notIn(\$leadsTableAlias.'.id', \$filterQueryBuilder->getSQL());
        }

        \$queryBuilder->addLogic(\$expression, \$filter->getGlue());

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
        return "@bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php", "/app/docroot/app/bundles/LeadBundle/Segment/Query/Filter/DoNotContactFilterQueryBuilder.php");
    }
}
