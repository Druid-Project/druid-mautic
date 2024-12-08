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

/* @bundles/CampaignBundle/Tests/CampaignTestAbstract.php */
class __TwigTemplate_1ebce74dc39ba5a33ee87fadeb6aeae9 extends Template
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

namespace Mautic\\CampaignBundle\\Tests;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CampaignBundle\\EventCollector\\EventCollector;
use Mautic\\CampaignBundle\\Membership\\MembershipBuilder;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\FormBundle\\Entity\\FormRepository;
use Mautic\\FormBundle\\Model\\FormModel;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class CampaignTestAbstract extends \\PHPUnit\\Framework\\TestCase
{
    protected static \$mockId   = 232;

    protected static \$mockName = 'Mock name';

    /**
     * @return CampaignModel
     */
    protected function initCampaignModel()
    {
        \$entityManager = \$this
            ->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$security = \$this->getMockBuilder(CorePermissions::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$security->expects(\$this->any())
            ->method('isGranted')
            ->will(\$this->returnValue(true));

        \$userHelper = \$this->getMockBuilder(UserHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$formRepository = \$this->getMockBuilder(FormRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$formRepository->expects(\$this->any())
            ->method('getFormList')
            ->will(\$this->returnValue([['id' => self::\$mockId, 'name' => self::\$mockName]]));

        \$leadListModel = \$this->getMockBuilder(ListModel::class)
            ->disableOriginalConstructor()
            ->setConstructorArgs([6 => \$entityManager])
            ->getMock();

        \$leadListModel->expects(\$this->any())
            ->method('getUserLists')
            ->will(\$this->returnValue([['id' => self::\$mockId, 'name' => self::\$mockName]]));

        \$formModel = \$this->getMockBuilder(FormModel::class)
            ->disableOriginalConstructor()
            ->setConstructorArgs([12 => \$entityManager])
            ->getMock();

        \$formModel->expects(\$this->any())
            ->method('getRepository')
            ->will(\$this->returnValue(\$formRepository));

        \$eventCollector    = \$this->createMock(EventCollector::class);
        \$membershipBuilder = \$this->createMock(MembershipBuilder::class);

        \$contactTracker = \$this->createMock(ContactTracker::class);

        \$campaignModel = new CampaignModel(
            \$leadListModel,
            \$formModel,
            \$eventCollector,
            \$membershipBuilder,
            \$contactTracker,
            \$entityManager,
            \$security,
            \$this->createMock(EventDispatcherInterface::class),
            \$this->createMock(UrlGeneratorInterface::class),
            \$this->createMock(Translator::class),
            \$userHelper,
            \$this->createMock(LoggerInterface::class),
            \$this->createMock(CoreParametersHelper::class)
        );

        return \$campaignModel;
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
        return "@bundles/CampaignBundle/Tests/CampaignTestAbstract.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/CampaignTestAbstract.php", "/app/docroot/app/bundles/CampaignBundle/Tests/CampaignTestAbstract.php");
    }
}
