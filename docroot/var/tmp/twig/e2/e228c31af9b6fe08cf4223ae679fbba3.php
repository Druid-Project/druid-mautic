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

/* @bundles/CoreBundle/Tests/Unit/Doctrine/Helper/FulltextKeywordTest.php */
class __TwigTemplate_1b74e080ce8f98216b6139bc41c81b98 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Doctrine\\Helper;

use Mautic\\CoreBundle\\Doctrine\\Helper\\FulltextKeyword;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class FulltextKeywordTest extends TestCase
{
    /**
     * @dataProvider dataDefault
     */
    public function testDefault(string \$value, string \$expected): void
    {
        \$fulltextKeyword = new FulltextKeyword(\$value);

        Assert::assertSame(\$expected, \$fulltextKeyword->format());
        Assert::assertSame(\$expected, (string) \$fulltextKeyword);
    }

    /**
     * @return iterable<array<string>>
     */
    public function dataDefault(): iterable
    {
        yield ['some word', '(+some* +word*) >\"some word\"'];
        yield ['another', '(+another*) >\"another\"'];
        yield ['s', '(+s*) >\"s\"'];
        yield ['', ''];
    }

    /**
     * @dataProvider dataInflectingEnabled
     */
    public function testInflectingEnabled(string \$value, string \$expected): void
    {
        \$fulltextKeyword = new FulltextKeyword(\$value, true, true, true);

        Assert::assertSame(\$expected, \$fulltextKeyword->format());
        Assert::assertSame(\$expected, (string) \$fulltextKeyword);
    }

    /**
     * @return iterable<array<string>>
     */
    public function dataInflectingEnabled(): iterable
    {
        yield ['some word', '(+(some* <som*) +(word* <wor*)) >\"some word\"'];
        yield ['another', '(+(another* <anothe*)) >\"another\"'];
        yield ['s', '(+s*) >\"s\"'];
        yield ['', ''];
    }

    /**
     * @dataProvider dataWordSearchDisabled
     */
    public function testWordSearchDisabled(string \$value, string \$expected): void
    {
        \$fulltextKeyword = new FulltextKeyword(\$value, true, false);

        Assert::assertSame(\$expected, \$fulltextKeyword->format());
        Assert::assertSame(\$expected, (string) \$fulltextKeyword);
    }

    /**
     * @return iterable<array<string>>
     */
    public function dataWordSearchDisabled(): iterable
    {
        yield ['some word', '\"some word\"'];
        yield ['another', '\"another\"'];
        yield ['s', '\"s\"'];
        yield ['', ''];
    }

    /**
     * @dataProvider dataBooleanModeDisabled
     */
    public function testBooleanModeDisabled(string \$value, string \$expected): void
    {
        \$fulltextKeyword = new FulltextKeyword(\$value, false);

        Assert::assertSame(\$expected, \$fulltextKeyword->format());
        Assert::assertSame(\$expected, (string) \$fulltextKeyword);
    }

    /**
     * @return iterable<array<string>>
     */
    public function dataBooleanModeDisabled(): iterable
    {
        yield ['some word', 'some word'];
        yield ['another', 'another'];
        yield ['s', 's'];
        yield ['', ''];
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
        return "@bundles/CoreBundle/Tests/Unit/Doctrine/Helper/FulltextKeywordTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Doctrine/Helper/FulltextKeywordTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Doctrine/Helper/FulltextKeywordTest.php");
    }
}
