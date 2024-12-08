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

/* @bundles/LeadBundle/Tests/EventListener/WebhookSubscriberFunctionalTest.php */
class __TwigTemplate_58c021b4e54065ccb57f58319fe0a4da extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\WebhookBundle\\Entity\\Event;
use Mautic\\WebhookBundle\\Entity\\Webhook;
use Mautic\\WebhookBundle\\Entity\\WebhookQueue;
use Mautic\\WebhookBundle\\Entity\\WebhookQueueRepository;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use PHPUnit\\Framework\\Assert;

class WebhookSubscriberFunctionalTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->setUpSymfony(
            \$this->configParams +
            [
                'queue_mode' => WebhookModel::COMMAND_PROCESS,
            ]
        );
        \$this->truncateTables('leads', 'webhooks', 'webhook_queue', 'webhook_events');
    }

    public function testOnSegmentChange(): void
    {
        \$contactRepository = \$this->em->getRepository(Lead::class);
        \\assert(\$contactRepository instanceof LeadRepository);

        \$segmentModel = static::getContainer()->get('mautic.lead.model.list');
        \\assert(\$segmentModel instanceof ListModel);

        \$webhookQueueRepository = \$this->em->getRepository(WebhookQueue::class);
        \\assert(\$webhookQueueRepository instanceof WebhookQueueRepository);

        \$webhook = \$this->createWebhook();

        \$segment = new LeadList();
        \$segment->setName('Some segment');
        \$segmentModel->saveEntity(\$segment);

        \$contacts = [new Lead()];
        \$contactRepository->saveEntities(\$contacts);

        Assert::assertFalse(\$webhookQueueRepository->exists(\$webhook->getId()));

        \$segmentModel->addLead(\$contacts[0], \$segment);

        Assert::assertTrue(\$webhookQueueRepository->exists(\$webhook->getId()));

        \$queueWebhook   = \$webhookQueueRepository->getEntity(1);
        \$decodedPayload = json_decode(\$queueWebhook->getPayload(), true);
        Assert::assertEquals('added', \$decodedPayload['action']);
    }

    private function createWebhook(): Webhook
    {
        \$webhook = new Webhook();
        \$event   = new Event();

        \$event->setEventType('mautic.lead_list_change');
        \$event->setWebhook(\$webhook);

        \$webhook->addEvent(\$event);
        \$webhook->setName('Webhook from a functional test');
        \$webhook->setWebhookUrl('https:://whatever.url');
        \$webhook->setSecret('any_secret_will_do');
        \$webhook->isPublished(true);
        \$webhook->setCreatedBy(1);

        \$this->em->persist(\$event);
        \$this->em->persist(\$webhook);
        \$this->em->flush();

        return \$webhook;
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
        return "@bundles/LeadBundle/Tests/EventListener/WebhookSubscriberFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/WebhookSubscriberFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/WebhookSubscriberFunctionalTest.php");
    }
}
