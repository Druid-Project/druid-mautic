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

/* @bundles/FormBundle/Tests/Crate/FieldCrateTest.php */
class __TwigTemplate_c66fe32cad3991a37169a937a1124399 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Crate;

use Mautic\\FormBundle\\Crate\\FieldCrate;
use PHPUnit\\Framework\\Assert;

final class FieldCrateTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGettersForEmailField(): void
    {
        \$field = new FieldCrate('6', 'Email', 'email', []);

        Assert::assertSame('6', \$field->getKey());
        Assert::assertSame('Email', \$field->getName());
        Assert::assertSame('email', \$field->getType());
        Assert::assertSame([], \$field->getProperties());
        Assert::assertFalse(\$field->isListType());
    }

    public function testGettersForSelectField(): void
    {
        \$properties = [
            'list' => [
                'Red'   => 'red',
                'Green' => 'green',
            ],
        ];
        \$field = new FieldCrate('7', 'Colors', 'select', \$properties);

        Assert::assertSame('7', \$field->getKey());
        Assert::assertSame('Colors', \$field->getName());
        Assert::assertSame('select', \$field->getType());
        Assert::assertSame(\$properties, \$field->getProperties());
        Assert::assertTrue(\$field->isListType());
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
        return "@bundles/FormBundle/Tests/Crate/FieldCrateTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Crate/FieldCrateTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Crate/FieldCrateTest.php");
    }
}
