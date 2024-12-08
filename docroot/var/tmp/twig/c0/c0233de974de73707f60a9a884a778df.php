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

/* @bundles/DashboardBundle/Tests/Entity/WidgetTest.php */
class __TwigTemplate_03c4ec148a5793e4e96412e839fc534a extends Template
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

namespace Mautic\\DashboardBundle\\Tests\\Entity;

use Mautic\\DashboardBundle\\Entity\\Widget;

class WidgetTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWidgetNameXssAttempt(): void
    {
        \$widget = new Widget();
        \$widget->setName('csrf<script>console.log(\\'name\\');</script>');
        \$this->assertEquals('csrfconsole.log(\\'name\\');', \$widget->getName());
    }

    public function testWidgetWidthXssAttempt(): void
    {
        \$widget = new Widget();
        \$widget->setWidth('100<script>console.log(\\'yellow\\');</script>');
        \$this->assertEquals(100, \$widget->getWidth());
    }

    public function testWidgetHeightXssAttempt(): void
    {
        \$widget = new Widget();
        \$widget->setHeight('100<script>console.log(\\'yellow\\');</script>');
        \$this->assertEquals(100, \$widget->getHeight());
    }

    public function testWidgetOrderingSqliAttempt(): void
    {
        \$widget = new Widget();
        \$widget->setOrdering('3;DROP grep;');
        \$this->assertEquals(3, \$widget->getOrdering());
    }

    public function testWidgetTypeXssAttempt(): void
    {
        \$widget = new Widget();
        \$widget->setType('map.of.leads<script>console.log(\\'yellow\\');</script>');
        \$this->assertEquals('map.of.leadsconsole.log(\\'yellow\\');', \$widget->getType());
    }

    public function testToArrayEmpty(): void
    {
        \$widget   = new Widget();
        \$expected = [
            'name'     => null,
            'width'    => null,
            'height'   => null,
            'ordering' => null,
            'type'     => null,
            'params'   => [],
            'template' => null,
        ];
        \$this->assertEquals(\$expected, \$widget->toArray());
    }

    public function testToArrayFilled(): void
    {
        \$widget = new Widget();
        \$widget->setName('The itsy bitsy spider');
        \$widget->setWidth(4);
        \$widget->setHeight(5);
        \$widget->setOrdering(6);
        \$widget->setType('climed up');
        \$widget->setParams([]);
        \$widget->setTemplate('the water spout');
        \$expected = [
            'name'     => 'The itsy bitsy spider',
            'width'    => 4,
            'height'   => 5,
            'ordering' => 6,
            'type'     => 'climed up',
            'params'   => [],
            'template' => 'the water spout',
        ];
        \$this->assertEquals(\$expected, \$widget->toArray());
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
        return "@bundles/DashboardBundle/Tests/Entity/WidgetTest.php";
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
        return new Source("", "@bundles/DashboardBundle/Tests/Entity/WidgetTest.php", "/app/docroot/app/bundles/DashboardBundle/Tests/Entity/WidgetTest.php");
    }
}
