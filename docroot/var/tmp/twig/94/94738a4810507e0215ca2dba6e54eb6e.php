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

/* @bundles/CoreBundle/Helper/Chart/SeriesPieChart.php */
class __TwigTemplate_3d9810152c050095f5ea3f9ef79ac124 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Chart;

class SeriesPieChart extends AbstractChart implements ChartInterface
{
    protected int|float \$totalCount = 0;

    /**
     * @var int[][]
     */
    protected \$datasets = [];

    /**
     * @var string[]
     */
    protected \$labels = [];

    /**
     * @return array{labels: mixed[], datasets: mixed[]}
     */
    public function render(bool \$withCounts = true): array
    {
        \$dataset = [];

        foreach (\$this->datasets as \$datasetId => \$value) {
            \$data        = ['data' => [], 'backgroundColor' => [], 'hoverBackgroundColor' => []];

            foreach (\$value as \$key => \$item) {
                \$color = \$this->configureColorHelper(\$key);

                \$data['data'][]                 = \$item;
                \$data['backgroundColor'][]      = \$color->toRgba(0.8);
                \$data['hoverBackgroundColor'][] = \$color->toRgba(0.9);
            }

            \$data['label'] = \$this->labels[\$datasetId];
            \$dataset[]     = \$data;
        }

        return [
            'labels'   => \$this->labels,
            'datasets' => \$dataset,
        ];
    }

    /**
     * Define a dataset by name and count number. Method will add the rest.
     *
     * @param int[] \$value
     *
     * @return \$this
     */
    public function setDataset(array \$value): static
    {
        if (0 == \$this->totalCount) {
            foreach (\$value as \$item) {
                \$this->totalCount += \$item;
            }
        }

        \$this->datasets[] = \$value;

        return \$this;
    }

    /**
     * Adds to the label also the value and the percentage.
     *
     * @param string \$label
     * @param int    \$value
     *
     * @return string
     */
    public function buildFullLabel(\$label, \$value)
    {
        if (!\$this->totalCount) {
            return \$label;
        }
        \$percentage = round(\$value / \$this->totalCount * 100, 2);

        return \$label.'; '.\$value.'x, '.\$percentage.'%';
    }

    public function setTotalCount(float|int \$totalCount): void
    {
        \$this->totalCount = \$totalCount;
    }

    /**
     * @param string[] \$labels
     */
    public function setLabels(array \$labels): void
    {
        \$this->labels = \$labels;
    }

    /**
     * @return int[][]
     */
    public function getDatasets(): array
    {
        return \$this->datasets;
    }

    public function getTotalCount(): float|int
    {
        return \$this->totalCount;
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
        return "@bundles/CoreBundle/Helper/Chart/SeriesPieChart.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Chart/SeriesPieChart.php", "/app/docroot/app/bundles/CoreBundle/Helper/Chart/SeriesPieChart.php");
    }
}
