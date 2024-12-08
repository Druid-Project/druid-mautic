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

/* @bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/ConfigMetadataTest.php */
class __TwigTemplate_3b594a20bdc322141cdc497c97588f53 extends Template
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
use Mautic\\CoreBundle\\DependencyInjection\\Builder\\Metadata\\ConfigMetadata;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class ConfigMetadataTest extends TestCase
{
    /**
     * @var BundleMetadata|MockObject
     */
    private MockObject \$metadata;

    protected function setUp(): void
    {
        \$this->metadata = \$this->getMockBuilder(BundleMetadata::class)
            ->onlyMethods(['getDirectory'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testMissingConfigIsIgnored(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn('/foo/bar');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$this->assertEquals([], \$this->metadata->toArray()['config']);
    }

    public function testBadConfigIsIgnored(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn(__DIR__.'/resource/BadConfig');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$this->assertEquals([], \$this->metadata->toArray()['config']);
    }

    public function testIpLookupServicesAreLoaded(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn(__DIR__.'/resource/GoodConfig');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$this->assertEquals(
            [
                'extreme-ip' => [
                    'display_name' => 'Extreme-IP',
                    'class'        => \\Mautic\\CoreBundle\\IpLookup\\ExtremeIpLookup::class,
                ],
            ],
            \$configMetadata->getIpLookupServices()
        );
    }

    public function testConfigIsLoaded(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn(__DIR__.'/resource/GoodConfig');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$config = \$this->metadata->toArray()['config'];
        \$this->assertTrue(isset(\$config['services']['helpers']['mautic.helper.bundle']));
        \$this->assertTrue(isset(\$config['parameters']['log_path']));
    }

    public function testOptionalMissingServicesAreIgnored(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn(__DIR__.'/resource/GoodConfig');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$config = \$this->metadata->toArray()['config'];
        \$this->assertFalse(isset(\$config['services']['fixtures']['mautic.test.fixture']));
    }

    public function testParameterArgumentsAreEncoded(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn(__DIR__.'/resource/GoodConfig');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$config = \$this->metadata->toArray()['config'];
        \$this->assertTrue(isset(\$config['services']['helpers']['mautic.helper.bundle']));

        \$this->assertEquals('%%mautic.bundles%%', \$config['services']['helpers']['mautic.helper.bundle']['arguments'][0]);
    }

    public function testParametersAreEncoded(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn(__DIR__.'/resource/GoodConfig');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$config = \$this->metadata->toArray()['config'];
        \$this->assertTrue(isset(\$config['parameters']['log_path']));

        \$this->assertEquals('%%kernel.project_dir%%/var/logs', \$config['parameters']['log_path']);
    }

    public function testParameterTypesArePreserved(): void
    {
        \$this->metadata->expects(\$this->once())
            ->method('getDirectory')
            ->willReturn(__DIR__.'/resource/GoodConfig');

        \$configMetadata = new ConfigMetadata(\$this->metadata);
        \$configMetadata->build();

        \$config = \$this->metadata->toArray()['config'];
        \$this->assertTrue(isset(\$config['parameters']['log_path']));

        \$this->assertEquals('%%kernel.project_dir%%/var/logs', \$config['parameters']['log_path']);
        \$this->assertEquals(7, \$config['parameters']['max_log_files']);
        \$this->assertEquals('media/images', \$config['parameters']['image_path']);
        \$this->assertEquals(false, \$config['parameters']['bool_value']);
        \$this->assertEquals(null, \$config['parameters']['null_value']);
        \$this->assertEquals([], \$config['parameters']['array_value']);
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
        return "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/ConfigMetadataTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/ConfigMetadataTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/DependencyInjection/Builder/Metadata/ConfigMetadataTest.php");
    }
}
