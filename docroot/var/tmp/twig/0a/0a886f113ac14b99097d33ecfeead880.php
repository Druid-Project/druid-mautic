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

/* @bundles/ReportBundle/Event/ReportEvent.php */
class __TwigTemplate_a14b6d7780c5881d803ba1c891d75bd7 extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\ReportBundle\\Entity\\Report;

class ReportEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Report \$report, \$isNew = false)
    {
        \$this->entity = \$report;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Report entity.
     *
     * @return Report
     */
    public function getReport()
    {
        return \$this->entity;
    }

    /**
     * Sets the Report entity.
     */
    public function setReport(Report \$report): void
    {
        \$this->entity = \$report;
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
        return "@bundles/ReportBundle/Event/ReportEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportEvent.php", "/app/docroot/app/bundles/ReportBundle/Event/ReportEvent.php");
    }
}
