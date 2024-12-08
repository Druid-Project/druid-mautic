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

/* @bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AbstractClientFactory.php */
class __TwigTemplate_4e265e7f926f854f5ed75b06045b9dfb extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged;

use GuzzleHttp\\ClientInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthConfigInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthProviderInterface;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;

/**
 * Factory for building HTTP clients that will sign the requests with Oauth2 headers.
 * Based on Guzzle OAuth 2.0 Subscriber - kamermans/guzzle-oauth2-subscriber package.
 *
 * @see https://github.com/kamermans/guzzle-oauth2-subscriber
 *
 * @deprecated; use Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\HttpFactory
 */
abstract class AbstractClientFactory implements AuthProviderInterface
{
    public const NAME = 'oauth2_three_legged';

    public function getAuthType(): string
    {
        return self::NAME;
    }

    /**
     * @param AuthCredentialsInterface|CredentialsInterface \$credentials
     *
     * @throws PluginNotConfiguredException
     */
    public function getClient(AuthCredentialsInterface \$credentials, ?AuthConfigInterface \$config = null): ClientInterface
    {
        if (!\$this->credentialsAreConfigured(\$credentials)) {
            throw new PluginNotConfiguredException('Oauth2 credentials are not configured');
        }

        return \$this->buildClient(\$credentials);
    }

    abstract protected function buildClient(CredentialsInterface \$credentials): ClientInterface;

    abstract protected function credentialsAreConfigured(CredentialsInterface \$credentials): bool;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AbstractClientFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AbstractClientFactory.php", "/app/docroot/app/bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AbstractClientFactory.php");
    }
}
