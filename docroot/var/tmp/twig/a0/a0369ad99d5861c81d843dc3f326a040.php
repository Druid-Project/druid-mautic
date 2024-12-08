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

/* @bundles/ReportBundle/Event/ReportDataEvent.php */
class __TwigTemplate_9a0a44e1e53950df40e24930d08b471f extends Template
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

use Mautic\\ReportBundle\\Entity\\Report;

class ReportDataEvent extends AbstractReportEvent
{
    private int \$totalResults;

    public function __construct(
        Report \$report,
        private array \$data,
        \$totalResults,
        private array \$options
    ) {
        \$this->context      = \$report->getSource();
        \$this->report       = \$report;
        \$this->totalResults = (int) \$totalResults;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * @param array \$data
     */
    public function setData(\$data): void
    {
        \$this->data = \$data;
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
        return "@bundles/ReportBundle/Event/ReportDataEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportDataEvent.php", "/app/docroot/app/bundles/ReportBundle/Event/ReportDataEvent.php");
    }
}
