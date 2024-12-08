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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php */
class __TwigTemplate_8ba17d4fbe954e00b538ffdf89dc3a69 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\DependencyInjection\\Builder\\Metadata;

use Mautic\\AssetBundle\\Security\\Permissions\\AssetPermissions;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\PermissionClassMetadata;
use Mautic\\CoreBundle\\Security\\Permissions\\SystemPermissions;
use PHPUnit\\Framework\\TestCase;

class PermissionClassMetadataTest extends TestCase
{
    public function testPermissionsFound(): void
    {
        \$metadataArray = [
            'isPlugin'          => false,
            'base'              => 'Core',
            'bundle'            => 'CoreBundle',
            'relative'          => 'app/bundles/MauticCoreBundle',
            'directory'         => __DIR__.'/../../../../../',
            'namespace'         => 'Mautic\\\\CoreBundle',
            'symfonyBundleName' => 'MauticCoreBundle',
            'bundleClass'       => '\\\\Mautic\\\\CoreBundle',
        ];

        \$metadata                = new BundleMetadata(\$metadataArray);
        \$permissionClassMetadata = new PermissionClassMetadata(\$metadata);
        \$permissionClassMetadata->build();

        \$this->assertTrue(isset(\$metadata->toArray()['permissionClasses'][SystemPermissions::class]));
        \$this->assertCount(1, \$metadata->toArray()['permissionClasses']);
    }

    public function testCompatibilityWithPermissionServices(): void
    {
        \$metadataArray = [
            'isPlugin'          => false,
            'base'              => 'Asset',
            'bundle'            => 'AssetBundle',
            'relative'          => 'app/bundles/MauticAssetBundle',
            'directory'         => __DIR__.'/../../../../../../AssetBundle',
            'namespace'         => 'Mautic\\\\AssetBundle',
            'symfonyBundleName' => 'MauticAssetBundle',
            'bundleClass'       => '\\\\Mautic\\\\AssetBundle',
        ];

        \$metadata                = new BundleMetadata(\$metadataArray);
        \$permissionClassMetadata = new PermissionClassMetadata(\$metadata);
        \$permissionClassMetadata->build();

        \$this->assertTrue(isset(\$metadata->toArray()['permissionClasses'][AssetPermissions::class]));
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/PermissionClassMetadataTest.php");
    }
}
