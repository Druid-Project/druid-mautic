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

/* @bundles/CoreBundle/Helper/Tree/IntNode.php */
class __TwigTemplate_9b87e1ff20a57fcbc98b666dbd5b7d5c extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Tree;

class IntNode implements NodeInterface
{
    /**
     * @var NodeInterface[]
     */
    private array \$children = [];

    /**
     * @var array<string,mixed>
     */
    private array \$params = [];

    private int \$position = 0;

    public function __construct(
        private int \$value,
        private ?NodeInterface \$parent = null
    ) {
    }

    public function getValue(): int
    {
        return \$this->value;
    }

    public function getParent(): ?NodeInterface
    {
        return \$this->parent;
    }

    public function setParent(NodeInterface \$parent): void
    {
        \$this->parent = \$parent;
    }

    public function addChild(NodeInterface \$child): void
    {
        \$child->setParent(\$this);

        \$this->children[] = \$child;
    }

    public function addParam(string \$key, \$value): void
    {
        \$this->params[\$key] = \$value;
    }

    public function getParam(string \$key, \$default = null)
    {
        return \$this->params[\$key] ?? \$default;
    }

    public function getChildrenArray(): array
    {
        return \$this->children;
    }

    public function getChildren(): NodeInterface
    {
        return \$this->current();
    }

    public function hasChildren(): bool
    {
        return !empty(\$this->current()->getChildrenArray());
    }

    public function current(): NodeInterface
    {
        return \$this->children[\$this->position];
    }

    public function key(): int
    {
        return \$this->position;
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function valid(): bool
    {
        return isset(\$this->children[\$this->position]);
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
        return "@bundles/CoreBundle/Helper/Tree/IntNode.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Tree/IntNode.php", "/app/docroot/app/bundles/CoreBundle/Helper/Tree/IntNode.php");
    }
}
