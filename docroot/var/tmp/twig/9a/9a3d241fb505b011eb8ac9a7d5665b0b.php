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

/* @bundles/ChannelBundle/Event/MessageQueueProcessEvent.php */
class __TwigTemplate_ae42beb372a03576775236320c1ea32d extends Template
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
use Mautic\\CoreBundle\\Event\\CommonEvent;

class MessageQueueProcessEvent extends CommonEvent
{
    public function __construct(MessageQueue \$entity)
    {
        \$this->entity = \$entity;
    }

    /**
     * @return MessageQueue
     */
    public function getMessageQueue()
    {
        return \$this->entity;
    }

    public function checkContext(\$channel): bool
    {
        return \$channel === \$this->entity->getChannel();
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
        return "@bundles/ChannelBundle/Event/MessageQueueProcessEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueProcessEvent.php", "/app/docroot/app/bundles/ChannelBundle/Event/MessageQueueProcessEvent.php");
    }
}
