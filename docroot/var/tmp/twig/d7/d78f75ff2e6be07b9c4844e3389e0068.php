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

/* @bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php */
class __TwigTemplate_6164f22d437d0eb16fc5b2a6401d081a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigBuilderEvent;
use Mautic\\LeadBundle\\EventListener\\ConfigSubscriber;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class ConfigSubscriberTest extends TestCase
{
    private ConfigSubscriber \$configSubscriber;

    /**
     * @var ConfigBuilderEvent&MockObject
     */
    private MockObject \$configBuilderEvent;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->configSubscriber   = new ConfigSubscriber();
        \$this->configBuilderEvent = \$this->createMock(ConfigBuilderEvent::class);
    }

    public function testSubscribedEvents(): void
    {
        \$subscribedEvents = ConfigSubscriber::getSubscribedEvents();
        \$this->assertArrayHasKey(ConfigEvents::CONFIG_ON_GENERATE, \$subscribedEvents);
    }

    public function testThatWeAreAddingFormsToTheConfig(): void
    {
        \$leadConfig = [
            'bundle'     => 'LeadBundle',
            'formAlias'  => 'leadconfig',
            'formType'   => \\Mautic\\LeadBundle\\Form\\Type\\ConfigType::class,
            'formTheme'  => '@MauticLead/FormTheme/Config/_config_companyconfig_widget.html.twig',
            'parameters' => null,
        ];

        \$segmentConfig = [
            'bundle'     => 'LeadBundle',
            'formAlias'  => 'segment_config',
            'formType'   => \\Mautic\\LeadBundle\\Form\\Type\\SegmentConfigType::class,
            'formTheme'  => '@MauticLead/FormTheme/Config/_config_leadconfig_widget.html.twig',
            'parameters' => null,
        ];

        \$this->configBuilderEvent
            ->expects(\$this->exactly(2))
            ->method('addForm')
            ->withConsecutive([\$leadConfig], [\$segmentConfig]);

        \$this->configSubscriber->onConfigGenerate(\$this->configBuilderEvent);
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
        return "@bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/ConfigSubscriberTest.php");
    }
}
