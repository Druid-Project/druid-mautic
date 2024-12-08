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

/* @bundles/LeadBundle/Tests/Functional/Controller/CompanyControllerTest.php */
class __TwigTemplate_1e191f04b228fc854ae4aa78fb5c4ae9 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;

class CompanyControllerTest extends MauticMysqlTestCase
{
    public const USERNAME = 'jhony';

    public function testMergeAction(): void
    {
        \$this->client->request('GET', '/s/companies/merge/1');
        \$clientResponse         = \$this->client->getResponse();
        \$this->assertEquals(200, \$clientResponse->getStatusCode());
    }

    public function testMergeActionWithoutPermission(): void
    {
        \$this->createAndLoginUser();
        \$this->client->request('GET', '/s/companies/merge/1');
        \$clientResponse         = \$this->client->getResponse();
        \$this->assertEquals(403, \$clientResponse->getStatusCode());
    }

    private function createAndLoginUser(): User
    {
        // Create non-admin role
        \$role = \$this->createRole();
        // Create non-admin user
        \$user = \$this->createUser(\$role);

        \$this->em->flush();
        \$this->em->detach(\$role);

        \$this->loginUser(self::USERNAME);
        \$this->client->setServerParameter('PHP_AUTH_USER', self::USERNAME);
        \$this->client->setServerParameter('PHP_AUTH_PW', 'mautic');

        return \$user;
    }

    private function createRole(bool \$isAdmin = false): Role
    {
        \$role = new Role();
        \$role->setName('Role');
        \$role->setIsAdmin(\$isAdmin);

        \$this->em->persist(\$role);

        return \$role;
    }

    private function createUser(Role \$role): User
    {
        \$user = new User();
        \$user->setFirstName('Jhony');
        \$user->setLastName('Doe');
        \$user->setUsername(self::USERNAME);
        \$user->setEmail('john.doe@email.com');
        \$encoder = self::\$container->get('security.encoder_factory')->getEncoder(\$user);
        \$user->setPassword(\$encoder->encodePassword('mautic', null));
        \$user->setRole(\$role);

        \$this->em->persist(\$user);

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
        return "@bundles/LeadBundle/Tests/Functional/Controller/CompanyControllerTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Functional/Controller/CompanyControllerTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Functional/Controller/CompanyControllerTest.php");
    }
}
