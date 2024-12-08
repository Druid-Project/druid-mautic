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

/* @bundles/UserBundle/Tests/EventListener/SecuritySubscriberTest.php */
class __TwigTemplate_c9bcde2b32cbb22351a9c51265411c68 extends Template
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

namespace Mautic\\UserBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Event\\LoginEvent;
use Mautic\\UserBundle\\EventListener\\SecuritySubscriber;
use Mautic\\UserBundle\\UserEvents;

class SecuritySubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetSubscribedEvents(): void
    {
        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$auditLogModel  = \$this->createMock(AuditLogModel::class);
        \$subscriber     = new SecuritySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$this->assertEquals(
            [
                UserEvents::USER_LOGIN => ['onSecurityInteractiveLogin', 0],
            ],
            \$subscriber->getSubscribedEvents()
        );
    }

    public function testOnSecurityInteractiveLogin(): void
    {
        \$userId   = 132564;
        \$userName = 'John Doe';
        \$ip       = '125.55.45.21';
        \$log      = [
            'bundle'    => 'user',
            'object'    => 'security',
            'objectId'  => \$userId,
            'action'    => 'login',
            'details'   => ['username' => \$userName],
            'ipAddress' => \$ip,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->willReturn(\$ip);
        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$log);
        \$user = \$this->createMock(User::class);
        \$user->expects(\$this->once())
            ->method('getId')
            ->willReturn(\$userId);
        \$user->expects(\$this->once())
            ->method('getUserName')
            ->willReturn(\$userName);
        \$event = \$this->createMock(LoginEvent::class);
        \$event->expects(\$this->exactly(2))
            ->method('getUser')
            ->willReturn(\$user);
        \$subscriber = new SecuritySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$subscriber->onSecurityInteractiveLogin(\$event);
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
        return "@bundles/UserBundle/Tests/EventListener/SecuritySubscriberTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/EventListener/SecuritySubscriberTest.php", "/app/docroot/app/bundles/UserBundle/Tests/EventListener/SecuritySubscriberTest.php");
    }
}
