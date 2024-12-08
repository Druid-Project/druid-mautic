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

/* @bundles/ConfigBundle/Mapper/Helper/ConfigHelper.php */
class __TwigTemplate_747f6bfa4b0daf69e50df12ccbc28a0d extends Template
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

namespace Mautic\\ConfigBundle\\Mapper\\Helper;

class ConfigHelper
{
    /**
     * Map local config values with form fields.
     *
     * @param mixed \$defaults
     */
    public static function bindNestedConfigValues(array \$configValues, \$defaults): array
    {
        if (!is_array(\$defaults)) {
            // Return all config values
            return \$configValues;
        }

        foreach (\$defaults as \$key => \$defaultValue) {
            if (isset(\$configValues[\$key]) && is_array(\$configValues[\$key])) {
                \$configValues[\$key] = self::bindNestedConfigValues(\$configValues[\$key], \$defaultValue);

                continue;
            }

            \$configValues[\$key] ??= \$defaultValue;
        }

        return \$configValues;
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
        return "@bundles/ConfigBundle/Mapper/Helper/ConfigHelper.php";
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
        return new Source("", "@bundles/ConfigBundle/Mapper/Helper/ConfigHelper.php", "/app/docroot/app/bundles/ConfigBundle/Mapper/Helper/ConfigHelper.php");
    }
}
