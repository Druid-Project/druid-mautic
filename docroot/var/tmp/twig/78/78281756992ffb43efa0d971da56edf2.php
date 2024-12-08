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

/* @bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php */
class __TwigTemplate_a84155d6039834df607c0e1a0a804184 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Builder;

class BundleMetadata
{
    /**
     * @var string
     */
    private \$directory;

    /**
     * @var string
     */
    private \$namespace;

    /**
     * @var string
     */
    private \$baseName;

    /**
     * @var string
     */
    private \$bundleName;

    /**
     * @var array<string, mixed>
     */
    private array \$metadata = [
        'config'            => [],
        'permissionClasses' => [],
    ];

    /**
     * @param array<string, mixed> \$metadata
     */
    public function __construct(array \$metadata)
    {
        \$this->metadata = \$metadata;

        if (!isset(\$this->metadata['permissionClasses'])) {
            \$this->metadata['permissionClasses'] = [];
        }

        if (!isset(\$this->metadata['config'])) {
            \$this->metadata['config'] = [];
        }

        \$this->directory  = \$metadata['directory'];
        \$this->namespace  = \$metadata['namespace'];
        \$this->baseName   = \$metadata['bundle'];
        \$this->bundleName = \$metadata['symfonyBundleName'];
    }

    public function getDirectory(): string
    {
        return \$this->directory;
    }

    public function getNamespace(): string
    {
        return \$this->namespace;
    }

    public function getBaseName(): string
    {
        return \$this->baseName;
    }

    public function getBundleName(): string
    {
        return \$this->bundleName;
    }

    public function setConfig(array \$config): void
    {
        \$this->metadata['config'] = \$config;
    }

    public function addPermissionClass(string \$class): void
    {
        \$this->metadata['permissionClasses'][\$class] = \$class;
    }

    public function toArray(): array
    {
        return \$this->metadata;
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
        return "@bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/Builder/BundleMetadata.php");
    }
}
