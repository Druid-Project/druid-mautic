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

/* @bundles/UserBundle/Controller/SecurityController.php */
class __TwigTemplate_8ad44ff48724a906751984ca4212d6d4 extends Template
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

namespace Mautic\\UserBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\UserBundle\\Exception\\WeakPasswordException;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface;
use Symfony\\Component\\Security\\Core\\Exception;
use Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationUtils;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class SecurityController extends CommonController implements EventSubscriberInterface
{
    public function onRequest(RequestEvent \$event): void
    {
        \$controller = \$event->getRequest()->attributes->get('_controller');
        \\assert(is_string(\$controller));

        if (!str_contains(\$controller, self::class)) {
            return;
        }

        \$authChecker = \$this->get('security.authorization_checker');
        \\assert(\$authChecker instanceof AuthorizationCheckerInterface);

        // redirect user if they are already authenticated
        if (\$authChecker->isGranted('IS_AUTHENTICATED_FULLY')
            || \$authChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')
        ) {
            \$redirectUrl = \$this->generateUrl('mautic_dashboard_index');
            \$event->setResponse(new RedirectResponse(\$redirectUrl));
        }
    }

    /**
     * Generates login form and processes login.
     *
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function loginAction(Request \$request, AuthenticationUtils \$authenticationUtils, IntegrationHelper \$integrationHelper, TranslatorInterface \$translator): \\Symfony\\Component\\HttpFoundation\\Response
    {
        \$error = \$authenticationUtils->getLastAuthenticationError();

        if (null !== \$error) {
            if (\$error instanceof WeakPasswordException) {
                \$this->addFlash(FlashBag::LEVEL_ERROR, \$translator->trans('mautic.user.auth.error.weakpassword', [], 'flashes'));

                return \$this->forward('Mautic\\UserBundle\\Controller\\PublicController::passwordResetAction');
            } elseif (\$error instanceof Exception\\BadCredentialsException) {
                \$msg = 'mautic.user.auth.error.invalidlogin';
            } elseif (\$error instanceof Exception\\DisabledException) {
                \$msg = 'mautic.user.auth.error.disabledaccount';
            } else {
                \$msg = \$error->getMessage();
            }

            \$this->addFlashMessage(\$msg, [], FlashBag::LEVEL_ERROR, null, false);
        }
        \$request->query->set('tmpl', 'login');

        // Get a list of SSO integrations
        \$integrations = \$integrationHelper->getIntegrationObjects(null, ['sso_service'], true, null, true);

        return \$this->delegateView([
            'viewParameters' => [
                'last_username' => \$authenticationUtils->getLastUsername(),
                'integrations'  => \$integrations,
            ],
            'contentTemplate' => '@MauticUser/Security/login.html.twig',
            'passthroughVars' => [
                'route'          => \$this->generateUrl('login'),
                'mauticContent'  => 'user',
                'sessionExpired' => true,
            ],
        ]);
    }

    /**
     * Do nothing.
     */
    public function loginCheckAction(): void
    {
    }

    /**
     * The plugin should be handling this in it's listener.
     */
    public function ssoLoginAction(\$integration): RedirectResponse
    {
        return new RedirectResponse(\$this->generateUrl('login'));
    }

    /**
     * The plugin should be handling this in it's listener.
     */
    public function ssoLoginCheckAction(\$integration): RedirectResponse
    {
        // The plugin should be handling this in it's listener

        return new RedirectResponse(\$this->generateUrl('login'));
    }

    /**
     * @return array<string, string>
     */
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => 'onRequest',
        ];
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
        return "@bundles/UserBundle/Controller/SecurityController.php";
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
        return new Source("", "@bundles/UserBundle/Controller/SecurityController.php", "/app/docroot/app/bundles/UserBundle/Controller/SecurityController.php");
    }
}
