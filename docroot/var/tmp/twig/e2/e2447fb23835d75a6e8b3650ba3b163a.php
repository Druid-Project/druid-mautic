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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php */
class __TwigTemplate_aec9d068057325aaa69587f73dd09c57 extends Template
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

use Mautic\\CoreBundle\\Loader\\EnvVars\\SAMLEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class SAMLEnvVarsTest extends TestCase
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

    public function testEntityIdIsSetToConfigIfNotEmpty(): void
    {
        \$this->config->set('saml_idp_entity_id', 'foobar');
        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('foobar', \$this->envVars->get('MAUTIC_SAML_ENTITY_ID'));
    }

    public function testEntityIdIsSetToSiteUrlIfNotEmpty(): void
    {
        \$this->config->set('saml_idp_entity_id', '');
        \$this->config->set('site_url', 'https://foobar.com/happydays');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('https://foobar.com', \$this->envVars->get('MAUTIC_SAML_ENTITY_ID'));
    }

    public function testEntityIdIsSetToMauticByDefault(): void
    {
        \$this->config->set('saml_idp_entity_id', '');
        \$this->config->set('site_url', '');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('mautic', \$this->envVars->get('MAUTIC_SAML_ENTITY_ID'));
    }

    public function testLoginPathIsDefaultIfSamlIsDisabled(): void
    {
        \$this->config->set('saml_idp_metadata', 'enabled');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('/s/saml/login', \$this->envVars->get('MAUTIC_SAML_LOGIN_PATH'));
        \$this->assertEquals('/s/saml/login_check', \$this->envVars->get('MAUTIC_SAML_LOGIN_CHECK_PATH'));
    }

    public function testCorrectLoginPathIfSamlIsEnabled(): void
    {
        \$this->config->set('saml_idp_metadata', '');

        SAMLEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);

        \$this->assertEquals('/s/login', \$this->envVars->get('MAUTIC_SAML_LOGIN_PATH'));
        \$this->assertEquals('/s/login_check', \$this->envVars->get('MAUTIC_SAML_LOGIN_CHECK_PATH'));
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
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/SAMLEnvVarsTest.php");
    }
}