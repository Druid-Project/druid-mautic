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

/* @bundles/CampaignBundle/Tests/Executioner/KickoffExecutionerTest.php */
class __TwigTemplate_ea90d2bd68539aea90127d9e72672bc3 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Executioner;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\KickoffContactFinder;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;
use Mautic\\CampaignBundle\\Executioner\\EventExecutioner;
use Mautic\\CampaignBundle\\Executioner\\KickoffExecutioner;
use Mautic\\CampaignBundle\\Executioner\\Result\\Counter;
use Mautic\\CampaignBundle\\Executioner\\Scheduler\\EventScheduler;
use Mautic\\CampaignBundle\\Executioner\\Scheduler\\Exception\\NotSchedulableException;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\NullLogger;
use Symfony\\Component\\Console\\Output\\BufferedOutput;

class KickoffExecutionerTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|KickoffContactFinder
     */
    private MockObject \$kickoffContactFinder;

    /**
     * @var MockObject|Translator
     */
    private MockObject \$translator;

    /**
     * @var MockObject|EventExecutioner
     */
    private MockObject \$executioner;

    /**
     * @var MockObject|EventScheduler
     */
    private MockObject \$scheduler;

    protected function setUp(): void
    {
        \$this->kickoffContactFinder = \$this->createMock(KickoffContactFinder::class);
        \$this->translator           = \$this->createMock(Translator::class);
        \$this->executioner          = \$this->createMock(EventExecutioner::class);
        \$this->scheduler            = \$this->createMock(EventScheduler::class);
    }

    public function testNoContactsResultInEmptyResults(): void
    {
        \$campaign = \$this->getMockBuilder(Campaign::class)
            ->getMock();
        \$campaign->expects(\$this->once())
            ->method('getRootEvents')
            ->willReturn(new ArrayCollection());

        \$limiter = new ContactLimiter(0, 0, 0, 0);

        \$counter = \$this->getExecutioner()->execute(\$campaign, \$limiter, new BufferedOutput());

        \$this->assertEquals(0, \$counter->getTotalEvaluated());
    }

    public function testEventsAreScheduledAndExecuted(): void
    {
        \$this->kickoffContactFinder->expects(\$this->once())
            ->method('getContactCount')
            ->willReturn(2);

        \$this->kickoffContactFinder->expects(\$this->exactly(3))
            ->method('getContacts')
            ->willReturnOnConsecutiveCalls(
                new ArrayCollection([3 => new Lead()]),
                new ArrayCollection([10 => new Lead()]),
                new ArrayCollection([])
            );

        \$event    = new Event();
        \$event2   = new Event();
        \$campaign = new class() extends Campaign {
            /**
             * @var ArrayCollection<int,Event>
             */
            public ArrayCollection \$rootEvents;

            /**
             * @return ArrayCollection<int,Event>
             */
            public function getRootEvents(): ArrayCollection
            {
                return \$this->rootEvents;
            }
        };
        \$campaign->rootEvents = new ArrayCollection([\$event, \$event2]);
        \$event->setCampaign(\$campaign);
        \$event2->setCampaign(\$campaign);

        \$limiter = new ContactLimiter(0, 0, 0, 0);

        \$this->scheduler->expects(\$this->exactly(4))
            ->method('getExecutionDateTime')
            ->willReturn(new \\DateTime());

        \$callbackCounter = 0;
        \$this->scheduler->expects(\$this->exactly(4))
            ->method('validateAndScheduleEventForContacts')
            ->willReturnCallback(
                function () use (&\$callbackCounter): void {
                    ++\$callbackCounter;
                    if (in_array(\$callbackCounter, [3, 4])) {
                        throw new NotSchedulableException();
                    }
                }
            );

        \$this->executioner->expects(\$this->exactly(1))
            ->method('executeEventsForContacts')
            ->withConsecutive(
                [
                    \$this->countOf(2),
                    \$this->isInstanceOf(ArrayCollection::class),
                    \$this->isInstanceOf(Counter::class),
                ],
                [
                    \$this->countOf(1),
                    \$this->isInstanceOf(ArrayCollection::class),
                    \$this->isInstanceOf(Counter::class),
                ]
            );

        \$counter = \$this->getExecutioner()->execute(\$campaign, \$limiter, new BufferedOutput());

        \$this->assertEquals(4, \$counter->getTotalEvaluated());
        \$this->assertEquals(2, \$counter->getTotalScheduled());
    }

    private function getExecutioner(): KickoffExecutioner
    {
        return new KickoffExecutioner(
            new NullLogger(),
            \$this->kickoffContactFinder,
            \$this->translator,
            \$this->executioner,
            \$this->scheduler
        );
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
        return "@bundles/CampaignBundle/Tests/Executioner/KickoffExecutionerTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Executioner/KickoffExecutionerTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Executioner/KickoffExecutionerTest.php");
    }
}
