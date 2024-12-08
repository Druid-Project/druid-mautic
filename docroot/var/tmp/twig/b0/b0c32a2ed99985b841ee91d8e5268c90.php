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

/* @bundles/ChannelBundle/Controller/Api/MessageApiController.php */
class __TwigTemplate_4821d7ac89b2de49f6ae850f4ea9d097 extends Template
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

namespace Mautic\\ChannelBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Entity\\Message;
use Mautic\\ChannelBundle\\Event\\ChannelEvent;
use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Message>
 */
class MessageApiController extends CommonApiController
{
    /**
     * @var MessageModel|null
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
        \$messageModel = \$modelFactory->getModel('channel.message');
        \\assert(\$messageModel instanceof MessageModel);
        \$this->model            = \$messageModel;
        \$this->entityClass      = Message::class;
        \$this->entityNameOne    = 'message';
        \$this->entityNameMulti  = 'messages';
        \$this->serializerGroups = ['messageDetails', 'messageChannelList', 'categoryList', 'publishDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    protected function prepareParametersFromRequest(FormInterface \$form, array &\$params, object \$entity = null, array \$masks = [], array \$fields = []): void
    {
        parent::prepareParametersFromRequest(\$form, \$params, \$entity, \$masks);

        if ('PATCH' === \$this->requestStack->getCurrentRequest()->getMethod() && !isset(\$params['channels'])) {
            return;
        } elseif (!isset(\$params['channels'])) {
            \$params['channels'] = [];
        }

        \$channels = \$this->model->getChannels();

        foreach (\$channels as \$channelType => \$channel) {
            if (!isset(\$params['channels'][\$channelType])) {
                \$params['channels'][\$channelType] = ['isEnabled' => 0];
            } else {
                \$params['channels'][\$channelType]['isEnabled'] = (int) \$params['channels'][\$channelType]['isEnabled'];
            }
            \$params['channels'][\$channelType]['channel'] = \$channelType;
        }
    }

    /**
     * Load and set channel names to the response.
     */
    protected function preSerializeEntity(object \$entity, string \$action = 'view'): void
    {
        \$event = \$this->dispatcher->dispatch(new ChannelEvent(), ChannelEvents::ADD_CHANNEL);

        foreach (\$entity->getChannels() as \$channel) {
            \$repository = \$event->getRepositoryName(\$channel->getChannel());
            \$nameColumn = \$event->getNameColumn(\$channel->getChannel());
            \$name       = \$this->model->getChannelName(\$channel->getChannelId(), \$repository, \$nameColumn);
            \$channel->setChannelName(\$name);
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
        return "@bundles/ChannelBundle/Controller/Api/MessageApiController.php";
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
        return new Source("", "@bundles/ChannelBundle/Controller/Api/MessageApiController.php", "/app/docroot/app/bundles/ChannelBundle/Controller/Api/MessageApiController.php");
    }
}
