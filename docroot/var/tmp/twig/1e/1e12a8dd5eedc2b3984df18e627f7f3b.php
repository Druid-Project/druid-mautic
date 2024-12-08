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

/* @bundles/CoreBundle/Twig/Extension/StorageExtension.php */
class __TwigTemplate_b5672a5afde5feadd7d93f5acb0e7248 extends Template
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

use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * The main goal of this function is to save Twig's context into memory
 * from child templates, so that it can be restored by parent templates.
 * This is a workaround as Twig doesn't support passing back variables
 * from child to parent templates.
 */
class StorageExtension extends AbstractExtension
{
    /**
     * @var array<string,mixed>
     */
    protected array \$storage = [];

    public function getFunctions()
    {
        return [
            new TwigFunction('save', [\$this, 'save'], ['needs_context' => true]),
            new TwigFunction('restore', [\$this, 'restore'], ['needs_context' => true]),
        ];
    }

    /**
     * @param mixed \$context
     */
    public function save(\$context, string \$name): void
    {
        \$this->storage[\$name] = \$context;
    }

    /**
     * @param mixed \$context
     */
    public function restore(&\$context, string \$name): void
    {
        \$context = array_merge(\$context, \$this->storage[\$name]);
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
        return "@bundles/CoreBundle/Twig/Extension/StorageExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/StorageExtension.php", "/app/docroot/app/bundles/CoreBundle/Twig/Extension/StorageExtension.php");
    }
}
