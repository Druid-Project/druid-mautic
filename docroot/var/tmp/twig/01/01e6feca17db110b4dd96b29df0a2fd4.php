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

/* @bundles/CoreBundle/Tests/Unit/Helper/CookieHelperTest.php */
class __TwigTemplate_db226bfdb394e919dc68267472dcc3ae extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CookieHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\ResponseHeaderBag;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;

class CookieHelperTest extends TestCase
{
    /**
     * @var RequestStack|MockObject
     */
    private MockObject \$requestStackMock;

    protected function setUp(): void
    {
        \$this->requestStackMock = \$this->createMock(RequestStack::class);
        \$requestMock            = \$this->createMock(Request::class);
        \$this->requestStackMock->method('getMasterRequest')
            ->willReturn(\$requestMock);
    }

    /**
     * @testdox The helper is instantiated correctly when secure and contains samesite=lax
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\CookieHelper::__construct
     * @covers \\Mautic\\CoreBundle\\Helper\\CookieHelper::setCookie
     */
    public function testSetCookieWhenSecure(): void
    {
        \$cookiePath   = '/';
        \$cookieDomain = 'https://test.test';
        \$cookieSecure = true;
        \$cookieHttp   = false;
        \$requestStack = \$this->requestStackMock;
        \$cookieHelper = new CookieHelper(\$cookiePath, \$cookieDomain, \$cookieSecure, \$cookieHttp, \$requestStack);
        \$cookieName   = 'secureTest';

        \$cookieHelper->setCookie(\$cookieName, 'test');

        \$headers = \$this->createMock(ResponseHeaderBag::class);
        \$headers->expects(self::once())
            ->method('setCookie')
            ->willReturnCallback(static function (Cookie \$cookie): void {
                Assert::assertStringContainsString('samesite=lax', (string) \$cookie);
                Assert::assertStringContainsString('secure', (string) \$cookie);
            });

        \$response          = \$this->createMock(Response::class);
        \$response->headers = \$headers;
        \$kernel            = new \\AppKernel(MAUTIC_ENV, false);
        \$request           = \$this->createMock(Request::class);

        \$event   = new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MAIN_REQUEST, \$response);

        \$cookieHelper->onResponse(\$event);
    }

    /**
     * @testdox The helper is instantiated correctly when not secure and contain samesite=lax
     *
     * @covers \\Mautic\\CoreBundle\\Helper\\CookieHelper::__construct
     * @covers \\Mautic\\CoreBundle\\Helper\\CookieHelper::setCookie
     */
    public function testSetCookieWhenNotSecure(): void
    {
        \$cookiePath   = '/';
        \$cookieDomain = 'https://test.test';
        \$cookieSecure = false;
        \$cookieHttp   = false;
        \$requestStack = \$this->requestStackMock;
        \$cookieHelper = new CookieHelper(\$cookiePath, \$cookieDomain, \$cookieSecure, \$cookieHttp, \$requestStack);
        \$cookieName   = 'notSecureTest';

        \$cookieHelper->setCookie(\$cookieName, 'test');

        \$headers = \$this->createMock(ResponseHeaderBag::class);
        \$headers->expects(self::once())
            ->method('setCookie')
            ->willReturnCallback(static function (Cookie \$cookie): void {
                Assert::assertStringContainsString('samesite=lax', (string) \$cookie);
                Assert::assertStringNotContainsString('secure', (string) \$cookie);
            });

        \$response          = \$this->createMock(Response::class);
        \$response->headers = \$headers;
        \$kernel            = new \\AppKernel(MAUTIC_ENV, false);
        \$request           = \$this->createMock(Request::class);

        \$event             = new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MAIN_REQUEST, \$response);

        \$cookieHelper->onResponse(\$event);
    }

    public function testSetCookieWhenSecureAndSameSiteNone(): void
    {
        \$cookiePath   = '/';
        \$cookieDomain = 'https://test.test';
        \$cookieSecure = true;
        \$cookieHttp   = false;
        \$requestStack = \$this->requestStackMock;
        \$cookieHelper = new CookieHelper(\$cookiePath, \$cookieDomain, \$cookieSecure, \$cookieHttp, \$requestStack);
        \$cookieName   = 'samesite_test';

        \$cookieHelper->setCookie(
            name: \$cookieName,
            value: 'test',
            sameSite: Cookie::SAMESITE_NONE
        );

        \$headers = \$this->createMock(ResponseHeaderBag::class);
        \$headers->expects(self::once())
            ->method('setCookie')
            ->willReturnCallback(static function (Cookie \$cookie): void {
                Assert::assertStringContainsString('samesite=none', (string) \$cookie);
                Assert::assertStringContainsString('secure', (string) \$cookie);
            });

        \$response          = \$this->createMock(Response::class);
        \$response->headers = \$headers;
        \$kernel            = new \\AppKernel(MAUTIC_ENV, false);
        \$request           = \$this->createMock(Request::class);
        \$event             = new ResponseEvent(\$kernel, \$request, HttpKernelInterface::MAIN_REQUEST, \$response);

        \$cookieHelper->onResponse(\$event);
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/CookieHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/CookieHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/CookieHelperTest.php");
    }
}
