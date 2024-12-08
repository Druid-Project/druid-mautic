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

/* @bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php */
class __TwigTemplate_ada5d5a1dde748a2cdd2f0998cba4d5b extends Template
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

namespace Mautic\\SmsBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Event\\TokenReplacementEvent;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Trackable;
use Mautic\\PageBundle\\Helper\\TokenHelper;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\SmsBundle\\EventListener\\SmsSubscriber;
use Mautic\\SmsBundle\\Helper\\SmsHelper;
use PHPUnit\\Framework\\TestCase;

class SmsSubscriberTest extends TestCase
{
    private CoreParametersHelper|\\PHPUnit\\Framework\\MockObject\\MockObject \$coreParametersHelper;

    private \$messageText = 'custom http://mautic.com text';

    private \$messageUrl = 'http://mautic.com';

    protected function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        parent::setUp();
    }

    public function testOnTokenReplacementWithTrackableUrls(): void
    {
        \$mockAuditLogModel = \$this->createMock(AuditLogModel::class);

        \$mockTrackableModel = \$this->createMock(TrackableModel::class);
        \$mockTrackableModel->expects(\$this->any())->method('parseContentForTrackables')->willReturn([
            \$this->messageUrl,
            new Trackable(),
        ]);
        \$mockTrackableModel->expects(\$this->any())->method('generateTrackableUrl')->willReturn('custom');

        \$mockPageTokenHelper = \$this->createMock(TokenHelper::class);
        \$mockPageTokenHelper->expects(\$this->any())->method('findPageTokens')->willReturn([]);

        \$mockAssetTokenHelper = \$this->createMock(\\Mautic\\AssetBundle\\Helper\\TokenHelper::class);
        \$mockAssetTokenHelper->expects(\$this->any())->method('findAssetTokens')->willReturn([]);

        \$mockSmsHelper = \$this->createMock(SmsHelper::class);
        \$mockSmsHelper->expects(\$this->any())->method('getDisableTrackableUrls')->willReturn(false);

        \$lead                  = new Lead();
        \$tokenReplacementEvent = new TokenReplacementEvent(\$this->messageText, \$lead, ['channel' => [1 => 'sms']]);
        \$subscriber            = new SmsSubscriber(
            \$mockAuditLogModel,
            \$mockTrackableModel,
            \$mockPageTokenHelper,
            \$mockAssetTokenHelper,
            \$mockSmsHelper,
            \$this->coreParametersHelper
        );
        \$subscriber->onTokenReplacement(\$tokenReplacementEvent);
        \$this->assertNotSame(\$this->messageText, \$tokenReplacementEvent->getContent());
    }

    public function testOnTokenReplacementWithDisableTrackableUrls(): void
    {
        \$mockAuditLogModel = \$this->createMock(AuditLogModel::class);

        \$mockTrackableModel = \$this->createMock(TrackableModel::class);
        \$mockTrackableModel->expects(\$this->any())->method('parseContentForTrackables')->willReturn([
            \$this->messageUrl,
            new Trackable(),
        ]);
        \$mockTrackableModel->expects(\$this->any())->method('generateTrackableUrl')->willReturn('custom');

        \$mockPageTokenHelper = \$this->createMock(TokenHelper::class);
        \$mockPageTokenHelper->expects(\$this->any())->method('findPageTokens')->willReturn([]);

        \$mockAssetTokenHelper = \$this->createMock(\\Mautic\\AssetBundle\\Helper\\TokenHelper::class);
        \$mockAssetTokenHelper->expects(\$this->any())->method('findAssetTokens')->willReturn([]);

        \$mockSmsHelper = \$this->createMock(SmsHelper::class);
        \$mockSmsHelper->expects(\$this->any())->method('getDisableTrackableUrls')->willReturn(true);

        \$lead                  = new Lead();
        \$tokenReplacementEvent = new TokenReplacementEvent(\$this->messageText, \$lead, ['channel' => ['sms', 1]]);
        \$subscriber            = new SmsSubscriber(
            \$mockAuditLogModel,
            \$mockTrackableModel,
            \$mockPageTokenHelper,
            \$mockAssetTokenHelper,
            \$mockSmsHelper,
            \$this->coreParametersHelper
        );
        \$subscriber->onTokenReplacement(\$tokenReplacementEvent);
        \$this->assertSame(\$this->messageText, \$tokenReplacementEvent->getContent());
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
        return "@bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/EventListener/SmsSubscriberTest.php");
    }
}
