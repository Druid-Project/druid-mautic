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

/* @bundles/UserBundle/EventListener/SecuritySubscriber.php */
class __TwigTemplate_e4820e41f8b91de150480420c2c0deda extends Template
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

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\UserBundle\\Event\\LoginEvent;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SecuritySubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            UserEvents::USER_LOGIN => ['onSecurityInteractiveLogin', 0],
        ];
    }

    public function onSecurityInteractiveLogin(LoginEvent \$event): void
    {
        \$userId   = (int) \$event->getUser()->getId();
        \$useName  = \$event->getUser()->getUsername();

        \$log     = [
            'bundle'    => 'user',
            'object'    => 'security',
            'objectId'  => \$userId,
            'action'    => 'login',
            'details'   => ['username' => \$useName],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];

        \$this->auditLogModel->writeToLog(\$log);
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
        return "@bundles/UserBundle/EventListener/SecuritySubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/SecuritySubscriber.php", "/app/docroot/app/bundles/UserBundle/EventListener/SecuritySubscriber.php");
    }
}
