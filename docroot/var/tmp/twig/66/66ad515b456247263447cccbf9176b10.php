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

/* @bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php */
class __TwigTemplate_75e3e9e475268b7ac4b38bae7c45aa8a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller\\Api;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DeviceApiControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testPutEditWithInexistingIdSoItShouldCreate(): void
    {
        \$contact = new Lead();
        \$this->em->persist(\$contact);
        \$this->em->flush();

        \$this->client->request(Request::METHOD_PUT, '/api/devices/99999/edit', [
            'device'            => 'desktop',
            'deviceOsName'      => 'Ubuntu',
            'deviceOsShortName' => 'UBT',
            'deviceOsPlatform'  => 'x64',
            'lead'              => \$contact->getId(),
        ]);

        \$clientResponse = \$this->client->getResponse();

        Assert::assertSame(Response::HTTP_CREATED, \$clientResponse->getStatusCode());
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
        return "@bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/Api/DeviceApiControllerFunctionalTest.php");
    }
}
