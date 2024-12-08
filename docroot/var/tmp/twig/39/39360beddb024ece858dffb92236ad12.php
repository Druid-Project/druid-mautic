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

/* @bundles/IntegrationsBundle/Tests/Unit/Event/KeysSaveEventTest.php */
class __TwigTemplate_91ed2529e78fdde003995d4e1de91db5 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Event;

use Mautic\\IntegrationsBundle\\Event\\KeysSaveEvent;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\TestCase;

class KeysSaveEventTest extends TestCase
{
    public function testGetters(): void
    {
        \$integration = \$this->createMock(Integration::class);
        \$keys        = ['apikey' => 'test'];
        \$integration->expects(self::once())
            ->method('getApiKeys')
            ->willReturn(\$keys);

        \$event = new KeysSaveEvent(\$integration, \$keys);

        self::assertSame(\$integration, \$event->getIntegrationConfiguration());
        self::assertSame(\$keys, \$event->getOldKeys());
        self::assertSame(\$keys, \$event->getNewKeys());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Event/KeysSaveEventTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Event/KeysSaveEventTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Event/KeysSaveEventTest.php");
    }
}
