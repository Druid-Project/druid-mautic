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

/* @bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php */
class __TwigTemplate_e794541f50429443e18b93e80029c885 extends Template
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

use Mautic\\IntegrationsBundle\\Event\\ConfigSaveEvent;
use Mautic\\PluginBundle\\Entity\\Integration;
use PHPUnit\\Framework\\TestCase;

class ConfigSaveEventTest extends TestCase
{
    public function testGetters(): void
    {
        \$name        = 'name';
        \$integration = \$this->createMock(Integration::class);
        \$event       = new ConfigSaveEvent(\$integration);

        \$integration->expects(self::once())
            ->method('getName')
            ->willReturn(\$name);

        self::assertSame(\$integration, \$event->getIntegrationConfiguration());
        self::assertSame(\$name, \$event->getIntegration());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Event/ConfigSaveEventTest.php");
    }
}
