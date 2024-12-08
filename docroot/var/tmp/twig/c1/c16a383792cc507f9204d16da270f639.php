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

/* @bundles/CoreBundle/Doctrine/Paginator/SimplePaginator.php */
class __TwigTemplate_5bbe7de08ac1d3b253cc0d64b6738fa0 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Paginator;

use Doctrine\\ORM\\Query;
use Doctrine\\ORM\\Tools\\Pagination\\CountWalker;
use IteratorAggregate;

/**
 * This is a fast paginator (unlike \\Doctrine\\ORM\\Tools\\Pagination\\Paginator) that can handle simple queries using no joins or ManyToOne joins.
 * Do not use it if the \$query uses oneToMany/ManyToMany joins or other complex parts (use \\Doctrine\\ORM\\Tools\\Pagination\\Paginator instead).
 *
 * @template T
 *
 * @implements IteratorAggregate<mixed>
 */
class SimplePaginator implements \\IteratorAggregate, \\Countable
{
    private ?int \$count = null;

    /**
     * @param Query<T> \$query a Doctrine ORM query or query builder
     */
    public function __construct(
        private Query \$query
    ) {
    }

    /**
     * @return \\Traversable<mixed>
     */
    public function getIterator(): \\Traversable
    {
        return new \\ArrayIterator(\$this->query->getResult());
    }

    public function count(): int
    {
        if (null === \$this->count) {
            \$this->count = \$this->fetchCount();
        }

        return \$this->count;
    }

    private function fetchCount(): int
    {
        \$query = clone \$this->query;
        \$query->setFirstResult(null);
        \$query->setMaxResults(null);
        \$query->setParameters(\$this->query->getParameters());
        \$query->setHint(Query::HINT_CUSTOM_TREE_WALKERS, [CountWalker::class]);

        return (int) \$query->getSingleScalarResult();
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
        return "@bundles/CoreBundle/Doctrine/Paginator/SimplePaginator.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Paginator/SimplePaginator.php", "/app/docroot/app/bundles/CoreBundle/Doctrine/Paginator/SimplePaginator.php");
    }
}
