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

/* @bundles/CoreBundle/Twig/Extension/SlotExtension.php */
class __TwigTemplate_b63f37e5c1951409ffd7037cc26e9287 extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class SlotExtension extends AbstractExtension
{
    public function __construct(
        protected SlotsHelper \$helper
    ) {
    }

    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('slot', [\$this, 'getSlot'], ['is_safe' => ['html']]),
            new TwigFunction('slotHasContent', [\$this, 'slotHasContent'], ['is_safe' => ['html']]),
        ];
    }

    public function getName(): string
    {
        return 'slot';
    }

    public function getSlot(string \$name, string \$default = ''): string|bool
    {
        ob_start();

        \$this->helper->output(\$name, \$default);

        return ob_get_clean();
    }

    /**
     * @param string|array<string, mixed> \$name
     */
    public function slotHasContent(\$name): bool
    {
        return \$this->helper->hasContent(\$name);
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
        return "@bundles/CoreBundle/Twig/Extension/SlotExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/SlotExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/SlotExtension.php");
    }
}
