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

/* @bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php */
class __TwigTemplate_de687cde54df05ca51e3cc3ea1490c46 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Stat;

use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Segment\\Stat\\ChartQuery\\SegmentContactsLineChartQuery;

class SegmentChartQueryFactory
{
    public function getContactsTotal(SegmentContactsLineChartQuery \$query, ListModel \$listModel): array
    {
        \$total = \$listModel->getRepository()->getLeadCount(\$query->getSegmentId());

        return \$query->getTotalStats(\$total);
    }

    public function getContactsAdded(SegmentContactsLineChartQuery \$query): array
    {
        return \$query->getAddedEventLogStats();
    }

    /**
     * @return array
     */
    public function getContactsRemoved(SegmentContactsLineChartQuery \$query)
    {
        return \$query->getRemovedEventLogStats();
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
        return "@bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php", "/app/docroot/app/bundles/LeadBundle/Segment/Stat/SegmentChartQueryFactory.php");
    }
}
