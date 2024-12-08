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

/* @bundles/StageBundle/Entity/LeadStageLogRepository.php */
class __TwigTemplate_f347e9c29147d7ea430e4d64933b3eb3 extends Template
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

namespace Mautic\\StageBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<LeadStageLog>
 */
class LeadStageLogRepository extends CommonRepository
{
    /**
     * Updates lead ID (e.g. after a lead merge).
     */
    public function updateLead(\$fromLeadId, \$toLeadId): void
    {
        // First check to ensure the \$toLead doesn't already exist
        \$results = \$this->_em->getConnection()->createQueryBuilder()
            ->select('pl.stage_id')
            ->from(MAUTIC_TABLE_PREFIX.'stage_lead_action_log', 'pl')
            ->where('pl.lead_id = '.\$toLeadId)
            ->executeQuery()
            ->fetchAllAssociative();

        \$actions = [];
        foreach (\$results as \$r) {
            \$actions[] = \$r['stage_id'];
        }

        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'stage_lead_action_log')
            ->set('lead_id', (int) \$toLeadId)
            ->where('lead_id = '.(int) \$fromLeadId);

        if (!empty(\$actions)) {
            \$q->andWhere(
                \$q->expr()->notIn('stage_id', \$actions)
            )->executeStatement();

            // Delete remaining leads as the new lead already belongs
            \$this->_em->getConnection()->createQueryBuilder()
                ->delete(MAUTIC_TABLE_PREFIX.'stage_lead_action_log')
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
        return "@bundles/StageBundle/Entity/LeadStageLogRepository.php";
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
        return new Source("", "@bundles/StageBundle/Entity/LeadStageLogRepository.php", "/app/docroot/app/bundles/StageBundle/Entity/LeadStageLogRepository.php");
    }
}
