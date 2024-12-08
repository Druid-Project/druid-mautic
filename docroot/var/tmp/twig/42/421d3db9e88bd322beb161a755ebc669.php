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

/* @bundles/CampaignBundle/Membership/EventDispatcher.php */
class __TwigTemplate_da791c7884a784a1f5301442dc558b37 extends Template
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

namespace Mautic\\CampaignBundle\\Membership;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class EventDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * @param string \$action
     */
    public function dispatchMembershipChange(Lead \$contact, Campaign \$campaign, \$action): void
    {
        \$this->dispatcher->dispatch(
            new CampaignLeadChangeEvent(\$campaign, \$contact, \$action),
            CampaignEvents::CAMPAIGN_ON_LEADCHANGE
        );
    }

    public function dispatchBatchMembershipChange(array \$contacts, Campaign \$campaign, \$action): void
    {
        \$this->dispatcher->dispatch(
            new CampaignLeadChangeEvent(\$campaign, \$contacts, \$action),
            CampaignEvents::LEAD_CAMPAIGN_BATCH_CHANGE
        );
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
        return "@bundles/CampaignBundle/Membership/EventDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/EventDispatcher.php", "/app/docroot/app/bundles/CampaignBundle/Membership/EventDispatcher.php");
    }
}
