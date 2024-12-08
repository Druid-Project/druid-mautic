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

/* @bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php */
class __TwigTemplate_9aeec9a6159d125bc65390270806afbb extends Template
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

use Symfony\\Contracts\\EventDispatcher\\Event;

class MauticSyncFieldsLoadEvent extends Event
{
    public function __construct(
        private string \$objectName,
        private array \$fields
    ) {
    }

    public function getFields(): array
    {
        return \$this->fields;
    }

    public function addField(string \$key, string \$name): void
    {
        \$this->fields[\$key] = \$name;
    }

    public function getObjectName(): string
    {
        return \$this->objectName;
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
        return "@bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php", "/app/docroot/app/bundles/IntegrationsBundle/Event/MauticSyncFieldsLoadEvent.php");
    }
}
