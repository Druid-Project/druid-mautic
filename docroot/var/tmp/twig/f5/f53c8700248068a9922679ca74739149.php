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

/* @bundles/FormBundle/Crate/UploadFileCrate.php */
class __TwigTemplate_c8857d9c255b09e059f2333d635b8395 extends Template
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

namespace Mautic\\FormBundle\\Crate;

use Mautic\\FormBundle\\Entity\\Field;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class UploadFileCrate implements \\Iterator
{
    /**
     * @var array|FileFieldCrate[]
     */
    private array \$fileFieldCrate = [];

    private int \$position = 0;

    public function addFile(UploadedFile \$file, Field \$field): void
    {
        \$this->fileFieldCrate[] = new FileFieldCrate(\$file, \$field);
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function current(): mixed
    {
        return \$this->fileFieldCrate[\$this->position];
    }

    public function key(): mixed
    {
        return \$this->position;
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function valid(): bool
    {
        return isset(\$this->fileFieldCrate[\$this->position]);
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
        return "@bundles/FormBundle/Crate/UploadFileCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/UploadFileCrate.php", "/app/docroot/app/bundles/FormBundle/Crate/UploadFileCrate.php");
    }
}
