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

/* @bundles/LeadBundle/Controller/BatchSegmentController.php */
class __TwigTemplate_5cbfb277ee6e3f48b655e2ec05abef74 extends Template
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

namespace Mautic\\LeadBundle\\Controller;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\CoreBundle\\Controller\\AbstractFormController;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Form\\Type\\BatchType;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Model\\SegmentActionModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class BatchSegmentController extends AbstractFormController
{
    public function __construct(
        private SegmentActionModel \$segmentActionModel,
        private ListModel \$segmentModel,
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
     * API for batch action.
     */
    public function setAction(Request \$request): JsonResponse
    {
        \$params     = \$request->get('lead_batch', []);
        \$contactIds = empty(\$params['ids']) ? [] : json_decode(\$params['ids']);

        if (\$contactIds && is_array(\$contactIds)) {
            \$segmentsToAdd    = \$params['add'] ?? [];
            \$segmentsToRemove = \$params['remove'] ?? [];

            if (\$segmentsToAdd) {
                \$this->segmentActionModel->addContacts(\$contactIds, \$segmentsToAdd);
            }

            if (\$segmentsToRemove) {
                \$this->segmentActionModel->removeContacts(\$contactIds, \$segmentsToRemove);
            }

            \$this->addFlashMessage('mautic.lead.batch_leads_affected', [
                '%count%' => count(\$contactIds),
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
     * View for batch action.
     */
    public function indexAction(): \\Symfony\\Component\\HttpFoundation\\Response
    {
        \$route = \$this->generateUrl('mautic_segment_batch_contact_set');
        \$lists = \$this->segmentModel->getUserLists();
        \$items = [];

        foreach (\$lists as \$list) {
            \$items[\$list['name']] = \$list['id'];
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
        return "@bundles/LeadBundle/Controller/BatchSegmentController.php";
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
        return new Source("", "@bundles/LeadBundle/Controller/BatchSegmentController.php", "/app/docroot/app/bundles/LeadBundle/Controller/BatchSegmentController.php");
    }
}