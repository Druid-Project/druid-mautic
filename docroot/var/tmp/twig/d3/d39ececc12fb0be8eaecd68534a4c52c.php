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

/* @bundles/ConfigBundle/Form/Type/EscapeTransformer.php */
class __TwigTemplate_0a7dbf4869b7e120f611e713c4b34050 extends Template
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

namespace Mautic\\ConfigBundle\\Form\\Type;

use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<array<string|int|float|array<string|int|float>>|string|int|float, array<string|int|float|array<string|int|float>>|string|int|float>
 */
class EscapeTransformer implements DataTransformerInterface
{
    /**
     * @var string[]
     */
    private array \$allowedParameters;

    public function __construct(array \$allowedParameters)
    {
        \$this->allowedParameters = array_filter(\$allowedParameters);
    }

    /**
     * @param array<string|int|float|array<string|int|float>>|string|int|float \$value
     *
     * @return array<string|int|float|array<string|int|float>>|string|int|float
     */
    public function transform(\$value)
    {
        if (is_array(\$value)) {
            return array_map(fn (\$value) => \$this->unescape(\$value), \$value);
        }

        return \$this->unescape(\$value);
    }

    /**
     * @param array<string|int|float|array<string|int|float>>|string|int|float \$value
     *
     * @return array<string|int|float|array<string|int|float>>|string|int|float
     */
    public function reverseTransform(\$value)
    {
        if (is_array(\$value)) {
            return array_map(fn (\$value) => \$this->escape(\$value), \$value);
        }

        return \$this->escape(\$value);
    }

    /**
     * @param mixed \$value
     *
     * @return mixed
     */
    private function unescape(\$value)
    {
        if (!is_string(\$value)) {
            return \$value;
        }

        return str_replace('%%', '%', \$value);
    }

    /**
     * @param mixed \$value
     *
     * @return mixed
     */
    private function escape(\$value)
    {
        if (!is_string(\$value)) {
            return \$value;
        }

        \$escaped = str_replace('%', '%%', \$value);

        return \$this->allowParameters(\$escaped);
    }

    private function allowParameters(string \$escaped): string
    {
        if (!\$this->allowedParameters) {
            return \$escaped;
        }

        \$search  = array_map(fn (string \$value): string => \"%%{\$value}%%\", \$this->allowedParameters);
        \$replace = array_map(fn (string \$value): string => \"%{\$value}%\", \$this->allowedParameters);

        return str_ireplace(\$search, \$replace, \$escaped);
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
        return "@bundles/ConfigBundle/Form/Type/EscapeTransformer.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/Type/EscapeTransformer.php", "/app/docroot/app/bundles/ConfigBundle/Form/Type/EscapeTransformer.php");
    }
}
