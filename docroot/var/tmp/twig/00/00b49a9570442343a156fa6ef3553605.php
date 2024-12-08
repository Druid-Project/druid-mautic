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

/* @bundles/CoreBundle/Helper/Update/Github/Release.php */
class __TwigTemplate_aa24a7b849367c5530f3ffdeae7f2515 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\Github;

use Mautic\\CoreBundle\\Helper\\Update\\Exception\\UpdatePackageNotFoundException;
use Mautic\\CoreBundle\\Release\\Metadata;

class Release
{
    /**
     * @var string
     */
    private \$version;

    private string \$downloadUrl;

    /**
     * @var string
     */
    private \$announcementUrl;

    private string \$stability;

    private Metadata \$metadata;

    /**
     * @throws UpdatePackageNotFoundException
     */
    public function __construct(array \$release, Metadata \$metadata)
    {
        \$this->version         = \$release['tag_name'];
        \$this->downloadUrl     = \$this->parseUpdatePackage(\$release['assets']);
        \$this->announcementUrl = \$metadata->getAnnouncementUrl() ?: \$release['html_url'];
        \$this->stability       = \$metadata->getStability();
        \$this->metadata        = \$metadata;
    }

    public function getVersion(): string
    {
        return \$this->version;
    }

    public function getDownloadUrl(): string
    {
        return \$this->downloadUrl;
    }

    public function getAnnouncementUrl(): string
    {
        return \$this->announcementUrl;
    }

    public function getStability(): string
    {
        return \$this->stability;
    }

    public function getMetadata(): Metadata
    {
        return \$this->metadata;
    }

    /**
     * @throws UpdatePackageNotFoundException
     */
    private function parseUpdatePackage(array \$assets): string
    {
        foreach (\$assets as \$asset) {
            if (str_contains(\$asset['name'], 'update.zip')) {
                return \$asset['browser_download_url'];
            }
        }

        throw new UpdatePackageNotFoundException();
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
        return "@bundles/CoreBundle/Helper/Update/Github/Release.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/Github/Release.php", "/app/docroot/app/bundles/CoreBundle/Helper/Update/Github/Release.php");
    }
}
