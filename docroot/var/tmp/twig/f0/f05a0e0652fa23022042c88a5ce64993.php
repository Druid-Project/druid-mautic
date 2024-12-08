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

/* @bundles/SmsBundle/Callback/HandlerContainer.php */
class __TwigTemplate_f429a52bb580d57d7f1e45d313f158a6 extends Template
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

namespace Mautic\\SmsBundle\\Callback;

use Mautic\\SmsBundle\\Exception\\CallbackHandlerNotFound;

class HandlerContainer
{
    /**
     * @var CallbackInterface[]
     */
    private ?array \$handlers = null;

    public function registerHandler(CallbackInterface \$handler): void
    {
        \$this->handlers[\$handler->getTransportName()] = \$handler;
    }

    /**
     * @return CallbackInterface
     *
     * @throws CallbackHandlerNotFound
     */
    public function getHandler(\$transportName)
    {
        if (!isset(\$this->handlers[\$transportName])) {
            throw new CallbackHandlerNotFound(\"\$transportName has not been registered\");
        }

        return \$this->handlers[\$transportName];
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
        return "@bundles/SmsBundle/Callback/HandlerContainer.php";
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
        return new Source("", "@bundles/SmsBundle/Callback/HandlerContainer.php", "/app/docroot/app/bundles/SmsBundle/Callback/HandlerContainer.php");
    }
}
