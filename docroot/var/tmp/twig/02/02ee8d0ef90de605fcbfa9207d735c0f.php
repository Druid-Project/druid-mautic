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

/* @bundles/LeadBundle/Segment/ContactSegmentFilters.php */
class __TwigTemplate_e0292d7b9d0092bb858e740577ef14d9 extends Template
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

namespace Mautic\\LeadBundle\\Segment;

/**
 * Array object containing filters.
 */
class ContactSegmentFilters implements \\Iterator, \\Countable
{
    private int \$position = 0;

    /**
     * @var array|ContactSegmentFilter[]
     */
    private array \$contactSegmentFilters = [];

    /**
     * @return \$this
     */
    public function addContactSegmentFilter(ContactSegmentFilter \$contactSegmentFilter)
    {
        \$this->contactSegmentFilters[] = \$contactSegmentFilter;

        return \$this;
    }

    /**
     * Return the current element.
     *
     * @see  http://php.net/manual/en/iterator.current.php
     *
     * @return ContactSegmentFilter
     */
    public function current(): mixed
    {
        return \$this->contactSegmentFilters[\$this->position];
    }

    /**
     * Move forward to next element.
     *
     * @see  http://php.net/manual/en/iterator.next.php
     */
    public function next(): void
    {
        ++\$this->position;
    }

    /**
     * Return the key of the current element.
     *
     * @see  http://php.net/manual/en/iterator.key.php
     *
     * @return int
     */
    public function key(): mixed
    {
        return \$this->position;
    }

    /**
     * Checks if current position is valid.
     *
     * @see  http://php.net/manual/en/iterator.valid.php
     */
    public function valid(): bool
    {
        return isset(\$this->contactSegmentFilters[\$this->position]);
    }

    /**
     * Rewind the Iterator to the first element.
     *
     * @see  http://php.net/manual/en/iterator.rewind.php
     */
    public function rewind(): void
    {
        \$this->position = 0;
    }

    /**
     * Count elements of an object.
     *
     * @see  http://php.net/manual/en/countable.count.php
     */
    public function count(): int
    {
        return count(\$this->contactSegmentFilters);
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
        return "@bundles/LeadBundle/Segment/ContactSegmentFilters.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/ContactSegmentFilters.php", "/app/docroot/app/bundles/LeadBundle/Segment/ContactSegmentFilters.php");
    }
}
