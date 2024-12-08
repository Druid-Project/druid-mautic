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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ConfigEnvVarsTest.php */
class __TwigTemplate_e90c3539f675dae803e5d16336006298 extends Template
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

use Mautic\\CoreBundle\\Loader\\EnvVars\\ConfigEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ConfigEnvVarsTest extends TestCase
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

    public function testGetEnvWorks(): void
    {
        putenv('MAUTIC_FOOBAR=bar');
        \$this->config->set('foo', 'getenv(MAUTIC_FOOBAR)');

        ConfigEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('bar', \$this->envVars->get('MAUTIC_FOO'));
    }

    public function testLocalValueIsSet(): void
    {
        \$this->config->set('foo', 'bar');

        ConfigEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('bar', \$this->envVars->get('MAUTIC_FOO'));
    }

    public function testValueIsJsonEncodedIfArray(): void
    {
        \$this->config->set('foo', ['bar']);

        ConfigEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('[\"bar\"]', \$this->envVars->get('MAUTIC_FOO'));
    }

    public function testDefaultValueIsJsonEncodedIfArray(): void
    {
        \$this->config->set('foo', null);
        \$this->defaultConfig->set('foo', ['bar']);

        ConfigEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('[\"bar\"]', \$this->envVars->get('MAUTIC_FOO'));
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
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ConfigEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ConfigEnvVarsTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ConfigEnvVarsTest.php");
    }
}
