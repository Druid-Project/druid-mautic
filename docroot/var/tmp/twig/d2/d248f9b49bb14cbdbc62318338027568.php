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

/* @bundles/DashboardBundle/Tests/Event/WidgetDetailEventTest.php */
class __TwigTemplate_99bceef8fbdeeff55a01e556eb73bf00 extends Template
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

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\DashboardBundle\\Entity\\Widget;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use PHPUnit\\Framework\\MockObject\\MockObject;

class WidgetDetailEventTest extends \\PHPUnit\\Framework\\TestCase
{
    private WidgetDetailEvent \$widgetDetailEvent;
    private MockObject \$translator;
    private MockObject \$security;
    private MockObject \$widget;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator            = \$this->createMock(Translator::class);
        \$this->security              = \$this->createMock(CorePermissions::class);
        \$this->widget                = \$this->createMock(Widget::class);

        \$this->widgetDetailEvent = new WidgetDetailEvent(
            \$this->translator,
            \$this->security,
            \$this->widget
        );
    }

    public function testGetCacheKey(): void
    {
        \$this->widget
            ->method('getParams')
            ->willReturn(['dateFrom' => [], 'dateTo' => []]);

        \$this->translator->expects(\$this->once())
            ->method('getLocale')
            ->willReturn('en');
        \$this->assertStringContainsString('dashboard.widget.', \$this->widgetDetailEvent->getCacheKey());
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
        return "@bundles/DashboardBundle/Tests/Event/WidgetDetailEventTest.php";
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
        return new Source("", "@bundles/DashboardBundle/Tests/Event/WidgetDetailEventTest.php", "/app/docroot/app/bundles/DashboardBundle/Tests/Event/WidgetDetailEventTest.php");
    }
}
