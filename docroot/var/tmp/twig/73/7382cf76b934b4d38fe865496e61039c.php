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

/* @bundles/CategoryBundle/Controller/BatchContactController.php */
class __TwigTemplate_b3a1a4246f121fee192de9b6f49a6339 extends Template
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

namespace Mautic\\CategoryBundle\\Controller;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\CategoryBundle\\Model\\ContactActionModel;
use Mautic\\CoreBundle\\Controller\\AbstractFormController;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Form\\Type\\BatchType;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class BatchContactController extends AbstractFormController
{
    public function __construct(
        private ContactActionModel \$actionModel,
        private CategoryModel \$categoryModel,
        ManagerRegistry \$doctrine,
        MauticFactory \$factory,
        ModelFactory \$modelFactory,
        UserHelper \$userHelper,
        CoreParametersHelper \$coreParametersHelper,
        EventDispatcherInterface \$dispatcher,
        Translator \$translator,
        FlashBag \$flashBag,
        RequestStack \$requestStack,
        CorePermissions \$security
    ) {
        parent::__construct(\$doctrine, \$factory, \$modelFactory, \$userHelper, \$coreParametersHelper, \$dispatcher, \$translator, \$flashBag, \$requestStack, \$security);
    }

    /**
     * Adds or removes categories to multiple contacts defined by contact ID.
     */
    public function execAction(Request \$request): JsonResponse
    {
        \$params = \$request->get('lead_batch');
        \$ids    = empty(\$params['ids']) ? [] : json_decode(\$params['ids']);

        if (\$ids && is_array(\$ids)) {
            \$categoriesToAdd    = \$params['add'] ?? [];
            \$categoriesToRemove = \$params['remove'] ?? [];
            \$contactIds         = json_decode(\$params['ids']);

            \$this->actionModel->addContactsToCategories(\$contactIds, \$categoriesToAdd);
            \$this->actionModel->removeContactsFromCategories(\$contactIds, \$categoriesToRemove);

            \$this->addFlashMessage('mautic.lead.batch_leads_affected', [
                '%count%'     => count(\$ids),
            ]);
        } else {
            \$this->addFlashMessage('mautic.core.error.ids.missing');
        }

        return new JsonResponse([
            'closeModal' => true,
            'flashes'    => \$this->getFlashContent(),
        ]);
    }

    /**
     * View the modal form for adding contacts into categories in batches.
     */
    public function indexAction(): \\Symfony\\Component\\HttpFoundation\\Response
    {
        \$route = \$this->generateUrl('mautic_category_batch_contact_set');
        \$rows  = \$this->categoryModel->getLookupResults('global', '', 300);
        \$items = [];

        foreach (\$rows as \$category) {
            \$items[\$category['title']] = \$category['id'];
        }

        return \$this->delegateView(
            [
                'viewParameters' => [
                    'form' => \$this->createForm(
                        BatchType::class,
                        [],
                        [
                            'items'  => \$items,
                            'action' => \$route,
                        ]
                    )->createView(),
                ],
                'contentTemplate' => '@MauticLead/Batch/form.html.twig',
                'passthroughVars' => [
                    'activeLink'    => '#mautic_contact_index',
                    'mauticContent' => 'leadBatch',
                    'route'         => \$route,
                ],
            ]
        );
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
        return "@bundles/CategoryBundle/Controller/BatchContactController.php";
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
        return new Source("", "@bundles/CategoryBundle/Controller/BatchContactController.php", "/app/docroot/app/bundles/CategoryBundle/Controller/BatchContactController.php");
    }
}
