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

/* @bundles/WebhookBundle/Entity/WebhookQueue.php */
class __TwigTemplate_7c974426d2c55e17dce56c4ffff65567 extends Template
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

namespace Mautic\\WebhookBundle\\Entity;

use Doctrine\\DBAL\\Platforms\\MySQLPlatform;
use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class WebhookQueue
{
    /**
     * @var int|null
     */
    private \$id;

    /**
     * @var Webhook
     */
    private \$webhook;

    /**
     * @var \\DateTimeInterface|null
     */
    private \$dateAdded;

    /**
     * @var string|null
     */
    private \$payload; // @phpstan-ignore-line (BC: plain payload is fetched by ORM)

    /**
     * @var string|resource|null
     */
    private \$payloadCompressed;

    /**
     * @var Event
     **/
    private \$event;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('webhook_queue')
            ->setCustomRepositoryClass(WebhookQueueRepository::class);
        \$builder->addId();
        \$builder->createManyToOne('webhook', 'Webhook')
            ->addJoinColumn('webhook_id', 'id', false, false, 'CASCADE')
            ->build();
        \$builder->addNullableField('dateAdded', Types::DATETIME_MUTABLE, 'date_added');
        \$builder->addNullableField('payload', Types::TEXT);
        \$builder->createField('payloadCompressed', Types::BLOB)
            ->columnName('payload_compressed')
            ->nullable()
            ->length(MySQLPlatform::LENGTH_LIMIT_MEDIUMBLOB)
            ->build();
        \$builder->createManyToOne('event', 'Event')
            ->inversedBy('queues')
            ->addJoinColumn('event_id', 'id', false, false, 'CASCADE')
            ->build();
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Webhook|null
     */
    public function getWebhook()
    {
        return \$this->webhook;
    }

    /**
     * @param Webhook|null \$webhook
     *
     * @return WebhookQueue
     */
    public function setWebhook(\$webhook)
    {
        \$this->webhook = \$webhook;

        return \$this;
    }

    /**
     * @return \\DateTimeInterface|null
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param \\DateTime|null \$dateAdded
     *
     * @return WebhookQueue
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getPayload()
    {
        if (null !== \$this->payload) {
            // BC: plain payload is fetched by ORM
            return \$this->payload;
        }

        if (null === \$this->payloadCompressed) {
            // no payload is set
            return null;
        }

        \$payloadCompressed = \$this->payloadCompressed;

        if (is_resource(\$payloadCompressed)) {
            // compressed payload is fetched by ORM
            \$payloadCompressed = stream_get_contents(\$this->payloadCompressed);
        }

        return gzuncompress(\$payloadCompressed);
    }

    /**
     * @param string \$payload
     *
     * @return WebhookQueue
     */
    public function setPayload(\$payload)
    {
        \$this->payloadCompressed = gzcompress(\$payload, 9);

        return \$this;
    }

    /**
     * @return Event|null
     */
    public function getEvent()
    {
        return \$this->event;
    }

    /**
     * @param Event|null \$event
     *
     * @return WebhookQueue
     */
    public function setEvent(\$event)
    {
        \$this->event = \$event;

        return \$this;
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
        return "@bundles/WebhookBundle/Entity/WebhookQueue.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/WebhookQueue.php", "/app/docroot/app/bundles/WebhookBundle/Entity/WebhookQueue.php");
    }
}
