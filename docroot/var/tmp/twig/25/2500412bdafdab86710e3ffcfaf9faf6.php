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

/* @bundles/NotificationBundle/Tests/Functional/Controller/NotificationControllerTest.php */
class __TwigTemplate_53d636197fc6e507ea7abaee55c5f5da extends Template
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

namespace Mautic\\NotificationBundle\\Tests\\Functional\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

final class NotificationControllerTest extends MauticMysqlTestCase
{
    /**
     * Smoke test to ensure the '/s/notifications' route loads.
     */
    public function testIndexRouteSuccessfullyLoads(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/notifications');
        \$response = \$this->client->getResponse();

        \$this->assertEquals(Response::HTTP_OK, \$response->getStatusCode());
    }

    /**
     * Smoke test to ensure the '/s/notifications/new' route loads.
     */
    public function testNewRouteSuccessfullyLoads(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/notifications/new');
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
        return "@bundles/NotificationBundle/Tests/Functional/Controller/NotificationControllerTest.php";
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
        return new Source("", "@bundles/NotificationBundle/Tests/Functional/Controller/NotificationControllerTest.php", "/app/docroot/app/bundles/NotificationBundle/Tests/Functional/Controller/NotificationControllerTest.php");
    }
}
