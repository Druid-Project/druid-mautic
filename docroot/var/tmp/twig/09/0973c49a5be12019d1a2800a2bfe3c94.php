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

/* @bundles/CoreBundle/Form/Type/PropertiesTrait.php */
class __TwigTemplate_9c4121d6dc2a0885f9845ed4ba7a9dca extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;

trait PropertiesTrait
{
    /**
     * @param FormBuilderInterface|Form \$builder
     */
    protected function addPropertiesType(\$builder, array \$options, array &\$masks)
    {
        \$properties = null;
        if (!empty(\$options['data'])) {
            if (is_array(\$options['data'])) {
                \$properties = (!empty(\$options['data']['properties'])) ? \$options['data']['properties'] : null;

                // Merge the parent data over so the child forms could use them
                if (is_array(\$properties)) {
                    \$properties = array_merge(\$options['data'], \$properties);
                }
            } elseif (is_object(\$options['data']) && method_exists(\$options['data'], 'getProperties')) {
                \$properties = \$options['data']->getProperties();
            }
        }

        \$formTypeOptions = [
            'label' => false,
            'data'  => \$properties,
        ];
        if (isset(\$options['settings']['formTypeCleanMasks'])) {
            \$masks['properties'] = \$options['settings']['formTypeCleanMasks'];
        }
        if (!empty(\$options['settings']['formTypeOptions'])) {
            \$formTypeOptions = array_merge(\$formTypeOptions, \$options['settings']['formTypeOptions']);
        }

        \$builder->add('properties', \$options['settings']['formType'], \$formTypeOptions);
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
        return "@bundles/CoreBundle/Form/Type/PropertiesTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/PropertiesTrait.php", "/app/docroot/app/bundles/CoreBundle/Form/Type/PropertiesTrait.php");
    }
}
