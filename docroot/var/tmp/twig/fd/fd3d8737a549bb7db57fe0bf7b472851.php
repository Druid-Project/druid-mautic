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

/* @bundles/CampaignBundle/Tests/Entity/CampaignTest.php */
class __TwigTemplate_68aa64fa907521c04b4d3bc3fc51a804 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Entity;

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class CampaignTest extends TestCase
{
    public function testGetEventsByType(): void
    {
        \$campaign = \$this->addSomeEvents(new Campaign());

        Assert::assertCount(2, \$campaign->getEventsByType(Event::TYPE_DECISION));
        Assert::assertCount(1, \$campaign->getEventsByType(Event::TYPE_ACTION));
        Assert::assertCount(1, \$campaign->getEventsByType(Event::TYPE_CONDITION));
    }

    private function addSomeEvents(Campaign \$campaign): Campaign
    {
        \$decisionA = new EventFake(1);
        \$decisionA->setName('Decision A');
        \$decisionA->setEventType(Event::TYPE_DECISION);

        \$action = new EventFake(2);
        \$action->setName('Action A');
        \$action->setEventType(Event::TYPE_ACTION);

        \$condition = new EventFake(3);
        \$condition->setName('Condition A');
        \$condition->setEventType(Event::TYPE_CONDITION);

        \$decisionB = new EventFake(4);
        \$decisionB->setName('Decision B');
        \$decisionB->setEventType(Event::TYPE_DECISION);

        \$campaign->addEvent(\$decisionA->getId(), \$decisionA);
        \$campaign->addEvent(\$action->getId(), \$action);
        \$campaign->addEvent(\$condition->getId(), \$condition);
        \$campaign->addEvent(\$decisionB->getId(), \$decisionB);

        return \$campaign;
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
        return "@bundles/CampaignBundle/Tests/Entity/CampaignTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Entity/CampaignTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Entity/CampaignTest.php");
    }
}
