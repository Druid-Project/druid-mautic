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

/* @bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php */
class __TwigTemplate_e7a146beae6324c97b6a805796c7b941 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Command;

use Mautic\\CampaignBundle\\Executioner\\InactiveExecutioner;
use Mautic\\CampaignBundle\\Executioner\\ScheduledExecutioner;

class ValidateEventCommandTest extends AbstractCampaignCommand
{
    public function testEventsAreExecutedForInactiveEventWithSingleContact(): void
    {
        \$this->testSymfonyCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-id' => 1]);

        // Wait 6 seconds then execute the campaign again to send scheduled events
        static::getContainer()->get(ScheduledExecutioner::class)->setNowTime(new \\DateTime('+'.self::CONDITION_SECONDS.' seconds'));
        \$this->testSymfonyCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-id' => 1]);

        // No open email decisions should be recorded yet
        \$byEvent = \$this->getCampaignEventLogs([3]);
        \$this->assertCount(0, \$byEvent[3]);

        // Wait 6 seconds to go beyond the inaction timeframe
        static::getContainer()->get(InactiveExecutioner::class)->setNowTime(new \\DateTime('+'.(self::CONDITION_SECONDS * 2).' seconds'));

        // Now they should be inactive
        \$this->testSymfonyCommand('mautic:campaigns:validate', ['--decision-id' => 3, '--contact-id' => 1]);

        \$byEvent = \$this->getCampaignEventLogs([3, 7, 10]);
        \$this->assertCount(1, \$byEvent[3]); // decision recorded
        \$this->assertCount(1, \$byEvent[7]); // inactive event executed
        \$this->assertCount(0, \$byEvent[10]); // the positive path should be 0
    }

    public function testEventsAreExecutedForInactiveEventWithMultipleContact(): void
    {
        \$this->testSymfonyCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // Wait 6 seconds then execute the campaign again to send scheduled events
        static::getContainer()->get(ScheduledExecutioner::class)->setNowTime(new \\DateTime('+'.self::CONDITION_SECONDS.' seconds'));
        \$this->testSymfonyCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // No open email decisions should be recorded yet
        \$byEvent = \$this->getCampaignEventLogs([3]);
        \$this->assertCount(0, \$byEvent[3]);

        // Wait 6 seconds to go beyond the inaction timeframe
        static::getContainer()->get(InactiveExecutioner::class)->setNowTime(new \\DateTime('+'.(self::CONDITION_SECONDS * 2).' seconds'));

        // Now they should be inactive
        \$this->testSymfonyCommand('mautic:campaigns:validate', ['--decision-id' => 3, '--contact-ids' => '1,2,3']);

        \$byEvent = \$this->getCampaignEventLogs([3, 7, 10]);
        \$this->assertCount(3, \$byEvent[3]); // decision recorded
        \$this->assertCount(3, \$byEvent[7]); // inactive event executed
        \$this->assertCount(0, \$byEvent[10]); // the positive path should be 0
    }

    public function testContactsRemovedFromTheCampaignAreNotExecutedForInactiveEvents(): void
    {
        \$this->testSymfonyCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // Wait 6 seconds then execute the campaign again to send scheduled events
        static::getContainer()->get(ScheduledExecutioner::class)->setNowTime(new \\DateTime('+'.self::CONDITION_SECONDS.' seconds'));
        \$this->testSymfonyCommand('mautic:campaigns:trigger', ['-i' => 1, '--contact-ids' => '1,2,3']);

        // No open email decisions should be recorded yet
        \$byEvent = \$this->getCampaignEventLogs([3]);
        \$this->assertCount(0, \$byEvent[3]);

        // Wait 6 seconds to go beyond the inaction timeframe
        static::getContainer()->get(InactiveExecutioner::class)->setNowTime(new \\DateTime('+'.(self::CONDITION_SECONDS * 2).' seconds'));

        // Remove a contact from the campaign
        \$this->db->createQueryBuilder()->update(MAUTIC_TABLE_PREFIX.'campaign_leads')
            ->set('manually_removed', 1)
            ->where('lead_id = 1')
            ->executeStatement();

        // Now they should be inactive
        \$this->testSymfonyCommand('mautic:campaigns:validate', ['--decision-id' => 3, '--contact-ids' => '1,2,3']);

        // Only two contacts should have been considered inactive because one was marked as manually removed
        \$byEvent = \$this->getCampaignEventLogs([3, 7, 10]);
        \$this->assertCount(2, \$byEvent[3]); // decision recorded
        \$this->assertCount(2, \$byEvent[7]); // inactive event executed
        \$this->assertCount(0, \$byEvent[10]); // the positive path should be 0
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
        return "@bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php", "/app/docroot/app/bundles/CampaignBundle/Tests/Command/ValidateEventCommandTest.php");
    }
}
