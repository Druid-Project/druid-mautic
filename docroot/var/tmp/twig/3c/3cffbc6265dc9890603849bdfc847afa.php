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

/* @bundles/UserBundle/Tests/Functional/Controller/RoleControllerFunctionalTest.php */
class __TwigTemplate_b0c597c56ab8c1758e82bb8ea48568c2 extends Template
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

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\UserBundle\\Entity\\Role;
use Symfony\\Component\\HttpFoundation\\Request;

class RoleControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testNewRoleAction(): void
    {
        \$crawler    = \$this->client->request(Request::METHOD_GET, '/s/roles/new');
        \$saveButton = \$crawler->selectButton('role[buttons][apply]');

        \$name = 'Test Role';
        \$desc = 'Role Description';

        \$form = \$saveButton->form();
        \$form['role[name]']->setValue(\$name);
        \$form['role[description]']->setValue(\$desc);

        \$this->client->submit(\$form);
        \$this->assertTrue(\$this->client->getResponse()->isOk());

        \$this->assertStringContainsString(\$name, \$this->client->getResponse()->getContent());
        \$this->assertStringContainsString(\$desc, \$this->client->getResponse()->getContent());
    }

    public function testEditRoleAction(): void
    {
        \$role = new Role();
        \$role->setName('Test Role');
        \$role->setDescription('The Description');

        \$this->em->persist(\$role);
        \$this->em->flush();

        \$crawler    = \$this->client->request(Request::METHOD_GET, '/s/roles/edit/'.\$role->getId());
        \$saveButton = \$crawler->selectButton('role[buttons][save]');

        \$updatedName = 'Test Role Updated';

        \$form = \$saveButton->form();
        \$form['role[name]']->setValue(\$updatedName);

        \$this->client->submit(\$form);
        \$this->assertTrue(\$this->client->getResponse()->isOk());

        \$this->assertStringContainsString(\$updatedName, \$this->client->getResponse()->getContent());
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
        return "@bundles/UserBundle/Tests/Functional/Controller/RoleControllerFunctionalTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/Functional/Controller/RoleControllerFunctionalTest.php", "/app/docroot/app/bundles/UserBundle/Tests/Functional/Controller/RoleControllerFunctionalTest.php");
    }
}
