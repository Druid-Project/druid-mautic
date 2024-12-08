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

/* @bundles/FormBundle/Collector/FieldCollector.php */
class __TwigTemplate_bdc4aa90114ba5cedad7a065d5f999cd extends Template
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

namespace Mautic\\FormBundle\\Collector;

use Mautic\\FormBundle\\Collection\\FieldCollection;
use Mautic\\FormBundle\\Event\\FieldCollectEvent;
use Mautic\\FormBundle\\FormEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class FieldCollector implements FieldCollectorInterface
{
    /**
     * @var FieldCollection[]
     */
    private array \$fieldCollections = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function getFields(string \$object): FieldCollection
    {
        if (!isset(\$this->fieldCollections[\$object])) {
            \$this->collect(\$object);
        }

        return \$this->fieldCollections[\$object];
    }

    private function collect(string \$object): void
    {
        \$event = new FieldCollectEvent(\$object);
        \$this->dispatcher->dispatch(\$event, FormEvents::ON_FIELD_COLLECT);
        \$this->fieldCollections[\$object] = \$event->getFields();
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
        return "@bundles/FormBundle/Collector/FieldCollector.php";
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
        return new Source("", "@bundles/FormBundle/Collector/FieldCollector.php", "/app/docroot/app/bundles/FormBundle/Collector/FieldCollector.php");
    }
}
