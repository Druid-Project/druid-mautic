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

/* @bundles/CoreBundle/EventListener/ConsoleErrorListener.php */
class __TwigTemplate_c7ce6b385441f17d34350672a3f40d96 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;

class ConsoleErrorListener
{
    public function __construct(
        private LoggerInterface \$logger
    ) {
    }

    public function onConsoleError(ConsoleErrorEvent \$event): void
    {
        \$command   = \$event->getCommand();
        \$exception = \$event->getError();

        // Log error with trace
        \$message = sprintf(
            '%s: %s (uncaught exception) at %s line %s while running console command `%s`%s',
            \$exception::class,
            \$exception->getMessage(),
            \$exception->getFile(),
            \$exception->getLine(),
            empty(\$command) ? 'UNKNOWN' : \$command->getName(),
            \"\\n[stack trace]\\n\".\$exception->getTraceAsString()
        );

        \$this->logger->error(\$message);
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
        return "@bundles/CoreBundle/EventListener/ConsoleErrorListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ConsoleErrorListener.php", "/app/docroot/app/bundles/CoreBundle/EventListener/ConsoleErrorListener.php");
    }
}
