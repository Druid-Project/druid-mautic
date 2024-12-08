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

/* @bundles/WebhookBundle/Controller/WebhookController.php */
class __TwigTemplate_9dfe79db0d1f3b321d28704e841d5834 extends Template
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

namespace Mautic\\WebhookBundle\\Controller;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\CoreBundle\\Controller\\FormController;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class WebhookController extends FormController
{
    public function __construct(FormFactoryInterface \$formFactory, FormFieldHelper \$fieldHelper, ManagerRegistry \$doctrine, MauticFactory \$factory, ModelFactory \$modelFactory, UserHelper \$userHelper, CoreParametersHelper \$coreParametersHelper, EventDispatcherInterface \$dispatcher, Translator \$translator, FlashBag \$flashBag, RequestStack \$requestStack, CorePermissions \$security)
    {
        \$this->setStandardParameters(
            'webhook.webhook', // model name
            'webhook:webhooks', // permission base
            'mautic_webhook', // route base
            'mautic_webhook', // session base
            'mautic.webhook', // lang string base
            '@MauticWebhook/Webhook', // template base
            'mautic_webhook', // activeLink
            'mauticWebhook' // mauticContent
        );

        parent::__construct(\$formFactory, \$fieldHelper, \$doctrine, \$factory, \$modelFactory, \$userHelper, \$coreParametersHelper, \$dispatcher, \$translator, \$flashBag, \$requestStack, \$security);
    }

    /**
     * @param int \$page
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function indexAction(Request \$request, \$page = 1): \\Symfony\\Component\\HttpFoundation\\Response
    {
        return parent::indexStandard(\$request, \$page);
    }

    /**
     * Generates new form and processes post data.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function newAction(Request \$request)
    {
        return parent::newStandard(\$request);
    }

    /**
     * Generates edit form and processes post data.
     *
     * @param int  \$objectId
     * @param bool \$ignorePost
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse
     */
    public function editAction(Request \$request, \$objectId, \$ignorePost = false)
    {
        return parent::editStandard(\$request, \$objectId, \$ignorePost);
    }

    /**
     * Displays details on a Focus.
     *
     * @return array|\\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function viewAction(Request \$request, \$objectId)
    {
        return \$this->viewStandard(\$request, \$objectId, 'webhook', 'webhook', null, 'item');
    }

    /**
     * Clone an entity.
     *
     * @param int \$objectId
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function cloneAction(Request \$request, \$objectId)
    {
        return parent::cloneStandard(\$request, \$objectId);
    }

    /**
     * Deletes the entity.
     *
     * @param int \$objectId
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function deleteAction(Request \$request, \$objectId)
    {
        return parent::deleteStandard(\$request, \$objectId);
    }

    /**
     * Deletes a group of entities.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\RedirectResponse
     */
    public function batchDeleteAction(Request \$request)
    {
        return parent::batchDeleteStandard(\$request);
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
        return "@bundles/WebhookBundle/Controller/WebhookController.php";
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
        return new Source("", "@bundles/WebhookBundle/Controller/WebhookController.php", "/app/docroot/app/bundles/WebhookBundle/Controller/WebhookController.php");
    }
}
