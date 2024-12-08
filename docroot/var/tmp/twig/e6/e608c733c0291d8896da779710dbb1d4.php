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

/* @bundles/CoreBundle/Model/IteratorExportDataModel.php */
class __TwigTemplate_efa328eb197fe93df0a038f1167c5c78 extends Template
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

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Helper\\DataExporterHelper;

class IteratorExportDataModel implements \\Iterator
{
    private int \$position;

    private \$callback;

    private int \$total;

    private \$data;

    private \$totalResult;

    /**
     * @param AbstractCommonModel<T> \$model
     * @param array<mixed>           \$args
     *
     * @template T of object
     */
    public function __construct(
        private AbstractCommonModel \$model,
        private array \$args,
        callable \$callback,
        private bool \$skipOrdering = false
    ) {
        \$this->callback     = \$callback;
        \$this->position     = 0;
        \$this->total        = 0;
        \$this->totalResult  = 0;
        \$this->data         = 0;
    }

    /**
     * Return the current element.
     *
     * @see http://php.net/manual/en/iterator.current.php
     *
     * @return mixed Can return any type
     *
     * @since 5.0.0
     */
    public function current(): mixed
    {
        return \$this->data[\$this->position];
    }

    /**
     * Move forward to next element.
     *
     * @see http://php.net/manual/en/iterator.next.php
     * @since 5.0.0
     */
    public function next(): void
    {
        ++\$this->position;

        if (\$this->position === \$this->totalResult) {
            \$this->getDataForExport();
        }
    }

    /**
     * Return the key of the current element.
     *
     * @see http://php.net/manual/en/iterator.key.php
     *
     * @return mixed scalar on success, or null on failure
     *
     * @since 5.0.0
     */
    public function key(): mixed
    {
        return \$this->position;
    }

    /**
     * Checks if current position is valid.
     *
     * @see http://php.net/manual/en/iterator.valid.php
     *
     * @return bool The return value will be casted to boolean and then evaluated.
     *              Returns true on success or false on failure
     *
     * @since 5.0.0
     */
    public function valid(): bool
    {
        if (\$this->position <= \$this->totalResult && !is_null(\$this->data)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Rewind the Iterator to the first element.
     *
     * @see http://php.net/manual/en/iterator.rewind.php
     * @since 5.0.0
     */
    public function rewind(): void
    {
        \$this->getDataForExport();
    }

    private function getDataForExport(): void
    {
        \$data       = new DataExporterHelper();
        \$this->data = \$data->getDataForExport(
            \$this->total,
            \$this->model,
            \$this->args,
            \$this->callback,
            \$this->skipOrdering
        );
        \$this->totalResult = \$this->data ? count(\$this->data) : 0;
        \$this->total += \$this->totalResult;
        \$this->position = 0;
    }

    public function getTotal(): int
    {
        return \$this->total;
    }

    /**
     * @return array<string, string>
     */
    public function getArgs(): array
    {
        return \$this->args;
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
        return "@bundles/CoreBundle/Model/IteratorExportDataModel.php";
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
        return new Source("", "@bundles/CoreBundle/Model/IteratorExportDataModel.php", "/app/docroot/app/bundles/CoreBundle/Model/IteratorExportDataModel.php");
    }
}
