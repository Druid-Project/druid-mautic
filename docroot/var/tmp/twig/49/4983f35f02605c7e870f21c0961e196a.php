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

/* @bundles/CoreBundle/EventListener/ExceptionListener.php */
class __TwigTemplate_b835de6324a947381694bc78e95e4ea0 extends Template
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

use LightSaml\\Error\\LightSamlException;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent;
use Symfony\\Component\\HttpKernel\\EventListener\\ErrorListener;
use Symfony\\Component\\HttpKernel\\Exception\\AccessDeniedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Routing\\Router;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\LogoutException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class ExceptionListener extends ErrorListener
{
    /**
     * @param LoggerInterface \$controller
     */
    public function __construct(
        protected Router \$router,
        \$controller,
        LoggerInterface \$logger = null
    ) {
        parent::__construct(\$controller, \$logger);
    }

    public function onKernelException(ExceptionEvent \$event, string \$eventName = null, EventDispatcherInterface \$eventDispatcher = null): void
    {
        \$exception = \$event->getThrowable();

        if (\$exception instanceof LightSamlException) {
            // Convert the LightSamlException to a AuthenticationException so it can be passed in the session.
            \$exception = new AuthenticationException(\$exception->getMessage());
            // Redirect to login page with message
            \$event->getRequest()->getSession()->set(Security::AUTHENTICATION_ERROR, \$exception);
            \$event->setResponse(new RedirectResponse(\$this->router->generate('login')));

            return;
        }

        // Check for exceptions we don't want to handle
        if (\$exception instanceof AuthenticationException || \$exception instanceof AccessDeniedException || \$exception instanceof LogoutException
        ) {
            return;
        }

        if (!\$exception instanceof AccessDeniedHttpException && !\$exception instanceof NotFoundHttpException) {
            \$this->logException(\$exception, sprintf('Uncaught PHP Exception %s: \"%s\" at %s line %s', \$exception::class, \$exception->getMessage(), \$exception->getFile(), \$exception->getLine()));
        }

        \$exception = \$event->getThrowable();
        \$request   = \$event->getRequest();
        \$request   = \$this->duplicateRequest(\$exception, \$request);
        try {
            \$response = \$event->getKernel()->handle(\$request, HttpKernelInterface::SUB_REQUEST, false);

            \$event->setResponse(\$response);
        } catch (\\Exception \$e) {
            \$this->logException(
                \$e,
                sprintf(
                    'Exception thrown when handling an exception (%s: %s at %s line %s)',
                    \$e::class,
                    \$e->getMessage(),
                    \$e->getFile(),
                    \$e->getLine()
                )
            );

            \$wrapper = \$e;

            while (\$prev = \$wrapper->getPrevious()) {
                if (\$exception === \$wrapper = \$prev) {
                    throw \$e;
                }
            }

            \$prev = new \\ReflectionProperty('Exception', 'previous');
            \$prev->setAccessible(true);
            \$prev->setValue(\$wrapper, \$exception);

            throw \$e;
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
        return "@bundles/CoreBundle/EventListener/ExceptionListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ExceptionListener.php", "/app/docroot/app/bundles/CoreBundle/EventListener/ExceptionListener.php");
    }
}
