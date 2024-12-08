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

/* @bundles/CoreBundle/Validator/FileUploadValidator.php */
class __TwigTemplate_cee4472ec8a1acb596a2be93cf74961d extends Template
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

namespace Mautic\\CoreBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Helper\\FileHelper;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class FileUploadValidator
{
    public function __construct(
        protected TranslatorInterface \$translator
    ) {
    }

    /**
     * @param int    \$fileSize          In bytes
     * @param string \$fileExtension
     * @param int    \$maxUploadSize     In bytes
     * @param string \$extensionErrorMsg
     * @param string \$sizeErrorMsg
     *
     * @throws FileInvalidException
     */
    public function validate(\$fileSize, \$fileExtension, \$maxUploadSize, array \$allowedExtensions, \$extensionErrorMsg, \$sizeErrorMsg): void
    {
        \$errors = [];

        try {
            \$this->checkExtension(\$fileExtension, \$allowedExtensions, \$extensionErrorMsg);
        } catch (FileInvalidException \$e) {
            \$errors[] = \$e->getMessage();
        }

        try {
            \$this->checkFileSize(\$fileSize, \$maxUploadSize, \$sizeErrorMsg);
        } catch (FileInvalidException \$e) {
            \$errors[] = \$e->getMessage();
        }

        if (\$errors) {
            \$message = implode('<br />', \$errors);
            throw new FileInvalidException(\$message);
        }
    }

    /**
     * @param string \$extension
     * @param string \$extensionErrorMsg
     *
     * @throws FileInvalidException
     */
    public function checkExtension(\$extension, array \$allowedExtensions, \$extensionErrorMsg): void
    {
        if (!in_array(strtolower(\$extension), array_map('strtolower', \$allowedExtensions), true)) {
            \$error = \$this->translator->trans(\$extensionErrorMsg, [
                '%fileExtension%' => \$extension,
                '%extensions%'    => implode(', ', \$allowedExtensions),
            ], 'validators');

            throw new FileInvalidException(\$error);
        }
    }

    /**
     * @param int    \$fileSize
     * @param string \$maxUploadSizeMB Max file size in MB
     * @param string \$sizeErrorMsg
     *
     * @throws FileInvalidException
     */
    public function checkFileSize(\$fileSize, \$maxUploadSizeMB, \$sizeErrorMsg): void
    {
        if (!\$maxUploadSizeMB) {
            return;
        }

        \$maxUploadSize = FileHelper::convertMegabytesToBytes(\$maxUploadSizeMB);

        if (\$fileSize > \$maxUploadSize) {
            \$message = \$this->translator->trans(\$sizeErrorMsg, [
                '%fileSize%' => FileHelper::convertBytesToMegabytes(\$fileSize),
                '%maxSize%'  => FileHelper::convertBytesToMegabytes(\$maxUploadSize),
            ], 'validators');

            throw new FileInvalidException(\$message);
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
        return "@bundles/CoreBundle/Validator/FileUploadValidator.php";
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
        return new Source("", "@bundles/CoreBundle/Validator/FileUploadValidator.php", "/app/docroot/app/bundles/CoreBundle/Validator/FileUploadValidator.php");
    }
}
