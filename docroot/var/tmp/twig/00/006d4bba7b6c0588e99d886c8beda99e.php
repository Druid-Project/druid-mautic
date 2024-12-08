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

/* @bundles/CampaignBundle/Tests/Command/CampaignDeleteEventLogsCommandFunctionalTest.php */
class __TwigTemplate_a2362fea5fd49ff019f4de2ada7d5772 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Command;

use Mautic\\CampaignBundle\\Command\\CampaignDeleteEventLogsCommand;
use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\Assert;
use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Tester\\ApplicationTester;

class CampaignDeleteEventLogsCommandFunctionalTest extends MauticMysqlTestCase
{
    public function testWithEventIds(): void
    {
        \$exitCode = \$this->createDataAndRunCommand(false);
        Assert::assertSame(0, \$exitCode);

        \$campaign = \$this->em->getRepository(Campaign::class)->findAll();
        Assert::assertCount(1, \$campaign);

        \$eventLogs = \$this->em->getRepository(LeadEventLog::class)->findAll();
        Assert::assertCount(0, \$eventLogs);
    }

    public function testWithCampaignId(): void
    {
        \$exitCode = \$this->createDataAndRunCommand(true);

        Assert::assertSame(0, \$exitCode);

        \$campaign = \$this->em->getRepository(Campaign::class)->findAll();
        Assert::assertCount(0, \$campaign);

        \$eventLogs = \$this->em->getRepository(LeadEventLog::class)->findAll();
        Assert::assertCount(0, \$eventLogs);
    }

    private function createApplicationTester(): ApplicationTester
    {
        \$application = new Application(self::\$kernel);
        \$application->setAutoExit(false);

        return new ApplicationTester(\$application);
    }

    private function createDataAndRunCommand(bool \$usingCampaign): int
    {
        \$applicationTester = \$this->createApplicationTester();
        \$lead              = \$this->createLead();
        \$campaign          = \$this->createCampaign();
        \$event1            = \$this->createEvent('Event 1', \$campaign);
        \$event2            = \$this->createEvent('Event 2', \$campaign);
        \$this->createEventLog(\$lead, \$event1);
        \$this->createEventLog(\$lead, \$event2);

        \$commandData = ['command' => CampaignDeleteEventLogsCommand::COMMAND_NAME];
        if (\$usingCampaign) {
            \$commandData['--campaign-id'] = \$campaign->getId();
        } else {
            \$commandData['campaign_event_ids'] = [\$event1->getId(), \$event2->getId()];
        }

        \$exitCode = \$applicationTester->run(\$commandData);

        return \$exitCode;
    }

    private function createLead(): Lead
    {
        \$lead = new Lead();
        \$lead->setFirstname('Test');
        \$this->em->persist(\$lead);
        \$this->em->flush();

        return \$lead;
    }

    private function createCampaign(): Campaign
    {
        \$campaign = new Campaign();
        \$campaign->setName('My campaign');
        \$this->em->persist(\$campaign);
        \$this->em->flush();

        return \$campaign;
    }

    private function createEvent(string \$name, Campaign \$campaign): Event
    {
        \$event = new Event();
        \$event->setName(\$name);
        \$event->setCampaign(\$campaign);
        \$event->setType('email.send');
        \$event->setEventType('action');
        \$this->em->persist(\$event);
        \$this->em->flush();

        return \$event;
    }

    private function createEventLog(Lead \$lead, Event \$event): LeadEventLog
    {
        \$leadEventLog = new LeadEventLog();
        \$leadEventLog->setLead(\$lead);
        \$leadEventLog->setEvent(\$event);
        \$this->em->persist(\$leadEventLog);
        \$this->em->flush();

        return \$leadEventLog;
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
        return "@bundles/CampaignBundle/Tests/Command/CampaignDeleteEventLogsCommandFunctionalTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Command/CampaignDeleteEventLogsCommandFunctionalTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Command/CampaignDeleteEventLogsCommandFunctionalTest.php");
    }
}
