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

/* @bundles/PageBundle/Tests/Entity/PageTest.php */
class __TwigTemplate_55418eb11b695418df21b18a895f7b86 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Entity;

use Mautic\\PageBundle\\Entity\\Page;
use PHPUnit\\Framework\\Assert;

class PageTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider setIsPreferenceCenterDataProvider
     */
    public function testSetIsPreferenceCenter(\$value, \$expected, array \$changes): void
    {
        \$page = new Page();
        \$page->setIsPreferenceCenter(\$value);

        Assert::assertSame(\$expected, \$page->getIsPreferenceCenter());
        Assert::assertSame(\$changes, \$page->getChanges());
    }

    public static function setIsPreferenceCenterDataProvider(): iterable
    {
        yield [null, null, []];
        yield [true, true, ['isPreferenceCenter' => [null, true]]];
        yield [false, false, ['isPreferenceCenter' => [null, false]]];
        yield ['', false, ['isPreferenceCenter' => [null, false]]];
        yield [0, false, ['isPreferenceCenter' => [null, false]]];
        yield ['string', true, ['isPreferenceCenter' => [null, true]]];
    }

    /**
     * @dataProvider setNoIndexDataProvider
     */
    public function testSetNoIndex(\$value, \$expected, array \$changes): void
    {
        \$page = new Page();
        \$page->setNoIndex(\$value);

        Assert::assertSame(\$expected, \$page->getNoIndex());
        Assert::assertSame(\$changes, \$page->getChanges());
    }

    public static function setNoIndexDataProvider(): iterable
    {
        yield [null, null, []];
        yield [true, true, ['noIndex' => [null, true]]];
        yield [false, false, ['noIndex' => [null, false]]];
        yield ['', false, ['noIndex' => [null, false]]];
        yield [0, false, ['noIndex' => [null, false]]];
        yield ['string', true, ['noIndex' => [null, true]]];
    }

    /**
     * Test setHeadScript and getHeadScript.
     */
    public function testSetHeadScript(): void
    {
        \$script = '<script>console.log(\"test\")';
        \$page   = new Page();
        \$page->setHeadScript(\$script);

        \$this->assertEquals(\$script, \$page->getHeadScript());
    }

    /**
     * Test setFooterScript and getFooterScript.
     */
    public function testSetFooterScript(): void
    {
        \$script = '<script>console.log(\"test\")';
        \$page   = new Page();
        \$page->setFooterScript(\$script);

        \$this->assertEquals(\$script, \$page->getFooterScript());
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
        return "@bundles/PageBundle/Tests/Entity/PageTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Entity/PageTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Entity/PageTest.php");
    }
}
