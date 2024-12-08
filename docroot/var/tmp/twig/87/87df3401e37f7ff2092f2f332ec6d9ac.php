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

/* @bundles/LeadBundle/Controller/Api/FieldApiController.php */
class __TwigTemplate_1d44a8438e33a6536c5b3f31e4738f04 extends Template
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
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<LeadField>
 */
class FieldApiController extends CommonApiController
{
    /**
     * Can have value of 'contact' or 'company'.
     *
     * @var string
     */
    protected \$fieldObject;

    /**
     * @var FieldModel|null
     */
    protected \$model;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$fieldModel = \$modelFactory->getModel('lead.field');
        \\assert(\$fieldModel instanceof FieldModel);
        \$request = \$requestStack->getCurrentRequest();
        \\assert(null !== \$request);

        \$this->model           = \$fieldModel;
        \$this->fieldObject     = \$request->get('object');
        \$this->entityClass     = LeadField::class;
        \$this->entityNameOne   = 'field';
        \$this->entityNameMulti = 'fields';
        \$this->routeParams     = ['object' => \$this->fieldObject];

        if ('contact' === \$this->fieldObject) {
            \$this->fieldObject = 'lead';
        }

        \$repo                = \$this->model->getRepository();
        \$tableAlias          = \$repo->getTableAlias();
        \$this->listFilters[] = [
            'column' => \$tableAlias.'.object',
            'expr'   => 'eq',
            'value'  => \$this->fieldObject,
        ];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    protected function saveEntity(\$entity, int \$statusCode): int
    {
        try {
            return parent::saveEntity(\$entity, \$statusCode);
        } catch (AbortColumnCreateException) {
            // Field has been queued
            return Response::HTTP_ACCEPTED;
        } catch (AbortColumnUpdateException) {
            // Field has been queued
            return Response::HTTP_OK;
        }
    }

    /**
     * Sanitizes and returns an array of where statements from the request.
     *
     * @return array
     */
    protected function getWhereFromRequest(Request \$request)
    {
        \$where = parent::getWhereFromRequest(\$request);

        \$where[] = [
            'col'  => 'object',
            'expr' => 'eq',
            'val'  => \$this->fieldObject,
        ];

        return \$where;
    }

    /**
     * @return mixed|void
     */
    protected function prepareParametersForBinding(Request \$request, \$parameters, \$entity, \$action)
    {
        \$parameters['object'] = \$this->fieldObject;
        // Workaround for mispelled isUniqueIdentifer.
        if (isset(\$parameters['isUniqueIdentifier'])) {
            \$parameters['isUniqueIdentifer'] = \$parameters['isUniqueIdentifier'];
        }

        return \$parameters;
    }

    /**
     * @param LeadField &\$entity
     * @param string    \$action
     */
    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        if (isset(\$parameters['properties'])) {
            \$result = \$this->model->setFieldProperties(\$entity, \$parameters['properties']);

            if (true !== \$result) {
                return \$this->returnError(\$this->translator->trans(\$result, [], 'validators'), Response::HTTP_BAD_REQUEST);
            }
        }
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
        return "@bundles/LeadBundle/Controller/Api/FieldApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/FieldApiController.php", "/app/docroot/app/bundles/LeadBundle/Controller/Api/FieldApiController.php");
    }
}
