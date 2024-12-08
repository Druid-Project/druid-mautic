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

/* @bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php */
class __TwigTemplate_c64c6c6724474c664d796aedc5579a46 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Mautic\\CoreBundle\\EventListener\\RequestSubscriber;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManagerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Twig\\Environment;

class RequestSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    private RequestSubscriber \$subscriber;

    private Request \$request;

    /**
     * @var MockObject&RequestEvent
     */
    private MockObject \$event;

    protected function setUp(): void
    {
        \$aCsrfTokenId    = 45;
        \$aCsrfTokenValue = 'csrf-token-value';

        \$csrfTokenManagerMock = \$this->createMock(CsrfTokenManagerInterface::class);

        \$csrfTokenManagerMock
            ->method('getToken')
            ->willReturn(new CsrfToken(\$aCsrfTokenId, \$aCsrfTokenValue));

        \$csrfTokenManagerMock
          ->method('isTokenValid')
          ->will(\$this->returnCallback(fn (CsrfToken \$token) => \$token->getValue() === \$aCsrfTokenValue));

        \$this->request = new Request();

        \$this->event = \$this->getMockBuilder(RequestEvent::class)
            ->setConstructorArgs([
                \$this->createMock(HttpKernelInterface::class),
                \$this->request,
                HttpKernelInterface::MASTER_REQUEST,
            ])
            ->getMock();

        \$this->event
            ->expects(\$this->any())
            ->method('getRequest')
            ->willReturn(\$this->request);

        \$twig = \$this->createMock(Environment::class);

        \$this->subscriber = new RequestSubscriber(
            \$csrfTokenManagerMock,
            \$this->createMock(TranslatorInterface::class),
            \$twig
        );
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsRegularPost(): void
    {
        \$this->event
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->server->set('REQUEST_METHOD', 'POST');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->event);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxGet(): void
    {
        \$this->event
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'GET');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->event);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnPublicRoute(): void
    {
        \$this->event
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/some-public-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->event);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnSecureRouteWithMissingCsrf(): void
    {
        \$this->event
            ->expects(\$this->once())
            ->method('setResponse');

        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/s/some-secure-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->event);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnSecureRouteWithInvalidCsrf(): void
    {
        \$this->event
            ->expects(\$this->once())
            ->method('setResponse');

        \$this->request->headers->set('X-CSRF-Token', 'invalid-csrf-token-value');
        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/s/some-secure-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->event);
    }

    public function testTheValidateCsrfTokenForAjaxPostMethodAsAjaxPostOnSecureRouteWithMatchingCsrf(): void
    {
        \$this->event
            ->expects(\$this->never())
            ->method('setResponse');

        \$this->request->headers->set('X-CSRF-Token', 'csrf-token-value');
        \$this->request->headers->set('X-Requested-With', 'XMLHttpRequest');
        \$this->request->server->set('REQUEST_METHOD', 'POST');
        \$this->request->server->set('REQUEST_URI', '/s/some-secure-page');

        \$this->subscriber->validateCsrfTokenForAjaxPost(\$this->event);
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
        return "@bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/RequestSubscriberTest.php");
    }
}
