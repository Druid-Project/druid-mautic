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

/* @bundles/CoreBundle/Doctrine/VariantMigrationTrait.php */
class __TwigTemplate_40718d07a940342a2b01bbbf86b0d3d6 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine;

use Doctrine\\DBAL\\Schema\\Schema;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
trait VariantMigrationTrait
{
    /**
     * Add variant parent/child relationship schema.
     */
    protected function addVariantSchema(Schema \$schema, \$tableName)
    {
        \$fkName    = \$this->generatePropertyName(\$tableName, 'fk', ['variant_parent_id']);
        \$idxName   = \$this->generatePropertyName(\$tableName, 'idx', ['variant_parent_id']);
        \$tableName = \"{\$this->prefix}\$tableName\";
        \$table     = \$schema->getTable(\$tableName);

        if (!\$table->hasColumn('variant_parent_id')) {
            \$this->addSql(\"ALTER TABLE \$tableName ADD variant_parent_id INT DEFAULT NULL\");
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD CONSTRAINT \".\$fkName
                .\" FOREIGN KEY (variant_parent_id) REFERENCES \$tableName (id) ON DELETE CASCADE\"
            );
            \$this->addSql(\"CREATE INDEX \$idxName ON \$tableName (variant_parent_id)\");
        } else {
            // Drop and recreate the parent FK to ensure DELETE CASCADE
            if (\$table->hasForeignKey(\$fkName)) {
                \$this->addSql(\"ALTER TABLE \$tableName DROP FOREIGN KEY \$fkName\");
            }
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD CONSTRAINT \".\$fkName
                .\" FOREIGN KEY (variant_parent_id) REFERENCES \$tableName (id) ON DELETE CASCADE\"
            );

            if (!\$table->hasIndex(\$idxName)) {
                \$this->addSql(\"CREATE INDEX \$idxName ON \$tableName (variant_parent_id)\");
            }
        }

        if (!\$table->hasColumn('variant_settings')) {
            \$this->addSql(
                \"ALTER TABLE \$tableName ADD variant_settings LONGTEXT DEFAULT NULL COMMENT '(DC2Type:array)', ADD variant_start_date DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime)'\"
            );
        }
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
        return "@bundles/CoreBundle/Doctrine/VariantMigrationTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/VariantMigrationTrait.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/VariantMigrationTrait.php");
    }
}
