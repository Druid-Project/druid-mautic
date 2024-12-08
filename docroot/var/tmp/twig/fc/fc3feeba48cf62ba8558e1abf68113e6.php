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

/* @bundles/UserBundle/Security/Authenticator/PreAuthAuthenticator.php */
class __TwigTemplate_645d0e3fac69306661417a7e5cb0b2ee extends Template
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

namespace Mautic\\UserBundle\\Security\\Authenticator;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Event\\AuthenticationEvent;
use Mautic\\UserBundle\\Security\\Authentication\\Token\\PluginToken;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;

class PreAuthAuthenticator implements AuthenticationProviderInterface
{
    public function __construct(
        protected IntegrationHelper \$integrationHelper,
        protected EventDispatcherInterface \$dispatcher,
        protected RequestStack \$requestStack,
        protected UserProviderInterface \$userProvider,
        protected \$providerKey
    ) {
    }

    /**
     * @return Response|PluginToken
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            return null;
        }

        \$user                  = \$token->getUser();
        \$authenticatingService = \$token->getAuthenticatingService();
        \$response              = null;
        \$request               = \$this->requestStack->getCurrentRequest();

        if (!\$user instanceof User) {
            \$authenticated = false;

            // Try authenticating with a plugin
            if (\$this->dispatcher->hasListeners(UserEvents::USER_PRE_AUTHENTICATION)) {
                \$integrations = \$this->integrationHelper->getIntegrationObjects(\$authenticatingService, ['sso_service'], false, null, true);

                \$loginCheck = ('mautic_sso_login_check' == \$request->attributes->get('_route'));
                \$authEvent  = new AuthenticationEvent(
                    null,
                    \$token,
                    \$this->userProvider,
                    \$request,
                    \$loginCheck,
                    \$authenticatingService,
                    \$integrations
                );
                \$this->dispatcher->dispatch(\$authEvent, UserEvents::USER_PRE_AUTHENTICATION);

                if (\$authenticated = \$authEvent->isAuthenticated()) {
                    \$eventToken = \$authEvent->getToken();
                    if (\$eventToken !== \$token) {
                        // A custom token has been set by the plugin so just return it

                        return \$eventToken;
                    }

                    \$user                  = \$authEvent->getUser();
                    \$authenticatingService = \$authEvent->getAuthenticatingService();
                }

                \$response = \$authEvent->getResponse();

                if (!\$authenticated && \$loginCheck && !\$response) {
                    // Set an empty JSON response
                    \$response = new JsonResponse([]);
                }
            }

            if (!\$authenticated && empty(\$response)) {
                throw new AuthenticationException('mautic.user.auth.error.invalidlogin');
            }
        }

        return new PluginToken(
            \$this->providerKey,
            \$authenticatingService,
            \$user,
            (\$user instanceof User) ? \$user->getPassword() : '',
            (\$user instanceof User) ? \$user->getRoles() : [],
            \$response
        );
    }

    public function supports(TokenInterface \$token): bool
    {
        return \$token instanceof PluginToken && \$token->getProviderKey() === \$this->providerKey;
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
        return "@bundles/UserBundle/Security/Authenticator/PreAuthAuthenticator.php";
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
        return new Source("", "@bundles/UserBundle/Security/Authenticator/PreAuthAuthenticator.php", "/app/docroot/app/bundles/UserBundle/Security/Authenticator/PreAuthAuthenticator.php");
    }
}
