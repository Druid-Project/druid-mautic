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

/* @bundles/ReportBundle/Tests/Model/CsvExporterTest.php */
class __TwigTemplate_c693a142233c185a01740b2c149f87e7 extends Template
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
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\DateHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use Mautic\\ReportBundle\\Crate\\ReportDataResult;
use Mautic\\ReportBundle\\Model\\CsvExporter;
use Mautic\\ReportBundle\\Tests\\Fixtures;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CsvExporterTest extends \\PHPUnit\\Framework\\TestCase
{
    public const DATEONLYFORMAT = 'F j, Y';

    public const TIMEONLYFORMAT          = 'g:i a';

    private CsvExporter \$csvExporter;

    private string|false \$tmpFile;

    /**
     * @var false|resource
     */
    private \$file;

    /**
     * @var TranslatorInterface
     */
    private mixed \$translator;

    private FormatterHelper \$formatterHelperMock;

    public function setUp(): void
    {
        \$this->translator = \$this->createMock(TranslatorInterface::class);
        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->with('mautic.report.report.groupby.totals')
            ->willReturn('Totals');
        \$coreParametersHelperMock  = \$this->createMock(CoreParametersHelper::class);

        \$dateHelperMock =new DateHelper(
            'F j, Y g:i a T',
            'D, M d',
            self::DATEONLYFORMAT,
            self::TIMEONLYFORMAT,
            \$this->translator,
            \$coreParametersHelperMock
        );

        \$this->formatterHelperMock = new FormatterHelper(\$dateHelperMock, \$this->translator);

        \$this->csvExporter = new CsvExporter(\$this->formatterHelperMock, \$coreParametersHelperMock, \$this->translator);
        \$this->tmpFile     = tempnam(sys_get_temp_dir(), 'mautic_csv_export_test_');
        \$this->file        = fopen(\$this->tmpFile, 'w');

        parent::setUp();
    }

    public function tearDown(): void
    {
        if (is_resource(\$this->file)) {
            fclose(\$this->file);
        }

        if (file_exists(\$this->tmpFile)) {
            unlink(\$this->tmpFile);
        }
    }

    public function testExport(): void
    {
        \$reportDataResult = new ReportDataResult(Fixtures::getValidReportResult());
        \$this->csvExporter->export(\$reportDataResult, \$this->file);

        fclose(\$this->file);
        \$result = array_map('str_getcsv', file(\$this->tmpFile));

        \$expected = [
            [
                'City',
                'Company',
                'Country',
                'Date identified',
                'Email',
            ],
            [
                'City',
                '',
                '',
                '',
                '',
            ],
            [
                '',
                'Company',
                '',
                '',
                '',
            ],
            [
                '',
                '',
                'Country',
                '',
                '',
            ],
            [
                '',
                'ConnectWise',
                '',
                '2017-10-10',
                'connectwise@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-10',
                'mytest@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-10',
                'john@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-10',
                'bogus@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-10',
                'date-test@example.com',
            ],
            [
                '',
                'Bodega Club',
                '',
                '2017-10-10',
                'club@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-11',
                'test@example.com',
            ],
            [
                '',
                '',
                '',
                '2017-10-12',
                'test@example.com',
            ],
        ];

        \$dateTimeHelper = new DateTimeHelper();
        foreach (\$expected as \$key => \$expect) {
            if (0 === \$key) {
                continue;
            }
            if (!empty(\$expect[3])) {
                \$dateTimeHelper->setDateTime(\$expect[3]);
                \$expected[\$key][3] = \$dateTimeHelper->toLocalString(
                    sprintf('%s %s', self::DATEONLYFORMAT, self::TIMEONLYFORMAT)
                );
            }
        }

        \$this->assertSame(\$expected, \$result);
    }

    public function testExportWithAggregatedColumns(): void
    {
        \$fixtureAggregatedColumns = Fixtures::getValidReportResultWithAggregatedColumns();
        \$reportDataResult         = new ReportDataResult(\$fixtureAggregatedColumns);

        \$this->csvExporter->export(\$reportDataResult, \$this->file);

        fclose(\$this->file);
        \$result = array_map('str_getcsv', file(\$this->tmpFile));

        \$expectedHeaders                                  = ['ID', 'Name', 'SUM Read', 'AVG Read', 'COUNT Contact ID'];
        \$expectedTotals                                   = \$reportDataResult->getTotalsToExport(\$this->formatterHelperMock);
        \$expectedTotals[array_key_first(\$expectedTotals)] = \$this->translator->trans('mautic.report.report.groupby.totals');
        \$expectedData                                     = \$reportDataResult->getData();

        \$this->assertCount(4, \$result);
        \$this->assertSame(\$expectedHeaders, \$result[0]);
        \$this->assertSame(array_values(\$expectedData[0]), array_values(\$result[1]));
        \$this->assertSame(array_values(\$expectedData[1]), array_values(\$result[2]));
        \$this->assertSame(array_values(\$expectedTotals), array_values(\$result[3]));
    }

    public function testPutTotals(): void
    {
        \$fixtureAggregatedColumns = Fixtures::getValidReportResultWithAggregatedColumns();
        \$reportDataResult         = new ReportDataResult(\$fixtureAggregatedColumns);
        \$expected                 = \$reportDataResult->getTotalsToExport(\$this->formatterHelperMock);

        \$this->csvExporter->putTotals(\$expected, \$this->file);
        fclose(\$this->file);

        \$result = array_map('str_getcsv', file(\$this->tmpFile));

        \$this->assertCount(1, \$result);
        \$this->assertSame('Totals', \$result[0][0]);
        \$this->assertSame(array_slice(array_values(\$expected), 1), array_slice(array_values(\$result[0]), 1));
    }

    public function testPutHeader(): void
    {
        \$fixtureAggregatedColumns = Fixtures::getValidReportResultWithAggregatedColumns();
        \$reportDataResult         = new ReportDataResult(\$fixtureAggregatedColumns);
        \$expected                 = \$reportDataResult->getHeaders();

        \$this->csvExporter->putHeader(\$reportDataResult, \$this->file);
        fclose(\$this->file);

        \$result = array_map('str_getcsv', file(\$this->tmpFile));

        \$this->assertCount(1, \$result);
        \$this->assertSame(array_values(\$expected), array_values(\$result[0]));
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
        return "@bundles/ReportBundle/Tests/Model/CsvExporterTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/CsvExporterTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Model/CsvExporterTest.php");
    }
}
