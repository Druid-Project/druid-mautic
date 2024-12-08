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

/* @bundles/AssetBundle/Tests/Controller/PublicControllerFunctionalTest.php */
class __TwigTemplate_4dd5b24bdb6538e9803017ec77a80a3b extends Template
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

namespace Mautic\\AssetBundle\\Tests\\Controller;

use Mautic\\AssetBundle\\Entity\\Download;
use Mautic\\AssetBundle\\Tests\\Asset\\AbstractAssetTest;
use Symfony\\Component\\HttpFoundation\\Response;

class PublicControllerFunctionalTest extends AbstractAssetTest
{
    /**
     * Download action should return the file content.
     */
    public function testDownloadActionStreamByDefault(): void
    {
        \$assetSlug = \$this->asset->getId().':'.\$this->asset->getAlias();

        \$this->client->request('GET', '/asset/'.\$assetSlug);
        ob_start();
        \$response = \$this->client->getResponse();
        \$response->sendContent();
        \$content = ob_get_contents();
        ob_end_clean();

        \$this->assertSame(Response::HTTP_OK, \$response->getStatusCode());
        \$this->assertSame(\$this->expectedMimeType, \$response->headers->get('Content-Type'));
        \$this->assertNotSame(\$this->expectedContentDisposition.\$this->asset->getOriginalFileName(), \$response->headers->get('Content-Disposition'));
        \$this->assertEquals(\$this->expectedPngContent, \$content);
    }

    /**
     * Download action should return the file content.
     */
    public function testDownloadActionStreamIsZero(): void
    {
        \$assetSlug = \$this->asset->getId().':'.\$this->asset->getAlias();

        \$this->client->request('GET', '/asset/'.\$assetSlug.'?stream=0');
        ob_start();
        \$response = \$this->client->getResponse();
        \$response->sendContent();
        \$content = ob_get_contents();
        ob_end_clean();

        \$this->assertSame(Response::HTTP_OK, \$response->getStatusCode());
        \$this->assertSame(\$this->expectedContentDisposition.\$this->asset->getOriginalFileName(), \$response->headers->get('Content-Disposition'));
        \$this->assertEquals(\$this->expectedPngContent, \$content);
    }

    /**
     * Download action with UTM should return the file content.
     */
    public function testDownloadActionWithUTM(): void
    {
        \$assetSlug = \$this->asset->getId().':'.\$this->asset->getAlias().'?utm_source=test2&utm_medium=test3&utm_campaign=test6&utm_term=test4&utm_content=test5';

        \$this->client->request('GET', '/asset/'.\$assetSlug);
        ob_start();
        \$response = \$this->client->getResponse();
        \$response->sendContent();
        \$content = ob_get_contents();
        ob_end_clean();

        \$this->assertSame(Response::HTTP_OK, \$response->getStatusCode());
        \$this->assertSame(\$this->expectedMimeType, \$response->headers->get('Content-Type'));
        \$this->assertNotSame(\$this->expectedContentDisposition.\$this->asset->getOriginalFileName(), \$response->headers->get('Content-Disposition'));
        \$this->assertEquals(\$this->expectedPngContent, \$content);

        \$downloadRepo = \$this->em->getRepository(Download::class);

        /**
         * @var Download \$download
         */
        \$download = \$downloadRepo->findOneBy(['asset' => \$this->asset]);
        \$this->assertSame('test2', \$download->getUtmSource());
        \$this->assertSame('test3', \$download->getUtmMedium());
        \$this->assertSame('test4', \$download->getUtmTerm());
        \$this->assertSame('test5', \$download->getUtmContent());
        \$this->assertSame('test6', \$download->getUtmCampaign());
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
        return "@bundles/AssetBundle/Tests/Controller/PublicControllerFunctionalTest.php";
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
        return new Source("", "@bundles/AssetBundle/Tests/Controller/PublicControllerFunctionalTest.php", "/app/docroot/app/bundles/AssetBundle/Tests/Controller/PublicControllerFunctionalTest.php");
    }
}
