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

/* @bundles/CampaignBundle/Tests/Helper/NotificationHelperTest.php */
class __TwigTemplate_4c92a075076105c5b0df08d7cbee4a19 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Helper;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Executioner\\Helper\\NotificationHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\Routing\\Router;

class NotificationHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|UserModel
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$userModel;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|NotificationModel
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$notificationModel;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Router
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$router;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Translator
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$translator;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|CoreParametersHelper
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$coreParametersHelper;

    protected function setUp(): void
    {
        \$this->userModel = \$this->getMockBuilder(UserModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->notificationModel = \$this->getMockBuilder(NotificationModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->router = \$this->getMockBuilder(Router::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->coreParametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testContactOwnerIsNotified(): void
    {
        \$event    = new Event();
        \$campaign = new Campaign();
        \$event->setCampaign(\$campaign);

        \$user = \$this->getMockBuilder(User::class)
            ->getMock();
        \$user->method('getId')
            ->willReturn('1');
        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->once())
            ->method('getOwner')
            ->willReturn(\$user);

        \$this->userModel->expects(\$this->never())
            ->method('getEntity');

        \$this->userModel->expects(\$this->never())
            ->method('getSystemAdministrator');

        \$this->notificationModel->expects(\$this->once())
            ->method('addNotification')
            ->with(
                ' / ',
                'error',
                false,
                \$this->anything(),
                null,
                null,
                \$user
            );

        \$this->getNotificationHelper()->notifyOfFailure(\$lead, \$event);
    }

    public function testCampaignCreatorIsNotified(): void
    {
        \$event    = new Event();
        \$campaign = new Campaign();
        \$event->setCampaign(\$campaign);
        \$campaign->setCreatedBy(1);

        \$user = \$this->getMockBuilder(User::class)
            ->getMock();
        \$user->method('getId')
            ->willReturn('1');
        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->once())
            ->method('getOwner')
            ->willReturn(null);

        \$this->userModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(\$user);

        \$this->userModel->expects(\$this->never())
            ->method('getSystemAdministrator');

        \$this->notificationModel->expects(\$this->once())
            ->method('addNotification')
            ->with(
                ' / ',
                'error',
                false,
                \$this->anything(),
                null,
                null,
                \$user
            );

        \$this->getNotificationHelper()->notifyOfFailure(\$lead, \$event);
    }

    public function testSystemAdminIsNotified(): void
    {
        \$event    = new Event();
        \$campaign = new Campaign();
        \$event->setCampaign(\$campaign);
        \$campaign->setCreatedBy(2);

        \$user = \$this->getMockBuilder(User::class)
            ->getMock();
        \$user->method('getId')
            ->willReturn('1');
        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->once())
            ->method('getOwner')
            ->willReturn(null);

        \$this->userModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(null);

        \$this->userModel->expects(\$this->once())
            ->method('getSystemAdministrator')
            ->willReturn(\$user);

        \$this->notificationModel->expects(\$this->once())
            ->method('addNotification')
            ->with(
                ' / ',
                'error',
                false,
                \$this->anything(),
                null,
                null,
                \$user
            );

        \$this->getNotificationHelper()->notifyOfFailure(\$lead, \$event);
    }

    public function testNotificationIgnoredIfUserNotFound(): void
    {
        \$event    = new Event();
        \$campaign = new Campaign();
        \$event->setCampaign(\$campaign);
        \$campaign->setCreatedBy(2);

        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->once())
            ->method('getOwner')
            ->willReturn(null);

        \$this->userModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(null);

        \$this->userModel->expects(\$this->once())
            ->method('getSystemAdministrator')
            ->willReturn(null);

        \$this->notificationModel->expects(\$this->never())
            ->method('addNotification');

        \$this->getNotificationHelper()->notifyOfFailure(\$lead, \$event);
    }

    public function testNotificationOfUnpublishToAuthor(): void
    {
        \$event    = new Event();
        \$user     = \$this->getMockBuilder(User::class)
            ->getMock();
        \$this->prepareCommonMocks(\$event, \$user);

        \$this->coreParametersHelper
            ->method('get')
            ->with('campaign_send_notification_to_author')
            ->willReturn(1);

        \$this->userModel->expects(\$this->once())
            ->method('emailUser')
            ->with(\$user, 'test', 'test');

        \$this->userModel->expects(\$this->never())
            ->method('sendMailToEmailAddresses');

        \$this->getNotificationHelper()->notifyOfUnpublish(\$event);
    }

    public function testNotificationOfUnpublishToEmailAddress(): void
    {
        \$event    = new Event();
        \$user     = \$this->getMockBuilder(User::class)
            ->getMock();
        \$this->prepareCommonMocks(\$event, \$user);

        \$emails = 'a@test.co, b@test.co';
        \$this->coreParametersHelper
            ->method('get')
            ->withConsecutive(['campaign_send_notification_to_author'], ['campaign_notification_email_addresses'])
            ->willReturn(0, \$emails);

        \$this->userModel->expects(\$this->once())
            ->method('sendMailToEmailAddresses')
            ->with(array_map('trim', explode(',', \$emails)), 'test', 'test');

        \$this->userModel->expects(\$this->never())
            ->method('emailUser');

        \$this->getNotificationHelper()->notifyOfUnpublish(\$event);
    }

    private function prepareCommonMocks(Event \$event, User \$user): void
    {
        \$campaign = new Campaign();
        \$event->setCampaign(\$campaign);
        \$campaign->setCreatedBy(2);

        \$user = \$this->getMockBuilder(User::class)
            ->getMock();

        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->any())
            ->method('getOwner')
            ->willReturn(null);

        \$user->expects(\$this->once())
            ->method('getId')
            ->willReturn(1);

        \$this->userModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(\$user);

        \$this->translator
            ->expects(\$this->any())
            ->method('trans')
            ->willReturn('test');
    }

    /**
     * @return NotificationHelper
     */
    private function getNotificationHelper()
    {
        return new NotificationHelper(
            \$this->userModel,
            \$this->notificationModel,
            \$this->translator,
            \$this->router,
            \$this->coreParametersHelper
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
        return "@bundles/CampaignBundle/Tests/Helper/NotificationHelperTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Helper/NotificationHelperTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Helper/NotificationHelperTest.php");
    }
}
