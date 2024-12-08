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

/* @bundles/NotificationBundle/Controller/Api/NotificationApiController.php */
class __TwigTemplate_b7baa6f2fab8a846197a3ba8f6196618 extends Template
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

namespace Mautic\\NotificationBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Mautic\\NotificationBundle\\Model\\NotificationModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Notification>
 */
class NotificationApiController extends CommonApiController
{
    public function __construct(
        CorePermissions \$security,
        Translator \$translator,
        EntityResultHelper \$entityResultHelper,
        RouterInterface \$router,
        FormFactoryInterface \$formFactory,
        AppVersion \$appVersion,
        protected ContactTracker \$contactTracker,
        RequestStack \$requestStack,
        ManagerRegistry \$doctrine,
        ModelFactory \$modelFactory,
        EventDispatcherInterface \$dispatcher,
        CoreParametersHelper \$coreParametersHelper,
        MauticFactory \$factory
    ) {
        \$notificationModel    = \$modelFactory->getModel('notification');
        \\assert(\$notificationModel instanceof NotificationModel);

        \$this->model           = \$notificationModel;
        \$this->entityClass     = Notification::class;
        \$this->entityNameOne   = 'notification';
        \$this->entityNameMulti = 'notifications';

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Receive Web Push subscription request.
     */
    public function subscribeAction(Request \$request): JsonResponse
    {
        \$osid = \$request->get('osid');
        if (\$osid) {
            /** @var \\Mautic\\LeadBundle\\Model\\LeadModel \$leadModel */
            \$leadModel = \$this->getModel('lead');

            if (\$currentLead = \$this->contactTracker->getContact()) {
                \$currentLead->addPushIDEntry(\$osid);
                \$leadModel->saveEntity(\$currentLead);
            }

            return new JsonResponse(['success' => true, 'osid' => \$osid], 200, ['Access-Control-Allow-Origin' => '*']);
        }

        return new JsonResponse(['success' => 'false'], 200, ['Access-Control-Allow-Origin' => '*']);
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
        return "@bundles/NotificationBundle/Controller/Api/NotificationApiController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/Api/NotificationApiController.php", "/app/docroot/app/bundles/NotificationBundle/Controller/Api/NotificationApiController.php");
    }
}
