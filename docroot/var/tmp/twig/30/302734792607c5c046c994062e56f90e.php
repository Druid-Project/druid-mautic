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

/* @bundles/FormBundle/Helper/FormUploader.php */
class __TwigTemplate_0c1579103202cd6711501955378fe132 extends Template
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

namespace Mautic\\FormBundle\\Helper;

use Mautic\\CoreBundle\\Exception\\FileUploadException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\FileUploader;
use Mautic\\FormBundle\\Crate\\UploadFileCrate;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\Entity\\Submission;

class FormUploader
{
    public function __construct(
        private FileUploader \$fileUploader,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @throws FileUploadException
     */
    public function uploadFiles(UploadFileCrate \$filesToUpload, Submission \$submission): void
    {
        \$uploadedFiles = [];
        \$result        = \$submission->getResults();
        \$alias         = ''; // Only for IDE - will be overriden by foreach

        try {
            foreach (\$filesToUpload as \$fileFieldCrate) {
                \$field           = \$fileFieldCrate->getField();
                \$alias           = \$field->getAlias();
                \$uploadDir       = \$this->getUploadDir(\$field);
                \$fileName        = \$this->fileUploader->upload(\$uploadDir, \$fileFieldCrate->getUploadedFile());
                \$result[\$alias]  = \$fileName;
                \$uploadedFile    = \$uploadDir.DIRECTORY_SEPARATOR.\$fileName;
                \$this->fixRotationJPG(\$uploadedFile);
                \$uploadedFiles[] =\$uploadedFile;
            }
            \$submission->setResults(\$result);
        } catch (FileUploadException) {
            foreach (\$uploadedFiles as \$filePath) {
                \$this->fileUploader->delete(\$filePath);
            }
            throw new FileUploadException(\$alias);
        }
    }

    /**
     * @param string \$fileName
     */
    public function getCompleteFilePath(Field \$field, \$fileName): string
    {
        \$uploadDir = \$this->getUploadDir(\$field);

        return \$uploadDir.DIRECTORY_SEPARATOR.\$fileName;
    }

    public function deleteAllFilesOfFormField(Field \$field): void
    {
        if (!\$field->isFileType()) {
            return;
        }

        \$uploadDir = \$this->getUploadDir(\$field);
        \$this->fileUploader->delete(\$uploadDir);
    }

    public function deleteFilesOfForm(Form \$form): void
    {
        \$formId        = \$form->getId() ?: \$form->deletedId;
        \$formUploadDir = \$this->getUploadDirOfForm(\$formId);
        \$this->fileUploader->delete(\$formUploadDir);
    }

    /**
     * @todo Refactor code that result can be accessed normally and not only as a array of values
     */
    public function deleteUploadedFiles(Submission \$submission): void
    {
        \$fields = \$submission->getForm()->getFields();
        foreach (\$fields as \$field) {
            \$this->deleteFileOfFormField(\$submission, \$field);
        }
    }

    private function deleteFileOfFormField(Submission \$submission, Field \$field): void
    {
        \$alias   = \$field->getAlias();
        \$results = \$submission->getResults();

        if (!\$field->isFileType() || empty(\$results[\$alias])) {
            return;
        }

        \$fileName = \$results[\$alias];
        \$filePath = \$this->getCompleteFilePath(\$field, \$fileName);
        \$this->fileUploader->delete(\$filePath);
    }

    private function getUploadDir(Field \$field): string
    {
        \$fieldId       = \$field->getId();
        \$formUploadDir = \$this->getUploadDirOfForm(\$field->getForm()->getId());

        return \$formUploadDir.DIRECTORY_SEPARATOR.\$fieldId;
    }

    /**
     * @throws \\LogicException If formId is null
     */
    private function getUploadDirOfForm(int \$formId): string
    {
        \$uploadDir = \$this->coreParametersHelper->get('form_upload_dir');

        return \$uploadDir.DIRECTORY_SEPARATOR.\$formId;
    }

    /**
     * Fix iOS picture orientation after upload PHP
     * https://stackoverflow.com/questions/22308921/fix-ios-picture-orientation-after-upload-php.
     */
    private function fixRotationJPG(\$filename): void
    {
        if (IMAGETYPE_JPEG != exif_imagetype(\$filename)) {
            return;
        }
        \$exif = exif_read_data(\$filename);
        if (empty(\$exif['Orientation'])) {
            return;
        }
        \$ort  = \$exif['Orientation']; /* STORES ORIENTATION FROM IMAGE */
        \$ort1 = \$ort;
        if (!empty(\$ort1)) {
            \$image = imagecreatefromjpeg(\$filename);
            \$ort   = \$ort1;
            switch (\$ort) {
                case 3:
                    \$image = imagerotate(\$image, 180, 0);
                    break;

                case 6:
                    \$image = imagerotate(\$image, -90, 0);
                    break;

                case 8:
                    \$image = imagerotate(\$image, 90, 0);
                    break;
            }
        }
        imagejpeg(\$image, \$filename, 90);
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
        return "@bundles/FormBundle/Helper/FormUploader.php";
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
        return new Source("", "@bundles/FormBundle/Helper/FormUploader.php", "/app/docroot/app/bundles/FormBundle/Helper/FormUploader.php");
    }
}
