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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ElFinderEnvVarsTest.php */
class __TwigTemplate_aa42f8c661e35edb0cb885f62a2c5e17 extends Template
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

use Mautic\\CoreBundle\\Loader\\EnvVars\\ElFinderEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ElFinderEnvVarsTest extends TestCase
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

    public function testPathAndUrlSet(): void
    {
        \$this->config->set('image_path', 'images');
        \$this->config->set('site_url', 'https://foo.bar/test');

        ElFinderEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);
        \$this->assertStringEndsWith('images', \$this->envVars->get('MAUTIC_EL_FINDER_PATH'));
        \$this->assertEquals('https://foo.bar/test/images', \$this->envVars->get('MAUTIC_EL_FINDER_URL'));
    }

    public function testTrailingSlashHandled(): void
    {
        \$this->config->set('image_path', 'images/');
        \$this->config->set('site_url', 'https://foo.bar/test/');

        ElFinderEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);
        \$this->assertStringEndsWith('images', \$this->envVars->get('MAUTIC_EL_FINDER_PATH'));
        \$this->assertEquals('https://foo.bar/test/images', \$this->envVars->get('MAUTIC_EL_FINDER_URL'));
    }

    public function testThatTheLocalRootHasPriorityOverTheKernelRootDir(): void
    {
        \$this->defaultConfig->set('local_root', '/foo/bar');
        \$this->config->set('image_path', 'images/');

        ElFinderEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);
        \$this->assertSame('/foo/bar/images', \$this->envVars->get('MAUTIC_EL_FINDER_PATH'));
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
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ElFinderEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ElFinderEnvVarsTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/ElFinderEnvVarsTest.php");
    }
}
