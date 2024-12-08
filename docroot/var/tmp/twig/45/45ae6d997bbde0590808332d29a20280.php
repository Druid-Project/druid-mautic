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

/* @bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/Credentials/AccessTokenInterface.php */
class __TwigTemplate_133b58b416a21486cdd09c01c65d71d4 extends Template
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

namespace Mautic\\IntegrationsBundle\\Auth\\Provider\\Oauth2ThreeLegged\\Credentials;

use Mautic\\IntegrationsBundle\\Auth\\Provider\\AuthCredentialsInterface;

interface AccessTokenInterface extends AuthCredentialsInterface
{
    public function getAccessToken(): ?string;

    public function getAccessTokenExpiry(): ?\\DateTimeImmutable;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/Credentials/AccessTokenInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/Credentials/AccessTokenInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/Credentials/AccessTokenInterface.php");
    }
}
