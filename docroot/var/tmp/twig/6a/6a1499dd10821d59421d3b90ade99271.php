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

/* @bundles/LeadBundle/Controller/Api/CompanyApiController.php */
class __TwigTemplate_8fe4c2a49c2e69840c21d0ba93820f2a extends Template
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

namespace Mautic\\LeadBundle\\Controller\\Api;

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
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Helper\\IdentifyCompanyHelper;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Company>
 */
class CompanyApiController extends CommonApiController
{
    use CustomFieldsApiControllerTrait;
    use LeadAccessTrait;

    /**
     * @var CompanyModel|null
     */
    protected \$model;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$companyModel = \$modelFactory->getModel('lead.company');
        \\assert(\$companyModel instanceof CompanyModel);

        \$this->model              = \$companyModel;
        \$this->entityClass        = Company::class;
        \$this->entityNameOne      = 'company';
        \$this->entityNameMulti    = 'companies';
        \$this->serializerGroups[] = 'companyDetails';

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * If an existing company is matched, it'll be merged. Otherwise it'll be created.
     *
     * @return Response
     */
    public function newEntityAction(Request \$request)
    {
        // Check for an email to see if the lead already exists
        \$parameters = \$request->request->all();

        if (empty(\$parameters['force'])) {
            \$leadCompanyModel = \$this->getModel('lead.company');
            \\assert(\$leadCompanyModel instanceof CompanyModel);
            [\$company, \$companyEntities] = IdentifyCompanyHelper::findCompany(\$parameters, \$leadCompanyModel);

            if (count(\$companyEntities)) {
                return \$this->editEntityAction(\$request, \$company['id']);
            }
        }

        return parent::newEntityAction(\$request);
    }

    /**
     * @param Lead   &\$entity
     * @param string \$action
     */
    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        \$this->setCustomFieldValues(\$entity, \$form, \$parameters);
    }

    /**
     * Adds a contact to a company.
     *
     * @param int \$companyId Company ID
     * @param int \$contactId Contact ID
     *
     * @return Response
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function addContactAction(\$companyId, \$contactId)
    {
        \$company = \$this->model->getEntity(\$companyId);
        \$view    = \$this->view(['success' => 1], Response::HTTP_OK);

        if (null === \$company) {
            return \$this->notFound();
        }

        \$contact = \$this->checkLeadAccess(\$contactId, 'edit');
        if (\$contact instanceof Response) {
            return \$contact;
        }

        \$this->model->addLeadToCompany(\$company, \$contact);

        return \$this->handleView(\$view);
    }

    /**
     * Removes given contact from a company.
     *
     * @param int \$companyId List ID
     * @param int \$contactId Lead ID
     *
     * @return Response
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function removeContactAction(\$companyId, \$contactId)
    {
        \$company = \$this->model->getEntity(\$companyId);
        \$view    = \$this->view(['success' => 1], Response::HTTP_OK);

        if (null === \$company) {
            return \$this->notFound();
        }

        \$contactModel = \$this->getModel('lead');
        \$contact      = \$contactModel->getEntity(\$contactId);

        // Does the contact exist and the user has permission to edit
        if (null === \$contact) {
            return \$this->notFound();
        } elseif (!\$this->security->hasEntityAccess('lead:leads:editown', 'lead:leads:editother', \$contact->getPermissionUser())) {
            return \$this->accessDenied();
        }

        \$this->model->removeLeadFromCompany(\$company, \$contact);

        return \$this->handleView(\$view);
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
        return "@bundles/LeadBundle/Controller/Api/CompanyApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/CompanyApiController.php", "/app/docroot/app/bundles/LeadBundle/Controller/Api/CompanyApiController.php");
    }
}
