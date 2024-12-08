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

/* @bundles/FormBundle/Event/ValidationEvent.php */
class __TwigTemplate_2a51274240d63175674fbfe50dccc861 extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Entity\\Field;

class ValidationEvent extends CommonEvent
{
    private bool \$valid = true;

    private string \$invalidReason = '';

    /**
     * @param mixed \$value
     */
    public function __construct(
        private Field \$field,
        private \$value
    ) {
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return \$this->field;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    public function failedValidation(\$reason): void
    {
        \$this->valid         = false;
        \$this->invalidReason = \$reason;

        \$this->stopPropagation();
    }

    /**
     * Is the field valid.
     */
    public function isValid(): bool
    {
        return \$this->valid;
    }

    /**
     * Get the reason this field was invalidated.
     */
    public function getInvalidReason(): string
    {
        return \$this->invalidReason;
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
        return "@bundles/FormBundle/Event/ValidationEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/ValidationEvent.php", "/app/docroot/app/bundles/FormBundle/Event/ValidationEvent.php");
    }
}
