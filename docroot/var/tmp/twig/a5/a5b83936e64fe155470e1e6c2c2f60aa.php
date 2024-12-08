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

/* @bundles/CoreBundle/Tests/Functional/Service/MockHttpClientTest.php */
class __TwigTemplate_b296028e591c5f00a656361a45ed50f2 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Functional\\Service;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpClient\\Response\\MockResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class MockHttpClientTest extends MauticMysqlTestCase
{
    public function testHttpClient(): void
    {
        \$expectedResponses = [
            function (\$method, \$url, \$options): MockResponse {
                Assert::assertSame(Request::METHOD_GET, \$method);
                Assert::assertSame('https://example.com/get', \$url);
                \$body = '{\"get_method\": true}';

                return new MockResponse(\$body);
            },
            function (\$method, \$url, \$options): MockResponse {
                Assert::assertSame(Request::METHOD_POST, \$method);
                Assert::assertSame('https://example.com/post', \$url);
                \$body = '{\"post_method\": true}';

                return new MockResponse(\$body);
            },
        ];
        \$mockHttpClient = self::getContainer()->get('http_client');
        \$mockHttpClient->setResponseFactory(\$expectedResponses);

        \$response = \$mockHttpClient->request(Request::METHOD_GET, 'https://example.com/get');
        Assert::assertSame('{\"get_method\": true}', \$response->getContent());

        \$mockHttpClient = self::getContainer()->get('http_client');
        \$response       = \$mockHttpClient->request(Request::METHOD_POST, 'https://example.com/post');
        Assert::assertSame('{\"post_method\": true}', \$response->getContent());
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
        return "@bundles/CoreBundle/Tests/Functional/Service/MockHttpClientTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Functional/Service/MockHttpClientTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Functional/Service/MockHttpClientTest.php");
    }
}
