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

/* @bundles/ChannelBundle/Controller/BatchContactController.php */
class __TwigTemplate_d5227a9acfc1d283ead3ad1facdf2476 extends Template
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

namespace Mautic\\ChannelBundle\\Controller;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ChannelBundle\\Model\\ChannelActionModel;
use Mautic\\ChannelBundle\\Model\\FrequencyActionModel;
use Mautic\\CoreBundle\\Controller\\AbstractFormController;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Form\\Type\\ContactChannelsType;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class BatchContactController extends AbstractFormController
{
    public function __construct(
        private ChannelActionModel \$channelActionModel,
        private FrequencyActionModel \$frequencyActionModel,
        private LeadModel \$contactModel,
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
     * Execute the batch action.
     */
    public function setAction(Request \$request): JsonResponse
    {
        \$params = \$request->get('contact_channels', []);
        \$ids    = empty(\$params['ids']) ? [] : json_decode(\$params['ids']);

        if (\$ids && is_array(\$ids)) {
            \$subscribedChannels = \$params['subscribed_channels'] ?? [];
            \$preferredChannel   = \$params['preferred_channel'] ?? null;

            \$this->channelActionModel->update(\$ids, \$subscribedChannels);
            \$this->frequencyActionModel->update(\$ids, \$params, \$preferredChannel);

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
     * View for batch action.
     */
    public function indexAction(): \\Symfony\\Component\\HttpFoundation\\Response
    {
        \$route = \$this->generateUrl('mautic_channel_batch_contact_set');

        return \$this->delegateView([
            'viewParameters' => [
                'form'         => \$this->createForm(ContactChannelsType::class, [], [
                    'action'        => \$route,
                    'channels'      => \$this->contactModel->getPreferenceChannels(),
                    'public_view'   => false,
                    'save_button'   => true,
                ])->createView(),
            ],
            'contentTemplate' => '@MauticLead/Batch/channel.html.twig',
            'passthroughVars' => [
                'activeLink'    => '#mautic_contact_index',
                'mauticContent' => 'leadBatch',
                'route'         => \$route,
            ],
        ]);
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
        return "@bundles/ChannelBundle/Controller/BatchContactController.php";
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
        return new Source("", "@bundles/ChannelBundle/Controller/BatchContactController.php", "/app/docroot/app/bundles/ChannelBundle/Controller/BatchContactController.php");
    }
}
