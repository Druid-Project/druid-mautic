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

/* @bundles/WebhookBundle/Tests/Unit/Entity/WebhookTest.php */
class __TwigTemplate_f4512b037bc37c3cbbf7ebb1bb1b7702 extends Template
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

namespace Mautic\\WebhookBundle\\Tests\\Entity;

use Mautic\\WebhookBundle\\Entity\\Webhook;
use PHPUnit\\Framework\\Assert;

class WebhookTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testWasModifiedRecentlyWithNotModifiedWebhook(): void
    {
        \$webhook = new Webhook();
        \$this->assertNull(\$webhook->getDateModified());
        \$this->assertFalse(\$webhook->wasModifiedRecently());
    }

    public function testWasModifiedRecentlyWithWebhookModifiedAWhileBack(): void
    {
        \$webhook = new Webhook();
        \$webhook->setDateModified((new \\DateTime())->modify('-20 days'));
        \$this->assertFalse(\$webhook->wasModifiedRecently());
    }

    public function testWasModifiedRecentlyWithWebhookModifiedRecently(): void
    {
        \$webhook = new Webhook();
        \$webhook->setDateModified((new \\DateTime())->modify('-2 hours'));
        \$this->assertTrue(\$webhook->wasModifiedRecently());
    }

    public function testTriggersFromApiAreStoredAsEvents(): void
    {
        \$webhook  = new Webhook();
        \$triggers = [
            'mautic.company_post_save',
            'mautic.company_post_delete',
            'mautic.lead_channel_subscription_changed',
        ];

        \$webhook->setTriggers(\$triggers);

        \$events = \$webhook->getEvents();
        Assert::assertCount(3, \$events);

        foreach (\$events as \$key => \$event) {
            Assert::assertEquals(\$event->getEventType(), \$triggers[\$key]);
            Assert::assertSame(\$webhook, \$event->getWebhook());
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
        return "@bundles/WebhookBundle/Tests/Unit/Entity/WebhookTest.php";
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
        return new Source("", "@bundles/WebhookBundle/Tests/Unit/Entity/WebhookTest.php", "/app/docroot/app/bundles/WebhookBundle/Tests/Unit/Entity/WebhookTest.php");
    }
}
