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

/* @bundles/CoreBundle/Loader/EnvVars/EnvVarsInterface.php */
class __TwigTemplate_80ff2842142f5382a21bec54dec26636 extends Template
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

interface EnvVarsInterface
{
    /**
     * @param ParameterBag \$config        Bag with Mautic local parameters
     * @param ParameterBag \$defaultConfig Bag with bundle and plugin's default parameters
     * @param ParameterBag \$envVars       Set environment variables into this bag
     */
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Loader/EnvVars/EnvVarsInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/EnvVarsInterface.php", "/app/docroot/app/bundles/CoreBundle/Loader/EnvVars/EnvVarsInterface.php");
    }
}
