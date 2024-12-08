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

/* @bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php */
class __TwigTemplate_4f3dd068f4f34eb4724b4008e35046ae extends Template
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

namespace Mautic\\CoreBundle\\Form\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<array<string>|string|null, string>
 */
class ArrayStringTransformer implements DataTransformerInterface
{
    /**
     * @param array<string>|string|null \$array
     *
     * @return string
     */
    public function transform(\$array)
    {
        if (null === \$array) {
            return '';
        }
        if (is_string(\$array)) {
            return \$array;
        }

        return implode(',', \$array);
    }

    /**
     * @param string|null \$string
     *
     * @return array<string>
     */
    public function reverseTransform(\$string)
    {
        if (!\$string) {
            return [];
        }

        return array_map('trim', explode(',', \$string));
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
        return "@bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php", "/app/docroot/app/bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php");
    }
}
