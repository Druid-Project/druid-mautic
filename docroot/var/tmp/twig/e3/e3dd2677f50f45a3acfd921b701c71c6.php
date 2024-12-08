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

/* @bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php */
class __TwigTemplate_6c48161fdbfd9fd779f8c94fe13df737 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\ReportBundle\\Model\\ReportExportOptions;

class ReportExportOptionsTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testBatch(): void
    {
        \$coreParametersHelper = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_batch_size')
            ->willReturn(3);

        \$reportExportOptions = new ReportExportOptions(\$coreParametersHelper);

        \$this->assertSame(1, \$reportExportOptions->getPage());
        \$this->assertSame(3, \$reportExportOptions->getBatchSize());

        \$reportExportOptions->beginExport();
        \$this->assertSame(1, \$reportExportOptions->getPage());
        \$this->assertSame(3, \$reportExportOptions->getNumberOfProcessedResults());

        \$reportExportOptions->nextBatch();
        \$this->assertSame(2, \$reportExportOptions->getPage());
        \$this->assertSame(6, \$reportExportOptions->getNumberOfProcessedResults());

        \$reportExportOptions->nextBatch();
        \$this->assertSame(3, \$reportExportOptions->getPage());
        \$this->assertSame(9, \$reportExportOptions->getNumberOfProcessedResults());
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
        return "@bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Model/ReportExportOptionsTest.php");
    }
}
