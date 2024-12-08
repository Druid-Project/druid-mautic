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

/* @bundles/CoreBundle/Doctrine/DatabasePlatform.php */
class __TwigTemplate_1f9bd29628e7aa26507217a1b0dbaa96 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine;

use Doctrine\\DBAL\\Platforms\\AbstractMySQLPlatform;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Platforms\\DB2Platform;
use Doctrine\\DBAL\\Platforms\\OraclePlatform;
use Doctrine\\DBAL\\Platforms\\PostgreSQLPlatform;
use Doctrine\\DBAL\\Platforms\\SqlitePlatform;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;

/**
 * A workaround for deprecated \\Doctrine\\DBAL\\Platforms\\AbstractPlatform::getName.
 */
class DatabasePlatform
{
    public static function getDatabasePlatform(AbstractPlatform \$platform): string
    {
        if (\$platform instanceof AbstractMySQLPlatform) {
            return 'mysql';
        }

        if (\$platform instanceof DB2Platform) {
            return 'db2';
        }

        if (\$platform instanceof OraclePlatform) {
            return 'oracle';
        }

        if (\$platform instanceof PostgreSQLPlatform) {
            return 'postgresql';
        }

        if (\$platform instanceof SQLServerPlatform) {
            return 'mssql';
        }

        if (\$platform instanceof SqlitePlatform) {
            return 'sqlite';
        }

        throw new \\RuntimeException('Unknown platform '.\$platform::class);
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
        return "@bundles/CoreBundle/Doctrine/DatabasePlatform.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/DatabasePlatform.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/DatabasePlatform.php");
    }
}
