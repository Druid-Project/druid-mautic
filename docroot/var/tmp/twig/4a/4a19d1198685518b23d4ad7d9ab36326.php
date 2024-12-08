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

/* @bundles/WebhookBundle/Config/config.php */
class __TwigTemplate_474d19e0466d57ae6feb2c280e88b14d extends Template
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
            'mautic_webhook_index' => [
                'path'       => '/webhooks/{page}',
                'controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::indexAction',
            ],
            'mautic_webhook_action' => [
                'path'       => '/webhooks/{objectAction}/{objectId}',
                'controller' => 'Mautic\\WebhookBundle\\Controller\\WebhookController::executeAction',
            ],
        ],
        'api' => [
            'mautic_api_webhookstandard' => [
                'standard_entity' => true,
                'name'            => 'hooks',
                'path'            => '/hooks',
                'controller'      => Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::class,
            ],
            'mautic_api_webhookevents' => [
                'path'       => '/hooks/triggers',
                'controller' => 'Mautic\\WebhookBundle\\Controller\\Api\\WebhookApiController::getTriggersAction',
            ],
        ],
    ],

    'menu' => [
        'admin' => [
            'items' => [
                'mautic.webhook.webhooks' => [
                    'id'        => 'mautic_webhook_root',
                    'access'    => ['webhook:webhooks:viewown', 'webhook:webhooks:viewother'],
                    'route'     => 'mautic_webhook_index',
                    'parent'    => 'mautic.core.integrations',
                    'iconClass' => 'ri-webhook-fill',
                ],
            ],
        ],
    ],

    'services' => [
        'others' => [
            'mautic.webhook.notificator.webhookkillnotificator' => [
                'class'     => Mautic\\WebhookBundle\\Notificator\\WebhookKillNotificator::class,
                'arguments' => [
                    'translator',
                    'router',
                    'mautic.core.model.notification',
                    'doctrine.orm.entity_manager',
                    'mautic.helper.mailer',
                    'mautic.helper.core_parameters',
                ],
            ],
            'mautic.webhook.campaign.helper' => [
                'class'     => Mautic\\WebhookBundle\\Helper\\CampaignHelper::class,
                'arguments' => [
                    'mautic.http.client',
                    'mautic.lead.model.company',
                    'event_dispatcher',
                ],
            ],
            'mautic.webhook.http.client' => [
                'class'     => Mautic\\WebhookBundle\\Http\\Client::class,
                'arguments' => [
                    'mautic.helper.core_parameters',
                    'mautic.http.client',
                ],
            ],
        ],
    ],

    'parameters' => [
        'webhook_limit'                        => 10, // How many entities can be sent in one webhook
        'webhook_time_limit'                   => 600, // How long the webhook processing can run in seconds
        'webhook_log_max'                      => 1000, // How many recent logs to keep
        'clean_webhook_logs_in_background'     => false,
        'webhook_disable_limit'                => 100, // How many times the webhook response can fail until the webhook will be unpublished
        'webhook_timeout'                      => 15, // How long the CURL request can wait for response before Mautic hangs up. In seconds
        'queue_mode'                           => Mautic\\WebhookBundle\\Model\\WebhookModel::IMMEDIATE_PROCESS, // Trigger the webhook immediately or queue it for faster response times
        'events_orderby_dir'                   => Doctrine\\Common\\Collections\\Criteria::ASC, // Order the queued events chronologically or the other way around
        'webhook_email_details'                => true, // If enabled, email related webhooks send detailed data
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
        return "@bundles/WebhookBundle/Config/config.php";
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
        return new Source("", "@bundles/WebhookBundle/Config/config.php", "/app/docroot/app/bundles/WebhookBundle/Config/config.php");
    }
}
