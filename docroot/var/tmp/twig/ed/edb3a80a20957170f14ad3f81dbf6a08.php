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

/* @bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php */
class __TwigTemplate_7a71d1192731d2f9196f3c7941022d2c extends Template
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

use Mautic\\CampaignBundle\\Entity\\Campaign;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\ChannelBundle\\PreferenceBuilder\\ChannelPreferences;

class ChannelPreferencesTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testLogsAreOrganizedByPriority(): void
    {
        \$campaign = new Campaign();
        \$event    = new Event();
        \$event->setCampaign(\$campaign);

        \$channelPreferences = \$this->getChannelPreference('email', \$event);

        \$log1 = new LeadEventLog();
        \$log1->setEvent(\$event);
        \$log1->setCampaign(\$campaign);
        \$log1->setMetadata(['log' => 1]);
        \$channelPreferences->addLog(\$log1, 1);

        \$log2 = new LeadEventLog();
        \$log2->setEvent(\$event);
        \$log2->setCampaign(\$campaign);
        \$log2->setMetadata(['log' => 2]);
        \$channelPreferences->addLog(\$log2, 2);

        \$organized = \$channelPreferences->getLogsByPriority(1);
        \$this->assertEquals(\$organized->first()->getMetadata()['log'], 1);

        \$organized = \$channelPreferences->getLogsByPriority(2);
        \$this->assertEquals(\$organized->first()->getMetadata()['log'], 2);
    }

    /**
     * @return ChannelPreferences
     */
    private function getChannelPreference(\$channel, Event \$event)
    {
        return new ChannelPreferences(\$event);
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
        return "@bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php";
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
        return new Source("", "@bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php", "/app/docroot/app/bundles/ChannelBundle/Tests/PreferenceBuilder/ChannelPreferencesTest.php");
    }
}
