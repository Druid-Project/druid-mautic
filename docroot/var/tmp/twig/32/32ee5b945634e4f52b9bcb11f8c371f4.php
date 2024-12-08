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

/* @bundles/CampaignBundle/Event/CampaignScheduledEvent.php */
class __TwigTemplate_c2c4d7ac9dbf886618b83071bf9f0a33 extends Template
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

use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @deprecated 2.13.0; to be removed in 3.0
 */
class CampaignScheduledEvent extends Event
{
    use EventArrayTrait;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead
     */
    protected \$lead;

    /**
     * @var array
     */
    protected \$event;

    /**
     * @var array
     */
    protected \$eventDetails;

    /**
     * @var bool
     */
    protected \$systemTriggered;

    /**
     * @var \\DateTimeInterface
     */
    protected \$dateScheduled;

    /**
     * @var array
     */
    protected \$eventSettings;

    public function __construct(
        array \$args,
        protected ?LeadEventLog \$log = null
    ) {
        \$this->lead            = \$args['lead'];
        \$this->event           = \$args['event'];
        \$this->eventDetails    = \$args['eventDetails'];
        \$this->systemTriggered = \$args['systemTriggered'];
        \$this->dateScheduled   = \$args['dateScheduled'];
        \$this->eventSettings   = \$args['eventSettings'];
    }

    /**
     * @return \\Mautic\\LeadBundle\\Entity\\Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return array
     */
    public function getEvent()
    {
        return (\$this->event instanceof \\Mautic\\CampaignBundle\\Entity\\Event) ? \$this->getEventArray(\$this->event) : \$this->event;
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return \$this->getEvent()['properties'];
    }

    /**
     * @return array
     */
    public function getEventDetails()
    {
        return \$this->eventDetails;
    }

    /**
     * @return bool
     */
    public function getSystemTriggered()
    {
        return \$this->systemTriggered;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateScheduled()
    {
        return \$this->dateScheduled;
    }

    /**
     * @return mixed
     */
    public function getEventSettings()
    {
        return \$this->eventSettings;
    }

    /**
     * @return LeadEventLog|null
     */
    public function getLog()
    {
        return \$this->log;
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
        return "@bundles/CampaignBundle/Event/CampaignScheduledEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/CampaignScheduledEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/CampaignScheduledEvent.php");
    }
}
