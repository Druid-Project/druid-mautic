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

/* @bundles/CampaignBundle/Executioner/Result/Responses.php */
class __TwigTemplate_2d6c219a733066765b31b7336fcb8e63 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Result;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;

class Responses
{
    private array \$actionResponses = [];

    private array \$conditionResponses = [];

    public function setFromLogs(ArrayCollection \$logs): void
    {
        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$metadata = \$log->getMetadata();
            \$response = \$metadata;

            if (isset(\$metadata['timeline']) && 1 === count(\$metadata)) {
                // Legacy listeners set a string in CampaignExecutionEvent::setResult that Lead::appendToMetadata put into
                // under a timeline key for BC support. To keep BC for decisions, we have to extract that back out for the bubble
                // up responses

                \$response = \$metadata['timeline'];
            }

            \$this->setResponse(\$log->getEvent(), \$response);
        }
    }

    /**
     * @param mixed \$response
     */
    public function setResponse(Event \$event, \$response): void
    {
        switch (\$event->getEventType()) {
            case Event::TYPE_ACTION:
                if (!isset(\$this->actionResponses[\$event->getType()])) {
                    \$this->actionResponses[\$event->getType()] = [];
                }
                \$this->actionResponses[\$event->getType()][\$event->getId()] = \$response;
                break;
            case Event::TYPE_CONDITION:
                if (!isset(\$this->conditionResponses[\$event->getType()])) {
                    \$this->conditionResponses[\$event->getType()] = [];
                }
                \$this->conditionResponses[\$event->getType()][\$event->getId()] = \$response;
                break;
        }
    }

    /**
     * @param string|null \$type
     *
     * @return array
     */
    public function getActionResponses(\$type = null)
    {
        if (\$type) {
            return \$this->actionResponses[\$type] ?? [];
        }

        return \$this->actionResponses;
    }

    /**
     * @param string|null \$type
     *
     * @return array
     */
    public function getConditionResponses(\$type = null)
    {
        if (\$type) {
            return \$this->conditionResponses[\$type] ?? [];
        }

        return \$this->conditionResponses;
    }

    public function containsResponses(): int
    {
        return count(\$this->actionResponses) + count(\$this->conditionResponses);
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
        return "@bundles/CampaignBundle/Executioner/Result/Responses.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Result/Responses.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Result/Responses.php");
    }
}
