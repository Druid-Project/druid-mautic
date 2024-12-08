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

/* @bundles/IntegrationsBundle/Sync/Logger/DebugLogger.php */
class __TwigTemplate_589b319030e2486b070c5032b0daa69f extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Logger;

use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;

class DebugLogger
{
    private static ?LoggerInterface \$logger = null;

    public function __construct(LoggerInterface \$logger)
    {
        static::\$logger = \$logger;
    }

    /**
     * @param string \$integration
     * @param string \$loggedFrom
     * @param string \$message
     * @param string \$urgency
     */
    public static function log(\$integration, \$message, \$loggedFrom = null, array \$context = [], \$urgency = LogLevel::DEBUG): void
    {
        if (!static::\$logger) {
            return;
        }

        if (null !== \$loggedFrom) {
            \$context['logged from'] = \$loggedFrom;
        }

        static::\$logger->\$urgency(strtoupper(\$integration).' SYNC: '.\$message, \$context);
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
        return "@bundles/IntegrationsBundle/Sync/Logger/DebugLogger.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Logger/DebugLogger.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Logger/DebugLogger.php");
    }
}
