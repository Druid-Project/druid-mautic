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

/* @bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php */
class __TwigTemplate_2fbc495d2283d55546ecbbb52112c9bf extends Template
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

namespace Mautic\\LeadBundle\\Field;

class FieldsWithUniqueIdentifier
{
    /**
     * @var array<mixed>
     */
    private array \$uniqueIdentifierFields = [];

    public function __construct(
        private FieldList \$fieldList
    ) {
    }

    /**
     * Retrieves a list of cached published fields that are unique identifiers.
     *
     * @param array<mixed> \$filters
     *
     * @return array<mixed>
     */
    public function getFieldsWithUniqueIdentifier(array \$filters = []): array
    {
        \$filters = \$this->prepareFilters(\$filters);

        \$key = base64_encode(json_encode(\$filters));
        if (!isset(\$this->uniqueIdentifierFields[\$key])) {
            \$this->uniqueIdentifierFields[\$key] = \$this->fieldList->getFieldList(false, true, \$filters);
        }

        return \$this->uniqueIdentifierFields[\$key];
    }

    /**
     * Retrieves a list of published fields that are unique identifiers fresh from the DB each time.
     *
     * @param array<mixed> \$filters
     *
     * @return array<mixed>
     */
    public function getLiveFields(array \$filters = []): array
    {
        \$filters = \$this->prepareFilters(\$filters);

        return \$this->fieldList->getFieldList(false, true, \$filters);
    }

    /**
     * @param array<mixed> \$filters
     *
     * @return array<mixed>
     */
    private function prepareFilters(array \$filters): array
    {
        \$filters['isPublished'] ??= true;
        \$filters['isUniqueIdentifer'] ??= true;
        \$filters['object'] ??= 'lead';

        return \$filters;
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
        return "@bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php";
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
        return new Source("", "@bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php", "/app/docroot/app/bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php");
    }
}
