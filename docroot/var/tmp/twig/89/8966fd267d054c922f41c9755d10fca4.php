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

/* @bundles/CoreBundle/Tests/Unit/Twig/Extension/MenuExtensionTest.php */
class __TwigTemplate_684e0df269f0e68e9c12c5f5671f9bad extends Template
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

use Knp\\Menu\\MenuFactory;
use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\CoreBundle\\Twig\\Extension\\MenuExtension;
use PHPUnit\\Framework\\Assert;

class MenuExtensionTest extends AbstractMauticTestCase
{
    public function testParseMenuAttributes(): void
    {
        \$menuExtension = static::getContainer()->get(MenuExtension::class);
        \\assert(\$menuExtension instanceof MenuExtension);

        \$menuAttributes = [
            'id'    => 'myId',
            'class' => 'test-a-class test-another-class',
        ];

        Assert::assertStringStartsWith(' id=', \$menuExtension->parseMenuAttributes(\$menuAttributes));
        Assert::assertStringContainsString('myId', \$menuExtension->parseMenuAttributes(\$menuAttributes));
        Assert::assertStringContainsString(' class=', \$menuExtension->parseMenuAttributes(\$menuAttributes));
        Assert::assertStringContainsString('test-a-class test-another-class', \$menuExtension->parseMenuAttributes(\$menuAttributes));
    }

    public function testBuildMenuClasses(): void
    {
        \$menuExtension = static::getContainer()->get(MenuExtension::class);
        \\assert(\$menuExtension instanceof MenuExtension);

        // create a menu and menu items to test with
        \$factory = new MenuFactory();
        \$menu    = \$factory->createItem('My menu');
        \$menu->addChild('First item', ['uri' => '/']);
        \$menu->addChild('Second item', ['uri' => '/', 'attributes' => ['class' => 'test-class']]);

        \$matcher        = null;
        \$options        = [];
        \$extraClasses   = '';

        \$itemFirst  = \$menu->getChild('First item');
        \$itemSecond = \$menu->getChild('Second item');

        // test an item which has no class
        Assert::assertEquals([], \$menuExtension->buildMenuClasses(\$itemFirst, \$matcher, \$options, \$extraClasses));

        // test an item with an inherrent class
        Assert::assertArrayHasKey('class', \$menuExtension->buildMenuClasses(\$itemSecond, \$matcher, \$options, \$extraClasses));
        Assert::assertEquals(['class' => 'test-class'], \$menuExtension->buildMenuClasses(\$itemSecond, \$matcher, \$options, \$extraClasses));

        // test an item with an 'extra' class
        \$extraClasses = 'extra-class';
        Assert::assertArrayHasKey('class', \$menuExtension->buildMenuClasses(\$itemFirst, \$matcher, \$options, \$extraClasses));
        Assert::assertEquals(['class' => 'extra-class'], \$menuExtension->buildMenuClasses(\$itemFirst, \$matcher, \$options, \$extraClasses));
        Assert::assertEquals(['class' => 'test-class extra-class'], \$menuExtension->buildMenuClasses(\$itemSecond, \$matcher, \$options, \$extraClasses));
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Extension/MenuExtensionTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Extension/MenuExtensionTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Extension/MenuExtensionTest.php");
    }
}
