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

/* @bundles/ReportBundle/Controller/Api/ReportApiController.php */
class __TwigTemplate_ec22855d50eb8bc42c815ed02877aed9 extends Template
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

namespace Mautic\\ReportBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Report>
 */
class ReportApiController extends CommonApiController
{
    /**
     * @var ReportModel|null
     */
    protected \$model;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$reportModel = \$modelFactory->getModel('report');
        \\assert(\$reportModel instanceof ReportModel);

        \$this->model            = \$reportModel;
        \$this->entityClass      = Report::class;
        \$this->entityNameOne    = 'report';
        \$this->entityNameMulti  = 'reports';
        \$this->serializerGroups = ['reportList', 'reportDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Obtains a compiled report.
     *
     * @param int \$id Report ID
     *
     * @return Response
     */
    public function getEntityAction(Request \$request, \$id)
    {
        \$entity = \$this->model->getEntity(\$id);

        if (!\$entity instanceof \$this->entityClass) {
            return \$this->notFound();
        }

        \$reportData = \$this->model->getReportData(\$entity, \$this->formFactory, \$this->getOptionsFromRequest(\$request));

        // Unset keys that we don't need to send back
        foreach (['graphs', 'contentTemplate', 'columns'] as \$key) {
            unset(\$reportData[\$key]);
        }

        // Include report metadata
        \$reportData[\$this->entityNameOne] = \$entity;

        return \$this->handleView(
            \$this->view(\$reportData, Response::HTTP_OK)
        );
    }

    public function getReportAction(Request \$request, int \$id): Response
    {
        return \$this->getEntityAction(\$request, \$id);
    }

    /**
     * This method is careful to add new options from the request to keep BC.
     * It originally loaded all rows without any filter or pagination applied.
     */
    private function getOptionsFromRequest(Request \$request): array
    {
        \$options = ['paginate'=> false, 'ignoreGraphData' => true];

        if (\$request->query->has('dateFrom')) {
            \$options['dateFrom'] = new \\DateTimeImmutable(\$request->query->get('dateFrom'), new \\DateTimeZone('UTC'));
        }

        if (\$request->query->has('dateTo')) {
            \$options['dateTo']   = new \\DateTimeImmutable(\$request->query->get('dateTo'), new \\DateTimeZone('UTC'));
        }

        if (\$request->query->has('page')) {
            \$options['page']     = \$request->query->getInt('page');
            \$options['paginate'] = true;
        }

        if (\$request->query->has('limit')) {
            \$options['limit']    = \$request->query->getInt('limit');
            \$options['paginate'] = true;
        }

        return \$options;
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
        return "@bundles/ReportBundle/Controller/Api/ReportApiController.php";
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
        return new Source("", "@bundles/ReportBundle/Controller/Api/ReportApiController.php", "/app/docroot/app/bundles/ReportBundle/Controller/Api/ReportApiController.php");
    }
}
