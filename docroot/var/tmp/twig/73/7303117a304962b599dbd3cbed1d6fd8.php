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

/* @bundles/LeadBundle/Model/DeviceModel.php */
class __TwigTemplate_94a5bfbd64ebf9683d67783cc87f6df5 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Mautic\\LeadBundle\\Entity\\LeadDeviceRepository;
use Mautic\\LeadBundle\\Event\\LeadDeviceEvent;
use Mautic\\LeadBundle\\Form\\Type\\DeviceType;
use Mautic\\LeadBundle\\LeadEvents;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @extends FormModel<LeadDevice>
 */
class DeviceModel extends FormModel
{
    public function __construct(
        private LeadDeviceRepository \$leadDeviceRepository,
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

    /**
     * @return LeadDeviceRepository
     */
    public function getRepository()
    {
        return \$this->leadDeviceRepository;
    }

    public function getPermissionBase(): string
    {
        return 'lead:leads';
    }

    /**
     * Get a specific entity or generate a new one if id is empty.
     */
    public function getEntity(\$id = null): ?LeadDevice
    {
        if (null === \$id) {
            return new LeadDevice();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @param array \$options
     *
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof LeadDevice) {
            throw new MethodNotAllowedHttpException(['LeadDevice']);
        }

        if (!empty(\$action)) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(DeviceType::class, \$entity, \$options);
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null): ?Event
    {
        if (!\$entity instanceof LeadDevice) {
            throw new MethodNotAllowedHttpException(['LeadDevice']);
        }

        switch (\$action) {
            case 'pre_save':
                \$name = LeadEvents::DEVICE_PRE_SAVE;
                break;
            case 'post_save':
                \$name = LeadEvents::DEVICE_POST_SAVE;
                break;
            case 'pre_delete':
                \$name = LeadEvents::DEVICE_PRE_DELETE;
                break;
            case 'post_delete':
                \$name = LeadEvents::DEVICE_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new LeadDeviceEvent(\$entity, \$isNew);
                \$event->setEntityManager(\$this->em);
            }

            \$this->dispatcher->dispatch(\$event, \$name);

            return \$event;
        } else {
            return null;
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
        return "@bundles/LeadBundle/Model/DeviceModel.php";
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
        return new Source("", "@bundles/LeadBundle/Model/DeviceModel.php", "/app/docroot/app/bundles/LeadBundle/Model/DeviceModel.php");
    }
}
