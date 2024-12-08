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

/* @bundles/ChannelBundle/Tests/PreferenceBuilder/PreferenceBuilderTest.php */
class __TwigTemplate_917a3e2e16534ec088ff0dc11f940d27 extends Template
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

namespace Mautic\\ChannelBundle\\Tests\\PreferenceBuilder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\ChannelBundle\\PreferenceBuilder\\ChannelPreferences;
use Mautic\\ChannelBundle\\PreferenceBuilder\\PreferenceBuilder;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Entity\\Lead;
use Psr\\Log\\NullLogger;

class PreferenceBuilderTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testChannelsArePrioritized(): void
    {
        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->once())
            ->method('getChannelRules')
            ->willReturn(
                [
                    'sms' => [
                        'dnc' => DoNotContact::IS_CONTACTABLE,
                    ],
                    'email' => [
                        'dnc' => DoNotContact::IS_CONTACTABLE,
                    ],
                ]
            );

        \$log = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log->method('getLead')
            ->willReturn(\$lead);
        \$log->method('getId')
            ->willReturn(1);

        \$lead2 = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead2->expects(\$this->once())
            ->method('getChannelRules')
            ->willReturn(
                [
                    'email' => [
                        'dnc' => DoNotContact::IS_CONTACTABLE,
                    ],
                    'sms' => [
                        'dnc' => DoNotContact::UNSUBSCRIBED,
                    ],
                ]
            );

        \$log2 = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log2->method('getLead')
            ->willReturn(\$lead2);
        \$log2->method('getId')
            ->willReturn(2);

        \$logs = new ArrayCollection([\$log, \$log2]);

        \$event = new Event();

        \$builder = new PreferenceBuilder(\$logs, \$event, ['email' => [], 'sms' => [], 'push' => []], new NullLogger());

        \$preferences = \$builder->getChannelPreferences();

        \$this->assertCount(3, \$preferences);
        \$this->assertTrue(isset(\$preferences['email']));
        \$this->assertTrue(isset(\$preferences['sms']));
        \$this->assertTrue(isset(\$preferences['push']));

        /** @var ChannelPreferences \$emailLogs */
        \$email = \$preferences['email'];

        // First priority
        \$emailLogs = \$email->getLogsByPriority(1);
        \$this->assertCount(1, \$emailLogs);
        \$this->assertEquals(2, \$emailLogs->first()->getId());

        // Second priority
        \$emailLogs = \$email->getLogsByPriority(2);
        \$this->assertCount(1, \$emailLogs);
        \$this->assertEquals(1, \$emailLogs->first()->getId());

        // First priority for SMS which should just be one
        /** @var ChannelPreferences \$smsLogs */
        \$sms     = \$preferences['sms'];
        \$smsLogs = \$sms->getLogsByPriority(1);
        \$this->assertCount(1, \$smsLogs);
        \$this->assertEquals(1, \$smsLogs->first()->getId());

        // None for second priority because of DNC
        \$smsLogs = \$sms->getLogsByPriority(2);
        \$this->assertCount(0, \$smsLogs);

        // No one had push enabled but it should be defined
        \$push     = \$preferences['push'];
        \$pushLogs = \$push->getLogsByPriority(1);
        \$this->assertCount(0, \$pushLogs);
    }

    public function testLogIsRemovedFromAllChannels(): void
    {
        \$lead = \$this->getMockBuilder(Lead::class)
            ->getMock();
        \$lead->expects(\$this->once())
            ->method('getChannelRules')
            ->willReturn(
                [
                    'sms' => [
                        'dnc' => DoNotContact::IS_CONTACTABLE,
                    ],
                    'email' => [
                        'dnc' => DoNotContact::IS_CONTACTABLE,
                    ],
                ]
            );

        \$log = \$this->getMockBuilder(LeadEventLog::class)
            ->getMock();
        \$log->method('getLead')
            ->willReturn(\$lead);
        \$log->method('getId')
            ->willReturn(1);

        \$logs = new ArrayCollection([\$log]);

        \$event   = new Event();
        \$builder = new PreferenceBuilder(\$logs, \$event, ['email' => [], 'sms' => [], 'push' => []], new NullLogger());

        \$preferences = \$builder->getChannelPreferences();
        /** @var ChannelPreferences \$sms */
        \$sms     = \$preferences['sms'];
        \$smsLogs = \$sms->getLogsByPriority(1);
        \$this->assertCount(1, \$smsLogs);

        /** @var ChannelPreferences \$email */
        \$email     = \$preferences['email'];
        \$emailLogs = \$email->getLogsByPriority(2);
        \$this->assertCount(1, \$emailLogs);

        \$builder->removeLogFromAllChannels(\$log);

        \$preferences = \$builder->getChannelPreferences();
        /** @var ChannelPreferences \$sms */
        \$sms     = \$preferences['sms'];
        \$smsLogs = \$sms->getLogsByPriority(1);
        \$this->assertCount(0, \$smsLogs);

        /** @var ChannelPreferences \$email */
        \$email     = \$preferences['email'];
        \$emailLogs = \$email->getLogsByPriority(2);
        \$this->assertCount(0, \$emailLogs);
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
        return "@bundles/ChannelBundle/Tests/PreferenceBuilder/PreferenceBuilderTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/PreferenceBuilder/PreferenceBuilderTest.php", "/app/docroot/app/bundles/ChannelBundle/Tests/PreferenceBuilder/PreferenceBuilderTest.php");
    }
}
