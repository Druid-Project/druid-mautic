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

/* @bundles/ReportBundle/Event/ColumnCollectEvent.php */
class __TwigTemplate_c7f5ab77ec8d7d3ea91d104de8e65767 extends Template
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

namespace Mautic\\ReportBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

final class ColumnCollectEvent extends Event
{
    /**
     * @var array<string, mixed>
     */
    private array \$columns;

    /**
     * @param array<string, mixed> \$properties
     */
    public function __construct(
        private string \$object,
        private array \$properties = []
    ) {
        \$this->columns = [];
    }

    public function getObject(): string
    {
        return \$this->object;
    }

    /**
     * @return array<string, mixed>
     */
    public function getProperties(): array
    {
        return \$this->properties;
    }

    /**
     * @param array<string, array<string, mixed>> \$column
     */
    public function addColumns(array \$column): void
    {
        \$this->columns = array_merge(\$this->columns, \$column);
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function getColumns(): array
    {
        return \$this->columns;
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
        return "@bundles/ReportBundle/Event/ColumnCollectEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ColumnCollectEvent.php", "/app/docroot/app/bundles/ReportBundle/Event/ColumnCollectEvent.php");
    }
}
