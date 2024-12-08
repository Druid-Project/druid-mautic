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

/* @bundles/MarketplaceBundle/Config/config.php */
class __TwigTemplate_1d96de6d0358ab2520a3954c747ba690 extends Template
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

declare(strict_types=1);

use Mautic\\MarketplaceBundle\\Service\\Config;
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;

return [
    'routes' => [
        'main' => [
            RouteProvider::ROUTE_LIST => [
                'path'       => '/marketplace/{page}',
                'controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\ListController::listAction',
                'method'     => 'GET|POST',
                'defaults'   => ['page' => 1],
            ],
            RouteProvider::ROUTE_DETAIL => [
                'path'       => '/marketplace/detail/{vendor}/{package}',
                'controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\DetailController::viewAction',
                'method'     => 'GET',
            ],
            RouteProvider::ROUTE_INSTALL => [
                'path'       => '/marketplace/install/{vendor}/{package}',
                'controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\InstallController::viewAction',
                'method'     => 'GET|POST',
            ],
            RouteProvider::ROUTE_REMOVE => [
                'path'       => '/marketplace/remove/{vendor}/{package}',
                'controller' => 'Mautic\\MarketplaceBundle\\Controller\\Package\\RemoveController::viewAction',
                'method'     => 'GET|POST',
            ],
            RouteProvider::ROUTE_CLEAR_CACHE => [
                'path'       => '/marketplace/clear/cache',
                'controller' => 'Mautic\\MarketplaceBundle\\Controller\\CacheController::clearAction',
                'method'     => 'GET',
            ],
        ],
    ],
    'services' => [
        'permissions' => [
            'marketplace.permissions' => [
                'class'     => Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions::class,
                'arguments' => [
                    'mautic.helper.core_parameters',
                    'marketplace.service.config',
                ],
            ],
        ],
        'api' => [
            'marketplace.api.connection' => [
                'class'     => Mautic\\MarketplaceBundle\\Api\\Connection::class,
                'arguments' => [
                    'mautic.http.client',
                    'monolog.logger.mautic',
                ],
            ],
        ],
        'other' => [
            'marketplace.service.plugin_collector' => [
                'class'     => Mautic\\MarketplaceBundle\\Service\\PluginCollector::class,
                'arguments' => [
                    'marketplace.api.connection',
                    'marketplace.service.allowlist',
                ],
            ],
            'marketplace.service.route_provider' => [
                'class'     => RouteProvider::class,
                'arguments' => ['router'],
            ],
            'marketplace.service.config' => [
                'class'     => Config::class,
                'arguments' => [
                    'mautic.helper.core_parameters',
                ],
            ],
            'marketplace.service.allowlist' => [
                'class'     => Mautic\\MarketplaceBundle\\Service\\Allowlist::class,
                'arguments' => [
                    'marketplace.service.config',
                    'mautic.cache.provider',
                    'mautic.http.client',
                ],
            ],
        ],
    ],
    // NOTE: when adding new parameters here, please add them to the developer documentation as well:
    'parameters' => [
        Config::MARKETPLACE_ENABLED                     => true,
        Config::MARKETPLACE_ALLOWLIST_URL               => 'https://raw.githubusercontent.com/mautic/marketplace-allowlist/main/allowlist.json',
        Config::MARKETPLACE_ALLOWLIST_CACHE_TTL_SECONDS => 3600,
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
        return "@bundles/MarketplaceBundle/Config/config.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Config/config.php", "/app/docroot/app/bundles/MarketplaceBundle/Config/config.php");
    }
}
