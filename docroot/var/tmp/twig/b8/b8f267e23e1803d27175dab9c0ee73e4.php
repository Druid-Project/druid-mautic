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

/* @bundles/PointBundle/Controller/Api/PointApiController.php */
class __TwigTemplate_53cc95cdc0b3b66a72e1021b2ec80232 extends Template
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

namespace Mautic\\PointBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Controller\\LeadAccessTrait;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PointBundle\\Entity\\Point;
use Mautic\\PointBundle\\Model\\PointModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Point>
 */
class PointApiController extends CommonApiController
{
    use LeadAccessTrait;

    protected LeadModel \$leadModel;

    /**
     * @var PointModel|null
     */
    protected \$model;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$leadModel = \$modelFactory->getModel('lead');
        \\assert(\$leadModel instanceof LeadModel);

        \$pointModel = \$modelFactory->getModel('point');
        \\assert(\$pointModel instanceof PointModel);

        \$this->model            = \$pointModel;
        \$this->leadModel        = \$leadModel;
        \$this->entityClass      = Point::class;
        \$this->entityNameOne    = 'point';
        \$this->entityNameMulti  = 'points';
        \$this->serializerGroups = ['pointDetails', 'categoryList', 'publishDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Return array of available point action types.
     */
    public function getPointActionTypesAction()
    {
        if (!\$this->security->isGranted([\$this->permissionBase.':view', \$this->permissionBase.':viewown'])) {
            return \$this->accessDenied();
        }

        \$actionTypes = \$this->model->getPointActions();
        \$view        = \$this->view(['pointActionTypes' => \$actionTypes['list']]);

        return \$this->handleView(\$view);
    }

    /**
     * Subtract points from a lead.
     *
     * @param int    \$leadId
     * @param string \$operator
     * @param int    \$delta
     *
     * @return Response
     */
    public function adjustPointsAction(Request \$request, IpLookupHelper \$ipLookupHelper, \$leadId, \$operator, \$delta)
    {
        \$lead = \$this->checkLeadAccess(\$leadId, 'edit');
        if (\$lead instanceof Response) {
            return \$lead;
        }

        try {
            \$this->logApiPointChange(\$request, \$ipLookupHelper, \$lead, \$delta, \$operator);
        } catch (\\Exception \$e) {
            return \$this->returnError(\$e->getMessage(), Response::HTTP_BAD_REQUEST);
        }

        return \$this->handleView(\$this->view(['success' => 1], Response::HTTP_OK));
    }

    /**
     * Log the lead points change.
     *
     * @param int \$delta
     */
    protected function logApiPointChange(Request \$request, IpLookupHelper \$ipLookupHelper, \$lead, \$delta, \$operator)
    {
        \$trans      = \$this->translator;
        \$ip         = \$ipLookupHelper->getIpAddress();
        \$eventName  = InputHelper::clean(\$request->request->get('eventName', \$trans->trans('mautic.lead.lead.submitaction.operator_'.\$operator)));
        \$actionName = InputHelper::clean(\$request->request->get('actionName', \$trans->trans('mautic.lead.event.api')));

        \$lead->adjustPoints(\$delta, \$operator);
        \$lead->addPointsChangeLogEntry('API', \$eventName, \$actionName, \$delta, \$ip);
        \$this->leadModel->saveEntity(\$lead, false);
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
        return "@bundles/PointBundle/Controller/Api/PointApiController.php";
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
        return new Source("", "@bundles/PointBundle/Controller/Api/PointApiController.php", "/app/docroot/app/bundles/PointBundle/Controller/Api/PointApiController.php");
    }
}
