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

/* @bundles/ConfigBundle/Mapper/ConfigMapper.php */
class __TwigTemplate_7ee5e4be412285adf3e27cfd08a15d8c extends Template
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

namespace Mautic\\ConfigBundle\\Mapper;

use Mautic\\ConfigBundle\\Exception\\BadFormConfigException;
use Mautic\\ConfigBundle\\Mapper\\Helper\\ConfigHelper;
use Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class ConfigMapper
{
    /**
     * @var mixed[]
     */
    private array \$restrictedParameters;

    public function __construct(
        private CoreParametersHelper \$parametersHelper,
        array \$restrictedParameters = []
    ) {
        \$this->restrictedParameters = RestrictionHelper::prepareRestrictions(\$restrictedParameters);
    }

    /**
     * @throws BadFormConfigException
     */
    public function bindFormConfigsWithRealValues(array \$forms): array
    {
        foreach (\$forms as \$bundle => \$config) {
            if (!isset(\$config['parameters'])) {
                throw new BadFormConfigException();
            }

            \$forms[\$bundle]['parameters'] = \$this->mergeWithLocalParameters(\$forms[\$bundle]['parameters']);
        }

        return \$forms;
    }

    /**
     * Merges default parameters from each subscribed bundle with the local (real) params.
     */
    private function mergeWithLocalParameters(array \$formParameters): array
    {
        \$formParameters = RestrictionHelper::applyRestrictions(\$formParameters, \$this->restrictedParameters);

        // All config values are stored at root level of the config
        foreach (\$formParameters as \$formKey => \$defaultValue) {
            \$configValue = \$this->parametersHelper->get(\$formKey);

            if (null === \$configValue) {
                // Nothing has been locally configured so keep default
                continue;
            }

            // Form field is a collection of parameters
            if (is_array(\$configValue)) {
                // Apply nested restrictions to nested config values
                \$configValue = RestrictionHelper::applyRestrictions(\$configValue, \$this->restrictedParameters, \$formKey);

                // Bind configured values with defaults
                \$formParameters[\$formKey] = ConfigHelper::bindNestedConfigValues(\$configValue, \$defaultValue);

                continue;
            }

            // Form field
            \$formParameters[\$formKey] = \$configValue;
        }

        return \$formParameters;
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
        return "@bundles/ConfigBundle/Mapper/ConfigMapper.php";
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
        return new Source("", "@bundles/ConfigBundle/Mapper/ConfigMapper.php", "/app/docroot/app/bundles/ConfigBundle/Mapper/ConfigMapper.php");
    }
}
