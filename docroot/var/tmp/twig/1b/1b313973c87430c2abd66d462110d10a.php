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

/* @bundles/CoreBundle/EventListener/RequestSubscriber.php */
class __TwigTemplate_77b35ab1856fca41a1f73f3d5dc42545 extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Twig\\Environment;

class RequestSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private CsrfTokenManagerInterface \$tokenManager,
        private TranslatorInterface \$translator,
        private Environment \$twig
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['validateCsrfTokenForAjaxPost', 0],
        ];
    }

    public function validateCsrfTokenForAjaxPost(RequestEvent \$event): void
    {
        \$request = \$event->getRequest();

        if (\$this->isAjaxPost(\$request) && \$this->isSecurePath(\$request) && !\$this->isCsrfTokenFromRequestHeaderValid(\$request)) {
            \$message  = \$this->translator->trans('mautic.core.error.csrf', [], 'flashes');
            \$data     = ['flashes' => ['error' => \$message]];
            \$content  = \$this->twig->render('@MauticCore/Notification/flash_messages.html.twig', \$data);
            \$response = new JsonResponse(['flashes' => \$content], Response::HTTP_OK);
            \$event->setResponse(\$response);
            \$event->stopPropagation();
        }
    }

    private function isAjaxPost(Request \$request): bool
    {
        return \$request->isXmlHttpRequest() && Request::METHOD_POST === \$request->getMethod();
    }

    private function isSecurePath(Request \$request): bool
    {
        return 1 === preg_match('/^\\/s\\//', \$request->getPathinfo());
    }

    /**
     * @return bool
     */
    private function isCsrfTokenFromRequestHeaderValid(Request \$request)
    {
        \$csrfRequestToken = \$request->headers->get('X-CSRF-Token');

        return \$this->tokenManager->isTokenValid(new CsrfToken('mautic_ajax_post', \$csrfRequestToken));
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
        return "@bundles/CoreBundle/EventListener/RequestSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/RequestSubscriber.php", "/app/docroot/app/bundles/CoreBundle/EventListener/RequestSubscriber.php");
    }
}
