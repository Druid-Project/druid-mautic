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

/* @bundles/EmailBundle/Tests/EventListener/EmailToUserSubscriberTest.php */
class __TwigTemplate_10d11197223f844be2258e10639e0836 extends Template
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

use Mautic\\EmailBundle\\EventListener\\EmailToUserSubscriber;
use Mautic\\EmailBundle\\Exception\\EmailCouldNotBeSentException;
use Mautic\\EmailBundle\\Model\\SendEmailToUser;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\TriggerEvent;
use Mautic\\PointBundle\\Event\\TriggerExecutedEvent;

class EmailToUserSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var array
     */
    private \$config = [
        'useremail' => [
            'email' => 33,
        ],
        'user_id'  => [6, 7],
        'to_owner' => true,
        'to'       => 'hello@there.com, bob@bobek.cz',
        'bcc'      => 'hidden@translation.in',
    ];

    public function testOnCampaignTriggerActionSendEmailToUserWithSendingTheEmail(): void
    {
        \$lead = new Lead();

        \$mockSendEmailToUser = \$this->getMockBuilder(SendEmailToUser::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$subscriber = new EmailToUserSubscriber(\$mockSendEmailToUser);

        \$mockSendEmailToUser->expects(\$this->once())
            ->method('sendEmailToUsers')
            ->with(\$this->config, \$lead);

        \$mockSendEmailToUser->expects(\$this->once())
            ->method('sendEmailToUsers')
            ->with(\$this->config, \$lead);

        \$triggerEvent = new TriggerEvent();
        \$triggerEvent->setProperties(\$this->config);

        \$event = new TriggerExecutedEvent(\$triggerEvent, \$lead);

        \$subscriber->onEmailToUser(\$event);

        \$this->assertTrue(\$event->getResult());
    }

    public function testOnCampaignTriggerActionSendEmailToUserWithError(): void
    {
        \$lead = new Lead();

        \$mockSendEmailToUser = \$this->getMockBuilder(SendEmailToUser::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$subscriber = new EmailToUserSubscriber(\$mockSendEmailToUser);

        \$mockSendEmailToUser->expects(\$this->once())
            ->method('sendEmailToUsers')
            ->with(\$this->config, \$lead);

        \$mockSendEmailToUser->expects(\$this->once())
            ->method('sendEmailToUsers')
            ->with(\$this->config, \$lead)
            ->will(\$this->throwException(new EmailCouldNotBeSentException()));

        \$triggerEvent = new TriggerEvent();
        \$triggerEvent->setProperties(\$this->config);

        \$event = new TriggerExecutedEvent(\$triggerEvent, \$lead);

        \$subscriber->onEmailToUser(\$event);

        \$this->assertFalse(\$event->getResult());
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
        return "@bundles/EmailBundle/Tests/EventListener/EmailToUserSubscriberTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/EventListener/EmailToUserSubscriberTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/EventListener/EmailToUserSubscriberTest.php");
    }
}
