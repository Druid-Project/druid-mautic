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

/* @bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php */
class __TwigTemplate_7542165371962e1c2ce9334e8fc3a7ff extends Template
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

use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Symfony\\Contracts\\EventDispatcher\\Event;

class MessageQueueBatchProcessEvent extends Event
{
    /**
     * @param MessageQueue[] \$messages
     */
    public function __construct(
        private array \$messages,
        private \$channel,
        private \$channelId
    ) {
    }

    public function checkContext(\$channel): bool
    {
        return \$channel === \$this->channel;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return \$this->messages;
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
    public function getChannelId()
    {
        return \$this->channelId;
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
        return "@bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php", "/app/docroot/app/bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php");
    }
}
