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

/* @bundles/CoreBundle/DependencyInjection/Builder/Metadata/PermissionClassMetadata.php */
class __TwigTemplate_bb662ca9175b4655ea9fd440efefca7a extends Template
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
use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Finder\\Finder;

/**
 * This is an temporary necessity until https://github.com/mautic/mautic/pull/7312 is merged and permission classes are
 * converted to services.
 */
class PermissionClassMetadata
{
    public function __construct(
        private BundleMetadata \$metadata
    ) {
    }

    public function build(): void
    {
        \$directory = \$this->metadata->getDirectory();
        if (!file_exists(\$directory.'/Security/Permissions')) {
            return;
        }

        \$finder = Finder::create()
            ->name('*Permissions.php')
            ->in(\$directory.'/Security/Permissions');

        /** @var \\SplFileInfo \$file */
        foreach (\$finder as \$file) {
            \$className       = basename(\$file->getFilename(), '.php');
            \$permissionClass = sprintf('%s\\\\Security\\\\Permissions\\\\%s', \$this->metadata->getNamespace(), \$className);

            // Required because https://github.com/mautic/mautic/pull/7312 introduces permission DI and thus classes cannot be instantiated here
            \$reflectionClass = new \\ReflectionClass(\$permissionClass);
            if (\$reflectionClass->isAbstract()) {
                // Skip abstract classes
                continue;
            }

            /** @var AbstractPermissions \$permissionInstance */
            \$permissionInstance = \$reflectionClass->newInstanceWithoutConstructor();
            if (!\$permissionInstance instanceof AbstractPermissions) {
                // Not a permission class
                continue;
            }

            \$this->metadata->addPermissionClass(\$permissionClass);
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
        return "@bundles/CoreBundle/DependencyInjection/Builder/Metadata/PermissionClassMetadata.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/Builder/Metadata/PermissionClassMetadata.php", "/app/docroot/app/bundles/CoreBundle/DependencyInjection/Builder/Metadata/PermissionClassMetadata.php");
    }
}
