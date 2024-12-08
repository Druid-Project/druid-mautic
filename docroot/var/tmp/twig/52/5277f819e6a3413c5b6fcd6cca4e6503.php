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

/* @bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php */
class __TwigTemplate_5131eda87a2a79d0f781c4d28118f3d3 extends Template
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

namespace Mautic\\AssetBundle\\Tests\\Controller\\Api;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class AssetApiControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testCreateNewRemoteAsset(): void
    {
        \$payload = [
            'file'            => 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf',
            'storageLocation' => 'remote',
            'title'           => 'title',
        ];
        \$this->client->request('POST', 'api/assets/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(201, \$clientResponse->getStatusCode(), \$clientResponse->getContent());
        \$response = json_decode(\$clientResponse->getContent(), true);
        \$this->assertEquals(\$payload['title'], \$response['asset']['title']);
        \$this->assertEquals(\$payload['storageLocation'], \$response['asset']['storageLocation']);
        \$this->assertStringContainsString('application/pdf', \$response['asset']['mime']);
        \$this->assertStringContainsString('pdf', \$response['asset']['extension']);
        \$this->assertNotNull(\$response['asset']['size']);
    }

    public function testCreateNewRemoteAssetWithVulnerableFile(): void
    {
        \$payload = [
            'file'            => 'file:///etc/passwd',
            'storageLocation' => 'remote',
            'title'           => 'title',
        ];
        \$this->client->request('POST', 'api/assets/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(400, \$clientResponse->getStatusCode(), \$clientResponse->getContent());
        \$this->assertEquals('{\"errors\":[{\"code\":400,\"message\":\"remotePath: The remote should be a valid URL.\",\"details\":{\"remotePath\":[\"The remote should be a valid URL.\"]}}]}', \$clientResponse->getContent());
    }

    public function testCreateNewLocalAsset(): void
    {
        \$assetsPath = \$this->client->getKernel()->getContainer()->getParameter('mautic.upload_dir');
        file_put_contents(\$assetsPath.'/file.txt', 'test');

        \$payload = [
            'file'            => 'file.txt',
            'storageLocation' => 'local',
            'title'           => 'title',
        ];
        \$this->client->request('POST', 'api/assets/new', \$payload);
        \$clientResponse = \$this->client->getResponse();
        \$this->assertSame(201, \$clientResponse->getStatusCode(), \$clientResponse->getContent());
        \$response = json_decode(\$clientResponse->getContent(), true);
        \$this->assertEquals(\$payload['title'], \$response['asset']['title']);
        \$this->assertEquals(\$payload['storageLocation'], \$response['asset']['storageLocation']);
        \$this->assertStringContainsString('text/plain', \$response['asset']['mime']);
        \$this->assertNotNull(\$response['asset']['size']);
        \$this->assertStringContainsString('txt', \$response['asset']['extension']);
        unlink(\$assetsPath.'/file.txt');
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
        return "@bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php", "/app/docroot/app/bundles/AssetBundle/Tests/Controller/Api/AssetApiControllerFunctionalTest.php");
    }
}
