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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php */
class __TwigTemplate_b5e23548baca5c538d139835332a275b extends Template
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
use Mautic\\EmailBundle\\Model\\EmailStatModel;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result;
use Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Transport\\TestTransport;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Monolog\\Logger;
use Symfony\\Component\\Mailer\\Transport\\NullTransport;

class BounceTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Test that the transport interface processes the message appropriately
     */
    public function testProcessorInterfaceProcessesMessage(): void
    {
        \$transport     = new TestTransport();
        \$contactFinder = \$this->createMock(ContactFinder::class);
        \$contactFinder->method('find')
            ->willReturnCallback(
                function (\$email, \$bounceAddress) {
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

        \$emailStatModel = \$this->createMock(EmailStatModel::class);
        \$emailStatModel->expects(\$this->once())
            ->method('saveEntity');

        \$leadModel = \$this->createMock(LeadModel::class);

        \$translator = \$this->createMock(Translator::class);

        \$logger = \$this->createMock(Logger::class);

        \$doNotContact = \$this->createMock(DoNotContact::class);

        \$bouncer = new Bounce(\$transport, \$contactFinder, \$emailStatModel, \$leadModel, \$translator, \$logger, \$doNotContact);

        \$message = new Message();
        \$this->assertTrue(\$bouncer->process(\$message));
    }

    /**
     * @testdox Test that the message is processed appropriately
     */
    public function testContactIsFoundFromMessageAndDncRecordAdded(): void
    {
        \$transport     = new NullTransport();
        \$contactFinder = \$this->createMock(ContactFinder::class);
        \$contactFinder->method('find')
            ->willReturnCallback(
                function (\$email, \$bounceAddress) {
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

        \$emailStatModel = \$this->createMock(EmailStatModel::class);
        \$emailStatModel->expects(\$this->once())
            ->method('saveEntity');

        \$leadModel = \$this->createMock(LeadModel::class);

        \$translator = \$this->createMock(Translator::class);

        \$logger = \$this->createMock(Logger::class);

        \$doNotContact = \$this->createMock(DoNotContact::class);

        \$bouncer = new Bounce(\$transport, \$contactFinder, \$emailStatModel, \$leadModel, \$translator, \$logger, \$doNotContact);

        \$message            = new Message();
        \$message->to        = ['contact+bounce_123abc@test.com' => null];
        \$message->dsnReport = <<<'DSN'
Original-Recipient: sdfgsdfg@seznan.cz
Final-Recipient: rfc822;sdfgsdfg@seznan.cz
Action: failed
Status: 5.4.4
Diagnostic-Code: DNS; Host not found
DSN;

        \$this->assertTrue(\$bouncer->process(\$message));
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Processor/BounceTest.php");
    }
}
