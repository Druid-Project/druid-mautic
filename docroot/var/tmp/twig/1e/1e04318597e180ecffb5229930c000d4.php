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

/* @bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php */
class __TwigTemplate_9568dac8e4b2ab463b697c3a16894c8f extends Template
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

namespace Mautic\\CoreBundle\\Form\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * Transforms a bar/pipe (|) separated string to and from an array.
 * Example: \"Some text | separated by vertial bars\" is equivalent to ['Some text', 'separated by vertial bars'].
 *
 * @implements DataTransformerInterface<array<string>|null, string|null>
 */
class BarStringTransformer implements DataTransformerInterface
{
    /**
     * @param array<string>|null \$array
     */
    public function transform(\$array): string
    {
        if (!is_array(\$array)) {
            return '';
        }

        return implode('|', \$array);
    }

    /**
     * @param string|null \$string
     *
     * @return string[]
     */
    public function reverseTransform(\$string): array
    {
        if (!is_string(\$string)) {
            return [];
        }

        return array_map(
            fn (string \$element): string => trim(\$element),
            explode('|', \$string)
        );
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
        return "@bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php", "/app/docroot/app/bundles/CoreBundle/Form/DataTransformer/BarStringTransformer.php");
    }
}
