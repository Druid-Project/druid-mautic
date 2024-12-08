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

/* @bundles/CoreBundle/Twig/Extension/MenuExtension.php */
class __TwigTemplate_04027fbde69ab0ec361d1e48340b8320 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Knp\\Menu\\ItemInterface;
use Knp\\Menu\\Matcher\\MatcherInterface;
use Mautic\\CoreBundle\\Twig\\Helper\\MenuHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class MenuExtension extends AbstractExtension
{
    public function __construct(
        protected MenuHelper \$menuHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('menuRender', [\$this, 'menuRender'], ['is_safe' => ['all']]),
            new TwigFunction('parseMenuAttributes', [\$this, 'parseMenuAttributes'], ['is_safe' => ['all']]),
            new TwigFunction('buildMenuClasses', [\$this, 'buildMenuClasses'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * Renders a menu with the specified renderer.
     *
     * @param ItemInterface|string|array<mixed> \$menu
     * @param array<mixed>                      \$options
     */
    public function menuRender(\$menu, array \$options = [], ?string \$renderer = null): string
    {
        return \$this->menuHelper->render(\$menu, \$options, \$renderer);
    }

    /**
     * Parses attributes for the menu view.
     *
     * @param array<string,string> \$attributes
     * @param array<string,string> \$overrides
     */
    public function parseMenuAttributes(array \$attributes, array \$overrides = []): string
    {
        return \$this->menuHelper->parseAttributes(\$attributes, \$overrides);
    }

    /**
     * Concats the appropriate classes for menu links.
     *
     * @param array<string,string> \$options
     *
     * @return array<mixed>
     */
    public function buildMenuClasses(ItemInterface \$item, ?MatcherInterface \$matcher, array \$options, ?string \$extraClasses): array
    {
        \$isAncestor = null !== \$matcher && \$matcher->isAncestor(\$item, (int) \$options['matchingDepth']);
        \$isCurrent  = null !== \$matcher && \$matcher->isCurrent(\$item);

        \$class = \$item->getAttribute('class');

        \$classes      = '';
        \$classesArray = [];

        \$classes .= (\$class) ? \" {\$class}\" : '';
        \$classes .= (\$extraClasses) ? \" {\$extraClasses}\" : '';
        \$classes .= (\$isCurrent) ? \" {\$options['currentClass']}\" : '';
        \$classes .= (\$isAncestor) ? \" {\$options['ancestorClass']}\" : '';
        \$classes .= (\$isAncestor && \$this->menuHelper->invisibleChildSelected(\$item, \$matcher)) ? \" {\$options['currentClass']}\" : '';
        \$classes .= (\$item->actsLikeFirst() && isset(\$options['firstClass'])) ? \" {\$options['firstClass']}\" : '';
        \$classes .= (\$item->actsLikeLast() && isset(\$options['lastClass'])) ? \" {\$options['lastClass']}\" : '';

        if ('' !== \$classes) {
            \$classesArray = ['class' => trim(\$classes)];
        }

        return \$classesArray;
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
        return "@bundles/CoreBundle/Twig/Extension/MenuExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/MenuExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/MenuExtension.php");
    }
}
