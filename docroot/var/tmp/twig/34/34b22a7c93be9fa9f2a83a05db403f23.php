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

/* @bundles/CoreBundle/ProcessSignal/ProcessSignalService.php */
class __TwigTemplate_757ffc5284c41d73b0ec9bfd50a9096d extends Template
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

namespace Mautic\\CoreBundle\\ProcessSignal;

use Mautic\\CoreBundle\\ProcessSignal\\Exception\\SignalCaughtException;

class ProcessSignalService
{
    public const SIGTERM  = 15;
    public const SIGINT   = 2;
    private const SIGNALS = [self::SIGTERM, self::SIGINT];
    private ?int \$signal  = null;

    /**
     * @param int[] \$signals
     */
    public function registerSignalHandler(callable \$beforeCallback = null, array \$signals = self::SIGNALS): void
    {
        if (!function_exists('pcntl_signal')) {
            return;
        }

        \$handler = function (int \$signal) use (\$beforeCallback): void {
            if (\$beforeCallback) {
                call_user_func(\$beforeCallback, \$signal);
            }

            \$this->signal = \$signal;
        };

        foreach (\$signals as \$signal) {
            pcntl_signal(\$signal, \$handler);
        }
    }

    /**
     * @param int[] \$signals
     */
    public function restoreSignalHandler(array \$signals = self::SIGNALS): void
    {
        if (!function_exists('pcntl_signal')) {
            return;
        }

        foreach (\$signals as \$signal) {
            pcntl_signal(\$signal, SIG_DFL);
        }
    }

    public function isSignalCaught(): bool
    {
        if (!function_exists('pcntl_signal_dispatch')) {
            return false;
        }

        pcntl_signal_dispatch();

        return null !== \$this->signal;
    }

    /**
     * @throws SignalCaughtException
     */
    public function throwExceptionIfSignalIsCaught(): void
    {
        if (!\$this->isSignalCaught()) {
            return;
        }

        throw new SignalCaughtException(\$this->signal);
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
        return "@bundles/CoreBundle/ProcessSignal/ProcessSignalService.php";
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
        return new Source("", "@bundles/CoreBundle/ProcessSignal/ProcessSignalService.php", "/app/docroot/app/bundles/CoreBundle/ProcessSignal/ProcessSignalService.php");
    }
}
