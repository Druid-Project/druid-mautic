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

/* @bundles/WebhookBundle/Entity/Log.php */
class __TwigTemplate_f96744b97c00d7d2e30dc93dce8955f4 extends Template
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

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class Log
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Webhook
     */
    private \$webhook;

    /**
     * @var string
     */
    private \$statusCode;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    /**
     * @var float|null
     */
    private \$runtime;

    private ?string \$note = null;

    public static function loadMetadata(ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('webhook_logs')
            ->setCustomRepositoryClass(LogRepository::class)
            ->addIndex(['webhook_id', 'date_added'], 'webhook_id_date_added')
            ->addId();

        \$builder->createManyToOne('webhook', 'Webhook')
            ->inversedBy('logs')
            ->addJoinColumn('webhook_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('statusCode', Types::STRING)
            ->columnName('status_code')
            ->length(50)
            ->build();

        \$builder->addNullableField('dateAdded', Types::DATETIME_MUTABLE, 'date_added');
        \$builder->addNullableField('note', Types::STRING);
        \$builder->addNullableField('runtime', Types::FLOAT);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Webhook
     */
    public function getWebhook()
    {
        return \$this->webhook;
    }

    /**
     * @return Log
     */
    public function setWebhook(Webhook \$webhook)
    {
        \$this->webhook = \$webhook;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    /**
     * @param mixed \$statusCode
     *
     * @return Log
     */
    public function setStatusCode(\$statusCode)
    {
        \$this->statusCode = \$statusCode;

        return \$this;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @return Log
     */
    public function setDateAdded(\\DateTime \$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    public function getNote(): ?string
    {
        return \$this->note;
    }

    /**
     * Strips tags and keeps first 191 characters so it would fit in the varchar 191 limit.
     */
    public function setNote(?string \$note): self
    {
        \$this->note = \$note ? substr(strip_tags(iconv('UTF-8', 'UTF-8//IGNORE', \$note)), 0, 190) : \$note;

        return \$this;
    }

    /**
     * @return float
     */
    public function getRuntime()
    {
        return \$this->runtime;
    }

    /**
     * @param float \$runtime
     *
     * @return Log
     */
    public function setRuntime(\$runtime)
    {
        \$this->runtime = round(\$runtime, 2);

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
        return "@bundles/WebhookBundle/Entity/Log.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/Log.php", "/app/docroot/app/bundles/WebhookBundle/Entity/Log.php");
    }
}
