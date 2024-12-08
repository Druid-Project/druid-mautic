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

/* @bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php */
class __TwigTemplate_b092e0351a1b25cc825d6bb91d3a215f extends Template
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

namespace Mautic\\UserBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\UserBundle\\EventListener\\SAMLSubscriber;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Routing\\Router;

class SAMLSubscriberTest extends TestCase
{
    /**
     * @var RequestEvent|MockObject
     */
    private MockObject \$event;

    /**
     * @var CoreParametersHelper|MockObject
     */
    private MockObject \$coreParametersHelper;

    /**
     * @var Router|MockObject
     */
    private MockObject \$router;

    protected function setUp(): void
    {
        \$this->event = \$this->createMock(RequestEvent::class);
        \$this->event->expects(\$this->once())
            ->method('isMainRequest')
            ->willReturn(true);

        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->router               = \$this->createMock(Router::class);
    }

    public function testSamlRoutesAreRedirectedToDefaultLoginIfSamlIsDisabled(): void
    {
        \$subscriber = new SAMLSubscriber(\$this->coreParametersHelper, \$this->router);

        \$request             = \$this->createMock(Request::class);
        \$request->attributes = new ParameterBag();

        \$request->method('getRequestUri')
            ->willReturn('/saml/login');

        \$this->event->method('getRequest')
            ->willReturn(\$request);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('');

        \$this->router->expects(\$this->once())
            ->method('generate')
            ->willReturn('/s/login');

        \$this->event->expects(\$this->once())
            ->method('setResponse')
            ->with(\$this->isInstanceOf(RedirectResponse::class));

        \$subscriber->onKernelRequest(\$this->event);
    }

    public function testRedirectIsIgnoredIfSamlEnabled(): void
    {
        \$subscriber = new SAMLSubscriber(\$this->coreParametersHelper, \$this->router);

        \$request             = \$this->createMock(Request::class);
        \$request->attributes = new ParameterBag();

        \$request->method('getRequestUri')
            ->willReturn('/saml/login');

        \$this->event->method('getRequest')
            ->willReturn(\$request);

        \$this->coreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('saml_idp_metadata')
            ->willReturn('1');

        \$this->router->expects(\$this->never())
            ->method('generate');

        \$this->event->expects(\$this->never())
            ->method('setResponse');

        \$subscriber->onKernelRequest(\$this->event);
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
        return "@bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php";
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
        return new Source("", "@bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php", "/app/docroot/app/bundles/UserBundle/Tests/EventListener/SAMLSubscriberTest.php");
    }
}
