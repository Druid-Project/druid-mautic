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

/* @bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php */
class __TwigTemplate_1ec8bd70d2a9fb52a534231558729302 extends Template
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

namespace Mautic\\CampaignBundle\\Event;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CampaignLeadChangeEvent extends Event
{
    /**
     * @var ?Lead
     */
    private \$lead;

    /**
     * @var Lead[]
     */
    private array \$leads = [];

    /**
     * @param Lead|Lead[] \$leads
     * @param ?string     \$action
     */
    public function __construct(
        private Campaign \$campaign,
        \$leads,
        private \$action
    ) {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
    }

    /**
     * Returns the Campaign entity.
     *
     * @return Campaign
     */
    public function getCampaign()
    {
        return \$this->campaign;
    }

    /**
     * Returns the Lead entity.
     *
     * @return Lead|null
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * If this is a batch event, return array of leads.
     *
     * @return Lead[]|null
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    /**
     * Returns added or removed.
     *
     * @return string|null
     */
    public function getAction()
    {
        return \$this->action;
    }

    /**
     * Lead was removed from the campaign.
     */
    public function wasRemoved(): bool
    {
        return 'removed' === \$this->action;
    }

    /**
     * Lead was added to the campaign.
     */
    public function wasAdded(): bool
    {
        return 'added' === \$this->action;
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
        return "@bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/CampaignLeadChangeEvent.php");
    }
}
