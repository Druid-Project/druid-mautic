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

/* @bundles/CoreBundle/Exception/ErrorHandlerException.php */
class __TwigTemplate_f76b798e10ba497318b85fd0c0b41bae extends Template
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

namespace Mautic\\CoreBundle\\Exception;

class ErrorHandlerException extends \\Exception
{
    /**
     * @param string \$message
     * @param bool   \$showMessage
     * @param int    \$code
     */
    public function __construct(
        \$message = '',
        protected \$showMessage = false,
        \$code = 0,
        \\Exception \$previous = null
    ) {
        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return bool
     */
    public function showMessage()
    {
        return \$this->showMessage;
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
        return "@bundles/CoreBundle/Exception/ErrorHandlerException.php";
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
        return new Source("", "@bundles/CoreBundle/Exception/ErrorHandlerException.php", "/app/docroot/app/bundles/CoreBundle/Exception/ErrorHandlerException.php");
    }
}
