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

/* @bundles/ApiBundle/Config/config.php */
class __TwigTemplate_8cb039bb2932dfaa88c598761fff61e1 extends Template
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
        'public' => [
            // OAuth2
            'fos_oauth_server_token' => [
                'path'       => '/oauth/v2/token',
                'controller' => 'fos_oauth_server.controller.token:tokenAction',
                'method'     => 'GET|POST',
            ],
            'fos_oauth_server_authorize' => [
                'path'       => '/oauth/v2/authorize',
                'controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\AuthorizeController::authorizeAction',
                'method'     => 'GET|POST',
            ],
            'mautic_oauth2_server_auth_login' => [
                'path'       => '/oauth/v2/authorize_login',
                'controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginAction',
                'method'     => 'GET|POST',
            ],
            'mautic_oauth2_server_auth_login_check' => [
                'path'       => '/oauth/v2/authorize_login_check',
                'controller' => 'Mautic\\ApiBundle\\Controller\\oAuth2\\SecurityController::loginCheckAction',
                'method'     => 'GET|POST',
            ],
        ],
        'main' => [
            // Clients
            'mautic_client_index' => [
                'path'       => '/credentials/{page}',
                'controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::indexAction',
            ],
            'mautic_client_action' => [
                'path'       => '/credentials/{objectAction}/{objectId}',
                'controller' => 'Mautic\\ApiBundle\\Controller\\ClientController::executeAction',
            ],
        ],
    ],

    'menu' => [
        'admin' => [
            'items' => [
                'mautic.api.client.menu.index' => [
                    'route'     => 'mautic_client_index',
                    'access'    => 'api:clients:view',
                    'parent'    => 'mautic.core.integrations',
                    'iconClass' => 'ri-terminal-box-line',
                    'priority'  => 17,
                    'checks'    => [
                        'parameters' => [
                            'api_enabled' => true,
                        ],
                    ],
                ],
            ],
        ],
    ],

    'services' => [
        'helpers' => [
            'mautic.api.helper.entity_result' => [
                'class' => Mautic\\ApiBundle\\Helper\\EntityResultHelper::class,
            ],
        ],
        'other' => [
            'mautic.api.oauth.event_listener' => [
                'class'     => Mautic\\ApiBundle\\EventListener\\PreAuthorizationEventListener::class,
                'arguments' => [
                    'doctrine.orm.entity_manager',
                    'mautic.security',
                    'translator',
                ],
                'tags' => [
                    'kernel.event_listener',
                    'kernel.event_listener',
                ],
                'tagArguments' => [
                    [
                        'event'  => 'fos_oauth_server.pre_authorization_process',
                        'method' => 'onPreAuthorizationProcess',
                    ],
                    [
                        'event'  => 'fos_oauth_server.post_authorization_process',
                        'method' => 'onPostAuthorizationProcess',
                    ],
                ],
            ],
            'fos_oauth_server.security.authentication.listener.class' => Mautic\\ApiBundle\\Security\\OAuth2\\Firewall\\OAuthListener::class,
            'mautic.validator.oauthcallback'                          => [
                'class' => Mautic\\ApiBundle\\Form\\Validator\\Constraints\\OAuthCallbackValidator::class,
                'tag'   => 'validator.constraint_validator',
            ],
        ],
    ],

    'parameters' => [
        'api_enabled'                       => false,
        'api_enable_basic_auth'             => false,
        'api_oauth2_access_token_lifetime'  => 60,
        'api_oauth2_refresh_token_lifetime' => 14,
        'api_batch_max_limit'               => 200,
        'api_rate_limiter_limit'            => 0,
        'api_rate_limiter_cache'            => [
            'adapter' => 'cache.adapter.filesystem',
        ],
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
        return "@bundles/ApiBundle/Config/config.php";
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
        return new Source("", "@bundles/ApiBundle/Config/config.php", "/app/docroot/app/bundles/ApiBundle/Config/config.php");
    }
}
