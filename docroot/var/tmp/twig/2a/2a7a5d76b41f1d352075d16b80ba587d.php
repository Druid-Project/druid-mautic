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

/* @bundles/LeadBundle/Field/SchemaDefinition.php */
class __TwigTemplate_c74a6fe02973c52c60b4ea253e6088c7 extends Template
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

use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class SchemaDefinition
{
    /**
     * Max length of VARCHAR fields.
     * Fields: charLengthLimit.
     */
    public const MAX_VARCHAR_LENGTH = 191;

    /**
     * Get the MySQL database type based on the field type
     * Use a static function so that it's accessible from DoctrineSubscriber
     * without causing a circular service injection error.
     */
    public static function getSchemaDefinition(string \$alias, string \$type, bool \$isUnique = false, int \$length = null): array
    {
        \$options = ['notnull' => false];

        // Unique is always a string in order to control index length
        if (\$isUnique) {
            return [
                'name'    => \$alias,
                'type'    => 'string',
                'options' => \$options,
            ];
        }

        switch (\$type) {
            case 'datetime':
            case 'date':
            case 'time':
            case 'boolean':
                \$schemaType = \$type;
                break;
            case 'number':
                \$schemaType = 'float';
                break;
            case 'timezone':
            case 'locale':
            case 'country':
            case 'email':
            case 'lookup':
            case 'select':
            case 'region':
            case 'tel':
            case 'url':
                \$schemaType        = 'string';
                \$options['length'] = \$length;
                break;
            case 'text':
                \$schemaType        = (str_contains(\$alias, 'description')) ? 'text' : 'string';
                \$options['length'] = \$length;
                break;
            case 'multiselect':
                \$schemaType        = 'text';
                \$options['length'] = 65535;
                break;
            case 'html':
            default:
                \$schemaType = 'text';
        }

        if ('string' === \$schemaType && empty(\$options['length'])) {
            \$options['length'] = self::MAX_VARCHAR_LENGTH;
        }

        return [
            'name'    => \$alias,
            'type'    => \$schemaType,
            'options' => \$options,
        ];
    }

    /**
     * @param mixed[] \$schemaDefinition
     */
    public static function getFieldCharLengthLimit(array \$schemaDefinition): ?int
    {
        \$length = \$schemaDefinition['options']['length'] ?? null;
        \$type   = \$schemaDefinition['type'] ?? null;

        return match (\$type) {
            'string' => \$length ?? ClassMetadataBuilder::MAX_VARCHAR_INDEXED_LENGTH,
            'text'   => \$length,
            default  => null,
        };
    }

    /**
     * Get the MySQL database type based on the field type.
     */
    public function getSchemaDefinitionNonStatic(string \$alias, string \$type, bool \$isUnique = false, int \$length = null): array
    {
        return self::getSchemaDefinition(\$alias, \$type, \$isUnique, \$length);
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
        return "@bundles/LeadBundle/Field/SchemaDefinition.php";
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
        return new Source("", "@bundles/LeadBundle/Field/SchemaDefinition.php", "/app/docroot/app/bundles/LeadBundle/Field/SchemaDefinition.php");
    }
}
