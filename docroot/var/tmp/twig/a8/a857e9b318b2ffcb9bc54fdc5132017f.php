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

/* @bundles/LeadBundle/Controller/Api/DeviceApiController.php */
class __TwigTemplate_ec9150c559875c472425b5daf8852c81 extends Template
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
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Mautic\\LeadBundle\\Model\\DeviceModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<LeadDevice>
 */
class DeviceApiController extends CommonApiController
{
    use LeadAccessTrait;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$leadDeviceModel = \$modelFactory->getModel('lead.device');
        \\assert(\$leadDeviceModel instanceof DeviceModel);

        \$this->model           = \$leadDeviceModel;
        \$this->entityClass     = LeadDevice::class;
        \$this->entityNameOne   = 'device';
        \$this->entityNameMulti = 'devices';

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * @param LeadDevice &\$entity
     * @param string     \$action
     */
    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        \$lead = null;
        if (!empty(\$parameters['lead'])) {
            \$lead = \$parameters['lead'];
        } elseif (!empty(\$parameters['contact'])) {
            \$lead = \$parameters['contact'];
        }
        if (\$lead) {
            \$lead = \$this->checkLeadAccess(\$lead, \$action);

            if (\$lead instanceof Response) {
                return \$lead;
            }

            \$entity->setLead(\$lead);
            unset(\$parameters['lead'], \$parameters['contact']);
        } elseif ('new' === \$action) {
            return \$this->returnError('contact ID is mandatory', Response::HTTP_BAD_REQUEST);
        }
    }

    protected function checkEntityAccess(\$entity, \$action = 'view')
    {
        return parent::checkEntityAccess(\$entity->getLead(), \$action);
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
        return "@bundles/LeadBundle/Controller/Api/DeviceApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/DeviceApiController.php", "/app/docroot/app/bundles/LeadBundle/Controller/Api/DeviceApiController.php");
    }
}
