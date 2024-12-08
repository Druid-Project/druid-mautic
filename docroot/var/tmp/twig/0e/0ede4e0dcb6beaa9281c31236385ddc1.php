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

/* @bundles/LeadBundle/Tests/Security/LeadPermissionsFunctionalTest.php */
class __TwigTemplate_741e61c593b9f9d525c360e597214de8 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Security;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

final class LeadPermissionsFunctionalTest extends MauticMysqlTestCase
{
    public function testRolePageForPermissionAvailability(): void
    {
        \$crawler = \$this->client->request(Request::METHOD_GET, '/s/roles/new');
        \$this->assertEquals(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());

        \$content = \$this->client->getResponse()->getContent();
        \$this->assertStringContainsString('Contacts - User has access to', \$content);
        \$this->assertStringContainsString('Segments - User has access to', \$content);
        \$this->assertStringContainsString('Custom Fields - User has access to', \$content);
        \$this->assertStringContainsString('Import - User has access to', \$content);

        \$leadPermissionTab = \$crawler->filter('#leadPermissionTab');
        \$this->assertEquals(1, \$leadPermissionTab->count());

        \$leadsRole = \$crawler->filter('input[name=\"role[permissions][lead:leads][]\"]');
        \$this->assertEquals(8, \$leadsRole->count());

        \$listsRole = \$crawler->filter('input[name=\"role[permissions][lead:lists][]\"]');
        \$this->assertEquals(8, \$listsRole->count());

        \$fieldsRole = \$crawler->filter('input[name=\"role[permissions][lead:fields][]\"]');
        \$this->assertEquals(2, \$fieldsRole->count());

        \$importsRole = \$crawler->filter('input[name=\"role[permissions][lead:imports][]\"]');
        \$this->assertEquals(6, \$importsRole->count());
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
        return "@bundles/LeadBundle/Tests/Security/LeadPermissionsFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Security/LeadPermissionsFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Security/LeadPermissionsFunctionalTest.php");
    }
}
