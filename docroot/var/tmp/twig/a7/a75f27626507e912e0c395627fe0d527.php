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

/* @bundles/CoreBundle/Tests/Unit/Twig/Extension/EmojiExtensionTest.php */
class __TwigTemplate_3051113e5ead4b5f4d45fa18f5f8cf54 extends Template
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

use Mautic\\CoreBundle\\Helper\\EmojiHelper;
use Mautic\\CoreBundle\\Twig\\Extension\\EmojiExtension;
use PHPUnit\\Framework\\TestCase;

final class EmojiExtensionTest extends TestCase
{
    public function testItContainsAtLeastOneFunction(): void
    {
        \$extension = new EmojiExtension(new EmojiHelper()); /** @phpstan-ignore-line EmojiExtension is deprecated */
        \$this->assertGreaterThan(0, \$extension->getFunctions());
    }

    public function testToHtml(): void
    {
        \$extension = new EmojiExtension(new EmojiHelper()); /** @phpstan-ignore-line EmojiExtension is deprecated */
        \$text      = 'This is example text';

        \$this->assertSame(\$text, \$extension->toHtml(\$text)); /** @phpstan-ignore-line toHtml() is deprecated */
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Extension/EmojiExtensionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Extension/EmojiExtensionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Extension/EmojiExtensionTest.php");
    }
}
