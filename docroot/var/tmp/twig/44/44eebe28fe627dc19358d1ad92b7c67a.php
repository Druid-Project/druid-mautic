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

/* @bundles/FormBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_0282aee9fb2b17224b91ac255edbd3b3 extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\FormBundle\\Form\\Type\\ConfigFormType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_ON_GENERATE => ['onConfigGenerate', 0],
        ];
    }

    public function onConfigGenerate(ConfigBuilderEvent \$event): void
    {
        \$event->addForm([
            'bundle'     => 'FormBundle',
            'formAlias'  => 'formconfig',
            'formType'   => ConfigFormType::class,
            'formTheme'  => '@MauticForm/FormTheme/Config/_config_formconfig_widget.html.twig',
            'parameters' => \$event->getParametersFromConfig('MauticFormBundle'),
        ]);
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
        return "@bundles/FormBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/ConfigSubscriber.php", "/app/docroot/app/bundles/FormBundle/EventListener/ConfigSubscriber.php");
    }
}
