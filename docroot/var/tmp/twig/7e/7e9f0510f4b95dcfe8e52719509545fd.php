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

/* @bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php */
class __TwigTemplate_a6d4d375937873d12d23f5258b15f938 extends Template
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

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact as DoNotContactModel;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\EventListener\\StopSubscriber;

class StopSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|DoNotContact
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$doNotContactModel;

    protected function setUp(): void
    {
        \$this->doNotContactModel = \$this->createMock(DoNotContactModel::class);
    }

    public function testLeadAddedToDNC(): void
    {
        \$lead = new Lead();
        \$lead->setId(1);
        \$event = new ReplyEvent(\$lead, 'stop');

        \$this->doNotContactModel->expects(\$this->once())
        ->method('addDncForContact')
        ->with(1, 'sms', DoNotContact::UNSUBSCRIBED);

        \$this->StopSubscriber()->onReply(\$event);
    }

    /**
     * @return StopSubscriber
     */
    private function StopSubscriber()
    {
        return new StopSubscriber(\$this->doNotContactModel);
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
        return "@bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php";
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
        return new Source("", "@bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php", "/app/docroot/app/bundles/SmsBundle/Tests/EventListener/StopSubscriberTest.php");
    }
}
