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

/* @bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php */
class __TwigTemplate_e7130f680b0300f558af3f7caa843eb3 extends Template
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
use PHPUnit\\Framework\\TestCase;

class IntegrationTokenTest extends TestCase
{
    public function testGetters(): void
    {
        \$expires   = time() + 100;
        \$extraData = ['foo' => 'bar'];
        \$token     = new IntegrationToken('accessToken', 'refreshToken', \$expires, \$extraData);

        \$this->assertEquals('accessToken', \$token->getAccessToken());
        \$this->assertEquals('refreshToken', \$token->getRefreshToken());
        \$this->assertEquals(\$expires, \$token->getExpiresAt());
        \$this->assertEquals(\$extraData, \$token->getExtraData());
    }

    public function testIsExpired(): void
    {
        \$token = new IntegrationToken('accessToken', 'refreshToken', time() - 100);

        \$this->assertTrue(\$token->isExpired());
    }

    public function testIsExpiredIfAccessTokenIsMissing(): void
    {
        \$token = new IntegrationToken('', 'refreshToken');

        \$this->assertTrue(\$token->isExpired());
    }

    public function testIsNotExpired(): void
    {
        \$token = new IntegrationToken('accessToken', 'refreshToken', time() + 100);

        \$this->assertFalse(\$token->isExpired());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Auth/Support/Oauth2/Token/IntegrationTokenTest.php");
    }
}
