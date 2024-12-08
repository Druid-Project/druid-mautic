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

/* @bundles/FormBundle/Crate/FieldCrate.php */
class __TwigTemplate_613f9c6bb205b12558f3f8b43d901e61 extends Template
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

namespace Mautic\\FormBundle\\Crate;

use Mautic\\LeadBundle\\Helper\\FormFieldHelper;

final class FieldCrate
{
    /**
     * @param mixed[] \$properties
     */
    public function __construct(
        private string \$key,
        private string \$name,
        private string \$type,
        private array \$properties
    ) {
    }

    public function getKey(): string
    {
        return \$this->key;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getType(): string
    {
        return \$this->type;
    }

    /**
     * @return mixed[]
     */
    public function getProperties(): array
    {
        return \$this->properties;
    }

    public function isListType(): bool
    {
        \$isListType    = in_array(\$this->getType(), FormFieldHelper::getListTypes());
        \$hasList       = !empty(\$this->getProperties()['list']);
        \$hasOptionList = !empty(\$this->getProperties()['optionlist']);

        return \$isListType || \$hasList || \$hasOptionList;
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
        return "@bundles/FormBundle/Crate/FieldCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/FieldCrate.php", "/app/docroot/app/bundles/FormBundle/Crate/FieldCrate.php");
    }
}
