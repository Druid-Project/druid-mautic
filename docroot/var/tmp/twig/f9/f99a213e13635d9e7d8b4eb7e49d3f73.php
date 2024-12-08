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

/* @bundles/PointBundle/Tests/Controller/TriggerControllerTest.php */
class __TwigTemplate_bec1a62194b396e7f15e60c17a8d59f8 extends Template
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

namespace Mautic\\PointBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

final class TriggerControllerTest extends MauticMysqlTestCase
{
    public function testIndexActionWithoutPage(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/points/triggers');

        \$this->assertEquals(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
    }

    public function testIndexActionWithPage(): void
    {
        \$this->client->request(Request::METHOD_GET, '/s/points/triggers/1');

        \$this->assertEquals(Response::HTTP_OK, \$this->client->getResponse()->getStatusCode());
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
        return "@bundles/PointBundle/Tests/Controller/TriggerControllerTest.php";
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
        return new Source("", "@bundles/PointBundle/Tests/Controller/TriggerControllerTest.php", "/app/docroot/app/bundles/PointBundle/Tests/Controller/TriggerControllerTest.php");
    }
}
