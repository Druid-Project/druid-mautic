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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php */
class __TwigTemplate_1c90080d26486d68f876c3dd27c4aa90 extends Template
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

use Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token\\TokenPersistenceFactory;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\TestCase;

class TokenPersistenceFactoryTest extends TestCase
{
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$integrationsHelper;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$integration;

    public function setup(): void
    {
        \$this->integrationsHelper = \$this->createMock(IntegrationsHelper::class);
        \$this->integration        = \$this->createMock(Integration::class);
    }

    public function testCreate(): void
    {
        \$accessToken  = 'access_token';
        \$refreshToken = 'refresh_token';
        \$expiresAt    = 10;
        \$apiKeys      = [
            'access_token'  => \$accessToken,
            'refresh_token' => \$refreshToken,
            'expires_at'    => \$expiresAt,
        ];

        \$this->integration->expects(\$this->any())
            ->method('getApiKeys')
            ->willReturn(\$apiKeys);

        \$factory          = new TokenPersistenceFactory(\$this->integrationsHelper);
        \$tokenPersistence = \$factory->create(\$this->integration);
        \$this->assertTrue(\$tokenPersistence->hasToken());
    }

    public function testCreateWithInvalidToken(): void
    {
        \$accessToken  = null;
        \$refreshToken = 'refresh_token';
        \$expiresAt    = 10;
        \$apiKeys      = [
            'access_token'  => \$accessToken,
            'refresh_token' => \$refreshToken,
            'expires_at'    => \$expiresAt,
        ];

        \$this->integration->expects(\$this->any())
            ->method('getApiKeys')
            ->willReturn(\$apiKeys);

        \$factory          = new TokenPersistenceFactory(\$this->integrationsHelper);
        \$tokenPersistence = \$factory->create(\$this->integration);
        \$this->assertFalse(\$tokenPersistence->hasToken());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/TokenPersistenceFactoryTest.php");
    }
}
