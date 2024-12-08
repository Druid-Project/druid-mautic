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

/* @bundles/AssetBundle/Controller/Api/AssetApiController.php */
class __TwigTemplate_abe386ddfc4b498656327cfe1ba08b14 extends Template
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

namespace Mautic\\AssetBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\AssetBundle\\Entity\\Asset;
use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Asset>
 */
class AssetApiController extends CommonApiController
{
    /**
     * @var AssetModel|null
     */
    protected \$model;

    public function __construct(
        CorePermissions \$security,
        Translator \$translator,
        EntityResultHelper \$entityResultHelper,
        RouterInterface \$router,
        FormFactoryInterface \$formFactory,
        AppVersion \$appVersion,
        RequestStack \$requestStack,
        private CoreParametersHelper \$parametersHelper,
        ManagerRegistry \$doctrine,
        ModelFactory \$modelFactory,
        EventDispatcherInterface \$dispatcher,
        CoreParametersHelper \$coreParametersHelper,
        MauticFactory \$factory
    ) {
        \$assetModel = \$modelFactory->getModel('asset');
        \\assert(\$assetModel instanceof AssetModel);

        \$this->model            = \$assetModel;
        \$this->entityClass      = Asset::class;
        \$this->entityNameOne    = 'asset';
        \$this->entityNameMulti  = 'assets';
        \$this->serializerGroups = ['assetDetails', 'categoryList', 'publishDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Gives child controllers opportunity to analyze and do whatever to an entity before going through serializer.
     */
    protected function preSerializeEntity(object \$entity, string \$action = 'view'): void
    {
        \$entity->setDownloadUrl(
            \$this->model->generateUrl(\$entity, true)
        );
    }

    /**
     * Convert posted parameters into what the form needs in order to successfully bind.
     *
     * @return mixed
     */
    protected function prepareParametersForBinding(Request \$request, \$parameters, \$entity, \$action)
    {
        \$assetDir = \$this->parametersHelper->get('upload_dir');
        \$entity->setUploadDir(\$assetDir);

        if (isset(\$parameters['file'])) {
            if ('local' === \$parameters['storageLocation']) {
                \$entity->setPath(\$parameters['file']);
                \$entity->setFileInfoFromFile();

                if (null === \$entity->loadFile()) {
                    return \$this->returnError('File '.\$parameters['file'].' was not found in the asset directory.', Response::HTTP_BAD_REQUEST);
                }
            } elseif ('remote' === \$parameters['storageLocation']) {
                \$parameters['remotePath'] = \$parameters['file'];
                \$entity->setTitle(\$parameters['title']);
                \$entity->setStorageLocation('remote');
                \$entity->setRemotePath(\$parameters['remotePath']);
                \$entity->preUpload();
                \$entity->upload();
            }

            unset(\$parameters['file']);
        } elseif ('new' === \$action) {
            return \$this->returnError('File of the asset is required.', Response::HTTP_BAD_REQUEST);
        }

        return \$parameters;
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
        return "@bundles/AssetBundle/Controller/Api/AssetApiController.php";
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
        return new Source("", "@bundles/AssetBundle/Controller/Api/AssetApiController.php", "/app/docroot/app/bundles/AssetBundle/Controller/Api/AssetApiController.php");
    }
}
