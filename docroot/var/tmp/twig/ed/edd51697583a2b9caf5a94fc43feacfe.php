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

/* @bundles/PageBundle/Controller/Api/PageApiController.php */
class __TwigTemplate_a6e4c6953b146262b6eb5557352a8d8c extends Template
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

namespace Mautic\\PageBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Page>
 */
class PageApiController extends CommonApiController
{
    /**
     * @var PageModel|null
     */
    protected \$model;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$pageModel = \$modelFactory->getModel('page');
        \\assert(\$pageModel instanceof PageModel);

        \$this->model            = \$pageModel;
        \$this->entityClass      = Page::class;
        \$this->entityNameOne    = 'page';
        \$this->entityNameMulti  = 'pages';
        \$this->serializerGroups = ['pageDetails', 'categoryList', 'publishDetails'];
        \$this->dataInputMasks   = ['customHtml' => 'html'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Obtains a list of pages.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */
    public function getEntitiesAction(Request \$request, UserHelper \$userHelper)
    {
        // get parent level only
        \$this->listFilters[] = [
            'column' => 'p.variantParent',
            'expr'   => 'isNull',
        ];

        \$this->listFilters[] = [
            'column' => 'p.translationParent',
            'expr'   => 'isNull',
        ];

        return parent::getEntitiesAction(\$request, \$userHelper);
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
        return "@bundles/PageBundle/Controller/Api/PageApiController.php";
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
        return new Source("", "@bundles/PageBundle/Controller/Api/PageApiController.php", "/app/docroot/app/bundles/PageBundle/Controller/Api/PageApiController.php");
    }
}
