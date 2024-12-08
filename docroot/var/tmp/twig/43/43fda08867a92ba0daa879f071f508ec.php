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

/* @bundles/LeadBundle/Helper/CustomFieldValueHelper.php */
class __TwigTemplate_eb912855734822673844ee8899272aff extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\Serializer;

/**
 * Helper class custom field operations.
 */
class CustomFieldValueHelper
{
    public const TYPE_BOOLEAN     = 'boolean';

    public const TYPE_SELECT      = 'select';

    public const TYPE_MULTISELECT = 'multiselect';

    public static function normalizeValues(array \$customFields): array
    {
        if (isset(\$customFields['core'])) {
            foreach (\$customFields as \$group => \$fields) {
                foreach (\$fields as \$alias => \$field) {
                    if (is_array(\$field)) {
                        \$customFields[\$group][\$alias]['normalizedValue'] = self::normalizeValue(\$field);
                    }
                }
            }
        } else {
            foreach (\$customFields as \$alias => &\$field) {
                if (is_array(\$field)) {
                    \$customFields[\$alias]['normalizedValue'] = self::normalizeValue(\$field);
                }
            }
        }

        return \$customFields;
    }

    /**
     * @return mixed
     */
    private static function normalizeValue(array \$field)
    {
        \$value      = \$field['value'] ?? '';
        \$type       = \$field['type'] ?? null;
        \$properties = \$field['properties'] ?? null;

        return self::normalize(\$value, \$type, \$properties);
    }

    /**
     * @param string \$value
     *
     * @return string
     */
    public static function setValueFromPropertiesList(array \$properties, \$value)
    {
        if (isset(\$properties['list']) && is_array(\$properties['list'])) {
            \$list = \$properties['list'];
            if (!is_array(\$list)) {
                return \$value;
            }
            foreach (\$list as \$property) {
                if (isset(\$property[\$value])) {
                    return \$property[\$value];
                } elseif (isset(\$property['value']) && \$property['value'] == \$value) {
                    return \$property['label'];
                }
            }
        }

        return \$value;
    }

    /**
     * @param mixed                          \$value
     * @param string|null                    \$type
     * @param string|array<int, string>|null \$properties
     *
     * @return mixed|string
     */
    public static function normalize(\$value, \$type, \$properties)
    {
        if ('' !== \$value && \$type && \$properties) {
            if (!is_array(\$properties)) {
                \$properties = Serializer::decode(\$properties);
            }
            switch (\$type) {
                case self::TYPE_BOOLEAN:
                    foreach (\$properties as \$key => \$property) {
                        if ('yes' === \$key && !isset(\$properties[1])) {
                            \$properties[1] = \$property;
                        } elseif ('no' === \$key && !isset(\$properties[0])) {
                            \$properties[0] = \$property;
                        }
                    }
                    if (isset(\$properties[\$value])) {
                        \$value = \$properties[\$value];
                    }
                    break;
                case self::TYPE_SELECT:
                    \$value = self::setValueFromPropertiesList(\$properties, \$value);
                    break;
                case self::TYPE_MULTISELECT:
                    \$values = explode('|', \$value);
                    foreach (\$values as &\$val) {
                        \$val = self::setValueFromPropertiesList(\$properties, \$val);
                    }
                    \$value = implode('|', \$values);
                    break;
            }
        }

        return \$value;
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
        return "@bundles/LeadBundle/Helper/CustomFieldValueHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/CustomFieldValueHelper.php", "/app/docroot/app/bundles/LeadBundle/Helper/CustomFieldValueHelper.php");
    }
}
