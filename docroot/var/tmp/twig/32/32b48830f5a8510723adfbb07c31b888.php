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

/* @bundles/UserBundle/Tests/Functional/Controller/UserControllerFunctionalTest.php */
class __TwigTemplate_259965429682ebfce289388164ce5cb9 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Entity\\AuditLog;
use Mautic\\CoreBundle\\Entity\\AuditLogRepository;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\HttpFoundation\\Request;

class UserControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testEditUserAction(): void
    {
        \$auditLogModel      = \$this->createMock(AuditLogModel::class);
        \$auditLogRepository = \$this->createMock(AuditLogRepository::class);

        \$auditLog = \$this->auditLogSetter(1, 'Test User', 'user', 'security', 1, 'login', ['username' => 'testuser']);

        \$auditLogRepository->method('getLogsForUser')->willReturn([\$auditLog]);
        \$auditLogModel->method('getRepository')->willReturn(\$auditLogRepository);

        \$userModel = \$this->createMock(UserModel::class);

        \$role = new Role();
        \$role->setName('Administrator');

        \$user = \$this->userSetter(\$role);

        \$this->em->persist(\$auditLog);
        \$this->em->persist(\$user);
        \$this->em->persist(\$role);
        \$this->em->flush();

        \$userModel->method('getEntity')->willReturn(\$user);

        \$crawler        = \$this->client->request(Request::METHOD_GET, '/s/users/edit/1');
        \$clientResponse = \$this->client->getResponse();

        \$this->assertEquals(200, \$clientResponse->getStatusCode());
        \$this->assertStringContainsString('Test User</a>', \$clientResponse->getContent());
    }

    /**
     * @param array<mixed> \$details
     */
    public function auditLogSetter(int \$userId, string \$userName, string \$bundle,
        string \$object, int \$objectId, string \$action, array \$details): AuditLog
    {
        \$auditLog = new AuditLog();
        \$auditLog->setUserId(\$userId);
        \$auditLog->setUserName(\$userName);
        \$auditLog->setBundle(\$bundle);
        \$auditLog->setObject(\$object);
        \$auditLog->setObjectId(\$objectId);
        \$auditLog->setAction(\$action);
        \$auditLog->setDetails(\$details);
        \$auditLog->setDateAdded(new \\DateTime());
        \$auditLog->setIpAddress('127.0.0.1');

        return \$auditLog;
    }

    public function userSetter(Role \$role): User
    {
        \$user = new User();
        \$user->setUsername('testuser');
        \$user->setEmail('test@email.com');
        \$user->setFirstName('Test');
        \$user->setLastName('User');
        \$user->setPassword('password');
        \$user->setRole(\$role);
        \$user->setLastLogin('2024-02-22 10:30:00');

        return \$user;
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
        return "@bundles/UserBundle/Tests/Functional/Controller/UserControllerFunctionalTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Functional/Controller/UserControllerFunctionalTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Functional/Controller/UserControllerFunctionalTest.php");
    }
}
