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

/* @bundles/NotificationBundle/Controller/AppCallbackController.php */
class __TwigTemplate_a1f8e76e6df84daa9c159805cb96a1fb extends Template
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

namespace Mautic\\NotificationBundle\\Controller;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Mautic\\NotificationBundle\\Model\\NotificationModel;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AppCallbackController extends CommonController
{
    public function indexAction(Request \$request, EntityManagerInterface \$em): JsonResponse
    {
        \$requestBody = json_decode(\$request->getContent(), true);
        \$contactRepo = \$em->getRepository(Lead::class);

        \$matchData   = [
            'email' => \$requestBody['email'],
        ];

        /** @var Lead \$contact */
        \$contact = \$contactRepo->findOneBy(\$matchData);

        if (null === \$contact) {
            \$contact = new Lead();
            \$contact->setEmail(\$requestBody['email']);
            \$contact->setLastActive(new \\DateTime());
        }

        \$pushIdCreated = false;

        if (array_key_exists('push_id', \$requestBody)) {
            \$pushIdCreated = true;
            \$contact->addPushIDEntry(\$requestBody['push_id'], \$requestBody['enabled'], true);
            \$contactRepo->saveEntity(\$contact);
        }

        \$statCreated = false;

        if (array_key_exists('stat', \$requestBody)) {
            \$stat             = \$requestBody['stat'];
            \$notificationRepo = \$em->getRepository(Notification::class);

            \$notification     = \$notificationRepo->getEntity(\$stat['notification_id']);

            if (null !== \$notification) {
                \$statCreated       = true;
                \$notificationModel = \$this->getModel('notification');
                \\assert(\$notificationModel instanceof NotificationModel);
                \$notificationModel->createStatEntry(\$notification, \$contact, \$stat['source'], \$stat['source_id']);
            }
        }

        return new JsonResponse([
            'contact_id'       => \$contact->getId(),
            'stat_recorded'    => \$statCreated,
            'push_id_recorded' => \$pushIdCreated ?: 'existing',
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
        return "@bundles/NotificationBundle/Controller/AppCallbackController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/AppCallbackController.php", "/app/docroot/app/bundles/NotificationBundle/Controller/AppCallbackController.php");
    }
}
