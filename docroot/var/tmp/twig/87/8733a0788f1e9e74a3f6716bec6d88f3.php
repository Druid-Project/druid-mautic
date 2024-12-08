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

/* @bundles/LeadBundle/Model/DefaultValueTrait.php */
class __TwigTemplate_99de5928334301cf12140b8a9fbce157 extends Template
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

namespace Mautic\\LeadBundle\\Model;

use Mautic\\LeadBundle\\Entity\\CustomFieldEntityInterface;

trait DefaultValueTrait
{
    /**
     * @param string \$object
     */
    protected function setEntityDefaultValues(CustomFieldEntityInterface \$entity, \$object = 'lead')
    {
        if (!\$entity->getId()) {
            \$fields = \$this->leadFieldModel->getFieldListWithProperties(\$object);
            foreach (\$fields as \$alias => \$field) {
                // Prevent defaults from overwriting values already set
                \$value = \$entity->getFieldValue(\$alias);

                if ((null === \$value || '' === \$value) && '' !== \$field['defaultValue'] && null !== \$field['defaultValue']) {
                    \$entity->addUpdatedField(\$alias, \$field['defaultValue']);
                }
            }
        }
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
        return "@bundles/LeadBundle/Model/DefaultValueTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Model/DefaultValueTrait.php", "/app/docroot/app/bundles/LeadBundle/Model/DefaultValueTrait.php");
    }
}
