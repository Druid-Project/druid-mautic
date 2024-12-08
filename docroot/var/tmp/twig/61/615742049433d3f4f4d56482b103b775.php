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

/* @bundles/CoreBundle/Helper/ArrayHelper.php */
class __TwigTemplate_54c187fe83b9eaac235b8078be1c06db extends Template
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

namespace Mautic\\CoreBundle\\Helper;

/**
 * Helper functions for simpler operations with arrays.
 */
class ArrayHelper
{
    /**
     * If the \$key exists in the \$origin array then it will return its value.
     *
     * @param mixed \$key
     * @param mixed \$defaultValue
     *
     * @return mixed
     */
    public static function getValue(\$key, array \$origin, \$defaultValue = null)
    {
        return array_key_exists(\$key, \$origin) ? \$origin[\$key] : \$defaultValue;
    }

    /**
     * If the \$key exists in the \$origin array then it will return its value
     * and unsets the \$key from the \$array.
     *
     * @param mixed \$key
     * @param mixed \$defaultValue
     *
     * @return mixed
     */
    public static function pickValue(\$key, array &\$origin, \$defaultValue = null)
    {
        \$value = self::getValue(\$key, \$origin, \$defaultValue);

        unset(\$origin[\$key]);

        return \$value;
    }

    /**
     * Selects keys defined in the \$keys array and returns array that contains only those.
     */
    public static function select(array \$keys, array \$origin): array
    {
        return array_filter(\$origin, fn (\$value, \$key): bool => in_array(\$key, \$keys, true), ARRAY_FILTER_USE_BOTH);
    }

    /**
     * Sum between two array.
     *
     * @param mixed[] \$a1
     * @param mixed[] \$b2
     *
     * @return mixed[]
     */
    public static function sum(array \$a1, array \$b2): array
    {
        return self::sumOrSub(\$a1, \$b2);
    }

    /**
     * SUBSTRACT between two array.
     */
    public static function sub(array \$a1, array \$b2): array
    {
        return self::sumOrSub(\$a1, \$b2, true);
    }

    /**
     * Removes null and empty string values from the array.
     *
     * @param mixed[] \$array
     *
     * @return mixed[]
     */
    public static function removeEmptyValues(array \$array): array
    {
        return array_filter(
            \$array,
            fn (\$value): bool => !is_null(\$value) && '' !== \$value
        );
    }

    /**
     * Flip array or sub arrays.
     *
     * @param array<int|string|array<int|string>> \$masterArrays
     *
     * @return array<int|string|array<int|string>>
     */
    public static function flipArray(array \$masterArrays): array
    {
        if (!is_array(end(\$masterArrays))) {
            return array_flip(\$masterArrays);
        }

        return array_map(
            fn (array \$subArray) => array_flip(\$subArray),
            \$masterArrays
        );
    }

    /**
     * @param array<mixed> \$multidimensionalArray
     *
     * @return array<mixed>
     */
    public static function flatten(array \$multidimensionalArray): array
    {
        \$flattenedArray = [];

        array_walk_recursive(
            \$multidimensionalArray,
            function (\$value, \$key) use (&\$flattenedArray): void {
                \$flattenedArray[\$key] = \$value;
            }
        );

        return \$flattenedArray;
    }

    /**
     *  SUM/SUBSTRACT between two arrays.
     *
     * @param bool \$subtracted
     */
    private static function sumOrSub(array \$a1, array \$b2, \$subtracted = false): array
    {
        return array_map(function (\$x, \$y) use (\$subtracted) {
            if (\$subtracted) {
                return \$x - \$y;
            } else {
                return \$x + \$y;
            }
        }, \$a1, \$b2);
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
        return "@bundles/CoreBundle/Helper/ArrayHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ArrayHelper.php", "/app/docroot/app/bundles/CoreBundle/Helper/ArrayHelper.php");
    }
}
