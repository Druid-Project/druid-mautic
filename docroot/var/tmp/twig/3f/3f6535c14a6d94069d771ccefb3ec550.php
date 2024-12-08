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

/* @bundles/ChannelBundle/Event/ChannelBroadcastEvent.php */
class __TwigTemplate_b9da568f13810cbc71d22ee42b4624cf extends Template
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

namespace Mautic\\ChannelBundle\\Event;

use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ChannelBroadcastEvent extends Event
{
    /**
     * Specific channel.
     *
     * @var null
     */
    protected \$channel;

    /**
     * Specific ID of a specific channel.
     *
     * @var null
     */
    protected \$id;

    /**
     * Number of contacts successfully processed and/or failed per channel.
     *
     * @var array
     */
    protected \$results = [];

    /**
     * Min contact ID filter can be used for process parallelization.
     *
     * @var int
     */
    private \$minContactIdFilter;

    /**
     * Max contact ID filter can be used for process parallelization.
     *
     * @var int
     */
    private \$maxContactIdFilter;

    /**
     * How many contacts to load from the database.
     */
    private int \$limit = 100;

    /**
     * How big batches to use to actually send.
     */
    private int \$batch = 50;

    private ?int \$maxThreads = null;

    private ?int \$threadId = null;

    public function __construct(
        \$channel,
        \$channelId,
        protected OutputInterface \$output
    ) {
        \$this->channel = \$channel;
        \$this->id      = \$channelId;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param string \$channelLabel
     * @param int    \$successCount
     * @param int    \$failedCount
     */
    public function setResults(\$channelLabel, \$successCount, \$failedCount = 0, array \$failedRecipientsByList = []): void
    {
        \$this->results[\$channelLabel] = [
            'success'                => (int) \$successCount,
            'failed'                 => (int) \$failedCount,
            'failedRecipientsByList' => \$failedRecipientsByList,
        ];
    }

    /**
     * @return array
     */
    public function getResults()
    {
        return \$this->results;
    }

    public function checkContext(\$channel): bool
    {
        if (\$this->channel && \$this->channel !== \$channel) {
            return false;
        }

        return true;
    }

    /**
     * @return OutputInterface
     */
    public function getOutput()
    {
        return \$this->output;
    }

    /**
     * @param int \$minContactIdFilter
     */
    public function setMinContactIdFilter(\$minContactIdFilter): void
    {
        \$this->minContactIdFilter = \$minContactIdFilter;
    }

    /**
     * @return int|null
     */
    public function getMinContactIdFilter()
    {
        return \$this->minContactIdFilter;
    }

    /**
     * @param int \$maxContactIdFilter
     */
    public function setMaxContactIdFilter(\$maxContactIdFilter): void
    {
        \$this->maxContactIdFilter = \$maxContactIdFilter;
    }

    /**
     * @return int|null
     */
    public function getMaxContactIdFilter()
    {
        return \$this->maxContactIdFilter;
    }

    /**
     * @param int \$limit
     */
    public function setLimit(\$limit): void
    {
        \$this->limit = \$limit;
    }

    public function getLimit(): int
    {
        return \$this->limit;
    }

    /**
     * @param int \$batch
     */
    public function setBatch(\$batch): void
    {
        \$this->batch = \$batch;
    }

    public function getBatch(): int
    {
        return \$this->batch;
    }

    public function getMaxThreads(): ?int
    {
        return \$this->maxThreads;
    }

    public function setMaxThreads(?int \$maxThreads): void
    {
        \$this->maxThreads = \$maxThreads;
    }

    public function getThreadId(): ?int
    {
        return \$this->threadId;
    }

    public function setThreadId(?int \$threadId): void
    {
        \$this->threadId = \$threadId;
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
        return "@bundles/ChannelBundle/Event/ChannelBroadcastEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/ChannelBroadcastEvent.php", "/app/docroot/app/bundles/ChannelBundle/Event/ChannelBroadcastEvent.php");
    }
}
