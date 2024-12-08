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

/* @bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php */
class __TwigTemplate_286dd1a65c5156ead53d0d498bde35f0 extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Mautic\\ChannelBundle\\Entity\\MessageQueueRepository;
use Mautic\\ChannelBundle\\Model\\MessageQueueModel;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\LeadBundle\\Model\\LeadModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class MessageQueueModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var string
     */
    public const DATE = '2019-07-07 15:00:00';

    /**
     * @var MessageQueueModel
     */
    protected \$messageQueue;

    /**
     * @var MessageQueue
     */
    protected \$message;

    /** @var MockObject|LeadModel */
    protected \$leadModel;

    /** @var MockObject|CompanyModel */
    protected \$companyModel;

    /** @var MockObject|EntityManagerInterface */
    protected \$entityManager;

    /** @var MockObject|MessageQueueRepository */
    protected \$messageQueueRepository;

    protected function setUp(): void
    {
        \$this->leadModel              = \$this->createMock(LeadModel::class);
        \$this->companyModel           = \$this->createMock(CompanyModel::class);
        \$this->entityManager          = \$this->createMock(EntityManagerInterface::class);
        \$this->messageQueueRepository = \$this->createMock(MessageQueueRepository::class);
        \$coreHelper                   = \$this->createMock(CoreParametersHelper::class);

        \$this->messageQueue = new MessageQueueModel(
            \$this->leadModel,
            \$this->companyModel,
            \$coreHelper,
            \$this->entityManager,
            \$this->createMock(CorePermissions::class),
            \$this->createMock(EventDispatcherInterface::class),
            \$this->createMock(UrlGeneratorInterface::class),
            \$this->createMock(Translator::class),
            \$this->createMock(UserHelper::class),
            \$this->createMock(LoggerInterface::class)
        );

        \$this->entityManager->method('getRepository')->willReturn(\$this->messageQueueRepository);

        \$message      = new MessageQueue();
        \$scheduleDate = new \\DateTime(self::DATE);
        \$message->setScheduledDate(\$scheduleDate);

        \$this->message = \$message;
    }

    public function testRescheduleMessageIntervalDay(): void
    {
        \$interval = new \\DateInterval('P2D');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    public function testRescheduleMessageIntervalWeek(): void
    {
        \$interval = new \\DateInterval('P4W');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    public function testRescheduleMessageIntervalMonth(): void
    {
        \$interval = new \\DateInterval('P8M');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    public function testRescheduleMessageNoInterval(): void
    {
        \$interval = new \\DateInterval('PT0S');
        \$this->prepareRescheduleMessageIntervalTest(\$interval);
    }

    protected function prepareRescheduleMessageIntervalTest(\\DateInterval \$interval)
    {
        \$oldScheduleDate = \$this->message->getScheduledDate();
        \$this->messageQueue->reschedule(\$this->message, \$interval);
        \$scheduleDate = \$this->message->getScheduledDate();
        /** @var \\DateTime \$oldScheduleDate */
        \$oldScheduleDate->add(\$interval);

        \$this->assertEquals(\$oldScheduleDate, \$scheduleDate);
        \$this->assertNotSame(\$oldScheduleDate, \$scheduleDate);
    }

    public function testSendMessagesWithNullEvent(): void
    {
        \$queue = \$this->message;
        \$lead  = new Lead();
        \$lead->setId(1);
        \$queue->setLead(\$lead);

        \$contactData = [
            1 => [
                'firstname' => 'John',
                'email'     => 'john.doe@example.com',
            ],
        ];

        \$leadRepository = \$this->createMock(LeadRepository::class);
        \$this->leadModel->method('getRepository')->willReturn(\$leadRepository);
        \$leadRepository->method('getContacts')->willReturn(\$contactData);

        \$this->entityManager->expects(\$this->exactly(2))
            ->method('detach');

        \$this->messageQueueRepository->method('getQueuedMessages')
            ->willReturn([\$queue]);

        \$this->messageQueue->sendMessages('email', 1);
    }

    public function testProcessMessageQueueLeadFieldsShouldNotContainCompany(): void
    {
        \$queue = \$this->message;

        \$lead = new Lead();
        \$lead->setId(1);
        \$queue->setLead(\$lead);

        \$contactData = [
            1 => [
                'firstname' => 'John',
                'email'     => 'john.doe@example.com',
            ],
        ];

        \$leadRepository = \$this->createMock(LeadRepository::class);
        \$this->leadModel->method('getRepository')->willReturn(\$leadRepository);
        \$leadRepository->method('getContacts')->willReturn(\$contactData);

        \$this->messageQueue->processMessageQueue(\$queue);
        \$this->assertArrayNotHasKey('companies', \$queue->getLead()->getFields());
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
        return "@bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php", "/app/docroot/app/bundles/ChannelBundle/Tests/Model/MessageQueueModelTest.php");
    }
}
