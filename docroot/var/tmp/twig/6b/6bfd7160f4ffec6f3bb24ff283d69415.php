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

/* @bundles/CampaignBundle/Event/CampaignTriggerEvent.php */
class __TwigTemplate_847e1ccf2a2d42567b51c82ad7dba9e3 extends Template
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
use Symfony\\Contracts\\EventDispatcher\\Event;

class CampaignTriggerEvent extends Event
{
    /**
     * @var bool
     */
    protected \$triggerCampaign = true;

    public function __construct(
        protected Campaign \$campaign
    ) {
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
     * @return bool
     */
    public function shouldTrigger()
    {
        return \$this->triggerCampaign;
    }

    /**
     * Do not trigger this campaign.
     */
    public function doNotTrigger(): void
    {
        \$this->triggerCampaign = false;

        \$this->stopPropagation();
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
        return "@bundles/CampaignBundle/Event/CampaignTriggerEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignTriggerEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/CampaignTriggerEvent.php");
    }
}
