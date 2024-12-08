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

/* @bundles/ApiBundle/Tests/Functional/Oauth2Test.php */
class __TwigTemplate_4b043a1c5385cff3bb909f8a30eb1ddf extends Template
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

namespace Mautic\\ApiBundle\\Tests\\Functional;

use Mautic\\CoreBundle\\Test\\IsolatedTestTrait;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * This test must run in a separate process because it sets the global constant
 * MAUTIC_INSTALLER which breaks other tests.
 *
 * @runTestsInSeparateProcesses
 *
 * @preserveGlobalState disabled
 */
final class Oauth2Test extends MauticMysqlTestCase
{
    use IsolatedTestTrait;

    protected function setUp(): void
    {
        \$this->useCleanupRollback = false;

        parent::setUp();
    }

    public function testAuthWithInvalidCredentials(): void
    {
        \$this->client->enableReboot();

        // Disable the default logging in via username and password.
        \$this->clientServer = [];
        \$this->setUpSymfony(\$this->configParams);

        \$this->client->request(
            Request::METHOD_POST,
            '/oauth/v2/token',
            [
                'grant_type'    => 'client_credentials',
                'client_id'     => 'unicorn',
                'client_secret' => 'secretUnicorn',
            ]
        );

        \$response = \$this->client->getResponse();
        Assert::assertSame(400, \$response->getStatusCode(), \$response->getContent());
        Assert::assertSame(
            '{\"errors\":[{\"message\":\"The client credentials are invalid\",\"code\":400,\"type\":\"invalid_client\"}]}',
            \$response->getContent()
        );
    }

    public function testAuthWithInvalidAccessToken(): void
    {
        \$this->client->enableReboot();

        // Disable the default logging in via username and password.
        \$this->clientServer = [];
        \$this->setUpSymfony(\$this->configParams);

        \$this->client->request(
            Request::METHOD_GET,
            '/api/users',
            [],
            [],
            [
                'HTTP_Authorization' => 'Bearer unicorn_token',
            ],
        );

        \$response = \$this->client->getResponse();
        Assert::assertSame(401, \$response->getStatusCode(), \$response->getContent());
        Assert::assertSame('{\"errors\":[{\"message\":\"The access token provided is invalid.\",\"code\":401,\"type\":\"invalid_grant\"}]}', \$response->getContent());
    }

    public function testAuthWorkflow(): void
    {
        \$this->client->disableReboot();

        // Create OAuth2 credentials.
        \$crawler    = \$this->client->request(Request::METHOD_GET, 's/credentials/new');
        \$saveButton = \$crawler->selectButton('Save');
        \$form       = \$saveButton->form();
        \$form['client[name]']->setValue('Auth Test');
        \$form['client[redirectUris]']->setValue('https://test.org');

        \$crawler = \$this->client->submit(\$form);
        Assert::assertTrue(\$this->client->getResponse()->isOk(), \$this->client->getResponse()->getContent());

        \$clientPublicKey = \$crawler->filter('input#client_publicId')->attr('value');
        \$clientSecretKey = \$crawler->filter('input#client_secret')->attr('value');

        // Disable the default logging in via username and password.
        \$this->clientServer = [];
        \$this->setUpSymfony(\$this->configParams);

        // Get the access token.
        \$this->client->request(
            Request::METHOD_POST,
            '/oauth/v2/token',
            [
                'grant_type'    => 'client_credentials',
                'client_id'     => \$clientPublicKey,
                'client_secret' => \$clientSecretKey,
            ],
        );

        \$response = \$this->client->getResponse();
        Assert::assertSame(200, \$response->getStatusCode(), \$response->getContent());
        \$payload     = json_decode(\$response->getContent(), true);
        \$accessToken = \$payload['access_token'];
        Assert::assertNotEmpty(\$accessToken);

        // Test that the access token works by fetching users via API.
        \$this->client->request(
            Request::METHOD_GET,
            '/api/users',
            [],
            [],
            [
                'HTTP_Authorization' => \"Bearer {\$accessToken}\",
            ],
        );

        \$response = \$this->client->getResponse();
        Assert::assertSame(200, \$response->getStatusCode());
        Assert::assertStringContainsString('\"users\":[', \$response->getContent());
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
        return "@bundles/ApiBundle/Tests/Functional/Oauth2Test.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/Functional/Oauth2Test.php", "/app/docroot/app/bundles/ApiBundle/Tests/Functional/Oauth2Test.php");
    }
}
