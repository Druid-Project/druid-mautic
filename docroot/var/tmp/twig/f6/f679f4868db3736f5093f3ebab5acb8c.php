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

/* @bundles/FormBundle/Helper/PropertiesAccessor.php */
class __TwigTemplate_1ab61f1bd824c2573b47dc92568e0588 extends Template
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

namespace Mautic\\FormBundle\\Helper;

use Mautic\\FormBundle\\Model\\FormModel;

class PropertiesAccessor
{
    public function __construct(
        private FormModel \$formModel
    ) {
    }

    /**
     * @param mixed[] \$field
     *
     * @return mixed[]
     */
    public function getProperties(array \$field)
    {
        \$hasContactFieldMapped = !empty(\$field['mappedField']) && !empty(\$field['mappedObject']) && 'contact' === \$field['mappedObject'];
        if ('country' === \$field['type'] || (\$hasContactFieldMapped && !empty(\$field['properties']['syncList']))) {
            return \$this->formModel->getContactFieldPropertiesList((string) \$field['mappedField']);
        } elseif (!empty(\$field['properties'])) {
            return \$this->getOptionsListFromProperties(\$field['properties']);
        }

        return [];
    }

    /**
     * @param string|mixed[] \$options
     *
     * @return string[]
     */
    public function getChoices(\$options): array
    {
        \$choices = [];

        if (is_array(\$options) && !isset(\$options[0]['value'])) {
            return array_flip(\$options);
        }

        if (!is_array(\$options)) {
            \$options = explode('|', (string) \$options);
        }

        foreach (\$options as \$option) {
            if (is_array(\$option)) {
                if (isset(\$option['label']) && isset(\$option['alias'])) {
                    \$choices[\$option['label']] = \$option['alias'];
                } elseif (isset(\$option['label']) && isset(\$option['value'])) {
                    \$choices[\$option['label']] = \$option['value'];
                } else {
                    foreach (\$option as \$opt) {
                        \$choices[\$opt] = \$opt;
                    }
                }
            } else {
                \$choices[\$option] = \$option;
            }
        }

        return \$choices;
    }

    /**
     * @param array<string,mixed> \$properties
     *
     * @return mixed[]
     */
    private function getOptionsListFromProperties(array \$properties)
    {
        if (!empty(\$properties['list']['list'])) {
            return \$properties['list']['list'];
        } elseif (!empty(\$properties['optionlist']['list'])) {
            return \$properties['optionlist']['list'];
        }

        return [];
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
        return "@bundles/FormBundle/Helper/PropertiesAccessor.php";
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
        return new Source("", "@bundles/FormBundle/Helper/PropertiesAccessor.php", "/app/docroot/app/bundles/FormBundle/Helper/PropertiesAccessor.php");
    }
}
