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

/* @bundles/IntegrationsBundle/Auth/Provider/Oauth1aTwoLegged/HttpFactory.php */
class __TwigTemplate_988ef5c934d953aa66247daf5c551e72 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth1aTwoLegged;

use GuzzleHttp\\Client;
use GuzzleHttp\\ClientInterface;
use GuzzleHttp\\HandlerStack;
use GuzzleHttp\\Subscriber\\Oauth\\Oauth1;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthConfigInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;
use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthProviderInterface;
use Mautic\\IntegrationsBundle\\Exception\\PluginNotConfiguredException;

/**
 * Factory for building HTTP clients that will sign the requests with Oauth1a headers.
 */
class HttpFactory implements AuthProviderInterface
{
    public const NAME = 'oauth1a_two_legged';

    /**
     * Cache of initialized clients.
     *
     * @var Client[]
     */
    private array \$initializedClients = [];

    public function getAuthType(): string
    {
        return self::NAME;
    }

    /**
     * @param CredentialsInterface|AuthCredentialsInterface \$credentials
     *
     * @throws PluginNotConfiguredException
     */
    public function getClient(AuthCredentialsInterface \$credentials, ?AuthConfigInterface \$config = null): ClientInterface
    {
        // Return cached initialized client if there is one.
        if (!empty(\$this->initializedClients[\$credentials->getConsumerKey()])) {
            return \$this->initializedClients[\$credentials->getConsumerKey()];
        }

        if (!\$this->credentialsAreConfigured(\$credentials)) {
            throw new PluginNotConfiguredException('Oauth1a Credentials or URL is missing');
        }

        \$this->initializedClients[\$credentials->getConsumerKey()] = \$this->buildClient(\$credentials);

        return \$this->initializedClients[\$credentials->getConsumerKey()];
    }

    private function buildClient(CredentialsInterface \$credentials): Client
    {
        \$stack = HandlerStack::create();
        \$stack->push(\$this->createOauth1(\$credentials));

        return new Client(
            [
                'handler'  => \$stack,
                'base_uri' => \$credentials->getAuthUrl(),
                'auth'     => 'oauth',
            ]
        );
    }

    private function createOauth1(CredentialsInterface \$credentials): Oauth1
    {
        \$config = [
            'consumer_key'    => \$credentials->getConsumerKey(),
            'consumer_secret' => \$credentials->getConsumerSecret(),
        ];

        if (\$credentials->getToken() && \$credentials->getTokenSecret()) {
            \$config['token']        = \$credentials->getToken();
            \$config['token_secret'] = \$credentials->getTokenSecret();
        }

        return new Oauth1(\$config);
    }

    private function credentialsAreConfigured(CredentialsInterface \$credentials): bool
    {
        return !empty(\$credentials->getAuthUrl()) && !empty(\$credentials->getConsumerKey()) && !empty(\$credentials->getConsumerSecret());
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
        return "@bundles/IntegrationsBundle/Auth/Provider/Oauth1aTwoLegged/HttpFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/Oauth1aTwoLegged/HttpFactory.php", "/app/docroot/app/bundles/IntegrationsBundle/Auth/Provider/Oauth1aTwoLegged/HttpFactory.php");
    }
}
