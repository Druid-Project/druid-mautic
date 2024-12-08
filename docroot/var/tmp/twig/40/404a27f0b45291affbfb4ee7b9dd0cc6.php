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

/* @bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php */
class __TwigTemplate_f744fb2cfaac5e08b12e28c8c89cd951 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Entity;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class CommonRepositoryTest extends MauticMysqlTestCase
{
    /**
     * @testdox Test that is:mine does not throw an exception due to bad DQL
     */
    public function testIsMineSearchCommandDoesntCauseExceptionDueToBadDQL(): void
    {
        \$this->client->request('GET', 's/contacts?search=is:mine');

        \$this->assertEquals(200, \$this->client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('is:mine', \$this->client->getResponse()->getContent());
    }

    public function testIsMineSearchCommandDoesntCauseExceptionDueToBadDQLForCompanies(): void
    {
        \$this->client->request('GET', 's/companies?search=is:mine');

        \$this->assertEquals(200, \$this->client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('is:mine', \$this->client->getResponse()->getContent());
    }

    public function testIsPublishedSearchCommandDoesntCauseExceptionDueToBadDQLForEmails(): void
    {
        \$this->client->request('GET', 's/emails?search=is:published');

        \$this->assertEquals(200, \$this->client->getResponse()->getStatusCode());
        \$this->assertStringContainsString('is:published', \$this->client->getResponse()->getContent());
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
        return "@bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Entity/CommonRepositoryTest.php");
    }
}
