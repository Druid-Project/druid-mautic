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

/* @bundles/MarketplaceBundle/Controller/Package/DetailController.php */
class __TwigTemplate_5f207cd57a517821358ef745ba53964e extends Template
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
use Mautic\\CoreBundle\\Helper\\ComposerHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\MarketplaceBundle\\Exception\\RecordNotFoundException;
use Mautic\\MarketplaceBundle\\Model\\PackageModel;
use Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;

class DetailController extends CommonController
{
    public function __construct(
        private PackageModel \$packageModel,
        private RouteProvider \$routeProvider,
        private Config \$config,
        private ComposerHelper \$composer,
        ManagerRegistry \$doctrine,
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

    public function viewAction(string \$vendor, string \$package): Response
    {
        if (!\$this->config->marketplaceIsEnabled()) {
            return \$this->notFound();
        }

        if (!\$this->security->isGranted(MarketplacePermissions::CAN_VIEW_PACKAGES)) {
            return \$this->accessDenied();
        }

        \$isInstalled = \$this->composer->isInstalled(\"{\$vendor}/{\$package}\");

        try {
            \$packageDetail = \$this->packageModel->getPackageDetail(\"{\$vendor}/{\$package}\");
        } catch (RecordNotFoundException \$e) {
            return \$this->notFound(\$e->getMessage());
        }

        \$security = \$this->security;

        return \$this->delegateView(
            [
                'returnUrl'      => \$this->routeProvider->buildListRoute(),
                'viewParameters' => [
                    'packageDetail'     => \$packageDetail,
                    'isInstalled'       => \$isInstalled,
                    'isComposerEnabled' => \$this->config->isComposerEnabled(),
                    'security'          => \$security,
                ],
                'contentTemplate' => '@Marketplace/Package/detail.html.twig',
                'passthroughVars' => [
                    'mauticContent' => 'package',
                    'activeLink'    => '#mautic_marketplace',
                    'route'         => \$this->routeProvider->buildDetailRoute(\$vendor, \$package),
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
        return "@bundles/MarketplaceBundle/Controller/Package/DetailController.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Controller/Package/DetailController.php", "/app/docroot/app/bundles/MarketplaceBundle/Controller/Package/DetailController.php");
    }
}
