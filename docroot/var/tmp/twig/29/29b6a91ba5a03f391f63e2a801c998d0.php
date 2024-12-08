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

/* @bundles/FormBundle/Validator/UploadFieldValidator.php */
class __TwigTemplate_6feb11b776bdc3d2fa9492803e0caff5 extends Template
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

namespace Mautic\\FormBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Validator\\FileUploadValidator;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Exception\\FileValidationException;
use Mautic\\FormBundle\\Exception\\NoFileGivenException;
use Mautic\\FormBundle\\Form\\Type\\FormFieldFileType;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

class UploadFieldValidator
{
    public function __construct(
        private FileUploadValidator \$fileUploadValidator
    ) {
    }

    /**
     * @return UploadedFile
     *
     * @throws FileValidationException
     * @throws NoFileGivenException
     */
    public function processFileValidation(Field \$field, Request \$request)
    {
        \$files = \$request->files->get('mauticform');

        if (!\$files || !array_key_exists(\$field->getAlias(), \$files) || !\$files[\$field->getAlias()] instanceof UploadedFile) {
            throw new NoFileGivenException();
        }

        \$file = \$files[\$field->getAlias()];

        \$properties = \$field->getProperties();

        \$maxUploadSize     = \$properties[FormFieldFileType::PROPERTY_ALLOWED_FILE_SIZE];
        \$allowedExtensions = \$properties[FormFieldFileType::PROPERTY_ALLOWED_FILE_EXTENSIONS];

        try {
            \$this->fileUploadValidator->validate(\$file->getSize(), \$file->getClientOriginalExtension(), \$maxUploadSize, \$allowedExtensions, 'mautic.form.submission.error.file.extension', 'mautic.form.submission.error.file.size');

            return \$file;
        } catch (FileInvalidException \$e) {
            throw new FileValidationException(\$e->getMessage());
        }
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
        return "@bundles/FormBundle/Validator/UploadFieldValidator.php";
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
        return new Source("", "@bundles/FormBundle/Validator/UploadFieldValidator.php", "/app/docroot/app/bundles/FormBundle/Validator/UploadFieldValidator.php");
    }
}
