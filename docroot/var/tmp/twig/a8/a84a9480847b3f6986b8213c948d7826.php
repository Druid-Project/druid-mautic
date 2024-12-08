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

/* @bundles/CoreBundle/Helper/Tree/JsPlumbFormatter.php */
class __TwigTemplate_e3e6efcee7652e16bfa55ba84f570673 extends Template
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
 * Will generate this structure:.
 *
 * [
 *  \"levels\":[
 *    \"nodes\":[
 *      { \"id\":\"1\", \"name\":\"foo\" },
 *      { \"id\":\"2\", \"name\":\"bar\" }
 *    ],
 *  ],
 *  \"edges\":[
 *    { \"source\":\"1\", \"target\":\"2\" }
 *  ]
 *];
 */
class JsPlumbFormatter implements NodeFormatterInterface
{
    /**
     * @return mixed[]
     */
    public function format(NodeInterface \$node): array
    {
        \$iterator = new \\RecursiveIteratorIterator(\$node, \\RecursiveIteratorIterator::SELF_FIRST);
        \$data     = \$this->addNodeAndEdges(\$node, ['levels' => [], 'edges' => []], 0);

        foreach (\$iterator as \$childNode) {
            \$data = \$this->addNodeAndEdges(\$childNode, \$data, \$iterator->getDepth() + 1);
        }

        return \$data;
    }

    /**
     * @param mixed[] \$data
     *
     * @return mixed[]
     */
    private function addNodeAndEdges(NodeInterface \$parentNode, array \$data, int \$depth): array
    {
        \$parentParentId = \$parentNode->getParent() ? \$parentNode->getParent()->getValue() : 0;
        \$id             = \"{\$parentParentId}-{\$parentNode->getValue()}\";
        \$node           = [
            'id'   => \$id,
            'name' => \$parentNode->getParam('name'),
            'link' => \$parentNode->getParam('link'),
        ];

        if (\$message = \$parentNode->getParam('message')) {
            \$node['message'] = \$message;
        }

        \$data['levels'][\$depth]['nodes'][] = \$node;

        foreach (\$parentNode->getChildrenArray() as \$childNode) {
            \$data['edges'][] = ['source' => \$id, 'target' => \"{\$parentNode->getValue()}-{\$childNode->getValue()}\"];
        }

        return \$data;
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
        return "@bundles/CoreBundle/Helper/Tree/JsPlumbFormatter.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Tree/JsPlumbFormatter.php", "/app/docroot/app/bundles/CoreBundle/Helper/Tree/JsPlumbFormatter.php");
    }
}
