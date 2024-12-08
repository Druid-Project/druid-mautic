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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SiteUrlEnvVarsTest.php */
class __TwigTemplate_b7474e5cfd7c04e484bbe7378487c4ca extends Template
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

use Mautic\\CoreBundle\\Loader\\EnvVars\\SiteUrlEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class SiteUrlEnvVarsTest extends TestCase
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

    public function testContextIsNullIfHostNotFound(): void
    {
        \$this->config->set('site_url', '');

        SiteUrlEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertNull(\$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HOST'));
        \$this->assertNull(\$this->envVars->get('MAUTIC_REQUEST_CONTEXT_SCHEME'));
        \$this->assertNull(\$this->envVars->get('MAUTIC_REQUEST_CONTEXT_BASE_URL'));
        \$this->assertEquals(80, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTP_PORT'));
        \$this->assertEquals(443, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTPS_PORT'));
    }

    public function testContextIsCorrectForRootDomain(): void
    {
        \$this->config->set('site_url', 'https://foobar.com');

        SiteUrlEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('foobar.com', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HOST'));
        \$this->assertEquals('https', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_SCHEME'));
        \$this->assertEquals(null, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_BASE_URL'));
        \$this->assertEquals(80, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTP_PORT'));
        \$this->assertEquals(443, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTPS_PORT'));
    }

    public function testContextIsCorrectForCustomHttpPort(): void
    {
        \$this->config->set('site_url', 'http://foobar.com:8080');

        SiteUrlEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('foobar.com', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HOST'));
        \$this->assertEquals('http', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_SCHEME'));
        \$this->assertEquals(null, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_BASE_URL'));
        \$this->assertEquals(8080, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTP_PORT'));
        \$this->assertEquals(443, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTPS_PORT'));
    }

    public function testContextIsCorrectForCustomHttpsPort(): void
    {
        \$this->config->set('site_url', 'https://foobar.com:8080');

        SiteUrlEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('foobar.com', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HOST'));
        \$this->assertEquals('https', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_SCHEME'));
        \$this->assertEquals(null, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_BASE_URL'));
        \$this->assertEquals(80, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTP_PORT'));
        \$this->assertEquals(8080, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTPS_PORT'));
    }

    public function testContextIsCorrectForUrlWithPath(): void
    {
        \$this->config->set('site_url', 'https://foobar.com/hello/there/');

        SiteUrlEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('foobar.com', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HOST'));
        \$this->assertEquals('https', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_SCHEME'));
        \$this->assertEquals('/hello/there', \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_BASE_URL'));
        \$this->assertEquals(80, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTP_PORT'));
        \$this->assertEquals(443, \$this->envVars->get('MAUTIC_REQUEST_CONTEXT_HTTPS_PORT'));
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
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SiteUrlEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SiteUrlEnvVarsTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SiteUrlEnvVarsTest.php");
    }
}
