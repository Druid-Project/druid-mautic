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

/* @bundles/ReportBundle/Tests/Scheduler/Model/MessageScheduleTest.php */
class __TwigTemplate_b99d88fa50f4da8e2390751144edcfcf extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Scheduler\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FileProperties;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Scheduler\\Model\\MessageSchedule;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class MessageScheduleTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|Router
     */
    private MockObject \$router;

    /**
     * @var MockObject|FileProperties
     */
    private MockObject \$fileProperties;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private MockObject \$coreParametersHelper;

    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translatorMock;

    private Report \$report;

    private MessageSchedule \$messageSchedule;

    protected function setUp(): void
    {
        \$this->router               = \$this->createMock(Router::class);
        \$this->fileProperties       = \$this->createMock(FileProperties::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->translatorMock       = \$this->createMock(TranslatorInterface::class);
        \$this->report               = new Report();
        \$this->messageSchedule      = new MessageSchedule(
            \$this->translatorMock,
            \$this->fileProperties,
            \$this->coreParametersHelper,
            \$this->router
        );
    }

    /**
     * @dataProvider sendFileProvider
     *
     * @param int \$fileSize
     * @param int \$limit
     */
    public function testSendFile(\$fileSize, \$limit): void
    {
        \$this->translatorMock->expects(\$this->once())
            ->method('trans')
            ->with('mautic.report.schedule.email.message')
            ->willReturn('Subject');

        \$this->fileProperties->expects(\$this->once())
            ->method('getFileSize')
            ->with('path-to-a-file')
            ->willReturn(\$fileSize);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_max_filesize_in_bytes')
            ->willReturn(\$limit);

        \$this->router->expects(\$this->once())
            ->method('generate')
            ->with('mautic_report_view')
            ->willReturn('some/route');

        \$this->messageSchedule->getMessage(\$this->report, 'path-to-a-file');
    }

    public static function sendFileProvider()
    {
        return [
            [10, 100],
            [100, 100],
            [1, 1],
            [1, 1],
        ];
    }

    /**
     * @dataProvider doSendFileProvider
     *
     * @param int \$fileSize
     * @param int \$limit
     */
    public function testDoSendFile(\$fileSize, \$limit): void
    {
        \$this->translatorMock->expects(\$this->once())
            ->method('trans')
            ->with('mautic.report.schedule.email.message_file_not_attached')
            ->willReturn('Subject');

        \$this->fileProperties->expects(\$this->once())
            ->method('getFileSize')
            ->with('path-to-a-file')
            ->willReturn(\$fileSize);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_max_filesize_in_bytes')
            ->willReturn(\$limit);

        \$this->router->expects(\$this->once())
            ->method('generate')
            ->with('mautic_report_view');

        \$this->messageSchedule->getMessage(\$this->report, 'path-to-a-file');
    }

    public static function doSendFileProvider()
    {
        return [
            [100, 10],
            [100, 99],
        ];
    }

    /**
     * @dataProvider sendFileProvider
     *
     * @param int \$fileSize
     * @param int \$limit
     */
    public function testFileCouldBeSend(\$fileSize, \$limit): void
    {
        \$this->fileProperties->expects(\$this->once())
            ->method('getFileSize')
            ->with('path-to-a-file')
            ->willReturn(\$fileSize);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_max_filesize_in_bytes')
            ->willReturn(\$limit);

        \$this->assertTrue(\$this->messageSchedule->fileCouldBeSend('path-to-a-file'));
    }

    /**
     * @dataProvider doSendFileProvider
     *
     * @param int \$fileSize
     * @param int \$limit
     */
    public function testFileCouldNotBeSend(\$fileSize, \$limit): void
    {
        \$this->fileProperties->expects(\$this->once())
            ->method('getFileSize')
            ->with('path-to-a-file')
            ->willReturn(\$fileSize);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('report_export_max_filesize_in_bytes')
            ->willReturn(\$limit);

        \$this->assertFalse(\$this->messageSchedule->fileCouldBeSend('path-to-a-file'));
    }

    public function testGetMessageForAttachedFile(): void
    {
        \$report = \$this->createMock(Report::class);

        \$report->expects(\$this->once())
            ->method('getId')
            ->willReturn(33);

        \$this->router->expects(\$this->once())
            ->method('generate')
            ->with('mautic_report_view', ['objectId' => 33], UrlGeneratorInterface::ABSOLUTE_URL)
            ->willReturn('absolute/link');

        \$this->translatorMock->expects(\$this->once())
            ->method('trans')
            ->with('mautic.report.schedule.email.message')
            ->willReturn('The message');

        \$this->assertSame('The message', \$this->messageSchedule->getMessageForAttachedFile(\$report));
    }

    public function testGetMessageForLinkedFile(): void
    {
        \$report = \$this->createMock(Report::class);

        \$report->expects(\$this->once())
            ->method('getId')
            ->willReturn(33);

        \$report->expects(\$this->once())
            ->method('getName')
            ->willReturn('Report ABC');

        \$this->router->expects(\$this->once())
            ->method('generate')
            ->with('mautic_report_download', ['reportId' => 33], UrlGeneratorInterface::ABSOLUTE_URL)
            ->willReturn('absolute/link');

        \$this->translatorMock->expects(\$this->once())
            ->method('trans')
            ->with('mautic.report.schedule.email.message_file_linked')
            ->willReturn('The message', ['%report_name%' => 'Report ABC', '%link%' => 'absolute/link']);

        \$this->assertSame('The message', \$this->messageSchedule->getMessageForLinkedFile(\$report));
    }

    public function testGetSubject(): void
    {
        \$report = \$this->createMock(Report::class);

        \$report->expects(\$this->once())
            ->method('getName')
            ->willReturn('Report ABC');

        \$this->translatorMock->expects(\$this->once())
            ->method('trans')
            ->with('mautic.report.schedule.email.subject')
            ->willReturn('The subject');

        \$this->assertSame('The subject', \$this->messageSchedule->getSubject(\$report));
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
        return "@bundles/ReportBundle/Tests/Scheduler/Model/MessageScheduleTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Scheduler/Model/MessageScheduleTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Scheduler/Model/MessageScheduleTest.php");
    }
}