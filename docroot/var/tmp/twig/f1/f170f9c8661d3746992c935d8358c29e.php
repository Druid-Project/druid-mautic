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

/* @bundles/CampaignBundle/Event/ScheduledBatchEvent.php */
class __TwigTemplate_5f0b68e87ceb8b5a649a6475f207b43b extends Template
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

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

class ScheduledBatchEvent extends AbstractLogCollectionEvent
{
    /**
     * @param bool \$isReschedule
     */
    public function __construct(
        AbstractEventAccessor \$config,
        Event \$event,
        ArrayCollection \$logs,
        private \$isReschedule = false
    ) {
        parent::__construct(\$config, \$event, \$logs);
    }

    /**
     * @return ArrayCollection
     */
    public function getScheduled()
    {
        return \$this->logs;
    }

    /**
     * @return bool
     */
    public function isReschedule()
    {
        return \$this->isReschedule;
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
        return "@bundles/CampaignBundle/Event/ScheduledBatchEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/ScheduledBatchEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/ScheduledBatchEvent.php");
    }
}
