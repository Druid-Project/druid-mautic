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

/* @bundles/ApiBundle/Serializer/Exclusion/FieldInclusionStrategy.php */
class __TwigTemplate_bb55a0eb9f9d891dd849ee88ccf78674 extends Template
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

namespace Mautic\\ApiBundle\\Serializer\\Exclusion;

use JMS\\Serializer\\Context;
use JMS\\Serializer\\Exclusion\\ExclusionStrategyInterface;
use JMS\\Serializer\\Metadata\\ClassMetadata;
use JMS\\Serializer\\Metadata\\PropertyMetadata;

/**
 * Include specific fields at a specific level.
 */
class FieldInclusionStrategy implements ExclusionStrategyInterface
{
    private int \$level;

    /**
     * @param int \$level
     */
    public function __construct(
        private array \$fields,
        \$level = 3,
        private \$path = null
    ) {
        \$this->level  = (int) \$level;
    }

    public function shouldSkipClass(ClassMetadata \$metadata, Context \$navigatorContext): bool
    {
        return false;
    }

    public function shouldSkipProperty(PropertyMetadata \$property, Context \$navigatorContext): bool
    {
        if (\$this->path) {
            \$path = implode('.', \$navigatorContext->getCurrentPath());
            if (\$path !== \$this->path) {
                return false;
            }
        }

        \$name = \$property->serializedName ?: \$property->name;
        if (in_array(\$name, \$this->fields)) {
            return false;
        }

        // children of children or parents of chidlren will be more than 3 levels deep
        if (\$navigatorContext->getDepth() <= \$this->level) {
            return false;
        }

        return true;
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
        return "@bundles/ApiBundle/Serializer/Exclusion/FieldInclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/FieldInclusionStrategy.php", "/app/docroot/app/bundles/ApiBundle/Serializer/Exclusion/FieldInclusionStrategy.php");
    }
}
