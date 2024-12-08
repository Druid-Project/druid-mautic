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

/* @bundles/DashboardBundle/DashboardEvents.php */
class __TwigTemplate_c4396230893031efeff130da565405c8 extends Template
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

namespace Mautic\\DashboardBundle;

/**
 * Events available for DashboardBundle.
 */
final class DashboardEvents
{
    /**
     * The mautic.dashboard_on_widget_list_generate event is dispatched when generating a list of available widget types.
     *
     * The event listener receives a
     * Mautic\\DashboardBundle\\Event\\WidgetTypeListEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_LIST_GENERATE = 'mautic.dashboard_on_widget_list_generate';

    /**
     * The mautic.dashboard_on_widget_form_generate event is dispatched when generating the form of a widget type.
     *
     * The event listener receives a
     * Mautic\\DashboardBundle\\Event\\WidgetFormEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_FORM_GENERATE = 'mautic.dashboard_on_widget_form_generate';

    /**
     * The mautic.dashboard_on_widget_detail_generate event is dispatched when generating the detail of a widget type.
     *
     * The event listener receives a
     * Mautic\\DashboardBundle\\Event\\WidgetDetailEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_DETAIL_GENERATE = 'mautic.dashboard_on_widget_detail_generate';

    /**
     * The mautic.dashboard_on_widget_detail_pre_load event is dispatched before detail of a widget type is generate.
     *
     * The event listener receives a
     * Mautic\\DashboardBundle\\Event\\WidgetDetailEvent instance.
     *
     * @var string
     */
    public const DASHBOARD_ON_MODULE_DETAIL_PRE_LOAD = 'mautic.dashboard_on_widget_detail_pre_load';
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/DashboardBundle/DashboardEvents.php";
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
        return new Source("", "@bundles/DashboardBundle/DashboardEvents.php", "/app/docroot/app/bundles/DashboardBundle/DashboardEvents.php");
    }
}
