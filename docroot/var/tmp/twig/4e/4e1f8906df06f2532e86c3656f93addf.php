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

/* @bundles/CampaignBundle/Tests/Event/PendingEventTest.php */
class __TwigTemplate_8b575ab53452330f21a2d4bda8d2dff7 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Event;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Event\\PendingEvent;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\ActionAccessor;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;

final class PendingEventTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testFailAndPassRemainingWithError(): void
    {
        \$event    = new Event();
        \$contact  = new Lead();
        \$logA     = new LeadEventLog();
        \$logB     = new LeadEventLog();
        \$interval = new \\DateInterval('PT10M');

        \$logA->setLead(\$contact); // Will fail.
        \$logB->setLead(\$contact); // Will pass with error.

        \$pendingEvent = new PendingEvent(new ActionAccessor([]), \$event, new ArrayCollection([\$logA, \$logB]));

        \$pendingEvent->fail(\$logA, 'reason A', \$interval);
        \$pendingEvent->passRemainingWithError('Error B');

        \$failedLogs  = \$pendingEvent->getFailures();
        \$successLogs = \$pendingEvent->getSuccessful();

        Assert::assertCount(1, \$failedLogs);
        Assert::assertCount(1, \$successLogs);
        Assert::AssertSame(\$logA, \$failedLogs->current());
        Assert::AssertSame(\$logB, \$successLogs->current());
        Assert::AssertSame(\$interval, \$logA->getRescheduleInterval());
        Assert::AssertSame(['failed' => 1, 'reason' => 'reason A'], \$logA->getMetadata());
        Assert::AssertSame(['failed' => 1, 'reason' => 'Error B'], \$logB->getMetadata());
        Assert::AssertNull(\$logB->getRescheduleInterval());
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
        return "@bundles/CampaignBundle/Tests/Event/PendingEventTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Event/PendingEventTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Event/PendingEventTest.php");
    }
}
