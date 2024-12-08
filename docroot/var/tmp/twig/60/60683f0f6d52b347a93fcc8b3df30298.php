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

/* @bundles/CoreBundle/Form/DataTransformer/ArrayLinebreakTransformer.php */
class __TwigTemplate_8840b6ce4210b48004fa7e97e6b93429 extends Template
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
 * @implements DataTransformerInterface<array<string>|null, string|null>
 */
class ArrayLinebreakTransformer implements DataTransformerInterface
{
    /**
     * @param array<string>|null \$array
     *
     * @return string
     */
    public function transform(\$array)
    {
        if (null === \$array) {
            return '';
        }

        return implode(\"\\n\", \$array);
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

        return array_map('trim', explode(\"\\n\", \$string));
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
        return "@bundles/CoreBundle/Form/DataTransformer/ArrayLinebreakTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/ArrayLinebreakTransformer.php", "/app/docroot/app/bundles/CoreBundle/Form/DataTransformer/ArrayLinebreakTransformer.php");
    }
}
