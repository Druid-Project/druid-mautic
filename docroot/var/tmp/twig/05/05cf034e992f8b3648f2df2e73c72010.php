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

/* @bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php */
class __TwigTemplate_d3749c33d41720b9a287af9325eb214b extends Template
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

class SAMLEnvVars implements EnvVarsInterface
{
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void
    {
        if (\$entityId = \$config->get('saml_idp_entity_id')) {
            \$envVars->set('MAUTIC_SAML_ENTITY_ID', \$entityId);
        } elseif (\$siteUrl = \$config->get('site_url')) {
            \$parts  = parse_url(\$siteUrl);
            \$scheme = !empty(\$parts['scheme']) ? \$parts['scheme'] : 'http';
            \$envVars->set('MAUTIC_SAML_ENTITY_ID', \$scheme.'://'.\$parts['host']);
        } else {
            \$envVars->set('MAUTIC_SAML_ENTITY_ID', 'mautic');
        }

        \$samlEnabled = (bool) \$config->get('saml_idp_metadata');

        \$envVars->set('MAUTIC_SAML_LOGIN_PATH', \$samlEnabled ? '/s/saml/login' : '/s/login');
        \$envVars->set('MAUTIC_SAML_LOGIN_CHECK_PATH', \$samlEnabled ? '/s/saml/login_check' : '/s/login_check');
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
        return "@bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php", "/app/docroot/app/bundles/CoreBundle/Loader/EnvVars/SAMLEnvVars.php");
    }
}
