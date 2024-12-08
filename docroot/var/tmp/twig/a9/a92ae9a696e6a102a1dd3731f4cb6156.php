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

/* @bundles/CoreBundle/Tests/Command/GenerateProductionAssetsCommandTest.php */
class __TwigTemplate_5849de7c9d165fa9586e9125936c4481 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Helper\\Filesystem;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;

class GenerateProductionAssetsCommandTest extends MauticMysqlTestCase
{
    private const CKEDITOR_FILE_NAME      = 'ckeditor.js';

    private const TEMP_CKEDITOR_FILE_NAME = 'temp_ckeditor.js';

    private Filesystem \$filesystem;

    private string \$ckeditorFilePath;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->filesystem = self::getContainer()->get('mautic.filesystem');
        \$pathHelper       = self::getContainer()->get('mautic.helper.paths');

        \$this->ckeditorFilePath = \$pathHelper->getVendorRootPath().'/media/libraries/ckeditor/';
    }

    public function testAssetGenerateCommand(): void
    {
        \$commandTester = \$this->testSymfonyCommand('mautic:assets:generate');
        \$this->assertStringContainsString('Production assets have been regenerated.', \$commandTester->getDisplay());
        \$this->assertEquals(0, \$commandTester->getStatusCode());
    }

    public function testCkeditorFileNotExist(): void
    {
        \$ckeditorFilePath = \$this->ckeditorFilePath.self::CKEDITOR_FILE_NAME;
        if (\$this->filesystem->exists(\$ckeditorFilePath)) {
            \$this->filesystem->rename(\$ckeditorFilePath, \$this->ckeditorFilePath.self::TEMP_CKEDITOR_FILE_NAME);
        }

        \$commandTester = \$this->testSymfonyCommand('mautic:assets:generate');
        \$this->assertStringContainsString(\"{\$ckeditorFilePath} does not exist. Execute `npm install` to generate it.\", \$commandTester->getDisplay());
        \$this->assertEquals(1, \$commandTester->getStatusCode());
    }

    protected function beforeTearDown(): void
    {
        if (\$this->filesystem->exists(\$this->ckeditorFilePath.self::TEMP_CKEDITOR_FILE_NAME)) {
            \$this->filesystem->rename(\$this->ckeditorFilePath.self::TEMP_CKEDITOR_FILE_NAME, \$this->ckeditorFilePath.self::CKEDITOR_FILE_NAME);
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
        return "@bundles/CoreBundle/Tests/Command/GenerateProductionAssetsCommandTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Command/GenerateProductionAssetsCommandTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Command/GenerateProductionAssetsCommandTest.php");
    }
}
