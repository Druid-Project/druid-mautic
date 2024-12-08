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

/* @bundles/FormBundle/Event/FieldCollectEvent.php */
class __TwigTemplate_8783eb8a63d1e7e0123818da10a6b21d extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\FormBundle\\Collection\\FieldCollection;
use Mautic\\FormBundle\\Crate\\FieldCrate;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class FieldCollectEvent extends Event
{
    private FieldCollection \$fields;

    public function __construct(
        private string \$object
    ) {
        \$this->fields = new FieldCollection();
    }

    public function getObject(): string
    {
        return \$this->object;
    }

    public function appendField(FieldCrate \$field): void
    {
        \$this->fields->append(\$field);
    }

    public function getFields(): FieldCollection
    {
        return \$this->fields;
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
        return "@bundles/FormBundle/Event/FieldCollectEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FieldCollectEvent.php", "/app/docroot/app/bundles/FormBundle/Event/FieldCollectEvent.php");
    }
}
