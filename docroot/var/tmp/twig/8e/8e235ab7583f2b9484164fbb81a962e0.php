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

/* @bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php */
class __TwigTemplate_b49452203c32666d4dd4436e854fda75 extends Template
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

use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\EventListener\\TrackingSubscriber;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;

class TrackingSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|StatRepository
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$statRepository;

    protected function setUp(): void
    {
        \$this->statRepository = \$this->createMock(StatRepository::class);
    }

    public function testIdentifyContactByStat(): void
    {
        \$ct = [
            'lead'    => 2,
            'channel' => [
                'email' => 1,
            ],
            'stat'    => 'abc123',
        ];

        \$email = \$this->createMock(Email::class);
        \$email->method('getId')
            ->willReturn(1);

        \$lead = \$this->createMock(Lead::class);
        \$lead->method('getId')
            ->willReturn(2);

        \$stat = new Stat();
        \$stat->setEmail(\$email);
        \$stat->setLead(\$lead);

        \$this->statRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['trackingHash' => 'abc123'])
            ->willReturn(\$stat);

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertEquals(\$lead->getId(), \$event->getIdentifiedContact()->getId());
    }

    public function testChannelMismatchDoesNotIdentify(): void
    {
        \$ct = [
            'lead'    => 2,
            'channel' => [
                'sms' => 1,
            ],
            'stat'    => 'abc123',
        ];

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertNull(\$event->getIdentifiedContact());
    }

    public function testChannelIdMismatchDoesNotIdentify(): void
    {
        \$ct = [
            'lead'    => 2,
            'channel' => [
                'email' => 2,
            ],
            'stat'    => 'abc123',
        ];

        \$email = \$this->createMock(Email::class);
        \$email->method('getId')
            ->willReturn(1);

        \$lead = \$this->createMock(Lead::class);
        \$lead->method('getId')
            ->willReturn(2);

        \$stat = new Stat();
        \$stat->setEmail(\$email);
        \$stat->setLead(\$lead);

        \$this->statRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['trackingHash' => 'abc123'])
            ->willReturn(\$stat);

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertNull(\$event->getIdentifiedContact());
    }

    public function testStatEmptyLeadDoesNotIdentify(): void
    {
        \$ct = [
            'lead'    => 2,
            'channel' => [
                'email' => 2,
            ],
            'stat'    => 'abc123',
        ];

        \$email = \$this->createMock(Email::class);
        \$email->method('getId')
            ->willReturn(1);

        \$stat = new Stat();
        \$stat->setEmail(\$email);

        \$this->statRepository->expects(\$this->once())
            ->method('findOneBy')
            ->with(['trackingHash' => 'abc123'])
            ->willReturn(\$stat);

        \$event = new ContactIdentificationEvent(\$ct);

        \$this->getSubscriber()->onIdentifyContact(\$event);

        \$this->assertNull(\$event->getIdentifiedContact());
    }

    /**
     * @return TrackingSubscriber
     */
    private function getSubscriber()
    {
        return new TrackingSubscriber(\$this->statRepository);
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
        return "@bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/EventListener/TrackingSubscriberTest.php");
    }
}
