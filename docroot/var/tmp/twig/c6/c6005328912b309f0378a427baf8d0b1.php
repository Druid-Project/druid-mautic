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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php */
class __TwigTemplate_a757cf20835ff7ae84ef3c1c4bc27f63 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Processor;

use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result;
use Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Transport\\TestTransport;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Monolog\\Logger;
use Symfony\\Component\\Mailer\\Transport\\NullTransport;

class UnsubscribeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that the transport interface processes the message appropriately
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe::process()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setContacts()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getContacts()
     */
    public function testProcessorInterfaceProcessesMessage(): void
    {
        \$transport     = new TestTransport();
        \$contactFinder = \$this->getMockBuilder(ContactFinder::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$contactFinder->method('find')
            ->willReturnCallback(
                function (\$email) {
                    \$stat = new Stat();

                    \$lead = new Lead();
                    \$lead->setEmail(\$email);
                    \$stat->setLead(\$lead);

                    \$email = new Email();
                    \$stat->setEmail(\$email);

                    \$result = new Result();
                    \$result->setStat(\$stat);
                    \$result->setContacts(
                        [
                            \$lead,
                        ]
                    );

                    return \$result;
                }
            );

        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$doNotContact = \$this->getMockBuilder(DoNotContact::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$processor = new Unsubscribe(\$transport, \$contactFinder, \$translator, \$logger, \$doNotContact);

        \$message = new Message();
        \$this->assertTrue(\$processor->process(\$message));
    }

    /**
     * @testdox Test that the message is processed appropriately
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe::process()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getStat()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setContacts()
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getContacts()
     */
    public function testContactIsFoundFromMessageAndDncRecordAdded(): void
    {
        \$transport     = new NullTransport();
        \$contactFinder = \$this->getMockBuilder(ContactFinder::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$contactFinder->method('find')
            ->willReturnCallback(
                function (\$email) {
                    \$stat = new Stat();

                    \$lead = new Lead();
                    \$lead->setEmail(\$email);
                    \$stat->setLead(\$lead);

                    \$email = new Email();
                    \$stat->setEmail(\$email);

                    \$result = new Result();
                    \$result->setStat(\$stat);
                    \$result->setContacts(
                        [
                            \$lead,
                        ]
                    );

                    return \$result;
                }
            );

        \$translator = \$this->getMockBuilder(Translator::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$doNotContact = \$this->getMockBuilder(DoNotContact::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$processor = new Unsubscribe(\$transport, \$contactFinder, \$translator, \$logger, \$doNotContact);

        \$message     = new Message();
        \$message->to = ['contact+unsubscribe_123abc@test.com' => null];
        \$this->assertTrue(\$processor->process(\$message));
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/UnsubscribeTest.php");
    }
}
