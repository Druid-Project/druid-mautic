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

/* @bundles/NotificationBundle/Tests/Functional/Controller/MobileNotificationControllerTest.php */
class __TwigTemplate_c5bd32ae5f60289c30d0d09868ae2cd3 extends Template
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

final class MobileNotificationControllerTest extends MauticMysqlTestCase
{
    /**
     * Smoke test to ensure the '/s/mobile_notifications' route loads.
     */
    public function testIndexRouteSuccessfullyLoads(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/mobile_notifications');
        \$response = \$this->client->getResponse();

        \$this->assertEquals(Response::HTTP_OK, \$response->getStatusCode());
    }

    public function testCreateRouteSuccessfullyLoads(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/mobile_notifications/new');
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
        return "@bundles/NotificationBundle/Tests/Functional/Controller/MobileNotificationControllerTest.php";
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
        return new Source("", "@bundles/NotificationBundle/Tests/Functional/Controller/MobileNotificationControllerTest.php", "/app/docroot/app/bundles/NotificationBundle/Tests/Functional/Controller/MobileNotificationControllerTest.php");
    }
}
