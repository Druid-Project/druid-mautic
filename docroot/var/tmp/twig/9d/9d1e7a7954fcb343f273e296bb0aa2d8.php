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

/* @bundles/CoreBundle/Menu/MenuBuilder.php */
class __TwigTemplate_375de11e621a5ca6d3790ed15998f2a8 extends Template
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

namespace Mautic\\CoreBundle\\Menu;

use Knp\\Menu\\FactoryInterface;
use Knp\\Menu\\Loader\\ArrayLoader;
use Knp\\Menu\\Matcher\\MatcherInterface;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MenuEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class MenuBuilder
{
    /**
     * @var \\Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher
     */
    private \$dispatcher;

    public function __construct(
        private FactoryInterface \$factory,
        private MatcherInterface \$matcher,
        EventDispatcherInterface \$dispatcher,
        private MenuHelper \$menuHelper
    ) {
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * @return mixed
     */
    public function __call(\$name, \$arguments)
    {
        \$name = str_replace('Menu', '', \$name);

        return \$this->buildMenu(\$name);
    }

    /**
     * Used by breadcrumbs to determine active link.
     *
     * @param \\Knp\\Menu\\ItemInterface \$menu
     * @param string                  \$forRouteUri
     * @param string                  \$forRouteName
     *
     * @return \\Knp\\Menu\\ItemInterface|null
     */
    public function getCurrentMenuItem(\$menu, \$forRouteUri, \$forRouteName)
    {
        try {
            /** @var \\Knp\\Menu\\ItemInterface \$item */
            foreach (\$menu as \$item) {
                if ('current' == \$forRouteUri && \$this->matcher->isCurrent(\$item)) {
                    // current match
                    return \$item;
                } elseif ('current' != \$forRouteUri && \$item->getUri() == \$forRouteUri) {
                    // route uri match
                    return \$item;
                } elseif (!empty(\$forRouteName) && \$forRouteName == \$item->getExtra('routeName')) {
                    // route name match
                    return \$item;
                }

                if (\$item->getChildren() && \$current_child = \$this->getCurrentMenuItem(\$item, \$forRouteUri, \$forRouteName)) {
                    return \$current_child;
                }
            }
        } catch (\\Exception) {
            // do nothing
        }

        return null;
    }

    /**
     * @return mixed
     */
    private function buildMenu(\$name)
    {
        static \$menus = [];

        if (!isset(\$menus[\$name])) {
            \$loader = new ArrayLoader(\$this->factory);

            // dispatch the MENU_BUILD event to retrieve bundle menu items
            \$event = new MenuEvent(\$this->menuHelper, \$name);
            \$this->dispatcher->dispatch(\$event, CoreEvents::BUILD_MENU);

            \$menuItems    = \$event->getMenuItems();

            // KNP Menu explicitly requires a menu name since v3
            if (empty(\$menuItems['name'])) {
                \$menuItems['name'] = \$name;
            }
            \$menus[\$name] = \$loader->load(\$menuItems);
        }

        return \$menus[\$name];
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
        return "@bundles/CoreBundle/Menu/MenuBuilder.php";
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
        return new Source("", "@bundles/CoreBundle/Menu/MenuBuilder.php", "/app/docroot/app/bundles/CoreBundle/Menu/MenuBuilder.php");
    }
}
