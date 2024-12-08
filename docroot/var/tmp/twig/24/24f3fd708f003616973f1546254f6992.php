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

/* @bundles/WebhookBundle/Controller/Api/WebhookApiController.php */
class __TwigTemplate_ecf68e33f2e92252622c7dc973d335bd extends Template
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

namespace Mautic\\WebhookBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Webhook>
 */
class WebhookApiController extends CommonApiController
{
    /**
     * @var WebhookModel|null
     */
    protected \$model;

    public function __construct(
        CorePermissions \$security,
        Translator \$translator,
        EntityResultHelper \$entityResultHelper,
        RouterInterface \$router,
        FormFactoryInterface \$formFactory,
        AppVersion \$appVersion,
        private RequestStack \$requestStack,
        ManagerRegistry \$doctrine,
        ModelFactory \$modelFactory,
        EventDispatcherInterface \$dispatcher,
        CoreParametersHelper \$coreParametersHelper,
        MauticFactory \$factory
    ) {
        \$webhookModel = \$modelFactory->getModel('webhook');
        \\assert(\$webhookModel instanceof WebhookModel);

        \$this->model            = \$webhookModel;
        \$this->entityClass      = Webhook::class;
        \$this->entityNameOne    = 'hook';
        \$this->entityNameMulti  = 'hooks';
        \$this->serializerGroups = ['hookDetails', 'categoryList', 'publishDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * Gives child controllers opportunity to analyze and do whatever to an entity before going through serializer.
     */
    protected function preSerializeEntity(object \$entity, string \$action = 'view'): void
    {
        // We have to use this hack to have a simple array instead of the one the serializer gives us
        \$entity->buildTriggers();
    }

    protected function preSaveEntity(&\$entity, \$form, \$parameters, \$action = 'edit')
    {
        \$eventsToKeep = [];

        // Build webhook events from the triggers
        if (isset(\$parameters['triggers']) && is_array(\$parameters['triggers'])) {
            \$entity->setTriggers(\$parameters['triggers']);
            \$eventsToKeep = \$parameters['triggers'];
        }

        // Remove events missing in the PUT request
        if ('PUT' === \$this->requestStack->getCurrentRequest()->getMethod()) {
            foreach (\$entity->getEvents() as \$event) {
                if (!in_array(\$event->getEventType(), \$eventsToKeep)) {
                    \$entity->removeEvent(\$event);
                }
            }
        }
    }

    public function getTriggersAction()
    {
        return \$this->handleView(
            \$this->view(
                [
                    'triggers' => \$this->model->getEvents(),
                ]
            )
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
        return "@bundles/WebhookBundle/Controller/Api/WebhookApiController.php";
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
        return new Source("", "@bundles/WebhookBundle/Controller/Api/WebhookApiController.php", "/app/docroot/app/bundles/WebhookBundle/Controller/Api/WebhookApiController.php");
    }
}
