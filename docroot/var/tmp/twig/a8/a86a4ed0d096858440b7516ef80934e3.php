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

/* @bundles/ReportBundle/Tests/Controller/ReportControllerTest.php */
class __TwigTemplate_e1991e045aeb5eceed70e1c3efc0f0e6 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

final class ReportControllerTest extends MauticMysqlTestCase
{
    /**
     * Smoke test to ensure the '/s/reports' route loads.
     */
    public function testIndexRouteSuccessfullyLoads(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/reports');
        \$response = \$this->client->getResponse();

        \$this->assertEquals(Response::HTTP_OK, \$response->getStatusCode());
    }

    /**
     * Smoke test to ensure the '/s/reports/new' route loads.
     */
    public function testNewRouteSuccessfullyLoads(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/reports/new');
        \$response = \$this->client->getResponse();

        \$this->assertEquals(Response::HTTP_OK, \$response->getStatusCode());
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
        return "@bundles/ReportBundle/Tests/Controller/ReportControllerTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Controller/ReportControllerTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Controller/ReportControllerTest.php");
    }
}
