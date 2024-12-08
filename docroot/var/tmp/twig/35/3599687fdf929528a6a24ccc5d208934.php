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

/* @bundles/UserBundle/EventListener/LogoutListener.php */
class __TwigTemplate_34106699850c34cefa3a436142a7bca5 extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\UserBundle\\Event\\LogoutEvent;
use Mautic\\UserBundle\\Model\\UserModel;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class LogoutListener implements \\Symfony\\Component\\EventDispatcher\\EventSubscriberInterface
{
    protected ?\\Mautic\\UserBundle\\Entity\\User \$user;

    public function __construct(
        protected UserModel \$userModel,
        protected EventDispatcherInterface \$dispatcher,
        UserHelper \$userHelper
    ) {
        \$this->user       = \$userHelper->getUser();
    }

    public function onLogout(\\Symfony\\Component\\Security\\Http\\Event\\LogoutEvent \$logoutEvent): void
    {
        \$request = \$logoutEvent->getRequest();
        \$session = \$request->getSession();
        if (\$this->dispatcher->hasListeners(UserEvents::USER_LOGOUT)) {
            \$mauticEvent = new LogoutEvent(\$this->user, \$request);
            \$this->dispatcher->dispatch(\$mauticEvent, UserEvents::USER_LOGOUT);
            \$sessionItems = \$mauticEvent->getPostSessionItems();
            foreach (\$sessionItems as \$key => \$value) {
                \$session->set(\$key, \$value);
            }
        }
        // Clear session
        \$session->clear();

        // Note that a logout occurred
        \$session->set('post_logout', true);
    }

    /**
     * @return array<string, mixed>
     */
    public static function getSubscribedEvents(): array
    {
        return [\\Symfony\\Component\\Security\\Http\\Event\\LogoutEvent::class => 'onLogout'];
    }

    public function onSymfonyComponentSecurityHttpEventLogoutEvent(\\Symfony\\Component\\Security\\Http\\Event\\LogoutEvent \$logoutEvent): void
    {
        \$this->onLogout(\$logoutEvent);
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
        return "@bundles/UserBundle/EventListener/LogoutListener.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/LogoutListener.php", "/app/docroot/app/bundles/UserBundle/EventListener/LogoutListener.php");
    }
}
