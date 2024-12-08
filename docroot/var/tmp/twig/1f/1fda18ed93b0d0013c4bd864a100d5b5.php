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

/* @bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php */
class __TwigTemplate_1518bc383d9ba802903aeea7f4176435 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Integration\\Twilio;

use Mautic\\SmsBundle\\Helper\\ContactHelper;
use Mautic\\SmsBundle\\Integration\\Twilio\\Configuration;
use Mautic\\SmsBundle\\Integration\\Twilio\\TwilioCallback;
use Symfony\\Component\\HttpFoundation\\InputBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;

class TwilioCallbackTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ContactHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactHelper;

    /**
     * @var Configuration|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$configuration;

    protected function setUp(): void
    {
        \$this->contactHelper = \$this->createMock(ContactHelper::class);
        \$this->configuration = \$this->createMock(Configuration::class);
        \$this->configuration->method('getAccountSid')
            ->willReturn('123');
    }

    public function testMissingFromThrowsBadRequestException(): void
    {
        \$this->expectException(BadRequestHttpException::class);

        \$request          = \$this->createMock(Request::class);
        \$inputBag         = new InputBag([
            'AccountSid' => '123',
            'From'       => '',
        ]);

        \$request->request = \$inputBag;

        \$this->getCallback()->getMessage(\$request);
    }

    public function testMissingBodyThrowsBadRequestException(): void
    {
        \$this->expectException(BadRequestHttpException::class);

        \$request          = \$this->createMock(Request::class);
        \$inputBag         = new InputBag([
            'AccountSid' => '123',
            'From'       => '321',
            'Body'       => '',
        ]);

        \$request->request = \$inputBag;

        \$this->getCallback()->getMessage(\$request);
    }

    public function testMismatchedAccountSidThrowsBadRequestException(): void
    {
        \$this->expectException(BadRequestHttpException::class);

        \$request          = \$this->createMock(Request::class);
        \$inputBag         = new InputBag([
            'AccountSid' => '321',
        ]);

        \$request->request = \$inputBag;

        \$this->getCallback()->getMessage(\$request);
    }

    public function testMessageIsReturned(): void
    {
        \$request      = \$this->createMock(Request::class);
        \$request->method('get')
            ->willReturn('Hello');

        \$inputBag = new InputBag([
            'AccountSid' => '123',
            'From'       => '321',
            'Body'       => 'Hello',
        ]);

        \$request->request = \$inputBag;

        \$this->assertEquals('Hello', \$this->getCallback()->getMessage(\$request));
    }

    /**
     * @return TwilioCallback
     */
    private function getCallback()
    {
        return new TwilioCallback(\$this->contactHelper, \$this->configuration);
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
        return "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/Integration/Twilio/TwilioCallbackTest.php");
    }
}
