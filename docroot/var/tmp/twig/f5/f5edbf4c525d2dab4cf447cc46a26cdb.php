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

/* @bundles/CoreBundle/EventListener/ConsoleTerminateListener.php */
class __TwigTemplate_1c521984712827e724cb269b884cd932 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;

class ConsoleTerminateListener
{
    public function __construct(
        private LoggerInterface \$logger
    ) {
    }

    public function onConsoleTerminate(ConsoleTerminateEvent \$event): void
    {
        \$statusCode = \$event->getExitCode();
        \$command    = \$event->getCommand();

        if (0 === \$statusCode) {
            return;
        }

        if (\$statusCode > 255) {
            \$statusCode = 255;
            \$event->setExitCode(\$statusCode);
        }

        \$this->logger->warning(sprintf(
            'Command `%s` exited with status code %d',
            \$command->getName(),
            \$statusCode
        ));
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
        return "@bundles/CoreBundle/EventListener/ConsoleTerminateListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ConsoleTerminateListener.php", "/app/docroot/app/bundles/CoreBundle/EventListener/ConsoleTerminateListener.php");
    }
}
