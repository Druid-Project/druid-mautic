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

/* @bundles/CoreBundle/Entity/FiltersEntityTrait.php */
class __TwigTemplate_d029c3281877d9d65d605e401dbdabb4 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Trait FiltersEntityTrait.
 */
trait FiltersEntityTrait
{
    /**
     * @var array
     */
    private \$filters = [];

    protected static function addFiltersMetadata(ClassMetadataBuilder \$builder)
    {
        \$builder->createField('filters', 'array')
                ->columnName('filters')
                ->nullable()
                ->build();
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return \$this->filters ?: [];
    }

    /**
     * @param array \$filters
     *
     * @return \$this
     */
    public function setFilters(\$filters)
    {
        \$this->isChanged('filters', \$filters);
        \$this->filters = \$filters;

        return \$this;
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
        return "@bundles/CoreBundle/Entity/FiltersEntityTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/FiltersEntityTrait.php", "/app/docroot/app/bundles/CoreBundle/Entity/FiltersEntityTrait.php");
    }
}
