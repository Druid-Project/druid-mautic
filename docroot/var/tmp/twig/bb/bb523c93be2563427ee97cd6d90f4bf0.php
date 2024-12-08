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

/* @bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php */
class __TwigTemplate_cd809d396717620e78a426509026852a extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler;

use Mautic\\IntegrationsBundle\\Sync\\Exception\\HandlerNotSupportedException;

class HandlerContainer
{
    private array \$handlers = [];

    public function registerHandler(HandlerInterface \$handler): void
    {
        if (!isset(\$this->handlers[\$handler->getIntegration()])) {
            \$this->handlers[\$handler->getIntegration()] = [];
        }

        \$this->handlers[\$handler->getIntegration()][\$handler->getSupportedObject()] = \$handler;
    }

    /**
     * @return HandlerInterface
     *
     * @throws HandlerNotSupportedException
     */
    public function getHandler(string \$integration, string \$object)
    {
        if (!isset(\$this->handlers[\$integration])) {
            throw new HandlerNotSupportedException(\"\$integration does not have any registered handlers\");
        }

        if (!isset(\$this->handlers[\$integration][\$object])) {
            throw new HandlerNotSupportedException(\"\$integration does not have any registered handlers for the object \$object\");
        }

        return \$this->handlers[\$integration][\$object];
    }

    /**
     * @return HandlerInterface[]
     */
    public function getHandlers(): array
    {
        return array_reduce(\$this->handlers, fn (\$accumulator, \$integrationHandlers): array => array_merge(\$accumulator, \$integrationHandlers), []);
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerContainer.php");
    }
}
