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

/* @bundles/SmsBundle/Controller/Api/SmsApiController.php */
class __TwigTemplate_f11e80ec41009465415974eb9734b9f5 extends Template
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

namespace Mautic\\SmsBundle\\Controller\\Api;

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
use Mautic\\SmsBundle\\Entity\\Sms;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Sms>
 */
class SmsApiController extends CommonApiController
{
    use LeadAccessTrait;

    /**
     * @var SmsModel|null
     */
    protected \$model;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$smsModel = \$modelFactory->getModel('sms');
        \\assert(\$smsModel instanceof SmsModel);

        \$this->model           = \$smsModel;
        \$this->entityClass     = Sms::class;
        \$this->entityNameOne   = 'sms';
        \$this->entityNameMulti = 'smses';

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * @return JsonResponse|Response
     */
    public function sendAction(TransportChain \$transportChain, LoggerInterface \$mauticLogger, \$id, \$contactId)
    {
        if (!\$transportChain->getEnabledTransports()) {
            return new JsonResponse(json_encode(['error' => ['message' => 'SMS transport is disabled.', 'code' => Response::HTTP_EXPECTATION_FAILED]]));
        }

        \$message = \$this->model->getEntity((int) \$id);

        if (is_null(\$message)) {
            return \$this->notFound();
        }

        \$contact = \$this->checkLeadAccess(\$contactId, 'edit');

        if (\$contact instanceof Response) {
            return \$this->accessDenied();
        }

        \$mauticLogger->debug(\"Sending SMS #{\$id} to contact #{\$contactId}\", ['originator' => 'api']);

        try {
            \$response = \$this->model->sendSms(\$message, \$contact, ['channel' => 'api'])[\$contact->getId()];
        } catch (\\Exception \$e) {
            \$mauticLogger->error(\$e->getMessage(), ['error' => (array) \$e]);

            return new Response('Interval server error', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        \$success = !empty(\$response['sent']);

        if (!\$success) {
            \$mauticLogger->error('Failed to send SMS.', ['error' => \$response['status']]);
        }

        \$view = \$this->view(
            [
                'success' => \$success,
                'status'  => \$this->translator->trans(\$response['status']),
                'result'  => \$response,
                'errors'  => \$success ? [] : [['message' => \$response['status']]],
            ],
            Response::HTTP_OK  //  200 - is legacy, we cannot change it yet
        );

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
        return "@bundles/SmsBundle/Controller/Api/SmsApiController.php";
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
        return new Source("", "@bundles/SmsBundle/Controller/Api/SmsApiController.php", "/app/docroot/app/bundles/SmsBundle/Controller/Api/SmsApiController.php");
    }
}
