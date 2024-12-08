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

/* @bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php */
class __TwigTemplate_944087ba73569d43e56c9ccccabee2a9 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Tests\\Unit\\EventListener;

use Mautic\\CoreBundle\\EventListener\\EnvironmentSubscriber;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class EnvironmentSubscriberTest extends TestCase
{
    private EnvironmentSubscriber \$environmentSubscriber;

    /**
     * @var MockObject|CoreParametersHelper
     */
    private MockObject \$coreParametersHelperMock;

    protected function setUp(): void
    {
        \$this->coreParametersHelperMock = \$this->createMock(CoreParametersHelper::class);
        \$this->environmentSubscriber    = new EnvironmentSubscriber(\$this->coreParametersHelperMock);
    }

    public function testGetSubscribedEvents(): void
    {
        Assert::assertSame(
            [
                KernelEvents::REQUEST => [
                    ['onKernelRequestSetTimezone', 128],
                    ['onKernelRequestSetLocale', 101],
                ],
            ],
            \$this->environmentSubscriber::getSubscribedEvents()
        );
    }

    public function testSetLocaleThatDoesNotHavePreviousSession(): void
    {
        \$requestEventMock = \$this->createMock(RequestEvent::class);
        \$requestMock      = \$this->createMock(Request::class);
        \$requestEventMock->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$requestMock);
        \$requestMock->expects(\$this->once())
            ->method('hasPreviousSession')
            ->willReturn(false);

        \$this->environmentSubscriber->onKernelRequestSetLocale(\$requestEventMock);
    }

    public function testSetLocaleWithUserLanguagePreference(): void
    {
        \$requestEventMock     = \$this->createMock(RequestEvent::class);
        \$requestMock          = \$this->createMock(Request::class);
        \$sessionInterfaceMock = \$this->createMock(SessionInterface::class);
        \$requestEventMock->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$requestMock);
        \$requestMock->expects(\$this->once())
            ->method('hasPreviousSession')
            ->willReturn(true);
        \$requestMock->expects(\$this->exactly(2))
            ->method('getSession')
            ->willReturn(\$sessionInterfaceMock);
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('get')
            ->with('_locale')
            ->willReturn('en_US');
        \$requestMock->expects(\$this->once())
            ->method('setLocale')
            ->with('en_US');
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('set')
            ->with('_locale')
            ->willReturn('en_US');
        \$this->coreParametersHelperMock->expects(\$this->never())
            ->method('get')
            ->with('locale');

        \$this->environmentSubscriber->onKernelRequestSetLocale(\$requestEventMock);
    }

    public function testSetLocaleWithSystemLanguage(): void
    {
        \$requestEventMock     = \$this->createMock(RequestEvent::class);
        \$requestMock          = \$this->createMock(Request::class);
        \$sessionInterfaceMock = \$this->createMock(SessionInterface::class);
        \$requestEventMock->expects(\$this->once())
            ->method('getRequest')
            ->willReturn(\$requestMock);
        \$requestMock->expects(\$this->once())
            ->method('hasPreviousSession')
            ->willReturn(true);
        \$requestMock->expects(\$this->exactly(2))
            ->method('getSession')
            ->willReturn(\$sessionInterfaceMock);
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('get')
            ->with('_locale')
            ->willReturn(null);
        \$this->coreParametersHelperMock->expects(\$this->once())
            ->method('get')
            ->with('locale')
            ->willReturn('en_GB');
        \$requestMock->expects(\$this->once())
            ->method('setLocale')
            ->with('en_GB');
        \$sessionInterfaceMock->expects(\$this->once())
            ->method('set')
            ->with('_locale')
            ->willReturn('en_GB');

        \$this->environmentSubscriber->onKernelRequestSetLocale(\$requestEventMock);
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
        return "@bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/EventListener/EnvironmentSubscriberTest.php");
    }
}
