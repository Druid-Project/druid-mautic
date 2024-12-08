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

/* @bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php */
class __TwigTemplate_faf645932e1c466221220f038fd3b84a extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\DBAL\\Query\\QueryBuilder as DbalQueryBuilder;
use Doctrine\\ORM\\QueryBuilder as OrmQueryBuilder;

/**
 * Interface CustomFieldRepositoryInterface.
 */
interface CustomFieldRepositoryInterface
{
    /**
     * Return an array of groups supported by the custom fields for this entity.
     *
     * @return array
     */
    public function getFieldGroups();

    /**
     * Get the base DBAL query builder for entities.
     *
     * @return DbalQueryBuilder
     */
    public function getEntitiesDbalQueryBuilder();

    /**
     * Get the base DBAL query builder for entities.
     *
     * @return OrmQueryBuilder
     */
    public function getEntitiesOrmQueryBuilder(\$order);

    /**
     * Requires table alias.
     *
     * @return mixed
     */
    public function getTableAlias();
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php", "/app/docroot/app/bundles/LeadBundle/Entity/CustomFieldRepositoryInterface.php");
    }
}
