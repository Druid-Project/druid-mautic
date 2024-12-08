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

/* @bundles/CoreBundle/Helper/Tree/NodeInterface.php */
class __TwigTemplate_93665ef4d56249b675eba2a347b185f9 extends Template
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

/**
 * @extends \\RecursiveIterator<int,NodeInterface>
 */
interface NodeInterface extends \\RecursiveIterator
{
    /**
     * @return mixed
     */
    public function getValue();

    public function setParent(NodeInterface \$parent): void;

    public function getParent(): ?NodeInterface;

    public function addChild(NodeInterface \$child): void;

    /**
     * @return NodeInterface[]
     */
    public function getChildrenArray(): array;

    /**
     * @param mixed \$value
     */
    public function addParam(string \$key, \$value): void;

    /**
     * @param mixed \$default
     *
     * @return mixed
     */
    public function getParam(string \$key, \$default = null);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Helper/Tree/NodeInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Tree/NodeInterface.php", "/app/docroot/app/bundles/CoreBundle/Helper/Tree/NodeInterface.php");
    }
}
