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

/* @bundles/ApiBundle/Helper/EntityResultHelper.php */
class __TwigTemplate_f9ad6650aba37c09bba4e476f9467c92 extends Template
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

namespace Mautic\\ApiBundle\\Helper;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;

class EntityResultHelper
{
    /**
     * @param array<mixed>|Paginator<mixed> \$results
     * @param callable|null                 \$callback
     *
     * @return array<mixed>|\\ArrayObject<int,mixed>
     */
    public function getArray(\$results, \$callback = null)
    {
        \$entities = [];

        // we have to convert them from paginated proxy functions to entities in order for them to be
        // returned by the serializer/rest bundle
        foreach (\$results as \$key => \$entityRow) {
            \$entities[\$key] = \$this->getEntityData(\$entityRow);

            if (is_callable(\$callback)) {
                \$callback(\$entities[\$key]);
            }
        }

        // solving array/object discrepancy for empty values
        if (\$this->isKeyedById(\$results) && empty(\$entities)) {
            \$entities = new \\ArrayObject();
        }

        return \$entities;
    }

    /**
     * @param mixed \$entityRow
     *
     * @return mixed
     */
    private function getEntityData(\$entityRow)
    {
        if (is_array(\$entityRow) && isset(\$entityRow[0])) {
            return \$this->getDataForArray(\$entityRow);
        }

        return \$entityRow;
    }

    /**
     * @param array \$array
     *
     * @return mixed
     */
    private function getDataForArray(\$array)
    {
        if (is_object(\$array[0])) {
            return \$this->getDataForObject(\$array);
        }

        return \$array[0];
    }

    /**
     * @param object \$object
     *
     * @return mixed
     */
    private function getDataForObject(\$object)
    {
        foreach (\$object as \$key => \$value) {
            if (0 === \$key) {
                continue;
            }

            \$object[0]->\$key = \$value;
        }

        return \$object[0];
    }

    /**
     * @param array<mixed>|Paginator<mixed> \$results
     */
    private function isKeyedById(\$results): bool
    {
        return !\$results instanceof Paginator;
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
        return "@bundles/ApiBundle/Helper/EntityResultHelper.php";
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
        return new Source("", "@bundles/ApiBundle/Helper/EntityResultHelper.php", "/app/docroot/app/bundles/ApiBundle/Helper/EntityResultHelper.php");
    }
}
