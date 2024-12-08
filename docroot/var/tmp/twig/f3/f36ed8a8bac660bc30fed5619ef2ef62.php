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

/* @bundles/CoreBundle/Loader/EnvVars/ApiEnvVars.php */
class __TwigTemplate_0f5094a2ce6937858ae6f3267b9f21de extends Template
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

class ApiEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        \$accessTokenLifetime = \$config->get('api_oauth2_access_token_lifetime');
        \$envVars->set('MAUTIC_API_OAUTH2_ACCESS_TOKEN_LIFETIME', is_int(\$accessTokenLifetime) ? \$accessTokenLifetime * 60 : 3600);

        \$refreshTokenLifetime = \$config->get('api_oauth2_refresh_token_lifetime');
        \$envVars->set('MAUTIC_API_OAUTH2_REFRESH_TOKEN_LIFETIME', is_int(\$refreshTokenLifetime) ? \$refreshTokenLifetime * 60 * 60 * 24 : 1_209_600);

        \$apiRateLimitEnabled = 0 === (int) \$config->get('api_rate_limiter_limit') ? false : true;
        \$envVars->set('MAUTIC_API_RATE_LIMIT_ENABLED', \$apiRateLimitEnabled);
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
        return "@bundles/CoreBundle/Loader/EnvVars/ApiEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/ApiEnvVars.php", "/app/docroot/app/bundles/CoreBundle/Loader/EnvVars/ApiEnvVars.php");
    }
}
