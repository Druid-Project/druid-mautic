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

/* @bundles/ReportBundle/Tests/Model/ExportHandlerTest.php */
class __TwigTemplate_00d106dc660a72104db63864c6ddde32 extends Template
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

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\ReportBundle\\Exception\\FileIOException;
use Mautic\\ReportBundle\\Model\\ExportHandler;

class ExportHandlerTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testHandler(): void
    {
        \$tmpDir = sys_get_temp_dir();

        \$coreParametersHelperMock = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock->expects(\$this->any())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn(\$tmpDir);

        \$filePathResolver = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolver->expects(\$this->once())
            ->method('createDirectory');

        \$exportHandler = new ExportHandler(\$coreParametersHelperMock, \$filePathResolver);

        \$handler = \$exportHandler->getHandler('myFile');
        \$this->assertIsResource(\$handler);

        \$exportHandler->closeHandler(\$handler);
        \$this->assertIsClosedResource(\$handler);
    }

    public function testCreateDirectoryError(): void
    {
        \$tmpDir = sys_get_temp_dir();

        \$this->expectException(FileIOException::class);
        \$this->expectExceptionMessage('Could not create directory '.\$tmpDir);

        \$coreParametersHelperMock = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock->expects(\$this->any())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn(\$tmpDir);

        \$filePathResolver = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolver->expects(\$this->once())
            ->method('createDirectory')
            ->willThrowException(new FilePathException());

        \$exportHandler = new ExportHandler(\$coreParametersHelperMock, \$filePathResolver);

        \$exportHandler->getHandler('myFile');
    }

    public function testOpenFileError(): void
    {
        \$tmpDir = 'xxx';

        \$this->expectException(FileIOException::class);
        \$this->expectExceptionMessage('Could not open file xxx/myFile.csv');

        \$coreParametersHelperMock = \$this->getMockBuilder(CoreParametersHelper::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$coreParametersHelperMock->expects(\$this->any())
            ->method('get')
            ->with('report_temp_dir')
            ->willReturn(\$tmpDir);

        \$filePathResolver = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolver->expects(\$this->once())
            ->method('createDirectory');

        \$exportHandler = new ExportHandler(\$coreParametersHelperMock, \$filePathResolver);

        \$exportHandler->getHandler('myFile');
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
        return "@bundles/ReportBundle/Tests/Model/ExportHandlerTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Model/ExportHandlerTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Model/ExportHandlerTest.php");
    }
}
