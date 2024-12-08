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

/* @bundles/CoreBundle/Tests/Unit/Twig/Extension/FormatterExtensionTest.php */
class __TwigTemplate_a9a492a343343a04bcae003c289e2013 extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Twig\\Extension\\FormatterExtension;
use Mautic\\CoreBundle\\Twig\\Helper\\DateHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\FormatterHelper;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class FormatterExtensionTest extends TestCase
{
    private FormatterExtension \$extension;

    protected function setUp(): void
    {
        \$this->extension = new FormatterExtension(
            new FormatterHelper(
                new DateHelper(
                    'F j, Y g:i a T',
                    'D, M d',
                    'F j, Y',
                    'g:i a',
                    \$this->createMock(TranslatorInterface::class),
                    \$this->createMock(CoreParametersHelper::class)
                ),
                \$this->createMock(TranslatorInterface::class)
            )
        );
    }

    public function testItContainsAtLeastOneFilter(): void
    {
        \$this->assertGreaterThan(0, \$this->extension->getFilters());
    }

    public function testItContainsAtLeastOneFunction(): void
    {
        \$this->assertGreaterThan(0, \$this->extension->getFunctions());
    }

    public function testSimpleArrayToHtml(): void
    {
        \$array = [
            'one' => 'one',
            'two' => 'two',
        ];

        \$expected = 'one: one<br />two: two';

        \$this->assertSame(\$expected, \$this->extension->simpleArrayToHtml(\$array));
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Extension/FormatterExtensionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Extension/FormatterExtensionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Extension/FormatterExtensionTest.php");
    }
}
