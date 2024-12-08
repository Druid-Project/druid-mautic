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

/* @bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerInterface.php */
class __TwigTemplate_4716e89288a64cdb22fa70fc67603953 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO;

interface HandlerInterface
{
    public function getIntegration(): string;

    public function getSupportedObject(): string;

    public function writeEntry(NotificationDAO \$notificationDAO, string \$integrationDisplayName, string \$objectDisplayName): void;

    /**
     * Finalize notifications such as pushing summary entries to the user notifications tray.
     */
    public function finalize(): void;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/Notification/Handler/HandlerInterface.php");
    }
}
