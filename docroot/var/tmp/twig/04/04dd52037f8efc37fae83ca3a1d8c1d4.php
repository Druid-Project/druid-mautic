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

/* @bundles/CampaignBundle/Executioner/Dispatcher/ConditionDispatcher.php */
class __TwigTemplate_0ef6174944612fe6c1a0d27fc2b0562f extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Dispatcher;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\ConditionEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ConditionAccessor;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ConditionDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function dispatchEvent(ConditionAccessor \$config, LeadEventLog \$log): ConditionEvent
    {
        \$event = new ConditionEvent(\$config, \$log);
        \$this->dispatcher->dispatch(\$event, \$config->getEventName());
        \$this->dispatcher->dispatch(\$event, CampaignEvents::ON_EVENT_CONDITION_EVALUATION);

        return \$event;
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
        return "@bundles/CampaignBundle/Executioner/Dispatcher/ConditionDispatcher.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Dispatcher/ConditionDispatcher.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Dispatcher/ConditionDispatcher.php");
    }
}
