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

/* @bundles/CampaignBundle/Event/DecisionResultsEvent.php */
class __TwigTemplate_7aa266508f9895167e9abd5aeecab09c extends Template
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
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;
use Mautic\\CampaignBundle\\Executioner\\Result\\EvaluatedContacts;
use Symfony\\Contracts\\EventDispatcher\\Event;

class DecisionResultsEvent extends Event
{
    /**
     * @param ArrayCollection<int, \\Mautic\\CampaignBundle\\Entity\\LeadEventLog> \$eventLogs
     */
    public function __construct(
        private AbstractEventAccessor \$eventConfig,
        private ArrayCollection \$eventLogs,
        private EvaluatedContacts \$evaluatedContacts
    ) {
    }

    /**
     * @return AbstractEventAccessor
     */
    public function getEventConfig()
    {
        return \$this->eventConfig;
    }

    /**
     * @return ArrayCollection|LeadEventLog[]
     */
    public function getLogs()
    {
        return \$this->eventLogs;
    }

    /**
     * @return EvaluatedContacts
     */
    public function getEvaluatedContacts()
    {
        return \$this->evaluatedContacts;
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
        return "@bundles/CampaignBundle/Event/DecisionResultsEvent.php";
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
        return new Source("", "@bundles/CampaignBundle/Event/DecisionResultsEvent.php", "/app/docroot/app/bundles/CampaignBundle/Event/DecisionResultsEvent.php");
    }
}
