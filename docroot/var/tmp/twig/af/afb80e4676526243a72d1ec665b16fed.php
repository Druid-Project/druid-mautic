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

/* @bundles/CoreBundle/Monolog/Handler/FileLogHandler.php */
class __TwigTemplate_7def86f15def9e8f3c1592e68c5ace4a extends Template
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

namespace Mautic\\CoreBundle\\Monolog\\Handler;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Handler\\RotatingFileHandler;
use Monolog\\Logger;

class FileLogHandler extends RotatingFileHandler
{
    public function __construct(CoreParametersHelper \$coreParametersHelper, FormatterInterface \$exceptionFormatter)
    {
        \$logPath     = \$coreParametersHelper->get('log_path');
        \$logFileName = \$coreParametersHelper->get('log_file_name');
        \$maxFiles    = \$coreParametersHelper->get('max_log_files');
        \$debugMode   = \$coreParametersHelper->get('debug', false) || (defined('MAUTIC_ENV') && 'dev' === MAUTIC_ENV);
        \$level       = \$debugMode ? Logger::DEBUG : Logger::NOTICE;

        if (\$debugMode) {
            \$this->setFormatter(\$exceptionFormatter);
        }

        parent::__construct(sprintf('%s/%s', \$logPath, \$logFileName), \$maxFiles, \$level);
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
        return "@bundles/CoreBundle/Monolog/Handler/FileLogHandler.php";
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
        return new Source("", "@bundles/CoreBundle/Monolog/Handler/FileLogHandler.php", "/app/docroot/app/bundles/CoreBundle/Monolog/Handler/FileLogHandler.php");
    }
}
