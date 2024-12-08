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

/* @bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AuthorizatorInterface.php */
class __TwigTemplate_ddf9261e190049b577c4ff78d45b5792 extends Template
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

use Symfony\\Component\\HttpFoundation\\Request;

/**
 * @deprecated; Use Credentials\\CredentialsInterface and \\Mautic\\IntegrationsBundle\\Integration\\Interfaces\\AuthenticationInterface instead
 */
interface AuthorizatorInterface
{
    public function isAuthorized(): bool;

    public function getAccessToken(): string;

    public function getAuthorizationUri(CredentialsInterface \$credentials): string;

    public function handleCallback(Request \$request): void;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AuthorizatorInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AuthorizatorInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Auth/Provider/Oauth2ThreeLegged/AuthorizatorInterface.php");
    }
}
