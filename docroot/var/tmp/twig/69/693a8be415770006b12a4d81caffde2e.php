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

/* @bundles/ReportBundle/Model/ExportHandler.php */
class __TwigTemplate_8cfae004abcd8a7127c8b96c3badbd1b extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FilePathResolver;
use Mautic\\ReportBundle\\Exception\\FileIOException;

class ExportHandler
{
    /**
     * @var string
     */
    private \$dir;

    public function __construct(
        CoreParametersHelper \$coreParametersHelper,
        private FilePathResolver \$filePathResolver
    ) {
        \$this->dir              = \$coreParametersHelper->get('report_temp_dir');
    }

    /**
     * @return bool|resource
     *
     * @throws FileIOException
     */
    public function getHandler(\$fileName)
    {
        \$path = \$this->getPath(\$fileName);

        if (false === (\$handler = @fopen(\$path, 'a'))) {
            throw new FileIOException('Could not open file '.\$path);
        }

        return \$handler;
    }

    /**
     * @param resource \$handler
     */
    public function closeHandler(\$handler): void
    {
        fclose(\$handler);
    }

    /**
     * @param string \$fileName
     */
    public function removeFile(\$fileName): void
    {
        try {
            \$path = \$this->getPath(\$fileName);
            \$this->filePathResolver->delete(\$path);
        } catch (FileIOException) {
        }
    }

    /**
     * @throws FileIOException
     */
    public function getPath(\$fileName): string
    {
        try {
            \$this->filePathResolver->createDirectory(\$this->dir);
        } catch (FilePathException \$e) {
            throw new FileIOException('Could not create directory '.\$this->dir, 0, \$e);
        }

        return \$this->dir.'/'.\$fileName.'.csv';
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
        return "@bundles/ReportBundle/Model/ExportHandler.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ExportHandler.php", "/app/docroot/app/bundles/ReportBundle/Model/ExportHandler.php");
    }
}
