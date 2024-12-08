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

/* @bundles/ReportBundle/Model/ReportExportOptions.php */
class __TwigTemplate_9d18a373da97fed8a3966ef6a9ee8fd5 extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class ReportExportOptions
{
    /**
     * @var int
     */
    private \$batchSize;

    private int \$page;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateFrom;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateTo;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->batchSize = \$coreParametersHelper->get('report_export_batch_size');
        \$this->page      = 1;
    }

    public function beginExport(): void
    {
        \$this->page = 1;
    }

    public function nextBatch(): void
    {
        ++\$this->page;
    }

    /**
     * @return int
     */
    public function getBatchSize()
    {
        return \$this->batchSize;
    }

    public function getPage(): int
    {
        return \$this->page;
    }

    /**
     * @return int
     */
    public function getNumberOfProcessedResults()
    {
        return \$this->page * \$this->getBatchSize();
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateFrom()
    {
        return \$this->dateFrom;
    }

    /**
     * @param \\DateTime \$dateFrom
     */
    public function setDateFrom(\$dateFrom): void
    {
        \$this->dateFrom = \$dateFrom;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateTo()
    {
        return \$this->dateTo;
    }

    /**
     * @param \\DateTime \$dateTo
     */
    public function setDateTo(\$dateTo): void
    {
        \$this->dateTo = \$dateTo;
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
        return "@bundles/ReportBundle/Model/ReportExportOptions.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ReportExportOptions.php", "/app/docroot/app/bundles/ReportBundle/Model/ReportExportOptions.php");
    }
}
