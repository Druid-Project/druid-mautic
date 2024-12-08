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

/* @bundles/CoreBundle/Doctrine/Type/ArrayType.php */
class __TwigTemplate_f7af8de2587f3dd848d2dff749e9180d extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Type;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\ConversionException;

/**
 * Type that maps a PHP array to a clob SQL type.
 *
 * @since 2.0
 */
class ArrayType extends \\Doctrine\\DBAL\\Types\\ArrayType
{
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (!is_array(\$value)) {
            return (null === \$value) ? 'N;' : 'a:0:{}';
        }

        \$serialized = serialize(\$value);

        if (str_contains(\$serialized, chr(0))) {
            \$serialized = str_replace(\"\\0\", '__NULL_BYTE__', \$serialized);
            throw new ConversionException('Serialized array includes null-byte. This cannot be saved as a text. Please check if you not provided object with protected or private members. Serialized Array: '.\$serialized);
        }

        return \$serialized;
    }

    /**
     * @param mixed \$value
     *
     * @return array
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        try {
            \$value = parent::convertToPHPValue(\$value, \$platform);
            if (!is_array(\$value) || (1 > count(\$value))) {
                return \$value;
            }

            foreach (\$value as \$key => \$element) {
                if (!is_object(\$element)) {
                    continue;
                }

                \$reflectionObject     = new \\ReflectionObject(\$element);
                \$reflectionProperties = \$reflectionObject->getProperties(\\ReflectionProperty::IS_PROTECTED | \\ReflectionProperty::IS_PRIVATE);

                // Let's check if \$value contains objects with private or protected members.
                // If it contains such objects we have to remove them from \$array.
                // This will \"heal\" the database. There must be no null bytes.
                if (0 < count(\$reflectionProperties)) {
                    unset(\$value[\$key]);
                }
            }

            return \$value;
        } catch (ConversionException|\\ErrorException) {
            return [];
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
        return "@bundles/CoreBundle/Doctrine/Type/ArrayType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/ArrayType.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Type/ArrayType.php");
    }
}
