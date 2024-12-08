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

/* @bundles/CoreBundle/Helper/FilePathResolver.php */
class __TwigTemplate_1e56f17f2afde05226c6e405a98fb7e2 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Symfony\\Component\\Filesystem\\Exception\\IOException;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class FilePathResolver
{
    public function __construct(
        private Filesystem \$filesystem,
        private InputHelper \$inputHelper
    ) {
    }

    /**
     * @param string \$uploadDir
     *
     * @throws FilePathException
     */
    public function getUniqueFileName(\$uploadDir, UploadedFile \$file): string
    {
        \$inputHelper       = \$this->inputHelper;
        \$fullName          = \$file->getClientOriginalName();
        \$fullNameSanitized = \$inputHelper::filename(\$fullName);
        \$ext               = \$this->getFileExtension(\$file);
        \$baseFileName      = pathinfo(\$fullNameSanitized, PATHINFO_FILENAME);
        \$name              = \$baseFileName;
        \$filePath          = \$this->getFilePath(\$uploadDir, \$baseFileName, \$ext);
        \$i                 = 1;

        while (\$this->filesystem->exists(\$filePath)) {
            \$name     = \$baseFileName.'-'.\$i;
            \$filePath = \$this->getFilePath(\$uploadDir, \$name, \$ext);
            ++\$i;

            if (\$i > 1000) {
                throw new FilePathException('Could not generate path');
            }
        }

        return \$name.\$ext;
    }

    /**
     * @param string \$directory
     *
     * @throws FilePathException
     */
    public function createDirectory(\$directory): void
    {
        if (\$this->filesystem->exists(\$directory)) {
            return;
        }
        try {
            \$this->filesystem->mkdir(\$directory);
        } catch (IOException) {
            throw new FilePathException('Could not create directory');
        }
    }

    /**
     * @param string \$path
     */
    public function delete(\$path): void
    {
        if (!\$this->filesystem->exists(\$path)) {
            return;
        }
        try {
            \$this->filesystem->remove(\$path);
        } catch (IOException) {
        }
    }

    public function move(string \$originPath, string \$targetPath): void
    {
        \$this->filesystem->rename(\$originPath, \$targetPath);
    }

    /**
     * @param string \$uploadDir
     * @param string \$fileName
     * @param string \$ext
     */
    private function getFilePath(\$uploadDir, \$fileName, \$ext): string
    {
        return \$uploadDir.DIRECTORY_SEPARATOR.\$fileName.\$ext;
    }

    private function getFileExtension(UploadedFile \$file): string
    {
        \$ext = \$file->getClientOriginalExtension();

        return ('' === \$ext ? '' : '.').\$ext;
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
        return "@bundles/CoreBundle/Helper/FilePathResolver.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/FilePathResolver.php", "/app/docroot/app/bundles/CoreBundle/Helper/FilePathResolver.php");
    }
}
