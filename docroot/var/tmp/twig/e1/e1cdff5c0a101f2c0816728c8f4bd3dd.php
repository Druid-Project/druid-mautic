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

/* @bundles/IntegrationsBundle/Migration/Engine.php */
class __TwigTemplate_0e5b6f3feff76da5aaff8e72b494553c extends Template
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

namespace Mautic\\IntegrationsBundle\\Migration;

use Doctrine\\ORM\\EntityManager;
use Mautic\\IntegrationsBundle\\Exception\\PathNotFoundException;

class Engine
{
    private string \$migrationsPath;

    public function __construct(
        private EntityManager \$entityManager,
        private string \$tablePrefix,
        string \$pluginPath,
        private string \$bundleName
    ) {
        \$this->migrationsPath = \$pluginPath.'/Migrations/';
    }

    /**
     * Run available migrations.
     */
    public function up(): void
    {
        try {
            \$migrationClasses = \$this->getMigrationClasses();
        } catch (PathNotFoundException \$e) {
            return;
        }

        if (!\$migrationClasses) {
            return;
        }

        \$this->entityManager->beginTransaction();

        try {
            foreach (\$migrationClasses as \$migrationClass) {
                /** @var AbstractMigration \$migration */
                \$migration = new \$migrationClass(\$this->entityManager, \$this->tablePrefix);

                if (\$migration->shouldExecute()) {
                    \$migration->execute();
                }
            }

            \$this->entityManager->commit();
        } catch (\\Doctrine\\DBAL\\Exception \$e) {
            \$this->entityManager->rollback();

            throw \$e;
        }
    }

    /**
     * Get migration classes to proceed.
     *
     * @return string[]
     */
    private function getMigrationClasses(): array
    {
        \$migrationFileNames = \$this->getMigrationFileNames();
        \$migrationClasses   = [];

        foreach (\$migrationFileNames as \$fileName) {
            require_once \$this->migrationsPath.\$fileName;
            \$className          = preg_replace('/\\\\.[^.\\\\s]{3,4}\$/', '', \$fileName);
            \$className          = 'MauticPlugin\\\\'.\$this->bundleName.\"\\Migrations\\\\{\$className}\";
            \$migrationClasses[] = \$className;
        }

        return \$migrationClasses;
    }

    /**
     * Get migration file names.
     *
     * @return string[]
     */
    private function getMigrationFileNames(): array
    {
        \$fileNames = @scandir(\$this->migrationsPath);

        if (false === \$fileNames) {
            throw new PathNotFoundException(sprintf(\"'%s' directory not found\", \$this->migrationsPath));
        }

        return array_diff(\$fileNames, ['.', '..']);
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
        return "@bundles/IntegrationsBundle/Migration/Engine.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Migration/Engine.php", "/app/docroot/app/bundles/IntegrationsBundle/Migration/Engine.php");
    }
}
