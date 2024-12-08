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

/* @bundles/CoreBundle/Tests/Functional/Controller/UpdateControllerTest.php */
class __TwigTemplate_bf456636e5eacbc2cea0c4fd6b741336 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Symfony\\Component\\HttpFoundation\\Response;

final class UpdateControllerTest extends MauticMysqlTestCase
{
    public function testIndexActionRendersSuccessfully(): void
    {
        \$this->client->request('GET', 's/update');
        \$response = \$this->client->getResponse();
        \$this->assertSame(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
    }

    public function testSchemaActionRendersSuccessfully(): void
    {
        \$this->client->request('GET', 's/update/schema');
        \$response = \$this->client->getResponse();
        \$this->assertSame(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
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
        return "@bundles/CoreBundle/Tests/Functional/Controller/UpdateControllerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Controller/UpdateControllerTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Controller/UpdateControllerTest.php");
    }
}
