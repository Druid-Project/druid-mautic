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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php */
class __TwigTemplate_576a92fd5c556f2e53bfa91573772548 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Auth\\Support\\Oauth2\\Token;

use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\IntegrationToken;
use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\IntegrationTokenFactory;
use PHPUnit\\Framework\\TestCase;

class IntegrationTokenFactoryTest extends TestCase
{
    public function testTokenGeneratedWithExpiresIn(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
            'expires_in'    => 10,
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
        \$this->assertEquals(time() + 10, \$token->getExpiresAt());
    }

    public function testTokenGeneratedWithExpiresAt(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
            'expires_at'    => time() + 10,
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
        \$this->assertEquals(\$data['expires_at'], \$token->getExpiresAt());
    }

    public function testTokenGeneratedWithExpires(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
            'expires'       => 10,
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
        \$this->assertEquals(time() + 10, \$token->getExpiresAt());
    }

    public function testTokenGeneratedWithDefaultExpires(): void
    {
        \$factory = new IntegrationTokenFactory([], 100);
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
        \$this->assertEquals(time() + 100, \$token->getExpiresAt());
    }

    public function testTokenGeneratedWithUnexpiredTokenByDefault(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
        \$this->assertEquals(0, \$token->getExpiresAt());
    }

    public function testTokenGeneratedWithPreviousRefreshToken(): void
    {
        \$factory = new IntegrationTokenFactory();
        \$data    = [
            'access_token' => '123',
        ];

        \$previousToken = new IntegrationToken('789', '456');
        \$token         = \$factory(\$data, \$previousToken);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$previousToken->getRefreshToken(), \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
    }

    public function testTokenGeneratedWithExtraData(): void
    {
        \$factory = new IntegrationTokenFactory(['foo']);
        \$data    = [
            'access_token'  => '123',
            'refresh_token' => '456',
            'foo'           => 'bar',
            'bar'           => 'foo',
        ];

        \$token = \$factory(\$data);

        \$this->assertEquals(\$data['access_token'], \$token->getAccessToken());
        \$this->assertEquals(\$data['refresh_token'], \$token->getRefreshToken());
        \$this->assertFalse(\$token->isExpired());
        \$this->assertEquals(['foo' => 'bar'], \$token->getExtraData());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenFactoryTest.php");
    }
}
