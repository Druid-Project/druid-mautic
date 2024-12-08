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

/* @bundles/CoreBundle/Tests/Unit/Helper/EmailAddressHelperTest.php */
class __TwigTemplate_6534aecd8b0107f7ca0914fdf0abbc10 extends Template
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

use Mautic\\CoreBundle\\Helper\\EmailAddressHelper;
use PHPUnit\\Framework\\TestCase;

final class EmailAddressHelperTest extends TestCase
{
    private EmailAddressHelper \$helper;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->helper = new EmailAddressHelper();
    }

    /**
     * @dataProvider emailProvider
     */
    public function testCleanEmail(string \$email, string \$expected): void
    {
        \$this->assertSame(\$expected, \$this->helper->cleanEmail(\$email));
    }

    /**
     * @return array<int, array<int, string>>
     */
    public static function emailProvider(): array
    {
        return [
            ['test@example.com', 'test@example.com'],
            ['TEST@example.com', 'test@example.com'],
            ['test+suffix@example.com', 'test+suffix@example.com'],
            ['!#\$%^&*()@example.com', '@example.com'],
        ];
    }

    /**
     * @param array<int, array<int, array<int, string>|string>> \$expected
     *
     * @dataProvider variationsProvider
     */
    public function testGetVariations(string \$email, array \$expected): void
    {
        \$this->assertSame(
            \$expected,
            \$this->helper->getVariations(\$email)
        );
    }

    /**
     * @return array<int, array<int, array<int, string>|string>>
     */
    public static function variationsProvider(): array
    {
        return [
            ['test@example.com', ['test@example.com']],
            ['TEST@example.com', ['TEST@example.com', 'test@example.com']],
            ['test+suffix@example.com', ['test+suffix@example.com', 'test@example.com']],
            ['!#\$%^&*()@example.com', ['!#\$%^&*()@example.com', '@example.com']],
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/EmailAddressHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/EmailAddressHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/EmailAddressHelperTest.php");
    }
}
