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

/* @bundles/ChannelBundle/Event/MessageQueueEvent.php */
class __TwigTemplate_38a0a550fda5de521d578028b0e58d40 extends Template
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

class MessageQueueEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(MessageQueue \$entity, \$isNew = false)
    {
        \$this->entity = \$entity;
        \$this->isNew  = \$isNew;
    }

    /**
     * @return MessageQueue
     */
    public function getMessageQueue()
    {
        return \$this->entity;
    }

    /**
     * @param MessageQueue \$entity
     */
    public function setMessageQueue(\$entity): void
    {
        \$this->entity = \$entity;
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
        return "@bundles/ChannelBundle/Event/MessageQueueEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueEvent.php", "/app/docroot/app/bundles/ChannelBundle/Event/MessageQueueEvent.php");
    }
}
