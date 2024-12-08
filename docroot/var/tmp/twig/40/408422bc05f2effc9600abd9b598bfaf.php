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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php */
class __TwigTemplate_a785c2ba7cca02739a08f8c5326eac86 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\DependencyInjection\\Builder;

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadataBuilder;
use Mautic\\CoreBundle\\Security\\Permissions\\SystemPermissions;
use MauticPlugin\\MauticFocusBundle\\Security\\Permissions\\FocusPermissions;
use PHPUnit\\Framework\\TestCase;

class BundleMetadataBuilderTest extends TestCase
{
    private array \$paths;

    protected function setUp(): void
    {
        // Used in paths_helper
        \$root        = __DIR__.'/../../../../../../../app';
        \$projectRoot = __DIR__.'/../../../../../../../';

        \$paths = [];
        include __DIR__.'/../../../../../../config/paths_helper.php';

        \$this->paths = \$paths;
    }

    public function testCoreBundleMetadataLoaded(): void
    {
        \$bundles = ['MauticCoreBundle' => \\Mautic\\CoreBundle\\MauticCoreBundle::class];

        \$builder  = new BundleMetadataBuilder(\$bundles, \$this->paths);
        \$metadata = \$builder->getCoreBundleMetadata();

        \$this->assertEquals([], \$builder->getPluginMetadata());
        \$this->assertTrue(isset(\$metadata['MauticCoreBundle']));

        \$bundleMetadata = \$metadata['MauticCoreBundle'];

        \$this->assertFalse(\$bundleMetadata['isPlugin']);
        \$this->assertEquals('Core', \$bundleMetadata['base']);
        \$this->assertEquals('CoreBundle', \$bundleMetadata['bundle']);
        \$this->assertEquals('MauticCoreBundle', \$bundleMetadata['symfonyBundleName']);
        \$this->assertEquals('app/bundles/CoreBundle', \$bundleMetadata['relative']);
        \$this->assertEquals(realpath(\$this->paths['root']).'/app/bundles/CoreBundle', \$bundleMetadata['directory']);
        \$this->assertEquals('Mautic\\CoreBundle', \$bundleMetadata['namespace']);
        \$this->assertEquals(\\Mautic\\CoreBundle\\MauticCoreBundle::class, \$bundleMetadata['bundleClass']);
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses']));
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses'][SystemPermissions::class]));
        \$this->assertTrue(isset(\$bundleMetadata['config']));
        \$this->assertTrue(isset(\$bundleMetadata['config']['routes']));
    }

    public function testPluginMetadataLoaded(): void
    {
        \$bundles = ['MauticFocusBundle' => \\MauticPlugin\\MauticFocusBundle\\MauticFocusBundle::class];

        \$builder  = new BundleMetadataBuilder(\$bundles, \$this->paths);
        \$metadata = \$builder->getPluginMetadata();

        \$this->assertEquals([], \$builder->getCoreBundleMetadata());
        \$this->assertTrue(isset(\$metadata['MauticFocusBundle']));
        \$bundleMetadata = \$metadata['MauticFocusBundle'];

        \$this->assertTrue(\$bundleMetadata['isPlugin']);
        \$this->assertEquals('MauticFocus', \$bundleMetadata['base']);
        \$this->assertEquals('MauticFocusBundle', \$bundleMetadata['bundle']);
        \$this->assertEquals('MauticFocusBundle', \$bundleMetadata['symfonyBundleName']);
        \$this->assertEquals('plugins/MauticFocusBundle', \$bundleMetadata['relative']);
        \$this->assertEquals(realpath(\$this->paths['root']).'/plugins/MauticFocusBundle', \$bundleMetadata['directory']);
        \$this->assertEquals('MauticPlugin\\MauticFocusBundle', \$bundleMetadata['namespace']);
        \$this->assertEquals(\\MauticPlugin\\MauticFocusBundle\\MauticFocusBundle::class, \$bundleMetadata['bundleClass']);
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses']));
        \$this->assertTrue(isset(\$bundleMetadata['permissionClasses'][FocusPermissions::class]));
        \$this->assertTrue(isset(\$bundleMetadata['config']));
        \$this->assertTrue(isset(\$bundleMetadata['config']['routes']));
    }

    public function testSymfonyBundleIgnored(): void
    {
        \$bundles = ['FooBarBundle' => 'Foo\\Bar\\BarBundle'];

        \$builder = new BundleMetadataBuilder(\$bundles, \$this->paths);
        \$this->assertEquals([], \$builder->getCoreBundleMetadata());
        \$this->assertEquals([], \$builder->getPluginMetadata());
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataBuilderTest.php");
    }
}
