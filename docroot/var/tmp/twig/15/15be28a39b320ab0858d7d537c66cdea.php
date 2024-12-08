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

/* @bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php */
class __TwigTemplate_1251869a9721c109a59b2894b081f320 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class InternalObjectRouteEvent extends Event
{
    private ?string \$route = null;

    public function __construct(
        private ObjectInterface \$object,
        private int \$id
    ) {
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    public function getId(): int
    {
        return \$this->id;
    }

    public function getRoute(): ?string
    {
        return \$this->route;
    }

    public function setRoute(?string \$route): void
    {
        \$this->route = \$route;
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
        return "@bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/InternalObjectRouteEvent.php");
    }
}
