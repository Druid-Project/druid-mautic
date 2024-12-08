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

/* @bundles/LeadBundle/Controller/Api/NoteApiController.php */
class __TwigTemplate_3054182384ffd9dec84e146dce570623 extends Template
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
use Mautic\\LeadBundle\\Entity\\LeadNote;
use Mautic\\LeadBundle\\Model\\NoteModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<LeadNote>
 */
class NoteApiController extends CommonApiController
{
    use LeadAccessTrait;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$leadNoteModel = \$modelFactory->getModel('lead.note');
        \\assert(\$leadNoteModel instanceof NoteModel);

        \$this->model            = \$leadNoteModel;
        \$this->entityClass      = LeadNote::class;
        \$this->entityNameOne    = 'note';
        \$this->entityNameMulti  = 'notes';
        \$this->serializerGroups = ['leadNoteDetails', 'leadList'];

        // When a user passes in a note like \"This is <strong>text</strong>\", this will
        // keep the HTML that was passed in.
        \$this->dataInputMasks = ['text' => 'html'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * @param \\Mautic\\LeadBundle\\Entity\\Lead &\$entity
     * @param string                         \$action
     */
    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        if (!empty(\$parameters['lead'])) {
            \$lead = \$this->checkLeadAccess(\$parameters['lead'], \$action);

            if (\$lead instanceof Response) {
                return \$lead;
            }

            \$entity->setLead(\$lead);
            unset(\$parameters['lead']);
        } elseif ('new' === \$action) {
            return \$this->returnError('lead ID is mandatory', Response::HTTP_BAD_REQUEST);
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
        return "@bundles/LeadBundle/Controller/Api/NoteApiController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/Api/NoteApiController.php", "/app/docroot/app/bundles/LeadBundle/Controller/Api/NoteApiController.php");
    }
}
