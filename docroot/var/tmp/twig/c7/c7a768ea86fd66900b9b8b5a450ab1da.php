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

/* @bundles/CoreBundle/Tests/Unit/Twig/Extension/HtmlExtensionTest.php */
class __TwigTemplate_75e8b692c27fed5934411c3e12f2ce7f extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Twig\\Extension;

use Mautic\\CoreBundle\\Twig\\Extension\\HtmlExtension;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class HtmlExtensionTest extends TestCase
{
    /**
     * @dataProvider convertStringToArrayProvider
     *
     * @param array<string, mixed> \$expected
     */
    public function testConvertStringToArray(string \$input, array|bool \$expected): void
    {
        \$extension = new HtmlExtension();

        \$actual = \$extension->convertHtmlAttributesToArray(\$input);

        Assert::assertSame(\$expected, \$actual);
    }

    /**
     * @return array<int, mixed>
     */
    public static function convertStringToArrayProvider(): iterable
    {
        yield ['id=\"test-id\" class=\"test-class\"', [
            'id'    => 'test-id',
            'class' => ['test-class'],
        ]];

        yield ['id=\"test-id\" class=\"test-class-one test-class-two\"', [
            'id'    => 'test-id',
            'class' => ['test-class-one', 'test-class-two'],
        ]];

        yield ['id=\" test-id \" class=\" test-class-one      test-class-two           \"', [
            'id'    => 'test-id',
            'class' => ['test-class-one', 'test-class-two'],
        ]];

        yield ['', []];
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Extension/HtmlExtensionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Extension/HtmlExtensionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Extension/HtmlExtensionTest.php");
    }
}
