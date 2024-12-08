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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php */
class __TwigTemplate_51115f0c5b5fb62e6b405ff6ac4d62b6 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use PHPUnit\\Framework\\TestCase;

class BundleMetadataTest extends TestCase
{
    public function testGetters(): void
    {
        \$metadataArray = [
            'isPlugin'          => true,
            'base'              => 'Core',
            'bundle'            => 'CoreBundle',
            'relative'          => 'app/bundles/MauticCoreBundle',
            'directory'         => '/var/www/app/bundles/MauticCoreBundle',
            'namespace'         => 'Mautic\\\\CoreBundle',
            'symfonyBundleName' => 'MauticCoreBundle',
            'bundleClass'       => '\\\\Mautic\\\\CoreBundle',
        ];

        \$metadata = new BundleMetadata(\$metadataArray);
        \$this->assertSame(\$metadataArray['directory'], \$metadata->getDirectory());
        \$this->assertSame(\$metadataArray['namespace'], \$metadata->getNamespace());
        \$this->assertSame(\$metadataArray['bundle'], \$metadata->getBaseName());
        \$this->assertSame(\$metadataArray['symfonyBundleName'], \$metadata->getBundleName());

        \$metadata->setConfig(['foo' => 'bar']);
        \$metadata->addPermissionClass('\\Foo\\Bar');

        \$metadataArray['config']                        = ['foo' => 'bar'];
        \$metadataArray['permissionClasses']['\\Foo\\Bar'] = '\\Foo\\Bar';
        \$this->assertEquals(\$metadataArray, \$metadata->toArray());
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/BundleMetadataTest.php");
    }
}
