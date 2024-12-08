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

/* @bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php */
class __TwigTemplate_fb85f935dc9be8db3437af4318587d6a extends Template
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

class ElFinderEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        \$root = rtrim((string) \$defaultConfig->get('local_root'), '/') ?: '%kernel.project_dir%';

        \$relativeImageFolderPath = trim((string) \$config->get('image_path'), '/');
        \$absoluteImageFolderPath = \$root.'/'.\$relativeImageFolderPath;
        \$envVars->set('MAUTIC_EL_FINDER_PATH', \$absoluteImageFolderPath);

        \$url = rtrim((string) \$config->get('site_url'), '/').'/'.\$relativeImageFolderPath;
        \$envVars->set('MAUTIC_EL_FINDER_URL', \$url);
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
        return "@bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php", "/app/docroot/app/bundles/CoreBundle/Loader/EnvVars/ElFinderEnvVars.php");
    }
}
