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

/* @bundles/NotificationBundle/Config/config.php */
class __TwigTemplate_3126e4ec0ef2f8f9246ddf510ea1446e extends Template
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
    'services' => [
        'events' => [
            'mautic.notification.campaignbundle.subscriber' => [
                'class'     => Mautic\\NotificationBundle\\EventListener\\CampaignSubscriber::class,
                'arguments' => [
                    'mautic.helper.integration',
                    'mautic.notification.model.notification',
                    'mautic.notification.api',
                    'event_dispatcher',
                    'mautic.lead.model.dnc',
                    'translator',
                ],
            ],
        ],
        'helpers' => [
            'mautic.helper.notification' => [
                'class'     => Mautic\\NotificationBundle\\Helper\\NotificationHelper::class,
                'alias'     => 'notification_helper',
                'arguments' => [
                    'doctrine.orm.entity_manager',
                    'twig.helper.assets',
                    'mautic.helper.core_parameters',
                    'mautic.helper.integration',
                    'router',
                    'request_stack',
                    'mautic.lead.model.dnc',
                ],
            ],
        ],
        'other' => [
            'mautic.notification.api' => [
                'class'     => Mautic\\NotificationBundle\\Api\\OneSignalApi::class,
                'arguments' => [
                    'mautic.http.client',
                    'mautic.page.model.trackable',
                    'mautic.helper.integration',
                ],
                'alias' => 'notification_api',
            ],
        ],
        'integrations' => [
            'mautic.integration.onesignal' => [
                'class'     => Mautic\\NotificationBundle\\Integration\\OneSignalIntegration::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.helper.cache_storage',
                    'doctrine.orm.entity_manager',
                    'session',
                    'request_stack',
                    'router',
                    'translator',
                    'monolog.logger.mautic',
                    'mautic.helper.encryption',
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.paths',
                    'mautic.core.model.notification',
                    'mautic.lead.model.field',
                    'mautic.plugin.model.integration_entity',
                    'mautic.lead.model.dnc',
                ],
            ],
        ],
    ],
    'routes' => [
        'main' => [
            'mautic_notification_index' => [
                'path'       => '/notifications/{page}',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::indexAction',
            ],
            'mautic_notification_action' => [
                'path'       => '/notifications/{objectAction}/{objectId}',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::executeAction',
            ],
            'mautic_notification_contacts' => [
                'path'       => '/notifications/view/{objectId}/contact/{page}',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\NotificationController::contactsAction',
            ],
            'mautic_mobile_notification_index' => [
                'path'       => '/mobile_notifications/{page}',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::indexAction',
            ],
            'mautic_mobile_notification_action' => [
                'path'       => '/mobile_notifications/{objectAction}/{objectId}',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::executeAction',
            ],
            'mautic_mobile_notification_contacts' => [
                'path'       => '/mobile_notifications/view/{objectId}/contact/{page}',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\MobileNotificationController::contactsAction',
            ],
        ],
        'public' => [
            'mautic_receive_notification' => [
                'path'       => '/notification/receive',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::receiveAction',
            ],
            'mautic_subscribe_notification' => [
                'path'       => '/notification/subscribe',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::subscribeAction',
            ],
            'mautic_notification_popup' => [
                'path'       => '/notification',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\PopupController::indexAction',
            ],

            // JS / Manifest URL's
            'mautic_onesignal_worker' => [
                'path'       => '/OneSignalSDKWorker.js',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::workerAction',
            ],
            'mautic_onesignal_updater' => [
                'path'       => '/OneSignalSDKUpdaterWorker.js',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::updaterAction',
            ],
            'mautic_onesignal_manifest' => [
                'path'       => '/manifest.json',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\JsController::manifestAction',
            ],
            'mautic_app_notification' => [
                'path'       => '/notification/appcallback',
                'controller' => 'Mautic\\NotificationBundle\\Controller\\AppCallbackController::indexAction',
            ],
        ],
        'api' => [
            'mautic_api_notificationsstandard' => [
                'standard_entity' => true,
                'name'            => 'notifications',
                'path'            => '/notifications',
                'controller'      => Mautic\\NotificationBundle\\Controller\\Api\\NotificationApiController::class,
            ],
        ],
    ],
    'menu' => [
        'main' => [
            'items' => [
                'mautic.notification.notifications' => [
                    'route'  => 'mautic_notification_index',
                    'access' => ['notification:notifications:viewown', 'notification:notifications:viewother'],
                    'checks' => [
                        'integration' => [
                            'OneSignal' => [
                                'enabled' => true,
                            ],
                        ],
                    ],
                    'parent'   => 'mautic.core.channels',
                    'priority' => 80,
                ],
                'mautic.notification.mobile_notifications' => [
                    'route'  => 'mautic_mobile_notification_index',
                    'access' => ['notification:mobile_notifications:viewown', 'notification:mobile_notifications:viewother'],
                    'checks' => [
                        'integration' => [
                            'OneSignal' => [
                                'enabled'  => true,
                                'features' => [
                                    'mobile',
                                ],
                            ],
                        ],
                    ],
                    'parent'   => 'mautic.core.channels',
                    'priority' => 65,
                ],
            ],
        ],
    ],
    // 'categories' => [
    //    'notification' => null
    // ],
    'parameters' => [
        'notification_enabled'                        => false,
        'notification_landing_page_enabled'           => true,
        'notification_tracking_page_enabled'          => false,
        'notification_app_id'                         => null,
        'notification_rest_api_key'                   => null,
        'notification_safari_web_id'                  => null,
        'gcm_sender_id'                               => '482941778795',
        'notification_subdomain_name'                 => null,
        'welcomenotification_enabled'                 => true,
        'campaign_send_notification_to_author'        => true,
        'campaign_notification_email_addresses'       => null,
        'webhook_send_notification_to_author'         => true,
        'webhook_notification_email_addresses'        => null,
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
        return "@bundles/NotificationBundle/Config/config.php";
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
        return new Source("", "@bundles/NotificationBundle/Config/config.php", "/app/docroot/app/bundles/NotificationBundle/Config/config.php");
    }
}
