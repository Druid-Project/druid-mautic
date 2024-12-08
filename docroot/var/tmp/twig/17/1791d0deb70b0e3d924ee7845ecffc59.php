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

/* @bundles/ReportBundle/Tests/Adapter/ReportDataAdapterTest.php */
class __TwigTemplate_d8b96d9c052b42162c06a988e253295a extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Adapter;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\ReportBundle\\Adapter\\ReportDataAdapter;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Model\\ReportExportOptions;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Mautic\\ReportBundle\\Tests\\Fixtures;

class ReportDataAdapterTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testNoEmailsProvided(): void
    {
        \$reportModelMock = \$this->getMockBuilder(ReportModel::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('report_export_batch_size')
            ->willReturn(11);

        \$reportDataAdapter = new ReportDataAdapter(\$reportModelMock);

        \$report              = new Report();
        \$reportExportOptions = new ReportExportOptions(\$coreParametersHelperMock);

        \$options = [
            'paginate'        => true,
            'limit'           => 11,
            'ignoreGraphData' => true,
            'page'            => 1,
            'dateTo'          => null,
            'dateFrom'        => null,
        ];

        \$reportModelMock->expects(\$this->once())
            ->method('getReportData')
            ->with(\$report, null, \$options)
            ->willReturn(Fixtures::getValidReportResult());

        \$result = \$reportDataAdapter->getReportData(\$report, \$reportExportOptions);

        \$this->assertSame(Fixtures::getValidReportData(), \$result->getData());
        \$this->assertSame(Fixtures::getValidReportHeaders(), \$result->getHeaders());
        \$this->assertSame(Fixtures::getValidReportTotalResult(), \$result->getTotalResults());
        \$this->assertSame(Fixtures::getStringType(), \$result->getType('city'));
        \$this->assertSame(Fixtures::getDateType(), \$result->getType('date_identified'));
        \$this->assertSame(Fixtures::getEmailType(), \$result->getType('email'));
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
        return "@bundles/ReportBundle/Tests/Adapter/ReportDataAdapterTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Adapter/ReportDataAdapterTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Adapter/ReportDataAdapterTest.php");
    }
}
