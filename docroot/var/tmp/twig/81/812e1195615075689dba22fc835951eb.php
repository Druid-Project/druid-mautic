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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php */
class __TwigTemplate_93d66a5574108054a715f370d75c9c67 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Support\\Oauth2\\Token;

use kamermans\\OAuth2\\Token\\RawToken;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Mautic\\PluginBundle\\Entity\\Integration;

class TokenPersistenceFactory
{
    public function __construct(
        private IntegrationsHelper \$integrationsHelper
    ) {
    }

    public function create(Integration \$integration): TokenPersistence
    {
        \$tokenPersistence = new TokenPersistence(\$this->integrationsHelper);

        \$tokenPersistence->setIntegration(\$integration);

        \$apiKeys = \$integration->getApiKeys();

        \$token = new RawToken(
            \$apiKeys['access_token'] ?? null,
            \$apiKeys['refresh_token'] ?? null,
            \$apiKeys['expires_at'] ?? null
        );

        \$tokenPersistence->restoreToken(\$token);

        return \$tokenPersistence;
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
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php", "/app/docroot/app/bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/TokenPersistenceFactory.php");
    }
}
