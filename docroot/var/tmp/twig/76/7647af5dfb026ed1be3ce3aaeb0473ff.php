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

/* @bundles/AssetBundle/Translations/en_US/validators.ini */
class __TwigTemplate_6bcb18e519ac5eede1f3c2f4ee955146 extends Template
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
        yield "mautic.asset.asset.error.missing.file=\"A file must be uploaded before Asset is saved when local storage is selected.\"
mautic.asset.asset.error.missing.title=\"Assset Title is required.\"
mautic.asset.asset.error.missing.remote.path=\"A remote URL must be specified when remote storage is selected.\"
mautic.asset.asset.error.file.size=\"Upload failed as the file is %fileSize% MB which exceeds the maximum allowed file size of %maxSize% MB. This setting can be changed in the Configuration.\"
mautic.asset.asset.error.file.extension=\"Upload failed as the file extension, %fileExtension%, is not in the list of allowed extensions (%extensions%). This setting can be changed in the Configuration.\"
mautic.asset.asset.error.file.extension.js=\"Upload failed as the file extension is not in the list of allowed extensions (%extensions%). This setting can be changed in the Configuration.\"
mautic.asset.validation.error.url=\"The remote should be a valid URL.\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/AssetBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/AssetBundle/Translations/en_US/validators.ini", "/app/docroot/app/bundles/AssetBundle/Translations/en_US/validators.ini");
    }
}
