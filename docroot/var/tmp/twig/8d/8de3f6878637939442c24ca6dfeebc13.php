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

/* @bundles/UserBundle/Tests/Functional/UserLogoutFunctionalTest.php */
class __TwigTemplate_164ffb83b97a9f4dc71a8f3a90c8f209 extends Template
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

namespace Mautic\\UserBundle\\Tests\\Functional;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class UserLogoutFunctionalTest extends MauticMysqlTestCase
{
    public function testLogout(): void
    {
        \$role = new Role();
        \$role->setName('Role');
        \$role->setIsAdmin(true);
        \$this->em->persist(\$role);

        \$user = new User();
        \$user->setFirstName('John');
        \$user->setLastName('Doe');
        \$user->setUsername('john.doe');
        \$user->setEmail('john.doe@email.com');
        \$user->setRole(\$role);
        \$encoder = static::getContainer()->get('security.encoder_factory')->getEncoder(\$user);
        \$user->setPassword(\$encoder->encodePassword('mautic', null));
        \$this->em->persist(\$user);

        \$this->em->flush();
        \$this->em->clear();

        // Login newly created non-admin user
        \$this->loginUser(\$user->getUserIdentifier());
        \$this->client->setServerParameter('PHP_AUTH_USER', \$user->getUserIdentifier());
        \$this->client->setServerParameter('PHP_AUTH_PW', 'mautic');

        \$this->client->request(Request::METHOD_GET, '/s/logout');
        \$clientResponse = \$this->client->getResponse();
        Assert::assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());
        Assert::assertStringContainsString(
            'login',
            \$clientResponse->getContent()
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
        return "@bundles/UserBundle/Tests/Functional/UserLogoutFunctionalTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Functional/UserLogoutFunctionalTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Functional/UserLogoutFunctionalTest.php");
    }
}
