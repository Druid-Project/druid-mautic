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

/* @bundles/SmsBundle/Tests/Sms/TransportChainTest.php */
class __TwigTemplate_5035513d598300309a6989cefc36de43 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Sms;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\SmsBundle\\Integration\\Twilio\\TwilioTransport;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use Mautic\\SmsBundle\\Sms\\TransportInterface;
use PHPUnit\\Framework\\MockObject\\MockObject;

class TransportChainTest extends MauticMysqlTestCase
{
    /**
     * @var TransportChain|MockObject
     */
    private TransportChain \$transportChain;

    /**
     * @var TransportInterface|MockObject
     */
    private MockObject \$twilioTransport;

    /**
     * Call protected/private method of a class.
     *
     * @param object &\$object    Instantiated object that we will run method on
     * @param string \$methodName Method name to call
     * @param array  \$parameters array of parameters to pass into method
     *
     * @return mixed method return
     *
     * @throws \\ReflectionException
     */
    public function invokeMethod(&\$object, \$methodName, array \$parameters = [])
    {
        \$reflection = new \\ReflectionClass(\$object::class);
        \$method     = \$reflection->getMethod(\$methodName);
        \$method->setAccessible(true);

        return \$method->invokeArgs(\$object, \$parameters);
    }

    protected function setUp(): void
    {
        parent::setUp();

        \$this->transportChain = new TransportChain(
            'mautic.test.twilio.mock',
            static::getContainer()->get('mautic.helper.integration')
        );

        \$this->twilioTransport = \$this->createMock(TwilioTransport::class);

        \$this->twilioTransport
            ->method('sendSMS')
            ->will(\$this->returnValue('lol'));
    }

    public function testAddTransport(): void
    {
        \$count = count(\$this->transportChain->getTransports());

        \$this->transportChain->addTransport('mautic.transport.test', static::getContainer()->get('mautic.sms.twilio.transport'), 'mautic.transport.test', 'Twilio');

        \$this->assertCount(\$count + 1, \$this->transportChain->getTransports());
    }

    public function testSendSms(): void
    {
        \$this->testAddTransport();

        \$this->transportChain->addTransport('mautic.test.twilio.mock', \$this->twilioTransport, 'mautic.test.twilio.mock', 'Twilio');

        \$lead = new Lead();
        \$lead->setMobile('+123456789');

        try {
            \$this->transportChain->sendSms(\$lead, 'Yeah');
        } catch (\\Exception \$e) {
            \$message = \$e->getMessage();
            \$this->assertEquals('Primary SMS transport is not enabled', \$message);
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
        return "@bundles/SmsBundle/Tests/Sms/TransportChainTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Sms/TransportChainTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/Sms/TransportChainTest.php");
    }
}
