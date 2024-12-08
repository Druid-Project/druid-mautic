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

/* @bundles/CampaignBundle/Controller/Api/EventApiController.php */
class __TwigTemplate_7119eb6d5fceded84b980bf73f54fee1 extends Template
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

namespace Mautic\\CampaignBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\ApiBundle\\Serializer\\Exclusion\\FieldExclusionStrategy;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Model\\EventModel;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Controller\\LeadAccessTrait;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Event>
 */
class EventApiController extends CommonApiController
{
    use LeadAccessTrait;

    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory)
    {
        \$campaignEventModel = \$modelFactory->getModel('campaign.event');
        \\assert(\$campaignEventModel instanceof EventModel);

        \$this->model                    = \$campaignEventModel;
        \$this->entityClass              = Event::class;
        \$this->entityNameOne            = 'event';
        \$this->entityNameMulti          = 'events';
        \$this->serializerGroups         = ['campaignEventStandaloneDetails', 'campaignList'];
        \$this->parentChildrenLevelDepth = 1;

        // Don't include campaign in children/parent arrays
        \$this->addExclusionStrategy(new FieldExclusionStrategy(['campaign'], 1));

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    /**
     * @param Event  \$entity
     * @param string \$action
     *
     * @return bool|mixed
     */
    protected function checkEntityAccess(\$entity, \$action = 'view')
    {
        // Use the campaign for permission checks
        return parent::checkEntityAccess(\$entity->getCampaign(), \$action);
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
        return "@bundles/CampaignBundle/Controller/Api/EventApiController.php";
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
        return new Source("", "@bundles/CampaignBundle/Controller/Api/EventApiController.php", "/app/docroot/app/bundles/CampaignBundle/Controller/Api/EventApiController.php");
    }
}
