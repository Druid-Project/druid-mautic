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

/* @bundles/CampaignBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_50e0452747c962e04f0994adc41c7eac extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\Form\\Type\\ConfigType;
use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => ['onConfigGenerate', 0],
            ConfigEvents::CONFIG_PRE_SAVE    => ['onConfigSave', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event): void
    {
        \$event->addForm(
            [
                'bundle'     => 'CampaignBundle',
                'formAlias'  => 'campaignconfig',
                'formType'   => ConfigType::class,
                'formTheme'  => '@MauticCampaign/FormTheme/Config/_config_campaignconfig_widget.html.twig',
                'parameters' => \$event->getParametersFromConfig('MauticCampaignBundle'),
            ]
        );
    }

    public function onConfigSave(ConfigEvent \$event): void
    {
        /** @var array \$values */
        \$values = \$event->getConfig();

        // Manipulate the values
        if (!empty(\$values['campaignconfig']['campaign_time_wait_on_event_false'])) {
            \$values['campaignconfig']['campaign_time_wait_on_event_false'] = htmlspecialchars(\$values['campaignconfig']['campaign_time_wait_on_event_false']);
        }

        // Set updated values
        \$event->setConfig(\$values);
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
        return "@bundles/CampaignBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/ConfigSubscriber.php", "/app/docroot/app/bundles/CampaignBundle/EventListener/ConfigSubscriber.php");
    }
}
