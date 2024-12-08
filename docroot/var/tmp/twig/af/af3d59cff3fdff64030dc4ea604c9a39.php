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

/* @bundles/ApiBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_766cb8cead3544d1197d17f60a7ea2e3 extends Template
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

namespace Mautic\\ApiBundle\\EventListener;

use Mautic\\ApiBundle\\Form\\Type\\ConfigType;
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
        \$event->addForm([
            'bundle'     => 'ApiBundle',
            'formAlias'  => 'apiconfig',
            'formType'   => ConfigType::class,
            'formTheme'  => '@MauticApi/FormTheme/Config/_config_apiconfig_widget.html.twig',
            'parameters' => \$event->getParametersFromConfig('MauticApiBundle'),
        ]);
    }

    public function onConfigSave(ConfigEvent \$event): void
    {
        // Symfony craps out with integer for firewall settings
        \$data = \$event->getConfig('apiconfig');
        if (isset(\$data['api_enable_basic_auth'])) {
            \$data['api_enable_basic_auth'] = (bool) \$data['api_enable_basic_auth'];
            \$event->setConfig(\$data, 'apiconfig');
        }
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
        return "@bundles/ApiBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/ApiBundle/EventListener/ConfigSubscriber.php", "/app/docroot/app/bundles/ApiBundle/EventListener/ConfigSubscriber.php");
    }
}
