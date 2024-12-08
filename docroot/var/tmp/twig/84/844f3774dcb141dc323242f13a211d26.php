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

/* @bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php */
class __TwigTemplate_6405c5787f3e6c64f399968bc360ea37 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata;

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use Mautic\\CoreBundle\\Entity\\DeprecatedInterface;
use Symfony\\Component\\Finder\\Finder;

class EntityMetadata
{
    /**
     * @var array
     */
    private \$ormConfig = [];

    private array \$serializerConfig = [];

    public function __construct(
        private BundleMetadata \$metadata
    ) {
    }

    public function build(): void
    {
        // Check for staticphp mapping
        \$entityDirectory = \$this->metadata->getDirectory().'/Entity';
        if (!file_exists(\$entityDirectory)) {
            return;
        }

        \$finder = Finder::create()
            ->name('*.php')
            ->notName('*Repository.php')
            ->in(\$entityDirectory);

        \$bundleNamespace = \$this->metadata->getNamespace();
        \$bundleName      = \$this->metadata->getBundleName();

        /** @var \\SplFileInfo \$file */
        foreach (\$finder as \$file) {
            // Check to see if entities are organized by subfolder
            \$subFolder = \$file->getRelativePath() ? \$file->getRelativePath().'\\\\' : '';
            \$fileName  = basename(\$file->getFilename(), '.php');

            // Just check first file for the loadMetadata function
            \$className       = sprintf('\\\\%s\\\\Entity\\\\%s%s', \$bundleNamespace, \$subFolder, \$fileName);
            \$reflectionClass = new \\ReflectionClass(\$className);

            if (\$reflectionClass->implementsInterface(DeprecatedInterface::class)) {
                // Ignore this interface as it is extending another for BC purposes
                continue;
            }

            // The bundle leverages the static loadApiMetadata method
            if (empty(\$this->serializerConfig) && \$reflectionClass->hasMethod('loadApiMetadata')) {
                \$this->serializerConfig = [
                    'namespace_prefix' => \$bundleNamespace.'\\\\Entity',
                    'path'             => \"@\$bundleName/Entity\",
                ];
            }

            // The bundle leverages the static loadMetadata method
            if (empty(\$this->ormConfig) && \$reflectionClass->hasMethod('loadMetadata')) {
                \$this->ormConfig = [
                    'dir'       => 'Entity',
                    'type'      => 'staticphp',
                    'prefix'    => \$bundleNamespace.'\\\\Entity',
                    'mapping'   => true,
                    'is_bundle' => true,
                ];
            }
        }
    }

    public function getOrmConfig(): array
    {
        return \$this->ormConfig;
    }

    public function getSerializerConfig(): array
    {
        return \$this->serializerConfig;
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
        return "@bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/Builder/Metadata/EntityMetadata.php");
    }
}
