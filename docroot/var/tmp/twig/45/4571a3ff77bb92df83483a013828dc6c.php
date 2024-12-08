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

/* @bundles/ReportBundle/Event/ReportQueryEvent.php */
class __TwigTemplate_5dcd37673e43df001871b4cc5b1e461a extends Template
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

namespace Mautic\\ReportBundle\\Event;

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\ReportBundle\\Entity\\Report;

class ReportQueryEvent extends AbstractReportEvent
{
    private int \$totalResults;

    public function __construct(
        Report \$report,
        private QueryBuilder \$query,
        \$totalResults,
        private array \$options
    ) {
        \$this->context      = \$report->getSource();
        \$this->report       = \$report;
        \$this->totalResults = (int) \$totalResults;
    }

    /**
     * @return QueryBuilder
     */
    public function getQuery()
    {
        return \$this->query;
    }

    /**
     * @param QueryBuilder \$query
     */
    public function setQuery(\$query): void
    {
        \$this->query = \$query;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return \$this->options;
    }

    public function getTotalResults(): int
    {
        return \$this->totalResults;
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
        return "@bundles/ReportBundle/Event/ReportQueryEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportQueryEvent.php", "/app/docroot/app/bundles/ReportBundle/Event/ReportQueryEvent.php");
    }
}
