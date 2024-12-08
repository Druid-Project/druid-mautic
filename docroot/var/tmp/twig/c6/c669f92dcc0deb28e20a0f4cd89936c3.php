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

/* @bundles/EmailBundle/Tests/EventListener/CampaignSubscriberTest.php */
class __TwigTemplate_56e6dfbd644bb21cb2c863ec056a83d4 extends Template
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

namespace Mautic\\EmailBundle\\Tests\\EventListener;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\CampaignBundle\\Executioner\\RealTimeExecutioner;
use Mautic\\EmailBundle\\EventListener\\CampaignSubscriber;
use Mautic\\EmailBundle\\Exception\\EmailCouldNotBeSentException;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\EmailBundle\\Model\\SendEmailToUser;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CampaignSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var array
     */
    private \$config = [
        'useremail' => [
            'email' => 0,
        ],
        'user_id'  => [6, 7],
        'to_owner' => true,
        'to'       => 'hello@there.com, bob@bobek.cz',
        'bcc'      => 'hidden@translation.in',
    ];

    /**
     * @var EmailModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$emailModel;

    /**
     * @var RealTimeExecutioner|\\PHPUnit_Framework_MockObject_MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$realTimeExecutioner;

    /**
     * @var SendEmailToUser|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$sendEmailToUser;

    /**
     * @var TranslatorInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$translator;

    private CampaignSubscriber \$subscriber;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->emailModel          = \$this->createMock(EmailModel::class);
        \$this->realTimeExecutioner = \$this->createMock(RealTimeExecutioner::class);
        \$this->sendEmailToUser     = \$this->createMock(SendEmailToUser::class);
        \$this->translator          = \$this->createMock(TranslatorInterface::class);
        \$leadModel                 = \$this->createMock(LeadModel::class);

        \$this->subscriber = new CampaignSubscriber(
            \$this->emailModel,
            \$this->realTimeExecutioner,
            \$this->sendEmailToUser,
            \$this->translator,
            \$leadModel
        );
    }

    public function testOnCampaignTriggerActionSendEmailToUserWithWrongEventType(): void
    {
        \$eventAccessor = \$this->createMock(ActionAccessor::class);
        \$event         = new Event();
        \$lead          = (new Lead())->setEmail('tester@mautic.org');

        \$event->setType(Event::TYPE_ACTION);

        \$leadEventLog = \$this->createMock(LeadEventLog::class);
        \$leadEventLog
            ->method('getLead')
            ->willReturn(\$lead);
        \$leadEventLog
            ->method('getId')
            ->willReturn(6);

        \$logs = new ArrayCollection([\$leadEventLog]);

        \$pendingEvent = new PendingEvent(\$eventAccessor, \$event, \$logs);
        \$this->subscriber->onCampaignTriggerActionSendEmailToUser(\$pendingEvent);

        \$this->assertCount(0, \$pendingEvent->getSuccessful());
        \$this->assertCount(0, \$pendingEvent->getFailures());
    }

    public function testOnCampaignTriggerActionSendEmailToUserWithSendingTheEmail(): void
    {
        \$eventAccessor = \$this->createMock(ActionAccessor::class);
        \$event         = (new Event())->setType('email.send.to.user');
        \$lead          = (new Lead())->setEmail('tester@mautic.org');

        \$leadEventLog = \$this->createMock(LeadEventLog::class);
        \$leadEventLog
            ->method('getLead')
            ->willReturn(\$lead);
        \$leadEventLog
            ->method('getId')
            ->willReturn(0);
        \$leadEventLog
            ->method('setIsScheduled')
            ->with(false)
            ->willReturn(\$leadEventLog);

        \$logs = new ArrayCollection([\$leadEventLog]);

        \$pendingEvent = new PendingEvent(\$eventAccessor, \$event, \$logs);
        \$this->subscriber->onCampaignTriggerActionSendEmailToUser(\$pendingEvent);

        \$this->assertCount(1, \$pendingEvent->getSuccessful());
        \$this->assertCount(0, \$pendingEvent->getFailures());
    }

    public function testOnCampaignTriggerActionSendEmailToUserWithError(): void
    {
        \$eventAccessor = \$this->createMock(ActionAccessor::class);
        \$event         = (new Event())->setType('email.send.to.user');
        \$lead          = (new Lead())->setEmail('tester@mautic.org');

        \$leadEventLog = \$this->createMock(LeadEventLog::class);
        \$leadEventLog
            ->method('getLead')
            ->willReturn(\$lead);
        \$leadEventLog
            ->method('getId')
            ->willReturn(0);
        \$leadEventLog
            ->method('setIsScheduled')
            ->with(false)
            ->willReturn(\$leadEventLog);
        \$leadEventLog
            ->method('getMetadata')
            ->willReturn([]);

        \$logs = new ArrayCollection([\$leadEventLog]);

        \$this->sendEmailToUser->expects(\$this->once())
            ->method('sendEmailToUsers')
            ->with([], \$lead)
            ->will(\$this->throwException(new EmailCouldNotBeSentException('Something happened')));

        \$pendingEvent = new PendingEvent(\$eventAccessor, \$event, \$logs);
        \$this->subscriber->onCampaignTriggerActionSendEmailToUser(\$pendingEvent);

        \$this->assertCount(0, \$pendingEvent->getSuccessful());

        \$failures = \$pendingEvent->getFailures();
        \$this->assertCount(1, \$failures);
        /** @var LeadEventLog \$failure */
        \$failure    = \$failures->first();
        \$failedLead = \$failure->getLead();

        \$this->assertSame('tester@mautic.org', \$failedLead->getEmail());
    }

    /**
     * @throws \\Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException
     * @throws \\Doctrine\\ORM\\ORMException
     */
    public function testOnCampaignTriggerActionSendEmailToContactWithWrongEventType(): void
    {
        \$eventAccessor = \$this->createMock(ActionAccessor::class);
        \$event         = new Event();
        \$lead          = (new Lead())->setEmail('tester@mautic.org');

        \$leadEventLog = \$this->createMock(LeadEventLog::class);
        \$leadEventLog
            ->method('getLead')
            ->willReturn(\$lead);
        \$leadEventLog
            ->method('getId')
            ->willReturn(6);

        \$logs = new ArrayCollection([\$leadEventLog]);

        \$pendingEvent = new PendingEvent(\$eventAccessor, \$event, \$logs);
        \$this->subscriber->onCampaignTriggerActionSendEmailToContact(\$pendingEvent);

        \$this->assertCount(0, \$pendingEvent->getSuccessful());
        \$this->assertCount(0, \$pendingEvent->getFailures());
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
        return "@bundles/EmailBundle/Tests/EventListener/CampaignSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/CampaignSubscriberTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/EventListener/CampaignSubscriberTest.php");
    }
}
