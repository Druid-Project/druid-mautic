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

/* @bundles/LeadBundle/Segment/TableSchemaColumnsCache.php */
class __TwigTemplate_f781455162187b0e13aa6bc4ff3d10eb extends Template
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

namespace Mautic\\LeadBundle\\Segment;

use Doctrine\\ORM\\EntityManager;

class TableSchemaColumnsCache
{
    /**
     * @var array
     */
    private \$cache;

    public function __construct(
        private EntityManager \$entityManager
    ) {
        \$this->cache         = [];
    }

    /**
     * @return array|false
     */
    public function getColumns(\$tableName)
    {
        if (!isset(\$this->cache[\$tableName])) {
            \$columns                 = \$this->entityManager->getConnection()->createSchemaManager()->listTableColumns(\$tableName);
            \$this->cache[\$tableName] = \$columns ?: [];
        }

        return \$this->cache[\$tableName];
    }

    /**
     * @return \$this
     */
    public function clear()
    {
        \$this->cache = [];

        return \$this;
    }

    /**
     * @return string
     */
    public function getCurrentDatabaseName()
    {
        return \$this->entityManager->getConnection()->getDatabase();
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
        return "@bundles/LeadBundle/Segment/TableSchemaColumnsCache.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/TableSchemaColumnsCache.php", "/app/docroot/app/bundles/LeadBundle/Segment/TableSchemaColumnsCache.php");
    }
}
