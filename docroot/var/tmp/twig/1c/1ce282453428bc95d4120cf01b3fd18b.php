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

/* @bundles/ChannelBundle/Tests/Model/ChannelActionModelTest.php */
class __TwigTemplate_28c9e52fc6d8f746c0db927f3a60485a extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\Model;

use Mautic\\ChannelBundle\\Model\\ChannelActionModel;
use Mautic\\LeadBundle\\Entity\\DoNotContact as DNC;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ChannelActionModelTest extends \\PHPUnit\\Framework\\TestCase
{
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactMock5;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactMock6;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactModelMock;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$doNotContactMock;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$translatorMock;

    private ChannelActionModel \$actionModel;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->contactMock5     = \$this->createMock(Lead::class);
        \$this->contactMock6     = \$this->createMock(Lead::class);
        \$this->contactModelMock = \$this->createMock(LeadModel::class);
        \$this->doNotContactMock = \$this->createMock(DoNotContact::class);
        \$this->translatorMock   = \$this->createMock(TranslatorInterface::class);
        \$this->actionModel      = new ChannelActionModel(
            \$this->contactModelMock,
            \$this->doNotContactMock,
            \$this->translatorMock
        );

        \$this->contactMock5->method('getId')->willReturn(5);
    }

    public function testUpdateEntityAccess(): void
    {
        \$contacts = [5, 6];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(false);

        \$this->contactModelMock->expects(\$this->never())
            ->method('getContactChannels');

        \$this->actionModel->update(\$contacts, []);
    }

    public function testSubscribeContactToEmailChannel(): void
    {
        \$contacts           = [5];
        \$subscribedChannels = ['email', 'sms']; // Subscribe contact to these channels

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('canEditContact')
            ->with(\$this->contactMock5)
            ->willReturn(true);

        // Contact is already subscribed to the SMS channel but not to email
        \$this->contactModelMock->expects(\$this->once())
            ->method('getContactChannels')
            ->with(\$this->contactMock5)
            ->willReturn(['sms' => 'sms']);

        \$this->doNotContactMock->expects(\$this->once())
            ->method('isContactable')
            ->with(\$this->contactMock5, 'email')
            ->willReturn(DNC::IS_CONTACTABLE);

        \$this->doNotContactMock->expects(\$this->once())
            ->method('removeDncForContact')
            ->with(5, 'email');

        \$this->contactModelMock->expects(\$this->once())
            ->method('getPreferenceChannels')
            ->willReturn(['Email' => 'email', 'Text Message' => 'sms']);

        \$this->doNotContactMock->expects(\$this->never())
            ->method('addDncForContact');

        \$this->actionModel->update(\$contacts, \$subscribedChannels);
    }

    public function testSubscribeContactWhoUnsubscribedToEmailChannel(): void
    {
        \$contacts           = [5];
        \$subscribedChannels = ['email', 'sms']; // Subscribe contact to these channels

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('canEditContact')
            ->with(\$this->contactMock5)
            ->willReturn(true);

        // Contact is already subscribed to the SMS channel but not to email
        \$this->contactModelMock->expects(\$this->once())
            ->method('getContactChannels')
            ->with(\$this->contactMock5)
            ->willReturn(['sms' => 'sms']);

        \$this->doNotContactMock->expects(\$this->once())
            ->method('isContactable')
            ->with(\$this->contactMock5, 'email')
            ->willReturn(DNC::UNSUBSCRIBED);

        \$this->doNotContactMock->expects(\$this->never())
            ->method('removeDncForContact');

        \$this->contactModelMock->expects(\$this->once())
            ->method('getPreferenceChannels')
            ->willReturn(['Email' => 'email', 'Text Message' => 'sms']);

        \$this->doNotContactMock->expects(\$this->never())
            ->method('addDncForContact');

        \$this->actionModel->update(\$contacts, \$subscribedChannels);
    }

    public function testUnsubscribeContactFromSmsChannel(): void
    {
        \$contacts           = [5];
        \$subscribedChannels = []; // Unsubscribe contact from missing

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('canEditContact')
            ->with(\$this->contactMock5)
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('getContactChannels')
            ->with(\$this->contactMock5)
            ->willReturn(['sms' => 'sms']);

        \$this->doNotContactMock->expects(\$this->never())
            ->method('isContactable');

        \$this->contactModelMock->expects(\$this->once())
            ->method('getPreferenceChannels')
            ->willReturn(['Email' => 'email', 'Text Message' => 'sms']);

        \$this->doNotContactMock->expects(\$this->exactly(2))
            ->method('addDncForContact')
            ->withConsecutive(
                [5, 'email', DNC::MANUAL],
                [5, 'sms', DNC::MANUAL]
            );

        \$this->actionModel->update(\$contacts, \$subscribedChannels);
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
        return "@bundles/ChannelBundle/Tests/Model/ChannelActionModelTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/Model/ChannelActionModelTest.php", "/app/docroot/app/bundles/ChannelBundle/Tests/Model/ChannelActionModelTest.php");
    }
}
