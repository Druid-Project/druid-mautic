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

/* @bundles/MarketplaceBundle/Controller/Package/ListController.php */
class __TwigTemplate_a9f46d61bec43bd7888bde71edc49536 extends Template
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

namespace Mautic\\MarketplaceBundle\\Controller\\Package;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Mautic\\MarketplaceBundle\\Service\\PluginCollector;
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;

class ListController extends CommonController
{
    public function __construct(
        private PluginCollector \$pluginCollector,
        private RouteProvider \$routeProvider,
        ManagerRegistry \$doctrine,
        private Config \$config,
        MauticFactory \$factory,
        ModelFactory \$modelFactory,
        UserHelper \$userHelper,
        CoreParametersHelper \$coreParametersHelper,
        EventDispatcherInterface \$dispatcher,
        Translator \$translator,
        FlashBag \$flashBag,
        RequestStack \$requestStack,
        CorePermissions \$security
    ) {
        parent::__construct(\$doctrine, \$factory, \$modelFactory, \$userHelper, \$coreParametersHelper, \$dispatcher, \$translator, \$flashBag, \$requestStack, \$security);
    }

    public function listAction(int \$page = 1): Response
    {
        if (!\$this->config->marketplaceIsEnabled()) {
            return \$this->notFound();
        }

        if (!\$this->security->isGranted(MarketplacePermissions::CAN_VIEW_PACKAGES)) {
            return \$this->accessDenied();
        }

        \$this->setListFilters();

        \$request = \$this->getCurrentRequest();
        \$search  = InputHelper::clean(\$request->get('search', ''));

        \$session = \$request->getSession();
        if (empty(\$page)) {
            \$page = \$session->get('mautic.marketplace.package.page', 1);
        }

        // set limits
        \$limit   = \$session->get('mautic.marketplace.package.limit', \$this->coreParametersHelper->get('default_pagelimit'));
        \$route   = \$this->routeProvider->buildListRoute(\$page);

        return \$this->delegateView(
            [
                'returnUrl'      => \$route,
                'viewParameters' => [
                    'searchValue'       => \$search,
                    'items'             => \$this->pluginCollector->collectPackages(\$page, \$limit, \$search),
                    'count'             => \$this->pluginCollector->getTotal(),
                    'page'              => \$page,
                    'limit'             => \$limit,
                    'tmpl'              => \$request->isXmlHttpRequest() ? \$request->get('tmpl', 'index') : 'index',
                    'isComposerEnabled' => \$this->config->isComposerEnabled(),
                ],
                'contentTemplate' => '@Marketplace/Package/list.html.twig',
                'passthroughVars' => [
                    'mauticContent' => 'package',
                    'route'         => \$route,
                ],
            ]
        );
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
        return "@bundles/MarketplaceBundle/Controller/Package/ListController.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Controller/Package/ListController.php", "/app/docroot/app/bundles/MarketplaceBundle/Controller/Package/ListController.php");
    }
}
