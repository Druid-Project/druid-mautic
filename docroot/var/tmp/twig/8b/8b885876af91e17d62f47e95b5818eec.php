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

/* @bundles/DashboardBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_fa13cb005f79c6b6d5ff1a87417c4c3c extends Template
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

namespace Mautic\\DashboardBundle\\EventListener;

use Mautic\\DashboardBundle\\DashboardEvents;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\Event\\WidgetFormEvent;
use Mautic\\DashboardBundle\\Event\\WidgetTypeListEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class DashboardSubscriber implements EventSubscriberInterface
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'others';

    /**
     * Define the widget(s).
     *
     * @var array
     */
    protected \$types = [];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [];

    public static function getSubscribedEvents(): array
    {
        return [
            DashboardEvents::DASHBOARD_ON_MODULE_LIST_GENERATE   => ['onWidgetListGenerate', 0],
            DashboardEvents::DASHBOARD_ON_MODULE_FORM_GENERATE   => ['onWidgetFormGenerate', 0],
            DashboardEvents::DASHBOARD_ON_MODULE_DETAIL_PRE_LOAD => ['onWidgetDetailPreLoad', 0],
            DashboardEvents::DASHBOARD_ON_MODULE_DETAIL_GENERATE => ['onWidgetDetailGenerate', 0],
        ];
    }

    /**
     * Generates widget preview without data.
     *
     * @throws \\Psr\\Cache\\InvalidArgumentException
     */
    public function onWidgetDetailPreLoad(WidgetDetailEvent \$event): void
    {
        \$event->setTemplate('@MauticCore/Helper/chart.html.twig');
        \$event->stopPropagation();
    }

    /**
     * Adds widget new widget types to the list of available widget types.
     */
    public function onWidgetListGenerate(WidgetTypeListEvent \$event): void
    {
        if (\$this->permissions && !\$event->hasPermissions(\$this->permissions)) {
            return;
        }

        \$widgetTypes = array_keys(\$this->types);

        foreach (\$widgetTypes as \$type) {
            \$event->addType(\$type, \$this->bundle);
        }
    }

    /**
     * Set a widget edit form when needed.
     */
    public function onWidgetFormGenerate(WidgetFormEvent \$event): void
    {
        if (isset(\$this->types[\$event->getType()])) {
            \$event->setForm(\$this->types[\$event->getType()]);
            \$event->stopPropagation();
        }
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
    }

    /**
     * Set a widget detail when needed.
     */
    public function checkPermissions(WidgetDetailEvent \$event): void
    {
        \$widgetTypes = array_keys(\$this->types);
        if (\$this->permissions && !\$event->hasPermissions(\$this->permissions) && in_array(\$event->getType(), \$widgetTypes)) {
            \$translator = \$event->getTranslator();
            \$event->setErrorMessage(\$translator->trans('mautic.dashboard.missing.permission', ['%section%' => \$this->bundle]));
            \$event->stopPropagation();

            return;
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
        return "@bundles/DashboardBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/DashboardBundle/EventListener/DashboardSubscriber.php", "/app/docroot/app/bundles/DashboardBundle/EventListener/DashboardSubscriber.php");
    }
}
