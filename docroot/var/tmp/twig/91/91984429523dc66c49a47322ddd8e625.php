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

/* @bundles/IntegrationsBundle/Helper/FieldFilterHelper.php */
class __TwigTemplate_28239a39b406c9e86cb814d5fe9a147a extends Template
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

namespace Mautic\\IntegrationsBundle\\Helper;

use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Mapping\\MappedFieldInfoInterface;

class FieldFilterHelper
{
    private int \$totalFieldCount = 0;

    /**
     * @var MappedFieldInfoInterface[]
     */
    private array \$filteredFields = [];

    public function __construct(
        private ConfigFormSyncInterface \$integrationObject
    ) {
    }

    public function filterFieldsByPage(string \$objectName, int \$page, int \$limit = 15): void
    {
        \$allFields             = \$this->integrationObject->getAllFieldsForMapping(\$objectName);
        \$this->filteredFields  = \$this->getPageOfFields(\$allFields, \$page, \$limit);
        \$this->totalFieldCount = count(\$allFields);
    }

    public function filterFieldsByKeyword(string \$objectName, string \$keyword, int \$page, int \$limit = 15): void
    {
        \$allFields            = \$this->integrationObject->getAllFieldsForMapping(\$objectName);
        \$this->filteredFields = \$this->getFieldsByKeyword(\$allFields, \$keyword);

        // Paginate filtered fields
        \$this->totalFieldCount = count(\$this->filteredFields);
        \$this->filteredFields  = \$this->getPageOfFields(\$this->filteredFields, \$page, \$limit);
    }

    public function getTotalFieldCount(): int
    {
        return \$this->totalFieldCount;
    }

    /**
     * @return MappedFieldInfoInterface[]
     */
    public function getFilteredFields(): array
    {
        return \$this->filteredFields;
    }

    /**
     * @return MappedFieldInfoInterface[]
     */
    private function getPageOfFields(array \$fields, int \$page, int \$limit): array
    {
        \$offset = (\$page - 1) * \$limit;

        return array_slice(\$fields, \$offset, \$limit, true);
    }

    /**
     * @return MappedFieldInfoInterface[]
     */
    private function getFieldsByKeyword(array \$fields, string \$keyword): array
    {
        \$found = [];

        foreach (\$fields as \$name => \$field) {
            if (!stristr(\$field->getLabel(), \$keyword)) {
                continue;
            }

            \$found[\$name] = \$field;
        }

        return \$found;
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
        return "@bundles/IntegrationsBundle/Helper/FieldFilterHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/FieldFilterHelper.php", "/app/docroot/app/bundles/IntegrationsBundle/Helper/FieldFilterHelper.php");
    }
}
