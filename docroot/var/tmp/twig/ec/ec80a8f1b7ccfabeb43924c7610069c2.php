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

/* @bundles/EmailBundle/Tests/MonitoredEmail/Search/ContactFinderTest.php */
class __TwigTemplate_5ca88704f505ce465a3078d8cd57892a extends Template
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

namespace Mautic\\EmailBundle\\Tests\\MonitoredEmail\\Search;

use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder;
use Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Monolog\\Logger;

class ContactFinderTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Contact should be found via contact email address
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder::find
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder::findByAddress
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setStat
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getStat
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setContacts
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getContacts
     */
    public function testContactFoundByDelegationForAddress(): void
    {
        \$lead = new Lead();
        \$lead->setEmail('contact@email.com');

        \$statRepository = \$this->getMockBuilder(StatRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$statRepository->expects(\$this->never())
            ->method('findOneBy');

        \$leadRepository = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$leadRepository->expects(\$this->once())
            ->method('getContactsByEmail')
            ->willReturn([\$lead]);

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$finder = new ContactFinder(\$statRepository, \$leadRepository, \$logger);
        \$result = \$finder->find(\$lead->getEmail(), 'contact@test.com');

        \$this->assertInstanceOf(Result::class, \$result);

        \$this->assertEquals(\$result->getContacts(), [\$lead]);
    }

    /**
     * @testdox Contact should be found via a hash in to email address
     *
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder::find
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\ContactFinder::findByHash
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address::parseAddressForStatHash
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::setStat
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getStat
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::addContact
     * @covers  \\Mautic\\EmailBundle\\MonitoredEmail\\Search\\Result::getContacts
     */
    public function testContactFoundByDelegationForHash(): void
    {
        \$lead = new Lead();
        \$lead->setEmail('contact@email.com');

        \$stat = new Stat();
        \$stat->setLead(\$lead);

        \$statRepository = \$this->getMockBuilder(StatRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$statRepository->expects(\$this->once())
            ->method('findOneBy')
            ->willReturnCallback(
                function (\$hash) use (\$stat) {
                    \$stat->setTrackingHash(\$hash);

                    \$email = new Email();
                    \$stat->setEmail(\$email);

                    return \$stat;
                }
            );

        \$leadRepository = \$this->getMockBuilder(LeadRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        \$leadRepository->expects(\$this->never())
            ->method('getContactsByEmail');

        \$logger = \$this->getMockBuilder(Logger::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$finder = new ContactFinder(\$statRepository, \$leadRepository, \$logger);
        \$result = \$finder->find(\$lead->getEmail(), 'test+unsubscribe_123abc@test.com');

        \$this->assertInstanceOf(Result::class, \$result);

        \$this->assertEquals(\$result->getStat(), \$stat);
        \$this->assertEquals(\$result->getContacts(), [\$lead]);
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
        return "@bundles/EmailBundle/Tests/MonitoredEmail/Search/ContactFinderTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/MonitoredEmail/Search/ContactFinderTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/MonitoredEmail/Search/ContactFinderTest.php");
    }
}
