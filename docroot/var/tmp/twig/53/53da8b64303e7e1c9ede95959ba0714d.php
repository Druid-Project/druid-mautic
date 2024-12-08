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

/* @bundles/UserBundle/Security/Authentication/AuthenticationHandler.php */
class __TwigTemplate_3367b1b7bc6e7d39fc4c9f714512676f extends Template
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

namespace Mautic\\UserBundle\\Security\\Authentication;

use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationFailureHandlerInterface;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface;

class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
    public function __construct(
        private RouterInterface \$router
    ) {
    }

    /**
     * @return Response
     */
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token)
    {
        // Remove post_logout if set
        \$request->getSession()->remove('post_logout');

        \$format = \$request->request->get('format');

        if ('json' == \$format) {
            \$array    = ['success' => true];
            \$response = new Response(json_encode(\$array));
            \$response->headers->set('Content-Type', 'application/json');

            return \$response;
        } else {
            \$redirectUrl = \$request->getSession()->get('_security.main.target_path', \$this->router->generate('mautic_dashboard_index'));

            return new RedirectResponse(\$redirectUrl);
        }
    }

    /**
     * @return Response
     */
    public function onAuthenticationFailure(Request \$request, AuthenticationException \$exception)
    {
        // Remove post_logout if set
        \$request->getSession()->remove('post_logout');

        \$format = \$request->request->get('format');

        if ('json' == \$format) {
            \$array    = ['success' => false, 'message' => \$exception->getMessage()];
            \$response = new Response(json_encode(\$array));
            \$response->headers->set('Content-Type', 'application/json');

            return \$response;
        } else {
            \$request->getSession()->set(Security::AUTHENTICATION_ERROR, \$exception);

            return new RedirectResponse(\$this->router->generate('login'));
        }
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
        return "@bundles/UserBundle/Security/Authentication/AuthenticationHandler.php";
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
        return new Source("", "@bundles/UserBundle/Security/Authentication/AuthenticationHandler.php", "/app/docroot/app/bundles/UserBundle/Security/Authentication/AuthenticationHandler.php");
    }
}
