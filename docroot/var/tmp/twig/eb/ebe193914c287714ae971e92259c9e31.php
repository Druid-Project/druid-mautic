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

/* @bundles/EmailBundle/Entity/EmailReply.php */
class __TwigTemplate_61efa53b0aafa5b2e4e526d4c5313bb1 extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Ramsey\\Uuid\\Uuid;

class EmailReply
{
    private string \$id;

    private \\DateTimeInterface \$dateReplied;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('email_stat_replies')
            ->setCustomRepositoryClass(EmailReplyRepository::class)
            ->addIndex(['stat_id', 'message_id'], 'email_replies')
            ->addIndex(['date_replied'], 'date_email_replied');

        \$builder->addUuid();

        \$builder->createManyToOne('stat', Stat::class)
            ->inversedBy('replies')
            ->addJoinColumn('stat_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('dateReplied', 'datetime')
            ->columnName('date_replied')
            ->build();

        \$builder->createField('messageId', 'string')
            ->columnName('message_id')
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('emailReply')
            ->addProperties(
                [
                    'uuid',
                    'dateReplied',
                    'messageId',
                ]
            )
            ->build();
    }

    /**
     * @param string \$messageId
     */
    public function __construct(
        private Stat \$stat,
        private \$messageId,
        \\DateTime \$dateReplied = null
    ) {
        \$this->id          = Uuid::uuid4()->toString();
        \$this->dateReplied = \$dateReplied ?? new \\DateTime();
    }

    public function getId(): string
    {
        return \$this->id;
    }

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->stat;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateReplied()
    {
        return \$this->dateReplied;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return \$this->messageId;
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
        return "@bundles/EmailBundle/Entity/EmailReply.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/EmailReply.php", "/app/docroot/app/bundles/EmailBundle/Entity/EmailReply.php");
    }
}
