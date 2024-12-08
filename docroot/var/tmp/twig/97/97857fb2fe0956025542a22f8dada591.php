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

/* @bundles/StageBundle/Controller/Api/StageApiController.php */
class __TwigTemplate_3ac377690d49af01a06eac39a5d41218 extends Template
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

namespace Mautic\\StageBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Controller\\LeadAccessTrait;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\StageBundle\\Entity\\Stage;
use Mautic\\StageBundle\\Model\\StageModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Stage>
 */
class StageApiController extends CommonApiController
{
    use LeadAccessTrait;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$stageModel = \$modelFactory->getModel('stage');
        \\assert(\$stageModel instanceof StageModel);

        \$this->model            = \$stageModel;
        \$this->entityClass      = Stage::class;
        \$this->entityNameOne    = 'stage';
        \$this->entityNameMulti  = 'stages';
        \$this->serializerGroups = ['stageDetails', 'categoryList', 'publishDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Adds a contact to a list.
     *
     * @param int \$id        Stage ID
     * @param int \$contactId Lead ID
     *
     * @return Response
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function addContactAction(\$id, \$contactId)
    {
        \$stage = \$this->model->getEntity(\$id);

        if (null === \$stage) {
            return \$this->notFound();
        }

        \$contact = \$this->checkLeadAccess(\$contactId, 'edit');

        if (\$contact instanceof Response) {
            return \$contact;
        }

        if (!\$this->security->isGranted('stage:stages:view')) {
            return \$this->accessDenied();
        }

        \$leadModel = \$this->getModel('lead');
        \\assert(\$leadModel instanceof LeadModel);
        \$leadModel->addToStages(\$contact, \$stage)->saveEntity(\$contact);

        return \$this->handleView(\$this->view(['success' => 1], Response::HTTP_OK));
    }

    /**
     * Removes given contact from a list.
     *
     * @param int \$id        Stage ID
     * @param int \$contactId Lead ID
     *
     * @return Response
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function removeContactAction(\$id, \$contactId)
    {
        \$stage = \$this->model->getEntity(\$id);

        if (null === \$stage) {
            return \$this->notFound();
        }

        \$contact = \$this->checkLeadAccess(\$contactId, 'edit');

        if (\$contact instanceof Response) {
            return \$contact;
        }

        if (!\$this->security->isGranted('stage:stages:view')) {
            return \$this->accessDenied();
        }

        \$leadModel = \$this->getModel('lead');
        \\assert(\$leadModel instanceof LeadModel);
        \$leadModel->removeFromStages(\$contact, \$stage)->saveEntity(\$contact);

        return \$this->handleView(\$this->view(['success' => 1], Response::HTTP_OK));
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
        return "@bundles/StageBundle/Controller/Api/StageApiController.php";
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
        return new Source("", "@bundles/StageBundle/Controller/Api/StageApiController.php", "/app/docroot/app/bundles/StageBundle/Controller/Api/StageApiController.php");
    }
}
