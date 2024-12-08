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

/* @bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php */
class __TwigTemplate_4ca0d0f961bdc3d8349ecc75372a924f extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Exception\\FileUploadException;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\CoreBundle\\Helper\\FileUploader;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class FileUploaderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Uploader uploads files correctly
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::upload
     */
    public function testSuccessfulUpload(): void
    {
        \$uploadDir = 'my/upload/dir';
        \$fileName  = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock->expects(\$this->once())
            ->method('move')
            ->with(\$uploadDir, \$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('getUniqueFileName')
            ->with(\$uploadDir, \$fileMock)
            ->willReturn(\$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('createDirectory')
            ->with(\$uploadDir);

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$fileUploader->upload(\$uploadDir, \$fileMock);
    }

    /**
     * @testdox Throw an Exception if Uploader could not create directory
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::upload
     */
    public function testCouldNotCreateDirectory(): void
    {
        \$uploadDir = 'my/upload/dir';
        \$fileName  = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock->expects(\$this->never())
            ->method('move');

        \$filePathResolverMock->expects(\$this->once())
            ->method('getUniqueFileName')
            ->with(\$uploadDir, \$fileMock)
            ->willReturn(\$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('createDirectory')
            ->with(\$uploadDir)
            ->willThrowException(new FilePathException('Could not create directory'));

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$this->expectException(FileUploadException::class);
        \$this->expectExceptionMessage('Could not create directory');

        \$fileUploader->upload(\$uploadDir, \$fileMock);
    }

    /**
     * @testdox Throw an Exception if Uploader could not move file to givven directory
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::upload
     */
    public function testCouldNotMoveFile(): void
    {
        \$uploadDir = 'my/upload/dir';
        \$fileName  = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock = \$this->getMockBuilder(UploadedFile::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$fileMock->expects(\$this->once())
            ->method('move')
            ->with(\$uploadDir, \$fileName)
            ->willThrowException(new FileException());

        \$filePathResolverMock->expects(\$this->once())
            ->method('getUniqueFileName')
            ->with(\$uploadDir, \$fileMock)
            ->willReturn(\$fileName);

        \$filePathResolverMock->expects(\$this->once())
            ->method('createDirectory')
            ->with(\$uploadDir);

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$this->expectException(FileUploadException::class);
        \$this->expectExceptionMessage('Could not upload file');

        \$fileUploader->upload(\$uploadDir, \$fileMock);
    }

    /**
     * @testdox Test for file delete
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\FileUploader::delete
     */
    public function testDeleteFile(): void
    {
        \$file = 'MyfileName';

        \$filePathResolverMock = \$this->getMockBuilder(FilePathResolver::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$filePathResolverMock->expects(\$this->once())
            ->method('delete')
            ->with(\$file);

        \$fileUploader = new FileUploader(\$filePathResolverMock);

        \$fileUploader->delete(\$file);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/FileUploaderTest.php");
    }
}
