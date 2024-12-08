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

/* @bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php */
class __TwigTemplate_58f6fed5189a6643833ebb937c5e1bcb extends Template
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
use Mautic\\LeadBundle\\EventListener\\PointSubscriber;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PointBundle\\Entity\\TriggerEvent;
use Mautic\\PointBundle\\Entity\\TriggerEvent as TriggerEventEntity;
use Mautic\\PointBundle\\Event\\TriggerExecutedEvent;
use Mautic\\PointBundle\\PointEvents;
use PHPUnit\\Framework\\MockObject\\MockObject;

class PointSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var LeadModel|MockObject
     */
    private MockObject \$leadModel;

    private PointSubscriber \$subscriber;
    private MockObject \$triggerExecutedEvent;

    private MockObject \$triggerEventEntity;

    protected function setUp(): void
    {
        \$this->leadModel            = \$this->createMock(LeadModel::class);
        \$this->subscriber           = new PointSubscriber(\$this->leadModel);
        \$this->triggerExecutedEvent = \$this->createMock(TriggerExecutedEvent::class);
        \$this->triggerEventEntity   = \$this->createMock(TriggerEventEntity::class);

        \$this->triggerExecutedEvent
            ->method('getTriggerEvent')
            ->willReturn(\$this->triggerEventEntity);
    }

    public function testOnPointTriggerExecutedIfNotChangeTagsTyoe(): void
    {
        \$triggerEvent = new TriggerEvent();
        \$contact      = new Lead();
        \$triggerEvent->setType('unknown.type');

        \$this->leadModel->expects(\$this->never())
            ->method('modifyTags');

        \$this->subscriber->onTriggerExecute(new TriggerExecutedEvent(\$triggerEvent, \$contact));
    }

    public function testOnPointTriggerExecutedForChangeTagsTyoe(): void
    {
        \$triggerEvent = new TriggerEvent();
        \$contact      = new Lead();
        \$triggerEvent->setType('lead.changetags');
        \$triggerEvent->setProperties([
            'add_tags'    => ['tagA'],
            'remove_tags' => null,
        ]);

        \$this->leadModel->expects(\$this->once())
            ->method('modifyTags')
            ->with(\$contact, ['tagA'], []);

        \$this->subscriber->onTriggerExecute(new TriggerExecutedEvent(\$triggerEvent, \$contact));
    }

    public function testThatTheLeadIsAddedToTheSegmentOnTriggerOnLeadSegmentsChangeEvent(): void
    {
        \$this->triggerEventEntity
            ->method('getProperties')
            ->willReturn([
                'addToLists'      => 1,
                'removeFromLists' => null,
            ]);

        \$this->leadModel->expects(\$this->once())->method('addToLists');
        \$this->subscriber->onLeadSegmentsChange(\$this->triggerExecutedEvent);
    }

    public function testThatTheLeadIsRemovedFromTheSegmentOnTriggerOnLeadSegmentsChangeEvent(): void
    {
        \$this->triggerEventEntity
            ->method('getProperties')
            ->willReturn([
                'removeFromLists' => 1,
                'addToLists'      => null,
            ]);

        \$this->leadModel->expects(\$this->once())->method('removeFromLists');
        \$this->subscriber->onLeadSegmentsChange(\$this->triggerExecutedEvent);
    }

    public function testThatTheObserverForTriggerOnLeadSegmentsChangeEventIsFired(): void
    {
        \$subscribers = PointSubscriber::getSubscribedEvents();
        \$this->assertArrayHasKey(PointEvents::TRIGGER_ON_LEAD_SEGMENTS_CHANGE, \$subscribers);
        \$this->assertSame(['onLeadSegmentsChange', 0], \$subscribers[PointEvents::TRIGGER_ON_LEAD_SEGMENTS_CHANGE]);
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
        return "@bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/PointSubscriberTest.php");
    }
}
