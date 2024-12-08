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

/* @bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php */
class __TwigTemplate_9dd8905a6814db2b46a5fe8045fea8b5 extends Template
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

use Mautic\\CoreBundle\\Loader\\EnvVars\\MigrationsEnvVars;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;

class MigrationEnvVarsTest extends TestCase
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

    public function testTablePrefixIsSetOnMigrations(): void
    {
        \$this->config->set('db_table_prefix', 'foobar_');
        MigrationsEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);
        \$this->assertEquals('foobar_migrations', \$this->envVars->get('MAUTIC_MIGRATIONS_TABLE_NAME'));
    }

    public function testTablePrefixEmptyJustIncludesDefaultTableName(): void
    {
        \$this->config->set('db_table_prefix', '');
        MigrationsEnvVars::load(\$this->config, \$this->defaultConfig, \$this->envVars);
        \$this->assertEquals('migrations', \$this->envVars->get('MAUTIC_MIGRATIONS_TABLE_NAME'));
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
        return "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Loader/EnvVars/MigrationEnvVarsTest.php");
    }
}
