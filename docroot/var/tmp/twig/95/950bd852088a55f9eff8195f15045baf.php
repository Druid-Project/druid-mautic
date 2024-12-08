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

/* @bundles/SmsBundle/Tests/Model/SmsModelTest.php */
class __TwigTemplate_4cd304056ff68c233fd4d6cf9535e1e9 extends Template
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

namespace Mautic\\SmsBundle\\Tests\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ChannelBundle\\Model\\MessageQueueModel;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\SmsBundle\\Entity\\Sms;
use Mautic\\SmsBundle\\Entity\\SmsRepository;
use Mautic\\SmsBundle\\Form\\Type\\SmsType;
use Mautic\\SmsBundle\\Model\\SmsModel;
use Mautic\\SmsBundle\\Sms\\TransportChain;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;

class SmsModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|CacheStorageHelper
     */
    private MockObject \$cacheStorageHelper;

    /**
     * @var MockObject|EntityManager
     */
    private MockObject \$entityManger;

    /**
     * @var MockObject|LeadModel
     */
    private MockObject \$leadModel;

    /**
     * @var MockObject|MessageQueueModel
     */
    private MockObject \$messageQueueModel;

    /**
     * @var MockObject|TrackableModel
     */
    private MockObject \$pageTrackableModel;

    /**
     * @var MockObject|TransportChain
     */
    private MockObject \$transport;

    /**
     * @var MockObject&CorePermissions
     */
    private MockObject \$security;

    private SmsModel \$smsModel;

    protected function setUp(): void
    {
        \$this->pageTrackableModel = \$this->createMock(TrackableModel::class);
        \$this->leadModel          = \$this->createMock(LeadModel::class);
        \$this->messageQueueModel  = \$this->createMock(MessageQueueModel::class);
        \$this->transport          = \$this->createMock(TransportChain::class);
        \$this->cacheStorageHelper = \$this->createMock(CacheStorageHelper::class);
        \$this->entityManger       = \$this->createMock(EntityManager::class);
        \$this->security           = \$this->createMock(CorePermissions::class);
        \$this->smsModel           = new SmsModel(
            \$this->pageTrackableModel,
            \$this->leadModel,
            \$this->messageQueueModel,
            \$this->transport,
            \$this->cacheStorageHelper,
            \$this->entityManger,
            \$this->security,
            \$this->createMock(EventDispatcherInterface::class),
            \$this->createMock(UrlGeneratorInterface::class),
            \$this->createMock(Translator::class),
            \$this->createMock(UserHelper::class),
            \$this->createMock(LoggerInterface::class),
            \$this->createMock(CoreParametersHelper::class)
        );
    }

    /**
     * Test to get lookup results when class name is sent as a parameter.
     */
    public function testGetLookupResultsWhenTypeIsClass(): void
    {
        \$entities = [['name' => 'Mautic', 'id' => 1, 'language' => 'cs']];

        /** @var MockObject|SmsRepository \$repositoryMock */
        \$repositoryMock = \$this->createMock(SmsRepository::class);
        \$repositoryMock->method('getSmsList')
            ->with('', 10, 0, true, false)
            ->willReturn(\$entities);

        \$this->entityManger->method('getRepository')
            ->with(Sms::class)
            ->willReturn(\$repositoryMock);

        \$this->security->method('isGranted')
            ->with('sms:smses:viewother')
            ->willReturn(true);

        \$textMessages = \$this->smsModel->getLookupResults(SmsType::class);
        \$this->assertSame('Mautic', \$textMessages['cs'][1], 'Mautic is the right text message name');
    }

    public function testSendSmsNotPublished(): void
    {
        \$sms = new Sms();
        \$sms->setIsPublished(false);
        \$lead = new Lead();
        \$lead->setId(1);
        \$results = \$this->smsModel->sendSms(\$sms, \$lead);
        self::assertFalse((bool) \$results[1]['sent']);
        self::assertSame('mautic.sms.campaign.failed.unpublished', \$results[1]['status']);
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
        return "@bundles/SmsBundle/Tests/Model/SmsModelTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/Model/SmsModelTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/Model/SmsModelTest.php");
    }
}
