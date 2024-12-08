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

/* @bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php */
class __TwigTemplate_284d2c42fe9bbfb12d91ecf4e5bcbf55 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Event;

use Mautic\\LeadBundle\\Event\\LeadTimelineEvent;

class LeadTimelineEventTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @testdox Every event in the timeline should have a unique eventId so test that one is generated if the subscriber forgets
     *
     * @covers \\Mautic\\LeadBundle\\Event\\LeadTimelineEvent::addEvent
     * @covers \\Mautic\\LeadBundle\\Event\\LeadTimelineEvent::getEvents
     * @covers \\Mautic\\LeadBundle\\Event\\LeadTimelineEvent::generateEventId
     */
    public function testEventIdIsGeneratedIfNotSetBySubscriber(): void
    {
        \$payload = [
            [
                'event'      => 'foo',
                'eventLabel' => 'Foo',
                'eventType'  => 'foo',
                'timestamp'  => new \\DateTime(),
                'extra'      => [
                    'something' => 'something',
                ],
                'icon'      => 'ri-speed-up-line',
                'contactId' => 1,
            ],
            [
                'event'      => 'bar',
                'eventLabel' => 'Bar',
                'eventType'  => 'bar',
                'timestamp'  => new \\DateTime(),
                'extra'      => [
                    'something' => 'something else',
                ],
                'icon'      => 'ri-speed-up-line',
                'contactId' => 2,
            ],
            [
                'event'      => 'foobar',
                'eventId'    => 'foobar123',
                'eventLabel' => 'Foo Bar',
                'eventType'  => 'foobar',
                'timestamp'  => new \\DateTime(),
                'extra'      => [
                    'something' => 'something else',
                ],
                'icon'      => 'ri-speed-up-line',
                'contactId' => 2,
            ],
        ];

        \$event = new LeadTimelineEvent();

        foreach (\$payload as \$data) {
            \$event->addEvent(\$data);
        }

        \$events = \$event->getEvents();

        \$id1 = hash('crc32', json_encode(\$payload[0]), false);
        \$this->assertTrue(isset(\$events[0]['eventId']));
        \$this->assertEquals('foo'.\$id1, \$events[0]['eventId']);

        \$id2 = hash('crc32', json_encode(\$payload[1]), false);
        \$this->assertTrue(isset(\$events[1]['eventId']));
        \$this->assertEquals('bar'.\$id2, \$events[1]['eventId']);

        \$this->assertTrue(isset(\$events[2]['eventId']));
        \$this->assertEquals('foobar123', \$events[2]['eventId']);
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
        return "@bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Event/LeadTimelineEventTest.php");
    }
}
