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

/* @bundles/CoreBundle/Event/MenuEvent.php */
class __TwigTemplate_43681fd523dac5b6ffe5c18d3c79ab86 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Menu\\MenuHelper;
use Symfony\\Contracts\\EventDispatcher\\Event;

class MenuEvent extends Event
{
    /**
     * @var array
     */
    protected \$menuItems = ['children' => []];

    /**
     * @param string \$type
     */
    public function __construct(
        protected MenuHelper \$helper,
        protected \$type = 'main'
    ) {
    }

    public function setMenuItems(array \$menuItems): void
    {
        \$this->menuItems = \$menuItems;
    }

    /**
     * Add items to the menu.
     */
    public function addMenuItems(array \$menuItems): void
    {
        \$defaultPriority = \$menuItems['priority'] ?? 9999;
        \$items           = \$menuItems['items'] ?? \$menuItems;

        \$isRoot = isset(\$items['name']) && ('root' == \$items['name'] || \$items['name'] == \$items['name']);
        if (!\$isRoot) {
            \$this->helper->createMenuStructure(\$items, 0, \$defaultPriority, \$this->type);

            \$this->menuItems['children'] = array_merge_recursive(\$this->menuItems['children'], \$items);
        } else {
            // make sure the root does not override the children
            if (isset(\$this->menuItems['children'])) {
                if (isset(\$items['children'])) {
                    \$items['children'] = array_merge_recursive(\$this->menuItems['children'], \$items['children']);
                } else {
                    \$items['children'] = \$this->menuItems['children'];
                }
            }
            \$this->menuItems = \$items;
        }
    }

    /**
     * Return the menu items.
     *
     * @return array
     */
    public function getMenuItems()
    {
        \$this->helper->placeOrphans(\$this->menuItems['children'], true, 1, \$this->type);
        \$this->helper->sortByPriority(\$this->menuItems['children']);
        \$this->helper->resetOrphans(\$this->type);

        return \$this->menuItems;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
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
        return "@bundles/CoreBundle/Event/MenuEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/MenuEvent.php", "/app/docroot/app/bundles/CoreBundle/Event/MenuEvent.php");
    }
}
