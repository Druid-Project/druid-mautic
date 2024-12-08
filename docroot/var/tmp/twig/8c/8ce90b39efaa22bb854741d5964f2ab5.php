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

/* @bundles/CoreBundle/Tests/Unit/EventListener/CommonStatsSubscriberTest.php */
class __TwigTemplate_fa0ce1cc8da8828370ce03c10d8db186 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Event\\StatsEvent;
use Mautic\\CoreBundle\\EventListener\\CommonStatsSubscriber;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\UserBundle\\Entity\\User;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;

class CommonStatsSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var CorePermissions|MockObject
     */
    private MockObject \$security;

    /**
     * @var EntityManager|MockObject
     */
    private MockObject \$entityManager;

    /**
     * @var User|MockObject
     */
    private MockObject \$user;

    /**
     * @var MockObject&CommonRepository<object>
     */
    private MockObject \$repository;

    /**
     * @var StatsEvent|MockObject
     */
    private MockObject \$statsEvent;

    /**
     * @var CommonStatsSubscriber|MockObject
     */
    private MockObject \$subscirber;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->security      = \$this->createMock(CorePermissions::class);
        \$this->entityManager = \$this->createMock(EntityManager::class);
        \$this->user          = \$this->createMock(User::class);
        \$this->repository    = \$this->createMock(CommonRepository::class);
        \$this->statsEvent    = \$this->createMock(StatsEvent::class);
        \$this->subscirber    = \$this->getMockForAbstractClass(
            CommonStatsSubscriber::class,
            [
                \$this->security,
                \$this->entityManager,
            ]
        );
    }

    public function testOnStatsFetchForRestrictedUsers(): void
    {
        \$this->setProperty(\$this->subscirber, 'repositories', [\$this->repository]);
        \$this->setProperty(\$this->subscirber, 'permissions', ['emails_stats' => ['lead' => 'lead:leads']]);

        \$this->user->expects(\$this->once())
            ->method('getId')
            ->willReturn(9);

        \$this->security->expects(\$this->exactly(2))
            ->method('checkPermissionExists')
            ->withConsecutive(
                ['lead:leads:view'],
                ['lead:leads:viewother']
            )
            ->willReturn(true);

        \$this->security->expects(\$this->exactly(2))
            ->method('isGranted')
            ->withConsecutive(
                ['lead:leads:view'],
                ['lead:leads:viewother']
            )
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->repository->expects(\$this->once())
            ->method('getTableName')
            ->willReturn('emails_stats');

        \$this->statsEvent->expects(\$this->once())
            ->method('isLookingForTable')
            ->with('emails_stats', \$this->repository)
            ->willReturn(true);

        \$this->statsEvent->expects(\$this->once())
            ->method('addWhere')
            ->with([
                'internal' => true,
                'expr'     => 'formula',
                'value'    => 'IF (lead.owner_id IS NOT NULL, lead.owner_id, lead.created_by) = 9',
            ]);

        \$this->statsEvent->expects(\$this->once())
            ->method('getUser')
            ->willReturn(\$this->user);

        \$this->statsEvent->expects(\$this->once())
            ->method('setRepository')
            ->with(\$this->repository, ['lead']);

        \$this->statsEvent->expects(\$this->once())
            ->method('setSelect')
            ->willReturnSelf();

        \$this->subscirber->onStatsFetch(\$this->statsEvent);
    }

    public function testOnStatsFetchForViewAllUsers(): void
    {
        \$this->setProperty(\$this->subscirber, 'repositories', [\$this->repository]);
        \$this->setProperty(\$this->subscirber, 'permissions', ['emails_stats' => ['lead' => 'lead:leads']]);

        \$this->security->expects(\$this->once())
            ->method('checkPermissionExists')
            ->with('lead:leads:view')
            ->willReturn(true);

        \$this->security->expects(\$this->once())
            ->method('isGranted')
            ->with('lead:leads:view')
            ->willReturn(true);

        \$this->repository->expects(\$this->once())
            ->method('getTableName')
            ->willReturn('emails_stats');

        \$this->statsEvent->expects(\$this->once())
            ->method('isLookingForTable')
            ->with('emails_stats', \$this->repository)
            ->willReturn(true);

        \$this->statsEvent->expects(\$this->once())
            ->method('setRepository')
            ->with(\$this->repository, []);

        \$this->statsEvent->expects(\$this->once())
            ->method('setSelect')
            ->willReturnSelf();

        \$this->subscirber->onStatsFetch(\$this->statsEvent);
    }

    public function testOnStatsFetchForAdminUsers(): void
    {
        \$this->setProperty(\$this->subscirber, 'repositories', [\$this->repository]);
        \$this->setProperty(\$this->subscirber, 'permissions', ['emails_stats' => ['lead' => 'admin']]);

        \$this->security->expects(\$this->once())
            ->method('isAdmin')
            ->willReturn(true);

        \$this->repository->expects(\$this->once())
            ->method('getTableName')
            ->willReturn('emails_stats');

        \$this->statsEvent->expects(\$this->once())
            ->method('isLookingForTable')
            ->with('emails_stats', \$this->repository)
            ->willReturn(true);

        \$this->statsEvent->expects(\$this->once())
            ->method('setSelect')
            ->willReturnSelf();

        \$this->subscirber->onStatsFetch(\$this->statsEvent);
    }

    public function testOnStatsFetchForNoPermissionUsers(): void
    {
        \$this->setProperty(\$this->subscirber, 'repositories', [\$this->repository]);
        \$this->setProperty(\$this->subscirber, 'permissions', ['emails_stats' => ['lead' => 'lead:leads']]);

        \$this->repository->expects(\$this->once())
            ->method('getTableName')
            ->willReturn('emails_stats');

        \$this->security->expects(\$this->exactly(2))
            ->method('checkPermissionExists')
            ->withConsecutive(
                ['lead:leads:view'],
                ['lead:leads:viewother']
            )
            ->willReturn(true);

        \$this->security->expects(\$this->exactly(2))
            ->method('isGranted')
            ->withConsecutive(
                ['lead:leads:view'],
                ['lead:leads:viewother']
            )
            ->willReturn(false);

        \$this->statsEvent->expects(\$this->once())
            ->method('isLookingForTable')
            ->with('emails_stats', \$this->repository)
            ->willReturn(true);

        \$this->statsEvent->expects(\$this->never())
            ->method('setSelect');

        \$this->expectException(AccessDeniedException::class);
        \$this->subscirber->onStatsFetch(\$this->statsEvent);
    }

    private function setProperty(\$object, \$property, \$value): void
    {
        \$reflection         = new \\ReflectionClass(\$object);
        \$reflectionProperty = \$reflection->getProperty(\$property);
        \$reflectionProperty->setAccessible(true);
        \$reflectionProperty->setValue(\$object, \$value);
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
        return "@bundles/CoreBundle/Tests/Unit/EventListener/CommonStatsSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/CommonStatsSubscriberTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/CommonStatsSubscriberTest.php");
    }
}
