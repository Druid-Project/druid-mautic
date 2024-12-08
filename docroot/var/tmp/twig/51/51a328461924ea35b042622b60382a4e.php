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

/* @bundles/FormBundle/Event/FormFieldEvent.php */
class __TwigTemplate_ce4dd840f7de22835b0ab4d779bf6601 extends Template
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

use Mautic\\FormBundle\\Entity\\Field;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class FormFieldEvent extends Event
{
    public function __construct(
        private Field \$entity,
        private bool \$isNew = false
    ) {
    }

    public function getField(): Field
    {
        return \$this->entity;
    }

    public function isNew(): bool
    {
        return \$this->isNew;
    }

    public function setField(Field \$field): void
    {
        \$this->entity = \$field;
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
        return "@bundles/FormBundle/Event/FormFieldEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/FormFieldEvent.php", "/app/docroot/app/bundles/FormBundle/Event/FormFieldEvent.php");
    }
}
