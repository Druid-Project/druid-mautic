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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php */
class __TwigTemplate_3c541646c02f23127d7063bc4eb8fd51 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\Builder\\BundleMetadata;
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\EntityMetadata;
use PHPUnit\\Framework\\TestCase;

class EntityMetadataTest extends TestCase
{
    private BundleMetadata \$metadata;

    protected function setUp(): void
    {
        \$metadataArray = [
            'isPlugin'          => true,
            'base'              => 'Core',
            'bundle'            => 'CoreBundle',
            'relative'          => 'app/bundles/MauticCoreBundle',
            'directory'         => __DIR__.'/../../../../../',
            'namespace'         => 'Mautic\\\\CoreBundle',
            'symfonyBundleName' => 'MauticCoreBundle',
            'bundleClass'       => '\\\\Mautic\\\\CoreBundle',
        ];

        \$this->metadata = new BundleMetadata(\$metadataArray);
    }

    public function testOrmAndSerializerConfigsFound(): void
    {
        \$entityMetadata = new EntityMetadata(\$this->metadata);
        \$entityMetadata->build();

        \$this->assertEquals(
            [
                'dir'       => 'Entity',
                'type'      => 'staticphp',
                'prefix'    => 'Mautic\\\\CoreBundle\\\\Entity',
                'mapping'   => true,
                'is_bundle' => true,
            ],
            \$entityMetadata->getOrmConfig()
        );

        \$this->assertEquals(
            [
                'namespace_prefix' => 'Mautic\\\\CoreBundle\\\\Entity',
                'path'             => '@MauticCoreBundle/Entity',
            ],
            \$entityMetadata->getSerializerConfig()
        );
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/EntityMetadataTest.php");
    }
}
