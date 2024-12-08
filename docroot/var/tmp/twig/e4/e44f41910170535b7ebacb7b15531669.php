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

/* @bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php */
class __TwigTemplate_f44226db662c86f13742498d7d9dac96 extends Template
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
use kamermans\\OAuth2\\Token\\TokenSerializer;

class IntegrationToken implements TokenInterface
{
    // Pull in serialize() and unserialize() methods
    use TokenSerializer;

    /**
     * @param mixed[] \$extraData
     */
    public function __construct(
        ?string \$accessToken,
        ?string \$refreshToken,
        \$expiresAt = null,
        private array \$extraData = []
    ) {
        \$this->accessToken  = (string) \$accessToken;
        \$this->refreshToken = (string) \$refreshToken;
        \$this->expiresAt    = (int) \$expiresAt;
    }

    /**
     * @return string The access token
     */
    public function getAccessToken(): string
    {
        return \$this->accessToken;
    }

    /**
     * @return string The refresh token
     */
    public function getRefreshToken(): string
    {
        return \$this->refreshToken;
    }

    /**
     * @return int The expiration timestamp
     */
    public function getExpiresAt(): int
    {
        return \$this->expiresAt;
    }

    public function isExpired(): bool
    {
        // Consider expired if there is not an access token
        if (!\$this->getAccessToken()) {
            return true;
        }

        // Otherwise, consider expired if the expiration time has passed
        return \$this->expiresAt && \$this->expiresAt < time();
    }

    public function getExtraData(): array
    {
        return \$this->extraData;
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
        return "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php", "/app/docroot/app/bundles/IntegrationsBundle/Auth/Support/Oauth2/Token/IntegrationToken.php");
    }
}
