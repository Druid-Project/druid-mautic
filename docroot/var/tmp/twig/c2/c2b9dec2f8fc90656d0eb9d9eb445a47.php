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

/* @bundles/ApiBundle/Tests/Helper/RequestHelperTest.php */
class __TwigTemplate_3476f32e4e3e6c4f1f4f1e3ce982cf0f extends Template
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

namespace Mautic\\ApiBundle\\Tests\\Helper;

use Mautic\\ApiBundle\\Helper\\RequestHelper;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\HeaderBag;
use Symfony\\Component\\HttpFoundation\\Request;

class RequestHelperTest extends TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Request
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$request;

    protected function setUp(): void
    {
        \$this->request = \$this->createMock(Request::class);
    }

    public function testIsBasicAuthWithValidBasicAuth(): void
    {
        \$this->request->headers = new HeaderBag(['Authorization' => 'Basic dXNlcm5hbWU6cGFzc3dvcmQ=']);

        \$this->assertTrue(RequestHelper::hasBasicAuth(\$this->request));
    }

    public function testIsBasicAuthWithInvalidBasicAuth(): void
    {
        \$this->request->headers = new HeaderBag(['Authorization' => 'Invalid Basic Auth value']);

        \$this->assertFalse(RequestHelper::hasBasicAuth(\$this->request));
    }

    public function testIsBasicAuthWithMissingBasicAuth(): void
    {
        \$this->request->headers = new HeaderBag([]);

        \$this->assertFalse(RequestHelper::hasBasicAuth(\$this->request));
    }

    public function testIsApiRequestWithOauthUrl(): void
    {
        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/oauth/v2/token');

        \$this->assertTrue(RequestHelper::isApiRequest(\$this->request));
    }

    public function testIsApiRequestWithApiUrl(): void
    {
        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/api/contacts');

        \$this->assertTrue(RequestHelper::isApiRequest(\$this->request));
    }

    public function testIsNotApiRequest(): void
    {
        \$this->request->expects(\$this->once())
            ->method('getRequestUri')
            ->willReturn('/s/dashboard');

        \$this->assertFalse(RequestHelper::isApiRequest(\$this->request));
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
        return "@bundles/ApiBundle/Tests/Helper/RequestHelperTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/Helper/RequestHelperTest.php", "/app/docroot/app/bundles/ApiBundle/Tests/Helper/RequestHelperTest.php");
    }
}
