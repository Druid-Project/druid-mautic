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

/* @bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php */
class __TwigTemplate_6db32051434117a57e82cd57c409746e extends Template
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

namespace Mautic\\CoreBundle\\Loader\\EnvVars;

use Symfony\\Component\\HttpFoundation\\ParameterBag;

class ConfigEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        foreach (\$config->all() as \$key => \$value) {
            if (!empty(\$value) && is_string(\$value) && preg_match('/getenv\\((.*?)\\)/', \$value, \$match)) {
                \$value = (string) getenv(\$match[1]);
            }

            // JSON encode arrays
            \$defaultValue = \$defaultConfig->get(\$key);
            if (is_array(\$value) || is_array(\$defaultValue)) {
                \$jsonValue = \$value ?: \$defaultValue;
                \$value     = json_encode(\$jsonValue);
            }

            // Set the environment variable
            \$envKey = sprintf('MAUTIC_%s', mb_strtoupper(\$key));
            \$envVars->set(\$envKey, \$value);
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
        return "@bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php", "/app/docroot/app/bundles/CoreBundle/Loader/EnvVars/ConfigEnvVars.php");
    }
}
