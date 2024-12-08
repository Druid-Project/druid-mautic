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

/* @bundles/CampaignBundle/Entity/FailedLeadEventLogRepository.php */
class __TwigTemplate_8f063e87e5898f7bf103adccb33a39a6 extends Template
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

namespace Mautic\\CampaignBundle\\Entity;

use Doctrine\\DBAL\\ArrayParameterType;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<FailedLeadEventLog>
 */
class FailedLeadEventLogRepository extends CommonRepository
{
    /**
     * @param array<string|int> \$ids
     */
    public function deleteByIds(array \$ids): void
    {
        if (!\$ids) {
            return;
        }

        \$this->_em->getConnection()
            ->createQueryBuilder()
            ->delete(MAUTIC_TABLE_PREFIX.'campaign_lead_event_failed_log')
            ->where('log_id IN (:ids)')
            ->setParameter('ids', \$ids, ArrayParameterType::STRING)
            ->executeStatement();
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
        return "@bundles/CampaignBundle/Entity/FailedLeadEventLogRepository.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/FailedLeadEventLogRepository.php", "/app/docroot/app/bundles/CampaignBundle/Entity/FailedLeadEventLogRepository.php");
    }
}
