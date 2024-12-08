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

/* @bundles/FormBundle/Controller/Api/SubmissionApiController.php */
class __TwigTemplate_1d1a0f9747d67a846a3210c578dc8cb4 extends Template
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

namespace Mautic\\FormBundle\\Controller\\Api;

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
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\Entity\\Submission;
use Mautic\\FormBundle\\Model\\SubmissionModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Submission>
 */
class SubmissionApiController extends CommonApiController
{
    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$formSubmissionModel = \$modelFactory->getModel('form.submission');
        \\assert(\$formSubmissionModel instanceof SubmissionModel);

        \$this->model            = \$formSubmissionModel;
        \$this->entityClass      = Submission::class;
        \$this->entityNameOne    = 'submission';
        \$this->entityNameMulti  = 'submissions';
        \$this->permissionBase   = 'form:forms';
        \$this->serializerGroups = ['submissionDetails', 'formList', 'ipAddressList', 'leadBasicList', 'pageList'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Obtains a list of entities as defined by the API URL.
     *
     * @param int \$formId
     *
     * @return Response
     */
    public function getEntitiesAction(Request \$request, UserHelper \$userHelper, \$formId = null)
    {
        \$form = \$this->getFormOrResponseWithError(\$formId);

        if (\$form instanceof Response) {
            return \$form;
        }

        \$this->extraGetEntitiesArguments = array_merge(
            \$this->extraGetEntitiesArguments,
            [
                'form'            => \$form,
                'flatten_results' => true,
                'return_entities' => true,
            ]
        );

        return parent::getEntitiesAction(\$request, \$userHelper);
    }

    /**
     * Obtains a list of entities for specific form and contact.
     *
     * @param int \$formId
     * @param int \$contactId
     *
     * @return Response
     */
    public function getEntitiesForContactAction(Request \$request, UserHelper \$userHelper, \$formId, \$contactId)
    {
        \$filter = [
            'filter' => [
                'where' => [
                    [
                        'col'  => 's.lead_id',
                        'expr' => 'eq',
                        'val'  => (int) \$contactId,
                    ],
                ],
            ],
        ];

        \$this->extraGetEntitiesArguments = array_merge(\$this->extraGetEntitiesArguments, \$filter);

        return \$this->getEntitiesAction(\$request, \$userHelper, \$formId);
    }

    /**
     * Obtains a specific entity as defined by the API URL.
     *
     * @return Response
     */
    public function getEntityAction(Request \$request, \$formId = null, \$submissionId = null)
    {
        \$form = \$this->getFormOrResponseWithError(\$formId);

        if (\$form instanceof Response) {
            return \$form;
        }

        return parent::getEntityAction(\$request, \$submissionId);
    }

    /**
     * Tries to fetch the form and returns Response if
     * - Form not found
     * - User doesn't have permission to view it.
     *
     * Returns Form on success
     *
     * @param int \$formId
     *
     * @return Response|Form
     */
    protected function getFormOrResponseWithError(\$formId)
    {
        \$formModel = \$this->getModel('form');
        \$form      = \$formModel->getEntity(\$formId);

        if (!\$form) {
            return \$this->notFound();
        }

        if (!\$this->checkEntityAccess(\$form)) {
            return \$this->accessDenied();
        }

        return \$form;
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
        return "@bundles/FormBundle/Controller/Api/SubmissionApiController.php";
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
        return new Source("", "@bundles/FormBundle/Controller/Api/SubmissionApiController.php", "/app/docroot/app/bundles/FormBundle/Controller/Api/SubmissionApiController.php");
    }
}
