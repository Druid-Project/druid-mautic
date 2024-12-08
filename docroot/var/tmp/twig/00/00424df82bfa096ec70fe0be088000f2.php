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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php */
class __TwigTemplate_993b993bcaf7db3c1a2735c6ceeaaf0e extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Loader\\EnvVars;

use Mautic\\CoreBundle\\Loader\\EnvVars\\ApiEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ApiEnvVarsTest extends TestCase
{
    /**
     * @var ParameterBag
     */
    protected \$config;

    /**
     * @var ParameterBag
     */
    protected \$defaultConfig;

    /**
     * @var ParameterBag
     */
    protected \$envVars;

    protected function setUp(): void
    {
        \$this->config        = new ParameterBag();
        \$this->defaultConfig = new ParameterBag();
        \$this->envVars       = new ParameterBag();
    }

    public function testOauth2TokenLifetimesAreCalculatedWhenSet(): void
    {
        \$this->config->set('api_oauth2_access_token_lifetime', 2);
        \$this->config->set('api_oauth2_refresh_token_lifetime', 2);

        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals(120, \$this->envVars->get('MAUTIC_API_OAUTH2_ACCESS_TOKEN_LIFETIME'));
        \$this->assertEquals(172800, \$this->envVars->get('MAUTIC_API_OAUTH2_REFRESH_TOKEN_LIFETIME'));
    }

    public function testOauth2TokenLifetimesAreDefaultWhenNotSet(): void
    {
        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals(3600, \$this->envVars->get('MAUTIC_API_OAUTH2_ACCESS_TOKEN_LIFETIME'));
        \$this->assertEquals(1_209_600, \$this->envVars->get('MAUTIC_API_OAUTH2_REFRESH_TOKEN_LIFETIME'));
    }

    public function testRateLimitIsEnabled(): void
    {
        \$this->config->set('api_rate_limiter_limit', 100);

        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertTrue(\$this->envVars->get('MAUTIC_API_RATE_LIMIT_ENABLED'));
    }

    public function testRateLimitIsDisabled(): void
    {
        ApiEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertFalse(\$this->envVars->get('MAUTIC_API_RATE_LIMIT_ENABLED'));
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
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ApiEnvVarsTest.php");
    }
}
