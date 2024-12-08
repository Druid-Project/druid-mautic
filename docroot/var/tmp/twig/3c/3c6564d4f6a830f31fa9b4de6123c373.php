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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php */
class __TwigTemplate_81e462a6a80c7ddbe29dc5d40881afb1 extends Template
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

use kamermans\\OAuth2\\Token\\TokenInterface;

class IntegrationTokenFactory implements TokenFactoryInterface
{
    /**
     * @param mixed[]  \$extraKeysToStore Extra keys returned by the service during the token process that needs to be captured
     * @param int|null \$defaultExpiresIn Default time in seconds that tokens are good for if not given in the response
     */
    public function __construct(
        private array \$extraKeysToStore = [],
        private ?int \$defaultExpiresIn = null
    ) {
    }

    public function __invoke(array \$data, ?TokenInterface \$previousToken = null): IntegrationToken
    {
        \$accessToken  = null;
        \$refreshToken = null;

        // Read \"access_token\" attribute
        if (isset(\$data['access_token'])) {
            \$accessToken = \$data['access_token'];
        }

        // Read \"refresh_token\" attribute
        if (isset(\$data['refresh_token'])) {
            \$refreshToken = \$data['refresh_token'];
        } elseif (null !== \$previousToken) {
            // When requesting a new access token with a refresh token, the
            // server may not resend a new refresh token. In that case we
            // should keep the previous refresh token as valid.
            //
            // See http://tools.ietf.org/html/rfc6749#section-6
            \$refreshToken = \$previousToken->getRefreshToken();
        }

        \$expiresAt = \$this->getExpiration(\$data);

        return new IntegrationToken(\$accessToken, \$refreshToken, \$expiresAt, \$this->getExtraData(\$data));
    }

    private function getExtraData(array \$data): array
    {
        \$extraData = [];
        foreach (\$this->extraKeysToStore as \$key) {
            \$extraData[\$key] = \$data[\$key] ?? null;
        }

        return \$extraData;
    }

    /**
     * @param mixed[] \$data
     */
    private function getExpiration(array \$data): ?int
    {
        // Read the \"expires_at\" attribute
        if (isset(\$data['expires_at'])) {
            return (int) \$data['expires_at'];
        }

        // Read the \"expires_in\" attribute
        if (isset(\$data['expires_in'])) {
            return time() + (int) \$data['expires_in'];
        }

        // Facebook unfortunately breaks the spec by using 'expires' instead of 'expires_in'
        if (isset(\$data['expires'])) {
            return time() + (int) \$data['expires'];
        }

        // Fallback to the default if set
        if (\$this->defaultExpiresIn) {
            return time() + \$this->defaultExpiresIn;
        }

        return null;
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
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php", "/app/docroot/app/bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationTokenFactory.php");
    }
}
