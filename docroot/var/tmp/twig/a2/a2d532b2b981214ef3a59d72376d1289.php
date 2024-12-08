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

/* @bundles/ChannelBundle/PreferenceBuilder/PreferenceBuilder.php */
class __TwigTemplate_3e2abc8dc8e26b892d04e7877cdb7cd2 extends Template
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

namespace Mautic\\ChannelBundle\\PreferenceBuilder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Psr\\Log\\LoggerInterface;

class PreferenceBuilder
{
    /**
     * @var ChannelPreferences[]
     */
    private array \$channels = [];

    public function __construct(
        ArrayCollection \$logs,
        private Event \$event,
        array \$channels,
        private LoggerInterface \$logger
    ) {
        \$this->buildRules(\$logs, \$channels);
    }

    /**
     * @return ChannelPreferences[]
     */
    public function getChannelPreferences()
    {
        return \$this->channels;
    }

    public function removeLogFromAllChannels(LeadEventLog \$log): void
    {
        foreach (\$this->channels as \$channelPreferences) {
            \$channelPreferences->removeLog(\$log);
        }
    }

    /**
     * @param string \$channel
     * @param int    \$priority
     */
    private function addChannelRule(\$channel, array \$rule, LeadEventLog \$log, \$priority): void
    {
        \$channelPreferences = \$this->getChannelPreferenceObject(\$channel, \$priority);

        if (DoNotContact::IS_CONTACTABLE !== \$rule['dnc']) {
            \$log->appendToMetadata(
                [
                    \$channel => [
                        'failed' => 1,
                        'dnc'    => \$rule['dnc'],
                    ],
                ]
            );

            return;
        }

        \$this->logger->debug(\"MARKETING MESSAGE: Set \$channel as priority \$priority for contact ID #\".\$log->getLead()->getId());

        \$channelPreferences->addLog(\$log, \$priority);
    }

    /**
     * @param string \$channel
     *
     * @return ChannelPreferences
     */
    private function getChannelPreferenceObject(\$channel, \$priority)
    {
        if (!isset(\$this->channels[\$channel])) {
            \$this->channels[\$channel] = new ChannelPreferences(\$this->event);
        }

        \$this->channels[\$channel]->addPriority(\$priority);

        return \$this->channels[\$channel];
    }

    private function buildRules(ArrayCollection \$logs, array \$channels): void
    {
        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$channelRules = \$log->getLead()->getChannelRules();
            \$allChannels  = \$channels;
            \$priority     = 1;

            // Build priority based on channel rules
            foreach (\$channelRules as \$channel => \$rule) {
                \$this->addChannelRule(\$channel, \$rule, \$log, \$priority);
                ++\$priority;
                unset(\$allChannels[\$channel]);
            }

            // Add the rest of the channels as least priority
            foreach (\$allChannels as \$channel => \$messageSettings) {
                \$this->addChannelRule(\$channel, ['dnc' => DoNotContact::IS_CONTACTABLE], \$log, \$priority);
                ++\$priority;
            }
        }
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
        return "@bundles/ChannelBundle/PreferenceBuilder/PreferenceBuilder.php";
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
        return new Source("", "@bundles/ChannelBundle/PreferenceBuilder/PreferenceBuilder.php", "/app/docroot/app/bundles/ChannelBundle/PreferenceBuilder/PreferenceBuilder.php");
    }
}
