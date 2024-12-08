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

/* @bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php */
class __TwigTemplate_d8bfc95105770726fba0e0ea78bc4ac4 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Mautic\\CoreBundle\\EventListener\\ConsoleErrorListener;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ConsoleErrorListenerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|LoggerInterface
     */
    private MockObject \$logger;

    /**
     * @var MockObject|InputInterface
     */
    private MockObject \$input;

    /**
     * @var MockObject|OutputInterface
     */
    private MockObject \$output;

    private ?ConsoleErrorListener \$listener;

    protected function setUp(): void
    {
        \$this->logger   = \$this->createMock(LoggerInterface::class);
        \$this->input    = \$this->createMock(InputInterface::class);
        \$this->output   = \$this->createMock(OutputInterface::class);

        \$this->listener = new ConsoleErrorListener(\$this->logger);
    }

    /**
     * Should not throw an error when command is null.
     */
    public function testConsoleErrorWithNullCommand(): void
    {
        \$event = new ConsoleErrorEvent(
            \$this->input,
            \$this->output,
            new \\Exception('Example exception'),
            null
        );

        \$this->logger->expects(\$this->once())
            ->method('error');

        \$this->listener->onConsoleError(\$event);
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
        return "@bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/ConsoleErrorListenerTest.php");
    }
}
