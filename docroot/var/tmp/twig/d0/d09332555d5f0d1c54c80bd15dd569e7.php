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

/* @bundles/LeadBundle/Tests/EventListener/DynamicContentSubscriberTest.php */
class __TwigTemplate_f16ba3ec2b7f825408ac868fbb79f612 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\DynamicContentBundle\\DynamicContentEvents;
use Mautic\\DynamicContentBundle\\Event\\ContactFiltersEvaluateEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Mautic\\LeadBundle\\EventListener\\DynamicContentSubscriber;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class DynamicContentSubscriberTest extends TestCase
{
    /**
     * @var LeadListRepository|MockObject
     */
    private \$segmentRepository;

    /**
     * @var DynamicContentSubscriber
     */
    private \$subscriber;

    protected function setUp(): void
    {
        \$this->segmentRepository = \$this->createMock(LeadListRepository::class);
        \$this->subscriber        = new DynamicContentSubscriber(\$this->segmentRepository);

        parent::setUp();
    }

    public function testGetSubscribedEvents(): void
    {
        self::assertSame(
            [
                DynamicContentEvents::ON_CONTACTS_FILTER_EVALUATE => ['onContactFilterEvaluate', 0],
            ],
            DynamicContentSubscriber::getSubscribedEvents()
        );
    }

    public function testOnContactFilterEvaluateUnknownOperator(): void
    {
        \$contactId = 1;
        \$filters   = [
            [
                'type'     => 'leadlist',
                'operator' => 'unknownFilter',
                'filter'   => null,
            ],
        ];
        \$contact = (new Lead())->setId(\$contactId);

        \$event = new ContactFiltersEvaluateEvent(\$filters, \$contact);

        \$this->expectException(\\InvalidArgumentException::class);

        \$this->subscriber->onContactFilterEvaluate(\$event);
    }

    public function testOnContactFilterEvaluateEmpty(): void
    {
        \$contactId = 1;
        \$filters   = [
            [
                'type'     => 'leadlist',
                'operator' => OperatorOptions::EMPTY,
                'filter'   => null,
            ],
        ];
        \$contact = (new Lead())->setId(\$contactId);

        \$event = new ContactFiltersEvaluateEvent(\$filters, \$contact);

        \$this->segmentRepository->expects(self::once())
            ->method('isNotContactInAnySegment')
            ->with(\$contactId)
            ->willReturn(true);

        \$this->subscriber->onContactFilterEvaluate(\$event);
        self::assertTrue(\$event->isEvaluated());
        self::assertTrue(\$event->isMatched());
    }

    public function testOnContactFilterEvaluateNotEmpty(): void
    {
        \$contactId = 1;
        \$filters   = [
            [
                'type'     => 'leadlist',
                'operator' => OperatorOptions::NOT_EMPTY,
                'filter'   => null,
            ],
        ];
        \$contact = (new Lead())->setId(\$contactId);

        \$event = new ContactFiltersEvaluateEvent(\$filters, \$contact);

        \$this->segmentRepository->expects(self::once())
            ->method('isContactInAnySegment')
            ->with(\$contactId)
            ->willReturn(true);

        \$this->subscriber->onContactFilterEvaluate(\$event);
        self::assertTrue(\$event->isEvaluated());
        self::assertTrue(\$event->isMatched());
    }

    public function testOnContactFilterEvaluateNotIn(): void
    {
        \$contactId = 1;
        \$filters   = [
            [
                'type'     => 'leadlist',
                'operator' => OperatorOptions::IN,
                'filter'   => ['something'],
            ],
        ];
        \$contact = (new Lead())->setId(\$contactId);

        \$event = new ContactFiltersEvaluateEvent(\$filters, \$contact);

        \$this->segmentRepository->expects(self::once())
            ->method('isContactInSegments')
            ->with(\$contactId, \$filters[0]['filter'])
            ->willReturn(true);

        \$this->subscriber->onContactFilterEvaluate(\$event);
        self::assertTrue(\$event->isEvaluated());
        self::assertTrue(\$event->isMatched());
    }

    public function testOnContactFilterEvaluateNotNotIn(): void
    {
        \$contactId = 1;
        \$filters   = [
            [
                'type'     => 'leadlist',
                'operator' => OperatorOptions::NOT_IN,
                'filter'   => ['something'],
            ],
        ];
        \$contact = (new Lead())->setId(\$contactId);

        \$event = new ContactFiltersEvaluateEvent(\$filters, \$contact);

        \$this->segmentRepository->expects(self::once())
            ->method('isNotContactInSegments')
            ->with(\$contactId, \$filters[0]['filter'])
            ->willReturn(true);

        \$this->subscriber->onContactFilterEvaluate(\$event);
        self::assertTrue(\$event->isEvaluated());
        self::assertTrue(\$event->isMatched());
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
        return "@bundles/LeadBundle/Tests/EventListener/DynamicContentSubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/DynamicContentSubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/DynamicContentSubscriberTest.php");
    }
}
