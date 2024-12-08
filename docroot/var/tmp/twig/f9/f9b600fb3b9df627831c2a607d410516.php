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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersion.php */
class __TwigTemplate_be2538117807bae75678b3e8e9a7bad7 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

use Doctrine\\ORM\\EntityManager;
use Mautic\\InstallBundle\\Configurator\\Step\\DoctrineStep;

class CheckDatabaseDriverAndVersion extends AbstractPreUpdateCheck
{
    public function __construct(
        private EntityManager \$em
    ) {
    }

    public function runCheck(): PreUpdateCheckResult
    {
        \$metadata   = \$this->getUpdateCandidateMetadata();
        \$connection = \$this->em->getConnection();

        // Version strings are in the format 10.3.30-MariaDB-1:10.3.30+maria~focal-log
        \$version  = \$connection->executeQuery('SELECT VERSION()')->fetchOne();

        // Platform class names are in the format Doctrine\\DBAL\\Platforms\\MariaDb1027Platform
        \$platform = strtolower(\$connection->getDatabasePlatform()::class);

        /**
         * The second case is for MariaDB < 10.2, where Doctrine reports it as MySQLPlatform. Here we can use a little
         * help from the version string, which contains \"MariaDB\" in that case: 10.1.48-MariaDB-1~bionic.
         */
        if (str_contains(\$platform, 'mariadb') || str_contains(strtolower(\$version), 'mariadb')) {
            \$minSupported = \$metadata->getMinSupportedMariaDbVersion();
        } elseif (str_contains(\$platform, 'mysql')) {
            \$minSupported = \$metadata->getMinSupportedMySqlVersion();
        } else {
            \$supportedDrivers = implode(', ', DoctrineStep::getDriverKeys());

            return new PreUpdateCheckResult(false, \$this, [new PreUpdateCheckError('mautic.core.update.check.database_driver',
                [
                    '%currentdriver%'    => \$platform,
                    '%supporteddrviers%' => \$supportedDrivers,
                ]
            )]);
        }

        if (true !== version_compare(\$version, \$minSupported, 'gt')) {
            return new PreUpdateCheckResult(false, \$this, [new PreUpdateCheckError('mautic.core.update.check.database_version',
                [
                    '%currentversion%'    => \$version,
                    '%mysqlminversion%'   => \$metadata->getMinSupportedMySqlVersion(),
                    '%mariadbminversion%' => \$metadata->getMinSupportedMariaDbVersion(),
                ]),
            ]);
        }

        return new PreUpdateCheckResult(true, \$this);
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
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersion.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersion.php", "/app/docroot/app/bundles/CoreBundle/Helper/Update/PreUpdateChecks/CheckDatabaseDriverAndVersion.php");
    }
}
