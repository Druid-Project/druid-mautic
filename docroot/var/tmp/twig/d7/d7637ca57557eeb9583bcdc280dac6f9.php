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

/* @bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php */
class __TwigTemplate_f61032c9447deeee360d0103603b0432 extends Template
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

class ChannelPreferences
{
    /**
     * @var ArrayCollection[]
     */
    private array \$organizedByPriority = [];

    public function __construct(
        private Event \$event
    ) {
    }

    /**
     * @param int \$priority
     *
     * @return \$this
     */
    public function addPriority(\$priority)
    {
        \$priority = (int) \$priority;

        if (!isset(\$this->organizedByPriority[\$priority])) {
            \$this->organizedByPriority[\$priority] = new ArrayCollection();
        }

        return \$this;
    }

    /**
     * @param int \$priority
     *
     * @return \$this
     */
    public function addLog(LeadEventLog \$log, \$priority)
    {
        \$priority = (int) \$priority;

        \$this->addPriority(\$priority);

        // We have to clone the log to not affect the original assocaited with the MM event itself

        // Clone to remove from Doctrine's ORM memory since we're having to apply a pseudo event
        \$log = clone \$log;
        \$log->setEvent(\$this->event);

        \$this->organizedByPriority[\$priority]->set(\$log->getId(), \$log);

        return \$this;
    }

    /**
     * Removes a log from all prioritized groups.
     *
     * @return \$this
     */
    public function removeLog(LeadEventLog \$log)
    {
        foreach (\$this->organizedByPriority as \$logs) {
            /** @var ArrayCollection<int, LeadEventLog> \$logs */
            \$logs->remove(\$log->getId());
        }

        return \$this;
    }

    /**
     * @param int \$priority
     *
     * @return ArrayCollection|LeadEventLog[]
     */
    public function getLogsByPriority(\$priority)
    {
        \$priority = (int) \$priority;

        return \$this->organizedByPriority[\$priority] ?? new ArrayCollection();
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
        return "@bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php";
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
        return new Source("", "@bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php", "/app/docroot/app/bundles/ChannelBundle/PreferenceBuilder/ChannelPreferences.php");
    }
}
