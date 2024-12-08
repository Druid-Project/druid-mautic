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

/* @bundles/LeadBundle/Event/FormAdjustmentEvent.php */
class __TwigTemplate_e0efc6f9bc33f9cc9288f554f45f2ddb extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class FormAdjustmentEvent extends Event
{
    /**
     * @param FormInterface<mixed> \$form
     * @param mixed[]              \$fieldDetails
     */
    public function __construct(
        private FormInterface \$form,
        private string \$fieldAlias,
        private string \$fieldObject,
        private string \$operator,
        private array \$fieldDetails
    ) {
    }

    /**
     * @return FormInterface<mixed>
     */
    public function getForm(): FormInterface
    {
        return \$this->form;
    }

    public function getFieldAlias(): string
    {
        return \$this->fieldAlias;
    }

    public function getFieldObject(): string
    {
        return \$this->fieldObject;
    }

    public function getOperator(): string
    {
        return \$this->operator;
    }

    public function operatorIsOneOf(string ...\$operators): bool
    {
        return in_array(\$this->getOperator(), \$operators);
    }

    public function fieldTypeIsOneOf(string ...\$fieldTypes): bool
    {
        return in_array(\$this->getFieldType(), \$fieldTypes);
    }

    public function getFieldType(): string
    {
        return \$this->fieldDetails['properties']['type'];
    }

    /**
     * @return mixed[]
     */
    public function getFieldDetails(): array
    {
        return \$this->fieldDetails;
    }

    /**
     * @return mixed[]
     */
    public function getFieldChoices(): array
    {
        return \$this->fieldDetails['properties']['list'] ?? [];
    }

    public function filterShouldBeDisabled(): bool
    {
        return \$this->operatorIsOneOf(OperatorOptions::EMPTY, OperatorOptions::NOT_EMPTY);
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
        return "@bundles/LeadBundle/Event/FormAdjustmentEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/FormAdjustmentEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/FormAdjustmentEvent.php");
    }
}
