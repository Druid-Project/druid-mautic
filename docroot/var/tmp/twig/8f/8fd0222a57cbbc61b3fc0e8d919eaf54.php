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

/* @bundles/PointBundle/Entity/LeadPointLogRepository.php */
class __TwigTemplate_19ea3225252c2aac07ef51aef2b3805f extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<LeadPointLog>
 */
class LeadPointLogRepository extends CommonRepository
{
    /**
     * Updates lead ID (e.g. after a lead merge).
     */
    public function updateLead(\$fromLeadId, \$toLeadId): void
    {
        // First check to ensure the \$toLead doesn't already exist
        \$results = \$this->_em->getConnection()->createQueryBuilder()
            ->select('pl.point_id')
            ->from(MAUTIC_TABLE_PREFIX.'point_lead_action_log', 'pl')
            ->where('pl.lead_id = '.\$toLeadId)
            ->executeQuery()
            ->fetchAllAssociative();

        \$actions = [];
        foreach (\$results as \$r) {
            \$actions[] = \$r['point_id'];
        }

        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'point_lead_action_log')
            ->set('lead_id', (int) \$toLeadId)
            ->where('lead_id = '.(int) \$fromLeadId);

        if (!empty(\$actions)) {
            \$q->andWhere(
                \$q->expr()->notIn('point_id', \$actions)
            )->executeStatement();

            // Delete remaining leads as the new lead already belongs
            \$this->_em->getConnection()->createQueryBuilder()
                ->delete(MAUTIC_TABLE_PREFIX.'point_lead_action_log')
                ->where('lead_id = '.(int) \$fromLeadId)
                ->executeStatement();
        } else {
            \$q->executeStatement();
        }
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
        return "@bundles/PointBundle/Entity/LeadPointLogRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/LeadPointLogRepository.php", "/app/docroot/app/bundles/PointBundle/Entity/LeadPointLogRepository.php");
    }
}
