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

/* @bundles/ApiBundle/Model/ClientModel.php */
class __TwigTemplate_19e0fa79ea516336471955373470a01a extends Template
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

namespace Mautic\\ApiBundle\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ApiBundle\\ApiEvents;
use Mautic\\ApiBundle\\Entity\\oAuth2\\Client;
use Mautic\\ApiBundle\\Event\\ClientEvent;
use Mautic\\ApiBundle\\Form\\Type\\ClientType;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\UserBundle\\Entity\\User;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @extends FormModel<Client>
 */
class ClientModel extends FormModel
{
    /**
     * @var string
     */
    public const API_MODE_OAUTH2 = 'oauth2';

    private ?string \$apiMode = null;

    private const DEFAULT_API_MODE = 'oauth2';

    public function __construct(
        private RequestStack \$requestStack,
        EntityManager \$em,
        CorePermissions \$security,
        EventDispatcherInterface \$dispatcher,
        UrlGeneratorInterface \$router,
        Translator \$translator,
        UserHelper \$userHelper,
        LoggerInterface \$mauticLogger,
        CoreParametersHelper \$coreParametersHelper
    ) {
        parent::__construct(\$em, \$security, \$dispatcher, \$router, \$translator, \$userHelper, \$mauticLogger, \$coreParametersHelper);
    }

    private function getApiMode(): string
    {
        if (null !== \$this->apiMode) {
            return \$this->apiMode;
        }

        if (null !== \$request = \$this->requestStack->getCurrentRequest()) {
            return \$request->get('api_mode', \$request->getSession()->get('mautic.client.filter.api_mode', self::DEFAULT_API_MODE));
        }

        return self::DEFAULT_API_MODE;
    }

    public function setApiMode(\$apiMode): void
    {
        \$this->apiMode = \$apiMode;
    }

    public function getRepository(): \\Mautic\\ApiBundle\\Entity\\oAuth2\\ClientRepository
    {
        return \$this->em->getRepository(Client::class);
    }

    public function getPermissionBase(): string
    {
        return 'api:clients';
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof Client) {
            throw new MethodNotAllowedHttpException(['Client']);
        }

        \$params = (!empty(\$action)) ? ['action' => \$action] : [];

        return \$formFactory->create(ClientType::class, \$entity, \$params);
    }

    public function getEntity(\$id = null): ?Client
    {
        if (null === \$id) {
            return 'oauth2' === \$this->getApiMode() ? new Client() : null;
        }

        return parent::getEntity(\$id);
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null): ?Event
    {
        if (!\$entity instanceof Client) {
            throw new MethodNotAllowedHttpException(['Client']);
        }

        switch (\$action) {
            case 'post_save':
                \$name = ApiEvents::CLIENT_POST_SAVE;
                break;
            case 'post_delete':
                \$name = ApiEvents::CLIENT_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new ClientEvent(\$entity, \$isNew);
                \$event->setEntityManager(\$this->em);
            }
            \$this->dispatcher->dispatch(\$event, \$name);

            return \$event;
        }

        return null;
    }

    /**
     * @return array
     */
    public function getUserClients(User \$user)
    {
        return \$this->getRepository()->getUserClients(\$user);
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    public function revokeAccess(\$entity): void
    {
        if (!\$entity instanceof Client) {
            throw new MethodNotAllowedHttpException(['Client']);
        }

        // remove the user from the client
        if ('oauth2' === \$this->getApiMode()) {
            \$entity->removeUser(\$this->userHelper->getUser());
            \$this->saveEntity(\$entity);
        } else {
            \$this->getRepository()->deleteAccessTokens(\$entity, \$this->userHelper->getUser());
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
        return "@bundles/ApiBundle/Model/ClientModel.php";
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
        return new Source("", "@bundles/ApiBundle/Model/ClientModel.php", "/app/docroot/app/bundles/ApiBundle/Model/ClientModel.php");
    }
}
