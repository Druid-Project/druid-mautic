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

/* @bundles/PointBundle/Config/config.php */
class __TwigTemplate_6daf410c28a0dad591063da51606a9de extends Template
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
            'mautic_pointtriggerevent_action' => [
                'path'       => '/points/triggers/events/{objectAction}/{objectId}',
                'controller' => 'Mautic\\PointBundle\\Controller\\TriggerEventController::executeAction',
            ],
            'mautic_pointtrigger_index' => [
                'path'       => '/points/triggers/{page}',
                'controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::indexAction',
            ],
            'mautic_pointtrigger_action' => [
                'path'       => '/points/triggers/{objectAction}/{objectId}',
                'controller' => 'Mautic\\PointBundle\\Controller\\TriggerController::executeAction',
            ],
            'mautic_point.group_index' => [
                'path'       => '/points/groups/{page}',
                'controller' => 'Mautic\\PointBundle\\Controller\\GroupController::indexAction',
            ],
            'mautic_point.group_action' => [
                'path'       => '/points/groups/{objectAction}/{objectId}',
                'controller' => 'Mautic\\PointBundle\\Controller\\GroupController::executeAction',
            ],
            'mautic_point_index' => [
                'path'       => '/points/{page}',
                'controller' => 'Mautic\\PointBundle\\Controller\\PointController::indexAction',
            ],
            'mautic_point_action' => [
                'path'       => '/points/{objectAction}/{objectId}',
                'controller' => 'Mautic\\PointBundle\\Controller\\PointController::executeAction',
            ],
        ],
        'api' => [
            'mautic_api_pointactionsstandard' => [
                'standard_entity' => true,
                'name'            => 'points',
                'path'            => '/points',
                'controller'      => Mautic\\PointBundle\\Controller\\Api\\PointApiController::class,
            ],
            'mautic_api_getpointactiontypes' => [
                'path'       => '/points/actions/types',
                'controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::getPointActionTypesAction',
            ],
            'mautic_api_pointtriggersstandard' => [
                'standard_entity' => true,
                'name'            => 'triggers',
                'path'            => '/points/triggers',
                'controller'      => Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::class,
            ],
            'mautic_api_getpointtriggereventtypes' => [
                'path'       => '/points/triggers/events/types',
                'controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::getPointTriggerEventTypesAction',
            ],
            'mautic_api_pointtriggerdeleteevents' => [
                'path'       => '/points/triggers/{triggerId}/events/delete',
                'controller' => 'Mautic\\PointBundle\\Controller\\Api\\TriggerApiController::deletePointTriggerEventsAction',
                'method'     => 'DELETE',
            ],
            'mautic_api_adjustcontactpoints' => [
                'path'       => '/contacts/{leadId}/points/{operator}/{delta}',
                'controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointApiController::adjustPointsAction',
                'method'     => 'POST',
            ],
            'mautic_api_pointgroupsstandard' => [
                'standard_entity' => true,
                'name'            => 'pointGroups',
                'path'            => '/points/groups',
                'controller'      => Mautic\\PointBundle\\Controller\\Api\\PointGroupsApiController::class,
            ],
            'mautic_api_getcontactpointgroups' => [
                'path'       => '/contacts/{contactId}/points/groups',
                'controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointGroupsApiController::getContactPointGroupsAction',
            ],
            'mautic_api_getcontactpointgroup' => [
                'path'       => '/contacts/{contactId}/points/groups/{groupId}',
                'controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointGroupsApiController::getContactPointGroupAction',
            ],
            'mautic_api_adjustcontactgrouppoints' => [
                'path'       => '/contacts/{contactId}/points/groups/{groupId}/{operator}/{value}',
                'controller' => 'Mautic\\PointBundle\\Controller\\Api\\PointGroupsApiController::adjustGroupPointsAction',
                'method'     => 'POST',
            ],
        ],
    ],

    'menu' => [
        'main' => [
            'mautic.points.menu.root' => [
                'id'        => 'mautic_points_root',
                'iconClass' => 'ri-coins-fill',
                'access'    => ['point:points:view', 'point:triggers:view', 'point:groups:view'],
                'priority'  => 30,
                'children'  => [
                    'mautic.point.menu.index' => [
                        'route'  => 'mautic_point_index',
                        'access' => 'point:points:view',
                    ],
                    'mautic.point.trigger.menu.index' => [
                        'route'  => 'mautic_pointtrigger_index',
                        'access' => 'point:triggers:view',
                    ],
                    'mautic.point.group.menu.index' => [
                        'route'  => 'mautic_point.group_index',
                        'access' => 'point:groups:view',
                    ],
                ],
            ],
        ],
    ],

    'categories' => [
        'point' => null,
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
        return "@bundles/PointBundle/Config/config.php";
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
        return new Source("", "@bundles/PointBundle/Config/config.php", "/app/docroot/app/bundles/PointBundle/Config/config.php");
    }
}
