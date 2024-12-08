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

/* @bundles/FormBundle/Collection/FieldCollection.php */
class __TwigTemplate_69ee463ee500d78e48b43983ff93c854 extends Template
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

namespace Mautic\\FormBundle\\Collection;

use Mautic\\FormBundle\\Crate\\FieldCrate;
use Mautic\\FormBundle\\Exception\\FieldNotFoundException;

/**
 * @extends \\ArrayIterator<int,FieldCrate>
 */
final class FieldCollection extends \\ArrayIterator
{
    /**
     * @return array<string,string>
     */
    public function toChoices(): array
    {
        \$choices = [];

        /** @var FieldCrate \$field */
        foreach (\$this as \$field) {
            \$choices[\$field->getName()] = \$field->getKey();
        }

        return \$choices;
    }

    /**
     * @return FieldCrate|null
     */
    public function getFieldByKey(string \$key, bool \$throwExceptionIfNotFound = true)
    {
        /** @var FieldCrate \$field */
        foreach (\$this as \$field) {
            if (\$key === \$field->getKey()) {
                return \$field;
            }
        }

        if (\$throwExceptionIfNotFound) {
            throw new FieldNotFoundException(\"Field with key {\$key} was not found.\");
        }

        return null;
    }

    /**
     * @param string[] \$keys
     */
    public function removeFieldsWithKeys(array \$keys, string \$keyToKeep = null): FieldCollection
    {
        return new self(
            array_filter(
                \$this->getArrayCopy(),
                fn (FieldCrate \$field): bool => (\$keyToKeep && \$field->getKey() === \$keyToKeep) || !in_array(\$field->getKey(), \$keys, true)
            )
        );
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
        return "@bundles/FormBundle/Collection/FieldCollection.php";
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
        return new Source("", "@bundles/FormBundle/Collection/FieldCollection.php", "/app/docroot/app/bundles/FormBundle/Collection/FieldCollection.php");
    }
}
