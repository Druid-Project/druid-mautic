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

/* @bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php */
class __TwigTemplate_05ff2fead761f44e206bc1a28d047565 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\FileHelper;

class FileHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Conversion of Bytes to Megebytes
     *
     * @covers       \\Mautic\\CoreBundle\\Helper\\FileHelper::convertBytesToMegabytes
     *
     * @dataProvider bytesToMegabytesProvider
     */
    public function testConversionFromBytesToMegabytes(int \$byte, float \$megabyte): void
    {
        \$fileHelper = new FileHelper();

        \$this->assertSame(\$megabyte, \$fileHelper::convertBytesToMegabytes(\$byte));
    }

    public static function bytesToMegabytesProvider()
    {
        return [
            [0, 0.0],
            [1_048_576, 1.0],
            [10_485_760, 10.0],
            [-10_485_760, -10.0],
        ];
    }

    /**
     * @testdox Conversion of Megebytes to Bytes
     *
     * @covers       \\Mautic\\CoreBundle\\Helper\\FileHelper::convertMegabytesToBytes
     *
     * @dataProvider megabytesToBytesProvider
     */
    public function testConversionFromMegabytesToBytes(int \$megabyte, int \$byte): void
    {
        \$fileHelper = new FileHelper();

        \$this->assertSame(\$byte, \$fileHelper::convertMegabytesToBytes(\$megabyte));
    }

    public static function megabytesToBytesProvider()
    {
        return [
            [0, 0],
            [1, 1_048_576],
            [5, 5_242_880],
        ];
    }

    /**
     * @testdox Conversion of PHP size to Bytes
     *
     * @covers       \\Mautic\\CoreBundle\\Helper\\FileHelper::convertPHPSizeToBytes
     *
     * @dataProvider phpSizeToBytesProvider
     */
    public function testConvertPHPSizeToBytes(string \$phpSize, int \$bytes): void
    {
        \$fileHelper = new FileHelper();

        \$this->assertSame(\$bytes, \$fileHelper::convertPHPSizeToBytes(\$phpSize));
    }

    public static function phpSizeToBytesProvider()
    {
        return [
            ['3048M', 3_196_059_648],
            ['127M', 133_169_152],
            ['1k', 1024],
            ['1K ', 1024],
            ['1M', 1_048_576],
            ['1G', 1_073_741_824],
            ['1P', 1_125_899_906_842_624],
            ['1024', 1024],
        ];
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/FileHelperTest.php");
    }
}
