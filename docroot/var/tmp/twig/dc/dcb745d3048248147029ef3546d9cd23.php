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

/* @bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php */
class __TwigTemplate_bced3f1f544acb3f0bfac848afd64ec2 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Tests\\Field\\Notification;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Notification\\CustomFieldNotification;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CustomFieldNotificationTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoUserId(): void
    {
        \$notificationModel   = \$this->createMock(NotificationModel::class);
        \$userModel           = \$this->createMock(UserModel::class);
        \$translatorInterface = \$this->createMock(TranslatorInterface::class);

        \$leadField = new LeadField();

        \$userModel->expects(\$this->never())
            ->method('getEntity');

        \$customFieldNotification = new CustomFieldNotification(\$notificationModel, \$userModel, \$translatorInterface);

        \$customFieldNotification->customFieldWasCreated(\$leadField, 0);
    }

    public function testNoUser(): void
    {
        \$notificationModel   = \$this->createMock(NotificationModel::class);
        \$userModel           = \$this->createMock(UserModel::class);
        \$translatorInterface = \$this->createMock(TranslatorInterface::class);

        \$leadField = new LeadField();

        \$userModel->expects(\$this->once())
            ->method('getEntity')
            ->willReturn(null);

        \$translatorInterface->expects(\$this->never())
            ->method('trans');

        \$customFieldNotification = new CustomFieldNotification(\$notificationModel, \$userModel, \$translatorInterface);

        \$customFieldNotification->customFieldWasCreated(\$leadField, 1);
    }

    public function testCustomFieldWasCreated(): void
    {
        \$notificationModel   = \$this->createMock(NotificationModel::class);
        \$userModel           = \$this->createMock(UserModel::class);
        \$translatorInterface = \$this->createMock(TranslatorInterface::class);

        \$userId    = 1;
        \$leadField = new LeadField();
        \$user      = new User();

        \$userModel->expects(\$this->once())
            ->method('getEntity')
            ->with(\$userId)
            ->willReturn(\$user);

        \$translatorInterface->expects(\$this->exactly(2))
            ->method('trans')
            ->willReturn('text');

        \$notificationModel->expects(\$this->once())
            ->method('addNotification')
            ->with(
                'text',
                'info',
                false,
                'text',
                'fa-columns',
                null,
                \$user
            );

        \$customFieldNotification = new CustomFieldNotification(\$notificationModel, \$userModel, \$translatorInterface);

        \$customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
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
        return "@bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/Notification/CustomFieldNotificationTest.php");
    }
}
