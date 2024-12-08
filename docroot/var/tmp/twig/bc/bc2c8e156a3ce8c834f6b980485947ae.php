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

/* @bundles/EmailBundle/EventListener/CampaignConditionSubscriber.php */
class __TwigTemplate_4bf843f84c31b7de1e5e37f435ee3dff extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event\\CampaignBuilderEvent;
use Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Validator\\Exception\\UnexpectedValueException;

class CampaignConditionSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EmailValidator \$validator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_ON_BUILD          => ['onCampaignBuild', 0],
            EmailEvents::ON_CAMPAIGN_TRIGGER_CONDITION => ['onCampaignTriggerCondition', 0],
        ];
    }

    public function onCampaignBuild(CampaignBuilderEvent \$event): void
    {
        \$event->addCondition(
            'email.validate.address',
            [
                'label'       => 'mautic.email.campaign.event.validate_address',
                'description' => 'mautic.email.campaign.event.validate_address_descr',
                'eventName'   => EmailEvents::ON_CAMPAIGN_TRIGGER_CONDITION,
            ]
        );
    }

    public function onCampaignTriggerCondition(CampaignExecutionEvent \$event)
    {
        try {
            \$this->validator->validate(\$event->getLead()->getEmail(), true);
        } catch (UnexpectedValueException|InvalidEmailException) {
            return \$event->setResult(false);
        }

        return \$event->setResult(true);
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
        return "@bundles/EmailBundle/EventListener/CampaignConditionSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/CampaignConditionSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/CampaignConditionSubscriber.php");
    }
}
