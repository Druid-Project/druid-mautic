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

/* @bundles/FormBundle/Crate/FileFieldCrate.php */
class __TwigTemplate_e4018bc8aed7176addc687f441794753 extends Template
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

class FileFieldCrate
{
    public function __construct(
        private UploadedFile \$uploadedFile,
        private Field \$field
    ) {
    }

    /**
     * @return UploadedFile
     */
    public function getUploadedFile()
    {
        return \$this->uploadedFile;
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return \$this->field;
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
        return "@bundles/FormBundle/Crate/FileFieldCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/FileFieldCrate.php", "/app/docroot/app/bundles/FormBundle/Crate/FileFieldCrate.php");
    }
}
