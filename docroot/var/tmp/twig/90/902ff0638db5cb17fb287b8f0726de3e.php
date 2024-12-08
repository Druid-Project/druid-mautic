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

/* @bundles/CoreBundle/Tests/Unit/Helper/FilePathResolverTest.php */
class __TwigTemplate_8b78d29d29d0dd87056e1ec731c50fce extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Filesystem\\Exception\\IOException;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class FilePathResolverTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|Filesystem
     */
    private MockObject \$filesystemMock;

    /**
     * @var MockObject|UploadedFile
     */
    private MockObject \$fileMock;

    private InputHelper \$inputHelper;

    private FilePathResolver \$filePathResolver;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->filesystemMock   = \$this->createMock(Filesystem::class);
        \$this->fileMock         = \$this->createMock(UploadedFile::class);
        \$this->inputHelper      = new InputHelper();
        \$this->filePathResolver = new FilePathResolver(\$this->filesystemMock, \$this->inputHelper);
    }

    /**
     * @testdox Get correct name if few previous names are taken
     */
    public function testGetUniqueName(): void
    {
        \$uploadDir     = 'my/upload/dir';
        \$extension     = 'jpg';
        \$dirtyFileName = 'fileName_x./-u'.\$extension;

        \$this->filesystemMock->expects(\$this->exactly(3))
            ->method('exists')
            ->withConsecutive(
                ['my/upload/dir/filename_x.jpg'],
                ['my/upload/dir/filename_x-1.jpg'],
                ['my/upload/dir/filename_x-2.jpg']
            )
            ->willReturnOnConsecutiveCalls(true, true, false);

        \$this->fileMock->expects(\$this->once())
            ->method('getClientOriginalName')
            ->with()
            ->willReturn(\$dirtyFileName);

        \$this->fileMock->expects(\$this->once())
            ->method('getClientOriginalExtension')
            ->with()
            ->willReturn(\$extension);

        \$name = \$this->filePathResolver->getUniqueFileName(\$uploadDir, \$this->fileMock);

        \$this->assertSame('filename_x-2.jpg', \$name);
    }

    /**
     * @testdox Throws an Exception if name cannot be generated
     */
    public function testCouldNotGetUniqueName(): void
    {
        \$uploadDir     = 'my/upload/dir';
        \$extension     = 'jpg';
        \$dirtyFileName = 'fileName_x./-u'.\$extension;

        \$this->filesystemMock->expects(\$this->exactly(1000))
            ->method('exists')
            ->willReturn(true);

        \$this->fileMock->expects(\$this->once())
            ->method('getClientOriginalName')
            ->with()
            ->willReturn(\$dirtyFileName);

        \$this->fileMock->expects(\$this->once())
            ->method('getClientOriginalExtension')
            ->with()
            ->willReturn(\$extension);

        \$this->expectException(FilePathException::class);
        \$this->expectExceptionMessage('Could not generate path');

        \$this->filePathResolver->getUniqueFileName(\$uploadDir, \$this->fileMock);
    }

    /**
     * @testdox No action is taken when directory already exists
     */
    public function testNoActionIfDirectoryExists(): void
    {
        \$directory = 'my/directory';

        \$this->filesystemMock->expects(\$this->once())
            ->method('exists')
            ->with(\$directory)
            ->willReturn(true);

        \$this->filePathResolver->createDirectory(\$directory);
    }

    /**
     * @testdox Create new directory
     */
    public function testCreateNewDirectory(): void
    {
        \$directory = 'my/directory';

        \$this->filesystemMock->expects(\$this->once())
            ->method('exists')
            ->with(\$directory)
            ->willReturn(false);

        \$this->filesystemMock->expects(\$this->once())
            ->method('mkdir')
            ->with(\$directory);

        \$this->filePathResolver->createDirectory(\$directory);
    }

    /**
     * @testdox Directory could not be created
     */
    public function testDirectoryCouldNotBeCreated(): void
    {
        \$directory = 'my/directory';

        \$this->filesystemMock->expects(\$this->once())
            ->method('exists')
            ->with(\$directory)
            ->willReturn(false);

        \$this->filesystemMock->expects(\$this->once())
            ->method('mkdir')
            ->with(\$directory)
            ->willThrowException(new IOException(''));

        \$this->expectException(FilePathException::class);
        \$this->expectExceptionMessage('Could not create directory');

        \$this->filePathResolver->createDirectory(\$directory);
    }

    /**
     * @testdox Successfuly detete file
     */
    public function testDeleteFile(): void
    {
        \$file = 'my/file';

        \$this->filesystemMock->expects(\$this->once())
            ->method('exists')
            ->with(\$file)
            ->willReturn(true);

        \$this->filesystemMock->expects(\$this->once())
            ->method('remove')
            ->with(\$file);

        \$this->filePathResolver->delete(\$file);
    }

    /**
     * @testdox File could not be deleted
     */
    public function testCouldNotDeleteFile(): void
    {
        \$file = 'my/file';

        \$this->filesystemMock->expects(\$this->once())
            ->method('exists')
            ->with(\$file)
            ->willReturn(true);

        \$this->filesystemMock->expects(\$this->once())
            ->method('remove')
            ->with(\$file)
            ->willThrowException(new IOException(''));

        \$this->filePathResolver->delete(\$file);
    }

    /**
     * @testdox File could not be deleted
     */
    public function testDeleteFileWhichNotExists(): void
    {
        \$file = 'my/file';

        \$this->filesystemMock->expects(\$this->once())
            ->method('exists')
            ->with(\$file)
            ->willReturn(false);

        \$this->filesystemMock->expects(\$this->never())
            ->method('remove');

        \$this->filePathResolver->delete(\$file);
    }

    public function testMove(): void
    {
        \$originalPath = 'my/file';
        \$targetPath   = 'my/new/file';

        \$this->filesystemMock->expects(\$this->once())
            ->method('rename')
            ->with(\$originalPath, \$targetPath);

        \$this->filePathResolver->move(\$originalPath, \$targetPath);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/FilePathResolverTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/FilePathResolverTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/FilePathResolverTest.php");
    }
}
