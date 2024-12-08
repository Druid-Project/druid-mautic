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

/* @bundles/CategoryBundle/Event/CategoryEvent.php */
class __TwigTemplate_25fdfc4a834a86a002a10ff86f87bac3 extends Template
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

class CategoryEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Category &\$category, \$isNew = false)
    {
        \$this->entity = &\$category;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Category entity.
     *
     * @return Category
     */
    public function getCategory()
    {
        return \$this->entity;
    }

    /**
     * Sets the Category entity.
     */
    public function setCategory(Category \$category): void
    {
        \$this->entity = \$category;
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
        return "@bundles/CategoryBundle/Event/CategoryEvent.php";
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
        return new Source("", "@bundles/CategoryBundle/Event/CategoryEvent.php", "/app/docroot/app/bundles/CategoryBundle/Event/CategoryEvent.php");
    }
}
