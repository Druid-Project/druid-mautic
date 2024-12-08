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

/* @bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php */
class __TwigTemplate_c83faf1cf06966555f00301fffd87636 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Form\\DataTransformer\\BarStringTransformer;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class BarStringTransformerTest extends TestCase
{
    /**
     * @dataProvider transformProvider
     *
     * @param mixed \$value
     */
    public function testTransform(\$value, string \$expected): void
    {
        \$transformer = new BarStringTransformer();
        Assert::assertSame(\$expected, \$transformer->transform(\$value));
    }

    /**
     * @return \\Generator<array<mixed>>
     */
    public static function transformProvider(): \\Generator
    {
        yield [null, ''];
        yield [[], ''];
        yield [123, ''];
        yield [new \\stdClass(), ''];
        yield ['', ''];
        yield ['value A', ''];
        yield [['value A'], 'value A'];
        yield [['value A', 'value B'], 'value A|value B'];
    }

    /**
     * @dataProvider reverseTransformProvider
     *
     * @param mixed    \$value
     * @param string[] \$expected
     */
    public function testReverseTransform(\$value, array \$expected): void
    {
        \$transformer = new BarStringTransformer();
        Assert::assertSame(\$expected, \$transformer->reverseTransform(\$value));
    }

    /**
     * @return \\Generator<array<mixed>>
     */
    public static function reverseTransformProvider(): \\Generator
    {
        yield [null, []];
        yield [[], []];
        yield [123, []];
        yield [new \\stdClass(), []];
        yield ['', ['']];
        yield ['value A', ['value A']];
        yield ['value A|value B', ['value A', 'value B']];
        yield ['value A| value B  |  | value C', ['value A', 'value B', '', 'value C']];
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
        return "@bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Form/DataTransformer/BarStringTransformerTest.php");
    }
}
