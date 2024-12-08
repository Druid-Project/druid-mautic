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

/* @bundles/SmsBundle/Tests/Integration/Twilio/TwilioTransportTest.php */
class __TwigTemplate_88594a4b2e7559aa4f5db060f3e1e305 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Integration\\Twilio;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\SmsBundle\\Integration\\Twilio\\Configuration;
use Mautic\\SmsBundle\\Integration\\Twilio\\TwilioTransport;
use Monolog\\Logger;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class TwilioTransportTest extends TestCase
{
    private TwilioTransport \$twilioTransport;

    /**
     * @var MockObject&\\Monolog\\Logger
     */
    private MockObject \$logger;

    protected function setUp(): void
    {
        \$this->logger      = \$this->createMock(Logger::class);
        \$integrationHelper = \$this->createMock(IntegrationHelper::class);
        \$configuration     = new Configuration(\$integrationHelper);

        \$this->twilioTransport = new TwilioTransport(\$configuration, \$this->logger);
    }

    public function testSendSMS(): void
    {
        \$lead = new Lead();
        \$lead->setMobile('123456');
        \$this->logger->expects(\$this->once())
            ->method('warning')
            ->with('mautic.sms.transport.twilio.not_configured');

        \$this->twilioTransport->sendSms(\$lead, 'some_content');
    }

    public function testCreatePayload(): void
    {
        \$reflection = new \\ReflectionClass(\$this->twilioTransport::class);
        \$method     = \$reflection->getMethod('createPayload');
        \$method->setAccessible(true);

        \$payload = ['messagingServiceSid' => 'MS1234', 'body' => 'some_content'];

        \$result = \$method->invokeArgs(\$this->twilioTransport, array_values(\$payload));
        Assert::assertSame(\$payload, \$result);
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
        return "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioTransportTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Integration/Twilio/TwilioTransportTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/Integration/Twilio/TwilioTransportTest.php");
    }
}
