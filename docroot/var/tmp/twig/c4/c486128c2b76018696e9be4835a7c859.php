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

/* @bundles/CategoryBundle/Event/CategoryTypesEvent.php */
class __TwigTemplate_9ccaf3cb58859a7ce20deec9caf2f3c4 extends Template
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

namespace Mautic\\CategoryBundle\\Event;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class CategoryTypesEvent extends CommonEvent
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * Returns the array of Category Types.
     *
     * @return array
     */
    public function getCategoryTypes()
    {
        if (!array_key_exists('global', \$this->types)) {
            // Alphabetize once
            asort(\$this->types);

            \$this->types = array_merge(
                ['global' => 'mautic.category.global'],
                \$this->types
            );
        }

        return \$this->types;
    }

    /**
     * Adds the category type and label.
     *
     * @param string \$type
     * @param string \$label
     */
    public function addCategoryType(\$type, \$label = null): void
    {
        if (is_int(\$type)) {
            \$type = \$label;
        }

        if (null === \$label) {
            \$label = 'mautic.'.\$type.'.'.\$type;
        }

        \$this->types[\$type] = \$label;
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
        return "@bundles/CategoryBundle/Event/CategoryTypesEvent.php";
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
        return new Source("", "@bundles/CategoryBundle/Event/CategoryTypesEvent.php", "/app/docroot/app/bundles/CategoryBundle/Event/CategoryTypesEvent.php");
    }
}
