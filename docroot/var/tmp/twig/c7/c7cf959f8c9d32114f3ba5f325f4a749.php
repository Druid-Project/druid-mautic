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

/* @bundles/DashboardBundle/Config/config.php */
class __TwigTemplate_ba3ccc94783767b0fb89f899a4095650 extends Template
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

return [
    'routes' => [
        'main' => [
            'mautic_dashboard_index' => [
                'path'       => '/dashboard',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::indexAction',
            ],
            'mautic_dashboard_widget' => [
                'path'       => '/dashboard/widget/{widgetId}',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::widgetAction',
            ],
            'mautic_dashboard_action' => [
                'path'       => '/dashboard/{objectAction}/{objectId}',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\DashboardController::executeAction',
            ],
        ],
        'api' => [
            'mautic_widget_types' => [
                'path'       => '/data',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getTypesAction',
            ],
            'mautic_widget_data' => [
                'path'       => '/data/{type}',
                'controller' => 'Mautic\\DashboardBundle\\Controller\\Api\\WidgetApiController::getDataAction',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'priority' => 100,
            'items'    => [
                'mautic.dashboard.menu.index' => [
                    'route'     => 'mautic_dashboard_index',
                    'iconClass' => 'ri-funds-fill',
                ],
            ],
        ],
    ],
    'services' => [
        'other' => [
            'mautic.dashboard.widget' => [
                'class'     => Mautic\\DashboardBundle\\Dashboard\\Widget::class,
                'arguments' => [
                    'mautic.dashboard.model.dashboard',
                    'mautic.helper.user',
                    'session',
                ],
            ],
        ],
    ],
    'parameters' => [
        'dashboard_import_dir'      => '%mautic.application_dir%/app/assets/dashboards',
        'dashboard_import_user_dir' => '%mautic.application_dir%/media/dashboards',
    ],
];
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/DashboardBundle/Config/config.php";
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
        return new Source("", "@bundles/DashboardBundle/Config/config.php", "/app/docroot/app/bundles/DashboardBundle/Config/config.php");
    }
}
