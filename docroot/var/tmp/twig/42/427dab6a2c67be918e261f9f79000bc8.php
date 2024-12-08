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

/* @bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php */
class __TwigTemplate_31fd44fffbc13d8fd2d4396d02ce2970 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Event\\DoNotContactAddEvent;
use Mautic\\LeadBundle\\Event\\DoNotContactRemoveEvent;
use Mautic\\LeadBundle\\EventListener\\DoNotContactSubscriber;
use Mautic\\LeadBundle\\Model\\DoNotContact;

class DoNotContactSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    private DoNotContactSubscriber \$doNotContactSubscriber;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$doNotContact;

    protected function setUp(): void
    {
        \$this->doNotContact               = \$this->createMock(DoNotContact::class);
        \$this->doNotContactSubscriber     = new DoNotContactSubscriber(\$this->doNotContact);
    }

    public function testGetSubscribedEvents(): void
    {
        \$this->assertEquals(
            [
                DoNotContactAddEvent::ADD_DONOT_CONTACT       => ['addDncForLead', 0],
                DoNotContactRemoveEvent::REMOVE_DONOT_CONTACT => ['removeDncForLead', 0],
            ],
            \$this->doNotContactSubscriber->getSubscribedEvents()
        );
    }

    public function testAddDncForLeadForNewContacts(): void
    {
        \$lead              = new Lead();
        \$doNotContactEvent = new DoNotContactAddEvent(\$lead, 'email');

        \$this->doNotContact->expects(\$this->once())->method('createDncRecord');
        \$this->doNotContact->expects(\$this->never())->method('addDncForContact');

        \$this->doNotContactSubscriber->addDncForLead(\$doNotContactEvent);
    }

    public function testAddDncForLeadForExistedContacts(): void
    {
        \$lead = new Lead();
        \$lead->setId(1);
        \$doNotContactEvent = new DoNotContactAddEvent(\$lead, 'email');

        \$this->doNotContact->expects(\$this->never())->method('createDncRecord');
        \$this->doNotContact->expects(\$this->once())->method('addDncForContact');

        \$this->doNotContactSubscriber->addDncForLead(\$doNotContactEvent);
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
        return "@bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/DoNotContactSubscriberTest.php");
    }
}
