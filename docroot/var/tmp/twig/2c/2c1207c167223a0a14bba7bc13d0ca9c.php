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

/* @bundles/IntegrationsBundle/Event/SyncEvent.php */
class __TwigTemplate_abc370da4306022d1ad3ea40fa6349aa extends Template
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

namespace Mautic\\IntegrationsBundle\\Event;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Symfony\\Contracts\\EventDispatcher\\Event;

class SyncEvent extends Event
{
    public function __construct(
        private InputOptionsDAO \$inputOptionsDAO
    ) {
    }

    public function getIntegrationName(): string
    {
        return \$this->inputOptionsDAO->getIntegration();
    }

    public function isIntegration(string \$integrationName): bool
    {
        return \$this->getIntegrationName() === \$integrationName;
    }

    public function getFromDateTime(): ?\\DateTimeInterface
    {
        return \$this->inputOptionsDAO->getStartDateTime();
    }

    public function getToDateTime(): ?\\DateTimeInterface
    {
        return \$this->inputOptionsDAO->getEndDateTime();
    }

    public function getInputOptions(): InputOptionsDAO
    {
        return \$this->inputOptionsDAO;
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
        return "@bundles/IntegrationsBundle/Event/SyncEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/SyncEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/SyncEvent.php");
    }
}
