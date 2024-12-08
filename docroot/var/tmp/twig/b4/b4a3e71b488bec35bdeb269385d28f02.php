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

/* @bundles/NotificationBundle/EventListener/PageSubscriber.php */
class __TwigTemplate_0fb8990ae810a7e468b7ea6568db80d4 extends Template
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

namespace Mautic\\NotificationBundle\\EventListener;

use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class PageSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AssetsHelper \$assetsHelper,
        private IntegrationHelper \$integrationHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PageEvents::PAGE_ON_DISPLAY => ['onPageDisplay', 0],
        ];
    }

    public function onPageDisplay(PageDisplayEvent \$event): void
    {
        \$integrationObject = \$this->integrationHelper->getIntegrationObject('OneSignal');
        \$settings          = \$integrationObject->getIntegrationSettings();
        \$features          = \$settings->getFeatureSettings();

        \$script = '';
        if (!in_array('landing_page_enabled', \$features)) {
            \$script = 'disable_notification = true;';
        }

        \$this->assetsHelper->addScriptDeclaration(\$script, 'onPageDisplay_headClose');
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
        return "@bundles/NotificationBundle/EventListener/PageSubscriber.php";
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
        return new Source("", "@bundles/NotificationBundle/EventListener/PageSubscriber.php", "/app/docroot/app/bundles/NotificationBundle/EventListener/PageSubscriber.php");
    }
}
