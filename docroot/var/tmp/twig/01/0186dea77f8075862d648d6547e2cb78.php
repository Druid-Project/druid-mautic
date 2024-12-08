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

/* @bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php */
class __TwigTemplate_9ce823c5fdb77b33bad086ee53e5557d extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Membership;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Event\\CampaignLeadChangeEvent;
use Mautic\\CampaignBundle\\Membership\\Action\\Adder;
use Mautic\\CampaignBundle\\Membership\\EventDispatcher;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class EventDispatcherTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var EventDispatcherInterface|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$eventDispatcher;

    protected function setUp(): void
    {
        \$this->eventDispatcher = \$this->createMock(EventDispatcherInterface::class);
    }

    public function testLeadChangeEventDispatched(): void
    {
        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->isInstanceOf(CampaignLeadChangeEvent::class), CampaignEvents::CAMPAIGN_ON_LEADCHANGE);

        \$this->getDispatcher()->dispatchMembershipChange(new Lead(), new Campaign(), Adder::NAME);
    }

    public function testBatchChangeEventDispatched(): void
    {
        \$this->eventDispatcher->expects(\$this->once())
            ->method('dispatch')
            ->with(\$this->isInstanceOf(CampaignLeadChangeEvent::class), CampaignEvents::LEAD_CAMPAIGN_BATCH_CHANGE);

        \$this->getDispatcher()->dispatchBatchMembershipChange([new Lead()], new Campaign(), Adder::NAME);
    }

    private function getDispatcher()
    {
        return new EventDispatcher(\$this->eventDispatcher);
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
        return "@bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Membership/EventDispatcherTest.php");
    }
}
