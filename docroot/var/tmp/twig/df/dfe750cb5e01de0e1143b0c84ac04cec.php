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

/* @bundles/CoreBundle/Twig/Helper/SecurityHelper.php */
class __TwigTemplate_b9d5c28c85538f7849117dda3b1d4790 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Event\\AuthenticationContentEvent;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;

/**
 * final class SecurityHelper.
 */
final class SecurityHelper
{
    public function __construct(
        private CorePermissions \$security,
        private RequestStack \$requestStack,
        private EventDispatcherInterface \$dispatcher,
        private CsrfTokenManagerInterface \$tokenManager
    ) {
    }

    public function getName(): string
    {
        return 'security';
    }

    /**
     * Helper function to check if user is an Admin.
     */
    public function isAdmin(): bool
    {
        return \$this->security->isAdmin();
    }

    /**
     * Helper function to check if the logged in user has access to an entity.
     *
     * @param string|bool \$ownPermission
     * @param string|bool \$otherPermission
     * @param User|int    \$ownerId
     */
    public function hasEntityAccess(\$ownPermission, \$otherPermission, \$ownerId): bool
    {
        return \$this->security->hasEntityAccess(\$ownPermission, \$otherPermission, \$ownerId);
    }

    /**
     * @param string[]|string \$permission
     *
     * @return mixed
     */
    public function isGranted(\$permission)
    {
        return \$this->security->isGranted(\$permission);
    }

    /**
     * Get content from listeners.
     */
    public function getAuthenticationContent(): string
    {
        \$request = \$this->requestStack->getCurrentRequest();
        \$content = '';
        if (\$this->dispatcher->hasListeners(UserEvents::USER_AUTHENTICATION_CONTENT)) {
            \$event = new AuthenticationContentEvent(\$request);
            \$this->dispatcher->dispatch(\$event, UserEvents::USER_AUTHENTICATION_CONTENT);
            \$content = \$event->getContent();

            // Remove post_logout session after content has been generated
            \$request->getSession()->remove('post_logout');
        }

        return \$content;
    }

    /**
     * Returns CSRF token string for an intention.
     *
     * @param string \$intention
     *
     * @return string
     */
    public function getCsrfToken(\$intention)
    {
        return \$this->tokenManager->getToken(\$intention)->getValue();
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
        return "@bundles/CoreBundle/Twig/Helper/SecurityHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Helper/SecurityHelper.php", "/app/docroot/app/bundles/CoreBundle/Twig/Helper/SecurityHelper.php");
    }
}
