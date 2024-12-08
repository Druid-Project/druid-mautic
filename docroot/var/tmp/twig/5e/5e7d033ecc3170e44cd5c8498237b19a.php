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

/* @bundles/InstallBundle/Twig/TwigExtension.php */
class __TwigTemplate_6d1de4e26a703b7dda830587bf8bd737 extends Template
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

namespace Mautic\\InstallBundle\\Twig;

use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * TwigExtension class.
 */
class TwigExtension extends AbstractExtension
{
    /**
     * getFilters function.
     *
     * @return mixed[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('phpversion', [\$this, 'phpversion']),
        ];
    }

    public function phpversion(string \$value = ''): string|bool
    {
        return phpversion(\$value);
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
        return "@bundles/InstallBundle/Twig/TwigExtension.php";
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
        return new Source("", "@bundles/InstallBundle/Twig/TwigExtension.php", "/app/docroot/app/bundles/InstallBundle/Twig/TwigExtension.php");
    }
}
