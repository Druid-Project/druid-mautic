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

/* @bundles/WebhookBundle/Tests/Unit/Http/ClientTest.php */
class __TwigTemplate_fc4dc71e5695cb17454033d4797b4ad0 extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Http;

use GuzzleHttp\\Client as GuzzleClient;
use GuzzleHttp\\Psr7\\Request;
use GuzzleHttp\\Psr7\\Response;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\WebhookBundle\\Http\\Client;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

final class ClientTest extends TestCase
{
    /**
     * @var MockObject&CoreParametersHelper
     */
    private MockObject \$parametersMock;

    /**
     * @var MockObject&GuzzleClient
     */
    private MockObject \$httpClientMock;

    private Client \$client;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->parametersMock = \$this->createMock(CoreParametersHelper::class);
        \$this->httpClientMock = \$this->createMock(GuzzleClient::class);
        \$this->client         = new Client(\$this->parametersMock, \$this->httpClientMock);
    }

    public function testPost(): void
    {
        \$method  = 'POST';
        \$url     = 'url';
        \$payload = ['payload'];
        \$siteUrl = 'siteUrl';
        \$headers = [
            'Content-Type'      => 'application/json',
            'X-Origin-Base-URL' => \$siteUrl,
        ];

        \$response = new Response();

        \$this->parametersMock->expects(\$this->once())
            ->method('get')
            ->with('site_url')
            ->willReturn(\$siteUrl);

        \$this->httpClientMock->expects(\$this->once())
            ->method('sendRequest')
            ->with(\$this->callback(function (Request \$request) use (\$method, \$url, \$headers, \$payload) {
                \$this->assertSame(\$method, \$request->getMethod());
                \$this->assertSame(\$url, \$request->getUri()->getPath());

                foreach (\$headers as \$headerName => \$headerValue) {
                    \$header = \$request->getHeader(\$headerName);
                    \$this->assertSame(\$headerValue, \$header[0]);
                }

                \$this->assertSame(json_encode(\$payload), (string) \$request->getBody());

                return true;
            }))
            ->willReturn(\$response);

        \$this->assertEquals(\$response, \$this->client->post(\$url, \$payload));
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
        return "@bundles/WebhookBundle/Tests/Unit/Http/ClientTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Unit/Http/ClientTest.php", "/app/docroot/app/bundles/WebhookBundle/Tests/Unit/Http/ClientTest.php");
    }
}
